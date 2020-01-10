<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Connection</title>
    <link rel="stylesheet" href="/view/stylesheets/style_header.css">
    <link rel="stylesheet" href="/view/stylesheets/style_connection.css">
  </head>
  <body>
  <?php require './view/header_accueil.php'?>

    <section>
        <img class="connection" src="/view/img/DrivingAces.png" alt="DrivingAces" width="200px">

          <form method="post" action="/user/connection">
            <p>

              <label for="mail">Adresse mail </label>
              <input type="email" name="mail" id="mail" required/>

              <label for="password">Mot de passe </label>
              <input type="password" name="password" id="password"required/></br>
              <a href="motdepasse.html"> Mot de passe oublié?</a>

              <input type="submit" value="Se connecter" /></br>


            <font size=2>
              <p> Vous n'avez pas de compte ? <a href="inscription">Inscrivez-vous.</a> </p>

              <p> * Champs obligatoires </p>
            </font>
          </form>
    </section>
    <footer>
      <a href="GCU.html"> Conditions générales d'utilisation & Règles de confidentialités </a>
      Navajo 2019(©)
    </footer>
  </body>
</html>
