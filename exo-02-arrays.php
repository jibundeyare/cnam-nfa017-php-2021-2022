<?php

/*
Creéz un tableau contenant 5 cartes d'un jeu de 32 cartes à jouer.

Exemple de nom de cartes : '1 pique', '3 carreau', '11 treffle', etc.

Rappel des valeurs de certaines cartes :

- as : 1
- valet : 11
- dame : 12
- roi : 13

Stockez la taille du tableau dans une variable en utilisant la fonction count().

Tirez un nombre au hasard, compris entre 1 et la taille du tableau inclus, en utilisant la fonction random_int().
Stockez ce nombre dans un tableau.

À l'aide de ce nombres, retirez une carte de la main.

Recommencez le tirage d'un nombre afin de retirer une deuxième carte de la main.

Affichez le nombres tirés au hasard et le nom des cartes qui ont été retirées.

Comparez les valeurs numériques des cartes et affichez quelle carte a une valeur supérieur ou s'il y a égalité.
Attention, par convention la carte "as" (valeur 1) est la plus élevée.
*/

/*
Bonus
Si vous voulez afficher correctement le nom des cartes, vous pouvez utiliser la fonction preg_replace().

Exemple qui remplace 1 par as
1 carreau sera remplacé par "as carreau"
mais 11 carreau ne sera pas remplacé
et 9 treffle ne sera pas remplacé non plus
*/
$cardName = preg_replace('/^1 /', 'as', '1 carreau');
$cardName = preg_replace('/^1 /', 'as', '11 carreau');
$cardName = preg_replace('/^1 /', 'as', '9 treffle');
