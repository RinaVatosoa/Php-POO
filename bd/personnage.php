<?php
    class Personnage
    {
    private $_id;
    private $_nom;
    private $_forcePerso;
    private $_degats;
    private $_niveau;
    private $_experience;


    /**
     *  Un tableau de données doit être passé
     *  à la fonction (d'où le préfixe « array »).
    */
    public function hydrate ( array $donnees )
    {
        $donnees = [
            'id' => 16,
            'nom' => 'Vyk12',
            'forcePerso' => 5,
            'degats' => 55,
            'niveau' => 4,
            'experience' => 20
          ];

        foreach ( $donnees as $key => $value)
        {
            $method = 'set'.ucfirst( $key );

            if ( method_exists ( $this, $method))
            {
                $this ->$method( $value );
            }
        }
        if ( isset($donnees['id']))
        {
            $this ->setId($donnees['id']);
        }

        if ( isset($donnees['nom']))
        {
            $this ->setNom($donnees['nom']);
        }

        if ( isset($donnees['forcePerso']))
        {
            $this ->setForcePerso($donnees['forcePerso']);
        }

        if ( isset($donnees['degats']))
        {
            $this ->setDegats($donnees['degats']);
        }

        if ( isset($donnees['niveau']))
        {
            $this ->setNiveau($donnees['niveau']);
        }

        if ( isset($donnees['experience']))
        {
            $this ->setExperience($donnees['experience']);
        }
    }

    /**
     * methode getters
    */
    public function id()
    {
        return $this ->_id;
    }

    public function nom()
    {
        return $this ->_nom;
    }

    public function forcePerso()
    {
        return $this ->_forcePerso;
    }

    public function degats()
    {
        return $this ->_degats;
    }

    public function niveau()
    {
        return $this ->_niveau;
    }

    public function experience()
    {
        return $this ->_experience;
    }

    /**
     * methode setters
    */
    public function setId( $id )
    {
        $id = (int) $id;
        if ( $id >0 )
        {
            $this ->_id = $id;
        }
    }

    public function setNom ( $nom )
    {
        if (isString( $nom))
        {
            $this ->_nom = $nom;
        }
    }

    public function setForcePerso( $forcePerso )
    {
        $forcePerso = (int) $forcePerso;
        if ( $forcePerso >= 1 && $forcePerso <= 100)
        {
            $this ->_forceperso = $forcePerso;
        }
    }

    public function setDegats( $degats )
    {
        $degats = (int) $degats;
        if ( $degats >= 0 && $forcePerso <= 100)
        {
            $this ->_degats = $degats;
        }
    }

    public function setNiveau( $niveau )
    {
        $niveau = (int) $niveau;
        if ( $degats >= 1 && $degats <= 100)
        {
            $this ->_niveau = $niveau;
        }
    }

    public function setExperience( $experience )
    {
        $experience = (int) $_experience;
        if ( $experience >= 0 && $experience <= 100)
        {
            $this ->_experience = $experience;
        }
    }
}
class A
{
  public function hello()
  {
    echo 'Hello world !';
  }
}

$a = new A;
$method = 'hello';

$a->$method(); // Affiche : « Hello world ! »
?>