<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Devenir Administrateur</title>
    <link rel="stylesheet" href="/view/stylesheets/style_Admin.css">
    <link rel="stylesheet" href="/view/stylesheets/style_header.css">

  </head>
  <body>
    
<?php require './view/header_user.php'?>

    <h1>Devenir Administrateur</h1>

    <section>
      <form action="/controller/admin_control.php" method="post">

        <p class="marge">
            <input type="text" id="nom" name="nom" placeholder="Nom *" />
            <input type="text" id="prénom" name="nom" placeholder="Prénom *"/>
            <input type="text" id="email" name="email" placeholder="Adresse mail *"/>
            <input type="text" id="établissement" name="établissement" placeholder="établissement" />
            <input type="submit" name="envoye" value="Envoyer" />
            <font size="2"> <p style="text-align: right"> * Champs obligatoires </p> </font>
        </p>
      </form>
    </section>

    <footer>
      <a href="GCU.html"> Conditions générales d'utilisation & Règles de confidentialités </a>
      Navajo 2019(©)
    </footer>

  </body>
</html>
