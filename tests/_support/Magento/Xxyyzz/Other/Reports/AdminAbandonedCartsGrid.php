<?php
namespace Magento\Xxyyzz\Page;

use Magento\Xxyyzz\Helper\AdminUrlList;

class AdminAbandonedCartsGrid extends AbstractAdminGrid
{
    public function goToTheAdminAbandonedCartsGrid()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminAbandonedCartsGrid);
        $I->waitForPageLoad();
    }

    public function shouldBeOnTheAdminAbandonedCartsGrid()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminAbandonedCartsGrid);
        $I->see('Abandoned Carts', self::$globalPageTitle);
    }
}