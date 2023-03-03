<?php 
/*
CN1 nbr1 plus petit que nbr 2 Et nbr1 plus petit que nbr3 ET nbr2 plus petit que nbr3
CN2 nbr1 plus grand que nbr 2
CN3 nbr1 == nbr2

*/

function renvoiPlusGrandNbre1($nb1, $nb2, $nb3) {
    if($nb1 < $nb3 && $nb2 < $nb3) {
        return $nb3;
    }
    if($nb1 < $nb2&& $nb2 > $nb3) {
        return $nb2;
    }
    if($nb1 > $nb2 && $nb1 > $nb3 ) {
        return $nb1;
    }
    return false;
}


var_dump(renvoiPlusGrandNbre1(10, 20, 30));
var_dump(renvoiPlusGrandNbre1(10, 35, 20));
var_dump(renvoiPlusGrandNbre1(40, 35, 20));

