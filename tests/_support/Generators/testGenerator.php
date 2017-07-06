<?php

function loadXmlFile($filename)
{
    $xml = simplexml_load_file($filename) or die("Error: Cannot create object");
    return $xml;
}

function loadAllXmlFiles()
{
    $files = glob("../../../tests/acceptance/*/*Cest.xml");

    $xml_files = [];

    if (is_array($files)) {
        foreach($files as $filename) {
            $xml_files[] = [$filename, loadXmlFile($filename)];
        }
    }

    return $xml_files;
}

function printXmlFile($filename)
{
    $xml = loadXmlFile($filename);
    print_r($xml);
}

function generateUseStatements($xml)
{
    $use = "";

    foreach ($xml->use as $useStatement)
    {
        $use .= sprintf("use %s;\n", $useStatement['path']);
    }

    $allure = ['Yandex\Allure\Adapter\Annotation\Features;',
        'Yandex\Allure\Adapter\Annotation\Stories;',
        'Yandex\Allure\Adapter\Annotation\Title;',
        'Yandex\Allure\Adapter\Annotation\Description;',
        'Yandex\Allure\Adapter\Annotation\Parameter;',
        'Yandex\Allure\Adapter\Annotation\Severity;',
        'Yandex\Allure\Adapter\Model\SeverityLevel;',
        "Yandex\Allure\Adapter\Annotation\TestCaseId;\n"];

    foreach ($allure as $useElement)
    {
        $use .= sprintf("use %s\n", $useElement);
    }

    return $use;
}

function generateClassAnnotations($xml)
{
    $annotations  = "/**\n";

    foreach ($xml->annotations as $annotation)
    {
        if (isset($annotation->features)) {
            $annotations .= sprintf(" * @Features({\"%s\"})\n", $annotation->features[0]);
        }

        if (isset($annotation->stories)) {
            if ($annotation->stories->count() > 1) {
                $stories = "";
                for ($i = 0; $annotation->stories->count() > $i; $i++) {
                    $stories .= $annotation->stories;
//                    ECHO $stories;
                    if ($i + 1 != $annotation->stories->count()) {
                        $stories .= ", ";
                    }
                }
            } else {
                $annotations .= sprintf(" * @Stories({\"%s\"})\n", $annotation->stories[0]);
            }

//            ECHO $annotations;
        }

        if (isset($annotation->title)) {
            $annotations .= sprintf(" * @Title(\"%s\")\n", $annotation->title[0]);
        }

        if (isset($annotation->description)) {
            $annotations .= sprintf(" * @Description(\"%s\")\n", $annotation->description[0]);
        }

        if (isset($annotation->severity)) {
            $annotations .= sprintf(" * @Severity(level = SeverityLevel::%s)\n", $annotation->severity[0]);
        }

        if (isset($annotation->testCaseId)) {
            $annotations .= sprintf(" * @TestCaseId(\"%s\")\n", $annotation->testCaseId[0]);
        }

        if (isset($annotation->group)) {
            $annotations .= sprintf(" * @group %s\n", $annotation->group[0]);
        }

        if (isset($annotation->env)) {
            $annotations .= sprintf(" * @env %s\n", $annotation->env[0]);
        }

        if (isset($annotation->return)) {
            $annotations .= sprintf(" * @return %s\n", $annotation->return[0]);
        }
    }

    $annotations .= " */\n";

    return $annotations;
}


function generateDependencies($xml)
{
    $dependencies = "";

    if (isset($xml->dependency)) {
        if ($xml->dependency->count() <= 1) {
            return sprintf("%s $%s", $xml->dependency['type'], $xml->dependency[0]);
        } else {
            for ($i = 0; $i < $xml->dependency->count(); $i++) {
                $dependencies .= sprintf("%s $%s", $xml->dependency[$i]['type'], $xml->dependency[$i][0]);

                if ($i < $xml->dependency->count() - 1) {
                    $dependencies .= ", ";
                }
            }
        }
    }

    return $dependencies;
}

function generateSteps($xml)
{
    $testSteps = "";

    if (isset($xml->step)) {
        foreach ($xml->step as $test) {
            if ($test['variable']) {
                if (isset($test['parameter'])) {
                    $testSteps .= sprintf("\t\t$%s = $%s->%s('%s', \"%s\");\n", $test['variable'], $test['actor'], $test['function'], $test['selector'], $test['parameter']);
                } else if (isset($test['selector'])) {
                    $testSteps .= sprintf("\t\t$%s = $%s->%s('%s');\n", $test['variable'], $test['actor'], $test['function'], $test['selector']);
                } else {
                    $testSteps .= sprintf("\t\t$%s = $%s->%s();\n", $test['variable'], $test['actor'], $test['function']);
                }
            } else if ($test['selector']) {
                if (isset($test['parameter'])) {
                    $testSteps .= sprintf("\t\t$%s->%s('%s', \"%s\");\n", $test['actor'], $test['function'], $test['selector'], $test['parameter']);
                } else {
                    $testSteps .= sprintf("\t\t$%s->%s('%s');\n", $test['actor'], $test['function'], $test['selector']);
                }
            } else {
                if (isset($test['parameter'])) {
                    $testSteps .= sprintf("\t\t$%s->%s(%s);\n", $test['actor'], $test['function'], $test['parameter']);
                } else {
                    $testSteps .= sprintf("\t\t$%s->%s();\n", $test['actor'], $test['function']);
                }
            }
        }
    }

    return $testSteps;
}


