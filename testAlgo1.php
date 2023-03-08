<?php 

function mean($nb1, $nb2) {
    return (($nb1 + $nb2) / 2);
}

echo "Test moyenne: ";
var_dump(mean(10, 20)); 

function testmean_2() 
 {
    if (mean(10,20)==15) {
        echo "test mean(2): ok" ; 
    }
    else { echo "test mean (2) : echec" ;
    }
 }

testmean_2();

