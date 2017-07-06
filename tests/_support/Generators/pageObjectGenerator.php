<?php

function loadXmlFile($filename)
{
    $xml = simplexml_load_file($filename) or die("Error: Cannot create object");
    return $xml;
}

function loadAllXmlFiles()
{
    $files = glob("../../../tests/_support/Page/*/*Page.xml");

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

function printAllXmlFiles()
{
    $xml_files = loadAllXmlFiles();

    foreach ($xml_files as $xml)
    {
        print_r($xml);
    }
}

// Methods
function waitForPageLoad($xml)
{
    if (isset($xml['waitForPageLoad']) && $xml['waitForPageLoad'] == 'true')
    {
        $method = "\t\t" . '$I->waitForPageLoad();' . "\n";
        return $method;
    }
}

function generateClickMethod($xml)
{
    $method   = "";
    $name     = ucwords($xml['name']);
    $type     = ucwords($xml['type']);
    $selector = $xml['selector'];

    $method .= sprintf("\tpublic function click%s%s() {\n", $name, $type);
    $method .= "\t\t" . '$I = $this;' . "\n";
    $method .= sprintf("\t\t" . '$I->click(\'%s\');' . "\n", $selector);
    $method .= waitForPageLoad($xml);
    $method .= "\t}\n\n";

    return $method;
}

function generateEnterMethod($xml)
{
    $method   = "";

    $name     = ucwords($xml['name']);
    $type     = ucwords($xml['type']);
    $selector = $xml['selector'];
    $variable = '$' . $xml['variable'];

    $method .= sprintf("\tpublic function enter%s%s(%s) {\n", $name, $type, $variable);
    $method .= "\t\t" . '$I = $this;' . "\n";
    $method .= sprintf("\t\t" . '$I->fillField(\'%s\', %s);' . "\n", $selector, $variable);
    $method .= waitForPageLoad($xml);
    $method .= "\t}\n\n";

    return $method;
}

function generateGetValueMethod($xml)
{
    $method   = "";

    $name     = ucwords($xml['name']);
    $type     = ucwords($xml['type']);
    $selector = $xml['selector'];

    $method .= sprintf("\tpublic function getValue%s%s() {\n", $name, $type);
    $method .= "\t\t" . '$I = $this;' . "\n";
    $method .= sprintf("\t\t" . '$I->grabAttributeFrom(\'%s\', \'value\');' . "\n", $selector);
    $method .= waitForPageLoad($xml);
    $method .= "\t}\n\n";

    return $method;
}

function generateSelectMethod($xml)
{
    $method = "";

    $name     = ucwords($xml['name']);
    $type     = ucwords($xml['type']);
    $selector = $xml['selector'];
    $variable = '$' . $xml['variable'];

    $method .= sprintf("\tpublic function select%s%s(%s) {\n", $name, $type, $variable);
    $method .= "\t\t" . '$I = $this;' . "\n";
    $method .= sprintf("\t\t" . '$I->selectOption(\'%s\', %s);' . "\n", $selector, $variable);
    $method .= waitForPageLoad($xml);
    $method .= "\t}\n\n";

    return $method;
}

function generateCheckboxMethod($xml)
{
    $method = "";

    $name     = ucwords($xml['name']);
    $type     = ucwords($xml['type']);
    $selector = $xml['selector'];

    $method .= sprintf("\tpublic function check%s%s() {\n", $name, $type);
    $method .= "\t\t" . '$I = $this;' . "\n";
    $method .= sprintf("\t\t" . '$I->checkOption(\'%s\');' . "\n", $selector);
    $method .= waitForPageLoad($xml);
    $method .= "\t}\n\n";

    return $method;
}


// Asserts
function generateIsPresentMethod($xml)
{
    $method = "";

    $name     = ucwords($xml['name']);
    $type     = ucwords($xml['type']);
    $selector = $xml['selector'];

    $method .= sprintf("\tpublic function verify%s%sIsPresent() {\n", $name, $type);
    $method .= "\t\t" . '$I = $this;' . "\n";
    $method .= sprintf("\t\t" . '$I->seeElement(\'%s\');' . "\n", $selector);
    $method .= waitForPageLoad($xml);
    $method .= "\t}\n\n";

    return $method;
}

function generateIsEnabledMethod($xml)
{
    $method = "";
    return $method;
}

function generateIsDisabledMethod($xml)
{
    $method = "";
    return $method;
}

function generateContainsValueMethod($xml)
{
    $method = "";

    $name     = ucwords($xml['name']);
    $type     = ucwords($xml['type']);
    $selector = $xml['selector'];
    $variable = '$' . $xml['variable'];

    $method .= sprintf("\tpublic function verify%s%sContains(%s) {\n", $name, $type, $variable);
    $method .= "\t\t" . '$I = $this;' . "\n";
    $method .= sprintf("\t\t" . '$I->seeInField(\'%s\', %s);' . "\n", $selector, $variable);
    $method .= waitForPageLoad($xml);
    $method .= "\t}\n\n";

    return $method;
}

function generateIsSelectedMethod($xml)
{
    $method = "";

    $name     = ucwords($xml['name']);
    $type     = ucwords($xml['type']);
    $selector = $xml['selector'];
    $variable = '$' . $xml['variable'];

    $method .= sprintf("\tpublic function verify%s%sIsSelected(%s) {\n", $name, $type, $variable);
    $method .= "\t\t" . '$I = $this;' . "\n";
    $method .= sprintf("\t\t" . '$I->seeOptionIsSelected(\'%s\', %s);' . "\n", $selector, $variable);
    $method .= waitForPageLoad($xml);
    $method .= "\t}\n\n";

    return $method;
}

function generateIsCheckedMethod($xml)
{
    $method = "";

    $name     = ucwords($xml['name']);
    $type     = ucwords($xml['type']);
    $selector = $xml['selector'];

    $method .= sprintf("\tpublic function verify%s%sIsChecked() {\n", $name, $type);
    $method .= "\t\t" . '$I = $this;' . "\n";
    $method .= sprintf("\t\t" . '$I->seeCheckboxIsChecked(\'%s\');' . "\n", $selector);
    $method .= waitForPageLoad($xml);
    $method .= "\t}\n\n";

    return $method;
}

function generateIsNotCheckedMethod($xml)
{
    $method = "";

    $name     = ucwords($xml['name']);
    $type     = ucwords($xml['type']);
    $selector = $xml['selector'];

    $method .= sprintf("\tpublic function verify%s%sIsNotChecked() {\n", $name, $type);
    $method .= "\t\t" . '$I = $this;' . "\n";
    $method .= sprintf("\t\t" . '$I->dontSeeCheckboxIsChecked(\'%s\');' . "\n", $selector);
    $method .= waitForPageLoad($xml);
    $method .= "\t}\n\n";

    return $method;
}


function generateMethods($xml)
{
    $methods = "";

    foreach ($xml as $element)
    {
        $type = $element['type'];

        if ($type == 'region') {
            $methods .= generateClickMethod($element);
            $methods .= generateIsPresentMethod($element);
        } else if ($type == 'tab') {
            $methods .= generateClickMethod($element);
        } else if ($type == 'text' || $type == 'title') {
            $methods .= generateClickMethod($element);
            $methods .= generateIsPresentMethod($element);
        } else if ($type == 'image') {
            $methods .= generateClickMethod($element);
            $methods .= generateIsPresentMethod($element);
        } else if ($type == 'field' || $type == 'input' || $type == 'text-box') {
            $methods .= generateClickMethod($element);
            $methods .= generateEnterMethod($element);
            $methods .= generateGetValueMethod($element);
            $methods .= generateContainsValueMethod($element);
            $methods .= generateIsPresentMethod($element);
        } else if ($type == 'button') {
            $methods .= generateClickMethod($element);
            $methods .= generateIsPresentMethod($element);
        } else if ($type == 'link') {
            $methods .= generateClickMethod($element);
            $methods .= generateIsPresentMethod($element);
        } else if ($type == 'select' || $type == 'dropdown') {
            $methods .= generateClickMethod($element);
            $methods .= generateSelectMethod($element);
            $methods .= generateIsSelectedMethod($element);
            $methods .= generateIsPresentMethod($element);
        } else if ($type == 'checkbox') {
            $methods .= generateCheckboxMethod($element);
            $methods .= generateIsCheckedMethod($element);
            $methods .= generateIsNotCheckedMethod($element);
            $methods .= generateIsPresentMethod($element);
        } else if ($type == 'multi-checkbox') {
            // TODO: Add Multi-Checkbox methods
        } else if ($type == 'date-picker') {
            // TODO: Add Date Picker methods
        } else if ($type == 'file-uploader') {
            // TODO: Add File Uploader methods
        }
    }

//    ECHO $methods;

    return $methods;
}

function generatePageObject($xml)
{
    $class       = $xml[1]['page'];
    $pageObject  = "";

    $pageObject .= "<?php\n";

    if (isset($xml[1]['extends'])) {
        $pageObject .= sprintf("class %s extends %s\n", $class, $xml[1]['extends']);
    } else {
        $pageObject .= sprintf("class %s extends AcceptanceTester\n", $class);
    }

    $pageObject .= "{\n";
    $pageObject .= generateMethods($xml[1]);
    $pageObject .= "}";

    return $pageObject;
}

function assembleAllPageObjectFiles()
{
    $xml_files   = loadAllXmlFiles();
    $pageObjects = [];

    foreach ($xml_files as $xml)
    {
        $pageObject    = generatePageObject($xml);
        $name          = $xml[0];
        $pageObjects[] = [$pageObject, $name];
    }

    return $pageObjects;
}


function createPageObjectFile($pageObjectContent, $fileName)
{
    $myDir  = "../../../tests/_support/Page/_generated";
    $myFile = sprintf("%s/%s.php", $myDir, $fileName);

    if (!is_dir($myDir)) {
        mkdir($myDir, 0777, true);
    }

    $file = fopen($myFile, 'w') or die('Unable to open file!');
    fwrite($file, $pageObjectContent);
    fclose($file);
}

function createAllPageObjectFiles()
{
    $cests = assembleAllPageObjectFiles();

    foreach ($cests as $cest)
    {
        createPageObjectFile($cest[0], basename($cest[1], '.xml'));
    }
}


createAllPageObjectFiles();