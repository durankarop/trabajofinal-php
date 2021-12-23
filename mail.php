<?php



$destino = 'srocuenta1@gmail.com';
$asunto = $_POST['asunto'];

$saltoLinea = "\n";
$nombreRemitente = $_POST['nombre'];
$apellidoRemitente = $_POST['apellido'];
$infoCuerpo = $_POST['cuerpo'];
$cuerpo = "Remitente: " . $nombreRemitente . " " . $apellidoRemitente . $saltoLinea . $infoCuerpo;


if (mail($destino, $asunto, $cuerpo)) {
    header('Location: envioCorrecto.php');
}

?>