<?php
use MyApp\data\Database;
            require("../../vendor/autoload.php");
            $db = new Database();

// Obtener los valores del formulario
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];

// Validar y procesar los datos
if (!empty($nombre) && !empty($correo)) {

	//Verificar si ese usuario o correo existe
	$sql = "SELECT * from usuarios where usuarios.nombre='$nombre' AND usuarios.email='$correo'";
        $verificacion_nombre_correo = $db->seleccionarDatos($sql);

	if(empty($verificacion_nombre_correo)){
		$sql= "INSERT INTO usuarios (nombre, email) VALUES ('$nombre', '$correo')";
		$db->ejecutarConsulta($sql);
	}

		header("Location: ../../index.php");
		echo "Nombre o correo existente, elija otros porfavor";
		exit();
	
}


?>
