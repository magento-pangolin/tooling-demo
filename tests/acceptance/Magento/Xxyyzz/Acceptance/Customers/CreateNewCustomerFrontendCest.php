<?php
namespace Magento\Xxyyzz\Acceptance\Customer;

use Magento\Xxyyzz\AcceptanceTester;
use Magento\Xxyyzz\Page\Storefront\Luma\CustomerAccountCreatePage;
use Magento\Xxyyzz\Page\Storefront\Luma\CustomerAccountDashboardPage;
use Yandex\Allure\Adapter\Annotation\Stories;
use Yandex\Allure\Adapter\Annotation\Features;
use Yandex\Allure\Adapter\Annotation\Title;
use Yandex\Allure\Adapter\Annotation\Description;
use Yandex\Allure\Adapter\Annotation\Severity;
use Yandex\Allure\Adapter\Annotation\Parameter;
use Yandex\Allure\Adapter\Model\SeverityLevel;
use Yandex\Allure\Adapter\Annotation\TestCaseId;

/**
 * Class SignInCustomerFrontendCest
 *
 * Allure annotations
 * @Features({"Customer"})
 * @Stories({"Create new customer storefront"})
 *
 * Codeception annotations
 * @group customer
 * @group add
 * @env chrome
 * @env firefox
 * @env phantomjs
 */
class CreateNewCustomerFrontendCest
{
    /**
     * @var array
     */
    protected $customer;

    /**
     * @param AcceptanceTester $I
     */
    public function _before(AcceptanceTester $I)
    {
        $this->customer = $I->getCustomerApiDataWithPassword();
        $this->customer = array_merge($this->customer['customer'], $this->customer);
        unset($this->customer['customer']);
    }

    /**
     * Create customer.
     *
     * Allure annotations
     * @Title("Create new customer storefront")
     * @Description("Create new customer storefront")
     * @TestCaseId("")
     * @Severity(level = SeverityLevel::CRITICAL)
     * @Parameter(name = "AcceptanceTester", value = "$acceptanceTester")
     * @Parameter(name = "StorefrontCustomerAccountCreatePage", value = "$I")
     * @Parameter(name = "StorefrontCustomerAccountDashboardPage", value = "$customerAccountDashboardPage")
     *
     * @param AcceptanceTester $acceptanceTester
     * @param CustomerAccountCreatePage $I
     * @param CustomerAccountDashboardPage $customerAccountDashboardPage
     * @return void
     */
    public function createCustomerTest(
        AcceptanceTester $acceptanceTester,
        CustomerAccountCreatePage $I,
        CustomerAccountDashboardPage $customerAccountDashboardPage
    ) {
        $acceptanceTester->wantTo('create customer in frontend page.');
        $I->amOnCustomerAccountCreatePage();
        $I->fillFieldFirstName($this->customer['firstname']);
        $I->fillFieldLastName($this->customer['lastname']);
        $I->setNewsletterSubscribe(true);
        $I->fillFieldEmail($this->customer['email']);
        $I->fillFieldPassword($this->customer['password']);
        $I->fillFieldConfirmPassword($this->customer['password']);
        $I->clickCreateAccountButton();
        $customerAccountDashboardPage->seeContactInformationName(
            $this->customer['firstname'] . ' ' .  $this->customer['lastname']
        );
        $customerAccountDashboardPage->seeContactInformationEmail($this->customer['email']);
        $customerAccountDashboardPage->seeNewsletterText('You subscribe to');
    }
}
