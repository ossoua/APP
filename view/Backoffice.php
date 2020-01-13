<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>BackOffice</title>
    <link rel="stylesheet" href="/view/stylesheets/style_header.css">
    <link rel="stylesheet" href="/view/stylesheets/style_back.css">
    <link rel="stylesheet" href="/view/stylesheets/style_header_admin.css">

</head>
<body>

<?php require './view/header_admin.php'?>
<a href="/user/logout" style="float: right">Déconnexion</a>

  </div>
  <section id="section1">

    <div class="menu">
      <a href="#section1" class="active">Gérer les utilisateurs  <img src="./view/img/users.png" alt="users" width=20px></a>
      <a href="#section2">Lancer un test  <img src="./view/img/test.png" alt="test" width=20px></a>
      <a href="#section3">Modifier la FAQ  <img src="./view/img/FAQ.png" alt="FAQ" width=20px></a>
      <a href="#section4">Modifier les conditions générales de l'utilisateur <img src="./view/img/settings.png" alt="settings" width=20px></a>
    </div>

    <div class="conteneur">
      <h1>Rechercher un utilisateur</h1>


      <input style="text-align:center;" id="search" type="text" autocomplete="off" />

      <div id="results">
        <table>
          <caption><strong>Utilisateurs trouvés:</strong></caption>
          <tr>
            <th width="250px">Utilisateurs</th>
            <th colspan="2" width="250px">Modification</th>
          </tr>
          <tr>
            <td width="250px">ex:Yassine Alitou</td>
            <td width="125px"><img src="./view/img/mode_edit.png" alt="edit" width=15px> modifier</td>
            <td width="125px"><img src="./view/img/delete.png" alt="supprimer" width=15px>supprimer</td>
          </tr>
        </table>

      </div>

      Générer un code d'accès pour un nouvel utilisateur
    </div>




  </section>

  <section id="section2">
    <div class="menu">
      <a href="#section1">Gérer les utilisateurs  <img src="./view/img/users.png" alt="users" width=20px></a>
      <a href="#section2" class="active">Lancer un test  <img src="./view/img/test.png" alt="test" width=20px></a>
      <a href="#section3">Modifier la FAQ  <img src="./view/img/FAQ.png" alt="FAQ" width=20px></a>
      <a href="#section4">Modifier les conditions générales de l'utilisateur <img src="./view/img/settings.png" alt="settings" width=20px></a>
    </div>

    <h1>Tests</h1>
    <h2>Rechercher un test</h2>
    <h2>Lancer un test</h2>
    <form action="">
        <input type="text" name="access_code">
        <input type="checkbox" name="type">
    </form>
  </section>

  <section id="section3">
    <div class="menu">
      <a href="#section1">Gérer les utilisateurs  <img src="./view/img/users.png" alt="users" width=20px></a>
      <a href="#section2">Lancer un test  <img src="./view/img/test.png" alt="test" width=20px></a>
      <a href="#section3" class="active">Modifier la FAQ  <img src="./view/img/FAQ.png" alt="FAQ" width=20px></a>
      <a href="#section4">Modifier les conditions générales de l'utilisateur <img src="./view/img/settings.png" alt="settings" width=20px></a>
    </div>

      <h1>FAQ</h1>
      <h2>Modifier la FAQ</h2>
  </section>

  <section id="section4">

    <div class="menu">
      <a href="#section1" >Gérer les utilisateurs  <img src="./view/img/users.png" alt="users" width=20px></a>
      <a href="#section2">Lancer un test  <img src="./view/img/test.png" alt="test" width=20px></a>
      <a href="#section3">Modifier la FAQ  <img src="./view/img/FAQ.png" alt="FAQ" width=20px></a>
      <a href="#section4" class="active">Modifier les conditions générales de l'utilisateur <img src="./view/img/settings.png" alt="settings" width=20px></a>
    </div>

      <h1>CGU</h1>
      <h2>Modifier les CGU</h2>
  </section>

<script src="./controller/backoffice/autocompletion.js"></script>
</body>
</html>
