<?php
namespace Magento\Xxyyzz\Page\Content;

use Magento\Xxyyzz\Page\AbstractAdminGrid;

class AdminPagesGrid extends AbstractAdminGrid
{
    /**
     * Declare UI map for this page here. CSS or XPath allowed.
     */
    public static $actionEdit   = '.action-menu-item[data-action="item-edit"]';
    public static $actionDelete = '.action-menu-item[data-action="item-delete"]';
    public static $actionView   = '.action-menu-item[data-action="item-preview"]';

    public function clickOnActionSelectLinkFor($keyText)
    {
        $I = $this->acceptanceTester;
        $selector = '.data-row[data-repeat-index="' . self::determineRowIndexBasedOn($keyText) . '"] .action-select';

        $I->click($selector);
        $I->waitForPageLoad();
    }

    public function clickOnActionEditFor($keyText)
    {
        $I = $this->acceptanceTester;
        $selector = '.data-row[data-repeat-index="' . self::determineRowIndexBasedOn($keyText) . '"] ' . self::$actionEdit;

        self::clickOnActionSelectLinkFor($keyText);
        $I->click($selector);
        $I->waitForPageLoad();
    }

    public function clickOnActionDeleteFor($keyText)
    {
        $I = $this->acceptanceTester;
        $selector = '.data-row[data-repeat-index="' . self::determineRowIndexBasedOn($keyText) . '"] ' . self::$actionEdit;

        self::clickOnActionSelectLinkFor($keyText);
        $I->click($selector);
        $I->waitForPageLoad();
    }

    public function clickOnActionViewFor($keyText)
    {
        $I = $this->acceptanceTester;
        $selector = '.data-row[data-repeat-index="' . self::determineRowIndexBasedOn($keyText) . '"] ' . self::$actionEdit;

        self::clickOnActionSelectLinkFor($keyText);
        $I->click($selector);
        $I->waitForPageLoad();
    }
}