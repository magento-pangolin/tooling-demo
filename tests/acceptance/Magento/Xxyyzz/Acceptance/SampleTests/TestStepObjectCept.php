<?php
namespace Magento\Xxyyzz\Acceptance\SampleTests;

use Magento\Xxyyzz\Helper\AdminNavigation;

// @group skip
// @group sample

$I = new AdminNavigation(\Codeception\Scenario::$scenario);
$I->wantTo('demo the usage of StepObject in Cept');
$I->loginAsAdmin();