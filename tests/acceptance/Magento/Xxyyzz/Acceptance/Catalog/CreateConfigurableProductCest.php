<?php
namespace Magento\Xxyyzz\Acceptance\ConfigurableProduct;

use Magento\Xxyyzz\Page\Catalog\AdminConfigurableProductPage;
use Magento\Xxyyzz\Step\Backend\AdminStep;
use Magento\Xxyyzz\Page\Catalog\AdminProductPage;
use Magento\Xxyyzz\Page\Storefront\Luma\CategoryPage;
use Magento\Xxyyzz\Page\Storefront\Luma\ProductPage;
use Magento\Xxyyzz\Step\Catalog\Api\CategoryApiStep;
use Magento\Xxyyzz\Step\Catalog\Api\ProductApiStep;
use Yandex\Allure\Adapter\Annotation\Features;
use Yandex\Allure\Adapter\Annotation\Stories;
use Yandex\Allure\Adapter\Annotation\Title;
use Yandex\Allure\Adapter\Annotation\Description;
use Yandex\Allure\Adapter\Annotation\Parameter;
use Yandex\Allure\Adapter\Annotation\Severity;
use Yandex\Allure\Adapter\Model\SeverityLevel;
use Yandex\Allure\Adapter\Annotation\TestCaseId;

/**
 * Class CreateConfigurableProductCest
 *
 * Allure annotations
 * @Features({"Catalog"})
 * @Stories({"Create configurable product"})
 *
 * Codeception annotations
 * @group configurable
 * @group add
 * @group no_sample_data
 * @group skip
 * @env chrome
 * @env firefox
 * @env phantomjs
 */
class CreateConfigurableProductCest
{
    /**
     * @var array
     */
    protected $category;

    /**
     * @var array
     */
    protected $product;

    /**
     * @var array
     */
    protected $productVariations;

    /**
     * @var array
     */
    protected $attributeValues = [];

    /**
     * @var array
     */
    protected $variationPrice = [];

    /**
     * @var array
     */
    protected $variationQuantity = [];

    public function _before(AdminStep $I, CategoryApiStep $categoryApi)
    {
        $I->loginAsAdmin();
        $this->category = $I->getCategoryApiData();
        $categoryApi->amAdminTokenAuthenticated();
        $this->category = array_merge(
            $this->category,
            ['id' => $categoryApi->createCategory(['category' => $this->category])]
        );
        $this->category['url_key'] = $this->category['custom_attributes'][0]['value'];
        $this->product = $I->getProductApiData('configurable', $this->category['id']);
        if ($this->product['extension_attributes']['stock_item']['is_in_stock'] !== 0) {
            $this->product['stock_status'] = 'In Stock';
            $this->product['qty'] = $this->product['extension_attributes']['stock_item']['qty'];
        } else {
            $this->product['stock_status'] = 'Out of Stock';
        }
        $this->product['url_key'] = $this->product['custom_attributes'][0]['value'];

        $this->productVariations = [
            [
                'attribute_code' => 'Color',
                'attribute_value' => 'red',
                'sku' => $this->product['sku'].'-red',
                'price' => '11.11',
                'qty' => $this->product['qty'],
            ],
            [
                'attribute_code' => 'Color',
                'attribute_value' => 'blue',
                'sku' => $this->product['sku'].'-blue',
                'price' => '22.22',
                'qty' => $this->product['qty'],
            ],
            [
                'attribute_code' => 'Color',
                'attribute_value' => 'white',
                'sku' => $this->product['sku'].'-white',
                'price' => '33.33',
                'qty' => $this->product['qty'],
            ]
        ];

        for ($c = 0; $c < count($this->productVariations); $c++) {
            $this->variationPrice[$c] = $this->productVariations[$c]['price'];
            $this->variationQuantity[$c] = $this->productVariations[$c]['qty'];
            $this->attributeValues[$c] = $this->productVariations[$c]['attribute_value'];
        }
    }

    public function _after(AdminStep $I)
    {
        $I->goToTheAdminLogoutPage();
    }

