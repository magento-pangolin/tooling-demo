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

    public static $quickSelectDropDown = '#backupsGrid_filter_massaction';
    public static $timeFromField       = 'input[name="time[from]"]';
    public static $timeToField         = 'input[name="time[to]"]';
    public static $nameField           = '#backupsGrid_filter_display_name';
    public static $typeDropDown        = '#backupsGrid_filter_type';

    public function selectQuickSelectDropDown($value)
    {
        $I = $this->acceptanceTester;
        $I->selectOption(self::$quickSelectDropDown, $value);
    }

    public function enterTimeFromField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$timeFromField, $value);
    }

    public function enterTimeToField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$timeToField, $value);
    }

    public function enterNameField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$nameField, $value);
    }

    public function selectTypeDropDown($value)
    {
        $I = $this->acceptanceTester;
        $I->selectOption(self::$typeDropDown, $value);
    }
}