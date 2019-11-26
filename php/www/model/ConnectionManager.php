<?php

require_once 'model/Manager.php';


class ConnectionManager extends Manager
{
    protected $mail, $password;

    public function __construct($mail,$password)
    {
        $this->mail = $mail;
        $this->password = $password;

        $db = $this->dbConnect();
    }
}
