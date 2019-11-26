<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Connection</title>
    <link rel="stylesheet" href="/view/stylesheets/style_header.css">
    <link rel="stylesheet" href="/view/stylesheets/style_connection.css">
  </head>
  <body>
    <header>
        <div id="logo">
          <img src="/view/img/logo_produit.png" alt="Logo Produit" width="100px">
          <img class="padding_menu" src="/view/img/DrivingAces.png" alt="DrivingAces" width="230px">
        </div>


        <nav>
          <ul>
            <li><a href="#page_accueil">Accueil</a></li>
            <img src="/view/img/Ligne 1.png" alt="ligne">
            <li>Découvrir DrivingAces®</li>
            <img src="/view/img/Ligne 1.png" alt="ligne">
            <li>Nous rejoindre</li>
            <img src="/view/img/Ligne 1.png" alt="ligne">
            <li>FAQ</li>
          </ul>
        </nav>


        <div id="espace_client">
            Espace client
          <img class="padding_menu" src="/view/img/user@2x.png" alt="icone_user" width="35px">
        </div>

    </header>

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
