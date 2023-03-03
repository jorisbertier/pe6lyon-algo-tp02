<?php
/*
Difficulté : 2*
Selon l’adage « les femmes et les enfants d’abord », la table de vérité de la variable
booléenne « survie au naufrage du Titanic » est donnée ci-dessous: 
|  survie | Enfant | Adulte |
|-------    | :------:| :-------|
| Homme | VRAI | FAUX |
| Femme  | VRAI | VRAI |

1. Écrire la fonction survivre(var sexe, var age) : booléen qui reçoit en paramètres le sexe et l'âge de la personne, et répond VRAI ou FAUX. Commencez par tester le sexe, puis l'âge pour les hommes et les femmes.
2. Refactoring : modifiez votre algorithme pour le simplifier. (modifié)
[09:17]



CN1 si homme enfant renvoyer VRAI
CN2 si homme adulte renvoyer Faux
CN3 si femme enfant renvoyer VRAI
CN4 si femme adulte renvoyer faux

CN1 SI age >= 18 renvoyer ADULTE SINON renvoyer ENFANT
*/





function survivre($sexe, $age)  {

if($sexe == "homme" && $age <= 18) {
    return true;
}
if($sexe == "homme" && $age >= 18) {
    return false;
}
if($sexe == "femme" && $age <= 18 ) {
    return true;
}
if($sexe == "femme" && $age >= 18 ) {
    return false;
}

return "non valide";
}

var_dump(survivre("homme", 18));
var_dump(survivre("femme", 17));s
var_dump(survivre("homme", 20));
var_dump(survivre("femme", 20));