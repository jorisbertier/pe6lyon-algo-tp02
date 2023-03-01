<?php 
/*CN1 test résulat integer
CN2 test résultat float
CN3 test résultat négatif

*/
function mean($nb1, $nb2) {
    return (($nb1 + $nb2) / 2);
}

echo "Test moyenne: ";
var_dump(mean(10, 20)); 
/*CN1*/
function testmean_1() 
 {
    if (mean(10,20)==15) {
        echo "test mean(1): ok\n" ; 
    }
    else { echo "test mean (1) : echec" ;
    }
 }

testmean_1();

/*CN2*/
function testmean_2() 
 {
    if (mean(14,15)==14.5) {
        echo "test mean(2): ok\n" ; 
    }
    else { echo "test mean (2) : echec" ;
    }
 }

testmean_2();


/*CN3*/

function testmean_3() 
 {
    if (mean(14,15)==14.5) {
        echo "test mean(3): ok\n" ; 
    }
    else { echo "test mean (3) : echec" ;
    }
 }

testmean_3();