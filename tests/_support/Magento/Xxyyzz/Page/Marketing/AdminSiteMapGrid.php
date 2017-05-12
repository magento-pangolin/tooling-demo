<?php
namespace Magento\Xxyyzz\Page;

class AdminSiteMapGrid extends AbstractAdminGrid
{
    public static $idField                = '#sitemapGrid_filter_sitemap_id';
    public static $fileNameField          = '#sitemapGrid_filter_sitemap_filename';
    public static $pathField              = '#sitemapGrid_filter_sitemap_path';
    public static $linkForGoogleField     = '#sitemapGrid_filter_link';
    public static $lastGeneratedFromField = 'input[name="sitemap_time[from]"]';
    public static $lastGeneratedToField   = 'input[name="sitemap_time[to]"]';
    public static $storeViewDropDown      = 'select[name="store_id"]';

    public function enterIdField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$idField, $value);
    }

    public function enterFileNameField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$fileNameField, $value);
    }

    public function enterPathField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$pathField, $value);
    }

    public function enterLinkForGoogleField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$linkForGoogleField, $value);
    }

    public function enterLastGeneratedFromField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$lastGeneratedFromField, $value);
    }

    public function enterLastGeneratedToField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$lastGeneratedToField, $value);
    }

    public function selectStoreViewDropDown($value)
    {
        $I = $this->acceptanceTester;
        $I->selectOption(self::$storeViewDropDown, $value);
    }
}