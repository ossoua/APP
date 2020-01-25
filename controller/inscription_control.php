<?php

session_start();

if (!isset($_SESSION['error'])){
    $_SESSION['error'] = "";
}

if ($_POST['password']!="" && $_POST['name']!="" && $_POST['first_name']!="" && $_POST['adress']!="" && $_POST['mail']!="" && $_POST['password_check']!="" && $_POST['access_code']!="") {
    require_once 'model/UserManager.php';
    require 'view/Inscription.php';

    //Checking matching passwords
    if ($_POST['password'] == $_POST['password_check']) {
        $password = $_POST['password'];

        //Checking password length
        if(strlen($password) > 7){
            session_destroy();

            $user = new UserManager();

            $name = $user -> charEscape($_POST['name']);
            $first_name = $user -> charEscape($_POST['first_name']);
            $adress = $user -> charEscape($_POST['adress']);
            $mail = $user -> charEscape($_POST['mail']);
            $access_code = $_POST['access_code'];

            $password = $user -> charEscape($password);

            //Password Hash
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            $user -> setUser($name,$first_name,$adress,$mail,$access_code,$hashed_password);
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

