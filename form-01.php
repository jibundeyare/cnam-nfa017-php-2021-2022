<?php

require __DIR__.'/vendor/autoload.php';

// dump($_POST);

if ($_POST) {
    // l'utilisateur a envoyé des données
    if (empty($_POST['email'])) {
        // le champ email est vide
        echo "Vous devez renseigner le champ email<br>\n";
    } else {
        // le champ email est renseigné, on peut le traiter
        $email = $_POST['email'];
    }
}
