<?php

// affectation d'une chaîne de caractères
$text1 = 'foo';

// concaténation d'une variable et d'une chaîne de caractères
$text2 = $text1.' bar';

echo $text1."<br>\n";
echo $text2."<br>\n";

$temperature = 10.5;
// interpolation de la variable $temperature
// recommandé par rapport à la concaténation
$report = "La température est de {$temperature} °C";

// même résultat avec une concaténation
$report = 'La température est de '.$temperature.' °C';

echo $report."<br>\n";
// remplacement du point par une virgule
echo str_replace('.', ',', $report."<br>\n");
