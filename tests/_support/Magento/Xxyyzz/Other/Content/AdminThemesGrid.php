<?php
namespace Magento\Xxyyzz\Page;

class AdminThemesGrid extends AbstractAdminGrid
{
    public static $themeTitleField  = '#theme_grid_filter_theme_title';
    public static $parentThemeField = '#theme_grid_filter_parent_theme_title';
    public static $themePathField   = '#theme_grid_filter_theme_path';

    public function enterThemeTitleField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$themeTitleField, $value);
    }
    public function enterParentThemeField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$parentThemeField, $value);
    }
    public function enterThemePathField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$themePathField, $value);
    }
}