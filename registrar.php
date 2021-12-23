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

 
    <title>Registrar</title>
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
                    <a class="nav-link" href="listado.php" target="_self">Usuarios Registrados</a>
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
            <small>id</small>
            <h2>Registro</h2>
          </div>
        </div>
        <div class="row">
          
        </div>
        <div class="row ancho">
          <div class="col col-md-10 offset-md-1 col-lg-8 offset-lg-2 pt-2 ">
            <form name="form1" action="insertar.php" method="POST">
              <div class="form-row">
                <div class="form-group col-12 col-md-6">
                  <input type="text" class="form-control" placeholder="Nombre" name="nombre" required>
                </div>

                <div class="form-group col-12 col-md-6">
                  <input type="text" class="form-control" placeholder="Apellido" name="apellido" required>
                </div>

                <div class="form-group col-12 col-md-6">
                  <input type="number" class="form-control" placeholder="DNI" name="dni" required>
                </div>

                <div class="form-group col-12 col-md-6">
                  <input type="number" class="form-control" placeholder="Telefono" name="telefono">
                </div>

                <div class="form-group col-12 col-md-12">
                  <input type="email" class="form-control" placeholder="Correo" name="correo" required> 
                </div>

                <div class="form-group col-12 col-md-12">
                  <input type="text" class="form-control" placeholder="Password" name="password" required>
                </div>
                
                <div class="form-group col-12 col-md-6">
                </div>
              </div>
             
              <div class="form-row">
                <div class="col">
                  <button type="reset" class="btn btn-codo btn-block">Borrar</button>
                </div>
                <div class="col">
                  <input type="submit" value="Registrarse"class="btn btn-codo btn-block">
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
