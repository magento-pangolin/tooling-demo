<?php
namespace Magento\Xxyyzz\Page;

use Magento\Xxyyzz\Helper\AdminUrlList;

class AdminExportPage extends AbstractAdminPage
{
    public function goToTheAdminExportPage()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminExportPage);
        $I->waitForPageLoad();
    }

    public function shouldBeOnTheAdminExportPage()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminExportPage);
        self::verifyGlobalAdminPageTitle('Export');
    }
}