<?php

include 'conexion.php';


$id = $_POST['id'];
$password = $_POST['validarContraseña'];

$consultarTodos = "SELECT * FROM participantes WHERE id_participante = '$id' && password = '$password'";
$consultas = mysqli_query($conexion,$consultarTodos);

if (mysqli_num_rows($consultas) == 0) {

    include 'error_password.php';

} else {

    $eliminarDatos = mysqli_query($conexion,"DELETE FROM participantes WHERE id_participante = '$id' && password = '$password'");
    $eliminar = mysqli_query($conexion, $eliminarDatos);

    include 'eliminacionCorrecta.php';

}



// $eliminar = mysqli_query($conexion, $eliminarDatos);
// if ($eliminar) {
//     include 'listado.php';
// }


?>