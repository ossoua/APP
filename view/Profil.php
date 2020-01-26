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


<section>
    <div id="photo_profil">
        <h3>Bonjour <?= $_SESSION['first_name'] . " " . $_SESSION['name'] ?></h3>
        <div class="photo">
            <form action="/user/profil" method="post">
                <input type="file" name="photo">
                <input type="image" src="../view/img/mode_edit.png" alt="Submit Form"/>
            </form>
            <img src="/view/img/add_photo.png" alt="photo de profil" width="50%">
        </div>

    </div>

    <div id="mon_profil">

        <label>Nom</label>
        <br>
        <form action="/user/profil" method="post" name="name"><input class="information" type="text" value="<?= $_SESSION['name'] ?>">
            <input type="image" src="../view/img/mode_edit.png" alt="Submit Form"/>
        </form>

        <br>
        <label>Prénom</label>
        <br>
        <form action="/user/profil" method="post" name="first_name"><input class="information" type="text"
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
        <form action="/user/profil" method="post" name="mail"><input class="information" type="text" value="<?= $_SESSION['mail'] ?>">
            <input type="image" src="../view/img/mode_edit.png" alt="Submit Form"/>
        </form>
    </div>
</section>


</body>
</html>
