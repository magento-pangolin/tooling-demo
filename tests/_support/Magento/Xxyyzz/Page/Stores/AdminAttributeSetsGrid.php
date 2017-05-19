<?php
namespace Magento\Xxyyzz\Page\Stores;

use Magento\Xxyyzz\Page\AbstractAdminGrid;

class AdminAttributeSetsGrid extends AbstractAdminGrid
{
    public static $setField = '#setGrid_filter_set_name';

    public function enterSetField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$setField, $value);
    }
}