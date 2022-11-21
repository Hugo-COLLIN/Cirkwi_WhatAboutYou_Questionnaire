<?php

/*
 * --- MAIN ---
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
}
catch (PasUnMoutonException $e)
{
    echo $e->getMessage();
}






