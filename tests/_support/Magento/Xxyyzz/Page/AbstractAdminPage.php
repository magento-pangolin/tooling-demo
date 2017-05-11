<?php
namespace Magento\Xxyyzz\Page;

use Magento\Xxyyzz\AcceptanceTester;

abstract class AbstractAdminPage
{
    /**
     * Include url of current page.
     */
    public static $URL = '/admin/admin/';

    /**
     * Global Admin Page Header Selectors
     */
    public static $globalSystemMessage               = '.message-system';

    public static $globalPageTitle                   = '.page-title';

    public static $globalSearchButton                = '#search-global';
    public static $globalSearchField                 = '.search-global-input';

    public static $adminNotificationsLink            = '.notifications-action';
    public static $adminNotificationsCounter         = '.notifications-counter';
    public static $adminNotificationsMenu            = '.notifications-wrapper .admin__action-dropdown-menu';

    public static $globalAdminActionsMenuLink        = '.admin-user .admin__action-dropdown';
    public static $globalAccountSetting              = '.admin-user-name';
    public static $globalCustomerView                = '.store-front';
    public static $globalAdminSignOut                = '.account-signout';

    public static $globalSuccessMessage              = '.message.message-success.success';

    /**
     * Generic Admin Controls Selectors
     */
    public static $genericAdminBackButton            = '#back';
    public static $genericAdminResetButton           = '#reset';
    public static $genericAdminDeleteButton          = '#delete';
    public static $genericAdminAddButton             = '#add';
    public static $genericAdminSaveButton            = '#save';
    public static $genericAdminSaveAndContinueButton = '#save_and_continue';
    public static $genericAdminPrintButton           = '#print';
    public static $genericAdminSendEmailButton       = '#send_notification';
    public static $genericAdminShowReportButton      = '#filter_form_submit';
    
    public static $storeViewDropDownMenu             = '#store-change-button';
    
    /**
     * @var AcceptanceTester
     */
    protected $acceptanceTester;

    public function __construct(AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }

    public static function route($param)
    {
        return static::$URL.$param;
    }

    public function openTabGoToAndVerifyUrl($pageUrl)
    {
        $I = $this->acceptanceTester;
        $I->openNewTab();
        $I->amOnPage($pageUrl);
        $I->seeInCurrentUrl($pageUrl);
    }

    public function pressEnterOnTheKeyboard()
    {
        $I = $this->acceptanceTester;
        $I->pressKey(self::$globalSearchField, \WebDriverKeys::ENTER);
    }

    public function clickOnCollapsibleAreaOnAdminAddOrEditPage($areaName)
    {
        $I = $this->acceptanceTester;
        $I->click('//div[@class="fieldset-wrapper-title"]/strong/span[contains(text(), "' . $areaName . '")]');
        $I->waitForLoadingMaskToDisappear();
    }

    public function expandCollapsibleAreaOnAdminAddOrEditPage($areaIndex)
    {
        $I = $this->acceptanceTester;
        $context = sprintf('.fieldset-wrapper[data-index=%s]', $areaIndex);
        try {
            $I->seeElement($context . ' .fieldset-wrapper-title[data-state-collapsible=closed]');
            $I->click($context . ' .admin__collapsible-title>span');
        } catch (\PHPUnit_Framework_AssertionFailedError $e) {
        }
    }

    public function closeCollapsibleAreaOnAdminAddOrEditPage($areaIndex)
    {
        $I = $this->acceptanceTester;
        $context = sprintf('.fieldset-wrapper[data-index=%s]', $areaIndex);
        try {
            $I->seeElement($context . ' .fieldset-wrapper-title[data-state-collapsible=open]');
            $I->click($context . ' .admin__collapsible-title>span');
        } catch (\PHPUnit_Framework_AssertionFailedError $e) {
        }
    }

    public function seeGlobalAdminSuccessMessage()
    {
        $I = $this->acceptanceTester;
        $I->seeElement(self::$globalSuccessMessage);
    }


    public function verifyGlobalAdminPageTitle($adminPageTitle)
    {
        $I = $this->acceptanceTester;
        $I->see($adminPageTitle, self::$globalPageTitle);
    }

    public function clickOnTheGlobalSearchButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$globalSearchButton);
    }

    public function enterGlobalSearchValue($searchValue)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$globalSearchField, $searchValue);
    }

    public function performGlobalSearchFor($searchValue)
    {
        self::clickOnTheGlobalSearchButton();
        self::enterGlobalSearchValue($searchValue);
        self::pressEnterOnTheKeyboard();
    }


    public function clickOnGlobalUserActionsMenuLink()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$globalAdminActionsMenuLink);
    }

    public function clickOnAdminAccountSetting()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$globalAccountSetting);
    }

    public function clickOnAdminCustomerView()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$globalCustomerView);
    }

    public function clickOnAdminSignOut()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$globalAdminSignOut);
    }

    
    public function clickOnGenericStoreViewButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$storeViewDropDownMenu);
    }
    
    public function selectStoreViewFromGenericStoreViewDropDown($storeView)
    {
        $I = $this->acceptanceTester;
        $I->selectOption(self::$storeViewDropDownMenu, $storeView);
        $I->waitForPageLoad();
    }
    
    public function selectDefaultStoreViewFromGenericStoreViewDropDown()
    {
        self::selectStoreViewFromGenericStoreViewDropDown('Default Store View');
    }
    

    public function clickOnGenericAdminBackButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminBackButton);
    }

    public function clickOnGenericAdminResetButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminResetButton);
    }

    public function clickOnGenericAdminDeleteButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminDeleteButton);
    }

    public function clickOnGenericAdminAddButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminAddButton);
        $I->waitForPageLoad();
    }

    public function clickOnGenericAdminSaveButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminSaveButton);
        $I->waitForPageLoad();
    }

    public function clickOnGenericAdminSaveAndContinueEditButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminSaveAndContinueButton);
        $I->waitForPageLoad();
    }

    public function clickOnGenericAdminPrintButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminPrintButton);
        $I->waitForPageLoad();
    }

    public function clickOnGenericAdminSendEmailButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminSendEmailButton);
        $I->waitForPageLoad();
    }

    public function clickOnGenericAdminShowReportButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminShowReportButton);
        $I->waitForPageLoad();
    }
}