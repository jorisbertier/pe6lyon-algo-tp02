<?php

/*FONCTION sumNIntegers(n: entier) : entier OU FAUX

DEBUT 

    SI n <= 0 ALORS
        RETOURNER FAUX
    FINSI
    $somme = 0

    TANT QUE ($somme < 10)
    FIN TANT QUE

    DEBUT
    AFFICHER $somme ++ 
    FIN
FIN*/


function sommeEntier($n) {
    $sum = 0;
    if($n <= 0) {
        return false;
    }
    for($i= 1; $i <= $n; $i++) {
       $sum += $i;
    }
    return $sum;
  }

  var_dump(sommeEntier(-5));

  /*CN1 Nombre possitif*/ 
function testsommeEntier() {
    if(sommeEntier(10) == 55) {
        echo "TEST sommeEntier : Reussi !\n";
    }
    else {
     echo "Test sommeEntier : faux";
    }
    }
    
    testsommeEntier();