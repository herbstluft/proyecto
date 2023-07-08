<?php 
 use MyApp\data\Database;
            require("vendor/autoload.php");
            $db = new Database();

      

      $sql = "SELECT * from usuarios";
//Ejecutar consulta
            $usuarios = $db->seleccionarDatos($sql);


print_r($usuarios);
?>


