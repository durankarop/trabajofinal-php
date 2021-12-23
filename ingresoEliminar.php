<?php

include 'conexion.php';

// Usamos get porque tomamos los datos desde un link.-
$id = $_GET['id_participante'];

// Hacemos la consulta usando el id recibido.-
$sql = "SELECT * FROM participantes WHERE id_participante = '$id'";
$resultado = mysqli_query($conexion, $sql);

// Array para expresar los resultados obtenidos.-
$fila = mysqli_fetch_array($resultado);

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Signin Template · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
<link href="bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
    <main class="form-signin">
    <h1>¿Está seguro que desea eliminar su usuario?</h1>
      <form action="eliminar.php" method="POST">
        <img class="mb-4" src="img/codoacodo.png" alt="" width="85" height="70">
        <h3 class="h3 mb-3 fw-normal">Por favor introduzca sus datos:</h3>

        <div class="form-floating">
          <input type="email" class="form-control" name="validarCorreo" id="floatingInput" placeholder="name@example.com" 
          value="<?php echo $fila['correo']; ?>">
          <label for="floatingInput">Dirección de Correo</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" name="validarContraseña" id="floatingPassword" placeholder="Password">
          <label for="floatingPassword">Contraseña</label>
        </div>
        <!-- Esto se utiliza para poder enviar los datos sin que lo vea el usuario -->
        <input type="hidden" name="id" value="<?php echo $fila['id_participante'];?>">
        <!-- <input type="hidden" name="pass" value="<?php echo $fila['password'];?>"> -->
        
        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me"> Recuérdame
          </label>
        </div>
        <button class="w-100 btn btn-lg btn-danger mb-1" type="submit">Eliminar</button>
        <a href="listado.php"><button class="w-100 btn btn-lg btn-primary mt-1" type="button">Volver a Lista de Usuarios</button></a>
        <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
      </form>
    </main>
  </body>
</html>
