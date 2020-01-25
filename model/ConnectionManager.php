<?php

require_once 'model/Manager.php';


class ConnectionManager extends Manager
{
    protected $id,$mail, $password, $admin, $access_code, $name, $first_name;

    public function __construct($mail,$password)
    {
        if ($this->checkConnection($mail,$password)) {
            $this->mail = $mail;
            $this->password = $password;
            $db = $this->dbConnect();
            $req_id = $db->prepare('SELECT id_user,admin, access_code, name, first_name FROM user WHERE mail = :mail');
            $req_id->execute(array(':mail' => $mail));
            $data = $req_id->fetch();
            $this->id = $data['id_user'];
            $this->admin = $data['admin'];
            $this->access_code = $data['access_code'];
            $this->first_name = $data['first_name'];
            $this->name = $data['name'];

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

    /**
     * @return mixed
     */
    public function getAdmin()
    {
        return $this->admin;
    }

    /**
     * @return mixed
     */
    public function getAccessCode()
    {
        return $this->access_code;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->first_name;
    }











}
