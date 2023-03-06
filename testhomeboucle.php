<?php
/*
Difficulté : 2*
Écrivez la routine afficherÉtoilesMultiligne(var nb_étoiles) qui reçoit en paramètre un entier positif,
 et affiche un triangle d'étoiles dont le nombre de lignes est identique à cette valeur.
Exemple : afficherÉtoilesMultilignes(3) =>
*
**
*** (modifié)
[09:21]
*/
/*
ROUTINE afficherEtoilesMultiligne(var nb_etoiles) : entier 
DEBUT
$i = 0;
TANT QUE $i allant jusqu'a 3 ALORS
Affiche "*"
FIN TANT QUE

return -1;
FIN
*//*
Difficulté : 1*
Écrivez la routine afficherÉtoiles( var bn_étoiles) qui reçoit en paramètre un entier positif
 et affiche à l'écran un nombre d'étoiles identiques à cette valeur.
Exemple : afficherÉtoiles(3) => *** */


function afficherEtoilesMultiligne($nb_etoiles) {
    $i = 1;
    while($nb_etoiles > 0) {
        afficherEtoiles($i);
        echo PHP_EOL;
        $i = $i + 1;
        $nb_etoiles = $nb_etoiles - 1;
    }
    return -1;
}


function afficherEtoiles($nb_etoiles) {
    while($nb_etoiles > 0) {
        echo "*";
        $nb_etoiles = $nb_etoiles -1;
        
    }
}





var_dump(afficherEtoilesMultiligne(5));