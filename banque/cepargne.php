<?php

require_once 'cbancaire.php';

class CompteEpargne extends CompteBancaire
{
    private $_rn_tauxInteret;

    public function __construct($_rn_devise, $_rn_solde, $_rn_titulaire, $_rn_tauxInteret)
    {
        parent::__construct($_rn_devise, $_rn_solde, $_rn_titulaire);
        $this->_rn_tauxInteret = $_rn_tauxInteret;
    }

    public function getTauxInteret()
    {
        return $this->_rn_tauxInteret;
    }

    public function calculerInterets($_rn_ajouterAuSolde = false)
    {
        $_rn_interets = $this->getSolde() * $this->_rn_tauxInteret;
        if ($_rn_ajouterAuSolde == true)
            $this->setSolde($this->getSolde() + $_rn_interets);
        return $_rn_interets;
    }

    public function __toString()
    {
        return parent::__toString() . 
            '. Son taux d\'interet est de ' . $this->_rn_tauxInteret * 100 . '%.';
    }
}
?>