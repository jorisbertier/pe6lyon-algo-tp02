
<?php
/*CN1 Si inferieure à 0 et supérieur à 20
CN2 Si note comprise entre 12 et 14
CN3 Si note comprise entre 14 et 16
CN4 Si note comprise entre 16 et 18
CN5 Si note superieure à 18
*/

function mention($note) {
    if ($note < 0 || $note > 20 ) {
    return false; 
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
function testMention() {
if(mention(21)== false) {
    echo "TEST testMention : Reussi !";
}
else {
 echo "Test testMention : Echec";
}
}

testMention();