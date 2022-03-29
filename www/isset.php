<?php
 include "jeu.php";
 
$game = null;

if (isset($_POST["start"])) {

    //$start = $_POST["start"];

    // $exp = $_POST["experience"];
    $game = new Game();
}

if (isset($_POST["attaque"])) {
    // combat($monstre, $arme); //fonction combat du héro
    // fight(); //fonction fight monstre
    //combat($mode); //fonction combat jeu
        echo "La violence c'est pour les null";
}

if (isset($_POST["fuire"])) {
    echo "\"Un combat évité est un combat gagné\" Bruce LEE";
}



if (isset($_POST["hero-attaque"])) {
    /*
    $hero = $game->getHero();
    $hero->attaquer();
    */
    $game->getHero()->attaquer();
}

?>