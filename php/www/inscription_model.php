<?php
function createUser()
{
    $db = dbConnect();
    $req_user = $db->prepare('INSERT INTO user(name, first_name, mail, phone, admin)
                            VALUES(:name, :first_name, :mail, :phone, :admin) ');
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
