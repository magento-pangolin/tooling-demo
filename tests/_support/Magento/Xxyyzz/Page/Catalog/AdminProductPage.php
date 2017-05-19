<?php
namespace Magento\Xxyyzz\Page\Catalog;

use Magento\Xxyyzz\Helper\AdminUrlList;
use Magento\Xxyyzz\Page\AbstractAdminPage;

class AdminProductPage extends AbstractAdminPage
{
    public function goToTheAdminCatalogGrid()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminCatalogGrid);
        $I->waitForPageLoad();
    }

    public function goToTheAdminProductForIdPage($productId)
    {
        $I = $this->acceptanceTester;
        $I->amOnPage((AdminUrlList::$adminProductForIdPage . $productId));
        $I->waitForPageLoad();
    }

    public function goToTheAdminAddSimpleProductPage()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminAddSimpleProductPage);
        $I->waitForPageLoad();
    }

    public function goToTheAdminAddConfigurableProductPage()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminAddConfigurableProductPage);
        $I->waitForPageLoad();
    }

    public function goToTheAdminAddGroupedProductPage()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminAddGroupedProductPage);
        $I->waitForPageLoad();
    }

    public function goToTheAdminAddVirtualProductPage()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminAddVirtualProductPage);
        $I->waitForPageLoad();
    }

    public function goToTheAdminAddBundledProductPage()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminAddBundleProductPage);
        $I->waitForPageLoad();
    }

    public function goToTheAdminAddDownloadableProductPage()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminAddDownloadableProductPage);
        $I->waitForPageLoad();
    }

    public function shouldBeOnTheAdminCatalogGrid()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminCatalogGrid);
        self::verifyGlobalAdminPageTitle('Catalog');
    }

    public function shouldBeOnTheAdminProductForIdPage($productId, $productName)
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl((AdminUrlList::$adminProductForIdPage . $productId));
        self::verifyGlobalAdminPageTitle($productName);
    }

    public function shouldBeOnTheAdminAddSimpleProductPage()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminAddSimpleProductPage);
        self::verifyGlobalAdminPageTitle('New Product');
    }

    public function shouldBeOnTheAdminAddConfigurableProductPage()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminAddConfigurableProductPage);
        self::verifyGlobalAdminPageTitle('New Product');
    }

    public function shouldBeOnTheAdminAddGroupedProductPage()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminAddGroupedProductPage);
        self::verifyGlobalAdminPageTitle('New Product');
    }

    public function shouldBeOnTheAdminAddVirtualProductPage()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminAddVirtualProductPage);
        self::verifyGlobalAdminPageTitle('New Product');
    }

    public function shouldBeOnTheAdminAddBundledProductPage()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminAddBundleProductPage);
        self::verifyGlobalAdminPageTitle('New Product');
    }

    public function shouldBeOnTheAdminAddDownloadableProductPage()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminAddDownloadableProductPage);
        self::verifyGlobalAdminPageTitle('New Product');
    }

    public static $addProductButton              = '#add_new_product-button';
    public static $addProductTypeButton          = '.action-toggle[data-ui-id="products-list-add-new-product-button-dropdown"]';
    public static $addSingleProductOption        = '.item[data-ui-id="products-list-add-new-product-button-item-simple"]';
    public static $addConfigurableProductOption  = '.item[data-ui-id="products-list-add-new-product-button-item-configurable"]';
    public static $addGroupedProductOption       = '.item[data-ui-id="products-list-add-new-product-button-item-grouped"]';
    public static $addVirtualProductOption       = '.item[data-ui-id="products-list-add-new-product-button-item-virtual"]';
    public static $addBundleProductOption        = '.item[data-ui-id="products-list-add-new-product-button-item-bundle"]';
    public static $addDownloadableProductOption  = '.item[data-ui-id="products-list-add-new-product-button-item-downloadable"]';
    public static $productAddAttributeButton     = '#addAttribute';
    public static $productSaveButton             = '#save-button';
    public static $productSaveTypeButton         = '.action-toggle[data-ui-id="save-button-dropdown"]';
    public static $productSaveAndNewOption       = '#save_and_new';
    public static $productSaveAndDuplicateOption = '#save_and_duplicate';
    public static $productSaveAndCloseOption     = '#save_and_close';

    public static $addAttributeCancelButton      = 'button[class=""]';
    public static $addAttributeAddSelectedButton = "//span[contains(text(), 'Add Selected')]/parent::button";

    public function clickOnAddProductButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$addProductButton);
        $I->waitForPageLoad();
    }

    public function clickOnAddProductTypeButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$addProductTypeButton);
        $I->waitForPageLoad();
    }

    public function clickOnAddSingleProductOption()
    {
        $I = $this->acceptanceTester;
        self::clickOnAddProductTypeButton();
        $I->click(self::$addSingleProductOption);
        $I->waitForPageLoad();
    }

    public function clickOnAddConfigurableProductOption()
    {
        $I = $this->acceptanceTester;
        self::clickOnAddProductTypeButton();
        $I->click(self::$addConfigurableProductOption);
        $I->waitForPageLoad();
    }

    public function clickOnAddGroupedProductOption()
    {
        $I = $this->acceptanceTester;
        self::clickOnAddProductTypeButton();
        $I->click(self::$addGroupedProductOption);
        $I->waitForPageLoad();
    }

    public function clickOnAddVirtualProductOption()
    {
        $I = $this->acceptanceTester;
        self::clickOnAddProductTypeButton();
        $I->click(self::$addVirtualProductOption);
        $I->waitForPageLoad();
    }

    public function clickOnAddBundleProductOption()
    {
        $I = $this->acceptanceTester;
        self::clickOnAddProductTypeButton();
        $I->click(self::$addBundleProductOption);
        $I->waitForPageLoad();
    }

    public function clickOnAddDownloadableProductOption()
    {
        $I = $this->acceptanceTester;
        self::clickOnAddProductTypeButton();
        $I->click(self::$addDownloadableProductOption);
        $I->waitForPageLoad();
    }

    public function clickOnProductBackButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminBackButton);
        $I->waitForPageLoad();
    }

    public function clickOnProductAddAttributeButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$productAddAttributeButton);
        $I->waitForPageLoad();
    }

    public function clickOnProductSaveButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$productSaveButton);
        $I->waitForPageLoad();
    }

    public function clickOnProductSaveTypeButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$productSaveTypeButton);
        $I->waitForPageLoad();
    }

    public function clickOnProductSaveAndNewOption()
    {
        $I = $this->acceptanceTester;
        self::clickOnProductSaveTypeButton();
        $I->click(self::$productSaveAndNewOption);
        $I->waitForPageLoad();
    }

    public function clickOnProductSaveAndDuplicateOption()
    {
        $I = $this->acceptanceTester;
        self::clickOnProductSaveTypeButton();
        $I->click(self::$productSaveAndDuplicateOption);
        $I->waitForPageLoad();
    }

    public function clickOnProductSaveAndCloseOption()
    {
        $I = $this->acceptanceTester;
        self::clickOnProductSaveTypeButton();
        $I->click(self::$productSaveAndCloseOption);
        $I->waitForPageLoad();
    }

    public function clickOnAddAttributeCancelButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$addAttributeCancelButton);
        $I->waitForPageLoad();
    }

    public function clickOnAddAttributeAddSelectedButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$addAttributeAddSelectedButton);
        $I->waitForPageLoad();
    }

    /**
     * Product data fields.
     */
    public static $productName                     = '.admin__field[data-index=name] input';
    public static $productSku                      = '.admin__field[data-index=sku] input';
    public static $productPricePrefix              = '.admin__field[data-index=price] .admin__addon-prefix>span';
    public static $productPrice                    = '.admin__field[data-index=price] input';
    public static $productQuantity                 = '.admin__field[data-index=quantity_and_stock_status_qty] input';
    public static $productStockStatus              = '.admin__field[data-index=quantity_and_stock_status] select';
    public static $productTaxClass                 = '.admin__field[data-index=tax_class_id] select';
    public static $productAttributeSetMultiSelect  = '.admin__field[data-index=attribute_set_id]';
    public static $productAttributeMultiSelectText
        = '.admin__field[data-index=attribute_set_id] .action-select.admin__action-multiselect>div';
    public static $productCategoriesMultiSelect    = '.admin__field[data-index=category_ids]';
    public static $productCategoriesMultiSelectText
        = '.admin__field[data-index=category_ids] .admin__action-multiselect-crumb:nth-child(%s)>span';

    public static $productUrlKey                   = '.admin__field[data-index=url_key] input';

    public function seeProductAttributeSet($name)
    {
        $I = $this->acceptanceTester;
        $I->assertEquals($name, $I->grabTextFrom(self::$productAttributeMultiSelectText));
    }

    public function seeProductName($name)
    {
        $I = $this->acceptanceTester;
        $I->seeInField(self::$productName, $name);
    }

    public function seeProductSku($sku)
    {
        $I = $this->acceptanceTester;
        $I->seeInField(self::$productSku, $sku);
    }

    public function seeProductPrice($price)
    {
        $I = $this->acceptanceTester;
        $I->seeInField(self::$productPrice, $I->formatMoney($price)['number']);
    }

    public function seeProductQuantity($qty)
    {
        $I = $this->acceptanceTester;
        $I->seeInField(self::$productQuantity, $qty);
    }

    public function seeProductStockStatus($status)
    {
        $I = $this->acceptanceTester;
        $I->seeOptionIsSelected(self::$productStockStatus, $status);
    }

    /**
     * @param array $names
     */
    public function seeProductCategories(array $names)
    {
        $I = $this->acceptanceTester;
        $count = 2;
        foreach ($names as $name) {
            $I->assertEquals($name, $I->grabTextFrom(sprintf(self::$productCategoriesMultiSelectText, $count)));
            $count += 1;
        }
    }

    public function seeProductUrlKey($urlKey)
    {
        $I = $this->acceptanceTester;
        $this->expandCollapsibleAreaOnAdminAddOrEditPage('search-engine-optimization');
        $I->seeInField(self::$productUrlKey, $urlKey);
    }

    // Fill new product
    public function selectProductAttributeSet($name)
    {
        $I = $this->acceptanceTester;
        $I->searchAndMultiSelectOption(self::$productAttributeSetMultiSelect, [$name]);
    }

    public function fillFieldProductName($name)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$productName, $name);
    }

    public function fillFieldProductSku($sku)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$productSku, $sku);
    }

    public function fillFieldProductPrice($price)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$productPrice, $price);
    }

    public function fillFieldProductQuantity($qty)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$productQuantity, $qty);
    }

    public function selectProductStockStatus($status)
    {
        $I = $this->acceptanceTester;
        $I->selectOption(self::$productStockStatus, $status);
    }

    public function fillFieldProductUrlKey($urlKey)
    {
        $this->expandCollapsibleAreaOnAdminAddOrEditPage('search-engine-optimization');
        $I = $this->acceptanceTester;
        $I->fillField(self::$productUrlKey, $urlKey);
    }

    /**
     * @param array $names
     */
    public function selectProductCategories(array $names)
    {
        $I = $this->acceptanceTester;
        $I->searchAndMultiSelectOption(self::$productCategoriesMultiSelect, $names, true);
    }

    public function saveProduct()
    {
        $I = $this->acceptanceTester;
        $I->performOn(self::$productSaveButton, ['click' => self::$productSaveButton]);
        $I->waitForPageLoad();
    }

    public function addBasicProductUnderCategory($productData, $categoryData)
    {
        self::clickOnAddProductButton();

        self::fillFieldProductName($productData['productName']);
        self::fillFieldProductSku($productData['sku']);
        self::fillFieldProductPrice($productData['price']);
        self::selectProductCategories(array($categoryData['categoryName']));

        self::saveProduct();
    }
}
