<?php

// cette boucle for affiche les nombres de 0 à 9
for ($i = 0; $i < 10; $i++) {
    echo "$i<br>\n";
}

$fruits = ['ananas', 'banane', 'cerise'];

// cette boucle for affiche les tous les éléments d'un tableau à index numérique
for ($i = 0; $i < count($fruits); $i++) {
    echo "{$i} : {$fruits[$i]}<br>\n";
}

echo "<br>\n";

// cette boucle for affiche les tous les éléments d'un tableau à index numérique
// qui ont un numéro d'index pair
for ($i = 0; $i < count($fruits); $i += 2) {
    echo "{$i} : {$fruits[$i]}<br>\n";
}

echo "<br>\n";

// cette boucle foreach affiche toutes les valeurs d'un tableau
// @warning cette boucle ne permet pas d'accéder à l'index
foreach ($fruits as $fruit) {
    echo "$fruit<br>\n";
}

echo "<br>\n";

// cette boucle foreach affiche toutes les clés et les valeurs d'un tableau
foreach ($fruits as $key => $value) {
    echo "$key : $value<br>\n";
}

echo "<br>\n";

$data = [
    'firstname' => 'Toto',
    'lastname' => 'Titi',
    'email' => 'toto.titi@example.com',
];

// cette boucle foreach affiche toutes les valeurs d'un tableau
// @warning cette boucle ne permet pas d'accéder à l'index
foreach ($data as $value) {
    echo "$value<br>\n";
}

echo "<br>\n";

// cette boucle foreach affiche toutes les clés et les valeurs d'un tableau
foreach ($data as $key => $value) {
    echo "$key : $value<br>\n";
}
