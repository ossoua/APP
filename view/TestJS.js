//Chargement de l'API de visualisation
google.charts.load('current', {'packages':['corechart']});


function drawChart() {

    var data = new google.visualization.DataTable();
    var table = document.getElementById('tests');

    data.addColumn('date', 'Date');
    data.addColumn('number', 'Température');

    var xaxis = document.getElementsByClassName('date');
    var yaxis = document.getElementsByClassName('value');
    console.log(xaxis[0].innerHTML);
    console.log(yaxis);

    data.addRows(xaxis.length);

    for (var i = 1; i<xaxis.length; i++){
        //On récupère les données du tableau (Date en abcisse et température en ordonnée)
        data.setCell(i-1, 0, new Date(Date.parse(xaxis[i].innerHTML)));
        data.setCell(i-1, 1, Number(yaxis[i].innerHTML.replace(/,/g, '.')));
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