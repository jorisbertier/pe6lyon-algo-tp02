
<?php
/*CN1 Si inferieure à 0 et supérieur à 20
CN2 Si note comprise entre 12 et 14
CN3 Si note comprise entre 14 et 16
CN4 Si note comprise entre 16 et 18
CN5 Si note superieure à 18
CN6 Si note comprise entre 0 et 12
*/

function mention($note) {
    if ($note < 0 || $note > 20 ) {
    return false; 
    }

    elseif (0 <= $note && $note < 12) {
        return "Note de merde";
    }
    elseif (12 <= $note && $note < 14) {
        return "AB";
    }

    elseif (14 <= $note && $note < 16) {
        return "Bien";
    }

    elseif (16 <= $note && $note < 18 ) {
        return "TB";
    }

    elseif ($note >= 18) {
        return "Excellent";
    }
    

    
}

/*var_dump(mention(21));*/

/*CN1*/
function testMention1() {
if(mention(21)== false) {
    echo "TEST testMention1 : Reussi !\n";
}
else {
 echo "Test testMention1 : Echec";
}
}

testMention1();

/*CN2*/
function testMention2() {
    if(mention(13)== "AB") {
        echo "TEST testMention2 : Reussi !\n";
    }
    else {
     echo "Test testMention2 : Echec";
    }
    }
    
    testMention2();

    /*CN3*/
    function testMention3() {
    if(mention(15)== "Bien") {
        echo "TEST testMention3 : Reussi !\n";
    }
    else {
     echo "Test testMention3 : Echec";
    }
    }
    
    testMention3();

    /*CN4*/
    function testMention4() {
    if(mention(17)== "TB") {
        echo "TEST testMention4 : Reussi !\n";
    }
    else {
     echo "Test testMention4 : Echec";
    }
    }
    
    testMention4();

    /*CN5*/
    function testMention5() {
    if(mention(19)== "Excellent") {
        echo "TEST testMention5 : Reussi !\n";
    }
    else {
     echo "Test testMention5 : Echec";
    }
    }
    
    testMention5();

    /*CN6*/
    function testMention6() {
    if(mention(8)== "Note de merde") {
            echo "TEST testMention6 : Reussi !\n";
    }
     else {
     echo "Test testMention6 : Echec";
     }
    }
    
            
   testMention6();