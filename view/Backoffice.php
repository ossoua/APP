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

        </div>

        <div class="conteneur">
            <h1>Rechercher un utilisateur</h1>


            <input style="text-align:center" id="search" type="text" autocomplete="off"/>

            <div id="results">
            </div>
            <br>

            <div id="selected">
                <form  id="modify" action="/backoffice" method="post"></form>
            </div>
            <br>

            <table id="codes">
                <caption> Codes d'accès disponibles</caption>
                <thead>
                <tr>
                    <th width="250px">Code d'accès</th>
                    <th width="250px">Actions</th>
                </tr>
                </thead>
                <tbody>
                <?= displayCodes($codes) ?>
                </tbody>
            </table>

            <form action="/backoffice" method="post">
                <input type="hidden" name="ok">
                <input type="submit" value="Générer un code d'accès pour un nouvel utilisateur">
            </form>
            <br>

            <?php
            if (isset($_COOKIE['newcode']) && $_COOKIE['newcode'] != "") {
                echo "Nouvel utilisateur créé: " . $_COOKIE['newcode'] . ". Veuillez transmettre ce code au destinataire afin de permettre la création de son profil.";
                setcookie('newcode', "");
            }
            ?>
        </div>
    </div>
</section>

<section id="section2">
    <?php require './view/header_admin.php' ?>
    <div class="wraper">
        <div class="menu">
            <a href="#section1">Gérer les utilisateurs <img src="./view/img/users.png" alt="users" width=20px></a>
            <a href="#section2" class="active">Lancer un test <img src="./view/img/test.png" alt="test" width=20px></a>
            <a href="#section3">Modifier la FAQ <img src="./view/img/FAQ.png" alt="FAQ" width=20px></a>

        </div>

        <div class="conteneur">
            <h1>Lancer un test</h1>
            <form method="post" action="./controller/admintest_control.php">
            Code d'accès :
            <div class="text">
              <input type="text" name="code">
            </div>
            Fréquence cardiaque :
            <div class="testForm">
              <input type="checkbox" name="cardiaque">
            </div>
            Température de la peau :
            <div class="testForm">
              <input type="checkbox" name="peau">
            </div>
            Reconnaissance de tonalité :
            <div class="testForm">
              <input type="checkbox" name="tonalité">
            </div>
            Signal sonore innattendu :
            <div class="testForm">
              <input type="checkbox" name="son">
            </div>
            Signal visuel répété :
            <div class="testForm">
              <input type="checkbox" name="vision">
            </div>
            <p>
              <input class="lancer" type="submit" value="Lancement du test">
            </p>
          </form>
        </div>

</section>

<section id="section3">
    <?php require './view/header_admin.php' ?>
    <div class="wraper">
        <div class="menu">
            <a href="#section1">Gérer les utilisateurs <img src="./view/img/users.png" alt="users" width=20px></a>
            <a href="#section2">Lancer un test <img src="./view/img/test.png" alt="test" width=20px></a>
            <a href="#section3" class="active">Modifier la FAQ <img src="./view/img/FAQ.png" alt="FAQ" width=20px></a>

        </div>

        <div class="content">
            <h2>Modifier la FAQ</h2>

            <table id="faq">
                <thead>
                <tr>
                    <th width="250px">Questions</th>
                    <th width="250px">Réponses</th>
                    <th width="250px">Action</th>
                </tr>
                </thead>
                <tbody>
                <?= displayFAQ($faqQuestions, $faqRep, $faqId) ?>
                </tbody>
            </table>
            <button onclick="modifyFaq()">Ajouter une entrée</button>
            <form id="modifyFaq" action="/backoffice" method="post"></form>
        </div>
    </div>
</section>



<script src="./controller/backoffice/autocompletion.js"></script>
<script src="./controller/backoffice/change_faq.js"></script>
</body>
</html>
