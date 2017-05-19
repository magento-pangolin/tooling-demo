<?php
namespace Magento\Xxyyzz\Page\System;

use Magento\Xxyyzz\Page\AbstractAdminGrid;

class AdminLockedUsersGrid extends AbstractAdminGrid
{
    public static $quickSelectDropDown = '#lockedAdminsGrid_filter_massaction';
    public static $userNameField       = '#lockedAdminsGrid_filter_username';

    public function selectQuickSelectDropDown($value)
    {
        $I = $this->acceptanceTester;
        $I->selectOption(self::$quickSelectDropDown, $value);
    }

    public function enterUserNameField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$userNameField, $value);
    }
}