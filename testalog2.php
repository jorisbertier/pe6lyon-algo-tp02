
<?php

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

var_dump(mention(21));
