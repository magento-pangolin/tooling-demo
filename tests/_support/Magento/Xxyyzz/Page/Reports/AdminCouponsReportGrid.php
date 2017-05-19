<?php
namespace Magento\Xxyyzz\Page\Reports;

use Magento\Xxyyzz\Helper\AdminUrlList;
use Magento\Xxyyzz\Page\AbstractAdminPage;

class AdminCouponsReportGrid extends AbstractAdminPage
{
    public function goToTheAdminCouponsReportGrid()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminCouponsReportGrid);
        $I->waitForPageLoad();
    }

    public function shouldBeOnTheAdminCouponsReportGrid()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminCouponsReportGrid);
        self::verifyGlobalAdminPageTitle('Coupons Report');
    }

    public function clickOnCouponsReportShowReportButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminShowReportButton);
        $I->waitForPageLoad();
    }
}