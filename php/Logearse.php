<?php
include("conexion.php");

$usuario=$_POST['user'];
$contra=$_POST['pass'];

$consulta="SELECT * FROM usuario WHERE usuario = '$usuario' AND contra = '$contra'";
$resultado=mysqli_query($conexion,$consulta);

$verificacion=mysqli_num_rows($resultado);
if($verificacion == 1){
    header("Location: https://localhost/Proyecto/index.php");
}
else if($verificacion == 0){
    //echo '<script type="text/javascript">alert("Ha ocurrido un error");</script>';
    header("Location: https://localhost/Proyecto/login.html");
}

mysqli_close($conexion);
?>