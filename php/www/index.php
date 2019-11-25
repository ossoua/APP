<?php
$request = $_SERVER['REQUEST_URI'];

switch ($request) {
  case '/':
    require __DIR__ . '/view/indexView.html';
    break;

  case '':
    require __DIR__ . '/view/indexView.html';
    break;

  case '/user/inscription':
    require __DIR__ . '/controller/inscription_control.php';
    break;

  case '/user/connexion':
    require __DIR__ . '/controller/connexion_control.php';
    break;

  default:
    http_response_code(404);
    require __DIR__ . '/404.php';
    break;
}
