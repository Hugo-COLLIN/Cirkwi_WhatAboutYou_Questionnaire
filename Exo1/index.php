<?php

require_once "Mouton.php";
require_once "ListeMoutons.php";

/**
 * --- MAIN ---
 * @author Hugo COLLIN
 */

try {
    // Un tableau de moutons
    $moutons = new ListeMoutons([new Mouton('Danny', 75), new Mouton('Richard', 60)]);

    // J'ajoute un mouton
    $moutons->ajouterMouton(new Mouton('Gérard', 120));

    // Je calcule la moyenne de la valeur de mes moutons
    echo "Moyenne de la valeur de mes {$moutons->nbMoutons()} moutons : {$moutons->calculerMoyenne()} <br>";

    // Ajout de 100 moutons aléatoires
    $moutons->ajouterMoutonsAlea(100);

    // Je calcule à nouveau la moyenne
    echo "Moyenne de la valeur de mes {$moutons->nbMoutons()} moutons : {$moutons->calculerMoyenne()} <br>";

    // Affichage d'un mouton généré aléatoirement (nom et valeur - pour tester)
    //$m2 = new Mouton(Mouton::randName(), Mouton::randVal());
    //echo $m2->getNom() . " : " . $m2->getValeur();
}
catch (PasUnMoutonException $e)
{
    echo $e->getMessage();
}






