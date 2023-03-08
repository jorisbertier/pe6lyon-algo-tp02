
<?php
/*DÉBUT*/
    /* Tous les CN */
    /*Déclarer compteur ← 0
    TANT QUE compteur < taille(tab) FAIRE
        SI tab[compteur] = value ALORS
            Renvoyer compteur
        FINSI
        compteur ← compteur + 1
    FIN TANT QUE*/

    /* Tous les CE */
   /* Renvoyer FAUX
FIN*/
/*
Votre collègue vous donne la signature suivante :
FONCTION valeurMilieu(var tab) : entier|FAUX
tab est un tableau de 3 nombres entiers. La fonction doit renvoyer la valeur qui
n’est ni le minimum, ni le maximum.
 [0 , 1, 2] => 1
 La fonction doit renvoyer false si le tableau contient moins de 3 éléments.
 Si le tableau contient plus de 3 éléments, la fonction ne traite que les 3
premiers (les éléments suivants doivent être ignorés)

CE1 renvoyer FALSE si valeur pas dans le tableau
CN1 renvoyer la 1er valeur du tableau
CN2 renvoyer false si le tableau <= 3
CN3
CE2

valeurMilieu([100, 140, 230, 421],)



FONCTION findValueInTab(var tab, var value)
*/


findValueInTab([217, 191, 314, 742], 742);

function findValueInTab($tab, $value) {
    $i = 0;
    while($i < count($tab)) {
        if($tab[$i] == $value) {
            return $i;
        }
        $i = $i +1; 
}
return false;
}

function testFindValueInTab_CE1() {
    if ( findValueInTab([], 1) === false) {
    echo "test testFindValueInTab_CE1  réussi !";
    } else {
    echo "test testFindValueInTab_CE1  échoué !" ;
    }
}
testFindValueInTab_CE1();
echo PHP_EOL;



/*function findValueInTab( $tab, $value) 
{
    if (count($tab) === 0) {
        return false;
    }
    $n = 0;*/
    /* n est le rang de la valeur dans le tableau*/
   /* while ($n < count($tab)) {
        if ($tab[$n] == $value) {
            return $n;
        }
        $n=$n+1;
    }

    return false;
}*/