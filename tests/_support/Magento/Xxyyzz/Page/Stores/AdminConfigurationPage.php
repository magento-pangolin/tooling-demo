<?php
namespace Magento\Xxyyzz\Page;

use Magento\Xxyyzz\Helper\AdminUrlList;

class AdminConfigurationPage extends AbstractAdminPage
{
    public function goToTheAdminConfigurationGrid()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminConfigurationGrid);
        $I->waitForPageLoad();
    }

    public function shouldBeOnTheAdminConfigurationGrid()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminConfigurationGrid);
        self::verifyGlobalAdminPageTitle('Configuration');
    }

    public function clickOnConfigurationSaveConfigButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminSaveButton);
    }
}