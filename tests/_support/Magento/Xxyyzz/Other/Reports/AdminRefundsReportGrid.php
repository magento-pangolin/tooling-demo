<?php
namespace Magento\Xxyyzz\Page;

use Magento\Xxyyzz\Helper\AdminUrlList;

class AdminRefundsReportGrid extends AbstractAdminPage
{
    public function goToTheAdminRefundsReportGrid()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminRefundsReportGrid);
        $I->waitForPageLoad();
    }

    public function shouldBeOnTheAdminRefundsReportGrid()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminRefundsReportGrid);
        self::verifyGlobalAdminPageTitle('Refunds Report');
    }

    public function clickOnRefundsReportShowReportButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminShowReportButton);
        $I->waitForPageLoad();
    }
}