<?php

session_start();
require_once './model/UserManager.php';

$user = new UserManager();

if (!isset($_SESSION['id_user'])){
    header("Location: /user/connection");
} elseif (isset($_POST['name']) && $_POST['name'] != ""){
    $user->editUserName($_POST['name']);
    $_SESSION['name'] = $_POST['name'];
    header("Location: /user/profil");
} elseif (isset($_POST['first_name']) && $_POST['first_name'] != ""){
    $user->editUserFirstName($_POST['first_name']);
    $_SESSION['first_name'] = $_POST['first_name'];
    header("Location: /user/profil");
} elseif (isset($_POST['adress']) && $_POST['adress'] != ""){
    $user->editUserAdress($_POST['adress']);
    $_SESSION['adress'] = $_POST['adress'];
    header("Location: /user/profil");
} elseif (isset($_POST['mail']) && $_POST['mail'] != ""){
    $user->editUserMail($_POST['mail']);
    $_SESSION['mail'] = $_POST['mail'];
    header("Location: /user/profil");
} else{
    require './view/Profil.php';
}

