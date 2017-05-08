<?php
namespace Magento\Xxyyzz\Page;

use Magento\Xxyyzz\Helper\AdminUrlList;

class AdminNewsletterProblemsReportGrid extends AbstractAdminGrid
{
    public function goToTheAdminNewsletterProblemsReportGrid()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminNewsletterProblemsReportGrid);
        $I->waitForPageLoad();
    }

    public function shouldBeOnTheAdminNewsletterProblemsReportGrid()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminNewsletterProblemsReportGrid);
        $I->see('Newsletter Problems Report', self::$globalPageTitle);
    }
}