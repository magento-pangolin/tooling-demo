<?php
namespace Magento\Xxyyzz\Page\Marketing;

use Magento\Xxyyzz\Helper\AdminUrlList;
use Magento\Xxyyzz\Page\AbstractAdminPage;

class AdminNewsletterQueuePage extends AbstractAdminPage
{
    public function goToTheAdminNewsletterQueueGrid()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminNewsletterQueueGrid);
        $I->waitForPageLoad();
    }

    public function shouldBeOnTheAdminNewsletterQueueGrid()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminNewsletterQueueGrid);
        self::verifyGlobalAdminPageTitle('Newsletter Queue');
    }
}