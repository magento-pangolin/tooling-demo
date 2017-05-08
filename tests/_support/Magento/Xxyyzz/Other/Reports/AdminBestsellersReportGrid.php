<?php
namespace Magento\Xxyyzz\Page;

use Magento\Xxyyzz\Helper\AdminUrlList;

class AdminBestsellersReportGrid extends AbstractAdminGrid
{
    public function goToTheAdminBestsellersReportGrid()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminBestsellersReportGrid);
        $I->waitForPageLoad();
    }

    public function shouldBeOnTheAdminBestsellersReportGrid()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminBestsellersReportGrid);
        $I->see('Bestsellers Report', self::$globalPageTitle);
    }

    public static $bestSellersReportShowReportButton = '#filter_form_submit';

    public function clickOnBestSellersReportShowReportButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$bestSellersReportShowReportButton);
        $I->waitForPageLoad();
    }
}