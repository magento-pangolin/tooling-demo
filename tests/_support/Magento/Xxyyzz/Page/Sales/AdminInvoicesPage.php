<?php
namespace Magento\Xxyyzz\Page\Sales;

use Magento\Xxyyzz\Helper\AdminUrlList;
use Magento\Xxyyzz\Page\AbstractAdminPage;

class AdminInvoicesPage extends AbstractAdminPage
{
    public function goToTheAdminInvoicesGrid()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminInvoicesGrid);
        $I->waitForPageLoad();
    }

    public function goToTheAdminAddInvoiceForOrderIdPage($orderId)
    {
        $I = $this->acceptanceTester;
        $I->amOnPage((AdminUrlList::$adminAddInvoiceForOrderIdPage . $orderId));
        $I->waitForPageLoad();
    }

    public function shouldBeOnTheAdminInvoicesGrid()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminInvoicesGrid);
        self::verifyGlobalAdminPageTitle('Invoices');
    }

    public function shouldBeOnTheAdminAddInvoiceForOrderIdPage($orderId)
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl((AdminUrlList::$adminAddInvoiceForOrderIdPage . $orderId));
        self::verifyGlobalAdminPageTitle('New Invoice');
    }

    public function clickOnInvoiceDetailsBackButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminBackButton);
    }

    public function clickOnInvoiceDetailsSendEmailButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminSendEmailButton);
    }

    public function clickOnInvoiceDetailsPrintButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminPrintButton);
    }
}