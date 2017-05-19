<?php
namespace Magento\Xxyyzz\Page\Reports;

use Magento\Xxyyzz\Helper\AdminUrlList;
use Magento\Xxyyzz\Page\AbstractAdminPage;

class AdminInvoiceReportGrid extends AbstractAdminPage
{
    public function goToTheAdminInvoiceReportGrid()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminInvoiceReportGrid);
        $I->waitForPageLoad();
    }

    public function shouldBeOnTheAdminInvoiceReportGrid()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminInvoiceReportGrid);
        self::verifyGlobalAdminPageTitle('Invoice Report');
    }

    public function clickOnInvoiceReportShowReportButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminShowReportButton);
        $I->waitForPageLoad();
    }
}