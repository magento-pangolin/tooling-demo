<?php
namespace Magento\Xxyyzz\Page;

use Magento\Xxyyzz\Helper\AdminUrlList;

class AdminNewsletterSubscribersGrid extends AbstractAdminGrid
{
    public function goToTheAdminNewsletterSubscribersGrid()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminNewsletterSubscribersGrid);
        $I->waitForPageLoad();
    }

    public function shouldBeOnTheAdminNewsletterQueueGrid()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminNewsletterQueueGrid);
        $I->see('Newsletter Queue', self::$globalPageTitle);
    }
}