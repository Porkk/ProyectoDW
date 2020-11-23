<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Bootstrap JS-->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/estiloregistro.css">
</head>
<body>
    <div class="container">
      <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
          <img src="Logo.png" height="135" width="720">
        </div>
        <div class="col-2"></div>
      </div>
        <form name="formularioregistro" method="POST">
            <h1>REGISTRO</h1>
            <div class="row">
              <div class="col">
                <input type="text" class="form-control form-control-lg" placeholder="Nombre" name="nombre">
              </div>
              <div class="col">
                <input type="text" class="form-control form-control-lg" placeholder="Apellido" name="apellido">
              </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                  <input type="text" class="form-control form-control-lg" placeholder="Usuario" name="user">
                </div>
                <div class="col">
                  <input type="password" class="form-control form-control-lg" placeholder="Contraseña" name="pass">
                </div>
              </div>
            <br>
            <div class="row">
                <div class="col">
                  <button type="submit" class="btn btn-danger" name="Confirmar">Confirmar</button>
                </div>
            </div>
            <label>Ya tienes cuenta? <a href="login.html">Inicia Sesion</a></label>
          </form>
          <?php
            include("php/DatosUsuario.php");
          ?>
    </div>
</body>
</html>