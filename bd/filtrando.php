<!doctype html >
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/styleplataf.css">

</head>


<script>console.log ("php filtrando going");</script>
<?php 


if(isset($_POST['search'])){$search=$_POST['search'];};
if(isset($_POST['modelo'])){$modelo=$_POST['modelo'];};
if(isset($_POST['ordenar'])){$ordenar=$_POST['ordenar'];}
else $ordenar='inicio asc';
echo 'las variables importadas son: '. $search.', '.$modelo.', '.$ordenar.'<br> ';

$orden;
if($ordenar=='recientes'){$orden='inicio asc';}
elseif($ordenar=='antiguos'){$orden='inicio desc';};

include 'plataforma.php';
include 'accesobd.php';

filtrar($search,$modelo,$orden);



function filtrar($search,$modelo,$orden){

    $servidor ="localhost";
    $username= "jaanelbd_joseba";
    $password="Piripa.321";
    $nombrebd="jaanelbd_inversiones";
    
    $bdatos = new accesobd($servidor,$username,$password,$nombrebd);
    $db= $bdatos->abrirConexion();

   $query= "select * from plataformas
                     where 
                        modelo like '%$modelo%' 
                        
                        and
                        nombre like '%$search%'
                     
                        order by $orden " ;                     

    $res= $db->query($query);
    echo "el numero de registros es ".$res->num_rows;
    if($res->num_rows>0){
           while($fila = $res->fetch_assoc()){
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
                    <?php include '../chartpolar.php'; ?> 
                </div>
                
            
        </div>

        <div class="contenido">
            <div class="datos">
                    <p><span>Modelo negocio:</span><?php echo $fila['modelo'] ?></p>
                    <p><span>Beneficio mensual:</span><?php echo $fila['beneficio'] ?></p>
                    <p><span>Sede Fiscal:</span>{Espa??a}</p>
                    <p><span>CEO:</span><?php echo $fila['ceo'] ?></p>                     
            </div>
            <div class="datos">
                <p><span>Inversi??n m??nima:</span><?php echo $fila['min'] ?></p>
                <p><span>Moneda pagos/retiros:</span>{BTC}</p>
                <p><span>Moneda inversi??n:</span>{D??lares:$}</p>
                <p><span>Valoraci??n BTCAcademy:</span><?php echo $fila['val'] ?></p>
                        
            </div>
            <div class="datos">
                <button>Mas informaci??n</button>
                <br>
                <button>Solicitar consultor??a</button>
                <br>
                <input type="checkbox" name="comparar1" id="comparar1"> Comprar rendimientos
            </div>
        </div>

    </div>

    
            <?php 
        }

    }
}


?>
