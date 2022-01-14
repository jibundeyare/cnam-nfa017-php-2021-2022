<?php

/*
Créez toutes les cartes de l'as jusqu'au roi dans les quatre couleurs, en utilisant une boucle foreach qui parcourt un tableau contenant les quatre couleurs et une boucle for imbriquée.

Rappel des valeurs de certaines cartes :

- as : 1
- valet : 11
- dame : 12
- roi : 13

Une carte est représentée par un tableau à clé alphanumérique, comme ci-dessous avec l'as de cœur :
[
    'value': 1,
    'color: 'cœur',
]

Le résultat final doit être un tableau comme ci-dessous :

[
    [
        'value': 1,
        'color: 'cœur',
    ],
    [
        'value': 2,
        'color: 'cœur',
    ],
    ...
        [
        'value': 13,
        'color: 'cœur',
    ],
    ...
    [
        'value': 1,
        'color: 'carreau',
    ],
    ...
    [
        'value': 1,
        'color: 'treffle',
    ],
    ...
    [
        'value': 1,
        'color: 'pique',
    ],
    ...
]

Enfin, utilisez une seule boucle foreach pour afficher tous les éléments du tableau.
*/

$colors = ['cœur', 'carreau', 'treffle', 'pique'];

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
