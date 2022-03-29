<?php
class Personnage {
    /*
     * Attributs
     */
    private $_experience;           // La force du personnage
    private $_endurance;    // Son endurance
    private $_vie;      // Ses points de vies
    private $_force;          // Ses dégâts
    private $_sous;       // son argent
    private $_arme;       //son arme
    /*
     * Méthode de construction
     */
    public function __construct($force, $vie, $endurance, $sous) {
        //echo 'Voici le constructeur !';       // Message de test
        $this->_force = 1;       // Initialisation de la force
        $this->_experience = 0;                 // Intialisation de l'expérience à 1
        $this->_vie = 10;                   //vie commence à 10pts(à voir si ça commence vraiment à 10)
        $this->_endurance = 1;                   //endurance commence à 1pts
    }

    /*
     * Méthode de combat
     */
    public function __combat($monstre, $vie, $arme){
            if ($this->force > $monstre->force){
                //Gagne 1 expérience + une arme
                $this->experience++; 
            } else { $this->arme++;
                //Héro perd 1 PV
            if  $monstre->force > $this->force) {
                $this<-$vie--;
            }
            //Tester si le héros a tjs des PV ou arrêter le combat par un game over et retourner une valeur "Game Over", "Fin", "False", 0

            //Si le héors à tjs des PV passer au combat suivant et retourner un valeur p.ex. : "Victoire", "Vrai", "Gagné", 1               
    }

    public function getarme() {
            if ($this->hero
            }
    }

    // Methode de gestion de l'expérience du personnage
    public function gagnerExperience() {
        $this->_experience ++;  // Incrémente l'expérience
    }
    
  