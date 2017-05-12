<?php
namespace Magento\Xxyyzz\Acceptance\Sales;

use Magento\Xxyyzz\Page\Catalog\AdminCategoriesPage;
use Magento\Xxyyzz\Page\Catalog\AdminProductPage;
use Magento\Xxyyzz\Page\Customers\AdminCustomersPage;
use Magento\Xxyyzz\Page\Sales\AdminOrdersPage;
use Magento\Xxyyzz\Page\Sales\AdminOrderDetailsPage;
use Magento\Xxyyzz\Step\Backend\AdminStep;
use Yandex\Allure\Adapter\Annotation\Stories;
use Yandex\Allure\Adapter\Annotation\Features;
use Yandex\Allure\Adapter\Annotation\Title;
use Yandex\Allure\Adapter\Annotation\Description;
use Yandex\Allure\Adapter\Annotation\Severity;
use Yandex\Allure\Adapter\Annotation\Parameter;
use Yandex\Allure\Adapter\Model\SeverityLevel;

/**
 * Class CreateOrderViaAdminCest
 *
 * Allure annotations
 * @Features({"Sales"})
 * @Stories({"Create an Order via the Admin"})
 *
 * Codeception annotations
 * @group add
 * @group sales
 * @group orders
 * @env chrome
 * @env firefox
 * @env phantomjs
 */
class CreateOrderViaAdminCest
{
    public function _before(AdminStep $I)
    {
        $I->loginAsAdmin();
    }

    /**
     * Allure annotations
     * @Title("Create an Order via the Admin")
     * @Description("Setup a Category, Product, Customer and place an Order using them via the Admin.")
     * @Severity(level = SeverityLevel::CRITICAL)
     * @Parameter(name = "AdminStep", value = "$adminStep")
     * @Parameter(name = "AdminCustomersPage", value = "$adminCustomerPage")
     * @Parameter(name = "AdminCategoriesPage", value = "$adminCategoryPage")
     * @Parameter(name = "AdminOrderGrid", value = "$adminOrderGrid")
     * @Parameter(name = "AdminOrderPage", value = "$I")
     * @Parameter(name = "AdminOrderDetailsPage", value = "$adminOrderDetailsPage")
     *
     * Codeception annotations
     * @param AdminStep $adminStep
     * @param AdminCustomersPage $adminCustomerPage
     * @param AdminCategoriesPage $adminCategoryPage
     * @param AdminProductPage $adminProductPage
     * @param AdminOrdersPage $I
     * @param AdminOrderDetailsPage $adminOrderDetailsPage
     * @return void
     */
    public function createOrderViaAdmin(
        AdminStep $adminStep,
        AdminCustomersPage $adminCustomerPage,
        AdminCategoriesPage $adminCategoryPage,
        AdminProductPage $adminProductPage,
        AdminOrdersPage $I,
        AdminOrderDetailsPage $adminOrderDetailsPage
    )
    {
        $customerDetails = $adminStep->getCustomerData();
        $categoryDetails = $adminStep->getCategoryData();
        $productDetails  = $adminStep->getProductData();

        $customerName = $customerDetails['firstname'] . " " . $customerDetails['lastname'];

        $adminCustomerPage->goToTheAdminAllCustomersGrid();
        $adminCustomerPage->addBasicCustomerWithAddress($customerDetails);

        $adminCategoryPage->goToTheAdminCategoriesPage();
        $adminCategoryPage->addBasicCategory($categoryDetails);

        $adminProductPage->goToTheAdminCatalogGrid();
        $adminProductPage->addBasicProductUnderCategory($productDetails, $categoryDetails);

        $I->goToTheAdminOrdersGrid();
        $I->clickOnCreateNewOrderButton();

        $I->enterCustomerEmailSearchTerm($customerDetails['email']);
        $I->clickOnCustomerSearchButton();
        $I->clickOnCustomerFor($customerDetails['email']);

        $I->clickOnAddProductsButton();
        $I->enterProductSkuSearchField($productDetails['sku']);
        $I->clickOnProductsSearchButton();
        $I->clickOnProductSkuFor($productDetails['sku']);
        $I->clickOnAddSelectedProductsToOrderButton();

        $I->clickOnGetShippingMethodsAndRatesLink();
        $I->clickOnFixedShippingMethod();

        $I->clickOnBottomSubmitButton();

        $adminOrderDetailsPage->verifyThatYouCreatedAnOrderMessageIsPresent();
        $adminOrderDetailsPage->verifyThereIsAnOrderNumber();
        $adminOrderDetailsPage->verifyOrderStatusPending();
        $adminOrderDetailsPage->verifyPurchasedFromDefaultStoreView();
        $adminOrderDetailsPage->verifyCustomerName($customerName);
        $adminOrderDetailsPage->verifyCustomerEmail($customerDetails['email']);
        $adminOrderDetailsPage->verifyCustomerGroup('General');

        $adminOrderDetailsPage->verifyBillingAddressInformation($customerDetails);
        $adminOrderDetailsPage->verifyShippingAddressInformation($customerDetails);

        $adminOrderDetailsPage->verifyPaymentTypeCheckMoneyOrder();
        $adminOrderDetailsPage->verifyPaymentCurrencyUSD();

        $adminOrderDetailsPage->verifyShippingMethodFixedRate();
        $adminOrderDetailsPage->verifyShippingHandlingPrice('$0.00');
        
        // TODO: Add verification for Product Details in the Order
        $adminOrderDetailsPage->verifyItemsOrderedFor($productDetails);

        $adminOrderDetailsPage->verifyOrderStatusDropDownPending();
        $adminOrderDetailsPage->verifyOrderComments('');

        $adminOrderDetailsPage->verifySubTotalPrice($productDetails['price']);
        $adminOrderDetailsPage->verifyShippingHandlingPrice('$0.00');
   }
}