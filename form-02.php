<?php

require __DIR__.'/vendor/autoload.php';

dump($_POST);

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <h1>Form</h1>

    <form action="" method="post">
        <div>
            <input type="email" name="email" placeholder="votre mail">
        </div>
        <div>
            <button type="submit">Valider</button>
        </div>
    </form>
</body>
</html>