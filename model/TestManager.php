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
            $req->execute(array(':id_user' => $id_user['id_user']));

            return $req;
        }
        catch (PDOException $e){
            print $e->getMessage();
        }
    }

    public function display_test()
    {
        if (isset($_SESSION['id_user'])){
            $test = new TestManager();
            $data = $test->getData($_SESSION['id_user']);
            foreach ($data as $row) {
                echo '<tr>
                    <td>'.$row['id_user'].'</td>
                    <td>'.$row['nom'].'</td>
                    <td>'.$row['value'].'</td>
                    <td>'.$row['date'].'</td>
                  </tr>';

            }
        }
    }
}
