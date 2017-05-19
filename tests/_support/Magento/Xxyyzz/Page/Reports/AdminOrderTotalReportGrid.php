<?php
namespace Magento\Xxyyzz\Page\Reports;

use Magento\Xxyyzz\Helper\AdminUrlList;
use Magento\Xxyyzz\Page\AbstractAdminGrid;

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