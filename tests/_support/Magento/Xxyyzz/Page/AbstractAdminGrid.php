<?php
namespace Magento\Xxyyzz\Page;

use Magento\Xxyyzz\AcceptanceTester;
use Codeception\Exception\ElementNotFound;

abstract class AbstractAdminGrid
{
    /**
     * Include url of current page.
     */
    public static $URL                                   = '/admin/admin/';
    
    public static $globalPageTitle                       = '.page-title';


    /**
     * @var AcceptanceTester
     */
    protected $acceptanceTester;

    public function __construct(AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }

    public static function of(AcceptanceTester $I)
    {
        return new static($I);
    }

    public static function route($param)
    {
        return static::$URL.$param;
    }


    /**
     * Start of Grid Search Controls
     */
    public static $gridSearchByKeywordField              = '#fulltext';
    public static $gridSearchByKeywordSearchButton       = '#fulltext + .action-submit';

    public static $gridSearchButton                      = 'button[data-action=grid-filter-apply]';
    public static $gridResetFilterButton                 = 'button[data-action=grid-filter-reset]';

    public function enterGridSearchByKeyword($searchKeyboard)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$gridSearchByKeywordField, $searchKeyboard);
        $I->waitForPageLoad();
    }

    public function clickOnGridSearchByKeywordSearchButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$gridSearchByKeywordSearchButton);
        $I->waitForPageLoad();
    }

    public function performGridSearchByKeyword($searchKeyword)
    {
        $I = $this->acceptanceTester;
        self::enterGridSearchByKeyword($searchKeyword);
        self::clickOnGridSearchByKeywordSearchButton();
        $I->waitForLoadingMaskToDisappear();
    }

    public function clickOnGridSearchButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$gridSearchButton);
    }

    public function clickOnGridFilterResetButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$gridResetFilterButton);
    }
    /**
     * End of Grid Search Controls
     */

    /**
     * Start of Filter Controls
     */
    public static $gridFiltersButton                     = 'button[data-action=grid-filter-expand]';
    public static $gridFiltersExpandedMenu               = '.admin__data-grid-filters-wrap._show';
    public static $gridFiltersCancelButton               = 'button[data-action=grid-filter-cancel]';
    public static $gridFiltersApplyFiltersButton         = 'button[data-action=grid-filter-apply]';

    public static $gridFiltersClearAllButton             = 'button[data-action=grid-filter-reset]';

    public static $filterPurchaseDateFromField           = '.admin__control-text[name="created_at[from]"]';
    public static $filterPurchaseDateToField             = '.admin__control-text[name="created_at[to]"]';
    public static $filterGrandTotalBaseFromField         = '.admin__control-text[name="base_grand_total[from]"]';
    public static $filterGrandTotalBaseToField           = '.admin__control-text[name="base_grand_total[to]"]';
    public static $filterGrandTotalPurchasedFromField    = '.admin__control-text[name="grand_total[from]"]';
    public static $filterGrandTotalPurchasedToField      = '.admin__control-text[name="grand_total[to]"]';
    public static $filterPurchasePointDropDownMenu       = '.admin__control-select[name="store_id"]';
    public static $filterIdField                         = '.admin__control-text[name="increment_id"]';
    public static $filterBillToNameField                 = '.admin__control-text[name="billing_name"]';
    public static $filterShipToNameField                 = '.admin__control-text[name="shipping_name"]';
    public static $filterStatusDropDown                  = '.admin__control-select[name="status"]';

    public static $filterInvoiceDateFromField            = '.admin__control-text[name="created_at[from]"]';
    public static $filterInvoiceDateToField              = '.admin__control-text[name="created_at[to]"]';
    public static $filterOrderDateFromField              = '.admin__control-text[name="order_created_at[from]"]';
    public static $filterOrderDateToField                = '.admin__control-text[name="order_created_at[to]"]';
    public static $filterPurchasedFromDropDown           = '.admin__control-select[name="store_id"]';
    public static $filterInvoiceField                    = '.admin__control-text[name="increment_id"]';
    public static $filterOrderNumberField                = '.admin__control-text[name="order_increment_id"]';
    public static $filterStatusStateDropDown             = '.admin__control-select[name="state"]';

    public static $filterShipDateFromField               = '.admin__control-text[name="created_at[from]"]';
    public static $filterShipDateToField                 = '.admin__control-text[name="created_at[to]"]';
    public static $filterTotalQuantityFromField          = '.admin__control-text[name="total_qty[from]"]';
    public static $filterTotalQuantityToField            = '.admin__control-text[name="total_qty[to]"]';
    public static $filterShipmentField                   = '.admin__control-text[name="increment_id"]';

    public static $filterCreatedFromField                = '.admin__control-text[name="created_at[from]"]';
    public static $filterCreatedToField                  = '.admin__control-text[name="created_at[to]"]';
    public static $filterRefundedFromField               = '.admin__control-text[name="base_grand_total[from]"]';
    public static $filterRefundedToField                 = '.admin__control-text[name="base_grand_total[to]"]';
    public static $filterCreditMemoField                 = '.admin__control-text[name="increment_id"]';

    public static $filterOrderIdFromField                = '.admin__control-text[name="entity_id[from]"]';
    public static $filterOrderIdToField                  = '.admin__control-text[name="entity_id[to]"]';
    public static $filterPriceFromField                  = '.admin__control-text[name="price[from]"]';
    public static $filterPriceToField                    = '.admin__control-text[name="price[to]"]';
    public static $filterQuantityFromField               = '.admin__control-text[name="qty[from]"]';
    public static $filterQuantityToField                 = '.admin__control-text[name="qty[to]"]';
    public static $filterStoreViewDropDown               = '.admin__control-select[name="store_id"]';
    public static $filterProductName                     = '.admin__form-field input[name=name]';
    public static $filterProductTypeDropDown             = '.admin__control-select[name="type_id"]';
    public static $filterProductAttributeSetDropDown     = '.admin__control-select[name="attribute_set_id"]';
    public static $filterProductSkuField                 = '.admin__form-field input[name=sku]';
    public static $filterProductVisibilityDropDown       = '.admin__control-select[name="visibility"]';
    public static $filterProductStatusDropDown           = '.admin__control-select[name="status"]';

    public static $filterCustomerIdFromField             = '.admin__control-text[name="customer_id[from]"]';
    public static $filterCustomerIdToField               = '.admin__control-text[name="customer_id[to]"]';
    public static $filterLastActivityFromField           = '.admin__control-text[name="last_visit_at[from]"]';
    public static $filterLastActivityToField             = '.admin__control-text[name="last_visit_at[to]"]';
    public static $filterFirstNameField                  = '.admin__control-text[name="firstname"]';
    public static $filterLastNameField                   = '.admin__control-text[name="lastname"]';
    public static $filterTypeDropDown                    = '.admin__control-select[name="visitor_type"]';

    public static $filterCustomerSinceFromField          = '.admin__control-text[name="created_at[from]"]';
    public static $filterCustomerSinceToField            = '.admin__control-text[name="created_at[to]"]';
    public static $filterDateOfBirthFromField            = '.admin__control-text[name="dob[from]"]';
    public static $filterDateOfBirthToField              = '.admin__control-text[name="dob[to]"]';
    public static $filterNameField                       = '.admin__control-text[name="name"]';
    public static $filterEmailField                      = '.admin__control-text[name="email"]';
    public static $filterGroupDropDown                   = '.admin__control-select[name="group_id"]';
    public static $filterPhoneField                      = '.admin__control-text[name="billing_telephone"]';
    public static $filterZipCodeField                    = '.admin__control-text[name="billing_postcode"]';
    public static $filterCountryDropDown                 = '.admin__control-select[name="billing_country_id"]';
    public static $filterStateProvinceField              = '.admin__control-text[name="billing_region"]';
    public static $filterWebSiteDropDown                 = '.admin__control-select[name="website_id"]';
    public static $filterTaxVatNumberField               = '.admin__control-text[name="taxvat"]';
    public static $filterGenderDropDown                  = '.admin__control-select[name="gender"]';

    public static $filterPageIdFromField                 = '.admin__control-text[name="page_id[from]"]';
    public static $filterPageIdToField                   = '.admin__control-text[name="page_id[to]"]';
    public static $filterContentCreatedFromField         = '.admin__control-text[name="creation_time[from]"]';
    public static $filterContentCreatedToField           = '.admin__control-text[name="creation_time[to]"]';
    public static $filterModifiedFromField               = '.admin__control-text[name="update_time[from]"]';
    public static $filterModifiedToField                 = '.admin__control-text[name="update_time[to]"]';
    public static $filterTitleField                      = '.admin__control-text[name="title"]';
    public static $filterUrlKeyField                     = '.admin__control-text[name="identifier"]';
    public static $filterLayoutDropDown                  = '';

    public static $filterStoreWebsiteDropDown            = '.admin__control-select[name="store_website_id"] ';
    public static $filterThemeNameDropDown               = '.admin__control-select[name="theme_theme_id"] ';

    public static $filterBlockIdFromField                = '.admin__control-text[name="block_id[from]"]';
    public static $filterBlockIdToField                  = '.admin__control-text[name="block_id[to]"]';

    public static $filterCreatedAtFromField              = '.admin__control-text[name="createdAt[from]"]';
    public static $filterCreatedAtToField                = '.admin__control-text[name="createdAt[to]"] ';
    public static $filterAmountFromField                 = '.admin__control-text[name="amount[from]"] ';
    public static $filterAmountToField                   = '.admin__control-text[name="amount[to]"] ';
    public static $filterTransactionTypeDropDown         = '.admin__control-select[name="type"] ';
    public static $filterPaymentTypeDropDown             = '.admin__control-select[name="paymentInstrumentType"] ';
    public static $filterTransactionIdField              = '.admin__control-text[name="id"] ';
    public static $filterOrderIdField                    = '.admin__control-text[name="orderId"] ';
    public static $filterPayPalPaymentIdField            = '.admin__control-text[name="paypalDetails_paymentId"] ';
    public static $filterMerchantAccountIdField          = '.admin__control-text[name="merchantAccountId"] ';
    public static $filterSettlementBatchIdField          = '.admin__control-text[name="settlementBatchId"] ';


    public function searchAndFiltersByValue($value, $selector, $type = 'textfield')
    {
        $I = $this->acceptanceTester;
        $this->clickOnFiltersClearAllButton();
        $this->clickOnFiltersButtonToExpand();

        switch ($type) {
            case 'dropdown':
                $I->selectOption($selector, $value);
                break;
            case 'textfield':
            default:
                $I->fillField($selector, $value);
        }
        $I->click(self::$gridFiltersApplyFiltersButton);

        $I->waitForPageLoad();
    }


    public function clickOnFiltersButtonToExpand()
    {
        $I = $this->acceptanceTester;
        try {
            $I->waitForPageLoad();
            $I->dontSeeElement(self::$gridFiltersExpandedMenu);
            $I->click(self::$gridFiltersButton);
            $I->waitForPageLoad();
        } catch (ElementNotFound $e) {
        }
    }

    public function clickOnFiltersButtonToClose()
    {
        $I = $this->acceptanceTester;
        try {
            $I->waitForPageLoad();
            $I->seeElement(self::$gridFiltersExpandedMenu);
            $I->click(self::$gridFiltersButton);
            $I->waitForPageLoad();
        } catch (ElementNotFound $e) {
        }
    }

    public function clearTheActiveFilterFor($keyword)
    {
        $I = $this->acceptanceTester;
        $selector = "//span[contains(@data-bind, '" . $keyword . "')]/parent::li/button";

        $I->click($selector);
        $I->waitForLoadingMaskToDisappear();
    }

    public function clickOnFiltersClearAllButton()
    {
        $I = $this->acceptanceTester;
        try {
            $I->waitForPageLoad();
            $I->click(self::$gridFiltersClearAllButton);
        } catch (ElementNotFound $e) {
        }
    }


    public function enterFilterPurchaseDateFrom($purchaseDataFrom)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterPurchaseDateFromField, $purchaseDataFrom);
    }

    public function enterFilterPurchaseDateTo($purchaseDateTo)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterPurchaseDateToField, $purchaseDateTo);
    }

    public function enterFilterGrandTotalBaseFrom($grandTotalBaseFrom)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterGrandTotalBaseFromField, $grandTotalBaseFrom);
    }

    public function enterFilterGrandTotalBaseTo($grandTotalBaseTo)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterGrandTotalBaseToField, $grandTotalBaseTo);
    }

    public function enterFilterGrandTotalPurchasedFrom($grandTotalPurchasedFrom)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterGrandTotalPurchasedFromField, $grandTotalPurchasedFrom);
    }

    public function enterFilterGrandTotalPurchasedTo($grandTotalPurchasedTo)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterGrandTotalPurchasedToField, $grandTotalPurchasedTo);
    }

    public function enterFilterPurchasePointDropDownMenu($purchasePoint)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterPurchasePointDropDownMenu, $purchasePoint);
    }

    public function enterFilterId($id)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterIdField, $id);
    }

    public function enterFilterBillToName($billToName)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterBillToNameField, $billToName);
    }

    public function enterFilterShipToName($shipTo)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterShipToNameField, $shipTo);
    }

    public function selectFilterStatusDropDown($status)
    {
        $I = $this->acceptanceTester;
        $I->selectOption(self::$filterStatusDropDown, $status);
    }

    public function enterFilterInvoiceDateFrom($invoiceDateFrom)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterInvoiceDateFromField, $invoiceDateFrom);
    }

    public function enterFilterInvoiceDateTo($invoiceDataTo)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterInvoiceDateToField, $invoiceDataTo);
    }

    public function enterFilterOrderDateFrom($orderDateFrom)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterOrderDateFromField, $orderDateFrom);
    }

    public function enterFilterOrderDateTo($orderDateTo)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterOrderDateToField, $orderDateTo);
    }

    public function selectFilterPurchasedFromDropDown($purchasedFrom)
    {
        $I = $this->acceptanceTester;
        $I->selectOption(self::$filterPurchasedFromDropDown, $purchasedFrom);
    }

    public function enterFilterInvoice($invoice)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterInvoiceField, $invoice);
    }

    public function enterFilterOrderNumber($orderNumber)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterOrderNumberField, $orderNumber);
    }

    public function selectFilterStatusStateDropDown($statusState)
    {
        $I = $this->acceptanceTester;
        $I->selectOption(self::$filterStatusStateDropDown, $statusState);
    }

    public function enterFilterShipDateFrom($shipDateFrom)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterShipDateFromField, $shipDateFrom);
    }

    public function enterFilterShipDateTo($shipDateTo)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterShipDateToField, $shipDateTo);
    }

    public function enterFilterTotalQuantityFrom($totalQuantityFrom)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterTotalQuantityFromField, $totalQuantityFrom);
    }

    public function enterFilterTotalQuantityTo($totalQuantityTo)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterTotalQuantityToField, $totalQuantityTo);
    }

    public function enterFilterShipment($shipment)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterShipmentField, $shipment);
    }

    public function enterFilterCreatedFrom($createdFrom)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterCreatedFromField, $createdFrom);
    }

    public function enterFilterCreatedTo($createdTo)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterCreatedToField, $createdTo);
    }

    public function enterFilterRefundedFrom($refundedFrom)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterRefundedFromField, $refundedFrom);
    }

    public function enterFilterRefundedTo($refundedTo)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterRefundedToField, $refundedTo);
    }

    public function enterFilterCreditMemo($creditMemo)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterCreditMemoField, $creditMemo);
    }

    public function enterFilterOrderIdFrom($orderIdFrom)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterOrderIdFromField, $orderIdFrom);
    }

    public function enterFilterOrderIdTo($orderIdTo)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterOrderIdToField, $orderIdTo);
    }

    public function enterFilterPriceFrom($priceFrom)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterPriceFromField, $priceFrom);
    }

    public function enterFilterPriceTo($priceTo)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterPriceToField, $priceTo);
    }

    public function enterFilterQuantityFrom($quantityFrom)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterQuantityFromField, $quantityFrom);
    }

    public function enterFilterQuantityTo($quantityTo)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterQuantityToField, $quantityTo);
    }

    public function selectFilterStoreViewDropDown($storeView)
    {
        $I = $this->acceptanceTester;
        $I->selectOption(self::$filterStoreViewDropDown, $storeView);
    }

    public function enterFilterProductName($productName)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterProductName, $productName);
    }

    public function selectFilterProductTypeDropDown($productType)
    {
        $I = $this->acceptanceTester;
        $I->selectOption(self::$filterProductTypeDropDown, $productType);
    }

    public function selectFilterProductAttributeSetDropDown($productAttributeSet)
    {
        $I = $this->acceptanceTester;
        $I->selectOption(self::$filterProductAttributeSetDropDown, $productAttributeSet);
    }

    public function enterFilterProductSku($sku)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterProductSkuField, $sku);
    }

    public function selectFilterProductVisibilityDropDown($productVisibility)
    {
        $I = $this->acceptanceTester;
        $I->selectOption(self::$filterProductVisibilityDropDown, $productVisibility);
    }

    public function selectFilterProductStatusDropDown($productStatus)
    {
        $I = $this->acceptanceTester;
        $I->selectOption(self::$filterProductStatusDropDown, $productStatus);
    }

    public function enterFilterCustomerIdFrom($customerIdFrom)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterCustomerIdFromField, $customerIdFrom);
    }

    public function enterFilterCustomerIdTo($customerIdTo)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterCustomerIdToField, $customerIdTo);
    }

    public function enterFilterLastActivityFrom($lastActivityFrom)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterLastActivityFromField, $lastActivityFrom);
    }

    public function enterFilterLastActivityTo($lastActivityTo)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterLastActivityToField, $lastActivityTo);
    }

    public function enterFilterFirstName($firstName)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterFirstNameField, $firstName);
    }

    public function enterFilterLastName($lastName)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterLastNameField, $lastName);
    }

    public function selectFilterTypeDropDown($type)
    {
        $I = $this->acceptanceTester;
        $I->selectOption(self::$filterTypeDropDown, $type);
    }

    public function enterFilterCustomerSinceFrom($customerSinceFrom)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterCustomerSinceFromField, $customerSinceFrom);
    }

    public function enterFilterCustomerSinceTo($customerSinceTo)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterCustomerSinceToField, $customerSinceTo);
    }

    public function enterFilterDateOfBirthFrom($dateOfBirthFrom)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterDateOfBirthFromField, $dateOfBirthFrom);
    }

    public function enterFilterDateOfBirthTo($dateOfBirthTo)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterDateOfBirthToField, $dateOfBirthTo);
    }

    public function enterFilterName($name)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterNameField, $name);
    }

    public function enterFilterEmail($email)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterEmailField, $email);
    }

    public function selectFilterGroupDropDown($group)
    {
        $I = $this->acceptanceTester;
        $I->selectOption(self::$filterGroupDropDown, $group);
    }

    public function enterFilterPhone($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterPhoneField, $value);
    }

    public function enterFilterZipCode($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterZipCodeField, $value);
    }

    public function selectFilterCountryDropDown($country)
    {
        $I = $this->acceptanceTester;
        $I->selectOption(self::$filterCountryDropDown, $country);
    }

    public function enterFilterStateProvince($stateProvince)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterStateProvinceField, $stateProvince);
    }

    public function selectFilterWebSiteDropDown($website)
    {
        $I = $this->acceptanceTester;
        $I->selectOption(self::$filterWebSiteDropDown, $website);
    }

    public function enterFilterTaxVatNumber($taxVatNumber)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterTaxVatNumberField, $taxVatNumber);
    }

    public function selectFilterGenderDropDown($gender)
    {
        $I = $this->acceptanceTester;
        $I->selectOption(self::$filterGenderDropDown, $gender);
    }

    public function enterFilterPageIdFrom($pageIdFrom)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterPageIdFromField, $pageIdFrom);
    }

    public function enterFilterPageIdTo($pageIdTo)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterPageIdToField, $pageIdTo);
    }

    public function enterFilterContentCreatedFrom($contentCreatedFrom)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterContentCreatedFromField, $contentCreatedFrom);
    }

    public function enterFilterContentCreatedTo($contentCreatedTo)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterContentCreatedToField, $contentCreatedTo);
    }

    public function enterFilterModifiedFrom($modifiedFrom)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterModifiedFromField, $modifiedFrom);
    }

    public function enterFilterModifiedTo($modifiedTo)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterModifiedToField, $modifiedTo);
    }

    public function enterFilterTitle($title)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterTitleField, $title);
    }

    public function enterFilterUrlKey($urlKey)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterUrlKeyField, $urlKey);
    }

    public function selectFilterLayoutDropDown($layout)
    {
        $I = $this->acceptanceTester;
        $I->selectOption(self::$filterLayoutDropDown, $layout);
    }

    public function selectFilterStoreWebsiteDropDown($storeWebsite)
    {
        $I = $this->acceptanceTester;
        $I->selectOption(self::$filterStoreWebsiteDropDown, $storeWebsite);
    }

    public function selectFilterThemeNameDropDown($themeName)
    {
        $I = $this->acceptanceTester;
        $I->selectOption(self::$filterThemeNameDropDown, $themeName);
    }

    public function enterFilterBlockIdFrom($blockIdFrom)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterBlockIdFromField, $blockIdFrom);
    }

    public function enterFilterBlockIdTo($blockIdTo)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterBlockIdToField, $blockIdTo);
    }

    public function enterFilterCreatedAtFrom($createdAtFrom)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterCreatedAtFromField, $createdAtFrom);
    }

    public function enterFilterCreatedAtTo($createdAtTo)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterCreatedAtToField, $createdAtTo);
    }

    public function enterFilterAmountFrom($amountFrom)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterAmountFromField, $amountFrom);
    }

    public function enterFilterAmountTo($amountTo)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterAmountToField, $amountTo);
    }

    public function selectFilterTransactionTypeDropDown($transactionType)
    {
        $I = $this->acceptanceTester;
        $I->selectOption(self::$filterTransactionTypeDropDown, $transactionType);
    }

    public function selectFilterPaymentTypeDropDown($paymentType)
    {
        $I = $this->acceptanceTester;
        $I->selectOption(self::$filterPaymentTypeDropDown, $paymentType);
    }

    public function enterFilterTransactionId($transactionId)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterTransactionIdField, $transactionId);
    }

    public function enterFilterOrderId($orderId)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterOrderIdToField, $orderId);
    }

    public function enterFilterPayPalPaymentId($payPalPaymentId)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterPayPalPaymentIdField, $payPalPaymentId);
    }

    public function enterFilterMerchantAccountId($merchantAccountId)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterMerchantAccountIdField, $merchantAccountId);
    }

    public function enterFilterSettlementBatchId($settlementBatchId)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterSettlementBatchIdField, $settlementBatchId);
    }
    /**
     * End of Filter Controls
     */

    /**
     * Start of Default View Controls
     */
    public static $gridCurrentViewButton                 = '.admin__data-grid-action-bookmarks .admin__action-dropdown';
    public static $gridCurrentViewDropDownOption         = '.admin__data-grid-action-bookmarks .action-dropdown-menu-link';
    public static $gridCurrentViewSaveViewAsLink         = '.admin__data-grid-action-bookmarks .action-dropdown-menu-item-last';
    public static $gridViewSaveNewViewField              = '.admin__data-grid-action-bookmarks .admin__control-text';
    public static $gridViewSaveNewViewSaveButton         = '.admin__data-grid-action-bookmarks .action-submit';

    public function clickOnCurrentGridViewButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$gridCurrentViewButton);
    }

    public function clickOnSpecificGridViewOption($viewName)
    {
        $I = $this->acceptanceTester;
        $I->click(self::$gridCurrentViewDropDownOption, $viewName);
    }

    public function clickOnSaveCurrentGridViewAsLink()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$gridCurrentViewSaveViewAsLink);
    }

    public function enterNewGridViewName($newViewName)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$gridViewSaveNewViewField, $newViewName);
    }

    public function clickOnNewGridViewSaveButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$gridViewSaveNewViewSaveButton);
    }

    public function saveTheCurrentView($newViewName)
    {
        self::clickOnCurrentGridViewButton();
        self::clickOnSaveCurrentGridViewAsLink();
        self::enterNewGridViewName($newViewName);
        self::clickOnNewGridViewSaveButton();
    }
    /**
     * End of Default View Controls
     */

    /**
     * Start of Columns View Controls
     */
    public static $gridColumnsButton                     = '.admin__data-grid-action-columns';
    public static $gridColumnsCurrentVisibleCount        = '.admin__data-grid-action-columns .admin__action-dropdown-menu-header';
    public static $gridColumnCheckbox                    = "//label[contains(@class, 'admin__field-label')][contains(text(), 'Action')]/parent::div/input";
    public static $gridColumnHeaderName                  = '.admin__data-grid-action-columns .admin__field-label';
    public static $gridColumnsResetButton                = '.admin__data-grid-action-columns .admin__action-dropdown-footer-secondary-actions';
    public static $gridColumnsCancelButton               = '.admin__data-grid-action-columns .admin__action-dropdown-footer-main-actions';

    public function clickOnColumnsButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$gridColumnsButton);
    }

    public function clickOnSpecificColumnName($columnName)
    {
        $I = $this->acceptanceTester;
        $I->click(self::$gridColumnHeaderName, $columnName);
    }

    public function clickOnColumnReset()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$gridColumnsResetButton);
    }

    public function clickOnColumnCancel()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$gridColumnsCancelButton);
    }
    /**
     * End of Columns View Controls
     */

    /**
     * Start of Export Controls
     */
    public static $gridExportCurrentViewButton           = '.admin__data-grid-action-export';
    public static $gridExportCurrentViewLinks            = '.admin__data-grid-action-export-menu .admin__field-label';
    public static $gridExportCurrentViewCancelButton     = '.admin__data-grid-action-export-menu .action-tertiary';
    public static $gridExportCurrentViewExportButton     = '.admin__data-grid-action-export-menu .action-secondary';

    public function clickExportButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$gridExportCurrentViewButton);
    }

    public function clickOnCsvLink()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$gridExportCurrentViewLinks, 'CSV');
    }

    public function clickOnExcelXmlLink()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$gridExportCurrentViewLinks, 'Excel XML');
    }

    public function clickOnExportCancel()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$gridExportCurrentViewCancelButton);
    }

    public function clickOnExportExport()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$gridExportCurrentViewExportButton);
    }
    /**
     * End of Export Controls
     */

    /**
     * Start of Actions drop down Controls
     */
    public static $gridActionsButton                     = '.action-select-wrap';
    public static $gridActionsDropDown                   = '.action-menu._active';

    public function clickOnGridActionsButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$gridActionsButton);
    }

    public function clickOnSpecificGridActionLink($actionName)
    {
        $I = $this->acceptanceTester;
        self::clickOnGridActionsButton();
        $I->click(self::$gridActionsDropDown, $actionName);
    }
    /**
     * End of Actions drop down Controls
     */

    /**
     * Start of Navigation Controls
     */
    public static $gridCurrentRecordsCount               = '';

    public static $gridRowsPerPageCountButton            = '.admin__data-grid-pager-wrap .selectmenu';
    public static $gridRowsPerPageMenuItem               = '.admin__data-grid-pager-wrap .selectmenu-items .selectmenu-item-action';
    public static $gridRowsPerPageCustomLink             = '.admin__data-grid-pager-wrap .selectmenu-items .selectmenu-item-action:last';
    public static $gridRowsPerPageCustomRowsField        = '.admin__data-grid-pager-wrap .selectmenu-items .admin__control-text';
    public static $gridRowsPerPageCustomSaveButton       = '.admin__data-grid-pager-wrap .selectmenu-items .action-save';

    public static $gridGoBackAPageButton                 = '.action-previous';
    public static $gridPageNumberField                   = '.admin__data-grid-pager .admin__control-text';
    public static $gridOutOfPageNumber                   = '.admin__data-grid-pager .admin__control-support-text';
    public static $gridGoToNextPageButton                = '.action-next';

    public function clickOnGridRowsPerPageCountButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$gridRowsPerPageCountButton);
    }

    public function clickOnSpecificRowsPerPageCount($itemsPerPage)
    {
        $I = $this->acceptanceTester;
        $I->click($itemsPerPage);
    }

    public function clickOnCustomRowsPerPageCountLink()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$gridRowsPerPageCustomLink);
    }

    public function enterCustomRowsPerPage($customPerPageCount)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$gridRowsPerPageCustomRowsField, $customPerPageCount);
    }

    public function clickOnCustomRowsPerPageSaveLink()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$gridRowsPerPageCustomSaveButton);
    }

    public function clickOnGridGoBackAPageButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$gridGoBackAPageButton);
    }

    public function enterGridPageNumber($pageNumber)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$gridPageNumberField, $pageNumber);
    }

    public function clickOnGoToNextPageButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$gridGoToNextPageButton);
    }
    /**
     * End of Navigation Controls
     */

    /**
     * Start of OLD Grid Controls
     */
    public static $gridMainArea                          = '.admin__data-grid-outer-wrap > .admin__data-grid-wrap';
    public static $gridHeaderCheckboxColumn              = '.data-grid-multicheck-cell';
    public static $gridHeaderNameColumn                  = '.data-grid-th';

    public static $gridNthRow                            = '.admin__data-grid-outer-wrap>.admin__data-grid-wrap tbody tr:nth-child(%s)';
    public static $checkboxInGridNthRow                  = '.admin__data-grid-outer-wrap>.admin__data-grid-wrap tbody tr:nth-child(%s) .admin__control-checkbox';

    public function seeInCurrentGridNthRow($n, array $texts)
    {
        $I = $this->acceptanceTester;
        $I->waitForPageLoad();
        foreach ($texts as $text) {
            $I->see($text, sprintf(self::$gridNthRow, $n));
        }
    }

    public function checkCheckboxInCurrentNthRow($n)
    {
        $I = $this->acceptanceTester;
        $I->waitForPageLoad();
        try {
            $I->dontSeeCheckboxIsChecked(sprintf(self::$checkboxInGridNthRow, 1));
            $I->click(sprintf(self::$checkboxInGridNthRow, 1));
        } catch (ElementNotFound $e) {
        }
    }
    /**
     * End of OLD Grid Controls
     */
    
    /**
     * Start of NEW Grid Controls
     */
    public static $gridHeaderQuickSelectCheckbox = '.action-multicheck-wrap';
    public static $gridHeaderQuickSelectDropDown = '.action-multicheck-wrap .action-menu';
    public static $gridHeaderTitle               = '.data-grid-th .data-grid-cell-content';

    public function clickOnGridHeaderTitle($headerName)
    {
        $I = $this->acceptanceTester;
        $I->click(self::$gridColumnHeaderName, $headerName);
        $I->waitForLoadingMaskToDisappear();
    }

    public function clickOnGridHeaderQuickSelectCheckbox()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$gridHeaderQuickSelectCheckbox);
    }

    public function selectGridQuickSelectFromDropDown($quickSelectValue)
    {
        $I = $this->acceptanceTester;
        $I->selectOption(self::$gridHeaderQuickSelectDropDown, $quickSelectValue);
    }

    public function determineRowIndexBasedOn($keyText)
    {
        $I = $this->acceptanceTester;
        $selector = "//div[contains(@class, 'data-grid-cell-content')][contains(., '" . $keyText . "')]/parent::td/parent::tr";
        $number = $I->grabAttributeFrom($selector, 'data-repeat-index');
        return $number;
    }

    public function clickOnGridRowContaining($keyText)
    {
        $I = $this->acceptanceTester;
        $actionLinkSelector = '.data-row[data-repeat-index="' . self::determineRowIndexBasedOn($keyText) . '"]';

        $I->click($actionLinkSelector);
        $I->waitForPageLoad();
    }

    public function clickOnGridRowCheckboxContaining($keyText)
    {
        $I = $this->acceptanceTester;
        $actionLinkSelector = '.data-row[data-repeat-index="' . self::determineRowIndexBasedOn($keyText) . '"] .data-grid-checkbox-cell-inner';

        $I->click($actionLinkSelector);
        $I->waitForPageLoad();
    }

    public function clickOnGridRowActionSelectLinkContaining($keyText)
    {
        $I = $this->acceptanceTester;
        $actionLinkSelector = '.data-row[data-repeat-index="' . self::determineRowIndexBasedOn($keyText) . '"] .action-select';

        $I->click($actionLinkSelector);
        $I->waitForPageLoad();
    }

    public function clickOnGridRowActionLinkContaining($keyText)
    {
        $I = $this->acceptanceTester;
        $actionLinkSelector = '.data-row[data-repeat-index="' . self::determineRowIndexBasedOn($keyText) . '"] .action-menu-item';

        $I->click($actionLinkSelector);
        $I->waitForPageLoad();
    }

    public function verifyGridRowContains($keyText, $expectedValue)
    {
        $I = $this->acceptanceTester;
        $actionLinkSelector = '.data-row[data-repeat-index="' . self::determineRowIndexBasedOn($keyText) . '"]';

        $I->see($expectedValue, $actionLinkSelector);
        $I->waitForPageLoad();
    }
    /**
     * End of NEW Grid Controls
     */
}