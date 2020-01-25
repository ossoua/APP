<?php

session_start();

if (!isset($_SESSION['id_user'])){
    header("Location: /user/connection");
}

if (isset($_POST['subject']) && isset($_POST['message'])) {
    $subject = "Demande utilisateur: " . $_POST['subject'];
    $message = "Vous avez reçu une demande utilisateur.\n\n 
                Informations de l'utilisateur: \n 
                Nom: ".$_SESSION['name']."\n 
                Prénom: ".$_SESSION['first_name']."\n
                Code d'accès: ".$_SESSION['access_code']."\n
                Mail: ".$_SESSION['mail']."\n\n
                Message:\n".$_POST['message'];
    mail("drivingacesisep@gmail.com",$subject,$message);

} else {
    require './view/contactAdmin.php';

}