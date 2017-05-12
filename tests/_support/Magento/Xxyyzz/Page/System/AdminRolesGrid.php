<?php
namespace Magento\Xxyyzz\Page;

class AdminRolesGrid extends AbstractAdminGrid
{
    public static $idField   = '#roleGrid_filter_role_id';
    public static $roleField = '#roleGrid_filter_role_name';

    public function enterIdField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$idField, $value);
    }

    public function enterRoleField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$roleField, $value);
    }
}