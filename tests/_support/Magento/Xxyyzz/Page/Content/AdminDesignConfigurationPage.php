<?php
namespace Magento\Xxyyzz\Page\Content;

use Magento\Xxyyzz\Helper\AdminUrlList;
use Magento\Xxyyzz\Page\AbstractAdminPage;

class AdminDesignConfigurationPage extends AbstractAdminPage
{
    public function goToTheAdminDesignConfigurationGrid()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminDesignConfigurationGrid);
        $I->waitForPageLoad();
    }

    public function shouldBeOnTheAdminDesignConfigurationGrid()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminDesignConfigurationGrid);
        self::verifyGlobalAdminPageTitle('Design Configuration');
    }

    public function clickOnDesignConfigurationDetailsBackButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminBackButton);
        $I->waitForPageLoad();
    }

    public function clickOnDesignConfigurationSaveAndContinueButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminSaveAndContinueButton);
        $I->waitForPageLoad();
    }

    public function clickOnDesignConfigurationSaveConfigurationButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminSaveButton);
        $I->waitForPageLoad();
    }
}