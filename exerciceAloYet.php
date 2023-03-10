* : Tri de cartes
        - Créer un type Carte, caractérisé par une couleur et une valeur
        - Créer une méthode comparerCouleur(Carte c) qui compare la carte courante et la carte passée en paramètre.
         Elle renvoie -1 si la couleur de la carte courante est AVANT celle de la carte passée en paramètre, 0 si elles ont la même couleur,
          et 1 si sa couleur est APRÈS celle de la carte passée en paramètre. L'ordre naturel des couleurs est
           Trèfle - Carreau - Coeur - Pique
        - Créer une méthode comparerValeur(Carte c) sur le même principe.
         Prendre l'ordre des cartes d'un jeu de poker (du 2 le plus petit à l'as le plus haut)
        - Créer un type Main, qui contient une liste de cartes.
        - Dans le type Main, ajouter une méthode trier() qui permet de trier la main :
         en premier dans la liste doivent se trouver les trèfles triés du plus petit au plus grand, puis les carreaux, etc.
        - Écrivez un programme principal qui va permettre de créer une main "en dur" (vous choisissez vous-mêmes les cartes)
        de les faire trier, puis d'afficher le résultat (un var_dump en PHP ou un console.log en JS suffisent)


// Creer type carte, caracterise par une couleur et une valeur
// Créer un type Carte, caractérisé par une couleur et une valeur
Type Carte
    Déclarer couleur
    Déclarer valeur
    /*
        Créer une méthode comparerCouleur(Carte c) qui compare la carte courante et la carte passée en paramètre. Elle renvoie -1 si la couleur de la carte courante est AVANT celle de la carte passée en paramètre, 0 si elles ont la même couleur, et 1 si sa couleur est APRÈS celle de la carte passée en paramètre. L'ordre naturel des couleurs est Trèfle - Carreau - Coeur - Pique
    */
    FONCTION comparerCouleur(Carte c)
    DÉBUT
        SI this.couleur = c.couleur ALORS
            Renvoyer 0
        FINSI
        Déclarer ordre_couleurs <- [
            "Trèfle" => 1,
            "Carreau" => 2,
            "Coeur" => 3,
            "Pique" => 4
        ]
        Déclarer ordre_ma_couleur <- ordre_couleurs[this.couleur]
        Déclarer ordre_couleur_c <- ordre_couleurs[c.couleur]
         // SI ma couleur est avant celle de c ALORS
         //SI l'ordre de ma couleur < l'ordre de la couleur c ALORS
         SI ordre_ma_couleur < ordre_couleur_c ALORS
            Renvoyer -1
        FINSI
        Renvoyer 1
    FIN
FinType
FONCTION comparerValeur
SI 
Déclarer ordre_valeurs <- [
            "deux" => 1,
            "trois" => 2,
            "quatre" => 3,
            "cinq" => 4
            "six" => 5,
            "sept" => 6,
            "8" => 7,
            "9" => 8,
            "dix" => 9,
            "valet" => 10,
            "dame" => 11,
            "roi" => 12,
            "as" => 13
        ]
Déclarer ordre_ma_valeur <- ordre_valeurs[this.valeur]
        Déclarer ordre_valeur_c <- ordre_valeurs[c.valeur]
         // SI ma valeur est avant celle de c ALORS
         //SI l'ordre de ma valeur < l'ordre de la valeur c ALORS
         SI ordre_ma_valeur < ordre_valeur_c ALORS
            Renvoyer -1
        FINSI
        Renvoyer 1

Type main
    Declarer cartes[]

PROCEDURE
FIN
CN1 trier des cartes d'une main     dans une liste ou se trouve les trefles
CN2 trier des cartes du plus petit au plus grand
PROCEDURE trier()

if this.ordre_couleurs == this.ordre_valeurs {
    
}
$i=0
while $i < count(cartes[5]){
    echo "Vous avez la carte cartes[]"
    $i++;
}