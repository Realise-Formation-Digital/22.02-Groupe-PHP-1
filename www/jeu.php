<?php
class Game{
    private $_hero;
    private $_monstre;
    private $_marchant;
    private $_arme;

    public function __construct() {
        $this->_game = new Game(); 
        $this->_hero = new Hero();
        $this->_monstre = new Monstre();
        $this->_arme = new Arme();
        $this->_marchant = new Marchant();
    }
    public function combat($_hero,$_monstre) {

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
}

?>

