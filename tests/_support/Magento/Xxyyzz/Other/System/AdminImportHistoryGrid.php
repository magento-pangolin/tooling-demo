<?php
namespace Magento\Xxyyzz\Page;

class AdminImportHistoryGrid extends AbstractAdminGrid
{
    public static $idField                   = '#importHistoryGrid_filter_history_id';
    public static $startDateAndTimeFromField = 'input[name="started_at[from]"]';
    public static $startDateAndTimeToField   = 'input[name="started_at[to]"]';
    public static $userField                 = '#importHistoryGrid_filter_username';

    public function enterIdField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$idField, $value);
    }

    public function enterStartDateAndTimeFromField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$startDateAndTimeFromField, $value);
    }

    public function enterStartDateAndTimeToField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$startDateAndTimeToField, $value);
    }

    public function enterUserField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$userField, $value);
    }
}