<?php
abstract class Manager
{
    protected function dbConnect()
    {
        try {
            $db = new PDO('mysql:host=localhost;dbname=driving_aces;charset=utf8', 'root', 'root');
            return $db;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    protected function checkConnection($mail, $password)
    {

        $sql = "SELECT * FROM user WHERE mail='$mail'";
        $result = mysqli_query($db, $sql);
        if (mysqli_num_rows($result) > 0) {
            echo 'Utilisateur trouvé';
        }

    }
}

