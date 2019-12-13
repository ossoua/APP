<?php

require_once 'model/ConnectionManager.php';


session_start();

if (!isset($_SESSION['id_user'])){
  newConnection();
}
else {
    header('Location: /user/tests');
}







function newConnection(){
    require 'view/Connection.php';

    if(isset($_POST['mail']) && isset($_POST['password'])){

        try{
            $connection = new ConnectionManager ($_POST['mail'],$_POST['password']);
            $_SESSION['id_user'] = $connection->getId();
            $_SESSION['password'] = $connection->getPassword();
            $_SESSION['mail'] = $connection->getMail();
            echo 'Connexion établie';
            header('Location: /user/tests');
        }
        catch (Exception $e) {
            echo 'Connexion échouée';
        }


      }

}


