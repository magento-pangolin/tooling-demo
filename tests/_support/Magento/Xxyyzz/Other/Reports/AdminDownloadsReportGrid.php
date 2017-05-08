<?php
namespace Magento\Xxyyzz\Page;

use Magento\Xxyyzz\Helper\AdminUrlList;

class AdminDownloadsReportGrid extends AbstractAdminGrid
{
    public function goToTheAdminAddDownloadableProductPage()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminAddDownloadableProductPage);
        $I->waitForPageLoad();
    }

    public function shouldBeOnTheAdminDownloadsReportGrid()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminDownloadsReportGrid);
        $I->see('Downloads Report', self::$globalPageTitle);
    }
}