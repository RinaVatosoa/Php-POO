<?php

class CompteBancaire
{
    private $_rn_devise;
    private $_rn_solde;
    private $_rn_titulaire;

    public function __construct($_rn_devise, $_rn_solde, $_rn_titulaire)
    {
        $this->_rn_devise = $_rn_devise;
        $this->_rn_solde = $_rn_solde;
        $this->_rn_titulaire = $_rn_titulaire;
    }

    public function getDevise()
    {
        return $this->_rn_devise;
    }

    public function getSolde()
    {
        return $this->_rn_solde;
    }

    protected function setSolde($_rn_solde)
    {
        $this->_rn_solde = $_rn_solde;
    }

    public function getTitulaire()
    {
        return $this->_rn_titulaire;
    }

    public function crediter($_rn_montant) {
        $this->_rn_solde += $_rn_montant;
    }

    public function __toString()
    {
        return "Le solde du compte de $this->_rn_titulaire est de " .
            $this->_rn_solde . " " . $this->_rn_devise;
    }
}
?>