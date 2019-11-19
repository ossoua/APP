<?php
class UserManager
{
  public function setUser($user)
  {
    $db = $this->dbConnect();

    $req = $db->prepare('UPDATE user SET password = :password, name = :name, first_name = :first_name, adress = :adress, mail = :mail WHERE access_code = :access_code');
    $req->execute(array(
      'password' => $user['password'],
      'name'  => $user['name'],
      'first_name' => $user['first_name'],
      'adress' => $user['adress'],
      'mail' => $user['mail'],
      'access_code' => $user['access_code']
    ));

    echo "Inscription validée";
  }
}
