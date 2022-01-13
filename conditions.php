<?php

// inclusion du mécanisme d'autoloading de php
require __DIR__.'/vendor/autoload.php';

// affectation d'un nombre entier aléatoire, compris entre 0 et 1 inclus
// ce nombre entier est converti en booléen
$isWaterOff = (bool) random_int(0, 1);
$isGasOff = (bool) random_int(0, 1);

dump($isWaterOff);
dump($isGasOff);

if ($isWaterOff && $isGasOff) {
    echo 'On peut partir en WE!<br>';
} else {
    echo 'On ne peut pas partir en WE<br>';

    if (!$isWaterOff) {
        echo 'Il faut couper l\'eau<br>';
    }

    if (!$isGasOff) {
        echo 'Il faut couper le gaz<br>';
    }
}

$hasPaymentCard = (bool) random_int(0, 1);
$hasCash = (bool) random_int(0, 1);

dump($hasPaymentCard); // false
dump($hasCash); // false

if ($hasPaymentCard || $hasCash) {
    echo "Vous pouvez partir faire les courses<br>\n";

    if (!$hasPaymentCard) {
        echo "Il vous manque la carte de paiement<br>\n";
    }

    if (!$hasCash) {
        echo "Il vous manque du liquide<br>\n";
    }
} else {
    echo "Vous ne pouvez pas partir faire les courses<br>\n";
    echo "Vous n'avez aucun moyen de paiement<br>\n";
}

$stock = random_int(0, 10);

dump($stock);

if ($stock == 0) {
    echo "Rupture de stock<br>\n";
} elseif ($stock == 1) {
    echo "Il reste {$stock} pièce<br>\n";
} elseif ($stock <= 3) {
    echo "Il reste {$stock} pièces<br>\n";
} else {
    echo "Stock disponible<br>\n";
}

$group = random_int(0, 3);

dump($group);

switch ($group) {
    case 1:
        echo "Vous êtes dans le premier groupe<br>\n";
        break;
    case 2:
        echo "Vous êtes dans le deuxième groupe<br>\n";
        break;
    case 3:
        echo "Vous êtes dans le troisième groupe<br>\n";
        break;
    default:
        echo "Vous n'êtes dans aucun groupe<br>\n";
}

switch (true) {
    case $group == 1:
        echo "Vous êtes dans le premier groupe<br>\n";
        break;
    case $group == 2:
        echo "Vous êtes dans le deuxième groupe<br>\n";
        break;
    case $group == 3:
        echo "Vous êtes dans le troisième groupe<br>\n";
        break;
    default:
        echo "Vous n'êtes dans aucun groupe<br>\n";
}

// yoda conditions
$value = 15;

// cette façon de comparer les valeurs permet d'éviter l'erreur où on utilise l'opérateur = au lieu de ==
if (15 == $value) {
    echo "la valeur est égale à 15<br>\n";
}
