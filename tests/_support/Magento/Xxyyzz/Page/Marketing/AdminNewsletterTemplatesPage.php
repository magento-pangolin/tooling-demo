<?php
namespace Magento\Xxyyzz\Page;

use Magento\Xxyyzz\Helper\AdminUrlList;

class AdminNewsletterTemplatesPage extends AbstractAdminPage
{
    public function goToTheAdminNewsletterTemplateGrid()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminNewsletterTemplateGrid);
        $I->waitForPageLoad();
    }

    public function goToTheAdminNewsletterTemplateByIdPage($newsletterTemplateId)
    {
        $I = $this->acceptanceTester;
        $I->amOnPage((AdminUrlList::$adminNewsletterTemplateForIdPage . $newsletterTemplateId));
        $I->waitForPageLoad();
    }

    public function goToTheAdminAddNewsletterTemplatePage()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminAddNewsletterTemplatePage);
        $I->waitForPageLoad();
    }

    public function shouldBeOnTheAdminNewsletterTemplateGrid()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminNewsletterTemplateGrid);
        self::verifyGlobalAdminPageTitle('Newsletter Templates');
    }

    public function shouldBeOnTheAdminNewsletterTemplateByIdPage($newsletterTemplateId, $templateName)
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl((AdminUrlList::$adminNewsletterTemplateForIdPage . $newsletterTemplateId));
        self::verifyGlobalAdminPageTitle($templateName);
    }

    public function shouldBeOnTheAdminAddNewsletterTemplatePage()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminAddNewsletterTemplatePage);
        self::verifyGlobalAdminPageTitle('New Template');
    }

    public static $newsletterTemplatesAddNewTemplateButton           = '.add-template'; // The Newsletter Template page uses classes instead of IDs.
    public static $newsletterTemplateDetailsBackButton               = '.action-back';
    public static $newsletterTemplateDetailsDeleteTemplateButton     = '.delete';
    public static $newsletterTemplateDetailsResetButton              = '.reset';
    public static $newsletterTemplateDetailsConvertToPlainTextButton = '.convert';
    public static $newsletterTemplateDetailsPreviewTemplateButton    = '.preview';
    public static $newsletterTemplateDetailsSaveAsButton             = '.save-as';
    public static $newsletterTemplateDetailsSaveTemplateButton       = '.save';

    public function clickOnNewsletterTemplatesAddNewTemplateButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$newsletterTemplatesAddNewTemplateButton);
        $I->waitForPageLoad();
    }

    public function clickOnNewsletterTemplateDetailsBackButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$newsletterTemplateDetailsBackButton);
        $I->waitForPageLoad();
    }

    public function clickOnNewsletterTemplateDetailsDeleteTemplateButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$newsletterTemplateDetailsDeleteTemplateButton);
        $I->waitForPageLoad();
    }

    public function clickOnNewsletterTemplateDetailsResetButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$newsletterTemplateDetailsResetButton);
        $I->waitForPageLoad();
    }

    public function clickOnNewsletterTemplateDetailsConvertToPlainTextButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$newsletterTemplateDetailsConvertToPlainTextButton);
        $I->waitForPageLoad();
    }

    public function clickOnNewsletterTemplateDetailsPreviewTemplateButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$newsletterTemplateDetailsPreviewTemplateButton);
        $I->waitForPageLoad();
    }

    public function clickOnNewsletterTemplateDetailsSaveAsButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$newsletterTemplateDetailsSaveAsButton);
        $I->waitForPageLoad();
    }

    public function clickOnNewsletterTemplateDetailsSaveTemplateButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$newsletterTemplateDetailsSaveTemplateButton);
        $I->waitForPageLoad();
    }
}