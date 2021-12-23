<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="index.css">
        <link rel="stylesheet" href="style.css">
        

        <title>Gracias por contactarse</title>
    </head>
    <body>
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

        <!-- main -->
            <div class="container d-flex flex-column align-items-center my-4 py-3">
                <h1>La contraseña ingresada es incorrecta</h1>
                <p style="font-size: 1.3rem;">Por favor intentelo nuevamente.</p>
                <a href="listado.php"><button class="btn btn-success btn-block btne">Volver a Lista de Usuarios</button></a>
            </div>
        <!-- /main -->

        <!-- footer -->
            <?php

            include 'conexion.php';

            include 'footer.php';

            ?>
        <!-- /footer -->
    </body>
</html>