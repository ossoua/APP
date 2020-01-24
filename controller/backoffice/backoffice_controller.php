<?php

require_once '/Users/theomartinez/Cours/APP/WEB/www/model/UserManager.php';

if (isset($_POST['name']) && isset($_POST['first_name']) && isset($_POST['adress']) && isset($_POST['mail']) && isset($_POST['access_code'])) {
    if ($_POST['name'] != "" && $_POST['first_name'] != "" && $_POST['adress'] != "" && $_POST['mail'] != "") {
        $user = new UserManager();

        $name = $user->charEscape($_POST['name']);
        $first_name = $user->charEscape($_POST['first_name']);
        $adress = $user->charEscape($_POST['adress']);
        $mail = $user->charEscape($_POST['mail']);
        $access_code = $_POST['access_code'];

        $user->editUserName($name,$access_code);
        $user->editUserFirstName($first_name,$access_code);
        $user->editUserAdress($adress,$access_code);
        $user->editUserMail($mail,$access_code);

        $_POST = array();

        header('Location: /backoffice');
    }
    else{
        echo 'Une entrée est manquante';
    }
}else if (isset($_POST['ok'])){
    $user = new UserManager();
    $user->createUser();
    header('Location: /backoffice');
}
else{
    require_once './view/Backoffice.php';
}

