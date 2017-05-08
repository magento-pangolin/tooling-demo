<?php
namespace Magento\Xxyyzz\Page;

use Magento\Xxyyzz\Helper\AdminUrlList;

class AdminNewAccountsReportGrid extends AbstractAdminGrid
{
    public function goToTheAdminNewAccountsReportGrid()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminNewAccountsReportGrid);
        $I->waitForPageLoad();
    }

    public function shouldBeOnTheAdminNewAccountsReportGrid()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminNewAccountsReportGrid);
        $I->see('New Accounts Report', self::$globalPageTitle);
    }
}