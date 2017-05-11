<?php
namespace Magento\Xxyyzz\Page\Catalog;

use Magento\Xxyyzz\Page\AbstractAdminGrid;

class AdminProductGridPage extends AbstractAdminGrid
{
    public static $filterProductSkuField = '.admin__control-text[name="sku"]';

    public function searchBySku($sku)
    {
        $this->searchAndFiltersByValue($sku, self::$filterProductSkuField);
    }
}
