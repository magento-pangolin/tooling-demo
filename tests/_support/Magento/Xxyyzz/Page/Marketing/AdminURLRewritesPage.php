<?php
namespace Magento\Xxyyzz\Page\Marketing;

use Magento\Xxyyzz\Helper\AdminUrlList;
use Magento\Xxyyzz\Page\AbstractAdminPage;

class AdminURLRewritesPage extends AbstractAdminPage
{
    public function goToTheAdminURLRewritesGrid()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminURLRewritesGrid);
        $I->waitForPageLoad();
    }

    public function goToTheAdminURLRewriteForId($urlRewriteId)
    {
        $I = $this->acceptanceTester;
        $I->amOnPage((AdminUrlList::$adminURLRewriteForIdPage . $urlRewriteId));
        $I->waitForPageLoad();
    }

    public function goToTheAdminAddURLRewritePage()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminAddURLRewritePage);
        $I->waitForPageLoad();
    }

    public function shouldBeOnTheAdminURLRewritesGrid()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminURLRewritesGrid);
        self::verifyGlobalAdminPageTitle('URL Rewrites');
    }

    public function shouldBeOnTheAdminURLRewriteForId($urlRewriteId)
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl((AdminUrlList::$adminURLRewriteForIdPage . $urlRewriteId));
        self::verifyGlobalAdminPageTitle('Edit URL Rewrite for a');
    }

    public function shouldBeOnTheAdminAddURLRewritePage()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminAddURLRewritePage);
        self::verifyGlobalAdminPageTitle('Add New URL Rewrite');
    }

    public function clickOnUrlRewritesAddUrlRewriteButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminAddButton);
        $I->waitForPageLoad();
    }

    public function clickOnUrlRewritesDetailsBackButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminBackButton);
        $I->waitForPageLoad();
    }

    public function clickOnUrlRewritesDetailsDeleteButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminDeleteButton);
        $I->waitForPageLoad();
    }

    public function clickOnUrlRewritesDetailsResetButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminResetButton);
        $I->waitForPageLoad();
    }

    public function clickOnUrlRewritesDetailsSaveButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminSaveButton);
        $I->waitForPageLoad();
    }
}