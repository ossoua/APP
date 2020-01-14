<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Mes tests</title>
    <link rel="stylesheet" href="/view/stylesheets/style_header.css">
    <link rel="stylesheet" href="/view/stylesheets/style_accueil.css">
    <link rel="stylesheet" href="/view/stylesheets/style_test.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript">
        //Chargement de l'API de visualisation
        google.charts.load('current', {'packages':['corechart']});

        //Run quand l'API est appelée
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var jsonData = $.ajax({
                url: "getData.php",
                dataType: "json",
                async: false
            }).responseText;

            // Creation de la var data à partir du fichier json
            var data = new google.visualization.DataTable(jsonData);
            //Dessin du graphique
            var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
            chart.draw(data, {width: 400, height: 240});
        }
    </script>
</head>
<body>

<?php require './view/header_user.php'?>
<a href="/user/logout" style="float: right">Déconnexion</a>

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
      <?= $test->display_test($data); ?>
    </table>
      <div class="wraper">
          <p>Afficher mes données sous formes de graphiques</p>
          <p>Afficher les statistiques des tests</p>
      </div>



  </section>
  <footer>
    <a href="GCU.html" style="text-decoration: none"> Conditions générales d'utilisation & Règles de confidentialités </a>
    Navajo 2019(©)
  </footer>

</body>

</html>
