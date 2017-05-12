<?php
namespace Magento\Xxyyzz\Page;

class AdminNewsletterQueueGrid extends AbstractAdminGrid
{
    public static $idField             = '#queueGrid_filter_queue_id';
    public static $queueStartFromField = 'input[name="start_at[from]"]';
    public static $queueStartToField   = 'input[name="start_at[to]"]';
    public static $queueEndFromField   = 'input[name="finish_at[from]"]';
    public static $queueEndToField     = 'input[name="finish_at[to]"]';
    public static $subjectField        = '#queueGrid_filter_newsletter_subject';
    public static $statusDropDown      = '#queueGrid_filter_status';
    public static $processedFromField  = '#queueGrid_filter_subscribers_sent_from';
    public static $processedToField    = '#queueGrid_filter_subscribers_sent_to';
    public static $recipientsFromField = '#queueGrid_filter_subscribers_total_from';
    public static $recipientsToField   = '#queueGrid_filter_subscribers_total_to';

    public function enterIdField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$idField, $value);
    }

    public function enterQueueStartFromField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$queueStartFromField, $value);
    }

    public function enterQueueStartToField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$queueStartToField, $value);
    }

    public function enterQueueEndFromField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$queueEndFromField, $value);
    }

    public function enterQueueEndToField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$queueEndToField, $value);
    }

    public function enterSubjectField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$subjectField, $value);
    }

    public function selectStatusDropDown($value)
    {
        $I = $this->acceptanceTester;
        $I->selectOption(self::$statusDropDown, $value);
    }

    public function enterProcessedFromField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$processedFromField, $value);
    }

    public function enterProcessedToField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$processedToField, $value);
    }

    public function enterRecipientsFromField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$recipientsFromField, $value);
    }

    public function enterRecipientsToField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$recipientsToField, $value);
    }
}