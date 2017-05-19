<?php
namespace Magento\Xxyyzz\Page\Marketing;

use Magento\Xxyyzz\Helper\AdminUrlList;
use Magento\Xxyyzz\Page\AbstractAdminPage;

class AdminCatalogPriceRulePage extends AbstractAdminPage
{
    public function goToTheAdminCatalogPriceRuleGrid()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminCatalogPriceRuleGrid);
        $I->waitForPageLoad();
    }

    public function goToTheAdminCatalogPriceRuleForIdPage($catalogPriceRuleId)
    {
        $I = $this->acceptanceTester;
        $I->amOnPage((AdminUrlList::$adminCatalogPriceRuleForIdPage . $catalogPriceRuleId));
        $I->waitForPageLoad();
    }

    public function goToTheAdminAddCatalogPriceRulePage()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminAddCatalogPriceRulePage);
        $I->waitForPageLoad();
    }

    public function shouldBeOnTheAdminCatalogPriceRuleGrid()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminCatalogPriceRuleGrid);
        self::verifyGlobalAdminPageTitle('Catalog Price Rule');
    }

    public function shouldBeOnTheAdminCatalogPriceRuleForIdPage($catalogPriceRuleId, $catalogPriceRuleName)
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl((AdminUrlList::$adminCatalogPriceRuleForIdPage . $catalogPriceRuleId));
        self::verifyGlobalAdminPageTitle($catalogPriceRuleName);
    }

    public function shouldBeOnTheAdminAddCatalogPriceRulePage()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminAddCatalogPriceRulePage);
        self::verifyGlobalAdminPageTitle('New Catalog Price Rule');
    }

    public static $catalogPriceRuleApplyRulesButton          = '#apply_rules';
    public static $catalogPriceRuleDetailsSaveAndApplyButton = '#save_and_apply';

    public function clickOnCatalogPriceRuleApplyRulesButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$catalogPriceRuleApplyRulesButton);
        $I->waitForPageLoad();
    }

    public function clickOnCatalogPriceRuleAddNewRuleButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminAddButton);
        $I->waitForPageLoad();
    }

    public function clickOnCatalogPriceRuleDetailsBackButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminBackButton);
        $I->waitForPageLoad();
    }

    public function clickOnCatalogPriceRuleDetailsDeleteRuleButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminDeleteButton);
        $I->waitForPageLoad();
    }

    public function clickOnCatalogPriceRuleDetailsResetButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminResetButton);
        $I->waitForPageLoad();
    }

    public function clickOnCatalogPriceRuleDetailsSaveAndApplyButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$catalogPriceRuleDetailsSaveAndApplyButton);
        $I->waitForPageLoad();
    }

    public function clickOnCatalogPriceRuleDetailsSaveAndContinueButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminSaveAndContinueButton);
        $I->waitForPageLoad();
    }

    public function clickOnCatalogPriceRuleDetailsSaveButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminSaveButton);
        $I->waitForPageLoad();
    }
}