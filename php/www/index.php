<?php
$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/':
        require __DIR__ . '/view/indexView.php';
        break;

    case '':
        require __DIR__ . '/view/indexView.php';
        break;

    case '/user/inscription':
        require __DIR__ . '/controller/inscription_control.php';
        break;

    case '/user/connection':
        require __DIR__ . '/controller/connection_control.php';
        break;

    case '/user/profile':
        require __DIR__ . '/view/Profil.html';
        break;

    case '/user/logout':
        require __DIR__ . '/controller/logout.php';
        break;

    case '/user/tests':
        require __DIR__ .'/view/Tests.php';
        break;


  default:
    http_response_code(404);
    require __DIR__ . '/404.php';
    break;
}
