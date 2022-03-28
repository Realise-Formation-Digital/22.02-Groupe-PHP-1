<?php
    /*include "hero.php";
      include "marchant.php";
      include "monstre.php";
    */
class Game{
    private $_hero;
    private $_monstre;
    private $_marchant;
    private $_arme;

    public function __construct() {
        $this->_hero = new Hero();
        $this->_monstre = new Monstre();
        $this->_arme = new Arme();
        $this->_marchant = new Marchant();
    }

    public function getHero() {
        return $this->_hero;
    }

    public function getMonstre() {
        return $this->_monstre;
    }

    public function getMarchant() {
        return $this->_marchant;
    }

    public function getArme() {
        return $this->_arme;
    }
 //Calcule des points
 //Gagner
    public function combat($mode) {
        if ($mode = 'attaquer') {
            $gagner = $this->_hero->attaque($this->_monster);
        }if ($gagner) {
                $this->_monstre = new Monstre();
            } else {
                $this->_monstre = new Monstre();
            }
        }
//Perdue        
    public function fuire($mode){
           if ($mode = 'fuire'){
            $perdue = $this->_hero->fuire($this->_monstre);
            }
            if ($perdue){
            $this->_monstre = new Monstre();
            }
        }
    }
?>

