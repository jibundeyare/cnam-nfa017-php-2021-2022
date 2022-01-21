<?php

require __DIR__.'/vendor/autoload.php';

if ($_POST) {
    if (!empty($_POST['email'])) {
        $email = $_POST['email'];
    } else {
        echo "vous devez remplir le champ mail<br>\n";
    }
}
