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
    <br><br>
    <div class="container">

    	<div class="row">
    	<div class="col-md-3"></div>
    <div class="col-md-6">
    	<h1></h1>
    <!--inicio formulario-->
    <div class=" border border-secondary rounded text-center">
    	<div class="card">
      <div class="card-body">
        <i class="fas fa-user-plus text-primary" style="font-size: 3em;"></i>
        <h5 class="card-title">registra tu usuario</h5>
  </div>
    </div>

    <form  autocomplete="off" method="post"  id="registro">
      <div class="form-group">
        <label for="nombre">Nombre</label>
        <input name="nombre" type="text" class="form-control" id="nombre" aria-describedby="emailHelp" required>
      </div>
      <div class="form-group">
        <label for="compañia">correo</label>
        <input name="correo" type="email" class="form-control" id="correo" aria-describedby="emailHelp" required>
    	  </div>
      <div class="form-group">
        <label for="tipo">nombre de usuario</label>
        <input name="user" type="text" class="form-control" id="user" aria-describedby="emailHelp" required>

      </div>
      <div class="form-group">
        <label for="nit">contraseña</label>
        <input name="pass" type="password" class="form-control" id="pass" aria-describedby="emailHelp" required>

      </div>
      <div class="col-auto my-1 text-center" >
      	<button id="btn-registro" name="registro" type="button" class="btn btn-primary btn-lg ">registrar</button>
      </div>

    </form>
    </div>
    <!--fin formulario-->
    <h1></h1>
    </div>



    	<div class="col-md-3"></div>

    </div>
<br><br>

    <script src="../js/jquery.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/funcionregistro.js"></script>

  </body>
</html>
