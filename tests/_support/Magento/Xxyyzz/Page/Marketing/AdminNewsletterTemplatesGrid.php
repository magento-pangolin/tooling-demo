<?php
namespace Magento\Xxyyzz\Page\Marketing;

use Magento\Xxyyzz\Page\AbstractAdminGrid;

class AdminNewsletterTemplatesGrid extends AbstractAdminGrid
{
    public static $idField              = 'input[id$="_filter_template_code"]';
    public static $templateField        = 'input[id$="_filter_code"]';
    public static $addedFromField       = 'input[id*="filter_added"][id$="_from"]';
    public static $addedToField         = 'input[id*="filter_added"][id$="_to"]';
    public static $updatedFromField     = 'input[id*="filter_modified"][id$="_from"]';
    public static $updatedToField       = 'input[id*="filter_modified"][id$="_to"]';
    public static $subjectField         = 'input[id*="filter_subject"]';
    public static $senderField          = 'input[id*="filter_sender"]';
    public static $templateTypeDropDown = 'select[id*="filter_type"]';

    public function enterIdField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$idField, $value);
    }

    public function enterTemplateField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$templateField, $value);
    }

    public function enterAddedFromField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$addedFromField, $value);
    }

    public function enterAddedToField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$addedToField, $value);
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

    public function enterSubjectField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$subjectField, $value);
    }

    public function enterSenderField($value)
    {
        $I = $this->acceptanceTester;
        $I->fillField(self::$senderField, $value);
    }

    public function selectTemplateTypeDropDown($value)
    {
        $I = $this->acceptanceTester;
        $I->selectOption(self::$templateTypeDropDown, $value);
    }
}