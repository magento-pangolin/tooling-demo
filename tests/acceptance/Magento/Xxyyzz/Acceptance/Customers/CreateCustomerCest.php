<?php
namespace Magento\Xxyyzz\Acceptance\Customer;

use Magento\Xxyyzz\Helper\AdminNavigation;
use Magento\Xxyyzz\Page\Customers\AdminCustomersPage;
use Magento\Xxyyzz\Page\Customers\AdminCustomersGrid;
use Yandex\Allure\Adapter\Annotation\Features;
use Yandex\Allure\Adapter\Annotation\Stories;
use Yandex\Allure\Adapter\Annotation\Title;
use Yandex\Allure\Adapter\Annotation\Description;
use Yandex\Allure\Adapter\Annotation\Parameter;
use Yandex\Allure\Adapter\Annotation\Severity;
use Yandex\Allure\Adapter\Model\SeverityLevel;
use Yandex\Allure\Adapter\Annotation\TestCaseId;

/**
 * Class CreateCustomerCest
 *
 * Allure annotations
 * @Features({"Customer"})
 * @Stories({"Exercise all Customer fields", "Create a basic Customer", "Create a basic Customer with an Address"})
 *
 * Codeception annotations
 * @group customer
 * @env chrome
 * @env firefox
 * @env phantomjs
 */
class CreateCustomerCest
{
    public function _before(
        AdminNavigation $adminNavigation,
        AdminCustomersPage $I
    )
    {
        $adminNavigation->loginAsAdmin();
        $I->goToTheAdminAllCustomersGrid();
        $I->clickOnAddNewCustomerButton();
    }

    /**
     * Allure annotations
     * @Title("Enter text into every field on the ADD Customer page.")
     * @Description("Enter text into ALL fields on the ADD Customer page and verify the content of the fields.")
     * @Severity(level = SeverityLevel::NORMAL)
     * @TestCaseId("")
     * @Parameter(name = "AdminNavigation", value = "$adminNavigation")
     * @Parameter(name = "AdminCustomerPage", value = "$I")
     *
     * Codeception annotations
     * @group fields
     * @param AdminNavigation $adminNavigation
     * @param AdminCustomersPage $I
     * @return void
     */
    public function verifyThatEachFieldOnTheCustomerAddPageWorks(
        AdminNavigation $adminNavigation,
        AdminCustomersPage $I
    )
    {
        $customerData = $adminNavigation->getCustomerData();

        $I->selectAssociateToWebsiteMainWebsite();
        $I->selectGroupWholesale();
        $I->enterPrefix($customerData['prefix']);
        $I->enterFirstName($customerData['firstname']);
        $I->enterMiddleName($customerData['middlename']);
        $I->enterLastName($customerData['lastname']);
        $I->enterSuffix($customerData['suffix']);
        $I->enterEmailAddress($customerData['email']);
        $I->enterDateOfBirth($customerData['dateOfBirth']);
        $I->enterTaxVatNumber($customerData['taxVatNumber']);
        $I->selectGenderFemale();
        $I->selectSendWelcomeEmailFromDefaultStoreView();

        $I->verifyAssociateToWebsiteMainWebsite();
        $I->verifyGroupWholesale();
        $I->verifyPrefix($customerData['prefix']);
        $I->verifyFirstName($customerData['firstname']);
        $I->verifyMiddleName($customerData['middlename']);
        $I->verifyLastName($customerData['lastname']);
        $I->verifySuffix($customerData['suffix']);
        $I->verifyEmailAddress($customerData['email']);
        $I->verifyDateOfBirth($customerData['dateOfBirth']);
        $I->verifyTaxVatNumber($customerData['taxVatNumber']);
        $I->verifyGenderFemale();
        $I->verifySendWelcomeEmailFromDefaultStoreView();
    }

