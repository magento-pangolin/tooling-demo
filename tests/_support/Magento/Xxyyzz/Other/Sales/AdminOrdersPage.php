<?php
namespace Magento\Xxyyzz\Page;

use Magento\Xxyyzz\Helper\AdminUrlList;

class AdminOrdersPage extends AbstractAdminPage
{
    public function goToTheAdminOrdersGrid()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminOrdersGrid);
        $I->waitForPageLoad();
    }

    public function goToTheAdminOrderForIdPage($orderId)
    {
        $I = $this->acceptanceTester;
        $I->amOnPage((AdminUrlList::$adminOrderByIdPage . $orderId));
        $I->waitForPageLoad();
    }

    public function goToTheAdminAddOrderPage()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminAddOrderPage);
        $I->waitForPageLoad();
    }

    public function goToTheAdminAddOrderForCustomerIdPage($customerId)
    {
        $I = $this->acceptanceTester;
        $I->amOnPage((AdminUrlList::$adminAddOrderForCustomerIdPage . $customerId));
        $I->waitForPageLoad();
    }

    public function shouldBeOnTheAdminOrdersGrid()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminOrdersGrid);
        self::verifyGlobalAdminPageTitle('Orders');
    }

    public function shouldBeOnTheAdminOrderForIdPage($orderId)
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl((AdminUrlList::$adminOrderByIdPage . $orderId));
        self::verifyGlobalAdminPageTitle($orderId);
    }

    public function shouldBeOnTheAdminAddOrderPage()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminAddOrderPage);
        self::verifyGlobalAdminPageTitle('Create New Order');
    }

    public function shouldBeOnTheAdminAddOrderForCustomerIdPage($customerId)
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl((AdminUrlList::$adminAddOrderForCustomerIdPage . $customerId));
        self::verifyGlobalAdminPageTitle('Create New Order');
    }
}