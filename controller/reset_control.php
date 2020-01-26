<?php
require_once 'model/UserManager.php';

$user = new UserManager();

if (isset($_POST['mail']) && isset($_POST['mailConfirm'])) {
    $mail = $_POST['mail'];
    $mailConfirm = $_POST['mailConfirm'];

    $input = $user->getUserAccess($mail);

    $encrypted = base64_encode(strval($input));


    $message = "Vous avez demander une réinitialisation de mot de passe. \n
                Veuillez cliquer sur le lien suivant afin de procéder à la réinitialisation : \n
                http://www.drivingaces.ovh/user/reset?token=" . $encrypted;

    mail($mail, "DrivingAces : Réinitialiser son mot de passe", $message);
    echo 'Email envoyé';
    header('Location: /user/connection');
} elseif (isset($_GET['token'])) {
    $access_code = intval(base64_decode($_GET['token']));
    $account = $user->getUserInfo($access_code);
    $first_name = $account[0];
    $name = $account[1];
    require $_SERVER['DOCUMENT_ROOT'] . '/view/ResetPassword.php';
} elseif (isset($_POST['password']) && isset($_POST['password_check'])) {
    //Si l'utilisateur se trompe, on peut rediriger avec le meme code d'accès
    $encrypted = base64_encode(strval($_POST['access_code']));
    if ($_POST['password'] == $_POST['password_check']) {
        $password = $_POST['password'];


        $password = $user->charEscape($password);

        //Password Hash
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $user->editUserPassword($hashed_password, $_POST['access_code']);
        header('Location: /user/connection');


    } else {
        $_SESSION['error'] = "Les mots de passe ne correspondent pas.";
        header('Location: /user/reset?token=' . $encrypted);
    }
} else {
    require $_SERVER['DOCUMENT_ROOT'] . '/view/AskResetPassword.php';
}



