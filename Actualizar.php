<?php
include "conexion.php";

$id1=$_POST["ID1"];
$nom1=$_POST["Nom1"];
$dir1=$_POST["Dir1"];
$rfc1=$_POST["Rfc1"];
$tel1=$_POST["Tel1"];
$clasif1=$_POST["Clasif1"];
$foto1=$_POST["Foto1"];
$lat1=$_POST["Lat1"];
$longit1=$_POST["Long1"];

$sql=" UPDATE servicios SET 'Id_Servicio'='0','Nombre_servicio'=nom1,'Direcccion'=dir1,'RFC'=rfc1,'Telefono'=tel1,'Clasificacio'=clasif1,'Foto'=foto1,'Latitud'=lat1,'Longitud'=longit1 WHERE Id_Servicio=$id1";

$reg=mysqli_query($conn,$sql);
if($reg){
echo "ID:".$id1."Nombre:".$nom1." Dirección:".$dir1." RFC:".$rfc1." Tel:".$tel1." Clasificación:".$clasif1." Foto:".$foto1." Latitud:".$lat1." Longitud:".$longit1;
}else{
echo "Error al registrar los datos:".mysqli_error();	
}

mysqli_close($conn);
?>