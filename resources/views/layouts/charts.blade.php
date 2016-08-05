<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load Charts and the corechart and barchart packages.
      google.charts.load('current', {'packages':['corechart']});

      // Draw the pie chart and bar chart when Charts is loaded.
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Mushrooms', 3],
          ['Onions', 1],
          ['Olives', 1],
          ['Zucchini', 1],
          ['Pepperoni', 2]
        ]);

        var piechart_options = {title:'Pie Chart: How Much Pizza I Ate Last Night',
                       width:600,
                       height:300};
        var piechart = new google.visualization.PieChart(document.getElementById('piechart_div'));
        piechart.draw(data, piechart_options);

        var barchart_options = {title:'Bar chart: How Much Pizza I Ate Last Night',
                       width:600,
                       height:300,
                       legend: 'none'};
        var barchart = new google.visualization.BarChart(document.getElementById('barchart_div'));
        barchart.draw(data, barchart_options);

        var linechart_options = {title:'Line Chart: How Much Pizza I Ate Last Night',
                       width:600,
                       height:300};
        var linechart = new google.visualization.LineChart(document.getElementById('linechart_div'));
        linechart.draw(data, linechart_options);

        var columnchart_options = {title:'Column Chart: How Much Pizza I Ate Last Night',
                       width:600,
                       height:300};
        var columnchart = new google.visualization.ColumnChart(document.getElementById('columnchart_div'));
        columnchart.draw(data, columnchart_options);
        var piechart_options = {title:'Donut Chart: How Much Pizza I Ate Last Night',
                       width:600,
                       height:300,
                       pieHole: 0.5};
        var piechart = new google.visualization.PieChart(document.getElementById('donutchart_div'));
        piechart.draw(data, piechart_options);
        var piechart_options = {title:'Area Chart: How Much Pizza I Ate Last Night',
                       width:600,
                       height:300,
                       pieHole: 0.5};
        var piechart = new google.visualization.AreaChart(document.getElementById('areachart_div'));
        piechart.draw(data, piechart_options);
      }
</script>
