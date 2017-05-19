<?php
namespace Magento\Xxyyzz\Page\Stores;

use Magento\Xxyyzz\Page\AbstractAdminGrid;

class AdminRatingsGrid extends AbstractAdminGrid
{
    public static $idField          = '#ratingsGrid_filter_rating_id';
    public static $ratingField      = '#ratingsGrid_filter_rating_code';
    public static $sortOrderField   = '#ratingsGrid_filter_position';
    public static $isActiveDropDown = '#ratingsGrid_filter_is_active';

    public function enterIdField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$idField, $value);
    }

    public function enterRatingField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$ratingField, $value);
    }

    public function enterSortOrderField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$sortOrderField, $value);
    }

    public function selectIsActiveDropDown($value)
    {
        $I = $this->acceptanceTester;
        $I->selectOption(self::$isActiveDropDown, $value);
    }
}