<?php
namespace Magento\Xxyyzz\Page\Reports;

use Magento\Xxyyzz\Page\AbstractAdminGrid;

class AdminCustomerReviewsReportGrid extends AbstractAdminGrid
{
    public static $customerField = '#customers_grid_filter_customer_name';
    public static $reviewsField  = '#customers_grid_filter_review_cnt';

    public function enterCustomerField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$customerField, $value);
    }
    public function enterReviewsField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$reviewsField, $value);
    }
}