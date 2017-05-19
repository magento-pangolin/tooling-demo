<?php
namespace Magento\Xxyyzz\Page\System;

use Magento\Xxyyzz\Helper\AdminUrlList;
use Magento\Xxyyzz\Page\AbstractAdminPage;

class AdminEncryptionKeyPage extends AbstractAdminPage
{
    public function goToTheAdminEncryptionKeyPage()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminEncryptionKeyPage);
        $I->waitForPageLoad();
    }

    public function shouldBeOnTheAdminEncryptionKeyPage()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminEncryptionKeyPage);
        self::verifyGlobalAdminPageTitle('Encryption Key');
    }
    
    public function clickOnEncryptionKeyChangeEncryptionKeyButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminSaveButton);
        $I->waitForPageLoad();
    }
}