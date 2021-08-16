<!doctype html >
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>
	body{
		background-color:green;
	}

    nav, main{
        margin:20px;
    }
	nav li{
     /*   transition: transform .2s; */
        padding: 5px 20px;
        background-color: grey;
        border: 1px solid black;
        display:inline;
    }
    nav li:hover{
        transform: scale(1.25);
        background-color: lightblue;
    }
	.cabecera{
        width:100%; 
		
    }


</style>


</head>

<body>


<header class="container-fluid cabecera">
    <nav>
        <ul>
        <li><a href="/subvenciones/index.php">Inicio</a></li>
            <li>Subenciones</li>
            <li><a href="/subvenciones/bd/crear.php">Agregar</a></li>
            <li>Contacto</li>
        </ul>

    </nav>
    <img class="cabecera" src="../img/header.jpg"> </img><br>
    <h1>Listado de nuestras plataformas de inversion</h1> <br>
</header>

<main>

<?php 
include 'plataforma.php';
include 'accesobd.php';

$servidor ="localhost";
$username= "root";
$password="";
$nombrebd="jaanelbd_inversiones";

$bdatos = new accesobd($servidor,$username,$password,$nombrebd);
$db= $bdatos->abrirConexion();



if(isset($_POST['nombre'])){$nombre=$_POST['nombre'];}
if(isset($_POST['descripcion'])){$descripcion=$_POST['descripcion'];}
if(isset($_POST['modelo'])){$modelo=$_POST['modelo'];}
if(isset($_POST['beneficio'])){$beneficio=$_POST['beneficio'];}
if(isset($_POST['ubicacion'])){$ubicacion=$_POST['ubicacion'];}
if(isset($_POST['ceo'])){$ceo=$_POST['ceo'];}
if(isset($_POST['min'])){$min=$_POST['min'];}
if(isset($_POST['val'])){$val=$_POST['val'];}
if(isset($_POST['inicio'])){$inicio=$_POST['inicio'];}
if(isset($_POST['inv[]'])){$invbtc[]=$_POST['invbtc[]'];}


echo '<br><br>registrando datos de la subveción:<br>';
echo 'nombre:'.$nombre.'; ambito: '.$modelo.'inversion en BTC?'.$invbtc;

$db->autocommit(FALSE);
$bandeira=true;


//      ADAPTAR CAMPOS... AUTOFECHA ETC...
  $insertplat = "insert into plataformas (id, nombre, descripcion,modelo,beneficio,min,val) values ($db->insert_id,'".$nombre."','".$descripcion."','".$modelo."','".$beneficio."','".$min."','".$val."')";




$result=$db->query($insertplat);

if($db->errno){
  echo "<br>fallo en el registro de plataforma(".$db->errno.')->'.$db->error."<br>";
  $bandeira=false;
}

if ($bandeira=true){
    $db->commit();
    echo "<br>plataforma registrada con exito";
  }
  else {
    $db->rollback();
    echo "<br>cambios no guardados";
  }
  
  $db->autocommit(TRUE);
  





?>

</main>


</body>

</html>