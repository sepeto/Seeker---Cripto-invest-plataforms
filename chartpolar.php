<meta http-equiv="Expires" content="0"> <meta http-equiv="Last-Modified" content="0"> <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate"> <meta http-equiv="Pragma" content="no-cache">

<!doctype html >
<html>
<head>
<link rel="stylesheet" href="css/agregar.css">
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript" src="js/myCharts.js"></script>


<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<div style="width: 80px; height: 80px;">
<canvas id="myChart" style="width: 80px; height: 80px;"></canvas>
</div>






 <!-- <div id="columnchart_values" style="width: 900px; height: 300px;"></div>
<canvas id="MiGrafica" width="400" height="300">eeeeee</canvas> -->


<script>

function compuesto(inversion,rendimiento){
    var data=[inversion];
   
   for (i=1; i<5;i++){
    data.push(data[i-1]*rendimiento);
     }
    return data;
}

function lineal(inversion,rendimiento){
    var data=[inversion];
   
   for (i=1; i<5;i++){
    data.push(data[i-1]+(inversion*rendimiento-inversion));
     }
    return data;
}


var inversion= 1000;
var arbistar= 1.15;
var mindcapita=1.15;

var datarbistar= lineal(inversion,arbistar);

var datamind = compuesto(inversion,arbistar)


var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'polarArea',

    // The data for our dataset
    data: {
        
        datasets: [{
            label: 'lineal',
            backgroundColor: 'rgba(255, 99, 132,0.5)',
            borderColor: 'rgb(255, 99, 132)',
            data: datarbistar
        }, 
        ]
    },

    // Configuration options go here
    options: {}
});




</script>








</body>
</html>