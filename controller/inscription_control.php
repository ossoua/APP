<?php

if (isset($_POST['password']) && isset($_POST['name']) && isset($_POST['first_name']) && isset($_POST['adress']) && isset($_POST['mail']) && isset($_POST['password_check']) && isset($_POST['access_code'])) {
    require_once 'model/UserManager.php';

    if ($_POST['password'] == $_POST['password_check']) {
        $user = new UserManager();

        //Password Hash
        $hashed_password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $user -> setUser($_POST,$hashed_password);
    } else {
        echo 'Les mots de passe ne correspondent pas.';
    }
} else {
    require 'view/Inscription.php';
}
