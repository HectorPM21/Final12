<?php

include "conexion.php";
$Id=$_POST["ID"];

$sql="DELETE  FROM servicios where Id_Servicios=$Id";
$result=mysqli_query($conn,$sql);
//$result=mysqli_query($conn,$sql);
//$datos= array();
if($result){
echo "El registro se elimino";
}else{
	echo "No se elimino:".mysqli_error();
}
mysqli_close($conn);
//echo json_encode($datos);
?>

<!---<?php

/*include "conexion.php";
$Id=$_POST["ID"];

$sql = "DELETE servicios WHERE Id_Servicio=$Id")
//$sql="SELECT * FROM servicios where Id_Servicio=$Id";
$result=mysqli_query($conn,$sql);
$datos= array();
if($result){
$i=0;
while($fila=mysqli_fetch_assoc($result)){
	$datos[$i]=$fila;
	$i=$i+1;
	}
}else{
	echo "No se encontro ningun dato:".mysqli_error();
}
mysqli_close($conn);
echo json_encode($datos);*/
?> -->