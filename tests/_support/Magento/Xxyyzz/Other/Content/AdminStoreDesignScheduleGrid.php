<?php
namespace Magento\Xxyyzz\Page;

class AdminStoreDesignScheduleGrid extends AbstractAdminGrid
{
    public static $storeDropDown     = 'select[name="store_id"]';
    public static $designDropDown    = '#designGrid_filter_package';
    public static $dateFromFromField = 'input[name="date_from[from]"]';
    public static $dateFromToField   = 'input[name="date_from[to]"]';
    public static $dateToFromField   = 'input[name="date_to[from]"]';
    public static $dateToToField     = 'input[name="date_to[from]"]';

    public function selectStoreDropDown($value)
    {
        $I = $this->acceptanceTester;
        $I->selectOption(self::$storeDropDown, $value);
    }

    public function selectDesignDropDown($value)
    {
        $I = $this->acceptanceTester;
        $I->selectOption(self::$designDropDown, $value);
    }

    public function enterDateFromFromField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$dateFromFromField, $value);
    }

    public function enterDateFromToField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$dateFromToField, $value);
    }

    public function enterDateToFromField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$dateToFromField, $value);
    }

    public function enterDateToToField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$dateToToField, $value);
    }
}