<?php

// affectation d'une chaîne de caractères
$myVar = 'Je suis une chaîne de caractères<br>';

echo $myVar;

// réaffectation d'un nombre entier
$myVar = 123;

echo $myVar;
echo '<br>';

// affectation d'une chaîne de caractères vide
$noText = '';

echo $noText;
echo '<br>';

// affectation de valeur booléennes
$isMorning = true;
$isSunny = false;

echo $isMorning;
echo '<br>';
echo $isSunny;
echo '<br>';

// affectation de nombre à virgule flottante à des variables
$pi = 3.14;
$e = 2.71;

echo $pi;
echo '<br>';
echo $e;
echo '<br>';

// affectation d'une valeur nulle
$referundum = null;

echo $referundum;
echo '<br>';

// déréférencer (supprimer) une variable
unset($referundum);

// provoque l'erreur Warning: Undefined variable $referundum
// car la variable a été déréférencée
// echo $referundum;
// echo '<br>';

// transtypage de données d'une chaîne de caractères en nombre entier
// le type de données de destination doit être mis entre parenthèses
$numericValue = (int) "123 foo bar baz";
// même action mais avec une fonction
$numericValue = intval("123 foo bar baz");

// transtypage de données d'un nombre entier en nombre à virgule flottante
$numericValue = (float) 123;
// même action mais avec une fonction
$numericValue = floatval(123);

// transtypage de données d'un nombre à virgule flottante en nombre entier
// ATTENTION : la conversion va supprimer les chiffres après la virgule donc cette opération fait perdre une partie de l'information
$numericValue = (int) 3.14;
// même action mais avec une fonction
$numericValue = intval(3.14);

// transtypage de données d'un nombre entier en booléen
$booleanValue = (bool) 123;
// même action mais avec une fonction
$booleanValue = boolval(123);

// voici la liste (presque complète) des types de données : bool, float, int, string, array

// voici la liste complète des fonctions de transtypage : boolval(), floatval(), intval(), strval()
