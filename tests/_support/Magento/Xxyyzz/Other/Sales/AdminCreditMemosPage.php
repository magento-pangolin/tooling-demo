<?php
namespace Magento\Xxyyzz\Page;

use Magento\Xxyyzz\Helper\AdminUrlList;

class AdminCreditMemosPage extends AbstractAdminPage
{
    public function goToTheAdminCreditMemosGrid()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminCreditMemosGrid);
        $I->waitForPageLoad();
    }

    public function goToTheAdminCreditMemoForIdPage($creditMemoId)
    {
        $I = $this->acceptanceTester;
        $I->amOnPage((AdminUrlList::$adminCreditMemoForIdPage . $creditMemoId));
        $I->waitForPageLoad();
    }

    public function shouldBeOnTheAdminCreditMemosGrid()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminCreditMemosGrid);
        self::verifyGlobalAdminPageTitle('Credit Memos');
    }

    public function shouldBeOnTheAdminCreditMemoForIdPage($creditMemoId)
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl((AdminUrlList::$adminCreditMemoForIdPage . $creditMemoId));
        self::verifyGlobalAdminPageTitle('View Memo');
    }

    // No Credit Memos grid buttons or header.
    public function clickOnCreditMemoDetailsBackButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminBackButton);
    }
        
    public function clickOnCreditMemoDetailsSendEmailButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminSendEmailButton);
    }
        
    public function clickOnCreditMemoDetailsPrintButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminPrintButton);
    }
}