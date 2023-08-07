<?php 
 use MyApp\data\Database;
            require("vendor/autoload.php");
            $db = new Database();

      

      $sql = "SELECT * from usuarios";
//Ejecutar consulta
            $usuarios = $db->seleccionarDatos($sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>

      <!--Boostrap-->   
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
      <!--Boostrap--> 

      <link rel="stylesheet" href="boostrap/css/style.css">

</head>
<body>
      

<form method="POST" action="src/scripts/registrar.php" class="login">

<h2 style="font-weight: 700; text-align:center">Bienvenido <img width="40" height="40" src="https://img.icons8.com/emoji/48/waving-hand-emoji.png" alt="waving-hand-emoji"/> </h2>
<h4 style="font-weight: 100;color: #575757bb; font-size:16px; text-align:center">Ingrese sus datos y registrese. </h4>

<br>

<div class="form-floating mb-3">
  <input type="text" class="form-control input" id="floatingInput" name="nombre" placeholder="name@example.com" required>
  <label style="color: #575757bb;" for="floatingInput">Nombre Completo</label>
</div>


<div class="form-floating mb-3">
  <input type="email" class="form-control input" id="floatingInput" name="correo" placeholder="name@example.com" required>
  <label style="color: #575757bb;" for="floatingInput">Correo Electronico</label>
</div>


<center><button type="sumbit" style="   background:  rgba(0, 128, 255, 0.316); padding:3%; border:none;
    backdrop-filter: blur(20px);" class="btn btn-primary">Registrarme</button></center>
</form>



<?php foreach($usuarios as $usuario){

      echo "Nombre: ".$usuario['nombre']." ----- >";
      echo "Correo: ".$usuario['email']. "<br>";
}
?>


</body>
</html>