    /**
     * Allure annotations
     * @Title("Create a configurable product and verify on the storefront")
     * @Description("Create a configurable product and verify on the storefront.")
     * @TestCaseId("")
     * @Severity(level = SeverityLevel::CRITICAL)
     * @Parameter(name = "AdminStep", value = "$adminStep")
     * @Parameter(name = "AdminProductPage", value = "$adminProductPage")
     * @Parameter(name = "AdminConfigurableProductPage", value = "$I")
     * @Parameter(name = "StorefrontCategoryPage", value = "$storefrontCategoryPage")
     * @Parameter(name = "StorefrontProductPage", value = "$storefrontProductPage")
     *
     * @param AdminStep $adminStep
     * @param AdminProductPage $adminProductPage
     * @param AdminConfigurableProductPage $I
     * @param CategoryPage $storefrontCategoryPage
     * @param ProductPage $storefrontProductPage
     * @return void
     */
    public function createConfigurableProductTest(
        AdminStep $adminStep,
        AdminProductPage $adminProductPage,
        AdminConfigurableProductPage $I,
        CategoryPage $storefrontCategoryPage,
        ProductPage $storefrontProductPage
    ) {
        $adminStep->wantTo('create configurable product with required fields in admin product page.');
        $adminProductPage->goToTheAdminCatalogGrid();
        $adminProductPage->clickOnAddConfigurableProductOption();
        $adminProductPage->shouldBeOnTheAdminAddConfigurableProductPage();
        $I->fillFieldProductName($this->product['name']);
        $I->fillFieldProductSku($this->product['sku']);
        $I->fillFieldProductPrice($this->product['price']);
        if (isset($this->product['qty'])) {
            $I->fillFieldProductQuantity($this->product['qty']);
        }
        $I->selectProductStockStatus($this->product['stock_status']);
        $I->selectProductCategories([$this->category['name']]);
        $I->fillFieldProductUrlKey($this->product['url_key']);

        $adminStep->wantTo('create configurations for product.');
        $I->clickCreateConfigurationsButton();

        $adminStep->wantTo('on Create Product Configurations Wizard - Select Attributes...');
        $I->filterAndSelectAttributeByCode(
            strtolower($this->productVariations[0]['attribute_code'])
        );
        $I->checkCheckboxInCurrentNthRow(1);
        $I->clickNextButton();

        $adminStep->wantTo('on Create Product Configurations Wizard - Attributes Values...');
        for ($c = 0; $c < count($this->productVariations); $c++) {
            $I->checkAndSelectAttributeOption(
                $this->productVariations[$c]['attribute_code'],
                $this->productVariations[$c]['attribute_value']
            );
        }
        $I->clickNextButton();

        $adminStep->wantTo('on Create Product Configurations Wizard - Bulk Images, Price and Quantity...');
        $I->clickApplyUniquePriceRadioButton();
        $I->selectAttributeToApplyUniquePrice(
            $this->productVariations[0]['attribute_code']
        );
        $I->fillFieldWithUniquePrice($this->variationPrice);
        $I->clickApplySingleQuantityRadioButton();
        $I->fillFieldApplySingleQuantity($this->variationQuantity[0]);
        $I->clickNextButton();

        $adminStep->wantTo('on Create Product Configurations Wizard - Summary...');
        $adminStep->wantTo('generate configurable products.');
        $I->clickNextButton();

        $adminStep->wantTo('see configurable product successfully saved message.');
        $I->saveProduct();
        $adminStep->seeElement($I::$globalSuccessMessage);

        $adminStep->wantTo('verify configurable product data in admin product page.');
        $I->seeProductAttributeSet('Default');
        $I->seeProductName($this->product['name']);
        $I->seeProductSku($this->product['sku']);
        $I->seeProductPriceDisabled();
        $I->seeProductQuantityDisabled();
        $I->seeProductStockStatus($this->product['stock_status']);
        $I->seeProductCategories([$this->category['name']]);
        $I->seeProductUrlKey(str_replace('_', '-', $this->product['url_key']));
        $I->assertNumberOfConfigurableVariations(count($this->productVariations));
        foreach ($this->productVariations as $variation) {
            $I->seeInConfigurableVariations($variation);
        }

        $adminStep->wantTo('verify configurable product data in frontend category page.');
        $storefrontCategoryPage->amOnCategoryPage($this->category['url_key']);
        $storefrontCategoryPage->seeProductLinksInPage(
            $this->product['name'],
            str_replace('_', '-', $this->product['url_key'])
        );
        $storefrontCategoryPage->seeProductNameInPage($this->product['name']);
        $storefrontCategoryPage->seeProductPriceInPage($this->product['name'], $this->variationPrice[0]);

        $adminStep->wantTo('verify configurable product data in frontend product page.');
        $storefrontProductPage->amOnProductPage(str_replace('_', '-', $this->product['url_key']));
        $storefrontProductPage->seeProductNameInPage($this->product['name']);
        $storefrontProductPage->seeProductPriceInPage($this->variationPrice[0]);
        $storefrontProductPage->seeProductStockStatusInPage($this->product['stock_status']);
        $storefrontProductPage->seeProductSkuInPage($this->productVariations[0]['sku']);
        $storefrontProductPage->seeProductOptions($this->attributeValues);
    }
}
