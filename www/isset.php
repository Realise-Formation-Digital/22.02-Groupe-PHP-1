<?php
 include "jeu.php";
 
$game = null;

if (isset($_POST["start"])) {

    //$start = $_POST["start"];
    echo "ciao";
    // $exp = $_POST["experience"];
    $game = new Game();
}

if (isset($_POST["attaque"])) {
    echo "gogo";
    //$game->combat('attaquer');
}

if (isset($_POST["fuire"])) {
    echo "bye";
}



if (isset($_POST["hero-attaque"])) {
    /*
    $hero = $game->getHero();
    $hero->attaquer();
    */
    $game->getHero()->attaquer();
}

?>