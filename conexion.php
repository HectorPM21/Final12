<?php
$servidor="localhost";
$usuario="root";
$pwd="";
$BD="servcios_libres";

$conn=mysqli_connect($servidor,$usuario,$pwd,$BD)or die("Error al conectarse a la base de datos".mysqli_error());

/*$servidor="mysql.hostinger.mx";
$usuario="u589019594_movil";
$pwd="eyeshield1315";
$BD="u589019594_movil";

$conn=mysqli_connect($servidor,$usuario,$pwd,$BD)or die("Error al conectarse a la base de datos".mysqli_error());*/
?>
