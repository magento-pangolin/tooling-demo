<?php
namespace Magento\Xxyyzz\Page;

use Magento\Xxyyzz\Helper\AdminUrlList;

class AdminCustomVariablesPage extends AbstractAdminPage
{
    public function goToTheAdminCustomVariablesGrid()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminCustomVariablesGrid);
        $I->waitForPageLoad();
    }

    public function goToTheAdminCustomVariableForId($customVariableId)
    {
        $I = $this->acceptanceTester;
        $I->amOnPage((AdminUrlList::$adminCustomVariableByIdPage . $customVariableId));
        $I->waitForPageLoad();
    }

    public function goToTheAdminAddCustomVariablePage()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminAddCustomVariablePage);
        $I->waitForPageLoad();
    }

    public function shouldBeOnTheAdminCustomVariablesGrid()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminCustomVariablesGrid);
        self::verifyGlobalAdminPageTitle('Custom Variables');
    }

    public function shouldBeOnTheAdminCustomVariableForId($customVariableId, $customVariableCode)
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl((AdminUrlList::$adminCustomVariableByIdPage . $customVariableId));
        self::verifyGlobalAdminPageTitle($customVariableCode);
    }

    public function shouldBeOnTheAdminAddCustomVariablePage()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminAddCustomVariablePage);
        self::verifyGlobalAdminPageTitle('New Custom Variable');
    }

    public static $customVariableDetailsSaveAndContinueEditButton = '#save_and_edit';

    public function clickOnCustomVariablesAddNewVariableButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminBackButton);
        $I->waitForPageLoad();
    }

    public function clickOnCustomVariableDetailsDeleteButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminDeleteButton);
        $I->waitForPageLoad();
    }

    public function clickOnCustomVariableDetailsResetButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminResetButton);
        $I->waitForPageLoad();
    }

    public function clickOnCustomVariableDetailsSaveAndContinueEditButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$customVariableDetailsSaveAndContinueEditButton);
        $I->waitForPageLoad();
    }

    public function clickOnCustomVariableDetailsSaveButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminSaveButton);
        $I->waitForPageLoad();
    }
}