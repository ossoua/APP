<?php

session_start();

if (!isset($_SESSION['error'])){
    $_SESSION['error'] = "";
}

if (isset($_POST['password']) && isset($_POST['name']) && isset($_POST['first_name']) && isset($_POST['adress']) && isset($_POST['mail']) && isset($_POST['password_check']) && isset($_POST['access_code'])) {
    require_once 'model/UserManager.php';
    require 'view/Inscription.php';



    //Checking matching passwords
    if ($_POST['password'] == $_POST['password_check']) {
        $password = $_POST['password'];

        //Checking password length
        if(strlen($password) > 7){
            session_destroy();

            $user = new UserManager();

            //Password Hash
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            $user -> setUser($_POST,$hashed_password);
            header('Location: /user/connection');
        }
        else{
            $_SESSION['error'] = "Le mot de passe doit être composé d'au moins 8 caractères";
            header('Location: /user/inscription');
        }

    } else {
        $_SESSION['error'] = "Les mots de passe ne correspondent pas.";
        header('Location: /user/inscription');
    }
} else {
    require 'view/Inscription.php';
}

