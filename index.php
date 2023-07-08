<?php 
 use MyApp\data\Database;
            require("vendor/autoload.php");
            $db = new Database();

      

      $sql = "SELECT * from usuarios";
//Ejecutar consulta
            $usuarios = $db->seleccionarDatos($sql);


print_r($usuarios);
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
      

<form method="POST" class="login">

<h2 style="font-weight: 700; text-align:center">Te registras coachoncito? 
<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="red" class="bi bi-hearts" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M4.931.481c1.627-1.671 5.692 1.254 0 5.015-5.692-3.76-1.626-6.686 0-5.015Zm6.84 1.794c1.084-1.114 3.795.836 0 3.343-3.795-2.507-1.084-4.457 0-3.343ZM7.84 7.642c2.71-2.786 9.486 2.09 0 8.358-9.487-6.268-2.71-11.144 0-8.358Z"/>
</svg>
</h2>
<br>

<div class="form-floating mb-3">
  <input type="text" class="form-control input" id="floatingInput" placeholder="name@example.com">
  <label style="color: #575757bb;" for="floatingInput">Nombre Completo</label>
</div>


<div class="form-floating mb-3">
  <input type="email" class="form-control input" id="floatingInput" placeholder="name@example.com">
  <label style="color: #575757bb;" for="floatingInput">Correo Electronico</label>
</div>


<center><button type="button" style="   background:  rgba(0, 128, 255, 0.316); padding:3%; border:none;
    backdrop-filter: blur(20px);" class="btn btn-primary">Registrarme</button></center>
</form>



<table class="table  table-hover">
<thead>
    <tr>
      <th scope="col">Nombre Completo</th>
      <th scope="col">Correo Electronico</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Mark</td>
      <td>Otto</td>
    </tr>
    <tr>

      <td>Jacob</td>
      <td>Thornton</td>
    </tr>

  </tbody>
</table>



</body>
</html>

