<?php
namespace Magento\Xxyyzz\Page\Stores;

use Magento\Xxyyzz\Page\AbstractAdminGrid;

class AdminOrderStatusGrid extends AbstractAdminGrid
{
    public static $statusField                 = '#sales_order_status_grid_filter_label';
    public static $statusCodeField             = '#sales_order_status_grid_filter_status';
    public static $defaultStatusDropDown       = '#sales_order_status_grid_filter_is_default';
    public static $visibleOnStorefrontDropDown = '#sales_order_status_grid_filter_visible_on_front';
    public static $stateCodeAndTitleField      = '#sales_order_status_grid_filter_state';

    public function enterStatusField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$statusField, $value);
    }

    public function enterStatusCodeField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$statusCodeField, $value);
    }

    public function selectDefaultStatusDropDown($value)
    {
        $I = $this->acceptanceTester;
        $I->selectOption(self::$defaultStatusDropDown, $value);
    }

    public function selectVisibleOnStorefrontDropDown($value)
    {
        $I = $this->acceptanceTester;
        $I->selectOption(self::$visibleOnStorefrontDropDown, $value);
    }

    public function enterStateCodeAndTitleField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$stateCodeAndTitleField, $value);
    }
}