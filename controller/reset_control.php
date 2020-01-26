<?php
require_once 'model/UserManager.php';

$user = new UserManager();

if (isset($_POST['mail']) && isset($_POST['mailConfirm'])){
    $mail = $_POST['mail'];
    $mailConfirm = $_POST['mailConfirm'];

    $input = $user->getUserAccess($mail);

    $encrypted = base64_encode(strval($input));


    $message = "Vous avez demander une réinitialisation de mot de passe. \n
                Veuillez cliquer sur le lien suivant afin de procéder à la réinitialisation : \n
                http://www.drivingaces.ovh/user/reset?token=".$encrypted." .";

    mail($mail,"DrivingAces : Réinitialiser son mot de passe",$message);
    echo 'Email envoyé';
} elseif (isset($_GET['token'])){
    echo $_GET['token'];
    $access_code = intval(base64_decode($_GET['token']));
    echo $access_code;
}
else{
    require $_SERVER['DOCUMENT_ROOT'].'/view/ResetPassword.php';
}



