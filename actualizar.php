<?php 

include 'conexion.php';

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$dni = $_POST['dni'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$password = $_POST['password'];


    $actualizarDatos = "UPDATE participantes SET nombre='$nombre', apellido='$apellido', dni= '$dni', telefono='$telefono', correo='$correo', password='$password'  where id_participante = '$id'";
    $actualizar = mysqli_query($conexion, $actualizarDatos);

    include 'listado.php';


// if ($actualizar = mysqli_query($conexion, $actualizarDatos) && !empty($correo) && !empty($password)) {
//     include 'listado.php';
// } else {
//     echo "Se ha producido un error".mysqli_connect_errno();
// }



?>