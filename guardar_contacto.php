
<?php

$nombre = $_POST['nombre'];
$apellido_p = $_POST['apellidoP'];
$apellido_m = $_POST['apellidoM'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$dpto = $_POST['dpto'];
$servicio = $_POST['servicio'];
$msj = $_POST['mensaje'];


include "conexion_BD.php";

try {
        $consulta = "INSERT INTO solicitudes (fecha,nomb_solicitante,apellido_p,apellido_m,telefono,correo,departamento,servicio,mensaje)
                VALUES (now(),'$nombre', '$apellido_p', '$apellido_m', '$telefono', '$correo', '$dpto', '$servicio', '$msj')";
        $ejecutar_consulta = $conexion->query($consulta);
        if ($ejecutar_consulta) {
                echo "Hemos enviado tus datos, gracias por visitarnos!";
        }
} catch (Exception $e) {
        echo $e->getMessage() . " catch in\n";
        throw $e;
}
$conexion->close();



?>