<?php

// Un tableau de moutons
$moutons = [['Danny', 75], ['Richard', 60]];

// J'ajoute un mouton
$moutons[] = ['Gérard', 120];

// Je calcule la moyenne de la valeur de mes moutons
$i = 0;
$nbMoutons = 0;
$sumValMoutons = 0;
foreach ($moutons as $mouton) {
    $sumValMoutons = $sumValMoutons + $mouton[1];
    $nbMoutons++;
    $i++;
}
$moyValMoutons = $sumValMoutons / $i;
echo "Moyenne de la valeur de mes " . count($moutons) . " moutons : " . $sumValMoutons / $i;

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
    array_push($moutons, [$randNameMouton, $randValMoutons]);
}
echo PHP_EOL;
// Je calcule à nouveau la moyenne
$i = 0;
$nbMoutons = 0;
$sumValMoutons = 0;
foreach ($moutons as $mouton) {
    $sumValMoutons = $sumValMoutons + $mouton[1];
    $nbMoutons++;
    $i++;
}
$moyValMoutons = $sumValMoutons / $i;
echo "Moyenne de la valeur de mes " . count($moutons) . " moutons : " . $sumValMoutons / $i;