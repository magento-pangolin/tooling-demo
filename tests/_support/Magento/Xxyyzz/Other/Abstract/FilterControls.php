<?php

use Magento\Xxyyzz\Page\AbstractAdminPage;

class FilterControls extends AbstractAdminPage
{
    /**
     * Orders UI map for admin data grid filter section.
     */
    public static $filterPurchaseDateFromField        = '.admin__control-text[name="created_at[from]"]';
    public static $filterPurchaseDateToField          = '.admin__control-text[name="created_at[to]"]';
    public static $filterGrandTotalBaseFromField      = '.admin__control-text[name="base_grand_total[from]"]';
    public static $filterGrandTotalBaseToField        = '.admin__control-text[name="base_grand_total[to]"]';
    public static $filterGrandTotalPurchasedFromField = '.admin__control-text[name="grand_total[from]"]';
    public static $filterGrandTotalPurchasedToField   = '.admin__control-text[name="grand_total[to]"]';
    public static $filterPurchasePointDropDownMenu    = '.admin__control-select[name="store_id"]';
    public static $filterIdField                      = '.admin__control-text[name="increment_id"]';
    public static $filterBillToNameField              = '.admin__control-text[name="billing_name"]';
    public static $filterShipToNameField              = '.admin__control-text[name="shipping_name"]';
    public static $filterStatusDropDownMenu           = '.admin__control-select[name="status"]';

    public function enterPurchaseDateFromFilter($purchaseDateFrom)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterPurchaseDateFromField, $purchaseDateFrom);
    }

    public function enterPurchaseDateToFilter($purchaseDateTo)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterPurchaseDateToField, $purchaseDateTo);
    }

    public function enterGrandTotalBaseFromFilter($grandTotalBaseFrom)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterGrandTotalBaseFromField, $grandTotalBaseFrom);
    }

    public function enterGrandTotalBaseToFilter($grandTotalBaseTo)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterGrandTotalBaseToField, $grandTotalBaseTo);
    }

    public function enterGrandTotalPurchasedFromFilter($grandTotalPurchasedFrom)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterGrandTotalPurchasedFromField, $grandTotalPurchasedFrom);
    }

    public function enterGrandTotalPurchasedToFilter($grandTotalPurchasedTo)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterGrandTotalPurchasedToField, $grandTotalPurchasedTo);
    }

    public function selectPurchasePointFilter($purchasePoint)
    {
        $I = $this->acceptanceTester;
        $I->selectOption(self::$filterPurchasePointDropDownMenu, $purchasePoint);
    }

    public function enterIdFilter($id)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterIdField, $id);
    }

    public function enterBillToNameFilter($billToName)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterBillToNameField, $billToName);
    }

    public function enterShipToNameFilter($shipToName)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterShipToNameField, $shipToName);
    }

    public function selectStatusFilter($status)
    {
        $I = $this->acceptanceTester;
        $I->selectOption(self::$filterStatusDropDownMenu, $status);
    }

    /**
     * Products UI map for admin data grid filter section.
     */
    public static $filterIdFromField                 = '.admin__control-text[name="entity_id[from]"]';
    public static $filterIdToField                   = '.admin__control-text[name="entity_id[to]"]';
    public static $filterPriceFromField              = '.admin__control-text[name="price[from]"]';
    public static $filterPriceToField                = '.admin__control-text[name="price[to]"]';
    public static $filterQuantityFromField           = '.admin__control-text[name="qty[from]"]';
    public static $filterQuantityToField             = '.admin__control-text[name="qty[to]"]';
    public static $filterStoreViewDropDown           = '.admin__control-select[name="store_id"]';
    public static $filterProductName                 = '.admin__form-field input[name=name]';
    public static $filterProductTypeDropDown         = '.admin__control-select[name="type_id"]';
    public static $filterProductAttributeSetDropDown = '.admin__control-select[name="attribute_set_id"]';
    public static $filterProductSkuField             = '.admin__form-field input[name=sku]';
    public static $filterProductVisibilityDropDown   = '.admin__control-select[name="visibility"]';
    public static $filterProductStatusDropDown       = '.admin__control-select[name="status"]';

    /**
     * Customer UI map for admin data grid filter section.
     */
//    public static $filterIdFromField            = '.admin__control-text[name="entity_id[from]"]';
//    public static $filterIdToField              = '.admin__control-text[name="entity_id[to]"]';
    public static $filterCustomerSinceFromField = '.admin__control-text[name="created_at[from]"]';
    public static $filterCustomerSinceToField   = '.admin__control-text[name="created_at[to]"]';
    public static $filterDateOfBirthFromField   = '.admin__control-text[name="dob[from]"]';
    public static $filterDateOfBirthToField     = '.admin__control-text[name="dob[to]"]';
    public static $filterNameField              = '.admin__control-text[name="name"]';
    public static $filterEmailField             = '.admin__control-text[name="email"]';
    public static $filterGroupDropDown          = '.admin__control-select[name="group_id"]';
    public static $filterPhoneField             = '.admin__control-text[name="billing_telephone"]';
    public static $filterZipCodeField           = '.admin__control-text[name="billing_postcode"]';
    public static $filterCountryDropDown        = '.admin__control-select[name="billing_country_id"]';
    public static $filterStateProvinceField     = '.admin__control-text[name="billing_region"]';
    public static $filterWebSiteDropDown        = '.admin__control-select[name="website_id"]';
    public static $filterTaxVatNumberField      = '.admin__control-text[name="taxvat"]';
    public static $filterGenderDropDown         = '.admin__control-select[name="gender"]';

    public function enterFilterIdFrom($idFrom)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterIdFromField, $idFrom);
    }

    public function enterFilterIdTo($idTo)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterIdToField, $idTo);
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

    public function selectFilterGroup($group)
    {
        $I = $this->acceptanceTester;
        $I->selectOption(self::$filterGroupDropDown, $group);
    }

    public function enterFilterPhone($phoneNumber)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterPhoneField, $phoneNumber);
    }

    public function enterFilterZipCode($zipCode)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterZipCodeField, $zipCode);
    }

    public function selectFilterCountry($country)
    {
        $I = $this->acceptanceTester;
        $I->selectOption(self::$filterCountryDropDown, $country);
    }

    public function enterFilterStateProvince($stateProvince)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterStateProvinceField, $stateProvince);
    }

    public function selectFilterWebSite($website)
    {
        $I = $this->acceptanceTester;
        $I->selectOption(self::$filterWebSiteDropDown, $website);
    }

    public function enterFilterTaxVatNumber($taxVatNumber)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$filterTaxVatNumberField, $taxVatNumber);
    }

    public function selectFilterGender($gender)
    {
        $I = $this->acceptanceTester;
        $I->selectOption(self::$filterGenderDropDown, $gender);
    }
}