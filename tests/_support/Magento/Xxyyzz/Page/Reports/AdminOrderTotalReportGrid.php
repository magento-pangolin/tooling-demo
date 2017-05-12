<?php
namespace Magento\Xxyyzz\Page;

use Magento\Xxyyzz\Helper\AdminUrlList;

class AdminOrderTotalReportGrid extends AbstractAdminGrid
{
    public function goToTheAdminOrderTotalReportGrid()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminOrderTotalReportGrid);
        $I->waitForPageLoad();
    }

    public function shouldBeOnTheAdminOrderTotalReportGrid()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminOrderTotalReportGrid);
        $I->see('Order Total Report', self::$globalPageTitle);
    }
}