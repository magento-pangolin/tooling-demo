<?php
namespace Magento\Xxyyzz\Page\Stores;

use Magento\Xxyyzz\Helper\AdminUrlList;
use Magento\Xxyyzz\Page\AbstractAdminPage;

class AdminProductAttributesPage extends AbstractAdminPage
{
    public function goToTheAdminProductAttributesGrid()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminProductAttributesGrid);
        $I->waitForPageLoad();
    }

    public function goToTheAdminProductAttributeForIdPage($productAttributeId)
    {
        $I = $this->acceptanceTester;
        $I->amOnPage((AdminUrlList::$adminProductAttributeForIdPage . $productAttributeId));
        $I->waitForPageLoad();
    }

    public function goToTheAdminAddProductAttributePage()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminAddProductAttributePage);
        $I->waitForPageLoad();
    }

    public function shouldBeOnTheAdminProductAttributesGrid()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminProductAttributesGrid);
        self::verifyGlobalAdminPageTitle('Product Attributes');
    }

    public function shouldBeOnTheAdminProductAttributeForIdPage($productAttributeId, $productAttributeDefaultLabel)
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl((AdminUrlList::$adminProductAttributeForIdPage . $productAttributeId));
        self::verifyGlobalAdminPageTitle($productAttributeDefaultLabel);
    }

    public function shouldBeOnTheAdminAddProductAttributePage()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminAddProductAttributePage);
        self::verifyGlobalAdminPageTitle('New Product Attribute');
    }
    
    public static $productAttributesSaveAndContinueEditButton = '#save_and_edit_button';

    public function clickOnProductAttributesAddNewAttributeButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminAddButton);
        $I->waitForPageLoad();
    }

    public function clickOnProductAttributesBackButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminBackButton);
        $I->waitForPageLoad();
    }

    public function clickOnProductAttributesDeleteAttributeButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminDeleteButton);
        $I->waitForPageLoad();
    }

    public function clickOnProductAttributesResetButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminResetButton);
        $I->waitForPageLoad();
    }

    public function clickOnProductAttributesSaveAndContinueEditButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$productAttributesSaveAndContinueEditButton);
        $I->waitForPageLoad();
    }

    public function clickOnProductAttributesSaveAttributeButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminSaveButton);
        $I->waitForPageLoad();
    }
}