<!doctype html >
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<?php

class accesobd{
private $servidor;
private $username;
private $password;
private $nombrebd;


  public function __construct($serv,$user,$pass,$nombd){
  //definir valores
  
  $this->servidor=$serv;
  $this->username=$user;
  $this->password=$pass;
  $this->nombrebd=$nombd;


  
  }

  public function abrirConexion(){
    $db = new mysqli($this->servidor, $this->username, $this->password, $this->nombrebd);

    // Check connection
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }
return $db;

  }

  
  public function cerrarConexion($db){
    $db->close();
    echo "se ha cerrado la base de datos";
  }
}
 ?>
