<?php
namespace Magento\Xxyyzz\Acceptance\Backend;

use Magento\Xxyyzz\AcceptanceTester;
use Magento\Xxyyzz\Page\Backend\AdminSideNavigation;
use Yandex\Allure\Adapter\Annotation\Features;
use Yandex\Allure\Adapter\Annotation\Stories;
use Yandex\Allure\Adapter\Annotation\Title;
use Yandex\Allure\Adapter\Annotation\Description;
use Yandex\Allure\Adapter\Annotation\Parameter;
use Yandex\Allure\Adapter\Annotation\Severity;
use Yandex\Allure\Adapter\Model\SeverityLevel;
use Yandex\Allure\Adapter\Annotation\TestCaseId;

/**
 * Class OpenEachSideNavMenuCest
 *
 * Allure annotations
 * @Features({"Admin Nav Menu"})
 * @Stories({"Open each Admin Nav Menu"})
 *
 * Codeception annotations
 * @group admin_nav_menu
 * @group ui
 * @group slow
 * @group skip
 * @env chrome
 * @env firefox
 */
class OpenEachSideNavMenuCest
{
    public function _before(AcceptanceTester $I)
    {
        $I->loginAsAdmin();
    }

    /**
     * Allure annotations
     * @Title("Open each Admin Nav Menu")
     * @Description("Attempt to open each of the Admin Nav Menus and verify all of the proper menus are displayed.")
     * @Severity(level = SeverityLevel::CRITICAL)
     * @TestCaseId("")
     * @Parameter(name = "AdminSideNavigation", value = "$I")
     *
     * Codeception annotations
     * @param AdminSideNavigation $I
     * @return void
     */
    public function shouldBeAbleToOpenEachSideNavMenu(AdminSideNavigation $I)
    {
        $I->clickOnSalesInTheSideNavMenu();
        $I->shouldSeeTheSalesNavMenu();

        $I->clickOnProductsInTheSideNavMenu();
        $I->shouldSeeTheProductNavMenu();

        $I->clickOnCustomersInTheSideNavMenu();
        $I->shouldSeeTheCustomersNavMenu();

        $I->clickOnMarketingInTheSideNavMenu();
        $I->shouldSeeTheMarketingNavMenu();

        $I->clickOnContentInTheSideNavMenu();
        $I->shouldSeeTheContentNavMenu();

        $I->clickOnReportsInTheSideNavMenu();
        $I->shouldSeeTheReportsNavMenu();

        $I->clickOnStoresInTheSideNavMenu();
        $I->shouldSeeTheStoresNavMenu();

        $I->clickOnSystemInTheSideNavMenu();
        $I->shouldSeeTheSystemNavMenu();
    }
}
