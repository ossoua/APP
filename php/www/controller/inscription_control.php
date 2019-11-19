<?php

if (isset($_POST['password']) && isset($_POST['name']) && isset($_POST['first_name']) && isset($_POST['adress']) && isset($_POST['mail']) && isset($_POST['password_check']) && isset($_POST['access_code'])) {
    require 'model/inscription_model.php';

    if ($_POST['password'] == $_POST['password_check']) {
        majUser($_POST);
        echo "Inscription validée";
    } else {
        echo 'Les mots de passe ne correspondent pas.';
    }
}
else {
  require 'view/Inscription.php';
}
