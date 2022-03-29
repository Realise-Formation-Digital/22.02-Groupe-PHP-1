<?php
class Marchant {
    private $_exp;
    private $_arme;

    public function __construct($exp, $arme){
        $this->exp = $exp ? $exp : rand(1,50);
        $this->arme = $arme;

        // public function vendre(){

        // }

    }
}