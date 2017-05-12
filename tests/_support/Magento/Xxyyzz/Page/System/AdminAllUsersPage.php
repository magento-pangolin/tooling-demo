<?php
namespace Magento\Xxyyzz\Page;

use Magento\Xxyyzz\Helper\AdminUrlList;

class AdminAllUsersPage extends AbstractAdminPage
{
    public function goToTheAdminAllUsersGrid()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminAllUsersGrid);
        $I->waitForPageLoad();
    }

    public function goToTheAdminUserForIdPage($userId)
    {
        $I = $this->acceptanceTester;
        $I->amOnPage((AdminUrlList::$adminUserByIdPage . $userId));
        $I->waitForPageLoad();
    }

    public function goToTheAdminAddUserPage()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminAddNewUserPage);
        $I->waitForPageLoad();
    }

    public function shouldBeOnTheAdminAllUsersGrid()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminAllUsersGrid);
        self::verifyGlobalAdminPageTitle('Users');
    }

    public function shouldBeOnTheAdminUserForIdPage($userId, $userFirstAndLastName)
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl((AdminUrlList::$adminUserByIdPage . $userId));
        self::verifyGlobalAdminPageTitle($userFirstAndLastName);
    }

    public function shouldBeOnTheAdminAddUserPage()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminAddNewUserPage);
        self::verifyGlobalAdminPageTitle('New User');
    }

    public static $usersForceSignInButton = '#invalidate';

    public function clickOnUsersAddNewUserButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminAddButton);
        $I->waitForPageLoad();
    }

    public function clickOnUsersBackButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminBackButton);
        $I->waitForPageLoad();
    }

    public function clickOnUsersDeleteUserButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminDeleteButton);
        $I->waitForPageLoad();
    }

    public function clickOnUsersResetButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminResetButton);
        $I->waitForPageLoad();
    }

    public function clickOnUsersForceSignInButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$usersForceSignInButton);
        $I->waitForPageLoad();
    }

    public function clickOnUsersSaveUserButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminSaveButton);
        $I->waitForPageLoad();
    }
}