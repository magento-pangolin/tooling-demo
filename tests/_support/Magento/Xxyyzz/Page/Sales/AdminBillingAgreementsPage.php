<?php
namespace Magento\Xxyyzz\Page\Sales;

use Magento\Xxyyzz\Helper\AdminUrlList;
use Magento\Xxyyzz\Page\AbstractAdminPage;

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