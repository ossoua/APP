<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>BackOffice</title>
    <link rel="stylesheet" href="/view/stylesheets/style_header.css">
    <link rel="stylesheet" href="/view/stylesheets/style_back.css">

</head>
<body>

<section id="section1">
    <?php require './view/header_admin.php' ?>

    <div class="wraper">
        <div class="menu">
            <a href="#section1" class="active">Gérer les utilisateurs <img src="./view/img/users.png" alt="users"
                                                                           width=20px></a>
            <a href="#section2">Lancer un test <img src="./view/img/test.png" alt="test" width=20px></a>
            <a href="#section3">Modifier la FAQ <img src="./view/img/FAQ.png" alt="FAQ" width=20px></a>
            <a href="#section4">Modifier les conditions générales de l'utilisateur <img src="./view/img/settings.png"
                                                                                        alt="settings" width=20px></a>
        </div>

        <div class="conteneur">
            <h1>Rechercher un utilisateur</h1>


            <input style="text-align:center" id="search" type="text" autocomplete="off"/>

            <div id="results">
            </div>
            <p>Générer un code d'accès pour un nouvel utilisateur</p>
        </div>
    </div>
</section>

<section id="section2">
    <div class="menu">
        <a href="#section1">Gérer les utilisateurs <img src="./view/img/users.png" alt="users" width=20px></a>
        <a href="#section2" class="active">Lancer un test <img src="./view/img/test.png" alt="test" width=20px></a>
        <a href="#section3">Modifier la FAQ <img src="./view/img/FAQ.png" alt="FAQ" width=20px></a>
        <a href="#section4">Modifier les conditions générales de l'utilisateur <img src="./view/img/settings.png"
                                                                                    alt="settings" width=20px></a>
    </div>

    <div class="conteneur">
        <h1>Lancer un test</h1>
        Code d'accès : 
        <input type="text" name="code" >
        Fréquence cardiaque :
        <div class="testForm">
          <input type="checkbox" name="cardiaque" value="Fréquence cardiaque">
        </div>
        Température de la peau :
        <div class="testForm">
          <input type="checkbox" name="cardiaque" value="">
        </div>
        Reconnaissance de tonalité :
        <div class="testForm">
          <input type="checkbox" name="cardiaque" value="">
        </div>
        Signal sonore innattendu :
        <div class="testForm">
          <input type="checkbox" name="cardiaque" value="">
        </div>
        Signal visuel répété :
        <div class="testForm">
          <input type="checkbox" name="cardiaque" value="">
        </div>
        <p>
          <a href="/view/AdminTest.php">
            <button type="button" name="test">Lancement du test</button>
          </a>
        </p>
    </div>


</section>

<section id="section3">
    <div class="menu">
        <a href="#section1">Gérer les utilisateurs <img src="./view/img/users.png" alt="users" width=20px></a>
        <a href="#section2">Lancer un test <img src="./view/img/test.png" alt="test" width=20px></a>
        <a href="#section3" class="active">Modifier la FAQ <img src="./view/img/FAQ.png" alt="FAQ" width=20px></a>
        <a href="#section4">Modifier les conditions générales de l'utilisateur <img src="./view/img/settings.png"
                                                                                    alt="settings" width=20px></a>
    </div>

    <h1>FAQ</h1>
    <h2>Modifier la FAQ</h2>
</section>

<section id="section4">

    <div class="menu">
        <a href="#section1">Gérer les utilisateurs <img src="./view/img/users.png" alt="users" width=20px></a>
        <a href="#section2">Lancer un test <img src="./view/img/test.png" alt="test" width=20px></a>
        <a href="#section3">Modifier la FAQ <img src="./view/img/FAQ.png" alt="FAQ" width=20px></a>
        <a href="#section4" class="active">Modifier les conditions générales de l'utilisateur <img
                    src="./view/img/settings.png" alt="settings" width=20px></a>
    </div>

    <h1>CGU</h1>
    <h2>Modifier les CGU</h2>
</section>

<script src="./controller/backoffice/autocompletion.js"></script>
</body>
</html>
