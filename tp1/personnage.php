<?php

class Personnage
{
    private $_id , $_degats, $_nom;

    const cest_moi = 1;
    const personnage_tue = 2;
    const personnage_frappe = 3;

    public function __construct( array $donnes)
    {
        $this -> hydrate ( $donnes );
    }

    public function frapper(Personnage $perso)
    {
        if ($perso -> id() == $this -> id)
        {
            return self::cest_moi;
        }
        return $perso -> recevoirDegats;
    }

    public function hydrate(array $donnes)
    {
        foreach ( $donnes as $key => $value)
        {
            $method = 'set'.ucfirst($key);

            if ( method_exists($this , $method))
            {
                $this -> $method( $value );
            }
        }
    }

    public function recevoirDegats()
    {
        $this -> _degats += 5;

        if ( $this -> _degats >= 100)
        {
            return self::personnage_tue;
        }
        return selt::personnage_frappe;
    }

    /**
     * methode getters, aka valeur
    */
    public function id()
    {
        return $this -> _id;
    }

    public function degats()
    {
        return $this -> _degats;
    }

    public function nom()
    {
        return $this -> _nom;
    }

    /**
     * methode setters, imodifier na anome valeur
    */
    public function setId($id)
    {
        $id = (int) $id;

        if ( $id > 0 )
        {
            $this -> _id = $id;
        }
    }

    public function setDegats( $degats )
    {
        $degats = (int) $degats;

        if ($degats >= 0 && $degats <= 100)
        {
            $this -> _degats = $degats;
        }
    }

    public function setNom ( $nom )
    {
        if (is_string($nom))
        {
            $this -> _nom = $nom;
        }
    }

    

    
}
?>