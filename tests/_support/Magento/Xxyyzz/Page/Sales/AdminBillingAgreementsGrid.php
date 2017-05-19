<?php
namespace Magento\Xxyyzz\Page\Sales;

use Magento\Xxyyzz\Page\AbstractAdminGrid;

class AdminBillingAgreementsGrid extends AbstractAdminGrid
{
    public static $idField          = '#billing_agreements_filter_agreement_id';
    public static $emailField       = '#billing_agreements_filter_customer_email';
    public static $firstNameField   = '#billing_agreements_filter_customer_firstname';
    public static $lastNameField    = '#billing_agreements_filter_customer_lastname';
    public static $referenceIdField = '#billing_agreements_filter_reference_id';
    public static $statusDropDown   = '#billing_agreements_filter_status';
    public static $createdFromField = 'input[id^="billing_agreements_filter_created_at"][id*="from"]';
    public static $createdToField   = 'input[id^="billing_agreements_filter_created_at"][id*="to"]';
    public static $updatedFromField = 'input[id^="billing_agreements_filter_updated_at"][id*="from"]';
    public static $updatedToField   = 'input[id^="billing_agreements_filter_updated_at"][id*="to"]';

    public function enterIdField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$idField, $value);
    }

    public function enterEmailField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$emailField, $value);
    }

    public function enterFirstNameField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$firstNameField, $value);
    }

    public function enterLastNameField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$lastNameField, $value);
    }

    public function enterReferenceIdField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$referenceIdField, $value);
    }

    public function enterStatusDropDown($value)
    {
        $I = $this->acceptanceTester;
        $I->selectOption(self::$statusDropDown, $value);
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

    public function enterUpdatedFromField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$updatedFromField, $value);
    }

    public function enterUpdatedToField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$updatedToField, $value);
    }
}