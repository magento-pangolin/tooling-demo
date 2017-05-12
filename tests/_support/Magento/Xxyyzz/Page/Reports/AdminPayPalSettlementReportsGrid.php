<?php
namespace Magento\Xxyyzz\Page;

use Magento\Xxyyzz\Helper\AdminUrlList;

class AdminPayPalSettlementReportsGrid extends AbstractAdminPage
{
    public function goToTheAdminPayPalSettlementReportsGrid()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminPayPalSettlementReportsGrid);
        $I->waitForPageLoad();
    }

    public function shouldBeOnTheAdminPayPalSettlementReportsGrid()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminPayPalSettlementReportsGrid);
        self::verifyGlobalAdminPageTitle('PayPalSettlement Reports');
    }

    public static $payPalSettlementReportsFetchUpdatesButton = '#fetch';

    public function clickOnPayPalSettlementReportsFetchUpdatesButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$payPalSettlementReportsFetchUpdatesButton);
        $I->waitForPageLoad();
    }

    public static $reportDateFromField    = 'input[name="report_date[from]"]';
    public static $reportDateToField      = 'input[name="report_date[to]"]';
    public static $merchantAccountField   = '#settlementGrid_filter_account_id';
    public static $transactionIdField     = '#settlementGrid_filter_transaction_id';
    public static $invoiceIdField         = '#settlementGrid_filter_invoice_id';
    public static $payPalReferenceIdField = '#settlementGrid_filter_paypal_reference_id';
    public static $eventDropDown          = '#settlementGrid_filter_transaction_event_code';
    public static $startDateFromField     = 'input[name="transaction_initiation_date[from]"]';
    public static $startDateToField       = 'input[name="transaction_initiation_date[to]"]';
    public static $finishDateFromField    = 'input[name="transaction_completion_date[from]"]';
    public static $finishDateToField      = 'input[name="transaction_completion_date[to]"]';
    public static $grossAmountFromField   = '#settlementGrid_filter_gross_transaction_amount_from';
    public static $grossAmountToField     = '#settlementGrid_filter_gross_transaction_amount_to';
    public static $feeAmountFromField     = '#settlementGrid_filter_fee_amount_from';
    public static $feeAmountToField       = '#settlementGrid_filter_fee_amount_to';

    public function enterReportDateFromField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$reportDateFromField, $value);
    }

    public function enterReportDateToField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$reportDateToField, $value);
    }

    public function enterMerchantAccountField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$merchantAccountField  , $value);
    }

    public function enterTransactionIdField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$transactionIdField, $value);
    }

    public function enterInvoiceIdField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$invoiceIdField, $value);
    }

    public function enterPayPalReferenceIdField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$payPalReferenceIdField, $value);
    }

    public function selectEventDropDown($value)
    {
        $I = $this->acceptanceTester;
        $I->selectOption(self::$eventDropDown, $value);
    }

    public function enterStartDateFromField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$startDateFromField, $value);
    }

    public function enterStartDateToField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$startDateToField, $value);
    }

    public function enterFinishDateFromField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$finishDateFromField, $value);
    }

    public function enterFinishDateToField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$finishDateToField, $value);
    }

    public function enterGrossAmountFromField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$grossAmountFromField, $value);
    }

    public function enterGrossAmountToField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$grossAmountToField, $value);
    }

    public function enterFeeAmountFromField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$feeAmountFromField, $value);
    }

    public function enterFeeAmountToField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$feeAmountToField, $value);
    }
}