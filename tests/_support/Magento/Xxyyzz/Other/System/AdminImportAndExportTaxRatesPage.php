<?php
namespace Magento\Xxyyzz\Page;

use Magento\Xxyyzz\Helper\AdminUrlList;

class AdminImportAndExportTaxRatesPage extends AbstractAdminPage
{
    public function goToTheAdminImportAndExportTaxRatesPage()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminImportAndExportTaxRatesPage);
        $I->waitForPageLoad();
    }

    public function shouldBeOnTheAdminImportAndExportTaxRatesPage()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminImportAndExportTaxRatesPage);
        self::verifyGlobalAdminPageTitle('Import and Export Tax Rates');
    }
}