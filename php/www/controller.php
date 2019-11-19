<?php
require('inscription_model.php');

function createUser($user)
{
    if ($user['password'] == $user['password_check']) {
        majUser($user);
        require('Connexion.html');
    } else {
        echo 'Les mots de passe ne correspondent pas.';
    }
}
