<?php
namespace Magento\Xxyyzz\Page\Stores;

use Magento\Xxyyzz\Helper\AdminUrlList;
use Magento\Xxyyzz\Page\AbstractAdminPage;

class AdminTermsAndConditionsPage extends AbstractAdminPage
{
    public function goToTheAdminTermsAndConditionsGrid()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminTermsAndConditionsGrid);
        $I->waitForPageLoad();
    }

    public function goToTheAdminTermsAndConditionForIdPage($termsAndConditionsId)
    {
        $I = $this->acceptanceTester;
        $I->amOnPage((AdminUrlList::$adminTermsAndConditionByIdPage . $termsAndConditionsId));
        $I->waitForPageLoad();
    }

    public function goToTheAdminAddNewTermsAndConditionsPage()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminAddNewTermsAndConditionPage);
        $I->waitForPageLoad();
    }

    public function shouldBeOnTheAdminTermsAndConditionsGrid()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminTermsAndConditionsGrid);
        self::verifyGlobalAdminPageTitle('Terms and Conditions');
    }

    public function shouldBeOnTheAdminTermsAndConditionForIdPage($termsAndConditionsId, $conditionName)
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl((AdminUrlList::$adminTermsAndConditionByIdPage . $termsAndConditionsId));
        self::verifyGlobalAdminPageTitle($conditionName);
    }

    public function shouldBeOnTheAdminAddNewTermsAndConditionsPage()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminAddNewTermsAndConditionPage);
        self::verifyGlobalAdminPageTitle('New Condition');
    }

    public function clickOnTermsAndConditionsAddNewConditionButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminAddButton);
        $I->waitForPageLoad();
    }
    public function clickOnTermsAndConditionsBackButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminBackButton);
        $I->waitForPageLoad();
    }
    public function clickOnTermsAndConditionsDeleteConditionButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminDeleteButton);
        $I->waitForPageLoad();
    }
    public function clickOnTermsAndConditionsResetButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminResetButton);
        $I->waitForPageLoad();
    }
    public function clickOnTermsAndConditionsSaveConditionButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminSaveButton);
        $I->waitForPageLoad();
    }
}