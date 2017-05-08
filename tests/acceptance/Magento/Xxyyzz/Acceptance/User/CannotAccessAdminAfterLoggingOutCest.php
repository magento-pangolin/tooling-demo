<?php
namespace Magento\Xxyyzz\Acceptance\User;

use Magento\Xxyyzz\Page\Backend\AdminLoginPage;
use Magento\Xxyyzz\Step\Backend\AdminStep;
use Yandex\Allure\Adapter\Annotation\Features;
use Yandex\Allure\Adapter\Annotation\Stories;
use Yandex\Allure\Adapter\Annotation\Title;
use Yandex\Allure\Adapter\Annotation\Description;
use Yandex\Allure\Adapter\Annotation\Parameter;
use Yandex\Allure\Adapter\Annotation\Severity;
use Yandex\Allure\Adapter\Model\SeverityLevel;
use Yandex\Allure\Adapter\Annotation\TestCaseId;

/**
 * Class CannotAccessAdminAfterLoggingOutCest
 *
 * Allure annotations
 * @Features({"Admin Login"})
 * @Stories({"Prevent access after Logging Out"})
 *
 * Codeception annotations
 * @env chrome
 * @env firefox
 * @env phantomjs
 */
class CannotAccessAdminAfterLoggingOutCest
{
    /**
     * Allure annotations
     * @Title("YOu should NOT be able to access an Admin page after your Logged Out.")
     * @Description("Attempt to access an Admin page after Logging Out.")
     * @Severity(level = SeverityLevel::CRITICAL)
     * @TestCaseId("")
     * @Parameter(name = "AdminStep", value = "$adminStep")
     * @Parameter(name = "AdminLoginPage", value = "$I")
     *
     * Codeception annotations
     * @param AdminStep $adminStep
     * @param AdminLoginPage $I
     * @return void
     */
    public function shouldNotBeAbleToAccessAdminAfterLogout(AdminStep $adminStep, AdminLoginPage $I)
    {
        $adminStep->loginAsAdmin();
        $I->goToTheAdminLogoutPage();

        $adminStep->goToRandomAdminPage();
        $I->shouldBeOnTheAdminLoginPage();

        $adminStep->goToRandomAdminPage();
        $I->shouldBeOnTheAdminLoginPage();

        $adminStep->goToRandomAdminPage();
        $I->shouldBeOnTheAdminLoginPage();
    }
}
