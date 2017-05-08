<?php
namespace Magento\Xxyyzz\Page;

use Magento\Xxyyzz\Helper\AdminUrlList;

class AdminSearchSynonymsPage extends AbstractAdminPage
{
    public function goToTheAdminSearchSynonymsGrid()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminSearchSynonymsGrid);
        $I->waitForPageLoad();
    }

    public function goToTheAdminSearchSynonymGroupByIdPage($searchSynonymId)
    {
        $I = $this->acceptanceTester;
        $I->amOnPage((AdminUrlList::$adminSearchSynonymGroupForIdPage . $searchSynonymId));
        $I->waitForPageLoad();
    }

    public function goToTheAdminAddSearchSynonymGroupPage()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminAddSearchSynonymGroupPage);
        $I->waitForPageLoad();
    }

    public function shouldBeOnTheAdminSearchSynonymsGrid()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminSearchSynonymsGrid);
        self::verifyGlobalAdminPageTitle('Search Synonyms');
    }

    public function shouldBeOnTheAdminSearchSynonymGroupByIdPage($searchSynonymId, $synonyms)
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl((AdminUrlList::$adminSearchSynonymGroupForIdPage . $searchSynonymId));
        self::verifyGlobalAdminPageTitle($synonyms);
    }

    public function shouldBeOnTheAdminAddSearchSynonymGroupPage()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminAddSearchSynonymGroupPage);
        self::verifyGlobalAdminPageTitle('New Synonym Group');
    }

    public function clickOnSearchSynonymsNewSynonymGroupButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminAddButton);
        $I->waitForPageLoad();
    }

    public function clickOnSearchSynonymsDetailsBackButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminBackButton);
        $I->waitForPageLoad();
    }

    public function clickOnSearchSynonymsDetailsDeleteSynonymGroupButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminDeleteButton);
        $I->waitForPageLoad();
    }

    public function clickOnSearchSynonymsDetailsResetButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminResetButton);
        $I->waitForPageLoad();
    }

    public function clickOnSearchSynonymsDetailsSaveAndContinueEditButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminSaveAndContinueButton);
        $I->waitForPageLoad();
    }

    public function clickOnSearchSynonymsDetailsSaveSynonymGroupButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminSaveButton);
        $I->waitForPageLoad();
    }
}