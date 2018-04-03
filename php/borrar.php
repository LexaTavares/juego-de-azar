
<?php
include("conexion.php");


$consulta="delete from jugadores";

$query=$bd->prepare($consulta);
$query->execute();

header("Location:comienza-juego.php");

?>

