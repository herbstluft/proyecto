<?php
use MyApp\data\Database;
            require("../../vendor/autoload.php");
            $db = new Database();

// Obtener los valores del formulario
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];

// Validar y procesar los datos
if (!empty($nombre) && !empty($correo)) {

$sql = "INSERT INTO usuarios (nombre, email) VALUES ('$nombre', '$correo')";
$db->ejecutarConsulta($sql);
 
header("Location: ../../index.php");
exit();
  }


?>
