<?php

require_once './model/Manager.php';


class BackofficeManager extends Manager
{
    private $data;
    public function __construct(){
        $db = $this->dbConnect();

        $req = $db->prepare('SELECT name, first_name FROM user');
        $req->execute();
        $this->data = $req;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    function display_users()
    {
        foreach ($this->data as $row) {
            echo '<br>
                    <td>'.$row['name'].'</td>
                    <td>'.$row['first_name'].'</td>
                    </br>
                  </tr>';
        }
    }



}