Les élections législatives, en Guignolerie Septentrionale, obéissent à la règle suivante :

lorsque l'un des candidats obtient plus de 50% des suffrages, il est élu dès le premier tour.
en cas de deuxième tour, peuvent participer uniquement les candidats ayant obtenu au moins 12,5% des voix au premier tour.
Travail à Faire:

Vous devez écrire un algorithme qui permette la saisie des scores de quatre candidats au premier tour.
 Cet algorithme traitera ensuite le candidat numéro 1 (et uniquementlui) :
  il dira s'il est élu, battu, s'il se trouve en ballottage favorable 
  (il participe au second tour en étant arrivé en tête à l'issue du premier tour)
   ou défavorable (il participe au second tour sans avoir été en tête au premier tour).
   suffrages
   candidat

   FONCTION ELECTION LEGISLATIVE
$suffrage

C1
C2
C3
C4
DEBUT
    SI suffrage > 50 ALORS
    AFFICHE "Vous etes elu"
    FIN SI
    SI C2 > 50 && C3 > 50 && c4 >50 ou suffrage ou suffrage < 12.5
    Affiche vous etes battue
    FIN SI
    SI C1 > C2 && C1 > C3 && C1 > C4
    Affiche vous etes en ballotage favorable
    FIN SI
    SINON
    Affiche vous passer au deuxieme tour
FIN
