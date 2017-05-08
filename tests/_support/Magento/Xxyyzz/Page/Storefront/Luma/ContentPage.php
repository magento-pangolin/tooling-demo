<?php
namespace Magento\Xxyyzz\Page\Storefront\Luma;

use Magento\Xxyyzz\Page\AbstractFrontendPage;

class ContentPage extends AbstractFrontendPage
{
    /**
     * Declare UI map for this page here. CSS or XPath allowed.
     */
    public static $pageTitleWrapper = '.page-title-wrapper';
    public static $pageMainContent  = '.main';

    public function verifyContentPageTitle($pageContentTitle)
    {
        $I = $this->acceptanceTester;
        $I->see($pageContentTitle, self::$pageTitleWrapper);
    }

    public function verifyContentPageBody($pageContentBody)
    {
        $I = $this->acceptanceTester;
        $I->see($pageContentBody, self::$pageMainContent);
    }
}