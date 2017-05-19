<?php
namespace Magento\Xxyyzz\Page\Marketing;

use Magento\Xxyyzz\Helper\AdminUrlList;
use Magento\Xxyyzz\Page\AbstractAdminGrid;

class AdminNewsletterSubscribersGrid extends AbstractAdminGrid
{
    public function goToTheAdminNewsletterSubscribersGrid()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminNewsletterSubscribersGrid);
        $I->waitForPageLoad();
    }

    public function shouldBeOnTheAdminNewsletterQueueGrid()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminNewsletterQueueGrid);
        $I->see('Newsletter Queue', self::$globalPageTitle);
    }

    public static $selectDropDown         = '#subscriberGrid_filter_massaction';
    public static $idField                = '#subscriberGrid_filter_subscriber_id';
    public static $emailField             = '#subscriberGrid_filter_email';
    public static $typeDropDown           = '#subscriberGrid_filter_type';
    public static $customerFirstNameField = '#subscriberGrid_filter_firstname';
    public static $customerLastNameField  = '#subscriberGrid_filter_lastname';
    public static $statusDropDown         = '#subscriberGrid_filter_status';
    public static $webSiteDropDown        = '#subscriberGrid_filter_website';
    public static $storeDropDown          = '#subscriberGrid_filter_group';
    public static $storeViewDropDown      = '#subscriberGrid_filter_store';

    public function selectQuickSelectDropDown($value)
    {
        $I = $this->acceptanceTester;
        $I->selectOption(self::$selectDropDown, $value);
    }

    public function enterIdField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$idField, $value);
    }

    public function enterEmailField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$emailField, $value);
    }

    public function selectTypeDropDown($value)
    {
        $I = $this->acceptanceTester;
        $I->selectOption(self::$typeDropDown, $value);
    }

    public function enterCustomerFirstNameField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$customerFirstNameField, $value);
    }

    public function enterCustomerLastNameField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$customerLastNameField, $value);
    }

    public function selectStatusDropDown($value)
    {
        $I = $this->acceptanceTester;
        $I->selectOption(self::$statusDropDown, $value);
    }

    public function selectWebSiteDropDown($value)
    {
        $I = $this->acceptanceTester;
        $I->selectOption(self::$webSiteDropDown, $value);
    }

    public function selectStoreDropDown($value)
    {
        $I = $this->acceptanceTester;
        $I->selectOption(self::$storeDropDown, $value);
    }

    public function selectStoreViewDropDown($value)
    {
        $I = $this->acceptanceTester;
        $I->selectOption(self::$storeViewDropDown, $value);
    }
}