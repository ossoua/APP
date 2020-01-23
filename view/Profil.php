<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Mon profil</title>
  <link rel="stylesheet" href="stylesheets/style_header.css">
  <link rel="stylesheet" href="stylesheets/style_accueil.css">
  <link rel="stylesheet" href="stylesheets/style_profil.css">
  


</head>
<body>

<?php require './view/header_user.php'?>


  <section>
    <h3>Bonjour, [nom prénom]</h3>
    <div id="mon_profil">

      <label>Nom</label>
      <div class="information"><button class="edit_btn"><img src="../view/img/mode_edit.png"></button></div>

      <label>Prénom</label>
      <div class="information"><button class="edit_btn"><img src="../view/img/mode_edit.png"></button></div>

      <label>Adresse postale</label>
      <div class="information"><button class="edit_btn"><img src="../view/img/mode_edit.png"></button></div>

      <label>Adresse mail</label>
      <div class="information"><button class="edit_btn"><img src="../view/img/mode_edit.png"></button></div>

      <label>Mot de passe</label>
      <div class="information"><button class="edit_btn"><img src="../view/img/mode_edit.png"></button></div>
    </div>
  </section>

  <footer>
    <a href="GCU.html"> Conditions générales d'utilisation & Règles de confidentialités </a>
    Navajo 2019(©)
  </footer>

</body>
</html>