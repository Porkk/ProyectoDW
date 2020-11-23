<?php
include("conexion.php");

$img=$_FILES["fileImg"]["name"];

if(isset($img) && $img!=""){
    $consulta="INSERT INTO imagen (imagen,fecha) value('$img',CURDATE())";
    $resultado=mysqli_query($conexion,$consulta);
    if($resultado){
        $temp=$_FILES["fileImg"]["tmp_name"];
        move_uploaded_file($temp,'../img/'.$img);
        echo "Dato Ingresado";
    }
}
mysqli_close($conexion);
?>