<?php
include("../conexion/conect.php");
session_start();


if(isset($_POST["ok"])) {
  $nombre= $_POST["user"];
  $contra= $_POST["pass"];

  $sql="SELECT * FROM usuarios WHERE correo = '$nombre' and pass = '$contra'";
  //echo "SELECT * FROM usuarios WHERE usuario = '$nombre' and pass = '$contra'";
  $sentencia=$mysqli->query($sql);
  $rows = $sentencia->num_rows;
  $row = $sentencia->fetch_assoc();
  if($rows > 0) {
        $_SESSION["login"] = $nombre;

        header('location: index.php');
  			//header("location: welcome.php");
  			} else {
          echo "<div class='alert alert-danger' role='alert'>
Usted no es un usuario registrado en la pagina
  </div>";
  		}
  	}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
   <link rel="stylesheet" href="../css/bootstrap.css">
   <link rel="stylesheet" href="../css/master.css">
    <link rel="stylesheet" href="../css/login.css">

  </head>
  <body class="text-center">
    <form method="post" id="login" class="form-signin">
      <i class="fas fa-user-circle text-primary" style="font-size: 5em;"></i>
      <h1 class="h3 mb-3 font-weight-normal text-primary">bienvenido a mydeliveryflash</h1>
      <label for="inputEmail" class="sr-only">correo</label>
      <input type="email" name="user" id="inputEmail" class="form-control" placeholder="Correo" required autofocus>
      <label for="inputPassword" class="sr-only">contraseña</label>
      <input type="password" name="pass" id="inputPassword" class="form-control" placeholder="contraseña" required>
      <button name="ok"  class="btn btn-lg btn-primary btn-block" type="submit">iniciar sesion</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2018-2019</p>
    </form>
    <script src="../js/jquery.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.js"></script>
  </body>
</html>
