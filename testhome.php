<?php
//EXERCICE 1
/*JOUEUR NE DOIT PAS DEPASSER 5 SINON IL A PERDU LA PARTIE*/
/*PLACEMENT JOUEUR


CN1 afficher game over si non compris entre 0 et 5
CN2 SI compris entre non et 1 afficher réussi*/

// $deplacmentArrive = 106;
// $joueur_coordonnées = 6;
// $arrivée_coordonnées = 5;
// 
// if($joueur_coordonnées == $arrivée_coordonnées) {
    // echo "Partie Réussi";
// }
// elseif($joueur_coordonnées >= 0 && $joueur_coordonnées < 5) {
    // echo "partie en cours";
// }
// else{
    // echo "game over, retry again";
// }

/*Algorithme déplacement(position_x , position_y)
Variable
    sens ← “” : CHAÎNE DE CARACTÈRES
Début
Fin
entrer = 0;*/

//EXERCICE2
/*CN1 Avancer à gauche enlève -1 à x
CN2 Avancer à Droite ajoute +1 à x
CN3 Avancer en Haut ajoute +1 à y
CN4 Avancer en Bas enlève -1 à y
*/
/*
$sensDeplacement = "Droite";
$position_x = 0;
$position_y = 0;


if($sensDeplacement == "Gauche" || $sensDeplacement == "Droite" || $sensDeplacement == "Haut" || $sensDeplacement == "Bas" ) {
    if($sensDeplacement == "Gauche") {
    $position_x -= 1;
    }
    if($sensDeplacement == "Droite") {
    $position_x += 1;
    }
    if($sensDeplacement == "Haut") {
    $position_y += 1;
    }
    if($sensDeplacement == "Bas") {
    $position_y -= 1;
    }
}
else {
    echo "erreur de déplacement";
}


var_dump($position_y);
var_dump($position_x);*/
