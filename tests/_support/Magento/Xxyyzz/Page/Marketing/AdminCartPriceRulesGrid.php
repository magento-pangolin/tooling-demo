<?php
namespace Magento\Xxyyzz\Page\Marketing;

use Magento\Xxyyzz\Page\AbstractAdminGrid;

class AdminCartPriceRulesGrid extends AbstractAdminGrid
{
    public static $idField         = '#promo_quote_grid_filter_rule_id';
    public static $ruleField       = '#promo_quote_grid_filter_name';
    public static $couponCodeField = '#promo_quote_grid_filter_coupon_code';
    public static $startFromField  = 'input[id^="promo_quote_grid_filter_from_date"][id$="_from"]';
    public static $startToField    = 'input[id^="promo_quote_grid_filter_from_date"][id$="_to"]';
    public static $endFromField    = 'input[id^="promo_quote_grid_filter_to_date"][id$="_from"]';
    public static $endToField      = 'input[id^="promo_quote_grid_filter_to_date"][id$="_to"]';
    public static $statusDropDown  = '#promo_quote_grid_filter_is_active';
    public static $webSiteDropDown = '#promo_quote_grid_filter_rule_website';
    public static $priorityField   = '#promo_quote_grid_filter_sort_order';

    public function enterIdField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$idField, $value);
    }

    public function enterRuleField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$ruleField, $value);
    }

    public function enterCouponCodeField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$couponCodeField, $value);
    }

    public function enterStartFromField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$startFromField, $value);
    }

    public function enterStartToField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$startToField, $value);
    }

    public function enterEndFromField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$endFromField, $value);
    }

    public function enterEndToField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$endToField, $value);
    }

    public function selectStatusDropDown($value)
    {
        $I = $this->acceptanceTester;
        $I->selectOption(self::$statusDropDown, $value);
    }

    public function selectWebSiteDropDown($value)
    {
        $I = $this->acceptanceTester;
        $I->selectOption(self::$webSiteDropDown, $value);
    }

    public function enterPriorityField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$priorityField, $value);
    }
}