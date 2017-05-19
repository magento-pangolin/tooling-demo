<?php
namespace Magento\Xxyyzz\Page\Sales;

use Magento\Xxyyzz\Helper\AdminUrlList;
use Magento\Xxyyzz\Page\AbstractAdminPage;

class AdminTransactionsPage extends AbstractAdminPage
{
    public function goToTheAdminTransactionsGrid()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminTransactionsGrid);
        $I->waitForPageLoad();
    }

    public function shouldBeOnTheAdminTransactionsGrid()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminTransactionsGrid);
        self::verifyGlobalAdminPageTitle('Transactions');
    }
}