<?php
    class Personnage
    {
        private $_force = 50;
        private $_experience = 1;
        private $_degats = 0;

        public function test()
        {
            echo "Je suis une personne";
        }

        public function afficherExperience()
        {
            echo $this -> _experience;
        }

        public function frapper( Personnage $_persoFrapper)
        {
            $_persoFrapper ->_degats += $this->_force;
        }

        public function gagnerExperience()
        { 
           $this -> _experience++;
        }

        public function setForce($_force)
        {

            /**
             * S'il ne s'agit pas d'un nombre entier.
            */
            if (!is_int($_force))
            {
            trigger_error('La force d\'un personnage doit être un nombre entier', E_USER_WARNING);
            return;
            }

            /**
             * On vérifie bien qu'on ne souhaite pas assigner une valeur supérieure à 100.
            */
            if ($_force > 100) 
            {
            trigger_error('La force d\'un personnage ne peut dépasser 100', E_USER_WARNING);
            return;
            }
            
            $this ->_force = $_force;
        }
    
        /**
         * Mutateur chargé de modifier l'attribut $_experience.
        */
        public function setExperience($_experience)
        {
            if (!is_int($_experience))
            {
            trigger_error('L\'expérience d\'un personnage doit être un nombre entier', E_USER_WARNING);
            return;
            }
            $this -> _experience = $_experience;
        }

        public function force()
        {
            return $this -> _force;
        }

        public function experience()
        {
            return $this -> _experience;
        }

        public function degats()
        {
            return $this -> _degats;
        }
    
    }
   
    /**
     * test d'appeler la classe Personnage
     */
    $perso = new Personnage;
    $perso -> test();

    /**
     * premier et second personnage qui ulilise la classe Personnage
    */
    $perso1 = new Personnage; 
    $perso2 = new Personnage;

    $perso1->setForce(10);
    $perso1->setExperience(2);

    $perso2->setForce(90);
    $perso2->setExperience(58);

    /**
     * $perso1 frappe $perso2
     *  $perso1 gagne de l'expérience
    */
    $perso1->frapper($perso2);  
    $perso1->gagnerExperience(); 

    /**
     * $perso2 frappe $perso1
     *  $perso2 gagne de l'expérience
    */
    $perso2->frapper($perso1); 
    $perso2->gagnerExperience(); 

    echo 'Le personnage 1 a ', $perso1->force(), ' de force, contrairement au personnage 2 qui a ',
        $perso2->force(), ' de force.<br />';
    echo 'Le personnage 1 a ', $perso1->experience(), ' d\'expérience, contrairement au personnage 2 
        qui a ', $perso2->experience(), ' d\'expérience.<br />';
    echo 'Le personnage 1 a ', $perso1->degats(), ' de dégâts, contrairement au personnage 2 qui a ',
        $perso2->degats(), ' de dégâts.<br />';
    
?>