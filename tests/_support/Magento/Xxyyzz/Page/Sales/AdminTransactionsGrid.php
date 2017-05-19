<?php
namespace Magento\Xxyyzz\Page\Sales;

use Magento\Xxyyzz\Page\AbstractAdminGrid;

class AdminTransactionsGrid extends AbstractAdminGrid
{
    public static $idFromField              = '#sales_transactions_grid_filter_transaction_id_from';
    public static $idToField                = '#sales_transactions_grid_filter_transaction_id_to';
    public static $orderIdField             = '#sales_transactions_grid_filter_increment_id';
    public static $transactionIdField       = '#sales_transactions_grid_filter_txn_id';
    public static $parentTransactionIdField = '#sales_transactions_grid_filter_parent_txn_id';
    public static $paymentMethodDropDown    = '#sales_transactions_grid_filter_method';
    public static $transactionTypeDropDown  = '#sales_transactions_grid_filter_txn_type';
    public static $closedDropDown           = '#sales_transactions_grid_filter_is_closed';
    public static $createdFromField         = 'input[name="created_at[from]"]';
    public static $createdToField           = 'input[name="created_at[to]"]';

    public function enterIdFromField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$idFromField, $value);
    }

    public function enterIdToField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$idToField, $value);
    }

    public function enterOrderIdField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$orderIdField, $value);
    }

    public function enterTransactionIdField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$transactionIdField, $value);
    }

    public function enterParentTransactionIdField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$parentTransactionIdField, $value);
    }

    public function selectPaymentMethod($value)
    {
        $I = $this->acceptanceTester;
        $I->selectOption(self::$paymentMethodDropDown, $value);
    }

    public function selectTransactionType($value)
    {
        $I = $this->acceptanceTester;
        $I->selectOption(self::$transactionTypeDropDown, $value);
    }

    public function selectClosed($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$closedDropDown, $value);
    }

    public function enterCreatedFromField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$createdFromField, $value);
    }

    public function enterCreatedToField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$createdToField, $value);
    }
}