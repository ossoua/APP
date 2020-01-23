<?php

require_once 'model/Manager.php';


class UserManager extends Manager
{

    protected $db;

    public function __construct()
    {
        $this->db = $this->dbConnect();
    }

    public function setUser($name, $first_name, $adress, $mail, $access_code, $password)
    {
        $req = $this->db->prepare('UPDATE user SET password = :password, name = :name, first_name = :first_name, adress = :adress, mail = :mail WHERE access_code = :access_code');
        $req->execute(array(
            'password' => $password,
            'name' => $name,
            'first_name' => $first_name,
            'adress' => $adress,
            'mail' => $mail,
            'access_code' => $access_code
        ));

        echo "Inscription validée";
    }

    public function editUserName($name)
    {
        $req = $this->db->prepare('UPDATE user SET name = :name WHERE access_code = :access_code');
        $req->execute(array(
            'name' => $name
        ));
    }

    public function editUserFirstName($first_name)
    {
        $req = $this->db->prepare('UPDATE user SET first_name = :first_name WHERE access_code = :access_code');
        $req->execute(array(
            'first_name' => $first_name
        ));
    }

    public function editUserAdress($adress)
    {
        $req = $this->db->prepare('UPDATE user SET adress = :adress WHERE access_code = :access_code');
        $req->execute(array(
            'adress' => $adress
        ));
    }

    public function editUserMail($mail)
    {
        $req = $this->db->prepare('UPDATE user SET mail = :mail WHERE access_code = :access_code');
        $req->execute(array(
            'mail' => $mail
        ));
    }

    public function editUserPassword($password)
    {
        $req = $this->db->prepare('UPDATE user SET password = :password WHERE access_code = :access_code');
        $req->execute(array(
            'password' => $password
        ));
    }
}
