<?php
namespace Magento\Xxyyzz\Acceptance\Catalog;

use Magento\Xxyyzz\Helper\AdminNavigation;
use Magento\Xxyyzz\Step\Catalog\Api\CategoryApiStep;
use Magento\Xxyyzz\Step\Catalog\Api\ProductApiStep;
use Magento\Xxyyzz\Page\Catalog\AdminProductGridPage;
use Magento\Xxyyzz\Page\Catalog\AdminProductPage;
use Magento\Xxyyzz\Page\Storefront\Luma\CategoryPage;
use Magento\Xxyyzz\Page\Storefront\Luma\ProductPage;
use Yandex\Allure\Adapter\Annotation\Stories;
use Yandex\Allure\Adapter\Annotation\Features;
use Yandex\Allure\Adapter\Annotation\Title;
use Yandex\Allure\Adapter\Annotation\Description;
use Yandex\Allure\Adapter\Annotation\Severity;
use Yandex\Allure\Adapter\Annotation\Parameter;
use Yandex\Allure\Adapter\Model\SeverityLevel;
use Yandex\Allure\Adapter\Annotation\TestCaseId;

/**
 * Class UpdateSimpleProductCest
 *
 * Allure annotations
 * @Features({"Catalog"})
 * @Stories({"Update simple product"})
 *
 * Codeception Annotations
 * @group catalog
 * @env chrome
 * @env firefox
 * @env phantomjs
 */
class UpdateSimpleProductCest
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
     * @param AdminNavigation $I
     * @param CategoryApiStep $categoryApi
     * @param ProductApiStep $productApi
     */
    public function _before(AdminNavigation $I, CategoryApiStep $categoryApi, ProductApiStep $productApi)
    {
        $I->loginAsAdmin();
        
        $this->category = $I->getCategoryApiData();
        $categoryApi->amAdminTokenAuthenticated();
        $this->category = array_merge(
            $this->category,
            ['id' => $categoryApi->createCategory(['category' => $this->category])]
        );
        $this->category['url_key'] = $this->category['custom_attributes'][0]['value'];
        $this->product = $I->getProductApiData('simple', $this->category['id']);
        $productApi->amAdminTokenAuthenticated();
        $this->product = array_merge(
            $this->product,
            ['id' => $productApi->createProduct(['product' => $this->product])]
        );
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
     * Update simple product in admin.
     *
     * Allure annotations
     * @Title("Update simple product with required fields")
     * @Description("Update simple product with required fields")
     * @TestCaseId("")
     * @Severity(level = SeverityLevel::CRITICAL)
     * @Parameter(name = "AdminNavigation", value = "$adminNavigation")
     * @Parameter(name = "AdminProductGridPage", value = "$adminProductGridPage")
     * @Parameter(name = "AdminProductPage", value = "$I")
     * @Parameter(name = "StorefrontCategoryPage", value = "$storefrontCategoryPage")
     * @Parameter(name = "StorefrontProductPage", value = "$storefrontProductPage")
     *
     * @param AdminNavigation $adminNavigation
     * @param AdminProductGridPage $adminProductGridPage
     * @param AdminProductPage $I
     * @param CategoryPage $storefrontCategoryPage
     * @param ProductPage $storefrontProductPage
     * @return void
     */
    public function updateSimpleProductTest(
        AdminNavigation $adminNavigation,
        AdminProductGridPage $adminProductGridPage,
        AdminProductPage $I,
        CategoryPage $storefrontCategoryPage,
        ProductPage $storefrontProductPage
    ) {
        $adminNavigation->wantTo('update simple product in admin.');
        $I->goToTheAdminCatalogGrid();
        $adminProductGridPage->searchBySku($this->product['sku']);
        $adminProductGridPage->seeInCurrentGridNthRow(1, [$this->product['sku']]);

        $adminNavigation->wantTo('open product created from precondition.');
        $I->goToTheAdminProductForIdPage($this->product['id']);

        $adminNavigation->wantTo('update product data fields.');
        $I->fillFieldProductName($this->product['name'] . '-updated');
        $I->fillFieldProductSku($this->product['sku'] . '-updated');
        $I->fillFieldProductPrice($this->product['price']+10);
        $I->fillFieldProductQuantity(
            $this->product['extension_attributes']['stock_item']['qty']+100
        );
        $adminNavigation->wantTo('save product data change.');
        $I->saveProduct();
        $I->seeGlobalAdminSuccessMessage();

        $adminNavigation->wantTo('see updated product data.');
        $I->goToTheAdminProductForIdPage($this->product['id']);
        $I->verifyGlobalAdminPageTitle($this->product['name'] . '-updated');
        $I->seeProductAttributeSet('Default');
        $I->seeProductName($this->product['name'] . '-updated');
        $I->seeProductSku($this->product['sku'] . '-updated');
        $I->seeProductPrice($this->product['price']+10);
        $I->seeProductQuantity($this->product['extension_attributes']['stock_item']['qty']+100);
        $I->seeProductStockStatus(
            $this->product['extension_attributes']['stock_item']['is_in_stock'] !== 0 ? 'In Stock' : 'Out of Stock'
        );

        $adminNavigation->wantTo('verify simple product data in frontend category page.');
        $storefrontCategoryPage->amOnCategoryPage($this->category['url_key']);
        $storefrontCategoryPage->seeProductNameInPage($this->product['name'] . '-updated');
        $storefrontCategoryPage->seeProductPriceInPage($this->product['name'] . '-updated', $this->product['price'] + 10);

        $adminNavigation->wantTo('verify simple product data in frontend product page.');
        $storefrontProductPage->amOnProductPage(str_replace('_', '-', $this->product['url_key']));
        $storefrontProductPage->seeProductNameInPage($this->product['name'] . '-updated');
        $storefrontProductPage->seeProductPriceInPage($this->product['price'] + 10);
        $storefrontProductPage->seeProductSkuInPage($this->product['sku'] . '-updated');
    }
}
