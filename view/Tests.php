<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Mes tests</title>
  <link rel="stylesheet" href="/view/stylesheets/style_header.css">
  <link rel="stylesheet" href="/view/stylesheets/style_accueil.css">
  <link rel="stylesheet" href="/view/stylesheets/style_test.css">

</head>
<body>
  <header>
    <div id="logo">
    <img src="/view/img/logo_produit.png" alt="Logo Produit" width="100px">
      <img class="padding_menu" src="/view/img/DrivingAces.png" alt="DrivingAces" width="230px">
    </div>


    <div id="searchbar">
      <input type="search" placeholder="Rechercher sur le site..."/>
    </div>
    <div class="help">
      <a href="FAQ.html"><img src="/view/img/help.png" alt="Help" width="25px" title="Besoin d'aide ? FAQ"></a>
    </div>


    <div id="profil">
        <a href="/user/logout">Déconnexion</a>
        <a href="Profil.html"><img class="padding_menu" src="/view/img/account.png" alt="icone_user" width="35px"></a>
    </div>

  </header>
  <section>
    <p> Imprimer mes résultats <img src="/view/img/print.png" alt="Print" width="20px" title="Imprimer"> </p>

    <table>
      <caption> Mes tests </caption>
      <tr>
        <th width="250px">Nom du spécialiste </th>
        <th width="250px">Nom du test </th>
        <th width="600px">Résultats </th>
        <th width="150px">Date </th>
      </tr>
      <tr>
        <td>M.RICHARD</td>
        <td>Température de la peau</td>
        <td>37°</td>
        <td>25/11/2019</td>
      </tr>
      <tr>
        <td>M.RICHARD</td>
        <td>Fréquence cardiaque</td>
        <td>100bpm</td>
        <td>25/11/2019</td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>

    </table>
    <p>
      <font style="float:right">Afficher mes données sous formes de graphiques</font>
      <font style="float:left">Afficher les statistiques des tests</font>
    </p>

  </section>
  <footer>
    <a href="GCU.html" style="text-decoration: none"> Conditions générales d'utilisation & Règles de confidentialités </a>
    Navajo 2019(©)
  </footer>

</body>

</html>
