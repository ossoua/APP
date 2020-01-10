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

<?php require './view/header_user.php'?>

  <section>
    <p> Imprimer mes résultats <img src="/view/img/print.png" alt="Print" width="20px" title="Imprimer"> </p>

    <table>
      <caption> Mes tests </caption>
      <tr>
        <th width="250px">Nom du spécialiste</th>
        <th width="250px">Nom du test</th>
        <th width="600px">Résultats</th>
        <th width="150px">Date</th>
      </tr>
      <?= $test->display_test(); ?>

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
