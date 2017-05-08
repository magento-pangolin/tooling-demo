<?php
namespace Magento\Xxyyzz\Page;

use Magento\Xxyyzz\Helper\AdminUrlList;

class AdminOrdersReportGrid extends AbstractAdminPage
{
    public function goToTheAdminOrdersReportGrid()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminOrdersReportGrid);
        $I->waitForPageLoad();
    }

    public function shouldBeOnTheAdminOrdersReportGrid()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminOrdersReportGrid);
        self::verifyGlobalAdminPageTitle('Orders Report');
    }

    public function clickOnOrdersReportShowReportButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminShowReportButton);
        $I->waitForPageLoad();
    }
}