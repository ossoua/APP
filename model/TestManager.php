<?php

require_once 'model/Manager.php';

class TestManager extends Manager
{

  private $data, $db;

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
            $req->execute(array(':id_user' => $id_user['id_user']));

            return $req;
        }
        catch (PDOException $e){
            print $e->getMessage();
        }
    }
}
