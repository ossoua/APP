<?php

require_once './model/TestManager.php';

session_start();

if (isset($_SESSION['id_user'])){
    $id_user = $_SESSION['id_user'];
    $test = new TestManager();
    $data = $test->getData($id_user);
    require './view/Tests.php';
}
else {
    header('Location: /user/connection');
}



