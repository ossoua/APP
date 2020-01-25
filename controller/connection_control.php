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
    require 'model/UserManager.php';
    require 'view/Connection.php';


    if(isset($_POST['mail']) && isset($_POST['password'])){

      $user = new UserManager();
      $mail = $user -> charEscape($_POST['mail']);
      $password = $user -> charEscape($_POST['password']);

        try{
            $connection = new ConnectionManager ($mail,$password);
            $_SESSION['id_user'] = $connection->getId();
            $_SESSION['password'] = $connection->getPassword();
            $_SESSION['mail'] = $connection->getMail();
            $_SESSION['admin'] = $connection->getAdmin();
            $_SESSION['name'] = $connection->getName();
            $_SESSION['first_name'] = $connection->getFirstName();
            $_SESSION['access_code'] = $connection->getAccessCode();
            $_SESSION['adress'] = $connection->getAdress();
            echo 'Connexion établie';
            header('Location: /user/connection');
        }
        catch (Exception $e) {
            echo 'Connexion échouée';
        }


      }

}
