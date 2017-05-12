<?php
namespace Magento\Xxyyzz\Page;

class AdminSearchTermsReportGrid extends AbstractAdminGrid
{
    public static $searchQueryField = '#searchReportGrid_filter_query_text';
    public static $storeDropDown    = 'select[name="store_id"]';
    public static $resultsFromField = '#searchReportGrid_filter_num_results_from';
    public static $resultsToField   = '#searchReportGrid_filter_num_results_to';
    public static $hitsFromField    = '#searchReportGrid_filter_popularity_from';
    public static $hitsToField      = '#searchReportGrid_filter_popularity_to';

    public function enterSearchQueryField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$searchQueryField, $value);
    }

    public function selectStoreDropDown($value)
    {
        $I = $this->acceptanceTester;
        $I->selectOption(self::$storeDropDown, $value);
    }

    public function enterResultsFromField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$resultsFromField, $value);
    }

    public function enterResultsToField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$resultsToField, $value);
    }

    public function enterHitsFromField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$hitsFromField, $value);
    }

    public function enterHitsToField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$hitsToField, $value);
    }
}