<?php
namespace Magento\Xxyyzz\Page;

use Magento\Xxyyzz\Helper\AdminUrlList;

class AdminTaxZonesAndRatesPage extends AbstractAdminPage
{
    public function goToTheAdminTaxZonesAndRatesGrid()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminTaxZonesAndRatesGrid);
        $I->waitForPageLoad();
    }

    public function goToTheAdminTaxZoneAndRateForIdPage($taxZoneAndRateId)
    {
        $I = $this->acceptanceTester;
        $I->amOnPage((AdminUrlList::$adminTaxZoneAndRateByIdPage . $taxZoneAndRateId));
        $I->waitForPageLoad();
    }

    public function goToTheAdminAddTaxZoneAndRatePage()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminAddTaxZoneAndRatePage);
        $I->waitForPageLoad();
    }

    public function shouldBeOnTheAdminTaxZonesAndRatesGrid()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminTaxZonesAndRatesGrid);
        self::verifyGlobalAdminPageTitle('Tax Zones and Rates');
    }

    public function shouldBeOnTheAdminTaxZoneAndRateForIdPage($taxZoneAndRateId, $taxIdentifier)
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl((AdminUrlList::$adminTaxZoneAndRateByIdPage . $taxZoneAndRateId));
        self::verifyGlobalAdminPageTitle($taxIdentifier);
    }

    public function shouldBeOnTheAdminAddTaxZoneAndRatePage()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminAddTaxZoneAndRatePage);
        self::verifyGlobalAdminPageTitle('New Tax Rate');
    }

    public function taxZonesAndRatesAddNewTaxRateButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminAddButton);
        $I->waitForPageLoad();
    }

    public function taxZonesAndRatesBackButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminBackButton);
        $I->waitForPageLoad();
    }

    public function taxZonesAndRatesDeleteRateButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminDeleteButton);
        $I->waitForPageLoad();
    }

    public function taxZonesAndRatesSaveRateButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminSaveButton);
        $I->waitForPageLoad();
    }
}