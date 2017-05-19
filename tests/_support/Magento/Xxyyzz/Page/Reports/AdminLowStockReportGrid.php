<?php
namespace Magento\Xxyyzz\Page\Reports;

use Magento\Xxyyzz\Helper\AdminUrlList;
use Magento\Xxyyzz\Page\AbstractAdminGrid;

class AdminLowStockReportGrid extends AbstractAdminGrid
{
    public function goToTheAdminLowStockReportGrid()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminLowStockReportGrid);
        $I->waitForPageLoad();
    }

    public function shouldBeOnTheAdminLowStockReportGrid()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminLowStockReportGrid);
        $I->see('Low Stock Report', self::$globalPageTitle);
    }

    public static $productField           = '#gridLowstock_filter_name';
    public static $skuField               = '#gridLowstock_filter_sku';
    public static $stockQuantityFromField = '#gridLowstock_filter_qty_from';
    public static $stockQuantityToField   = '#gridLowstock_filter_qty_to';

    public function enterProductField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$productField, $value);
    }
    public function enterSkuField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$skuField, $value);
    }
    public function enterStockQuantityFromField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$stockQuantityFromField, $value);
    }
    public function enterStockQuantityToField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$stockQuantityToField, $value);
    }
}