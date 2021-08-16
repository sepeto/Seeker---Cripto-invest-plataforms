<!doctype html >
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="js/ordenar.js"></script>
<script src="js/buscador.js"></script>
<script src="js/filtros.js"></script>



</head>

<body>

<home>

<!--<img class="fondo" src="img/fondo.jpg"> -->

<div class="ordenar">
  Ordenar por:   
  
    <select name="ordenar" id="ordenar">
        <option value="recientes">Más recientes</option>
        <option value="antiguos">Mas antiguos</option>
        <option value="beneficio">Mayor beneficio</option>
        <option value="desbeneficio">Menor beneficio</option>
        <option value="valoración">Mayor valoración</option>
        <option value="desvaloración">Menor valoración</option>
    </select>
          

</div>


<div class="row">

    <div class="filtros col-md-3">
       <?php include 'filtros.php' ?>
    </div>



    <div id="plataformas" class="col-md-6 subs">
        <?php include 'plataformas.php' ?>

    </div>

    <div class="col-md-3 banners">
        <img src="img/comparativa.jpeg"> <br>
        <img src="img/telegram.png"><br>
        <img src="img/youtube.png"><br>
    </div>


</div>



</home>


</body>