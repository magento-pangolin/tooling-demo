<?php
namespace Magento\Xxyyzz\Page;

use Magento\Xxyyzz\Helper\AdminUrlList;

class AdminTaxReportGrid extends AbstractAdminPage
{
    public function goToTheAdminTaxReportGrid()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminTaxReportGrid);
        $I->waitForPageLoad();
    }

    public function shouldBeOnTheAdminTaxReportGrid()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminTaxReportGrid);
        self::verifyGlobalAdminPageTitle('Tax Report');
    }

    public function clickOnTaxReportShowReportButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminShowReportButton);
        $I->waitForPageLoad();
    }
}