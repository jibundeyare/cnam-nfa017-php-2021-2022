<?php

/*
Vérifiez que tous les champs ont bien été remplis.
S'il y a des erreurs, affichez un message d'erreur dans la div au dessus du champ correspondant.

Pour le moment le message de confirmation s'affiche en permanence.
Vous devez le masquez s'il n'est pas pertinent :

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
        Votre compte a bien été enregistré.
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
            <button type="submit">Valider</button>
        </div>
    </form>
</body>
</html>