<?php
namespace Magento\Xxyyzz\Page\Reports;

use Magento\Xxyyzz\Helper\AdminUrlList;
use Magento\Xxyyzz\Page\AbstractAdminGrid;

class AdminProductsInCartGrid extends AbstractAdminGrid
{
    public function goToTheAdminProductsInCartGrid()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminProductsInCartGrid);
        $I->waitForPageLoad();
    }

    public function shouldBeOnTheAdminProductsInCartGrid()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminProductsInCartGrid);
        $I->see('Products in Carts', self::$globalPageTitle);
    }
}