<?php
namespace Magento\Xxyyzz\Page\Stores;

use Magento\Xxyyzz\Page\AbstractAdminGrid;

class AdminProductAttributesGrid extends AbstractAdminGrid
{
    public static $attributeCodeField             = '#attributeGrid_filter_attribute_code';
    public static $defaultLabelField              = '#attributeGrid_filter_frontend_label';
    public static $requiredDropDown               = '#attributeGrid_filter_is_required';
    public static $systemDropDown                 = '#attributeGrid_filter_is_user_defined';
    public static $visibleDropDown                = '#attributeGrid_filter_is_visible';
    public static $scopeDropDown                  = '#attributeGrid_filter_is_global';
    public static $searchableDropDown             = '#attributeGrid_filter_is_searchable';
    public static $useInLayeredNavigationDropDown = '#attributeGrid_filter_is_filterable';
    public static $comparableDropDown             = '#attributeGrid_filter_is_comparable';

    public function enterAttributeCodeField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$attributeCodeField, $value);
    }

    public function enterDefaultLabelField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$defaultLabelField, $value);
    }

    public function selectRequiredDropDown($value)
    {
        $I = $this->acceptanceTester;
        $I->selectOption(self::$requiredDropDown, $value);
    }

    public function selectSystemDropDown($value)
    {
        $I = $this->acceptanceTester;
        $I->selectOption(self::$systemDropDown, $value);
    }

    public function selectVisibleDropDown($value)
    {
        $I = $this->acceptanceTester;
        $I->selectOption(self::$visibleDropDown, $value);
    }

    public function selectScopeDropDown($value)
    {
        $I = $this->acceptanceTester;
        $I->selectOption(self::$scopeDropDown, $value);
    }

    public function selectSearchableDropDown($value)
    {
        $I = $this->acceptanceTester;
        $I->selectOption(self::$searchableDropDown, $value);
    }

    public function selectUseInLayeredNavigationDropDown($value)
    {
        $I = $this->acceptanceTester;
        $I->selectOption(self::$useInLayeredNavigationDropDown, $value);
    }

    public function selectComparableDropDown($value)
    {
        $I = $this->acceptanceTester;
        $I->selectOption(self::$comparableDropDown, $value);
    }
}