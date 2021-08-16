<meta http-equiv="Expires" content="0"> <meta http-equiv="Last-Modified" content="0"> <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate"> <meta http-equiv="Pragma" content="no-cache">

<!doctype html >
<html>
<head>
<link rel="stylesheet" href="css/agregar.css">

</head>

<body>

<?php include 'secciones/cabecera.php' ?>

<h1 > Agregar nuevas plataformas de inversion</h1>

<form class="agregar" method="POST" action="bd/new.php" >
    
<input name="nombre" id="nombre" placeholder="Nombre de la plataforma">
    <br>
    <input name="descripcion" id="descripcion" placeholder="Descripción de la plataforma de inversion">
    <br>
    <input type="number" name="beneficio" id="beneficio" placeholder="Beneficio mensual">
    <br>
    <select name="modelo" id="modelo">
        <option value="" disabled selected>Modelo de negocio </option>
        <option value="arbitraje">Trading arbitraje</option>
        <option value="MasterNodos">Masterndos</option>
    </select>
    <br>
    <select name="ubicacion" id="ubicación">
        <option value="" disabled selected >Ubicación fiscal </option>
        <option value="España">España </option>
        <option value="Inglaterra">Inglaterra </option>
        <option value="Estonia">Estonia </option>
    </select>
    <br>
    <input name="ceo" id="ceo" placeholder="CEO">
  <div class="pago">
        <h3>Moneda de pago y retiro              </h3><br>
            <input type="checkbox" id="pago[]" name="pago[]" value="btc">
        <label for="btc"> Bitcoin</label>
        <input type="checkbox" id="pago[]" name="pago[]" value="eth">
        <label for="eth"> Etherum</label>
        <input type="checkbox" id="pago[]" name="pago[]" value="dollar">
        <label for="dollar"> Dollar</label><br>
  </div>

  <div class="inversion">
        <h3>Moneda de la inversion             </h3><br>
            <input type="checkbox" id="inv[]" name="inv[]" value="btc">
        <label for="btc"> Bitcoin</label>
        <input type="checkbox" id="inv[]" name="inv[]" value="eth">
        <label for="eth"> Etherum</label>
        <input type="checkbox" id="inv[]" name="inv[]" value="dollar">
        <label for="dollar"> Dollar</label><br>
  </div>

  

  
    <input type="number" name="min" id="min" placeholder="Inversion mínima">
    <br>
    <input type="number" name="val" id="val" placeholder="Valoración criptoacademy">
    <br>
        
   
    
    <br>
    <span class="fechatitle">Fecha Inicio</span><input type="date" id="inicio" name="fin" value="fecha de inicio de la subvencion">
    
    
    <br>
    
    <input type="submit" value="Crear nueva subvención">
    <button class="buttonform btn btn-primary" type="button" id="buscar" value="buscar">Buscar</button>
</form>


</body>
</html>