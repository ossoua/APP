<?php

require_once '/Users/theomartinez/Cours/APP/WEB/www/model/BackofficeManager.php';



$back_office = new BackofficeManager();
$users = $back_office->getUsers();

$usersLength = count($users);

$selected_users = [];


for ($i = 0;$i<$usersLength;$i++){
    if (stripos($users[$i],strval($_GET['search'])) === 0){
        array_push($selected_users,$users[$i]);
    }
}

echo implode('|',$selected_users);