<?php
namespace Magento\Xxyyzz\Page\Content;

use Magento\Xxyyzz\Helper\AdminUrlList;
use Magento\Xxyyzz\Page\AbstractAdminPage;

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

    public function clickOnAddNewBlockButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminAddButton);
        $I->waitForPageLoad();
    }

    public function clickOnBlockBackButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminBackButton);
        $I->waitForPageLoad();
    }

    public function clickOnBlockDeleteBlockButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminDeleteButton);
        $I->waitForPageLoad();
    }

    public function clickOnBlockResetButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminResetButton);
        $I->waitForPageLoad();
    }

    public function clickOnBlockSaveAndContinueEditButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminSaveAndContinueButton);
        $I->waitForPageLoad();
    }

    public function clickOnBlockSaveBlockButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminSaveButton);
        $I->waitForPageLoad();
    }
}