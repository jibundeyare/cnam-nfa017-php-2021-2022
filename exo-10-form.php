<?php

/*
Vérifiez que tous les champs ont bien été remplis :
    
- les champs alias, email et password doivent être non vides (le champ comment est optionnel)
- le champ alias doit faire minimum 3 caractères et 16 maximum
- le champ email doit être valide
- le champ mot de passe doit :
    - faire minimum 8 caractères et 255 maximum
    - contenir au moins une lettre minuscule
    - contenir au moins une lettre majuscule
    - contenir au moins un chiffre
    - contenir au moins caractère qui n'est ni une lettre ni un chiffre
- le champ comments doit :
    - faire 1000 caractères maximum
    - ne pas contenir de caractères interdits en HTML, c-à-d pas de < > & et "

S'il y a des erreurs, affichez un message d'erreur dans la div au dessus du champ correspondant.

Astuces :

- la fonction strlen() permet de connaître la longueur d'une chaîne de caractères
- la fonction str_contains() permet de vérifie la présence d'une chaîne de caractères dans une autre chaîne de caractères
- l'appel de fonction preg_match("/[a-z]/i", $password) permet de vérifier la présence de lettres minuscules
- l'appel de fonction preg_match("/[A-Z]/i", $password) permet de vérifier la présence de lettres majuscules
- l'appel de fonction preg_match("/[0-9]/i", $password) permet de vérifier la présence de chiffres
- l'appel de fonction preg_match("/[^a-zA-Z0-9]/i", $password) permet de vérifier la présence de caractère qui ne sont ni une lettre ni un chiffre
- l'appel de fonction filter_var($email, FILTER_VALIDATE_EMAIL) permet de valider un email

Pour le moment le message de confirmation s'affiche en permanence.
Vous devez le masquer s'il n'est pas pertinent :

- s'il y a des erreurs, il doit être masqué
- si l'utilisateur n'a envoyé aucune donné, il doit être masqué
*/

require __DIR__.'/vendor/autoload.php';

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo</title>
</head>
<body>
    <h1>Exo</h1>

    <div class="confirmation">
        <p>Votre compte a bien été enregistré.<p>
    </div>

    <form action="" method="post">
        <div>
            <div class="error">
            </div>
            <input type="text" name="alias" placeholder="votre nom d'utilisateur">
        </div>
        <div>
            <div class="error">
            </div>
            <input type="email" name="email" placeholder="votre mail">
        </div>
        <div>
            <div class="error">
            </div>
            <input type="password" name="password" placeholder="votre mot de passe">
        </div>
        <div>
            <div class="error">
            </div>
            <textarea name="comments" placeholder="vos commentaires"></textarea>
        </div>
        <div>
            <button type="submit">Valider</button>
        </div>
    </form>
</body>
</html>