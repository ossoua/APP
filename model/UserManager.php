<?php

require_once 'model/Manager.php';


class UserManager extends Manager
{

    protected $db;

    public function __construct()
    {
        $this->db = $this->dbConnect();
    }

    public function setUser($name,$first_name,$adress,$mail,$access_code,$password)
    {
        $req = $this->db->prepare('UPDATE user SET password = :password, name = :name, first_name = :first_name, adress = :adress, mail = :mail WHERE access_code = :access_code');
        $req->execute(array(
      'password' => $password,
      'name'  => $name,
      'first_name' => $first_name,
      'adress' => $adress,
      'mail' => $mail,
      'access_code' => $access_code
    ));

        echo "Inscription validée";
    }
}
