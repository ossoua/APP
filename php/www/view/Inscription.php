<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Inscription</title>
  <link rel="stylesheet" href="/view/stylesheets/style_inscription.css">
  <link rel="stylesheet" href="/view/stylesheets/style_header.css">

</head>

<body>
  <header>
    <div id="logo">
      <img src="/img/logo_produit.png" alt="Logo Produit" width="100px">
      <img class="padding_menu" src="/img/DrivingAces.png" alt="DrivingAces" width="230px">
    </div>


    <nav>
      <ul>
        <li><a href="#page_accueil">Accueil</a></li>
        <img src="/img/Ligne 1.png" alt="ligne">
        <li>Découvrir DrivingAces®</li>
        <img src="/img/Ligne 1.png" alt="ligne">
        <li>Nous rejoindre</li>
        <img src="/img/Ligne 1.png" alt="ligne">
        <li>FAQ</li>
      </ul>
    </nav>


    <div id="espace_client">
      <a href="/user/inscription">Espace client</a>
      <img class="padding_menu" src="/img/user@2x.png" alt="icone_user" width="35px">
    </div>

  </header>

  <section>
    <h1> Créez votre compte</h1>

    <form method="post" action="/user/inscription">

      <label for="name">Nom *</label>
      <input type="text" name="name" id="name" autofocus required />

      <label for="first_name">Prénom *</label>
      <input type="text" name="first_name" id="first_name" required />

      <label for="adress">Adresse postale *</label>
      <input type="text" name="adress" id="adress" required />

      <label for="mail">Adresse mail *</label>
      <input type="email" name="mail" id="mail" required />

      <label for="password">Mot de passe *</label>
      <input type="password" name="password" id="password" required /></br>
      <span class="remarque">Assurez-vous qu'il comporte au moins 8 caractères, y compris un chiffre et une lettre majuscule</span>

      <label for="password_check">Confirmez votre mot de passe *</label>
      <input type="password" name="password_check" id="password_check" required />

      <label for="access_code">Code d'accès *</label>
      <input type="text" name="access_code" id="access_code" required /></br>

      <input type="checkbox" name="conditions" id="conditions" required />
      <label for="conditions" class=inline>J'ai lu et j'accepte les <a href="GCU.html">conditions générales d'utilisation</a> </label>

      <input type="submit" value="S'inscrire" /></br>


      <font size=2>
        <p> Vous avez déjà un compte ? <a href="/user/connexion">Connectez-vous</a> </p>

        <p> * Champs obligatoires </p>
      </font>


    </form>
  </section>
  <footer>
  </footer>

</body>

</html>
