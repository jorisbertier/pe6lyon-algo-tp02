<?php

/*
Votre collègue vous donne la signature suivante :
FONCTION findValueInTab(var tab, var value) : entier|FAUX
Cette fonction cherche la valeur value dans le tableau tab, et
retourne son indice si elle le trouve, FAUX sinon.
Coder cette fonction en PHP.
*/

/*

    CE1 : findValue( [], 1) => FAUX
    CN1 : findValue( ["toto"], "toto") => 0
    CN2 : findValue( [ 217, 191], 217) => 0
    CN3 : findValue( [ 217, 191], 191) => 1
    CN4 : findValue( [ 217, 191, 314], 217) => 0
    CN5 : findValue( [ 217, 191, 314], 314) => 2
    CE2 : findValue( [ 217, 191, 314], 2023) => FAUX

*/
function findValueInTab( $tab, $value) {
    if (count($tab) === 0) {
        return false;
    }
    $i = 0;
    while($i < $tab) {
        return 0;
    }
    return -1;
}

function testFindValueInTab_CE1() {
    if ( findValueInTab([], 1) === false) {
    echo "test testFindValueInTab_CE1 ✅ réussi !";
    } else {
    echo "test testFindValueInTab_CE1 ❌ échoué !" ;
    }
}
testFindValueInTab_CE1();
echo PHP_EOL;

function testFindValueInTab_CE2() {
    if ( findValueInTab(["toto"], "toto") == 0) {
    echo "test testFindValueInTab_CE1 ✅ réussi !";
    } else {
    echo "test testFindValueInTab_CE1 ❌ échoué !" ;
    }
}

testFindValueInTab_CE2();
echo PHP_EOL;