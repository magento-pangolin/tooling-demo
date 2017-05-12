<?php
namespace Magento\Xxyyzz\Page;

use Magento\Xxyyzz\Helper\AdminUrlList;

class AdminDownloadsReportGrid extends AbstractAdminGrid
{
    public function goToTheAdminAddDownloadableProductPage()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminAddDownloadableProductPage);
        $I->waitForPageLoad();
    }

    public function shouldBeOnTheAdminDownloadsReportGrid()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminDownloadsReportGrid);
        $I->see('Downloads Report', self::$globalPageTitle);
    }

    public static $productField = '#downloadsGrid_filter_name';
    public static $linkField    = '#downloadsGrid_filter_link_title';
    public static $skuField     = '#downloadsGrid_filter_sku';

    public function enterProductField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$productField, $value);
    }

    public function enterLinkField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$linkField, $value);
    }

    public function enterSkuField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$skuField, $value);
    }
}