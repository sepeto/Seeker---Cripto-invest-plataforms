<meta http-equiv="Expires" content="0"> <meta http-equiv="Last-Modified" content="0"> <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate"> <meta http-equiv="Pragma" content="no-cache">

<!doctype html >
<html>
<head>
<link rel="stylesheet" href="css/agregar.css">
<link rel="stylesheet" href="css/calculadora.css">
<link rel="stylesheet" media="screen" href="css/styleparticles.css">

<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript" src="js/calculadora.js"></script>
<script type="text/javascript" src="js/functionscalculadora.js"></script>
</head>

<body>

<div id="particles-js" ></div>
<script src="js/particles.js"></script>
<script src="js/app.js"></script>

<?php include 'secciones/cabecera.php' ?>

<h1 > Compara los beneficios de tus plataformas favoritas</h1>

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
echo 'el numero de registros es '.$todas->num_rows."<br>";


$n=0;
if($todas->num_rows>0){
    while($fila=$todas->fetch_assoc()){
    
    echo    'Plataforma:   '.$fila['nombre']."- Beneficio/mes: ".$fila['beneficio']."%  -    "  ;
    
    }        
}

?>
<br>


<div class="row">
    <div class="calculadora col-md-4">
        <form id="seleccion">
            <div class="calczone">
                <div id="divinversion">
                    <FONT SIZE=3>INVERSION</FONT>-€<input type="number" name="inversion" id="inversion" value="1000"> 
                </div>    
                <div id="divtiempo">
                <FONT SIZE=3>TIEMPO</FONT>-meses <input type="number" name="tiempo" id="tiempo" value="12"> 

                </div>
            </div>
            
            <div class="calczone"> 
                <h3>Nimbus</h3>
                <select name="modelo" id="modelo">
                        <option value="">USDT</option>
                        <option value="arbitraje">BITCOIN</option>
                        <option value="masternodos">ETH</option>
                </select>
                <input type="checkbox" id="plat1" name="plat1">  Sin reinvertir</checkbox>
                <input type="checkbox" id="plat2" name="plat2">  Reinvirtiendo</checkbox>
                <input type="range" id="benef1" name="benefi1" min="0" max="25" value="9">Beneficio mensual-  %</input> 
                <input class="benefmes" type="number" name="valor1" id="valor1" value="9">
            
                <script type="text/javascript">
                    $(document).ready(function()
                    {
                        $('#benef1').change(function() {
                            $('#valor1').val($(this).val());
                        });
                    });
                </script>
                <br>
            </div>
            <div class="calczone"> 
                <h3>Mind Capital</h3>
                <select name="modelo" id="modelo">
                    <option value="">USDT</option>
                    <option value="arbitraje">BITCOIN</option>
                    <option value="masternodos">ETH</option>
                </select>
                <input type="checkbox" id="plat3" name="plat4">Sin reinvertir</checkbox>
                <input type="checkbox" id="plat4" name="plat4"> Reinvirtiendo</checkbox>
                <input type="range" id="benef2" name="benef2" min="0" max="30" value="12" >Beneficio mensual- %
                <input class="benefmes" type="number" name="valor2" id="valor2" value="12">
                
                <script type="text/javascript">
                    $(document).ready(function()
                    {
                        $('#benef2').change(function() {
                            $('#valor2').val($(this).val());
                        });
                    });
                </script>
            </div>          
            <div class="calczone">
                Valor 
                <select name="moneda" id="moneda">
                    <option value="btc">BITCOIN</option>
                    <option value="eth">ETH</option>
                </select>
                <br>
                <br>
                <div id="cotizacion">
                    <input id="valuecoin1" type="text" name="valor1" id="valor1" value="16000"> 
                    <input type="range" id="coinvalue" min="-10" max="20" value="1" >
                    <input id="valuecoin2" type="text" name="valor1" id="valor1" value="16000"><br>
                
                    <small> Precio actual</small>      <strong style="text-align:center">  Revalorización: X</strong><strong id="reval">1</strong> <small style="float:right">Precio futuro</small>
                </div>
                <br>
            </div>
        </form>


    </div>



    <div class="grafica col-md-8" >
        <canvas id="myChart" style="width: 800px; height: 500px;"></canvas>
     </div>
</div>
<div id="cajontabla">
        <!--Vamos a representar en una tabla los rendimientos de todos los rendimientos por meses -->
        <table id="calculo" class="col-md-8style=" border:1px">
            <tr>
                <td>a</td><td>Enero</td><td>Febrero</td><td>Marzo</td><td>Abril</td><td>Marzo</td><td>Abril</td><td>Mayo</td><td>Junio</td><td>Junio</td><td>Junio</td><td>Junio</td><td>Junio</td>
            </tr>
            
               
           
               <script>
                   for (var a=0;a<5;a++){
                    console.log('valor a:'+a)
                    $("#calculo ").append('<tr> <td>'+datasets[a]['label']+'</td>'); 

                        for(var i=0;i<12;i++){
                            console.log('valor i:'+i+ ' y valor a: '+a);
                            console.log('datos para la tabla: ' +datasets[a]['data'][i]);
                            $( "#calculo tr:nth-child("+(a+2)+")" ).append( '<td>'+ datasets[a]['data'][i]+'</td>' );
                        }     
                        $("#calculo tr:nth-child("+(a+2)+")").append(' </tr>');
                    }
                </script>
                
           </tr>   

        </table>
</div>

    

</body>
</html>