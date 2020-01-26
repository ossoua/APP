<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Inscription</title>
  <link rel="stylesheet" href="/view/stylesheets/style_inscription.css">
  <link rel="stylesheet" href="/view/stylesheets/style_header.css">

</head>

<body>

    <?php require './view/header_accueil.php'?>

  <section>
      <h1> Créez votre compte</h1>
      <p class="error"><?php echo $_SESSION['error'] ?></p>

      <form action="">

      </form>

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
      <span class="remarque">Assurez-vous qu'il comporte au moins 8 caractères</span>

      <label for="password_check">Confirmez votre mot de passe *</label>
      <input type="password" name="password_check" id="password_check" required />

      <label for="access_code">Code d'accès *</label>
      <input type="text" name="access_code" id="access_code" required /></br>

      <input type="checkbox" name="conditions" id="conditions" required />
      <label for="conditions" class=inline>J'ai lu et j'accepte les <a href="GCU.php">conditions générales d'utilisation</a> </label>

      <input type="submit" value="S'inscrire" /></br>


      <font size=2>
        <p> Vous avez déjà un compte ? <a href="/user/connection">Connectez-vous</a> </p>

        <p> * Champs obligatoires </p>
      </font>


    </form>
  </section>

</body>

</html>
