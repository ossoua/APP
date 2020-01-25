<?php
$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '':
    case '/':
        require __DIR__ . '/controller/index_control.php';
        break;

    case '/user/inscription':
        require __DIR__ . '/controller/inscription_control.php';
        break;

    case '/user/connection':
        require __DIR__ . '/controller/connection_control.php';
        break;

    case '/user/profile':
        require __DIR__ . '/view/Profil.php';
        break;

    case '/user/logout':
        require __DIR__ . '/controller/logout.php';
        break;

    case '/user/tests':
        require __DIR__ .'/controller/test_control.php';
        break;

    case '/FAQ':
        require __DIR__ . '/controller/FAQ_control.php';
        break;

    case '/user/askAdmin':
    case '/administration':
        require __DIR__ . '/controller/contact_control.php';
        break;

    case '/backoffice':
        require __DIR__ . '/controller/backoffice/backoffice_controller.php';
        break;



    default:
    http_response_code(404);
    require __DIR__ . '/404.php';
    break;
}

//mdp Drivingaces1234

//AUTO-LOAD Classes
spl_autoload_register(function($class) {
    require_once './model/' . $class . '.php';
}
);
