<?php
namespace Magento\Xxyyzz\Page;

class AdminAllUsersGrid extends AbstractAdminGrid
{
    public static $idField        = '#permissionsUserGrid_filter_user_id';
    public static $userNameField  = '#permissionsUserGrid_filter_username';
    public static $firstNameField = '#permissionsUserGrid_filter_firstname';
    public static $lastNameField  = '#permissionsUserGrid_filter_lastname';
    public static $emailField     = '#permissionsUserGrid_filter_email';
    public static $statusDropDown = '#permissionsUserGrid_filter_is_active';

    public function enterIdField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$idField, $value);
    }

    public function enterUserNameField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$userNameField, $value);
    }

    public function enterFirstNameField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$firstNameField, $value);
    }

    public function enterLastNameField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$lastNameField, $value);
    }

    public function enterEmailField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$emailField , $value);
    }

    public function selectStatusDropDown($value)
    {
        $I = $this->acceptanceTester;
        $I->selectOption(self::$statusDropDown, $value);
    }
}