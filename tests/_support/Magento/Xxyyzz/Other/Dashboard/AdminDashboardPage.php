<?php
namespace Magento\Xxyyzz\Page;

use Magento\Xxyyzz\Helper\AdminUrlList;

class AdminDashboardPage extends AbstractAdminPage
{
    public function goToTheAdminDashboardPage()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminDashboardPage);
        $I->waitForPageLoad();
    }

    public function shouldBeOnTheAdminDashboardPage()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminDashboardPage);
        self::verifyGlobalAdminPageTitle('Dashboard');
    }

    public static $dashboardReloadDataButton = '.action-primary[title="Refresh Data"]';

    public function clickOnTheDashboardReloadDataButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$dashboardReloadDataButton);
        $I->waitForPageLoad();
    }
}