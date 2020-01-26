<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Mes tests</title>
    <link rel="stylesheet" href="/view/stylesheets/style_header.css">

    <link rel="stylesheet" href="/view/stylesheets/style_test.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</head>
<body>

<?php require './view/header_user.php'?>
<a href="/user/logout" style="float: right">Déconnexion</a>

  <section>
    <p> Imprimer mes résultats <img src="/view/img/print.png" alt="Print" width="20px" title="Imprimer"> </p>

    <table id="tests">
      <caption> Mes tests </caption>
        <thead>
            <tr>
                <th width="250px">Nom du spécialiste</th>
                <th width="250px">Nom du test</th>
                <th width="600px">Résultats</th>
                <th width="150px">Date</th>
            </tr>
        </thead>
        <tbody>
            <?= display_test($data); ?>
        </tbody>
    </table>
      <div class="wraper">
          <button onclick="drawChart()">Afficher mes données sour forme de graphiques</button>
      </div>
      <div id="chart_div"></div>



  </section>
  
<script src="/view/TestJS.js"></script>
</body>

</html>
