<?php
namespace Magento\Xxyyzz\Acceptance\SampleTests;

use Magento\Xxyyzz\Helper\AdminNavigation;
use \Codeception\Scenario;

class AdminCest
{
    /**
     * @env chrome
     * @env firefox
     * @env phantomjs
     * @group skip
     * @group sample
     * @param Scenario $scenario
     * @param AdminNavigation $I
     * @return void
     */
    public function amStepObject(Scenario $scenario, AdminNavigation $I)
    {
        $I->wantTo('demo the usage of StepObject in Cest');
        $I->loginAsAdmin();
    }
}