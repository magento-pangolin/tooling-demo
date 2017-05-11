<?php
namespace Magento\Xxyyzz\Page\Catalog;

use Magento\Xxyyzz\Page\AbstractAdminPage;
use Magento\Xxyyzz\Helper\AdminUrlList;

class AdminCategoriesPage extends AbstractAdminPage
{
    /**
     * Buttons in category page.
     */
    public static $addRootCategoryButton           = '#add_root_category_button';
    public static $addSubCategoryButton            = '#add_subcategory_button';

    public static $scheduleNewUpdateButton         = '#staging_update_new';
    public static $saveCategoryButton              = '#save';

    public static $categoryContentToggle
        = '.fieldset-wrapper[data-index=content] .fieldset-wrapper-title[data-state-collapsible=%s]';
    public static $categorySearchEngineOptInToggle
        = '.fieldset-wrapper[data-index=search_engine_optimization] .fieldset-wrapper-title[data-state-collapsible=%s]';

    /**
     * Category data fields.
     */
    public static $categoryName                    = '.admin__control-text[name=name]';
    public static $categoryUrlKey                  = '.admin__control-text[name=url_key]';

    public function goToTheAdminCategoriesPage()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminCategoriesPage);
        $I->waitForPageLoad();
    }

    public function goToTheAdminCategoryForIdPage($categoryId)
    {
        $I = $this->acceptanceTester;
        $I->amOnPage((AdminUrlList::$adminCategoryForIdPage . $categoryId));
        $I->waitForPageLoad();
    }

    public function goToTheAdminAddRootCategoryForStoreIdPage($storeId)
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(('/admin/catalog/category/add/store/' . $storeId . '/parent/1'));
        $I->waitForPageLoad();
    }

    public function goToTheAdminAddSubCategoryForStoreIdPage($storeId)
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(('/admin/catalog/category/add/store/' . $storeId . '/parent/2'));
        $I->waitForPageLoad();
    }

    public function shouldBeOnTheAdminCategoriesPage()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminCategoriesPage);
        self::verifyGlobalAdminPageTitle('Default Category');
    }

    public function shouldBeOnTheAdminCategoryForIdPage($categoryId, $categoryName)
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl((AdminUrlList::$adminCategoryForIdPage . $categoryId));
        self::verifyGlobalAdminPageTitle($categoryName);
    }

    public function shouldBeOnTheAdminAddRootCategoryForStoreIdPage($storeId)
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(('/admin/catalog/category/add/store/' . $storeId . '/parent/1'));
        self::verifyGlobalAdminPageTitle('New Category');
    }

    public function shouldBeOnTheAdminAddSubCategoryForStoreIdPage($storeId)
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(('/admin/catalog/category/add/store/' . $storeId . '/parent/2'));
        self::verifyGlobalAdminPageTitle('New Category');
    }

    public function clickOnDeleteButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminDeleteButton);
        $I->waitForPageLoad();
    }

    public function clickOnSaveButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminSaveButton);
        $I->waitForPageLoad();
    }

    public function clickOnAddRootCategoryButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$addRootCategoryButton);
        $I->waitForPageLoad();
    }

    public function clickOnSddSubCategoryButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$addSubCategoryButton);
        $I->waitForPageLoad();
    }

    public function clickOnContent()
    {
        self::clickOnCollapsibleAreaOnAdminAddOrEditPage('Content');
    }

    public function clickOnDisplaySettings()
    {
        self::clickOnCollapsibleAreaOnAdminAddOrEditPage('Display Settings');
    }

    public function clickOnSearchEngineOptimization()
    {
        self::clickOnCollapsibleAreaOnAdminAddOrEditPage('Search Engine Optimization');
    }

    public function clickOnProductsInCategory()
    {
        self::clickOnCollapsibleAreaOnAdminAddOrEditPage('Products in Category');
    }

    public function clickOnDesign()
    {
        self::clickOnCollapsibleAreaOnAdminAddOrEditPage('Design');
    }

    public function clickOnScheduleDesignUpdate()
    {
        self::clickOnCollapsibleAreaOnAdminAddOrEditPage('Schedule Design Update');
    }

    public function fillFieldCategoryName($name)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$categoryName, $name);
    }

    public function fillFieldCategoryUrlKey($name)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$categoryUrlKey, $name);
    }

    public function saveCategory()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$saveCategoryButton);
        $I->waitForPageLoad();
    }

    public function addBasicCategory($categoryDetails)
    {
        self::clickOnAddRootCategoryButton();

        self::fillFieldCategoryName($categoryDetails['categoryName']);

        self::clickOnSearchEngineOptimization();
        self::fillFieldCategoryUrlKey($categoryDetails['urlKey']);

        self::saveCategory();
    }
}
