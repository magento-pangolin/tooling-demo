<?php
namespace Magento\Xxyyzz\Page\Stores;

use Magento\Xxyyzz\Page\AbstractAdminGrid;

class AdminCustomerGroupsGrid extends AbstractAdminGrid
{
    public static $idField       = '#customerGroupGrid_filter_time';
    public static $groupField    = '#customerGroupGrid_filter_type';
    public static $taxClassField = '#customerGroupGrid_filter_class_name';

    public function enterIdField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$idField, $value);
    }

    public function enterGroupField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$groupField, $value);
    }

    public function enterTaxClassField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$taxClassField, $value);
    }
}