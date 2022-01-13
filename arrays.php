<?php

require __DIR__.'/vendor/autoload.php';

$emptyArray = [];

$fruits = ['ananas', 'banane', 'cerise',];

$fruits = [
    'ananas',
    'banane',
    'cerise',
];

dump($fruits);

// accès en lecture au fruit n°1 avec $fruits[0]
echo "fruit n°1 : {$fruits[0]}<br>\n";
// accès en lecture au fruit n°x avec $fruits[x-1]
echo "fruit n°2 : {$fruits[1]}<br>\n";
echo "fruit n°3 : {$fruits[2]}<br>\n";

// accès en écriture au fruit n°1 avec $fruits[0]
$fruits[0] = 'abricot';

dump($fruits);

// accès en lecture au fruit n°1 avec $fruits[0]
echo "fruit n°1 : {$fruits[0]}<br>\n";

// la fonction count() permet de connaître la taille d'un tableau
$size = count($fruits);
echo "Il y a {$size} fruits<br>\n";

echo "Il y a ".count($fruits)." fruits<br>\n";

// ajout d'éléments
$fruits[] = 'datte';
$fruits[] = 'fraise';

dump($fruits);

$size = count($fruits);
echo "Il y a {$size} fruits<br>\n";

// enlever le premier élément
$fruitA = array_shift($fruits);

dump($fruitA);
dump($fruits);

// enlever le dernier élément
$fruitF = array_pop($fruits);

dump($fruitF);
dump($fruits);

// enlever un élément au milieu du tableau
// enlever à partir de l'index 1, 1 seul élément
$fruitsRemoved = array_splice($fruits, 1, 1);

dump($fruitsRemoved);
dump($fruits);

// cette syntaxe permet de supprimer un élément à partir de l'index 1
// mais sans le conserver dans une autre variable
array_splice($fruits, 1, 1);

// enlever un élément
// @warning la fonction unset() ne réindexe pas le tableau
// donc à ne surtout pas utiliser avec une boucle for et un compteur
// mais elle est plus simple et rapide à exécuter que array_splice()
unset($fruits[0]);

dump($fruits);

// insérer ou un plusieurs éléments au milieu du tableau
// insérer à partir de l'index 1, en ne supprimant aucun élément
array_splice($fruits, 1, 0, ['foo', 'bar', 'baz']);

dump($fruits);

$vegetables = ['artichaut', 'betterave', 'carotte'];

// concaténation de deux tableaux
$bigList = array_merge($fruits, $vegetables);

dump($bigList);

// la fonction in_array() permet de vérifier si un élément est présent dans un tableau
if (!in_array('ananas', $bigList)) {
    echo "Il n'y a pas d'ananas dans la liste<br>\n";
}

if (in_array('carotte', $bigList)) {
    echo "Il y a des carottes dans la liste<br>\n";
}

// tableau à clé ou index alphanumérique
// aussi appelé dictionnaire ou hash map
$data = [
    'nom' => 'Lorem',
    'prenom' => 'Toto',
    'age' => 18,
    'email' => 'toto.lorem@example.com',
    'newsletter' => true,
];

dump($data);

// accès en lecture
echo "Email: {$data['email']}";

// accès en écriture
$data['age'] = 12;

// ajout d'un couple clé valeur
$data['spammer'] = true;

// suppression d'un couple clé valeur
// @warning on ne peut pas utiliser array_splice() sur un tableau à clé alphanumérique
unset($data['spammer']);
