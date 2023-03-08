<?php

/*Écrivez la routine afficherÉtoiles( var bn_étoiles) qui reçoit en paramètre un entier positif
 et affiche à l'écran un nombre d'étoiles identiques à cette valeur.
Exemple : afficherÉtoiles(3) => *** */

/*TANT QUE 1 est incrementer de 1 mettre 1 etoiles*/


/*
Écrivez la routine afficherÉtoilesMultiligne(var nb_étoiles)
qui reçoit en paramètre un entier positif, et affiche un triangle d'étoiles dont le nombre de lignes est identique à cette valeur.
Exemple : afficherÉtoilesMultilignes(3) =>
*
**
*** (modifié)
[09:21]

*/

function afficherEtoilesMultiple($nb_etoiles) {
    $i = 1;
    while($nb_etoiles > 0 ) {
        afficherEtoiles($i);
        echo PHP_EOL;
        $i = $i + 1;
        $nb_etoiles = $nb_etoiles - 1;
        
    
    }
}

var_dump(afficherEtoilesMultiple(4));

/*
 PROCÉDURE afficherÉtoiles( var nb_étoiles) DÉBUT
TANT QUE nb_étoiles > 0 FAIRE
    Afficher '*'
    nb_étoiles <- nb_étoiles - 1
FIN TANTQUE

afficherEtoiles
*/

function afficherEtoiles($nb_etoiles) {
    while($nb_etoiles > 0) {
        echo "*";
        $nb_etoiles = $nb_etoiles -1;
    }
}




/*
Écrivez la routine afficherÉtoilesMultilignesRTL( var nb_étoiles).
Elle est identique à la précédente, à l'exception que la pointe haute du triangle doit être alignée à droite
Exemple : afficherÉtoilesMultilignesRTL(3) => */