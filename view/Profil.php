<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Mon profil</title>
    <link rel="stylesheet" href="/view/stylesheets/style_header.css">
    <link rel="stylesheet" href="/view/stylesheets/style_profil.css">


</head>
<body>

<?php require './view/header_user.php' ?>

<h1>Mon profil</h1>
<section>


    <div id="mon_profil">

        <label>Nom</label>
        <br>
        <form action="/user/profil" method="post"><input name="name" class="information" type="text" value="<?= $_SESSION['name'] ?>">
            <input type="image" src="../view/img/mode_edit.png" alt="Submit Form"/>
        </form>

        <br>
        <label>Prénom</label>
        <br>
        <form action="/user/profil" method="post"><input name="first_name" class="information" type="text"
                                                                           value="<?= $_SESSION['first_name'] ?>">
            <input type="image" src="../view/img/mode_edit.png" alt="Submit Form"/>
        </form>


        <br>
        <label>Adresse postale</label>
        <br>
        <form action="/user/profil" method="post"><input name="adress" class="information" type="text"
                                                                       value="<?= $_SESSION['adress'] ?>">
            <input type="image" src="../view/img/mode_edit.png" alt="Submit Form"/>
        </form>

        <br>
        <label>Adresse mail</label>
        <br>
        <form action="/user/profil" method="post"><input name="mail" class="information" type="text" value="<?= $_SESSION['mail'] ?>">
            <input type="image" src="../view/img/mode_edit.png" alt="Submit Form"/>
        </form>
    </div>
    <img class="personnage" src="../view/img/1.png" alt="personnage">
</section>


</body>
</html>
