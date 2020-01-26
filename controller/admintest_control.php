<?php

session_start();

$cookie_tonalite = $_POST['tonalité'];
$cookie_son = $_POST['son'];
$cokie_vision = $_POST['vision'];

setcookie($cookie_tonalité, $cookie_son, $cokie_vision, time() + (86400 * 30), "/"); // 86400 = 1 jour

if(isset($_COOKIE[$cookie_tonalite])) {
  $tonalite = "Test de reconnaissance de tonalité";
}

if(isset($_COOKIE[$cookie_son])) {
  $son = "Test de réaction à un signal sonore innattendu";
}

if(isset($_COOKIE[$cookie_vision])) {
  $vision = "Test de réaction à un signal visuel attendu";
}

require $_SERVER['DOCUMENT_ROOT'].'/view/AdminTest.php';
