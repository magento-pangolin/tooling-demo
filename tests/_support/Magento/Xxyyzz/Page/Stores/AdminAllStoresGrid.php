<?php
namespace Magento\Xxyyzz\Page;

class AdminAllStoresGrid extends AbstractAdminGrid
{
    public static $webSiteField   = '#storeGrid_filter_website_title';
    public static $storeField     = '#storeGrid_filter_group_title';
    public static $storeViewField = '#storeGrid_filter_store_title';

    public function enterWebSiteField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$webSiteField, $value);
    }
    public function enterStoreField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$storeField, $value);
    }
    public function enterStoreViewField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$storeViewField, $value);
    }
}