<?php
    require_once 'cabecalho.php'; 
    require_once 'navbar.php';
?>

<main class="container">
    <div class="container mt-5">
        <h2>Dashboard</h2>

        <div id="chart_div" style="width: 100%; height: 500px;"></div>
    </div>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Motorista', 'Número de Entregas'],
                ['João Castro', 8],
                ['Maria Oliveira', 15],
                ['Pedro Sampaio', 12],
                ['Ana Luiza Santos', 20]
            ]);

            var options = {
                title: 'Número de Entregas por Motorista',
                hAxis: {title: 'Motoristas', titleTextStyle: {color: '#333'}},
                vAxis: {minValue: 0},
                chartArea: {width: '70%', height: '70%'}
            };

            var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
            chart.draw(data, options);
        }
    </script>
</main>

<?php require_once 'rodape.php'; ?>

