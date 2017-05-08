<?php
namespace Magento\Xxyyzz\Page;

use Magento\Xxyyzz\Helper\AdminUrlList;

class AdminOrderCountReportGrid extends AbstractAdminGrid
{
    public function goToTheAdminOrderCountReportGrid()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminOrderCountReportGrid);
        $I->waitForPageLoad();
    }

    public function shouldBeOnTheAdminOrderCountReportGrid()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminOrderCountReportGrid);
        $I->see('Order Count Report', self::$globalPageTitle);
    }
}