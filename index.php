<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil</title>
</head>
<body>
    <h1>Page d'accueil</h1>
    <p>
        <?php
        echo 'Du PHP dans du HTML.<br>';
        echo '(En réalité il ne faut surtout pas le faire.)<br>';
        ?>
    </p>
    <?php
    echo '<p>
        Du HTML dans du PHP.<br>
        Ça on a le droit mais il ne faut pas en abuser.<br>
    </p>
    ';
    ?>
</body>
</html>