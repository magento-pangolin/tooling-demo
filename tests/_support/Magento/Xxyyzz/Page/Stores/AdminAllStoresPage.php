<?php
namespace Magento\Xxyyzz\Page\Stores;

use Magento\Xxyyzz\Helper\AdminUrlList;
use Magento\Xxyyzz\Page\AbstractAdminPage;

class AdminAllStoresPage extends AbstractAdminPage
{
    public function goToTheAdminAllStoresGrid()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminAllStoresGrid);
        $I->waitForPageLoad();
    }

    public function goToTheAdminCreateStoreViewPage()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminCreateStoreViewPage);
        $I->waitForPageLoad();
    }

    public function goToTheAdminCreateStorePage()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminCreateStorePage);
        $I->waitForPageLoad();
    }

    public function goToTheAdminCreateWebsitePage()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminCreateWebsitePage);
        $I->waitForPageLoad();
    }

    public function goToTheAdminWebsiteForIdPage($websiteId)
    {
        $I = $this->acceptanceTester;
        $I->amOnPage((AdminUrlList::$adminWebsiteByIdPage . $websiteId));
        $I->waitForPageLoad();
    }

    public function goToTheAdminStoreViewForIdPage($storeViewId)
    {
        $I = $this->acceptanceTester;
        $I->amOnPage((AdminUrlList::$adminStoreViewByIdPage . $storeViewId));
        $I->waitForPageLoad();
    }

    public function goToTheAdminStoreForIdPage($storeId)
    {
        $I = $this->acceptanceTester;
        $I->amOnPage((AdminUrlList::$adminStoreByIdPage . $storeId));
        $I->waitForPageLoad();
    }

    public function shouldBeOnTheAdminAllStoresGrid()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminAllStoresGrid);
        self::verifyGlobalAdminPageTitle('Stores');
    }

    public function shouldBeOnTheAdminCreateStoreViewPage()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminCreateStoreViewPage);
        self::verifyGlobalAdminPageTitle('Stores');
    }

    public function shouldBeOnTheAdminCreateStorePage()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminCreateStorePage);
        self::verifyGlobalAdminPageTitle('Stores');
    }

    public function shouldBeOnTheAdminCreateWebsitePage()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminCreateWebsitePage);
        $I->see('Stores');
    }

    public function shouldBeOnTheAdminWebsiteForIdPage($websiteId)
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl((AdminUrlList::$adminWebsiteByIdPage . $websiteId));
    }

    public function shouldBeOnTheAdminStoreViewForIdPage($storeViewId)
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl((AdminUrlList::$adminStoreViewByIdPage . $storeViewId));
    }

    public function shouldBeOnTheAdminStoreForIdPage($storeId)
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl((AdminUrlList::$adminStoreByIdPage . $storeId));
    }

    public static $createStoreViewButton = '#add_store';
    public static $createStoreButton     = '#add_group';

    public function clickOnCreateStoreViewButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$createStoreViewButton);
        $I->waitForPageLoad();
    }

    public function clickOnCreateStoreButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$createStoreButton);
        $I->waitForPageLoad();
    }

    public function clickOnCreateWebsiteButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminAddButton);
        $I->waitForPageLoad();
    }

    public function clickOnStoresBackButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminBackButton);
        $I->waitForPageLoad();
    }

    public function clickOnStoresResetButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminResetButton);
        $I->waitForPageLoad();
    }

    public function clickOnStoresSaveStoreViewButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminSaveButton);
        $I->waitForPageLoad();
    }

    public function clickOnStoresDeleteStoreViewButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminDeleteButton);
        $I->waitForPageLoad();
    }

    public function clickOnStoresSaveStoreButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminSaveButton);
        $I->waitForPageLoad();
    }

    public function clickOnStoresSaveWebSiteButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminSaveButton);
        $I->waitForPageLoad();
    }
}