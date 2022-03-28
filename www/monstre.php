<?php
class monstre {
    //proprieté 
    private $_exp;
    private $_stamina;
    private $_strenght;
    private $_arme;
    private $_money;

    //constructor
    public function __construct($exp, $arme = null, $stamina = null, $strenght = null) {
        // if ($exp) {
        //     $this->exp = $exp;
        // } else {
        //     $this->exp = rand(1, 50);
        // }

        $this->getExp = $exp + (rand(1,50) - 5);
        $this->getStamina = $stamina ? $stamina : rand(1,50);
        $this->getStrenght = $strenght ? $strenght : rand(1,50);
        // $this->arme = $arme;
        $this->money = rand(1,50);

  
    }
    //fight function 
    public function fight(){ 
        if($this->exp > $hero->exp){
            $jeu = $mostre > $hero;
        }
        elseif($this->exp < $hero->exp){
            $jeu = $monstre < $hero;}
        else
         echo "match nul";
        }
    
}
    
echo"ciao lamine";
new Monstre();

