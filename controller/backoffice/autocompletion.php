<?php

//A MODIFIER EN LIGNE
require_once '/Users/theomartinez/Cours/APP/WEB/www/model/UserManager.php';



$back_office = new UserManager();
$users = $back_office->getUsers();

$usersLength = count($users);

$selected_users = [];

if (isset($_GET['search'])) {
    for ($i = 0; $i < $usersLength; $i++) {
        if (stripos($users[$i], strval($_GET['search'])) === 0) {
            array_push($selected_users, $users[$i]);
        }
    }
    echo implode('|', $selected_users);
}

if (isset($_GET['access_code'])) {

    if (isset($_GET['remove']) && $_GET['remove'] == "true") {

        if ($_GET['remove'] == "true") {

            $back_office->removeUser($_GET['access_code']);
            header('Location: /backoffice');
        } else {
            $user = $back_office->getUserInfo($_GET['access_code']);
            echo implode('|', $user);
        }

        header('Location: /backoffice');
    }
}