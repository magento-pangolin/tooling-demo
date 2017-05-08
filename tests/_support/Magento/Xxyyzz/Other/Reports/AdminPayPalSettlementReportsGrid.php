<?php
namespace Magento\Xxyyzz\Page;

use Magento\Xxyyzz\Helper\AdminUrlList;

class AdminPayPalSettlementReportsGrid extends AbstractAdminPage
{
    public function goToTheAdminPayPalSettlementReportsGrid()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminPayPalSettlementReportsGrid);
        $I->waitForPageLoad();
    }

    public function shouldBeOnTheAdminPayPalSettlementReportsGrid()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminPayPalSettlementReportsGrid);
        self::verifyGlobalAdminPageTitle('PayPalSettlement Reports');
    }

    public static $payPalSettlementReportsFetchUpdatesButton = '#fetch';

    public function clickOnPayPalSettlementReportsFetchUpdatesButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$payPalSettlementReportsFetchUpdatesButton);
        $I->waitForPageLoad();
    }
}