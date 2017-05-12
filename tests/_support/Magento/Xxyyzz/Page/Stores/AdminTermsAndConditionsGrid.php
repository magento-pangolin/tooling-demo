<?php
namespace Magento\Xxyyzz\Page;

class AdminTermsAndConditionsGrid extends AbstractAdminGrid
{
    public static $idField           = '#agreementGrid_filter_agreement_id';
    public static $conditionField    = '#agreementGrid_filter_name';
    public static $storeViewDropDown = 'select[name="stores"]';
    public static $statusDropDown    = '#agreementGrid_filter_is_active';

    public function enterIdField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$idField, $value);
    }
    public function enterConditionField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$conditionField, $value);
    }
    public function selectStoreViewDropDown($value)
    {
        $I = $this->acceptanceTester;
        $I->selectOption(self::$storeViewDropDown, $value);
    }
    public function selectStatusDropDown($value)
    {
        $I = $this->acceptanceTester;
        $I->selectOption(self::$statusDropDown, $value);
    }
}