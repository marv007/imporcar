<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
   <link rel="stylesheet" href="../css/bootstrap.css">
   <link rel="stylesheet" href="../css/master.css">
  </head>
  <body>
    <br><br><br>
    <form class="" method="post">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col" colspan="5" class="text-center">Usuarios del sistema</th>
            <th scope="col" colspan="2" class="text-center"> <button type="button" class="btn btn-success" name="button"> crear nuevo usuario</button></th>
          </tr>
          <tr>
            <th scope="col">eliminar</th>
            <th scope="col">numero de usuario</th>
            <th scope="col">Nombre</th>
            <th scope="col">correo</th>
            <th scope="col">nombre de usuario</th>
            <th scope="col">contraseña</th>
            <th scope="col">editar usuario</th>
          </tr>
        </thead>
        <tbody>
          <?php
          include("../conexion/conect.php");
          $sql2 = "SELECT * FROM usuarios";
          $sentenciados=$mysqli->query($sql2);


          while($reg=$sentenciados->fetch_assoc()){
            echo "<tr>
                  <td scope='col'><input type='checkbox' name='check_b[]' value='$reg[id_usuario]' class='' id='customCheck1'></td>
                  <td scope='col'>$reg[id_usuario]</td>
                  <td scope='col'>$reg[nombre]</td>
                  <td scope='col'>$reg[correo]</td>
                  <td scope='col'>$reg[nombre_usuario]</td>
                  <td scope='col'>$reg[pass]</td>
                  <td scope='col'><a class='btn btn-warning' href='editarusuarios.php?id=$reg[id_usuario]'><i class='fas fa-pencil-alt'></i></td>
                  </tr>";
                }
                if(isset($_POST["btn_borrar"])){
                  foreach($_POST["check_b"] as $cod_borrar)
                  {
                    $sql_borrar ="delete from usuarios where id_usuario = $cod_borrar";
                    $sentenciaborrar=$mysqli->query($sql_borrar);

                    echo "<script> document.location.href='categorias.php'</script>";
                  }
                }
          ?>
          <th colspan="7" class="text-center">
            <input type="submit" value="borrar usuario(s)" id="btn-borrar" name="btn_borrar" class="btn btn-danger btn-lg ">
          </th>
        </tbody>
      </table>
    </form>


    <script src="../js/jquery.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.js"></script>
  </body>
</html>
