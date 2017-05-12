<?php
namespace Magento\Xxyyzz\Page;

class AdminURLRewritesGrid extends AbstractAdminGrid
{
    public static $idField              = '#urlrewriteGrid_filter_url_rewrite_id';
    public static $storeViewDropDown    = 'select[name="store_id"]';
    public static $requestPathField     = '#urlrewriteGrid_filter_request_path';
    public static $targetPathField      = '#urlrewriteGrid_filter_target_path';
    public static $redirectTypeDropDown = '#urlrewriteGrid_filter_redirect_type';

    public function enterIdField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$idField, $value);
    }

    public function selectStoreViewDropDown($value)
    {
        $I = $this->acceptanceTester;
        $I->selectOption(self::$storeViewDropDown, $value);
    }

    public function enterRequestPathField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$requestPathField, $value);
    }

    public function enterTargetPathField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$targetPathField, $value);
    }

    public function selectRedirectTypeDropDown($value)
    {
        $I = $this->acceptanceTester;
        $I->selectOption(self::$redirectTypeDropDown, $value);
    }
}