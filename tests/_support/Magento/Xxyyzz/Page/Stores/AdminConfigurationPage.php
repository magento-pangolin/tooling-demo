<?php
namespace Magento\Xxyyzz\Page\Stores;

use Magento\Xxyyzz\Helper\AdminUrlList;
use Magento\Xxyyzz\Page\AbstractAdminPage;

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