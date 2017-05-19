<?php
namespace Magento\Xxyyzz\Acceptance\SampleTests;

use Magento\Xxyyzz\Helper\AdminNavigation;

/**
 * @group skip
 */
class TestCest
{
    public function _before(AdminNavigation $I)
    {
        $I->goToTheAdminLoginPage();
        $I->loginAsAdmin();
    }
    
    /**
     * @env phantomjs
     * @env chrome
     * @group example
     *
     * @param AdminNavigation $I
     */
    public function accessTheSalesOrdersPage(AdminNavigation $I)
    {
        $I->goToTheAdminOrdersGrid();
        $I->shouldBeOnTheAdminOrdersGrid();
    }

    /**
     * @env phantomjs
     * @env chrome
     * @group example
     *
     * @param AdminNavigation $I
     */
    public function accessTheProductsCatalogPage(AdminNavigation $I)
    {
        $I->goToTheAdminCatalogGrid();
        $I->shouldBeOnTheAdminCatalogGrid();
    }
}
