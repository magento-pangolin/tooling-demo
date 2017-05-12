<?php
namespace Magento\Xxyyzz\Page;

class AdminCustomVariablesGrid extends AbstractAdminGrid
{
    public static $variableIdField   = '#customVariablesGrid_filter_variable_id';
    public static $variableCodeField = '#customVariablesGrid_filter_code';
    public static $nameField         = '#customVariablesGrid_filter_name';

    public function enterVariableIdField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$variableIdField, $value);
    }

    public function enterVariableCodeField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$variableCodeField, $value);
    }

    public function enterNameField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$nameField, $value);
    }
}