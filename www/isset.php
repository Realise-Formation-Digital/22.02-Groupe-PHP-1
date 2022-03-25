<?php

$game = null;

if (isset($_POST["start"])) {

    //$start = $_POST["start"];
    echo "ciao";
    $exp = $_POST["experience"];
    //$game = new Game();
}

if (isset($_POST["hero-attaque"])) {
    /*
    $hero = $game->getHero();
    $hero->attaquer();
    */
    $game->getHero()->attaquer();
}

?>