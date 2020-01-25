<?php

require_once '/Users/theomartinez/Cours/APP/WEB/www/model/Manager.php';


class UserManager extends Manager
{

    private $db;
    private $data;
    private $users = array();

    public function __construct()
    {
        $this->db = $this->dbConnect();
    }

    public function createUser(){
        $req = $this->db->prepare('SELECT access_code FROM user');
        $req->execute();
        $array = [];

        foreach ($req as $code){
            array_push($array,$code['access_code']);
        }

        $max = max($array);
        $access_code = $max + 1;


        $new = $this->db->prepare("INSERT INTO user (id_user, access_code, password, name, first_name, adress, mail, phone, admin) VALUES (NULL, :access_code, '', '', '', '', '', '', '0')");
        $new->execute(array(
           'access_code' => $access_code
        ));

        setcookie('newcode',$access_code);
        echo 'Nouveau code généré';
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

<<<<<<< HEAD
    public function getUsers()
=======
    function getUsers()
>>>>>>> parent of 3359ed3... Revert "Merge branch 'master' of https://github.com/ossoua/APP"
    {
        $req = $this->db->prepare('SELECT name, first_name, access_code FROM user');
        $req->execute();
        $this->data = $req;

        $i=0;
        foreach ($this->data as $row){
            $this->users[$i] = $row['first_name'] . " " . $row['name'] . " <br> Code d'accès: " . $row['access_code'];
            $i++;
        }

        return $this->users;
    }

<<<<<<< HEAD
    public function getUserInfo($access_code){
=======
    function getUserInfo($access_code){
>>>>>>> parent of 3359ed3... Revert "Merge branch 'master' of https://github.com/ossoua/APP"
        $req = $this->db->prepare('SELECT name, first_name, adress, mail, admin FROM user WHERE access_code = :access_code');
        $req->execute(array(
            'access_code' => $access_code
        ));
        $req = $req->fetch();
        return [$req['first_name'],$req['name'],$req['adress'],$req['mail'],$req['admin'],$access_code];
    }

    public function editUserName($name,$access_code)
    {
        $req = $this->db->prepare('UPDATE user SET name = :name WHERE access_code = :access_code');
        $req->execute(array(
            'name' => $name,
            'access_code' => $access_code
        ));
    }

    public function editUserFirstName($first_name,$access_code)
    {
        $req = $this->db->prepare('UPDATE user SET first_name = :first_name WHERE access_code = :access_code');
        $req->execute(array(
            'first_name' => $first_name,
            'access_code' => $access_code
        ));
    }

    public function editUserAdress($adress,$access_code)
    {
        $req = $this->db->prepare('UPDATE user SET adress = :adress WHERE access_code = :access_code');
        $req->execute(array(
            'adress' => $adress,
            'access_code' => $access_code
        ));
    }

    public function editUserMail($mail,$access_code)
    {
        $req = $this->db->prepare('UPDATE user SET mail = :mail WHERE access_code = :access_code');
        $req->execute(array(
            'mail' => $mail,
            'access_code' => $access_code
        ));
    }

    public function editUserPassword($password,$access_code)
    {
        $req = $this->db->prepare('UPDATE user SET password = :password WHERE access_code = :access_code');
        $req->execute(array(
            'password' => $password,
            'access_code' => $access_code
        ));
    }

    public function getFreeCodes(){
        $req = $this->db->prepare("SELECT access_code FROM user WHERE name = '' ");
        $req->execute();
        return $req;
    }

    public function removeUser($access_code){
        $req = $this->db->prepare('DELETE FROM user WHERE access_code = :access_code');
        $req->execute(array(
            'access_code' => $access_code
        ));
    }
}


