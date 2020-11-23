<?php
include("conexion.php");

$consulta="SELECT * FROM imagen ORDER BY id DESC";
$resultado=mysqli_query($conexion,$consulta);

$json=array();
while($row=mysqli_fetch_row($resultado)){
    $json[]=array(
        'id'=>$row[0],
        'imagen'=>$row[1],
        'fecha'=>$row[2]
    );
}
$jsonstring=json_encode($json);
echo $jsonstring;

mysqli_closer($conexion);
?>