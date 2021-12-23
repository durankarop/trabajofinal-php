<?php

include 'conexion.php';

$consultarTodos = "SELECT * FROM participantes";
$consultas = mysqli_query($conexion,$consultarTodos);


// $nombre = $_POST["nombre"];
// $apellido = $_POST["apellido"];
// $dni = $_POST["dni"];
// $telefono = $_POST["telefono"];
// $correo = $_POST["correo"];
// $pass = $_POST["password"];

// $insertarDatos = "INSERT INTO participantes(id_participante,nombre,apellido,dni,telefono,correo,password) VALUES(null,'$nombre','$apellido','$dni','$telefono','$correo','$pass')";

// $insertar = mysqli_query($conexion,$insertarDatos);
        
// $listadoArray = mysqli_fetch_array($consultas);

?>
<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <title>Lista de Usuarios</title>
  </head>
  <body data-spy="scroll" data-target="#navbar" data-offset="57">
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="container align-items-center">
              <img id="navbar-img" src="img/codoacodo.png" alt="" width="10%">
              <P class="nav-container_p">Conf Bs As</P>
              <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="index.html" target="_self">La conferencia</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="registrar.php" target="_self">Registrarse</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="buy-tickets" href="tickets.html" target="_self">Comprar tickets</a>
                  </li>
                </ul>
              </div>
          </div>
        </nav>
    <!-- /Header -->

    <!--Categorias-->

        <div class="row">
          <div class="col text-uppercase text-center">
            <h2>Listado de usuarios registrados</h2>
          </div>
        </div>
        <div class="row">
          
        </div>

        <div class="row">
          <div class="col col-md-10 offset-md-1 col-lg-8 offset-lg-2 pt-2">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Apellido</th>
                  <th scope="col">DNI</th>
                  <th scope="col">Teléfono</th>
                  <th scope="col">Correo</th>
                  <th scope="col">Modificar</th>
                  <th scope="col">Eliminar</th>
                  <!-- <th scope="col">Contraseña</th> -->
                </tr>               
              </thead>
              <tbody>
              <?php while($listadoArray = mysqli_fetch_array($consultas)){?> 
                <tr>
                  <td><?php echo $listadoArray['id_participante'];?></td>
                  <td><?php echo $listadoArray['nombre'];?></td>
                  <td><?php echo $listadoArray['apellido'];?></td>
                  <td><?php echo $listadoArray['dni'];?></td>
                  <td><?php echo $listadoArray['telefono'];?></td>
                  <td><?php echo $listadoArray['correo'];?></td>
                  <!-- <td><?php echo $listadoArray['password'];?></td> -->
                  <td><a href="ingresoModificar.php?id_participante=<?php echo $listadoArray['id_participante'];?>"><button class="btn btn-success">Modificar <i class="bi bi-pencil-square"></i></button></a></td>
                  <td><a href="ingresoEliminar.php?id_participante=<?php echo $listadoArray['id_participante'];?>"><button class="btn btn-danger">Eliminar <i class="bi bi-trash"></i></button></a></td>
                </tr>
                <?php  } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
    <!-- /Conviértete en orador -->

    <!-- Footer -->
    <?php 

      include 'footer.php' 

    ?>
    <!-- /Footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="index.js"></script>
  </body>
</html>
