<?php
namespace Magento\Xxyyzz\Page;

use Magento\Xxyyzz\Helper\AdminUrlList;

class AdminOrderedProductsReportGrid extends AbstractAdminGrid
{
    public function goToTheAdminOrderedProductsReportGrid()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminOrderedProductsReportGrid);
        $I->waitForPageLoad();
    }

    public function shouldBeOnTheAdminOrderedProductsGrid()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminOrderedProductsReportGrid);
        $I->see('Ordered Products Report', self::$globalPageTitle);
    }
}