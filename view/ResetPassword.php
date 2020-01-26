<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Réinitialiser son mot de passe</title>
    <link rel="stylesheet" href="/view/stylesheets/style_header.css">
    <link rel="stylesheet" href="/view/stylesheets/style_connection.css">
    <link rel="stylesheet" href="/view/stylesheets/style_inscription.css">
</head>
<body>
<?php require './view/header_accueil.php' ?>

<section>
    <img class="connection" src="/view/img/DrivingAces.png" alt="DrivingAces" width="200px">
    <p>Vous avez demander une réinitialisation de mot de passe pour le compte: <?= $first_name." ".$name ?></p>

    <form method="post" action="/user/reset">

        <label for="password">Nouveau mot de passe *</label>
        <input type="password" name="password" id="password" required /></br>
        <span class="remarque">Assurez-vous qu'il comporte au moins 8 caractères</span>

        <label for="password_check">Confirmez votre mot de passe *</label>
        <input type="password" name="password_check" id="password_check" required />

        <input type="hidden" name="access_code" value="<?= $access_code ?>">
        <br>
        <br>


        <input type="submit" value="Soumettre"/></br>

        <p> * Champs obligatoires </p>

    </form>
</section>

</body>
</html>

