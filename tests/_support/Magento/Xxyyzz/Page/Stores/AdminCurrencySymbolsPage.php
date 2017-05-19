<?php
namespace Magento\Xxyyzz\Page\Stores;

use Magento\Xxyyzz\Helper\AdminUrlList;
use Magento\Xxyyzz\Page\AbstractAdminPage;

class AdminCurrencySymbolsPage extends AbstractAdminPage
{
    public function goToTheAdminCurrencySymbolsPage()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminCurrencySymbolsPage);
        $I->waitForPageLoad();
    }

    public function shouldBeOnTheAdminCurrencySymbolsPage()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminCurrencySymbolsPage);
        self::verifyGlobalAdminPageTitle('Currency Symbols');
    }

    public static $currencySymbolsSaveCurrencySymbolsButton = '.save';

    public function clickOnCurrencySymbolsSaveCurrencySymbolsButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$currencySymbolsSaveCurrencySymbolsButton);
        $I->waitForPageLoad();
    }
}