<?php
namespace Magento\Xxyyzz\Page\Stores;

use Magento\Xxyyzz\Helper\AdminUrlList;
use Magento\Xxyyzz\Page\AbstractAdminPage;

class AdminOrderStatusPage extends AbstractAdminPage
{
    public function goToTheAdminOrderStatusGrid()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminOrderStatusGrid);
        $I->waitForPageLoad();
    }

    public function goToTheAdminAddOrderStatusPage()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminAddOrderStatusPage);
        $I->waitForPageLoad();
    }

    public function shouldBeOnTheAdminOrderStatusGrid()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminOrderStatusGrid);
        self::verifyGlobalAdminPageTitle('Order Status');
    }

    public function shouldBeOnTheAdminAddOrderStatusPage()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminAddOrderStatusPage);
        self::verifyGlobalAdminPageTitle('Create New Order Status');
    }

    public static $orderStatusAssignStatusToStateButton = '#assign';

    public function clickOnOrderStatusAssignStatusToStateButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$orderStatusAssignStatusToStateButton);
        $I->waitForPageLoad();
    }

    public function clickOnOrderStatusCreateNewStatusButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminAddButton);
        $I->waitForPageLoad();
    }

    public function clickOnOrderStatusBackButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminBackButton);
        $I->waitForPageLoad();
    }

    public function clickOnOrderStatusResetButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminResetButton);
        $I->waitForPageLoad();
    }

    public function clickOnOrderStatusSaveStatusButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminSaveButton);
        $I->waitForPageLoad();
    }
}