@extends('components.layout')

@section('conteudo')
<html>
  <head>
  <link rel="stylesheet" href="{{url('css/styled_grafic.css')}}">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Reclamações', 1],
          ['Laboratorios',      4],
          ['Pcs',  4],
          ['Contato', 1],
    
        ]);

        var options = {
          title: 'Quantidade de dados',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="donutchart" style="width: 900px; height: 500px;"></div>
  </body>
</html>
@endsection