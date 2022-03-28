<?php
class Game{
    private $_hero;
    private $_monstre;
    private $_marchant;

    public function __construct() {
        $game = new Game(); 
        $this->_hero = new Hero();
    }

    public function getHero() {
        return $this->_hero;
    }
}

?>

