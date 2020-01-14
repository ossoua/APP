<?php
$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/':
        require __DIR__ . '/controller/index_control.php';
        break;

    case '':
        require __DIR__ . '/controller/index_control.php';
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
        require __DIR__ .'/controller/test_control.php';
        break;

    case '/FAQ':
        require __DIR__ .'/view/FAQ2.php';
        break;

    case '/administration':
        require __DIR__ .'/controller/admin_control.php';
        break;

    case '/backoffice':
        require __DIR__ . '/controller/backoffice/backoffice_controller.php';
        break;

    case '/user/askAdmin':
        require __DIR__ . '/controller/admin_control.php';
        break;


  default:
    http_response_code(404);
    require __DIR__ . '/404.php';
    break;
}

//mdp RootDrivingAces1

//AUTO-LOAD Classes
spl_autoload_register(function($class) {
    require_once './model/' . $class . '.php';
}
);
