<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>BackOffice</title>
    <link rel="stylesheet" href="/view/stylesheets/style_header.css">

</head>
<body>

<?php require './view/header_user.php'?>

<section>
    <h1>Rechercher un utilisateur</h1>


    <input id="search" type="text" autocomplete="off" />

    <div id="results">
        <p><strong>Utilisateurs trouvés:</strong></p>
    </div>

</section>
<section>
    <h1>Générer un code d'accès pour un nouvel utilisateur</h1>
</section>
<section>
    <h1>Tests</h1>
    <h2>Rechercher un test</h2>
    <h2>Lancer un test</h2>
    <form action="">
        <input type="text" name="access_code">
        <input type="checkbox" name="type">
    </form>
</section>
<section>
    <h1>FAQ</h1>
    <h2>Modifier la FAQ</h2>
</section>
<section>
    <h1>CGU</h1>
    <h2>Modifier les CGU</h2>
</section>

<script src="./controller/backoffice/autocompletion.js"></script>
</body>
</html>
