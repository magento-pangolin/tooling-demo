<?php
namespace Magento\Xxyyzz\Page\System;

use Magento\Xxyyzz\Page\AbstractAdminGrid;

class AdminIntegrationsGrid extends AbstractAdminGrid
{
    public static $nameField      = '#integrationGrid_filter_name';
    public static $statusDropDown = '#integrationGrid_filter_status';

    public function enterNameField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$nameField, $value);
    }
    public function selectStatusDropDown($value)
    {
        $I = $this->acceptanceTester;
        $I->selectOption(self::$statusDropDown, $value);
    }
}