<?php
namespace Magento\Xxyyzz\Page\Customers;

use Magento\Xxyyzz\Helper\AdminUrlList;
use Magento\Xxyyzz\Page\AbstractAdminGrid;

class AdminCustomersNowOnlineGrid extends AbstractAdminGrid
{
    public function goToTheAdminCustomersNowOnlineGrid()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminCustomersNowOnlineGrid);
        $I->waitForPageLoad();
    }

    public function shouldBeOnTheAdminCustomersNowOnlineGrid()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminCustomersNowOnlineGrid);
        $I->see('Customers Now Online', self::$globalPageTitle);
    }
}