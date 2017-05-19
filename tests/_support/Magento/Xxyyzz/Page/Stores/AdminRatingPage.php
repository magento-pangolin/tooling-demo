<?php
namespace Magento\Xxyyzz\Page\Stores;

use Magento\Xxyyzz\Helper\AdminUrlList;
use Magento\Xxyyzz\Page\AbstractAdminPage;

class AdminRatingPage extends AbstractAdminPage
{
    public function goToTheAdminRatingGrid()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminRatingsGrid);
        $I->waitForPageLoad();
    }

    public function goToTheAdminRatingForIdPage($ratingId)
    {
        $I = $this->acceptanceTester;
        $I->amOnPage((AdminUrlList::$adminRatingForIdPage . $ratingId));
        $I->waitForPageLoad();
    }

    public function goToTheAdminAddRatingPage()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminAddRatingPage);
        $I->waitForPageLoad();
    }

    public function shouldBeOnTheAdminRatingsGrid()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminRatingsGrid);
        self::verifyGlobalAdminPageTitle('Ratings');
    }

    public function shouldBeOnTheAdminRatingForIdPage($ratingId, $ratingDefaultValue)
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl((AdminUrlList::$adminRatingForIdPage . $ratingId));
        self::verifyGlobalAdminPageTitle($ratingDefaultValue);
    }

    public function shouldBeOnTheAdminAddRatingPage()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminAddRatingPage);
        self::verifyGlobalAdminPageTitle('New Rating');
    }

    public function clickOnRatingsAddNewRatingButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminAddButton);
        $I->waitForPageLoad();
    }

    public function clickOnRatingDetailsBackButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminBackButton);
        $I->waitForPageLoad();
    }

    public function clickOnRatingDetailsDeleteRatingButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminDeleteButton);
        $I->waitForPageLoad();
    }

    public function clickOnRatingDetailsResetButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminResetButton);
        $I->waitForPageLoad();
    }

    public function clickOnRatingDetailsSaveRatingButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminSaveButton);
        $I->waitForPageLoad();
    }
}