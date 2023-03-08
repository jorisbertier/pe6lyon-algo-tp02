<?php

$restaurant = [
    "nom" => "Carmelo",
    "adresse" => "Lyon1",
    "specialites" => "pizza",
];


$carte = [
    "entree" => ["nom" => "caviar", "description" => "caviar mariné", "prix" => "5$"],
    ["nom" => "carpacio", "description" => "carpacio de boeuf au percil", "prix" => "7$"],
    
    "plat" => ["nom" => "pizza 4 saisons", "description" => "aubergine, champignon, chevre mozza", "prix" => "12$", "allergenes" =>
     "champignon"],
    ["nom" => "pizza raviole", "description" => "raviole, saumon, creme fraiche", "prix" => "16$", "allergenes" => "poisson"],
    "dessert" => ["nom" => "fondant chocolat", "description" => "chocolat noir et coeur fondant", "prix" => "5$"],
    ["nom" => "cookie", "description" => "pepite cholat au lait", "prix" => "4$"],

];
/*
foreach ($map as $cle => $valeur) {
    echo "<p id=’" . $cle . "’>" . $valeur . "</p>" ;*/



    echo " le restaurant " . $restaurant['nom'] ." son plat est " . $carte["entree"]["nom"];