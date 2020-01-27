<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Réinitialiser son mot de passe</title>
    <link rel="stylesheet" href="/view/stylesheets/style_header.css">
    <link rel="stylesheet" href="/view/stylesheets/style_connection.css">
</head>
<body>
<?php require './view/header_accueil.php' ?>

<section>
    <img style="margin-left: 43%" class="connection" src="/view/img/DrivingAces.png" alt="DrivingAces" width="200px">

    <form method="post" action="/user/reset">

        <label for="mail">Adresse mail </label>
        <input type="email" name="mail" id="mail" required/>

        <label for="mail">Confirmer adresse mail </label>
        <input type="email" name="mailConfirm" id="mail" required/>
        <br>
        <br>


        <input type="submit" value="Soumettre"/></br>

    </form>
</section>
<?php require './view/footer.php'?>
</body>
</html>

