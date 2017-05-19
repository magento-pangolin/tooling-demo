<?php
namespace Magento\Xxyyzz\Page\Marketing;

use Magento\Xxyyzz\Helper\AdminUrlList;
use Magento\Xxyyzz\Page\AbstractAdminPage;

class AdminReviewsPage extends AbstractAdminPage
{
    public function goToTheAdminReviewsGrid()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminReviewsGrid);
        $I->waitForPageLoad();
    }

    public function goToTheAdminReviewForIdPage($reviewId)
    {
        $I = $this->acceptanceTester;
        $I->amOnPage((AdminUrlList::$adminReviewByIdPage . $reviewId));
        $I->waitForPageLoad();
    }

    public function goToTheAdminAddReviewPage()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminAddReviewPage);
        $I->waitForPageLoad();
    }

    public function shouldBeOnTheAdminReviewsGrid()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminReviewsGrid);
        self::verifyGlobalAdminPageTitle('Reviews');
    }

    public function shouldBeOnTheAdminReviewForIdPage($reviewId)
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl((AdminUrlList::$adminReviewByIdPage . $reviewId));
        self::verifyGlobalAdminPageTitle('Edit Review');
    }

    public function shouldBeOnTheAdminAddReviewPage()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminAddReviewPage);
        self::verifyGlobalAdminPageTitle('New Review');
    }

    public static $reviewDetailsPreviousButton        = '#previous';
    public static $reviewDetailsNextButton            = '#next';
    public static $reviewDetailsSaveAndPreviousButton = '#save_and_previous';
    public static $reviewDetailsSaveAndNextButton     = '#save_and_next';
    public static $reviewDetailsSaveReviewButton      = '#save_button';

    public function clickOnReviewsNewReviewButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminAddButton);
        $I->waitForPageLoad();
    }

    public function clickOnReviewDetailsBackButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminBackButton);
        $I->waitForPageLoad();
    }

    public function clickOnReviewDetailsDeleteReviewButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminDeleteButton);
        $I->waitForPageLoad();
    }

    public function clickOnReviewDetailsResetButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminResetButton);
        $I->waitForPageLoad();
    }

    public function clickOnReviewDetailsPreviousButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$reviewDetailsPreviousButton);
        $I->waitForPageLoad();
    }

    public function clickOnReviewDetailsNextButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$reviewDetailsNextButton);
        $I->waitForPageLoad();
    }

    public function clickOnReviewDetailsSaveAndPreviousButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$reviewDetailsSaveAndPreviousButton);
        $I->waitForPageLoad();
    }

    public function clickOnReviewDetailsSaveAndNextButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$reviewDetailsSaveAndNextButton);
        $I->waitForPageLoad();
    }

    public function clickOnReviewDetailsSaveReviewButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$reviewDetailsSaveReviewButton);
        $I->waitForPageLoad();
    }
}