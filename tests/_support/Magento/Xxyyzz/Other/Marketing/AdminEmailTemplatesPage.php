<?php
namespace Magento\Xxyyzz\Page;

use Magento\Xxyyzz\Helper\AdminUrlList;

class AdminEmailTemplatesPage extends AbstractAdminPage
{
    public function goToTheAdminEmailTemplatesGrid()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminEmailTemplatesGrid);
        $I->waitForPageLoad();
    }

    public function goToTheAdminEmailTemplateForIdPage($emailTemplateId)
    {
        $I = $this->acceptanceTester;
        $I->amOnPage((AdminUrlList::$adminEmailTemplateForIdPage . $emailTemplateId));
        $I->waitForPageLoad();
    }

    public function goToTheAdminAddEmailTemplatePage()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminAddEmailTemplatePage);
        $I->waitForPageLoad();
    }

    public function shouldBeOnTheAdminEmailTemplatesGrid()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminEmailTemplatesGrid);
        self::verifyGlobalAdminPageTitle('Email Templates');
    }

    public function shouldBeOnTheAdminEmailTemplateForIdPage($emailTemplateId, $templateName)
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl((AdminUrlList::$adminEmailTemplateForIdPage . $emailTemplateId));
        self::verifyGlobalAdminPageTitle($templateName);
    }

    public function shouldBeOnTheAdminAddEmailTemplatePage()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminAddEmailTemplatePage);
        self::verifyGlobalAdminPageTitle('New Template');
    }

    public static $emailTemplateDetailsConvertToPlainTextButton = '#convert_button';
    public static $emailTemplateDetailsPreviewTemplateButton    = '#preview';

    public function clickOnEmailTemplatesAddNewTemplateButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminAddButton);
        $I->waitForPageLoad();
    }

    public function clickOnEmailTemplateDetailsBackButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminBackButton);
        $I->waitForPageLoad();
    }

    public function clickOnEmailTemplateDetailsDeleteTemplateButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminDeleteButton);
        $I->waitForPageLoad();
    }

    public function clickOnEmailTemplateDetailsResetButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminResetButton);
        $I->waitForPageLoad();
    }

    public function clickOnEmailTemplateDetailsConvertToPlainTextButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$emailTemplateDetailsConvertToPlainTextButton);
        $I->waitForPageLoad();
    }

    public function clickOnEmailTemplateDetailsPreviewTemplateButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$emailTemplateDetailsPreviewTemplateButton);
        $I->waitForPageLoad();
    }

    public function clickOnEmailTemplateDetailsSaveTemplateButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminSaveButton);
        $I->waitForPageLoad();
    }
}