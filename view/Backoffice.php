<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>BackOffice</title>
    <link rel="stylesheet" href="/view/stylesheets/style_header.css">
    <link rel="stylesheet" href="/view/stylesheets/style_back.css">
    <link rel="stylesheet" href="/view/stylesheets/style_header_admin_user.css">

</head>
<body>

<?php require './view/header_admin.php'?>


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
          <caption>Utilisateurs trouvés:</caption>
          <tr>
            <td width="250px">ex:Yassine Alitou</td>
            <td width="250px"><button class="edit_btn"><img src="./view/img/mode_edit.png" alt="edit" width=15px>modifier</button>
            <button class="edit_btn"><img src="./view/img/delete.png" alt="supprimer" width=15px>supprimer</button></td>
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

    <div class="conteneur">
      <h1>Lancer un testjiefhe zh</h1>


    </div>

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
