<?php
namespace Magento\Xxyyzz\Page;

use Magento\Xxyyzz\Helper\AdminUrlList;

class AdminAbandonedCartsGrid extends AbstractAdminGrid
{
    public function goToTheAdminAbandonedCartsGrid()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminAbandonedCartsGrid);
        $I->waitForPageLoad();
    }

    public function shouldBeOnTheAdminAbandonedCartsGrid()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminAbandonedCartsGrid);
        $I->see('Abandoned Carts', self::$globalPageTitle);
    }

    public static $customerField      = '#gridAbandoned_filter_customer_name';
    public static $emailField         = '#gridAbandoned_filter_email';
    public static $productsFromField  = '#gridAbandoned_filter_items_count_from';
    public static $productsToField    = '#gridAbandoned_filter_items_count_to';
    public static $quantityFromField  = '#gridAbandoned_filter_items_qty_from';
    public static $quantityToField    = '#gridAbandoned_filter_items_qty_to';
    public static $subtotalFromField  = '#gridAbandoned_filter_subtotal_from';
    public static $subtotalToField    = '#gridAbandoned_filter_subtotal_to';
    public static $appliedCouponField = '#gridAbandoned_filter_coupon_code';
    public static $createFromField    = 'input[name="created_at[from]"]';
    public static $createdToField     = 'input[name="created_at[to]"]';
    public static $updatedFromField   = 'input[name="updated_at[from]"]';
    public static $updatedToField     = 'input[name="updated_at[to]"]';
    public static $ipAddressField     = '#gridAbandoned_filter_remote_ip';

    public function enterCustomerField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$customerField, $value);
    }

    public function enterEmailField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$emailField, $value);
    }

    public function enterProductsFromField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$productsFromField, $value);
    }

    public function enterProductsToField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$productsToField, $value);
    }

    public function enterQuantityFromField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$quantityFromField, $value);
    }

    public function enterQuantityToField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$quantityToField, $value);
    }

    public function enterSubtotalFromField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$subtotalFromField, $value);
    }

    public function enterSubtotalToField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$subtotalToField, $value);
    }

    public function enterAppliedCouponField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$appliedCouponField, $value);
    }

    public function enterCreateFromField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$createFromField, $value);
    }

    public function enterCreatedToField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$createdToField, $value);
    }

    public function enterUpdatedFromField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$updatedFromField, $value);
    }

    public function enterUpdatedToField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$updatedToField, $value);
    }

    public function enterIpAddressField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$ipAddressField, $value);
    }
}