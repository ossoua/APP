<?php

require_once './model/TestManager.php';

session_start();

if (isset($_SESSION['id_user'])){
    $test = new TestManager();
}
else {
    header('Location: /user/tests');
}

function display_test()
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

