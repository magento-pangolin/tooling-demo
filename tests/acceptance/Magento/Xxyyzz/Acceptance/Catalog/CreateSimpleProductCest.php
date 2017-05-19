<?php
namespace Magento\Xxyyzz\Acceptance\Catalog;

use Magento\Xxyyzz\Helper\AdminNavigation;
use Magento\Xxyyzz\Page\Catalog\AdminProductPage;
use Magento\Xxyyzz\Page\Storefront\Luma\CategoryPage;
use Magento\Xxyyzz\Page\Storefront\Luma\ProductPage;
use Magento\Xxyyzz\Step\Catalog\Api\CategoryApiStep;
use Yandex\Allure\Adapter\Annotation\Features;
use Yandex\Allure\Adapter\Annotation\Stories;
use Yandex\Allure\Adapter\Annotation\Title;
use Yandex\Allure\Adapter\Annotation\Description;
use Yandex\Allure\Adapter\Annotation\Parameter;
use Yandex\Allure\Adapter\Annotation\Severity;
use Yandex\Allure\Adapter\Model\SeverityLevel;
use Yandex\Allure\Adapter\Annotation\TestCaseId;

/**
 * Class CreateSimpleProductCest
 *
 * Allure annotations
 * @Features({"Catalog"})
 * @Stories({"Create simple product"})
 *
 * Codeception annotations
 * @group catalog
 * @group products
 * @group categories
 * @group simple_product
 * @group storefront_luma
 * @group add
 * @env chrome
 * @env firefox
 * @env phantomjs
 */
class CreateSimpleProductCest
{
    /**
     * @var array
     */
    protected $category;

    /**
     * @var array
     */
    protected $product;

    public function _before(AdminNavigation $I, CategoryApiStep $api)
    {
        $I->loginAsAdmin();
        
        $this->category = $I->getCategoryApiData();
        $api->amAdminTokenAuthenticated();
        $this->category = array_merge($this->category, ['id' => $api->createCategory(['category' => $this->category])]);
        $this->category['url_key'] = $this->category['custom_attributes'][0]['value'];
        $this->product = $I->getProductApiData();
        if ($this->product['extension_attributes']['stock_item']['is_in_stock'] !== 0) {
            $this->product['stock_status'] = 'In Stock';
            $this->product['qty'] = $this->product['extension_attributes']['stock_item']['qty'];
        } else {
            $this->product['stock_status'] = 'Out of Stock';
        }
        $this->product['url_key'] = $this->product['custom_attributes'][0]['value'];
    }

    public function _after(AdminNavigation $I)
    {
        $I->goToTheAdminLogoutPage();
    }

    /**
     * Allure annotations
     * @Title("Create a simple product and verify on the Storefront")
     * @Description("Create a simple product in the Admin and verify the content on the Storefront.")
     * @TestCaseId("")
     * @Severity(level = SeverityLevel::CRITICAL)
     * @Parameter(name = "AdminNavigation", value = "$adminNavigation")
     * @Parameter(name = "AdminProductPage", value = "$I")
     * @Parameter(name = "CategoryPage", value = "$lumaCategoryPage")
     * @Parameter(name = "ProductPage", value = "$lumaProductPage")
     *
     * @param AdminNavigation $adminNavigation
     * @param AdminProductPage $I
     * @param CategoryPage $lumaCategoryPage
     * @param ProductPage $lumaProductPage
     * @return void
     */
    public function createSimpleProductTest(
        AdminNavigation $adminNavigation,
        AdminProductPage $I,
        CategoryPage $lumaCategoryPage,
        ProductPage $lumaProductPage
    ) {
        $adminNavigation->wantTo('create simple product with required fields in admin product page.');
        $I->goToTheAdminCatalogGrid();
        $I->clickOnAddProductButton();
        $I->shouldBeOnTheAdminAddSimpleProductPage();
        $I->fillFieldProductName($this->product['name']);
        $I->fillFieldProductSku($this->product['sku']);
        $I->fillFieldProductPrice($this->product['price']);
        if (isset($this->product['qty'])) {
            $I->fillFieldProductQuantity($this->product['qty']);
        }
        $I->selectProductStockStatus($this->product['stock_status']);
        $I->selectProductCategories([$this->category['name']]);
        $I->fillFieldProductUrlKey($this->product['url_key']);

        $adminNavigation->wantTo('see simple product successfully saved message.');
        $I->saveProduct();
        $I->seeGlobalAdminSuccessMessage();

        $adminNavigation->wantTo('verify simple product data in admin product page.');
        $I->seeProductAttributeSet('Default');
        $I->seeProductName($this->product['name']);
        $I->seeProductSku($this->product['sku']);
        $I->seeProductPrice($this->product['price']);
        if (isset($this->product['qty'])) {
            $I->seeProductQuantity($this->product['qty']);
        }
        $I->seeProductStockStatus($this->product['stock_status']);
        $I->seeProductCategories([$this->category['name']]);
        $I->seeProductUrlKey(str_replace('_', '-', $this->product['url_key']));

        $adminNavigation->wantTo('verify simple product data in frontend category page.');
        $lumaCategoryPage->amOnCategoryPage($this->category['url_key']);
        $lumaCategoryPage->seeProductLinksInPage(
            $this->product['name'],
            str_replace('_', '-', $this->product['url_key'])
        );
        $lumaCategoryPage->seeProductNameInPage($this->product['name']);
        $lumaCategoryPage->seeProductPriceInPage($this->product['name'], $this->product['price']);

        $adminNavigation->wantTo('verify simple product data in frontend product page.');
        $lumaProductPage->amOnProductPage(str_replace('_', '-', $this->product['url_key']));
        $lumaProductPage->seeProductNameInPage($this->product['name']);
        $lumaProductPage->seeProductPriceInPage($this->product['price']);
        $lumaProductPage->seeProductStockStatusInPage($this->product['stock_status']);
        $lumaProductPage->seeProductSkuInPage($this->product['sku']);
    }
}
