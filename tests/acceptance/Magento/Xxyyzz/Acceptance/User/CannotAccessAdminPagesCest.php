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
 * Class CannotAccessAdminPagesCest
 *
 * Allure annotations
 * @Features({"Admin Login"})
 * @Stories({"Prevent access before Logging In"})
 *
 * Codeception annotations
 * @env chrome
 * @env firefox
 * @env phantomjs
 */
class CannotAccessAdminPagesCest
{
    /**
     * Allure annotations
     * @Title("You should NOT be able to access the Admin when not Logged In.")
     * @Description("Attempt to access an Admin page before Logging In.")
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
    public function shouldNotBeAbleToAccessAdminPagesWhenNotLoggedIn(AdminStep $adminStep, AdminLoginPage $I)
    {
        $I->goToTheAdminLoginPage();

        $adminStep->goToRandomAdminPage();
        $I->shouldBeOnTheAdminLoginPage();

        $adminStep->goToRandomAdminPage();
        $I->shouldBeOnTheAdminLoginPage();

        $adminStep->goToRandomAdminPage();
        $I->shouldBeOnTheAdminLoginPage();
    }
}
