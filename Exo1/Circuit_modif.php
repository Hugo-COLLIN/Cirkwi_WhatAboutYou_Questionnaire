<?php

/**
 * @param array $moutons
 */
function moyenneMoutons(array $moutons)
{
    $sumValMoutons = 0;
    foreach ($moutons as $mouton)
        $sumValMoutons += $mouton[1];

    $nbMoutons = sizeof($moutons);
    $moyValMoutons = $sumValMoutons / $nbMoutons;
    echo "Moyenne de la valeur de mes " . $nbMoutons . " moutons : " . $moyValMoutons;
}

// Un tableau de moutons
$moutons = [['Danny', 75], ['Richard', 60]];

// J'ajoute un mouton
$moutons[] = ['Gérard', 120];

// Je calcule la moyenne de la valeur de mes moutons
moyenneMoutons($moutons);

// Ajout de 100 moutons aléatoires
for ($j = 0; $j < 100; $j++) {
    $randNameMouton = "";
    $nbCharsNameMouton = rand(3, 15);
    $chaine = "abcdefghijklmnpqrstuvwxyABCDEFGHIJKLMNOPQRSUTVWXYZ";
    $nbChars = strlen($chaine);
    $randValMoutons = rand(10, 200);
    for ($k = 0; $k < $nbCharsNameMouton; $k++) {
        $randNameMouton .= $chaine[rand(0, ($nbChars - 1))];
    }
    $moutons[] = [$randNameMouton, $randValMoutons];
}
echo PHP_EOL;
// Je calcule à nouveau la moyenne
moyenneMoutons($moutons);