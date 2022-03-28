<?php
//classe arm
class Arm {
    private $_nom;
    private $_force;
    private $_endurance;
    private $_prix;

    //Le constructeur
    public function __construct($nom) {
        $this->_nom = $nom;
        $this->_force = rand(1,50);
        $this->_endurance = rand(1,50);
        $this->_prix = rand(1,50);
        
    }

}
?>
     





