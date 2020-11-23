<!DOCTYPE html>
<?php
include("php/conexion.php");

$consulta="SELECT * FROM imagen ORDER BY id DESC";
$resultado=mysqli_query($conexion,$consulta);
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Mi Perfil</title>
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Bootstrap JS-->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <link rel="stylesheet" type="text/css" href="css/estiloperfil.css">
</head>
<body>
    <nav class="navbar navbar-light bg-dark">
        <img src="Logo.png" height="25" width="135">
        <a class="btn btn-outline-light" href="login.html" role="button">Cerrar Sesion</a>
    </nav>
    <h1>USUARIO</h1>
    <h4>Nombre Apellido</h4></div>
    <div class="container">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <form action="" id="formularioimagen" enctype="multipart/form-data">
                    <div class="form-row">
                        <div class="custom-file mw-100">
                            <input type="file" class="custom-file-input" name="fileImg" id="fileImg" accept="image/*">
                            <label class="custom-file-label" for="customFileLang">Seleccionar Imagen</label>
                            <br>
                        </div>
                        <div id="Preview" class="col" >
                            <img src="" alt="" class="mostrarimg img-thumbnail">
                        </div>
                        
                    </div>
                    <button type="submit" class="btn btn-dark">Guardar Imagen</button>
                </form>
            </div>
            <div class="col-4"></div>
        </div><hr>
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10"><div class="MostrarImagen">
            <div class="row row-cols-1 row-cols-md-3">
                <?php
                while($row=mysqli_fetch_row($resultado)){
                    ?>
                    <div class="col-4 mb-4">
                    <div class="card bg-dark text-white">
                            <img src="img/<?php echo $row[1];?>" class="card-img">
                            <div class="card-img-overlay">
                                <p class="card-text"><?php echo $row[2];?></p>
                            </div>
                        </div>
                </div>
                    <?php
                }
                ?>
                </div>
            </div></div>
            <div class="col-1"></div>
        </div>
    </div>
    <script type="text/javascript">
        const inpFile= document.getElementById("fileImg");
        const previewContainer = document.getElementById("Preview");
        const previewImage = previewContainer.querySelector(".mostrarimg");

        inpFile.addEventListener("change", function(){
            const file= this.files[0];
            
            if(file){
                const reader = new FileReader();
                reader.addEventListener("load", function(){
                    previewImage.setAttribute("src", this.result);
                });
                reader.readAsDataURL(file);
            }
        });
    </script>
</body>
</html>