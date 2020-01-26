<?php

session_start();

if (isset($_POST['tonalité'])) {
  $cookie_tonalite = $_POST['tonalité'];
  setcookie("tonalité", $cookie_tonalite, time() + (864 * 30), "/");
}

if (isset($_POST['son'])) {
  $cookie_son = $_POST['son'];
  setcookie("son", $cookie_son, time() + (864 * 30), "/");
}

if (isset($_POST['vision'])) {
  $cookie_vision = $_POST['vision'];
  setcookie("vision", $cookie_vision, time() + (864 * 30), "/");
}

if(isset($_COOKIE["tonalité"])) {
  $tonalite = "Test de reconnaissance de tonalité";
}

if(isset($_COOKIE["son"])) {
  $son = "Test de réaction à un signal sonore innattendu";
}

if(isset($_COOKIE["vision"])) {
  $vision = "Test de réaction à un signal visuel attendu";
}

require $_SERVER['DOCUMENT_ROOT'].'/view/AdminTest.php';
