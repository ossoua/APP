<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>BackOffice</title>
    <link rel="stylesheet" href="/view/stylesheets/style_header.css">
    <link rel="stylesheet" href="/view/stylesheets/style_backoffice.css">

</head>
<body>
<header>
    <div id="logo" >
        <img src="./view/img/DrivingAces.png" alt="DrivingAces" width="200">
    </div>

    <div id="searchbar">
        <input type="search" placeholder="Rechercher sur le site..."/>
    </div>

    <div id="help">
        <a href="FAQ.html"><img src="./view/img/help.png" alt="help" width="25px" title="Besoin d'aide ? FAQ"></a>
    </div>

    <div id=profil>
        <img src="./view/img/account.png" alt="profil">
    </div>

    </div>
</header>

<section id="recherche">
  <div class="conteneur">
    <h1>Rechercher un utilisateur</h1>


    <input style="text-align:center;" id="search" type="text" autocomplete="off" />

    <div id="results">
        <p><strong>Utilisateurs trouvés:</strong></p>
    </div>

  </div>


</section>

<section id="données">

</section>

<section id="CGU">
  
</section>

<script src="./controller/backoffice/autocompletion.js"></script>
</body>
</html>
