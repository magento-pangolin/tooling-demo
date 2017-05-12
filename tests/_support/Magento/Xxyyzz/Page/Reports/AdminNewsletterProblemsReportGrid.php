<?php
namespace Magento\Xxyyzz\Page;

use Magento\Xxyyzz\Helper\AdminUrlList;

class AdminNewsletterProblemsReportGrid extends AbstractAdminGrid
{
    public function goToTheAdminNewsletterProblemsReportGrid()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminNewsletterProblemsReportGrid);
        $I->waitForPageLoad();
    }

    public function shouldBeOnTheAdminNewsletterProblemsReportGrid()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminNewsletterProblemsReportGrid);
        $I->see('Newsletter Problems Report', self::$globalPageTitle);
    }

    public static $idField                 = '#problemGrid_filter_problem_id';
    public static $subscriberField         = '#problemGrid_filter_subscriber';
    public static $queueStartDateFromField = 'input[name="queue_start[from]"]';
    public static $queueStartDateToField   = 'input[name="queue_start[to]"]';
    public static $queueSubjectField       = '#problemGrid_filter_queue';
    public static $errorCodeFromField      = '#problemGrid_filter_problem_code_from';
    public static $errorCodeToField        = '#problemGrid_filter_problem_code_to';
    public static $errorTextField          = '#problemGrid_filter_problem_text';

    public function enterIdField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$idField, $value);
    }
    public function enterSubscriberField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$subscriberField, $value);
    }
    public function enterQueueStartDateFromField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$queueStartDateFromField, $value);
    }
    public function enterQueueStartDateToField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$queueStartDateToField, $value);
    }
    public function enterQueueSubjectField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$queueSubjectField, $value);
    }
    public function enterErrorCodeFromField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$errorCodeFromField, $value);
    }
    public function enterErrorCodeToField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$errorCodeToField, $value);
    }
    public function enterErrorTextField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$errorTextField, $value);
    }
}