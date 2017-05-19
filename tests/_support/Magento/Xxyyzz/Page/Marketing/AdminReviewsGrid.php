<?php
namespace Magento\Xxyyzz\Page\Marketing;

use Magento\Xxyyzz\Page\AbstractAdminGrid;

class AdminReviewsGrid extends AbstractAdminGrid
{
    public static $quickSelectDropDown = '#reviwGrid_filter_massaction';
    public static $idField             = '#reviwGrid_filter_review_id';
    public static $createdFromField    = 'input[name="created_at[from]"]';
    public static $createToField       = 'input[name="created_at[to]"]';
    public static $statusDropDown      = '#reviwGrid_filter_status';
    public static $titleField          = '#reviwGrid_filter_title';
    public static $nickNameField       = '#reviwGrid_filter_nickname';
    public static $reviewField         = '#reviwGrid_filter_detail';
    public static $visibilityDropDown  = 'select[name="visible_in"]';
    public static $typeDropDown        = '#reviwGrid_filter_type';
    public static $productField        = '#reviwGrid_filter_name';
    public static $skuField            = '#reviwGrid_filter_sku';

    public function selectQuickSelectDropDown($value)
    {
        $I = $this->acceptanceTester;
        $I->selectOption(self::$quickSelectDropDown, $value);
    }

    public function enterIdField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$idField, $value);
    }

    public function enterCreatedFromField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$createdFromField, $value);
    }

    public function enterCreateToField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$createToField, $value);
    }

    public function selectStatusDropDown($value)
    {
        $I = $this->acceptanceTester;
        $I->selectOption(self::$statusDropDown, $value);
    }

    public function enterTitleField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$titleField, $value);
    }

    public function enterNickNameField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$nickNameField, $value);
    }

    public function enterReviewField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$reviewField, $value);
    }

    public function selectVisibilityDropDown($value)
    {
        $I = $this->acceptanceTester;
        $I->selectOption(self::$visibilityDropDown, $value);
    }

    public function selectTypeDropDown($value)
    {
        $I = $this->acceptanceTester;
        $I->selectOption(self::$typeDropDown, $value);
    }

    public function enterProductField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$productField, $value);
    }

    public function enterSkuField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$skuField, $value);
    }
}