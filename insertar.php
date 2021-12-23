<?php
// Abrimos la conexión.-
include 'conexion.php';

// Mediante estas variables camptamos los datos enviados.-
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$dni = $_POST["dni"];
$telefono = $_POST["telefono"];
$correo = $_POST["correo"];
$pass = $_POST["password"];

// Consultamos que dni o correo no existan actualmente en la BD.-
$duplicados = "SELECT * FROM participantes WHERE correo = '$correo' || dni = '$dni'";
$evitarDuplicados = mysqli_query($conexion, $duplicados);

// Condicional para insertar datos nuevos (correo/dni no duplicados) en la BD.-
if (mysqli_num_rows($evitarDuplicados) > 0) {

    include 'error_usuario.php';

} else {

    $insertarDatos = "INSERT INTO participantes(id_participante,nombre,apellido,dni,telefono,correo,password) VALUES(null,'$nombre','$apellido','$dni','$telefono','$correo','$pass')";
    $insertar = mysqli_query($conexion,$insertarDatos);

    include 'listado.php';

}

mysqli_close($conexion);



// echo "<pre>";
// var_dump($insertarDatos);
// echo "</pre>";

// if ($insertar = mysqli_query($conexion,$insertarDatos)) {

//     include 'listado.php';

//     } else {
//         echo "Se ha producido un error ".mysqli_connect_error();
//     }

?>