<?php

session_start();

$message = "Quitter le test";

if (isset($_POST['tonalité'])) {
  $cookie_tonalite = $_POST['tonalité'];
  setcookie("tonalité", $cookie_tonalite, time() + (5), "/");
}

if (isset($_POST['son'])) {
  $cookie_son = $_POST['son'];
  setcookie("son", $cookie_son, time() + (20), "/");
}

if (isset($_POST['vision'])) {
  $cookie_vision = $_POST['vision'];
  setcookie("vision", $cookie_vision, time() + (40), "/");
}

if (isset($_POST['tonalité']) || isset($_POST['son']) || isset($_POST['vision'])) {
  header('Location: /controller/admintest_control');
}

if(isset($_COOKIE["tonalité"])) {
  $message = "Reconnaissance de tonalité";
}

else if(isset($_COOKIE["son"])) {
  $message = "Réaction à un signal sonore innattendu";
}

else if(isset($_COOKIE["vision"])) {
  $message = "Réaction à un signal visuel attendu";
}
require $_SERVER['DOCUMENT_ROOT'].'/view/AdminTest.php';
