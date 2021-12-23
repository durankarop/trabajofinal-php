<?php
$lugarBD = "localhost";
$usuarioBD = "id17788898_durankarop";
$passBD = "Duran&987412365";
$nombreBD = "id17788898_tpfinalintegrador";

$conexion = mysqli_connect($lugarBD,$usuarioBD,$passBD,$nombreBD); 

if(mysqli_connect_errno()) {
    echo "Se ha producido un error ".mysqli_connect_errno();
}

?>