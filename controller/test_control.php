<?php

require_once './model/TestManager.php';

session_start();

if (isset($_SESSION['id_user'])){
    $test = new TestManager();
    require './view/Tests.php';
}
else {
    header('Location: /user/connection');
}



