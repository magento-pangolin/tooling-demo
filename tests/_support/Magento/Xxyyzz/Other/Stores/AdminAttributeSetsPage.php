<?php
namespace Magento\Xxyyzz\Page;

use Magento\Xxyyzz\Helper\AdminUrlList;

class AdminAttributeSetsPage extends AbstractAdminPage
{
    public function goToTheAdminAttributeSetGrid()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminAttributeSetsGrid);
        $I->waitForPageLoad();
    }

    public function goToTheAdminAttributeSetByIdPage($attributeSetId)
    {
        $I = $this->acceptanceTester;
        $I->amOnPage((AdminUrlList::$adminAttributeSetByIdPage . $attributeSetId));
        $I->waitForPageLoad();
    }

    public function goToTheAdminAddAttributeSetPage()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminAddAttributeSetPage);
        $I->waitForPageLoad();
    }

    public function shouldBeOnTheAdminAttributeSetsGrid()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminAttributeSetsGrid);
        self::verifyGlobalAdminPageTitle('Attribute Sets');
    }

    public function shouldBeOnTheAdminAttributeSetByIdPage($attributeSetId, $attributeSetName)
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl((AdminUrlList::$adminAttributeSetByIdPage . $attributeSetId));
        self::verifyGlobalAdminPageTitle($attributeSetName);
    }

    public function shouldBeOnTheAdminAddAttributeSetPage()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminAddAttributeSetPage);
        self::verifyGlobalAdminPageTitle('New Attribute Set');
    }

    public static $attributeSetsAddAttributeSetButton = '.add'; // The Currency Rates page uses classes instead of IDs.
    public static $attributeSetsBackButton            = '.back';
    public static $attributeSetsDeleteButton          = '.delete';
    public static $attributeSetsResetButton           = '.reset';
    public static $attributeSetsSaveButton            = '.save';

    public function clickOnAttributeSetsAddAttributeSetButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$attributeSetsAddAttributeSetButton);
        $I->waitForPageLoad();
    }

    public function clickOnAttributeSetsBackButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$attributeSetsBackButton);
        $I->waitForPageLoad();
    }

    public function clickOnAttributeSetsDeleteButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$attributeSetsDeleteButton);
        $I->waitForPageLoad();
    }

    public function clickOnAttributeSetsResetButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$attributeSetsResetButton);
        $I->waitForPageLoad();
    }

    public function clickOnAttributeSetsSaveButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$attributeSetsSaveButton);
        $I->waitForPageLoad();
    }
}