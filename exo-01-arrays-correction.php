<?php

/*
Creéz un tableau contenant 5 cartes d'un jeu de 32 cartes à jouer.

Exemple de nom de cartes : 'as pique', '3 carreau', 'valet treffle', etc.

Tirez un nombre "n" au hasard, compris entre 1 et 5 inclus, en utilisant la fonction random_int().

À l'aide de ce nombre, retirer la "n-ième" carte de la main.

Affichez le nombre tiré au hasard et le nom de la carte qui a été retirée.
*/

require __DIR__.'/vendor/autoload.php';

$cards = [
    'as pique',
    '3 carreau',
    'valet treffle',
    '9 cœur',
    'roi cœur',
];

dump($cards);

$number = random_int(1, 5);

$removedCards = array_splice($cards, $number - 1, 1);
$removedCard = $removedCards[0];

dump($number);

echo "La carte n°{$number} retirée est : {$removedCard}";
