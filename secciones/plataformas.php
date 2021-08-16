<!doctype html >
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/styleplataf.css">

</head>

<body>



<?php 
include 'bd/plataforma.php';
include 'bd/accesobd.php';


$servidor ="localhost";
$username= "jaanelbd_joseba";
$password="Piripa.321";
$nombrebd="jaanelbd_inversiones";

$bdatos = new accesobd($servidor,$username,$password,$nombrebd);
$db= $bdatos->abrirConexion();
$querytodas = "select * from plataformas";
$todas= $db->query($querytodas);

	if($todas->num_rows>0){
		while($fila=$todas->fetch_assoc()){
				

    ?>


    <div class="inversiones">
        <div class="titulares">
                <div class="imagen">
                <img src="img/mindcapital.png"> </img>
                </div>
                <div class="filas2">
                    <div class="titulo">
                        <h2><?php echo $fila['nombre'] ?></h2>
                    </div>
                    <div class="infobasic">
                        <div class="basic">
                            Beneficio/mes = <?php echo $fila['beneficio'] ?>% <br>
                            Desde 1/12/2019 hasta ahora 
                        </div class="estado">
                        Status: <img src="img/verde.png" style="height: 60%;">
                        <div>

                        </div>
                    </div>
                </div>
                <div class="valoracion">
                    <?php include 'chartpolar.php'; ?> 
                </div>
                
            
        </div>

        <div class="contenido">
            <div class="datos">
                    <p><span>Modelo negocio:</span><?php echo $fila['modelo'] ?></p>
                    <p><span>Beneficio mensual:</span><?php echo $fila['beneficio'] ?></p>
                    <p><span>Sede Fiscal:</span>{España}</p>
                    <p><span>CEO:</span><?php echo $fila['ceo'] ?></p>                     
            </div>
            <div class="datos">
                <p><span>Inversión mínima:</span><?php echo $fila['min'] ?></p>
                <p><span>Moneda pagos/retiros:</span>{BTC}</p>
                <p><span>Moneda inversión:</span>{Dólares:$}</p>
                <p><span>Valoración BTCAcademy:</span><?php echo $fila['val'] ?></p>
                        
            </div>
            <div class="datos">
                <button>Mas información</button>
                <br>
                <button>Solicitar consultoría</button>
                <br>
                <input type="checkbox" name="comparar1" id="comparar1"> Comprar rendimientos
            </div>
        </div>

    </div>



    



        <?php 
                        }
                        }
                  
        ?>













</body>