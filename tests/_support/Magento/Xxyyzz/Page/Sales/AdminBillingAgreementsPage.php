<?php
namespace Magento\Xxyyzz\Page;

use Magento\Xxyyzz\Helper\AdminUrlList;

class AdminBillingAgreementsPage extends AbstractAdminPage
{
    public function goToTheAdminBillingAgreementsGrid()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminBillingAgreementsGrid);
        $I->waitForPageLoad();
    }

    public function shouldBeOnTheAdminBillingAgreementsGrid()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminBillingAgreementsGrid);
        self::verifyGlobalAdminPageTitle('Billing Agreements');
    }
}