function generateBefore($xml)
{
    $before = "";

    if (isset($xml->before)) {
        $dependencies = generateDependencies($xml->before);
        $steps = generateSteps($xml->before);

        $before .= sprintf("\t public function _before(%s)\n", $dependencies);
        $before .= "\t{\n";
        $before .= sprintf("%s", $steps);
        $before .= "\t}\n\n";
    }

    return $before;
}

function generateAfter($xml)
{
    $after = "";

    if (isset($xml->after)) {
        $dependencies = generateDependencies($xml->after);
        $steps = generateSteps($xml->after);

        $after .= sprintf("\t public function _after(%s)\n", $dependencies);
        $after .= "\t{\n";
        $after .= sprintf("%s", $steps);
        $after .= "\t}\n\n";
    }

    return $after;
}

function generateTestAnnotations($xml)
{
    $annotations  = "\t/**\n";
    foreach ($xml->annotations as $annotation)
    {
        if (isset($annotation->features)) {
            $annotations .= sprintf("\t * @Features({\"%s\"})\n", $annotation->features[0]);
        }

        if (isset($annotation->stories)) {
            $annotations .= sprintf("\t * @Stories({\"%s\"})\n", $annotation->stories[0]);
        }

        if (isset($annotation->title)) {
            $annotations .= sprintf("\t * @Title(\"%s\")\n", $annotation->title[0]);
        }

        if (isset($annotation->description)) {
            $annotations .= sprintf("\t * @Description(\"%s\")\n", $annotation->description[0]);
        }

        if (isset($annotation->severity)) {
            $annotations .= sprintf("\t * @Severity(level = SeverityLevel::%s)\n", $annotation->severity[0]);
        }

        if (isset($annotation->testCaseId)) {
            $annotations .= sprintf("\t * @TestCaseId(\"%s\")\n", $annotation->testCaseId[0]);
        }

        if (isset($annotation->group)) {
            $annotations .= sprintf("\t * @group %s\n", $annotation->group[0]);
        }

        if (isset($annotation->env)) {
            $annotations .= sprintf("\t * @env %s\n", $annotation->env[0]);
        }

        if (isset($annotation->return)) {
            $annotations .= sprintf("\t * @return %s\n", $annotation->return[0]);
        }
    }

    $annotations .= "\t */\n";

    return $annotations;
}

function generateTests($xml)
{
    $tests = "";
    foreach ($xml->test as $test)
    {
        $testAnnotations = generateTestAnnotations($test);
        $dependencies    = generateDependencies($test);
        $steps           = generateSteps($test);

        $tests          .= $testAnnotations;
        $tests          .= sprintf("\t public function %s(%s)\n", $test['name'], $dependencies);

        $tests          .= "\t{\n";
        $tests          .= $steps;
        $tests          .= "\t}\n";

        if ($xml->test->count() > 1) {
            $tests .= "\n";
        }
    }

    return $tests;
}

function assembleCest($xml)
{
    $filename         = $xml[0];
    $use              = generateUseStatements($xml[1]);
    $classAnnotations = generateClassAnnotations($xml[1]);
    $class            = basename($filename, '.xml');

    $before           = generateBefore($xml[1]);
    $after            = generateAfter($xml[1]);
    $tests            = generateTests($xml[1]);

    $cest  = "";
    $cest .= "<?php\n";
    $cest .= $use;
    $cest .= $classAnnotations;
    $cest .= sprintf("class %s\n", $class);
    $cest .= "{\n";
    $cest .= $before;
    $cest .= $after;
    $cest .= $tests;
    $cest .= "}\n";

    return $cest;
}

function assembleAllCestFiles()
{
    $xml_files = loadAllXmlFiles();
    $cests     = [];

    foreach ($xml_files as $xml)
    {
        $cest = assembleCest($xml);
        $name = $xml[0];
        $cests[] = [$cest, $name];
    }

    return $cests;
}


function createCestFile($cestContent, $fileName)
{
    $myDir  = "../../../tests/acceptance/_generated";
    $myFile = sprintf("%s/%s.php", $myDir, $fileName);

    if (!is_dir($myDir)) {
        mkdir($myDir, 0777, true);
    }

    $file = fopen($myFile, 'w') or die('Unable to open file!');
    fwrite($file, $cestContent);
    fclose($file);
}

function createAllCestFiles()
{
    $cests = assembleAllCestFiles();

    foreach ($cests as $cest)
    {
        createCestFile($cest[0], basename($cest[1], '.xml'));
    }
}

createAllCestFiles();