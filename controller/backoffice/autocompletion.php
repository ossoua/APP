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

<<<<<<< HEAD
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
=======
echo implode('|',$selected_users);
>>>>>>> parent of da4e641... Merge branch 'master' of https://github.com/ossoua/APP
