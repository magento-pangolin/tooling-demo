<?php
namespace Magento\Xxyyzz\Acceptance\Cms;

use Magento\Xxyyzz\Step\Backend\AdminStep;
use Magento\Xxyyzz\Page\Content\AdminPagesGrid;
use Magento\Xxyyzz\Page\Content\AdminPagesPage;
use Magento\Xxyyzz\Page\Storefront\Luma\ContentPage;
use Yandex\Allure\Adapter\Annotation\Features;
use Yandex\Allure\Adapter\Annotation\Stories;
use Yandex\Allure\Adapter\Annotation\Title;
use Yandex\Allure\Adapter\Annotation\Description;
use Yandex\Allure\Adapter\Annotation\Parameter;
use Yandex\Allure\Adapter\Annotation\Severity;
use Yandex\Allure\Adapter\Model\SeverityLevel;
use Yandex\Allure\Adapter\Annotation\TestCaseId;

/**
 * Class CreateContentPageCest
 *
 * Allure annotations
 * @Features({"Content"})
 * @Stories({"Exercise all Content Page fields", "Create a basic Content Page"})
 *
 * Codeception annotations
 * @group cms
 * @group pages
 * @env chrome
 * @env firefox
 * @env phantomjs
 */
class CreateContentPageCest
{
    public function _before(AdminStep $I)
    {
        $I->am('an Admin');
        $I->loginAsAdmin();
    }

    public function _after(AdminStep $I)
    {
        $I->goToTheAdminLogoutPage();
    }

    /**
     * Allure annotations
     * @Title("Enter text into every field on the ADD Content Page.")
     * @Description("Enter text into ALL fields on the ADD Content Page and verify the content of the fields.")
     * @Severity(level = SeverityLevel::NORMAL)
     * @TestCaseId("")
     * @Parameter(name = "AdminStep", value = "$adminStep")
     * @Parameter(name = "AdminCmsPage", value = "$I")
     *
     * Codeception annotations
     * @group fields
     * @param AdminStep $adminStep
     * @param AdminPagesPage $I
     * @return void
     */
    public function verifyThatEachFieldOnTheContentPageWorks(
        AdminStep $adminStep,
        AdminPagesPage $I
    ) 
    {
        $adminStep->wantTo('verify that I can use all of the fields on the page.');
        $I->goToTheAdminPagesGrid();
        $I->clickOnPagesAddNewPageButton();

        $pageData = $adminStep->getContentPage();

        $I->clickOnEnablePageToggle();

        $I->enterPageTitle($pageData['pageTitle']);

        $I->clickOnPageContent();
        $I->enterPageContentHeading($pageData['contentHeading']);
        $I->enterPageContentBody($pageData['contentBody']);

        $I->clickOnPageSearchEngineOptimisation();
        $I->enterUrlKey($pageData['urlKey']);
        $I->enterMetaTitle($pageData['metaTitle']);
        $I->enterMetaKeywords($pageData['metaKeywords']);
        $I->enterMetaDescription($pageData['metaDescription']);

        $I->clickOnPageInWebsites();
        $I->selectDefaultStoreView();

        $I->clickOnPageDesign();
        $I->selectLayout1Column();
        $I->enterLayoutUpdateXml($pageData['layoutUpdateXml']);

        $I->clickOnPageCustomDesignUpdate();
        $I->enterFrom($pageData['from']);
        $I->enterTo($pageData['to']);
        $I->selectNewThemeMagentoLuma();
        $I->selectNewLayout3Columns();

        $I->verifyPageTitle($pageData['pageTitle']);

        $I->verifyPageContentHeading($pageData['contentHeading']);
        $I->verifyPageContentBody($pageData['contentBody']);

        $I->verifyUrlKey($pageData['urlKey']);
        $I->verifyMetaTitle($pageData['metaTitle']);
        $I->verifyMetaKeywords($pageData['metaKeywords']);
        $I->verifyMetaDescription($pageData['metaDescription']);

        $I->verifyDefaultStoreView();

        $I->verifyLayout1Column();
        $I->verifyLayoutUpdateXml($pageData['layoutUpdateXml']);

        $I->verifyFrom($pageData['from']);
        $I->verifyTo($pageData['to']);
        $I->verifyNewThemeMagentoLuma();
        $I->verifyNewLayout3Columns();
    }

    /**
     * Allure annotations
     * @Title("Create a basic Content Page")
     * @Description("Enter text into the REQUIRED fields, SAVE the content and VERIFY it on the Storefront.")
     * @Severity(level = SeverityLevel::CRITICAL)
     * @TestCaseId("")
     * @Parameter(name = "AdminStep", value = "$adminStep")
     * @Parameter(name = "AdminPagesGrid", value = "$adminPagesGrid")
     * @Parameter(name = "AdminCmsPage", value = "$I")
     * @Parameter(name = "StorefrontCmsPage", value = "$contentPage")
     *
     * Codeception annotations
     * @group add
     * @param AdminStep $adminStep
     * @param AdminPagesGrid $adminPagesGrid
     * @param AdminPagesPage $I
     * @param ContentPage $contentPage
     * @return void
     */
    public function createContentPageTest(
        AdminStep $adminStep,
        AdminPagesGrid $adminPagesGrid,
        AdminPagesPage $I,
        ContentPage $contentPage
    )
    {
        $adminStep->wantTo('verify content page in admin');
        $pageData = $adminStep->getContentPage();

        $I->goToTheAdminPagesGrid();
        $I->clickOnPagesAddNewPageButton();

        $I->clickOnPageContent();
        $I->enterPageTitle($pageData['pageTitle']);
        $I->enterPageContentHeading($pageData['contentHeading']);
        $I->enterPageContentBody($pageData['contentBody']);

        $I->clickOnPageSearchEngineOptimisation();
        $I->enterUrlKey($pageData['urlKey']);

        $I->clickOnPageDetailsSavePageButton();
        $I->seeSaveSuccessMessage();

        $adminStep->openNewTabGoToVerify($pageData['urlKey']);
        $contentPage->verifyContentPageTitle($pageData['contentHeading']);
        $contentPage->verifyContentPageBody($pageData['contentBody']);
        $adminStep->closeNewTab();

        $adminPagesGrid->performGridSearchByKeyword($pageData['urlKey']);
        $adminPagesGrid->clickOnActionEditFor($pageData['urlKey']);
        
        $I->clickOnPageContent();
        $I->clickOnPageSearchEngineOptimisation();

        $I->verifyPageTitle($pageData['pageTitle']);

        $I->verifyPageContentHeading($pageData['contentHeading']);
        $I->verifyPageContentBody($pageData['contentBody']);
        $I->verifyUrlKey($pageData['urlKey']);
    }
}