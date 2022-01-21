<?php

require __DIR__.'/vendor/autoload.php';

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="form-01.php" method="post">
        <div>
            <input type="text" name="prenom" placeholder="votre prénom">
        </div>
        <div>
            <input type="text" name="nom" placeholder="votre nom">
        </div>
        <div>
            <input type="email" name="email" placeholder="votre mail">
        </div>
    </form>

</body>
</html>