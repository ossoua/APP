<?php

require_once 'model/Manager.php';

class TestManager extends Manager
{

  private $db;

  public function __construct()
  {
      $this->db = $this->dbConnect();
  }

    /**
     * @param $id_user
     * @return mixed
     */
    public function getData($id_user)
    {
        try{
            $req = $this->db->prepare('SELECT * FROM data WHERE id_user = :id_user');
            $req->execute(array(':id_user' => $id_user));
            return $req;
        }
        catch (PDOException $e){
            print $e->getMessage();
        }
    }



    public function getJson($id_user)
    {
        $json = array();
        try{
            $req = $this->db->prepare('SELECT value,date FROM data WHERE id_user = :id_user');
            $req->execute(array(':id_user' => $id_user));
            $json = $req -> fetchAll();
            return $json;
        }
        catch (PDOException $e){
            print $e->getMessage();
        }
    }
}
