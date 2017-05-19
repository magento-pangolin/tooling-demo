<?php
namespace Magento\Xxyyzz\Page\Stores;

use Magento\Xxyyzz\Page\AbstractAdminGrid;

class AdminTaxZonesAndRatesGrid extends AbstractAdminGrid
{
    public static $taxIdentifierField = '#tax_rate_grid_filter_code';
    public static $countryDropDown    = '#tax_rate_grid_filter_tax_country_id';
    public static $stateRegionField   = '#tax_rate_grid_filter_region_name';
    public static $zipPostCodeField   = '#tax_rate_grid_filter_tax_postcode';
    public static $rateFromField      = '#tax_rate_grid_filter_rate_from';
    public static $rateToField        = '#tax_rate_grid_filter_rate_to';

    public function enterTaxIdentifierField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$taxIdentifierField, $value);
    }

    public function selectCountryDropDown($value)
    {
        $I = $this->acceptanceTester;
        $I->selectOption(self::$countryDropDown, $value);
    }

    public function enterStateRegionField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$stateRegionField, $value);
    }

    public function enterZipPostCodeField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$zipPostCodeField, $value);
    }

    public function enterRateFromField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$rateFromField, $value);
    }

    public function enterRateToField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$rateToField, $value);
    }
}