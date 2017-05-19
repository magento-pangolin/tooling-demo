<?php
namespace Magento\Xxyyzz\Page\System;

use Magento\Xxyyzz\Helper\AdminUrlList;
use Magento\Xxyyzz\Page\AbstractAdminPage;

class AdminCacheManagementPage extends AbstractAdminPage
{
    public function goToTheAdminCacheManagementGrid()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminCacheManagementGrid);
        $I->waitForPageLoad();
    }

    public function shouldBeOnTheAdminCacheManagementGrid()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminCacheManagementGrid);
        self::verifyGlobalAdminPageTitle('Cache Management');
    }

    public static $cacheManagementFlushCacheStorageButton = '#flush_system';
    public static $cacheManagementFlushMagentoCacheButton = '#flush_magento';

    public function clickOnCacheManagementFlushCacheStorageButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$cacheManagementFlushCacheStorageButton);
        $I->waitForPageLoad();
    }

    public function clickOnCacheManagementFlushMagentoCacheButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$cacheManagementFlushMagentoCacheButton);
        $I->waitForPageLoad();
    }
}