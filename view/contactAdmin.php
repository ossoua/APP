<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Contacter Administrateur</title>
    <link rel="stylesheet" href="/view/stylesheets/style_Admin.css">
    <link rel="stylesheet" href="/view/stylesheets/style_header.css">

</head>
<body>

<?php require './view/header_user.php' ?>

<h1>Contacter un administrateur</h1>

<form action="/administration" method="post">
    <select name="subject">
        <option value="admin">Je souhaites devenir administrateur</option>
        <option value="test">J'ai un problème avec l'affichage de mes données de test</option>
        <option value="other">Autre demande</option>
    </select> <br><br><br>
    Veuillez préciser votre demande: <br>
    <textarea rows="10" name="message">Votre message ici...</textarea>
    <input type="submit" value="Envoyer">
</form>


<?php require './view/footer.php'?>
</body>
</html>
