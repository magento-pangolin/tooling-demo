<?php
namespace Magento\Xxyyzz\Page;

use Magento\Xxyyzz\Helper\AdminUrlList;

class AdminStoreDesignSchedulePage extends AbstractAdminPage
{
    public function goToTheAdminStoreContentScheduleGrid()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminStoreContentScheduleGrid);
        $I->waitForPageLoad();
    }

    public function goToTheAdminStoreContentScheduleForIdPage($storeContentScheduleId)
    {
        $I = $this->acceptanceTester;
        $I->amOnPage((AdminUrlList::$adminStoreContentScheduleForIdPage . $storeContentScheduleId));
        $I->waitForPageLoad();
    }

    public function goToTheAdminAddStoreDesignChangePage()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminAddStoreDesignChangePage);
        $I->waitForPageLoad();
    }

    public function shouldBeOnTheAdminStoreContentScheduleGrid()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminStoreContentScheduleGrid);
        self::verifyGlobalAdminPageTitle('Store Design Schedule');
    }

    public function shouldBeOnTheAdminStoreContentScheduleForIdPage($storeContentScheduleId)
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl((AdminUrlList::$adminStoreContentScheduleForIdPage . $storeContentScheduleId));
        self::verifyGlobalAdminPageTitle('Edit Store Design Change');
    }

    public function shouldBeOnTheAdminAddStoreDesignChangePage()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminAddStoreDesignChangePage);
        self::verifyGlobalAdminPageTitle('New Store Design Change');
    }

    public static $storeDesignScheduleAddDesignChangeButton = '.add'; // The Design Schedule page uses classes instead of IDs.
    public static $storeDesignScheduleBackButton            = '.back';
    public static $storeDesignScheduleDeleteButton          = '.delete';
    public static $storeDesignScheduleSaveButton            = '.save';

    public function clickOnStoreDesignScheduleAddDesignChangeButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$storeDesignScheduleAddDesignChangeButton);
        $I->waitForPageLoad();
    }

    public function clickOnStoreDesignScheduleBackButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$storeDesignScheduleBackButton);
        $I->waitForPageLoad();
    }

    public function clickOnStoreDesignScheduleDeleteButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$storeDesignScheduleDeleteButton);
        $I->waitForPageLoad();
    }

    public function clickOnStoreDesignScheduleSaveButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$storeDesignScheduleSaveButton);
        $I->waitForPageLoad();
    }
}