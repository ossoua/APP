<?php

require_once 'model/Manager.php';


class UserManager extends Manager
{

    protected $db;

    public function __construct()
    {
        $this->db = $this->dbConnect();
    }

    public function setUser($user,$password)
    {
        $req = $this->db->prepare('UPDATE user SET password = :password, name = :name, first_name = :first_name, adress = :adress, mail = :mail WHERE access_code = :access_code');
        $req->execute(array(
      'password' => $password,
      'name'  => $user['name'],
      'first_name' => $user['first_name'],
      'adress' => $user['adress'],
      'mail' => $user['mail'],
      'access_code' => $user['access_code']
    ));

        echo "Inscription validée";
    }
}
