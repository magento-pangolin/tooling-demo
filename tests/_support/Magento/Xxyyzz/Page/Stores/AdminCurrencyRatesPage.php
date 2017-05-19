<?php
namespace Magento\Xxyyzz\Page\Stores;

use Magento\Xxyyzz\Helper\AdminUrlList;
use Magento\Xxyyzz\Page\AbstractAdminPage;

class AdminCurrencyRatesPage extends AbstractAdminPage
{
    public function goToTheAdminCurrencyRatesPage()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminCurrencyRatesPage);
        $I->waitForPageLoad();
    }

    public function shouldBeOnTheAdminCurrencyRatesPage()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminCurrencyRatesPage);
        self::verifyGlobalAdminPageTitle('Currency Rates');
    }

    public static $currencyRatesOptionsButton           = 'button[title="Options"]';
    public static $currencyRatesResetButton             = '.reset'; // The Currency Rates page uses classes instead of IDs.
    public static $currencyRatesSaveCurrencyRatesButton = '.save';

    public function clickOnCurrencyRatesOptionsButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$currencyRatesOptionsButton);
        $I->waitForPageLoad();
    }

    public function clickOnCurrencyRatesResetButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$currencyRatesResetButton);
        $I->waitForPageLoad();
    }

    public function clickOnCurrencyRatesSaveCurrencyRatesButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$currencyRatesSaveCurrencyRatesButton);
        $I->waitForPageLoad();
    }
}