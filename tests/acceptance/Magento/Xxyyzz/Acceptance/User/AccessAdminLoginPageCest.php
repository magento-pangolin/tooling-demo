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
 * Class AccessAdminLoginPageCest
 *
 * Allure annotations
 * @Features({"Admin Login"})
 * @Stories({"Access Admin Login Page"})
 *
 * Codeception annotations
 * @env chrome
 * @env firefox
 * @env phantomjs
 */
class AccessAdminLoginPageCest
{
    /**
     * Allure annotations
     * @Title("You should be able to access the Admin Login Page")
     * @Description("You should land on the Admin Login Page when you attempt to access it.")
     * @Severity(level = SeverityLevel::CRITICAL)
     * @TestCaseId("")
     * @Parameter(name = "AdminLoginPage", value = "$I")
     *
     * Codeception annotations
     * @param AdminLoginPage $I
     * @return void
     */
    public function shouldBeAbleToAccessTheAdminLoginPage(AdminLoginPage $I)
    {
        $I->goToTheAdminLoginPage();
        $I->shouldBeOnTheAdminLoginPage();
    }
}
