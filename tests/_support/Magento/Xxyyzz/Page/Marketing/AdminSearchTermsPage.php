<?php
namespace Magento\Xxyyzz\Page\Marketing;

use Magento\Xxyyzz\Helper\AdminUrlList;
use Magento\Xxyyzz\Page\AbstractAdminPage;

class AdminSearchTermsPage extends AbstractAdminPage
{
    public function goToTheAdminSearchTermsGrid()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminSearchTermsGrid);
        $I->waitForPageLoad();
    }

    public function goToTheAdminSearchTermForIdPage($searchTermId)
    {
        $I = $this->acceptanceTester;
        $I->amOnPage((AdminUrlList::$adminSearchTermForIdPage . $searchTermId));
        $I->waitForPageLoad();
    }

    public function goToTheAdminAddSearchTermPage()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminAddSearchTermPage);
        $I->waitForPageLoad();
    }

    public function shouldBeOnTheAdminSearchTermsGrid()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminSearchTermsGrid);
        self::verifyGlobalAdminPageTitle('Search Terms');
    }

    public function shouldBeOnTheAdminSearchTermForIdPage($searchTermId, $searchQuery)
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl((AdminUrlList::$adminSearchTermForIdPage . $searchTermId));
        self::verifyGlobalAdminPageTitle($searchQuery);
    }

    public function shouldBeOnTheAdminAddSearchTermPage()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminAddSearchTermPage);
        self::verifyGlobalAdminPageTitle('New Search');
    }

    public function clickOnSearchTermsAddNewSearchTermButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminAddButton);
        $I->waitForPageLoad();
    }
    
    public function clickOnSearchTermsDetailsBackButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminBackButton);
        $I->waitForPageLoad();
    }
    
    public function clickOnSearchTermsDetailsDeleteSearchButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminDeleteButton);
        $I->waitForPageLoad();
    }
    
    public function clickOnSearchTermsDetailsResetButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminResetButton);
        $I->waitForPageLoad();
    }
    
    public function clickOnSearchTermsDetailsSaveSearchButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminSaveButton);
        $I->waitForPageLoad();
    }
}