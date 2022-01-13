<?php

/*
Créez toutes les cartes de l'as au roi dans les quatre couleurs en utilisant une boucle foreach qui parcours un tableau contenant les quatre couleurs et une boucle for qiu est imbriquée.

Une carte est représentée par un tableau à clé alphanumérique, comme ci-dessous avec l'as de cœur :
[
    'value': 1,
    'color: 'cœur',
]

Le résultat final doit être un tableau contenant les éléments suivants :

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

Ensuite, utilisez deux boucles foreach imbriquées pour afficher tous les éléments du tableau.
*/

$colors = ['cœur', 'carreau', 'treffle', 'pique'];
