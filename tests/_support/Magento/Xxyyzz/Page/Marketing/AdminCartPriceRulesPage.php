<?php
namespace Magento\Xxyyzz\Page;

use Magento\Xxyyzz\Helper\AdminUrlList;

class AdminCartPriceRulesPage extends AbstractAdminPage
{
    public function goToTheAdminCartPriceRulesGrid()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminCartPriceRulesGrid);
        $I->waitForPageLoad();
    }

    public function goToTheAdminCartPriceRuleForIdPage($cartPriceRuleId)
    {
        $I = $this->acceptanceTester;
        $I->amOnPage((AdminUrlList::$adminCartPriceRuleForIdPage . $cartPriceRuleId));
        $I->waitForPageLoad();
    }

    public function goToTheAdminAddCartPriceRulePage()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminAddCartPriceRulePage);
        $I->waitForPageLoad();
    }

    public function shouldBeOnTheAdminCartPriceRulesGrid()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminCartPriceRulesGrid);
        self::verifyGlobalAdminPageTitle('Cart Price Rules');
    }

    public function shouldBeOnTheAdminCartPriceRuleForIdPage($cartPriceRuleId, $cartPriceRuleName)
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl((AdminUrlList::$adminCartPriceRuleForIdPage . $cartPriceRuleId));
        self::verifyGlobalAdminPageTitle($cartPriceRuleName);
    }

    public function shouldBeOnTheAdminAddCartPriceRulePage()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminAddCartPriceRulePage);
        self::verifyGlobalAdminPageTitle('New Cart Price Rule');
    }

    public function clickOnCartPriceRulesAddNewRuleButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminAddButton);
        $I->waitForPageLoad();
    }

    public function clickOnCartPriceRuleDetailsBackButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminBackButton);
        $I->waitForPageLoad();
    }

    public function clickOnCartPriceRuleDetailsDeleteRuleButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminDeleteButton);
        $I->waitForPageLoad();
    }

    public function clickOnCartPriceRuleDetailsResetButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminResetButton);
        $I->waitForPageLoad();
    }

    public function clickOnCartPriceRuleDetailsSaveAndContinueButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminSaveAndContinueButton);
        $I->waitForPageLoad();
    }

    public function clickOnCartPriceRuleDetailsSaveButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminSaveButton);
        $I->waitForPageLoad();
    }
}