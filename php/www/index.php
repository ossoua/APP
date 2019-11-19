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
    require __DIR__ . '/view/Inscription.html';
    break;

  default:
    http_response_code(404);
    require __DIR__ . '/404.php';
    break;
}
