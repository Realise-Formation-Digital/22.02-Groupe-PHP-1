<?php
class monstre {
    private $_exp;
    private $_stamina;
    private $_strengh;
    private $_arme;
    private $_money;

    public function __construct($exp, $stamina, $strengh, $arme, $money) {
        // if ($exp) {
        //     $this->exp = $exp;
        // } else {
        //     $this->exp = rand(1, 50);
        // }

        $this->exp = $exp ? $exp : rand(1,50);
        $this->stamina = $stamina ? $stamina : rand(1,50);
        $this->strengh = $strengh ? $strengh : rand(1,50);
        $this->arme = $arme;
        $this->money = $sous;
    }
    public function fight(){
    }
}
