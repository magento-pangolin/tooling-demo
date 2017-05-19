<?php
namespace Magento\Xxyyzz\Page\Stores;

use Magento\Xxyyzz\Helper\AdminUrlList;
use Magento\Xxyyzz\Page\AbstractAdminPage;

class AdminTaxRulesPage extends AbstractAdminPage
{
    public function goToTheAdminTaxRulesGrid()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminTaxRulesGrid);
        $I->waitForPageLoad();
    }

    public function goToTheAdminTaxRuleForIdPage($taxRuleId)
    {
        $I = $this->acceptanceTester;
        $I->amOnPage((AdminUrlList::$adminTaxRuleByIdPage . $taxRuleId));
        $I->waitForPageLoad();
    }

    public function goToTheAdminAddTaxRulePage()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminAddTaxRulePage);
        $I->waitForPageLoad();
    }

    public function shouldBeOnTheAdminTaxRulesGrid()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminTaxRulesGrid);
        self::verifyGlobalAdminPageTitle('Tax Rules');
    }

    public function shouldBeOnTheAdminTaxRuleForIdPage($taxRuleId, $taxRuleName)
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl((AdminUrlList::$adminTaxRuleByIdPage . $taxRuleId));
        self::verifyGlobalAdminPageTitle($taxRuleName);
    }

    public function shouldBeOnTheAdminAddTaxRulePage()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminAddTaxRulePage);
        self::verifyGlobalAdminPageTitle('New Tax Rule');
    }

    public function clickOnTaxRulesAddNewTaxRuleButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminAddButton);
        $I->waitForPageLoad();
    }

    public function clickOnTaxRuleDetailsBackButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminBackButton);
        $I->waitForPageLoad();
    }

    public function clickOnTaxRuleDetailsDeleteButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminDeleteButton);
        $I->waitForPageLoad();
    }

    public function clickOnTaxRuleDetailsResetButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminResetButton);
        $I->waitForPageLoad();
    }

    public function clickOnTaxRuleDetailsSaveAndContinueEditButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminSaveAndContinueButton);
        $I->waitForPageLoad();
    }

    public function clickOnTaxRuleDetailsSaveRuleButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminSaveButton);
        $I->waitForPageLoad();
    }
}