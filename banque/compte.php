<?php
    require 'cbancaire.php';
    require 'cepargne.php';

    $_rn_compteJean = new CompteBancaire("euros", 150, "Jean");
    echo $_rn_compteJean . '<br />';
    $_rn_compteJean->crediter(100);
    echo $_rn_compteJean . '<br />';

    $_rn_comptePaul = new CompteEpargne("dollars", 200, "Paul", 0.05);
    echo $_rn_comptePaul . '<br />';
    echo 'Interets pour ce compte : ' . $_rn_comptePaul->calculerInterets() . 
        ' ' . $_rn_comptePaul->getDevise() . '<br />';
    $_rn_comptePaul->calculerInterets(true);
    echo $_rn_comptePaul . '<br />';
?>