<?php
namespace Magento\Xxyyzz\Page\Marketing;

use Magento\Xxyyzz\Helper\AdminUrlList;
use Magento\Xxyyzz\Page\AbstractAdminPage;

class AdminSiteMapPage extends AbstractAdminPage
{
    public function goToTheAdminSiteMapGrid()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminSiteMapGrid);
        $I->waitForPageLoad();
    }

    public function goToTheAdminSiteMapForIdPage($siteMapId)
    {
        $I = $this->acceptanceTester;
        $I->amOnPage((AdminUrlList::$adminSiteMapForIdPage . $siteMapId));
        $I->waitForPageLoad();
    }

    public function goToTheAdminAddSiteMapPage()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminAddSiteMapPage);
        $I->waitForPageLoad();
    }

    public function shouldBeOnTheAdminSiteMapGrid()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminSiteMapGrid);
        self::verifyGlobalAdminPageTitle('Site Map');
    }

    public function shouldBeOnTheAdminSiteMapForIdPage($siteMapId, $fileName)
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl((AdminUrlList::$adminSiteMapForIdPage . $siteMapId));
        self::verifyGlobalAdminPageTitle($fileName);
    }

    public function shouldBeOnTheAdminAddSiteMapPage()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminAddSiteMapPage);
        self::verifyGlobalAdminPageTitle('New Site Map');
    }

    public static $siteMapDetailsSaveAndGenerateButton = '#generate';

    public function clickOnSiteMapAddSiteMapButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminAddButton);
        $I->waitForPageLoad();
    }

    public function clickOnSiteMapDetailsBackButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminBackButton);
        $I->waitForPageLoad();
    }

    public function clickOnSiteMapDetailsDeleteButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminDeleteButton);
        $I->waitForPageLoad();
    }

    public function clickOnSiteMapDetailsResetButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminResetButton);
        $I->waitForPageLoad();
    }

    public function clickOnSiteMapDetailsSaveAndGenerateButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$siteMapDetailsSaveAndGenerateButton);
        $I->waitForPageLoad();
    }

    public function clickOnSiteMapDetailsSaveButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminSaveButton);
        $I->waitForPageLoad();
    }
}