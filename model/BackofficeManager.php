<?php

require_once '/Users/theomartinez/Cours/APP/WEB/www/model/Manager.php';


class BackofficeManager extends Manager
{
    private $data;
    private $users = array();

    public function __construct(){
        $db = $this->dbConnect();

        $req = $db->prepare('SELECT name, first_name FROM user');
        $req->execute();
        $this->data = $req;
    }

    /**
     * @return mixed
     */

    /*public function getData()
    {
        return $this->data;
    }*/

    function getUsers()
    {
        $i=0;
        foreach ($this->data as $row){
            $this->users[$i] = $row['first_name'] . " " . $row['name'];
            $i++;
        }

        return $this->users;
    }



}