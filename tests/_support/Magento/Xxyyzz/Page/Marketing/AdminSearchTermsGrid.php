<?php
namespace Magento\Xxyyzz\Page;

class AdminSearchTermsGrid extends AbstractAdminGrid
{
    public static $quickSelectDropDown    = '#search_term_grid_filter_massaction';
    public static $searchQueryField       = '#search_term_grid_filter_search_query';
    public static $storeDropDown          = 'select[name="store_id"]';
    public static $resultsFromField       = '#search_term_grid_filter_num_results_from';
    public static $resultsToField         = '#search_term_grid_filter_num_results_to';
    public static $usesFromField          = '#search_term_grid_filter_popularity_from';
    public static $usesToField            = '#search_term_grid_filter_popularity_to';
    public static $redirectUrlField       = '#search_term_grid_filter_redirect';
    public static $suggestedTermsDropDown = '#search_term_grid_filter_display_in_terms';

    public function selectQuickSelectDropDown($value)
    {
        $I = $this->acceptanceTester;
        $I->selectOption(self::$quickSelectDropDown, $value);
    }
    
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

    public function enterUsesFromField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$usesFromField, $value);
    }

    public function enterUsesToField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$usesToField, $value);
    }

    public function enterRedirectUrlField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$redirectUrlField, $value);
    }

    public function selectSuggestedTermsDropDown($value)
    {
        $I = $this->acceptanceTester;
        $I->selectOption(self::$suggestedTermsDropDown, $value);
    }
}