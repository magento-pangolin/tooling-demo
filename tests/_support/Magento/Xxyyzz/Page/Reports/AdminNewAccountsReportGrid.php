<?php
namespace Magento\Xxyyzz\Page\Reports;

use Magento\Xxyyzz\Helper\AdminUrlList;
use Magento\Xxyyzz\Page\AbstractAdminGrid;

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