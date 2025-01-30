
<?php
function conectarse()
{
  $servidor = "localhost";
  $usuario = "daydream";
  $password = "modular2023";
  $db = "daydream_plaza";

  $conectar = new mysqli($servidor, $usuario, $password, $db)
    or die("no se puede conectar a la base de datos");
  return $conectar;
}
$conexion = conectarse();
?>