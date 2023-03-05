<?php

/*JOUEUR NE DOIT PAS DEPASSER 5 SINON IL A PERDU LA PARTIE*/
/*PLACEMENT JOUEUR


CN1 afficher game over si non compris entre 0 et 5
CN2 SI compris entre non et 1 afficher réussi*/

$deplacmentArrive = 106;
$joueur_coordonnées = 6;
$arrivée_coordonnées = 5;

if($joueur_coordonnées == $arrivée_coordonnées) {
    echo "Partie Réussi";
}
elseif($joueur_coordonnées >= 0 && $joueur_coordonnées < 5) {
    echo "partie en cours";
}
else{
    echo "game over, retry again";
}