<?php
namespace Magento\Xxyyzz\Page\Storefront\Luma;

use Magento\Xxyyzz\Page\AbstractFrontendPage;

class CustomerAccountDashboardPage extends AbstractFrontendPage
{
    /**
     * Include url of current page.
     */
    public static $URL = '/customer/account/';

    /**
     * Declare UI map for customer account dashboard page.
     */
    public static $contactInformationText          = '.box.box-information p';
    public static $contactInformationEditLink      = '.box.box-information .action.edit>span';
    public static $contactInformationForgotPwdLink = '.box.box-information .action.change-password';

    public static $newsletterText                  = '.box.box-newsletter p';
    public static $newsletterEditLink              = '.box.box-newsletter .action.edit>span';

    protected $contactInformationName;
    protected $contactInformationEmail;

    public function amOnCustomerAccountDashboardPage()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(self::$URL);
        $I->waitForPageLoad();
        $this->setCustomerContactInformation();
    }

    public function seeContactInformationName($name)
    {
        $this->setCustomerContactInformation();
        $I = $this->acceptanceTester;
        $I->assertEquals($name, $this->contactInformationName);
    }

    public function seeContactInformationEmail($email)
    {
        $this->setCustomerContactInformation();
        $I = $this->acceptanceTester;
        $I->assertEquals($email, $this->contactInformationEmail);
    }

    public function seeNewsletterText($text)
    {
        $I = $this->acceptanceTester;
        $I->see($text, self::$newsletterText);
    }

    public function clickContactInformationEditLink()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$contactInformationEditLink);
        $I->waitForPageLoad();
        $I->seeInCurrentUrl('customer/account/edit');
    }

    public function clickContactInformationForgotPasswordLink()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$contactInformationForgotPwdLink);
        $I->waitForPageLoad();
        $I->seeInCurrentUrl('customer/account/edit/changepass');
    }

    public function clickNewsletterEditLink()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$newsletterEditLink);
        $I->waitForPageLoad();
        $I->seeInCurrentUrl('newsletter/manage');
    }

    private function setCustomerContactInformation()
    {
        if(!isset($this->contactInformationName) || !isset($this->contactInformationEmail)) {
            $I = $this->acceptanceTester;
            $contacts = explode("\n", $I->grabTextFrom(self::$contactInformationText));
            $this->contactInformationName = $contacts[0];
            $this->contactInformationEmail = $contacts[1];
        }
    }
}
