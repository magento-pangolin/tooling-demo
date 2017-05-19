<?php
namespace Magento\Xxyyzz\Page\System;

use Magento\Xxyyzz\Helper\AdminUrlList;
use Magento\Xxyyzz\Page\AbstractAdminPage;

class AdminIntegrationsPage extends AbstractAdminPage
{
    public function goToTheAdminIntegrationsGrid()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminIntegrationsGrid);
        $I->waitForPageLoad();
    }

    public function goToTheAdminIntegrationForIdPage($integrationId)
    {
        $I = $this->acceptanceTester;
        $I->amOnPage((AdminUrlList::$adminIntegrationByIdPage . $integrationId));
        $I->waitForPageLoad();
    }

    public function goToTheAdminAddIntegrationPage()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminAddIntegrationPage);
        $I->waitForPageLoad();
    }

    public function shouldBeOnTheAdminIntegrationsGrid()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminIntegrationsGrid);
        self::verifyGlobalAdminPageTitle('Integrations');
    }

    public function shouldBeOnTheAdminIntegrationForIdPage($integrationId, $integrationName)
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl((AdminUrlList::$adminIntegrationByIdPage . $integrationId));
        self::verifyGlobalAdminPageTitle('Edit');
        self::verifyGlobalAdminPageTitle($integrationName);
        self::verifyGlobalAdminPageTitle('Integration');
    }

    public function shouldBeOnTheAdminAddIntegrationPage()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminAddIntegrationPage);
        self::verifyGlobalAdminPageTitle('New Integration');
    }

    public function clickOnIntegrationsAddNewIntegrationButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminAddButton);
        $I->waitForPageLoad();
    }

    public function clickOnIntegrationsBackButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminBackButton);
        $I->waitForPageLoad();
    }

    public function clickOnIntegrationsSaveButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminSaveButton);
        $I->waitForPageLoad();
    }
}