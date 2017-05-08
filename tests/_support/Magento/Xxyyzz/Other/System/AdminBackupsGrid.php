<?php
namespace Magento\Xxyyzz\Page;

use Magento\Xxyyzz\Helper\AdminUrlList;

class AdminBackupsGrid extends AbstractAdminGrid
{
    public function goToTheAdminBackupsGrid()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminBackupsGrid);
        $I->waitForPageLoad();
    }

    public function shouldBeOnTheAdminBackupsGrid()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminBackupsGrid);
        $I->see('Backups', self::$globalPageTitle);
    }

    public static $backupsSystemBackupButton           = '.system-backup';
    public static $backupsDatabaseAndMediaBackupButton = '.database-media-backup';
    public static $backupsDatabaseBackupButton         = '.database-backup';

    public function clickOnBackupsSystemBackupButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$backupsSystemBackupButton);
        $I->waitForPageLoad();
    }

    public function clickOnBackupsDatabaseAndMediaBackupButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$backupsDatabaseAndMediaBackupButton);
        $I->waitForPageLoad();
    }

    public function clickOnBackupsDatabaseBackupButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$backupsDatabaseBackupButton);
        $I->waitForPageLoad();
    }
}