<?php
namespace Magento\Xxyyzz\Page\Sales;

use Magento\Xxyyzz\Helper\AdminUrlList;
use Magento\Xxyyzz\Page\AbstractAdminPage;

class AdminShipmentsPage extends AbstractAdminPage
{
    public function goToTheAdminShipmentsGrid()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminShipmentsGrid);
        $I->waitForPageLoad();
    }

    public function goToTheAdminShipmentForIdPage($shipmentId)
    {
        $I = $this->acceptanceTester;
        $I->amOnPage((AdminUrlList::$adminShipmentForIdPage . $shipmentId));
        $I->waitForPageLoad();
    }

    public function shouldBeOnTheAdminShipmentsGrid()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminShipmentsGrid);
        self::verifyGlobalAdminPageTitle('Shipments');
    }

    public function shouldBeOnTheAdminShipmentForIdPage($shipmentId)
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl((AdminUrlList::$adminShipmentForIdPage . $shipmentId));
        self::verifyGlobalAdminPageTitle('New Shipment');
    }
    
    public function clickOnShipmentDetailsBackButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminBackButton);
        $I->waitForPageLoad();
    }

    public function clickOnShipmentDetailsPrintButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminPrintButton);
        $I->waitForPageLoad();
    }

    public function clickOnShipmentDetailsSendTrackingInfoButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminPrintButton);
        $I->waitForPageLoad();
    }
}