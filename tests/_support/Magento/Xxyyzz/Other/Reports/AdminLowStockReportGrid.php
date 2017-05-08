<?php
namespace Magento\Xxyyzz\Page;

use Magento\Xxyyzz\Helper\AdminUrlList;

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
}