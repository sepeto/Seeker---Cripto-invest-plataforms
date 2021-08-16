<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


  <div id="chart_div"></div>
      

<script>

google.charts.load('current', {packages: ['corechart', 'line']});
google.charts.setOnLoadCallback(drawBasic);

function drawBasic() {

      var data = new google.visualization.DataTable();
      data.addColumn('number', 'Patas');
      data.addColumn('number', 'Dogs');
      data.addColumn('number', 'Putas');

      data.addRows([
   //     [0, 0 ,1],   [1, 10,1],  [2, 23,1],  [3, 17,1],  [4, 18,1],  [5, 9,1],
    //    [12, 30,20], [13, 40,20], [14, 42,20], [15, 47,20], [16, 44,20], [17, 48,20],
    //    [12, 30,20], [13, 40,20], [14, 42,20], [15, 47,20], [16, 44,20], [17, 48,20],
     //   [12, 30,20], [13, 40,20], [14, 42,20], [15, 47,20], [16, 44,20], [17, 48,20],
        [12, 30,20], [13, 40,20], [14, 42,20], [15, 47,20], [16, 44,20], [17, 48,20],
        [12, 30,20], [13, 40,20], [14, 42,20], [15, 47,20], [16, 44,20], [17, 48,20],
        [12, 30,20], [13, 40,20], [14, 42,20], [15, 47,20], [16, 44,20], [17, 48,20],
        [12, 30,20], [13, 40,20], [14, 42,20], [15, 47,20], [16, 44,20], [17, 48,20],
        [12, 30,20], [13, 40,20], [14, 42,20], [15, 47,20], [16, 44,20], [17, 48,20],
        [12, 30,20], [13, 40,20], [14, 42,20], [15, 47,20], [16, 44,20], [17, 48,20],
        [12, 30,20], [13, 40,20], [14, 42,20], [15, 47,20], [16, 44,20], [17, 48,20],
        [12, 30,20], [13, 40,20], [14, 42,20], [15, 47,20], [16, 44,20], [17, 48,20],
      ]);

      var options = {
        hAxis: {
          title: 'Time'
        },
        vAxis: {
          title: 'Popularity'
        }
      };

      var chart = new google.visualization.LineChart(document.getElementById('chart_div'));

      chart.draw(data, options);
    }
  </script>