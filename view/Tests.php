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

            var data = new google.visualization.DataTable();
            var table = document.getElementById('tests');

            data.addColumn('number', 'Date');
            data.addColumn('number', 'Température');


            data.addRows(1);
            var tr = table.getElementsByTagName('tr');
            console.log(tr);

            for (var i = 0, cell; cell = tr.length; i++){
                //On récupère les données du tableau (Date en abcisse et température en ordonnée)
                var xaxis = document.getElementById('date');
                xaxis = Date.parse(xaxis);
                console.log(xaxis);
                //var xaxis = new Date(parseInt(td.eq(3).text().slice(0,4)),parseInt(td.eq(3).text().slice(5,7)),parseInt(td.eq(3).text().slice(8,10)));
                var yaxis = document.getElementById('value');
                console.log(yaxis);
            //.replace(',', '.')

                data.setCell(i, 0, xaxis);
                data.setCell(i, 1, yaxis);
            }


            var options = {
                title: 'Evolution de la température du corps',
                width: 900,
                height: 500
            }

            // Creation de la var data à partir du fichier json
            //var data = new google.visualization.DataTable(json);
            //Dessin du graphique
            var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
            chart.draw(data, options);
        }
    </script>
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
            <?= $test->display_test($data); ?>
        </tbody>
    </table>
      <div class="wraper">
          <p>Afficher mes données sous formes de graphiques</p>
          <p>Afficher les statistiques des tests</p>
          <button onclick="drawChart()">Graphiques</button>
      </div>
      <div id="chart_div"></div>



  </section>
  <footer>
    <a href="GCU.html" style="text-decoration: none"> Conditions générales d'utilisation & Règles de confidentialités </a>
    Navajo 2019(©)
  </footer>

</body>

</html>
