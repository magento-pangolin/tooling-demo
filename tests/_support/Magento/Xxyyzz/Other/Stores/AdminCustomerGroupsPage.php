<?php
namespace Magento\Xxyyzz\Page;

use Magento\Xxyyzz\Helper\AdminUrlList;

class AdminCustomerGroupsPage extends AbstractAdminPage
{
    public function goToTheAdminCustomerGroupsGrid()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminCustomerGroupsGrid);
        $I->waitForPageLoad();
    }

    public function goToTheAdminCustomerGroupForIdPage($customerGroupId)
    {
        $I = $this->acceptanceTester;
        $I->amOnPage((AdminUrlList::$adminCustomerGroupByIdPage . $customerGroupId));
        $I->waitForPageLoad();
    }

    public function goToTheAdminAddCustomerGroupPage()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminAddCustomerGroupPage);
        $I->waitForPageLoad();
    }

    public function shouldBeOnTheAdminCustomerGroupsGrid()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminCustomerGroupsGrid);
        self::verifyGlobalAdminPageTitle('Customer Groups');
    }

    public function shouldBeOnTheAdminCustomerGroupForIdPage($customerGroupId, $customerGroupName)
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl((AdminUrlList::$adminCustomerGroupByIdPage . $customerGroupId));
        self::verifyGlobalAdminPageTitle($customerGroupName);
    }

    public function shouldBeOnTheAdminAddCustomerGroupPage()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminAddCustomerGroupPage);
        self::verifyGlobalAdminPageTitle('New Customer Group');
    }

    public function clickOnCustomerGroupsAddNewCustomerGroupButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminAddButton);
        $I->waitForPageLoad();
    }

    public function clickOnCustomerGroupsBackButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminBackButton);
        $I->waitForPageLoad();
    }

    public function clickOnCustomerGroupsDeleteCustomerGroupButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminDeleteButton);
        $I->waitForPageLoad();
    }

    public function clickOnCustomerGroupsResetButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminResetButton);
        $I->waitForPageLoad();
    }

    public function clickOnCustomerGroupsSaveCustomerGroupButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminSaveButton);
        $I->waitForPageLoad();
    }
}