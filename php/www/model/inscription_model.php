<?php
function majUser($user)
{
    $db = dbConnect();

    $req = $db->prepare('UPDATE user SET password = :password, name = :name, first_name = :first_name, adress = :adress, mail = :mail WHERE access_code = :access_code');
    $req->execute(array(
      'password' => $user['password'],
      'name'  => $user['name'],
      'first_name' => $user['first_name'],
      'adress' => $user['adress'],
      'mail' => $user['mail'],
      'access_code' => $user['access_code']
    ));
}



function dbConnect()
{
    try {
        $db = new PDO('mysql:host=localhost;dbname=driving_aces;charset=utf8', 'root', 'root');
        return $db;
    } catch (Exception $e) {
        die('Erreur: '.$e->getMessage());
    }
}
