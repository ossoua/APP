<?php

require('www/model/inscription_model.php');

if (isset($_POST['password']) && isset($_POST['name']) && isset($_POST['first_name']) && isset($_POST['adress']) && isset($_POST['mail']) && isset($_POST['password_check']) && isset($_POST['access_code'])) {
    if ($user['password'] == $user['password_check']) {
        majUser($user);
        require('Connexion.html');
    } else {
        echo 'Les mots de passe ne correspondent pas.';
    }
}
