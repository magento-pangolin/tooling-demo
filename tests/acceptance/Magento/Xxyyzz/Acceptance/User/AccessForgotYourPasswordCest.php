<?php
namespace Magento\Xxyyzz\Acceptance\User;

use Magento\Xxyyzz\Page\Backend\AdminLoginPage;
use Yandex\Allure\Adapter\Annotation\Features;
use Yandex\Allure\Adapter\Annotation\Stories;
use Yandex\Allure\Adapter\Annotation\Title;
use Yandex\Allure\Adapter\Annotation\Description;
use Yandex\Allure\Adapter\Annotation\Parameter;
use Yandex\Allure\Adapter\Annotation\Severity;
use Yandex\Allure\Adapter\Model\SeverityLevel;
use Yandex\Allure\Adapter\Annotation\TestCaseId;

/**
 * Class AccessForgotYourPasswordCest
 *
 * Allure annotations
 * @Features("Admin Login")
 * @Stories("Forgot Your Password")
 *
 * Codeception annotations
 * @env chrome
 * @env firefox
 * @env phantomjs
 */
class AccessForgotYourPasswordCest
{
    public function _before(AdminLoginPage $I)
    {
        $I->goToTheAdminLoginPage();
    }

    /**
     * Allure annotations
     * @Title("You should land on the Forgot Your Password page.")
     * @Description("You should be able to access the Forgot Your Password page.")
     * @Severity(level = SeverityLevel::TRIVIAL)
     * @TestCaseId("")
     * @Parameter(name = "AdminLoginPage", value = "$I")
     *
     * Codeception annotations
     * @param AdminLoginPage $I
     * @return void
     */
    public function shouldLandOnTheForgotYourPasswordPage(AdminLoginPage $I)
    {
        $I->clickOnForgotYourPassword();
        $I->shouldBeOnTheAdminForgotYourPasswordPage();
        $I->shouldSeeTheForgotYourPasswordFields();
    }

    /**
     * Allure annotations
     * @Title("You should be able to access the Login page from the Forgot Your Password page")
     * @Description("You should land on the Login page after clicking on 'Back to Sign In'.")
     * @Severity(level = SeverityLevel::TRIVIAL)
     * @TestCaseId("")
     * @Parameter(name = "AdminLoginPage", value = "$I")
     *
     * Codeception annotations
     * @param AdminLoginPage $I
     * @return void
     */
    public function shouldLandOnTheLoginPageWhenBackToSignInIsClicked(AdminLoginPage $I)
    {
        $I->clickOnForgotYourPassword();
        $I->clickOnBackToSignIn();
        $I->shouldBeOnTheAdminLoginPage();
    }

    /**
     * Allure annotations
     * @Title("You should be able to access the Login page from the Forgot Your Password page")
     * @Description("You should land on the Login page after clicking on the Logo.")
     * @Severity(level = SeverityLevel::TRIVIAL)
     * @TestCaseId("")
     * @Parameter(name = "AdminLoginPage", value = "$I")
     *
     * Codeception annotations
     * @param AdminLoginPage $I
     * @return void
     */
    public function shouldLandOnTheLoginPageWhenTheLogoIsClicked(AdminLoginPage $I)
    {
        $I->clickOnMagentoLogo();
        $I->shouldBeOnTheAdminLoginPage();

        $I->clickOnForgotYourPassword();
        $I->clickOnMagentoLogo();
        $I->shouldBeOnTheAdminLoginPage();
    }
}
