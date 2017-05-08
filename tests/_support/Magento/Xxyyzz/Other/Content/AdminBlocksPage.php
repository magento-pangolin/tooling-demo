<?php
namespace Magento\Xxyyzz\Page;

use Magento\Xxyyzz\Helper\AdminUrlList;

class AdminBlocksPage extends AbstractAdminPage
{
    public function goToTheAdminBlocksGrid()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminBlocksGrid);
        $I->waitForPageLoad();
    }

    public function goToTheAdminBlockForIdPage($blockId)
    {
        $I = $this->acceptanceTester;
        $I->amOnPage((AdminUrlList::$adminBlockForIdPage . $blockId));
        $I->waitForPageLoad();
    }

    public function goToTheAdminAddBlockPage()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminAddBlockPage);
        $I->waitForPageLoad();
    }

    public function shouldBeOnTheAdminBlocksGrid()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminBlocksGrid);
        self::verifyGlobalAdminPageTitle('Blocks');
    }

    public function shouldBeOnTheAdminBlockForIdPage($blockId, $blockTitle)
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl((AdminUrlList::$adminBlockForIdPage . $blockId));
        self::verifyGlobalAdminPageTitle($blockTitle);
    }

    public function shouldBeOnTheAdminAddBlockPage()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminAddBlockPage);
        self::verifyGlobalAdminPageTitle('New Block');
    }

    public function clickOnBlocksAddNewBlockButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminAddButton);
        $I->waitForPageLoad();
    }

    public function clickOnBlockDetailsBackButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminBackButton);
        $I->waitForPageLoad();
    }

    public function clickOnBlockDetailsDeleteBlockButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminDeleteButton);
        $I->waitForPageLoad();
    }

    public function clickOnBlockDetailsResetButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminResetButton);
        $I->waitForPageLoad();
    }

    public function clickOnBlockDetailsSaveAndContinueEditButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminSaveAndContinueButton);
        $I->waitForPageLoad();
    }

    public function clickOnBlockDetailsSaveBlockButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminSaveButton);
        $I->waitForPageLoad();
    }
}