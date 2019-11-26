<?php

require_once 'model/ConnectionManager.php';


session_start();

if (!isset($_SESSION['connection'])){
  newConnection();
}
else {
  echo '<pre>';
  var_dump($_SESSION['connection']); // On affiche les infos concernant notre objet.
  echo '</pre>';
}

function newConnection(){

    require 'view/Connection.php';

    if(isset($_POST['mail']) && isset($_POST['password'])){
      $connection = new ConnectionManager ($_POST['mail'],$_POST['password']);
      $_SESSION['connection'] = $connection;

      echo 'Actualiser';
    }

}


 ?>
