<?php

/**
 * Inherited Methods
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method \Codeception\Lib\Friend haveFriend($name, $actorClass = NULL)
 *
 * @SuppressWarnings(PHPMD)
*/
class AcceptanceTester extends \Codeception\Actor
{
    use _generated\AcceptanceTesterActions;

    public static $loadingMask = '.loading-mask';

    public function waitAjaxLoad($timeout = 30)
    {
        $this->waitForJS('return !!window.jQuery && window.jQuery.active == 0;', $timeout);
        $this->wait(1);
    }

    public function waitForLoadingMaskToDisappear()
    {
        $this->waitForElementNotVisible(self::$loadingMask, 30);
    }

   public function waitForPageLoad($timeout = 30)
   {
       $this->waitForJS('return document.readyState == "complete"', $timeout);
       $this->waitAjaxLoad($timeout);
       $this->waitForLoadingMaskToDisappear();
   }
}
