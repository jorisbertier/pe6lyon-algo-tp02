<?php 
/*
CN1 nbr1 plus petit que nbr 2 Et nbr1 plus petit que nbr3 ET nbr2 plus petit que nbr3
CN2 nbr1 plus grand que nbr 2
CN3 nbr1 == nbr2

*/

function renvoiPlusGrandNbre($nb1, $nb2, $nb3, $nb4) {

    if($nb1 > $nb2 && $nb1 > $nb3 && $nb1 > $nb4){
        return $nb1;
    }
   if($nb2 > $nb1 && $nb2 > $nb3 && $nb2 > $nb4) {
    return $nb2;
   }
   if($nb1 < $nb3 && $nb2 < $nb3 && $nb4 < $nb3) {
    return $nb3;
    }
   if($nb4 > $nb1 && $nb4 > $nb2 && $nb4 > $nb3) {
    return $nb4;
   }
   return false;
}


var_dump(renvoiPlusGrandNbre(15, 11, 14, 12));
var_dump(renvoiPlusGrandNbre(15, 20, 14, 12));
var_dump(renvoiPlusGrandNbre(10, 11, 14, 12));
var_dump(renvoiPlusGrandNbre(15, 20, 14, 25));