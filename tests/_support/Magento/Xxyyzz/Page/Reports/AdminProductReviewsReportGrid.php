<?php
namespace Magento\Xxyyzz\Page;

class AdminProductReviewsReportGrid extends AbstractAdminGrid
{
    public static $idField              = '#gridProducts_filter_entity_id';
    public static $productField         = '#gridProducts_filter_name';
    public static $reviewsField         = '#gridProducts_filter_review_cnt';
    public static $averageField         = '#gridProducts_filter_avg_rating';
    public static $averageApprovedField = '#gridProducts_filter_avg_rating_approved';
    public static $lastReviewFromField  = 'input[name="created_at[from]"]';
    public static $lastReviewToField    = 'input[name="created_at[to]"]';

    public function enterIdField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$idField, $value);
    }

    public function enterProductField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$productField, $value);
    }

    public function enterReviewsField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$reviewsField, $value);
    }

    public function enterAverageField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$averageField, $value);
    }

    public function enterAverageApprovedField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$averageApprovedField, $value);
    }

    public function enterLastReviewFromField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$lastReviewFromField, $value);
    }

    public function enterLastReviewToField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$lastReviewToField, $value);
    }
}