<?php
$request = $_SERVER['REQUEST_URI'];

switch ($request) {
  case '/':
    require __DIR__ . '/indexView.php';
    break;

  case '':
    require __DIR__ . '/indexView.php';
    break;

  case '/user/profile':
    require __DIR__ . '/controller/profile.php';
    break;

  default:
    http_response_code(404);
    require __DIR__ . '/404.php';
    break;
}

require('controller.php');

if (isset($_GET['action'])) {
    if ($_GET['action']=='createUser') {
        if (isset($_POST['password']) && isset($_POST['name']) && isset($_POST['first_name']) && isset($_POST['adress']) && isset($_POST['mail']) && isset($_POST['password_check']) && isset($_POST['access_code'])) {
            createUser($_POST);
        }
    }
    if ($_GET['action']=='inscription') {
        require('Inscription.html');
    }
    if ($_GET['action']=='connexion') {
        require('Connexion.html');
    }
} else {
    require('indexView.html');
}
