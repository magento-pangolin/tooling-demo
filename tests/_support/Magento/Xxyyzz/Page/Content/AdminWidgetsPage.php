<?php
namespace Magento\Xxyyzz\Page\Content;

use Magento\Xxyyzz\Helper\AdminUrlList;
use Magento\Xxyyzz\Page\AbstractAdminPage;

class AdminWidgetsPage extends AbstractAdminPage
{
    public function goToTheAdminWidgetsGrid()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminWidgetsGrid);
        $I->waitForPageLoad();
    }

    public function goToTheAdminAddWidgetPage()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminAddWidgetPage);
        $I->waitForPageLoad();
    }

    public function shouldBeOnTheAdminWidgetsGrid()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminWidgetsGrid);
        self::verifyGlobalAdminPageTitle('Widgets');
    }

    public function shouldBeOnTheAdminAddWidgetPage()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminAddWidgetPage);
        self::verifyGlobalAdminPageTitle('Widgets');
    }

    public function clickOnWidgetsAddNewBlockButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminAddButton);
        $I->waitForPageLoad();
    }

    public function clickOnWidgetDetailsBackButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminBackButton);
        $I->waitForPageLoad();
    }

    public function clickOnWidgetDetailsDeleteBlockButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminDeleteButton);
        $I->waitForPageLoad();
    }

    public function clickOnWidgetDetailsResetButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminResetButton);
        $I->waitForPageLoad();
    }

    public function clickOnWidgetDetailsSaveAndContinueEditButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminSaveAndContinueButton);
        $I->waitForPageLoad();
    }

    public function clickOnWidgetDetailsSaveBlockButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminSaveButton);
        $I->waitForPageLoad();
    }
}