    /**
     * Allure annotations
     * @Title("Enter text into every field on the ADD ADDRESS area of the Customer page.")
     * @Description("Enter text into ALL fields on the ADD ADDRESS area on the Customer page and verify the content of the fields.")
     * @Severity(level = SeverityLevel::NORMAL)
     * @TestCaseId("")
     * @Parameter(name = "AdminNavigation", value = "$adminNavigation")
     * @Parameter(name = "AdminCustomerPage", value = "$I")
     *
     * Codeception annotations
     * @group fields
     * @param AdminNavigation $adminNavigation
     * @param AdminCustomersPage $I
     * @return void
     */
    public function verifyThatEachFieldOnTheCustomerAddAddressAreaWorks(
        AdminNavigation $adminNavigation,
        AdminCustomersPage $I
    )
    {
        $customerData = $adminNavigation->getCustomerData();

        $I->clickOnAddressesLink();
        $I->clickOnAddNewAddressButton();

        $I->clickOnAddNewAddressDefaultBillingAddress();
        $I->clickOnAddNewAddressDefaultShippingAddress();
        
        $I->enterAddAddressPrefix($customerData['prefix']);
        $I->enterAddAddressFirstName($customerData['firstname']);
        $I->enterAddAddressMiddleName($customerData['middlename']);
        $I->enterAddAddressLastName($customerData['lastname']);
        $I->enterAddAddressSuffix($customerData['suffix']);
        $I->enterAddAddressCompany($customerData['company']);
        $I->enterAddAddressAddress1($customerData['address']['address1']);
        $I->enterAddAddressAddress2($customerData['address']['address2']);
        $I->enterAddAddressCity($customerData['address']['city']);
        $I->enterAddAddressCountry($customerData['address']['country']);
        $I->enterAddAddressState($customerData['address']['state']);
        $I->enterAddAddressZipPostalCode($customerData['address']['zipCode']);
        $I->enterAddAddressPhoneNumber($customerData['phoneNumber']);
        $I->enterAddAddressVatNumber($customerData['taxVatNumber']);

        $I->verifyAddAddressDefaultBillingAddress(true);
        $I->verifyAddAddressDefaultShippingAddress(true);

        $I->verifyAddAddressPrefix($customerData['prefix']);
        $I->verifyAddAddressFirstName($customerData['firstname']);
        $I->verifyAddAddressMiddleName($customerData['middlename']);
        $I->verifyAddAddressLastName($customerData['lastname']);
        $I->verifyAddAddressSuffix($customerData['suffix']);
        $I->verifyAddAddressCompany($customerData['company']);
        $I->verifyAddAddressAddress1($customerData['address']['address1']);
        $I->verifyAddAddressAddress2($customerData['address']['address2']);
        $I->verifyAddAddressCity($customerData['address']['city']);
        $I->verifyAddAddressCountry($customerData['address']['country']);
        $I->verifyAddAddressState($customerData['address']['state']);
        $I->verifyAddAddressZipPostalCode($customerData['address']['zipCode']);
        $I->verifyAddAddressPhoneNumber($customerData['phoneNumber']);
        $I->verifyAddAddressVatNumber($customerData['taxVatNumber']);
    }

    /**
     * Allure annotations
     * @Title("Create a new Customer account using the REQUIRED fields only.")
     * @Description("Enter text into the REQUIRED fields, SAVE the content and VERIFY it on the Admin page.")
     * @Severity(level = SeverityLevel::CRITICAL)
     * @TestCaseId("")
     * @Parameter(name = "AdminNavigation", value = "$adminNavigation")
     * @Parameter(name = "AdminCustomerPage", value = "$I")
     * @Parameter(name = "AdminCustomerGrid", value = "$adminCustomerGrid")
     *
     * Codeception annotations
     * @group add
     * @param AdminNavigation $adminNavigation
     * @param AdminCustomersPage $I
     * @param AdminCustomersGrid $adminCustomerGrid
     * @return void
     */
    public function createBasicCustomerAccountTest(
        AdminNavigation $adminNavigation,
        AdminCustomersPage $I,
        AdminCustomersGrid $adminCustomerGrid
    )
    {
        $customerData = $adminNavigation->getCustomerData();

        $I->enterFirstName($customerData['firstname']);
        $I->enterLastName($customerData['lastname']);
        $I->enterEmailAddress($customerData['email']);
        $I->selectAssociateToWebsiteMainWebsite();
        $I->selectGroupGeneral();

        $I->clickOnSaveCustomerButton();

        $adminCustomerGrid->performGridSearchByKeyword($customerData['email']);
        $adminCustomerGrid->clickOnGridRowActionLinkContaining($customerData['email']);

        $I->clickOnAccountInformationLink();
        $I->verifyFirstName($customerData['firstname']);
        $I->verifyLastName($customerData['lastname']);
        $I->verifyEmailAddress($customerData['email']);
        $I->verifyAssociateToWebsiteMainWebsite();
        $I->verifyGroupGeneral();
    }

