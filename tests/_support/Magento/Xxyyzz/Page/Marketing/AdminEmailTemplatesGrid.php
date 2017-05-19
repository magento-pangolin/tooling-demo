<?php
namespace Magento\Xxyyzz\Page\Marketing;

use Magento\Xxyyzz\Page\AbstractAdminGrid;

class AdminEmailTemplatesGrid extends AbstractAdminGrid
{
    public static $idField              = '#systemEmailTemplateGrid_filter_template_id';
    public static $templateField        = '#systemEmailTemplateGrid_filter_code';
    public static $addedFromField       = 'input[name="added_at[from]"]';
    public static $addedToField         = 'input[name="added_at[to]"]';
    public static $updatedFromField     = 'input[name="modified_at[from]"]';
    public static $updatedToField       = 'input[name="modified_at[to]"]';
    public static $subjectField         = '#systemEmailTemplateGrid_filter_subject';
    public static $templateTypeDropDown = '#systemEmailTemplateGrid_filter_type';

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

    public function selectTemplateTypeDropDown($value)
    {
        $I = $this->acceptanceTester;
        $I->selectOption(self::$templateTypeDropDown, $value);
    }
}