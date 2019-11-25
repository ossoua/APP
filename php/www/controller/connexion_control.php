<?php
session_start();


if (!isset($_SESSION['connexion'])){
  $connexion = new Connexion;
  $_SESSION['connexion'] = $connexion;

  echo 'Actualiser';
}

else {
  echo '<pre>';
  var_dump($_SESSION['connexion']); // On affiche les infos concernant notre objet.
  echo '</pre>';
}

 ?>
