<?php
namespace Magento\Xxyyzz\Page;

class AdminWidgetsGrid extends AbstractAdminGrid
{
    public static $widgetIdField       = '#widgetInstanceGrid_filter_instance_id';
    public static $widgetField         = '#widgetInstanceGrid_filter_title';
    public static $typeDropDown        = '#widgetInstanceGrid_filter_type';
    public static $designThemeDropDown = '#widgetInstanceGrid_filter_theme_id';
    public static $sortOrderField      = '#widgetInstanceGrid_filter_sort_order';

    public function enterWidgetIdField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$widgetIdField, $value);
    }

    public function enterWidgetField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$widgetField, $value);
    }

    public function selectTypeDropDown($value)
    {
        $I = $this->acceptanceTester;
        $I->selectOption(self::$typeDropDown, $value);
    }

    public function selectDesignThemeDropDown($value)
    {
        $I = $this->acceptanceTester;
        $I->selectOption(self::$designThemeDropDown, $value);
    }

    public function enterSortOrderField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$sortOrderField, $value);
    }
}