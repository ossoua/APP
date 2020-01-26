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

              <label for="mail">Adresse mail </label>
              <input type="email" name="mail" id="mail" required/>

              <label for="password">Mot de passe </label>
              <input type="password" name="password" id="password"required/></br>
              <center><a href="/user/reset"> Mot de passe oublié?</a></center>

              <input type="submit" value="Se connecter" /></br>


              <font size=2>
              <center><p> Vous n'avez pas de compte ? <a href="inscription">Inscrivez-vous.</a> </p></center>
              <br>
              <div align="right"><p> * Champs obligatoires </p></div>

          </form>
    </section>
    
  </body>
</html>
