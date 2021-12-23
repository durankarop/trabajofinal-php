

<?php

include 'conexion.php';



$id = $_POST['id'];
$password = $_POST['validarContraseña'];

$sql = "SELECT * FROM participantes WHERE id_participante = '$id' && password = '$password'";
$resultado = mysqli_query($conexion,$sql);


if(mysqli_num_rows($resultado) == 0 ) {
                   
    include 'error_password.php';

} else {
    
    $fila = mysqli_fetch_array($resultado);
    
?>






<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="index.css">
    <title>Modificar</title>
  </head>
  <body data-spy="scroll" data-target="#navbar" data-offset="57">
    <!-- Header -->
    <nav id="header" class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
      <div class="container">
        <a class="navbar-brand" href="#">
         
          Conf Bs As
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.html" target="_self">La conferencia</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="registrar.php" target="_self">Registrarse</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="listado.php" target="_self">Listado</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-codo" href="#" data-toggle="modal" data-target="#modalCompra">Comprar tickets</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- /Header -->

    <!--Categorias-->

        <div class="row">
          <div class="col text-uppercase text-center">
            <small>id</small>
            <h2>Modificar Usuario</h2>
          </div>
        </div>
        <div class="row">
          
        </div>
        <div class="row">
          <div class="col col-md-10 offset-md-1 col-lg-8 offset-lg-2 pt-2">


            <form action="actualizar.php" method="POST">
              <div class="form-row">
                <div class="form-group col-12 col-md-6">
                  <input type="text" class="form-control" name="nombre" placeholder="Nombre" value="<?php echo $fila['nombre']; ?>">
                </div>
                <div class="form-group col-12 col-md-6">
                  <input type="text" class="form-control" name="apellido" placeholder="Apellido" value="<?php echo $fila['apellido']; ?>">
                </div>

                <div class="form-group col-12 col-md-6">
                  <input type="text" class="form-control" name="dni" placeholder="DNI" value="<?php echo $fila['dni']; ?>">
                </div>
                <div class="form-group col-12 col-md-6">
                  <input type="text" class="form-control" name="telefono" placeholder="telefono" value="<?php echo $fila['telefono']; ?>">
                </div>

                <div class="form-group col-12 col-md-12">
                  <input type="email" class="form-control" name="correo" placeholder="Correo"  value="<?php echo $fila['correo']; ?>">
                </div>

                <div class="form-group col-12 col-md-12">
                  <input type="text" class="form-control" name="password" placeholder="password" value="<?php echo $fila['password']; ?>">
                </div>
                
                <input type="hidden" name="id" value="<?php echo $fila['id_participante'];?>">

                <div class="form-group col-12 col-md-6">
               
                </div>
              </div>

              <div class="form-row">
                <div class="col">
                  <button type="reset" class="btn btn-codo btn-block">Borrar</button>
                </div>
                <div class="col">

                  <button type="submit" id="botonCalcular"  class="btn btn-codo btn-block">Actualizar</button>
                
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- /Conviértete en orador -->

    <!-- Footer -->
    <?php

    include 'footer.php';

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
<?php } ?>
