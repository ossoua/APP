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
        $db = $this->dbConnect();

        $req = $db->prepare('SELECT * FROM user WHERE mail = :mail');
        $req->execute(array(':mail' => $mail));


        $count = $req->rowCount();
        if ($count > 0) {
            $req_password = $db->prepare('SELECT password FROM user WHERE mail = :mail');
            $req_password->execute(array(':mail' => $mail));
            $data = $req_password->fetch();

            if (password_verify($password,$data['password'])) {
                echo 'Utilisateur trouvé';
                return true;
            }
            else{
                echo 'Mot de passe incorrect';
            }
        }
        else{
            echo 'Utilisateur introuvable';
        }

    }

    public function charEscape($text){
        $textEncode = "";
        for ($i = 0; $i < strlen($text); $i++) {
            if ($text[$i] == '&') {
                $textEncode = $textEncode . "&amp;";
            } else if ($text[$i] == '<') {
                $textEncode = $textEncode . "&lt;";
            } else if ($text[$i] == '>') {
                $textEncode = $textEncode . "&gt;";
            } else if ($text[$i] == '"') {
                $textEncode = $textEncode . "&quot;";
            } else if ($text[$i] == "'") {
                $textEncode = $textEncode . "&#x27;";
            } else if ($text[$i] == "/") {
                $textEncode = $textEncode . "&#x2F;";
            } else {
                $textEncode = $textEncode . $text[$i];
            }
        }
        return $textEncode;
    }
}

