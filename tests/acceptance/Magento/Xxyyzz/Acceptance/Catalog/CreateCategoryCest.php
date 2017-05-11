<?php
namespace Magento\Xxyyzz\Acceptance\Catalog;

use Magento\Xxyyzz\Step\Backend\AdminStep;
use Magento\Xxyyzz\Page\Catalog\AdminCategoriesPage;
use Magento\Xxyyzz\Page\Storefront\Luma\CategoryPage;
use Yandex\Allure\Adapter\Annotation\Stories;
use Yandex\Allure\Adapter\Annotation\Features;
use Yandex\Allure\Adapter\Annotation\Title;
use Yandex\Allure\Adapter\Annotation\Description;
use Yandex\Allure\Adapter\Annotation\Severity;
use Yandex\Allure\Adapter\Annotation\Parameter;
use Yandex\Allure\Adapter\Model\SeverityLevel;
use Yandex\Allure\Adapter\Annotation\TestCaseId;

/**
 * Class CreateSubCategoryCest
 *
 * Allure annotations
 * @Features({"Category"})
 * @Stories({"Create a sub-Category"})
 *
 * Codeception annotations
 * @group categories
 * @group add
 * @env chrome
 * @env firefox
 * @env phantomjs
 */
class CreateCategoryCest
{
    public function _before(AdminStep $I)
    {
        $I->loginAsAdmin();
    }

    public function _after(AdminStep $I)
    {
        $I->goToTheAdminLogoutPage();
    }

    /**
     * Allure annotations
     * @Title("Create sub category with required fields")
     * @Description("Create sub category with required fields")
     * @TestCaseId("")
     * @Severity(level = SeverityLevel::CRITICAL)
     * @Parameter(name = "AdminStep", value = "$adminStep")
     * @Parameter(name = "AdminCategoryPage", value = "$I")
     * @Parameter(name = "StorefrontCategoryPage", value = "$storefrontCategoryPage")
     *
     * Codeception annotations
     * @param AdminStep $adminStep
     * @param AdminCategoriesPage $I
     * @param CategoryPage $storefrontCategoryPage
     * @return void
     */
    public function createCategoryTest(
        AdminStep $adminStep,
        AdminCategoriesPage $I,
        CategoryPage $storefrontCategoryPage
    ) {
        $adminStep->wantTo('create sub category with required fields in admin Category page.');
        $category = $adminStep->getCategoryApiData();
        
        $I->goToTheAdminCategoriesPage();
        $I->clickOnSddSubCategoryButton();
        $I->fillFieldCategoryName($category['name']);

        $I->clickOnSearchEngineOptimization();
        $I->fillFieldCategoryUrlKey($category['custom_attributes'][0]['value']);
        $I->saveCategory();
        $I->seeGlobalAdminSuccessMessage();

        $adminStep->wantTo('verify created category in frontend category page.');
        $storefrontCategoryPage->amOnCategoryPage(str_replace('_', '-', $category['custom_attributes'][0]['value']));
        $storefrontCategoryPage->seeCategoryNameInTitleHeading($category['name']);
    }
}
