<?php
namespace Magento\Xxyyzz\Page\Stores;

use Magento\Xxyyzz\Page\AbstractAdminGrid;

class AdminTaxRulesGrid extends AbstractAdminGrid
{
    public static $nameField                = '#taxRuleGrid_filter_code';
    public static $customerTaxClassDropDown = '#taxRuleGrid_filter_customer_tax_classes';
    public static $productTaxClassDropDown  = '#taxRuleGrid_filter_product_tax_classes';
    public static $taxRateDropDown          = '#taxRuleGrid_filter_tax_rates';
    public static $priorityField            = '#taxRuleGrid_filter_priority';
    public static $subTotalOnlyField        = '#taxRuleGrid_filter_calculate_subtotal';
    public static $sortOrderField           = '#taxRuleGrid_filter_position';

    public function enterNameField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$nameField, $value);
    }
    public function selectCustomerTaxClassDropDown($value)
    {
        $I = $this->acceptanceTester;
        $I->selectOption(self::$customerTaxClassDropDown, $value);
    }
    public function selectProductTaxClassDropDown($value)
    {
        $I = $this->acceptanceTester;
        $I->selectOption(self::$productTaxClassDropDown, $value);
    }
    public function selectTaxRateDropDown($value)
    {
        $I = $this->acceptanceTester;
        $I->selectOption(self::$taxRateDropDown, $value);
    }
    public function enterPriorityField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$priorityField, $value);
    }
    public function enterSubTotalOnlyField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$subTotalOnlyField, $value);
    }
    public function enterSortOrderField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$sortOrderField, $value);
    }
}