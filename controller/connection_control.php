<?php

require_once 'model/ConnectionManager.php';


session_start();

if (!isset($_SESSION['id_user'])){
  newConnection();
}
else if($_SESSION['admin']==0){
    header('Location: /user/tests');
}
else if($_SESSION['admin']==1){
    header('Location: /backoffice');
}



function newConnection(){
    require 'view/Connection.php';

    if(isset($_POST['mail']) && isset($_POST['password'])){

        try{
            $connection = new ConnectionManager ($_POST['mail'],$_POST['password']);
            $_SESSION['id_user'] = $connection->getId();
            $_SESSION['password'] = $connection->getPassword();
            $_SESSION['mail'] = $connection->getMail();
            $_SESSION['admin'] = $connection->getAdmin();
            echo 'Connexion établie';
            header('Location: /user/connection');
        }
        catch (Exception $e) {
            echo 'Connexion échouée';
        }


      }

}


