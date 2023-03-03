Votre collègue vous donne la signature suivante :
FONCTION findValueInTab(var tab, var value) : entier|FAUX
Cette fonction cherche la valeur value dans le tableau tab, et
retourne son indice si elle le trouve, FAUX sinon.
Coder cette fonction en PHP.

FONCTION findValueInTab(var tab, var value)
DEBUT
    TANT QUE cherhce valeur dans le tableau tab  $value = $tab
    Retourne $value;
    FIN TANT QUE
    Retourne FALSE
FIN




<?php
$fruits = array (
    "fruits"  => array("a" => "orange", "b" => "banana", "c" => "apple"),
    "numbers" => array(1, 2, 3, 4, 5, 6),
    "holes"   => array("first", 5 => "second", "third")
);
?>

$j = 0;
while ($j < 10) {
    echo "Exécution n°$j\n";
    $j++;