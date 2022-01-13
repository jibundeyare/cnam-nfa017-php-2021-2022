<?php

for ($i = 0; $i < 10; $i++) {
    echo "$i<br>\n";
}

$fruits = ['ananas', 'banane', 'cerise'];

for ($i = 0; $i < count($fruits); $i++) {
    echo "{$i} : {$fruits[$i]}<br>\n";
}

echo "<br>\n";

for ($i = 0; $i < count($fruits); $i += 2) {
    echo "{$fruits[$i]}<br>\n";
}

echo "<br>\n";

// cette boucle foreach permet d'afficher toutes les valeurs du tableau
foreach ($fruits as $fruit) {
    echo "$fruit<br>\n";
}

echo "<br>\n";

// cette boucle foreach permet d'afficher toutes les clés et valeurs du tableau
foreach ($fruits as $key => $value) {
    echo "$key : $value<br>\n";
}

echo "<br>\n";

$data = [
    'firstname' => 'Toto',
    'lastname' => 'Titi',
    'email' => 'toto.titi@example.com',
];

foreach ($data as $value) {
    echo "$value<br>\n";
}

echo "<br>\n";

foreach ($data as $key => $value) {
    echo "$key : $value<br>\n";
}
