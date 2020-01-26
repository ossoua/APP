<?php

session_start();
require_once './model/UserManager.php';

$user = new UserManager();
$access_code = $_SESSION['access_code'];

if (!isset($_SESSION['id_user'])){
    header("Location: /user/connection");
} elseif (isset($_COOKIE['modified']) && $_COOKIE['modified'] == "true"){
    require './view/Profil.php';
    echo "Modification effectuée";
    setcookie('modified',"");
} elseif (isset($_POST['name']) && $_POST['name'] != ""){
    $user->editUserName($_POST['name'],$access_code);
    $_SESSION['name'] = $_POST['name'];
    setcookie('modified',"true");
    header("Location: /user/profil");
} elseif (isset($_POST['first_name']) && $_POST['first_name'] != ""){
    $user->editUserFirstName($_POST['first_name'],$access_code);
    $_SESSION['first_name'] = $_POST['first_name'];
    setcookie('modified',"true");
    header("Location: /user/profil");
} elseif (isset($_POST['adress']) && $_POST['adress'] != ""){
    $user->editUserAdress($_POST['adress'],$access_code);
    $_SESSION['adress'] = $_POST['adress'];
    setcookie('modified',"true");
    header("Location: /user/profil");
} elseif (isset($_POST['mail']) && $_POST['mail'] != ""){
    $user->editUserMail($_POST['mail'],$access_code);
    $_SESSION['mail'] = $_POST['mail'];
    setcookie('modified',"true");
    header("Location: /user/profil");
} elseif (isset($_FILES['photo']) && $_FILES['photo']['error'] == 0){
    $info = pathinfo($_FILES['photo']['name']);
    $extension_upload = $info['extension'];
    $extensions_authorized = array('jpg', 'jpeg', 'gif', 'png');
    if (in_array($extension_upload,$extensions_authorized)){
        move_uploaded_file($_FILES['photo']['tmp_name'], './user_img',$_SESSION['access_code'].$info['extension']);
        echo "L'envoi est validé";
    }
}
else{
    require './view/Profil.php';
}

