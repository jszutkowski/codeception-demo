<?php
class LoginCest 
{    
    public function _before(AcceptanceTester $I)
    {
        $I->amOnPage('/');
    }

    public function loginSuccessfully(AcceptanceTester $I)
    {
        $I->see('Welcome!');
    }
    
    public function loginWithInvalidPassword(AcceptanceTester $I)
    {
        // write a negative login test
    }       
}