<?php 

/*
CN1 nbr1 plus petit que nbr 2
CN2 nbr1 plus grand que nbr 2
CN3 nbr1 == nbr2

*/

function renvoiPlusGrandNbre($nbr1, $nbr2) {
    if($nbr1 < $nbr2) {
        return $nbr2;
    }
    if($nbr1 > $nbr2) {
        return $nbr1;
    }
    if($nbr1 == $nbr2) {
        echo "Les 2 sont pareils";
    }
    return $nb1;
}

var_dump(renvoiPlusGrandNbre(10, 15));

/*CN1*/ 
function testrenvoiPlusGrandNbre() {
    if(renvoiPlusGrandNbre(10, 15) == 15) {
        echo "TEST CN1 : Reussi !\n";
    }
    else {
     echo "Test CN1: faux";
    }
    }
    
    testrenvoiPlusGrandNbre();

    /*CN2*/ 
function testrenvoiPlusGrandNbre2() {
    if(renvoiPlusGrandNbre(20, 10) == 20) {
        echo "TEST CN2 : Reussi !\n";
    }
    else {
     echo "Test CN2: faux";
    }
    }
    
    testrenvoiPlusGrandNbre2();

    /*CN3*/
function testrenvoiPlusGrandNbre3() {
    if(renvoiPlusGrandNbre(10, 10) == 10) {
        echo "TEST CN3 : Reussi !\n";
    }
    else {
     echo "Test CN3: faux";
    }
    }
    
    testrenvoiPlusGrandNbre3();


  