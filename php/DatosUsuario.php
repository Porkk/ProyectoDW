<?php
include("conexion.php");

if(isset($_POST['Confirmar'])){
    if(strlen($_POST['nombre'])>=1 && strlen($_POST['apellido'])>=1 && strlen($_POST['user'])>=1 && strlen($_POST['pass'])>=1){
        $nombre=trim($_POST['nombre']);
        $apellido=trim($_POST['apellido']);
        $usuario=trim($_POST['user']);
        $contra=trim($_POST['pass']);
        $consulta="INSERT INTO usuario(usuario, contra, nombre, apellido) values('$usuario','$contra','$nombre','$apellido')";
        $resultado=mysqli_query($conexion,$consulta);
        header("Location: https://localhost/Proyecto/index.php");
    }
    else{
        echo '<script type="text/javascript">alert("Llene todos los campos por favor.");</script>';
    }
}

mysqli_close($conexion);
?>