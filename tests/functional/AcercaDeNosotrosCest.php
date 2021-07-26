<?php

class AcercaDeNosotrosCest
{
    public function _before(FunctionalTester $I)
    {
        $I->amOnPage(['site/acerca-empresa']);
    }

    // tests
    public function AbrirPagina(FunctionalTester $I)
    {
        $I->see("Misión");
        $I->see("Visión");
        $I->see("Objetivos");
    }
}
