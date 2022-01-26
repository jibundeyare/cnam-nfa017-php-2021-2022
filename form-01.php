<?php

require __DIR__.'/vendor/autoload.php';

// dump($_POST);

if ($_POST) {
    if (empty($_POST['email'])) {
        echo "Vous devez renseigner le champ email<br>\n";
    } else {
        $email = $_POST['email'];
    }
}