    /**
     * Allure annotations
     * @Title("Create a new Customer account using the REQUIRED fields with an Address.")
     * @Description("Enter text into the REQUIRED fields, SAVE the content and VERIFY it on the Admin page.")
     * @Severity(level = SeverityLevel::CRITICAL)
     * @TestCaseId("")
     * @Parameter(name = "AdminNavigation", value = "$adminNavigation")
     * @Parameter(name = "AdminCustomerPage", value = "$I")
     * @Parameter(name = "AdminCustomerGrid", value = "$adminCustomerGrid")
     *
     * Codeception annotations
     * @group add
     * @param AdminNavigation $adminNavigation
     * @param AdminCustomersPage $I
     * @param AdminCustomersGrid $adminCustomerGrid
     * @return void
     */
    public function createBasicCustomerAccountWithAddressTest(
        AdminNavigation $adminNavigation,
        AdminCustomersPage $I,
        AdminCustomersGrid $adminCustomerGrid
    )
    {
        $customerData = $adminNavigation->getCustomerData();
        
        $I->clickOnAddressesLink();
        $I->clickOnAddNewAddressButton();

        $I->clickOnAddNewAddressDefaultBillingAddress();
        $I->clickOnAddNewAddressDefaultShippingAddress();

        $I->enterAddAddressPrefix($customerData['prefix']);
        $I->enterAddAddressFirstName($customerData['firstname']);
        $I->enterAddAddressMiddleName($customerData['middlename']);
        $I->enterAddAddressLastName($customerData['lastname']);
        $I->enterAddAddressSuffix($customerData['suffix']);
        $I->enterAddAddressCompany($customerData['company']);
        $I->enterAddAddressAddress1($customerData['address']['address1']);
        $I->enterAddAddressAddress2($customerData['address']['address2']);
        $I->enterAddAddressCity($customerData['address']['city']);
        $I->enterAddAddressCountry($customerData['address']['country']);
        $I->enterAddAddressState($customerData['address']['state']);
        $I->enterAddAddressZipPostalCode($customerData['address']['zipCode']);
        $I->enterAddAddressPhoneNumber($customerData['phoneNumber']);
        $I->enterAddAddressVatNumber($customerData['taxVatNumber']);

        $I->clickOnAccountInformationLink();

        $I->enterFirstName($customerData['firstname']);
        $I->enterLastName($customerData['lastname']);
        $I->enterEmailAddress($customerData['email']);
        $I->selectAssociateToWebsiteMainWebsite();
        $I->selectGroupGeneral();

        $I->clickOnSaveCustomerButton();

        $adminCustomerGrid->performGridSearchByKeyword($customerData['email']);
        $adminCustomerGrid->clickOnGridRowActionLinkContaining($customerData['email']);

        $I->clickOnAddressesLink();
        $I->verifyAddAddressDefaultBillingAddress(true);
        $I->verifyAddAddressDefaultShippingAddress(true);

        $I->verifyAddAddressPrefix($customerData['prefix']);
        $I->verifyAddAddressFirstName($customerData['firstname']);
        $I->verifyAddAddressMiddleName($customerData['middlename']);
        $I->verifyAddAddressLastName($customerData['lastname']);
        $I->verifyAddAddressSuffix($customerData['suffix']);
        $I->verifyAddAddressCompany($customerData['company']);
        $I->verifyAddAddressAddress1($customerData['address']['address1']);
        $I->verifyAddAddressAddress2($customerData['address']['address2']);
        $I->verifyAddAddressCity($customerData['address']['city']);
        $I->verifyAddAddressCountry($customerData['address']['country']);
        $I->verifyAddAddressState($customerData['address']['state']);
        $I->verifyAddAddressZipPostalCode($customerData['address']['zipCode']);
        $I->verifyAddAddressPhoneNumber($customerData['phoneNumber']);
        $I->verifyAddAddressVatNumber($customerData['taxVatNumber']);
    }
}