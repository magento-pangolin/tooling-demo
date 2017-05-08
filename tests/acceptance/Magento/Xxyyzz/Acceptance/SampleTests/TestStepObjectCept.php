<?php
namespace Magento\Xxyyzz\Acceptance\SampleTests;

// @group skip
// @group sample
$I = new \Magento\Xxyyzz\Step\Backend\AdminStep(\Codeception\Scenario::$scenario);
$I->wantTo('demo the usage of StepObject in Cept');
$I->loginAsAdmin();