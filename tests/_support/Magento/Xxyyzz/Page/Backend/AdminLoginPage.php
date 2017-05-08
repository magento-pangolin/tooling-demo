<?php
namespace Magento\Xxyyzz\Page\Backend;

use Magento\Xxyyzz\Page\AbstractAdminPage;
use Magento\Xxyyzz\Helper\AdminUrlList;

class AdminLoginPage extends AbstractAdminPage
{
    public function goToTheAdminLoginPage()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminLoginPage);
        $I->waitForPageLoad();
    }

    public function goToTheAdminLogoutPage()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminLogoutPage);
        $I->waitForPageLoad();
    }

    public function shouldBeOnTheAdminLoginPage()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminLoginPage);
    }

    public function shouldBeOnTheAdminDashboardPage()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminDashboardPage);
        self::verifyGlobalAdminPageTitle('Dashboard');
    }

    public function shouldBeOnTheAdminForgotYourPasswordPage()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminForgotYourPasswordPage);
        $I->see('Password Help');
    }

    /**
     * Declare UI map for this page here. CSS or XPath allowed.
     */
    public static $mainArea           = '#adminhtml-auth-login .page-wrapper';
    public static $logoLink           = '.logo';
    public static $logoImage          = '.logo-img';
    public static $title              = '.admin__legend';
    public static $usernameTitle      = '.field-username label';
    public static $username           = '#username';
    public static $passwordTitle      = '.field-password label';
    public static $password           = '#login';
    public static $forgotYourPassword = '.action-forgotpassword';
    public static $signIn             = '.actions .action-primary';
    public static $copyRight          = '.login-footer';

    public static $forgotPasswordMain = '.adminhtml-auth-forgotpassword';
    public static $forgotPasswordText = '.admin__field-info';
    public static $emailAddressTitle  = '.field-email label';
    public static $emailAddress       = '#email';
    public static $retrievePassword   = '.actions .action-primary';
    public static $backToSignIn       = '.action-back';

    public function clickOnMagentoLogo()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$logoImage);
    }

    public function clickOnForgotYourPassword()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$forgotYourPassword);
    }

    public function clickOnSignIn()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$signIn);
    }

    public function enterTheUsername($username)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$username, $username);
    }

    public function enterThePassword($password)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$password, $password);
    }

    public function enterTheLoginCredentials($username, $password)
    {
        $this->enterTheUsername($username);
        $this->enterThePassword($password);
    }

    public function shouldSeeTheLoginPageFields()
    {
        $I = $this->acceptanceTester;
        $I->seeElement(self::$mainArea);
        $I->seeElement(self::$logoLink);
        $I->seeElement(self::$logoImage);
        $I->seeElement(self::$title);
        $I->seeElement(self::$usernameTitle);
        $I->seeElement(self::$username);
        $I->seeElement(self::$passwordTitle);
        $I->seeElement(self::$password);
        $I->seeElement(self::$forgotYourPassword);
        $I->seeElement(self::$signIn);
        $I->seeElement(self::$copyRight);
    }

    public function enterTheEmailAddress($emailAddress)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$emailAddress, $emailAddress);
    }

    public function clickOnRetrievePassword()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$retrievePassword);
    }

    public function clickOnBackToSignIn()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$backToSignIn);
    }

    public function shouldSeeTheForgotYourPasswordFields()
    {
        $I = $this->acceptanceTester;
        $I->seeElement(self::$forgotPasswordMain);
        $I->seeElement(self::$logoLink);
        $I->seeElement(self::$logoImage);
        $I->seeElement(self::$title);
        $I->seeElement(self::$emailAddressTitle);
        $I->seeElement(self::$emailAddress);
        $I->seeElement(self::$retrievePassword);
        $I->seeElement(self::$backToSignIn);
    }
}
