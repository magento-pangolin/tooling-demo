<?php
namespace Magento\Xxyyzz\Page;

use Magento\Xxyyzz\Helper\AdminUrlList;

class AdminRefreshStatisticsGrid extends AbstractAdminGrid
{
    public function goToTheAdminRefreshStatisticsGrid()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminRefreshStatisticsGrid);
        $I->waitForPageLoad();
    }

    public function shouldBeOnTheAdminRefreshStatisticsGrid()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminRefreshStatisticsGrid);
        $I->see('Refresh Statistics', self::$globalPageTitle);
    }
}