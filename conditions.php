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
