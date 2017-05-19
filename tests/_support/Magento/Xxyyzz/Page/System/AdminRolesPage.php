<?php
namespace Magento\Xxyyzz\Page\System;

use Magento\Xxyyzz\Helper\AdminUrlList;
use Magento\Xxyyzz\Page\AbstractAdminPage;

class AdminRolesPage extends AbstractAdminPage
{
    public function goToTheAdminUserRolesGrid()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminUserRolesGrid);
        $I->waitForPageLoad();
    }

    public function goToTheAdminUserRoleForIdPage($userRoleId)
    {
        $I = $this->acceptanceTester;
        $I->amOnPage((AdminUrlList::$adminUserRoleByIdPage . $userRoleId));
        $I->waitForPageLoad();
    }

    public function goToTheAdminAddUserRolePage()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminAddUserRolePage);
        $I->waitForPageLoad();
    }

    public function shouldBeOnTheAdminUserRolesGrid()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminUserRolesGrid);
        self::verifyGlobalAdminPageTitle('Roles');
    }

    public function shouldBeOnTheAdminUserRoleForIdPage($userRoleId, $userRoleName)
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl((AdminUrlList::$adminUserRoleByIdPage . $userRoleId));
        self::verifyGlobalAdminPageTitle($userRoleName);
    }

    public function shouldBeOnTheAdminAddUserRolePage()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminAddUserRolePage);
        self::verifyGlobalAdminPageTitle('New Role');
    }

    public static $rolesBackButton       = '.back';
    public static $rolesDeleteRoleButton = '.delete';
    public static $rolesResetButton      = '.reset';
    public static $rolesSaveRoleButton   = '.save';

    public function clickOnRolesAddNewRoleButton()
    {
        $I = $this->acceptanceTester;
        $I-> click(self::$genericAdminAddButton);
        $I->waitForPageLoad();
    }

    public function clickOnRolesBackButton()
    {
        $I = $this->acceptanceTester;
        $I-> click(self::$rolesBackButton);
        $I->waitForPageLoad();
    }

    public function clickOnRolesDeleteRoleButton()
    {
        $I = $this->acceptanceTester;
        $I-> click(self::$rolesDeleteRoleButton);
        $I->waitForPageLoad();
    }

    public function clickOnRolesResetButton()
    {
        $I = $this->acceptanceTester;
        $I-> click(self::$rolesResetButton);
        $I->waitForPageLoad();
    }

    public function clickOnRolesSaveRoleButton()
    {
        $I = $this->acceptanceTester;
        $I-> click(self::$rolesSaveRoleButton);
        $I->waitForPageLoad();
    }
}