<?php

require_once 'model/Manager.php';


class ConnectionManager extends Manager
{
    protected $id,$mail, $password;

    public function __construct($mail,$password)
    {
        if ($this->checkConnection($mail,$password)) {
            $this->mail = $mail;
            $this->password = $password;
            $db = $this->dbConnect();
            $req_id = $db->prepare('SELECT id_user FROM user WHERE mail = :mail');
            $req_id->execute(array(':mail' => $mail));
            $this->id = $req_id->fetch();
        }
        else{
            throw new Exception( "Identifiants incorrects" );
        }
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }







}
