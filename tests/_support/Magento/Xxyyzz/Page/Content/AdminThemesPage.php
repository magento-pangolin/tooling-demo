<?php
namespace Magento\Xxyyzz\Page\Content;

use Magento\Xxyyzz\Helper\AdminUrlList;
use Magento\Xxyyzz\Page\AbstractAdminPage;

class AdminThemesPage extends AbstractAdminPage
{
    public function goToTheAdminThemesGrid()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminThemesGrid);
        $I->waitForPageLoad();
    }

    public function goToTheAdminThemeByIdPage($themeId)
    {
        $I = $this->acceptanceTester;
        $I->amOnPage((AdminUrlList::$adminThemeByIdPage . $themeId));
        $I->waitForPageLoad();
    }

    public function shouldBeOnTheAdminThemesGrid()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminThemesGrid);
        self::verifyGlobalAdminPageTitle('Themes');
    }

    public function shouldBeOnTheAdminThemeByIdPage($themeId, $themeTitle)
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl((AdminUrlList::$adminThemeByIdPage . $themeId));
        self::verifyGlobalAdminPageTitle($themeTitle);
    }

    public function clickOnThemeDetailsBackButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminBackButton);
        $I->waitForPageLoad();
    }
}