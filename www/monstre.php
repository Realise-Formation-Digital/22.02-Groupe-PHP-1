<?php
    // include "arme.php";
class Monstre {
    //proprieté 
    private $_exp;
    private $_endurance;//stamina
    private $_force;//strenght;
    private $_arme;
    private $_sous;//money;

    //constructor
    
    public function __construct($hero) {
        // if ($_exp) {
        //     $this->_exp = $_exp;
        // } else {
        //     $this->_exp = rand(1, 50);
        // }
        $armes = [new Arme("katana"), new Arme("arrow"), new Arme("lancepierre")];
        $exp = $hero->getExp() + (rand(1,50) - 5);
        $this->_exp = $exp > 0 ? $exp : rand(1,10);
        $this->_endurance = rand(1,50);
        $this->_force = rand(1,50);
        $this->_arme = $armes[rand(0,2)];
        $this->_sous = rand(1,50);
    }

    function getSous (){
        return $this->_sous;
    }

    function getArme (){
        return $this->_arme;
        // echo"cacacacac";

    }

    function getForce (){
        return $this->_force;
    }

    function getEndurance (){
        return $this->_endurance;
    }

    function getExp (){
        return $this->_exp;
    }
    //fight function 
    function fight(){ 
        if($this->endurance > $hero->force) {
            $gagner = $_monstre > $_hero;
        
        }
        elseif($this->endurance < $hero->force){
            $gagner = $_monstre < $_hero;
        }
        else {
         echo "match nul";
        }
    }
    
}
 function test(){
     echo "une chaine de characete";
 }
//$_monstre = new Monstre((rand(1,50) - 5), rand(1,50), rand(1,50), 1, rand(1,50));

// class Hero {
//     private $_exp = 10;

//     public function getExp() {
//         // return $this->_exp;
//     }
