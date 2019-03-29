<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/master.css">
    <title>Monterroza'simporcar</title>
  </head>
  <body>
    <div class="jumbotron jumbotron-fluid text-center patron">
        <h1 class="display-4">Monterrozasimporcar</h1>
        <p class="lead">Accesorios, partes de vehiculos y más</p>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Monterroza'simporcar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="web.php?op=inicio.php">inicio<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Accesorios/Partes de vehiculos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="web.php?op=accesorios.php">Accesorios</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Partes de vehiculos</a>
          <div class="dropdown-divider"></div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="web.php?op=taller.php">Taller de pintura</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Vehiculos en transito</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="web.php?op=contact.php">Contactanos</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-danger my-2 my-sm-0" type="submit">Buscar</button>
    </form>
  </div>
</nav>
  <div class="">
    <?php
          if(isset($_GET["op"])){
              include($_GET["op"]);
          }else{
              echo "<center><p><h2>Bienvenido a Monterrozasimporcar</h2>
              <br><br>
              <div class='card-deck'>
              <div class='card border-danger'>
                <img src='productos/1.jpg' width='100px' height='200px' class='card-img-top' alt='...'>
                <div class='card-body'>
                  <h5 class='card-title'>Producto 1</h5>
                  <p class='card-text'>This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                  <p class='card-text'><small class='text-muted'>Last updated 3 mins ago</small></p>
                </div>
              </div>
              <div class='card border-danger'>
                <img src='productos/2.jpg' width='100px' height='200px' class='card-img-top' alt='...'>
                <div class='card-body'>
                  <h5 class='card-title'>Producto 2</h5>
                  <p class='card-text'>This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                  <p class='card-text'><small class='text-muted'>Last updated 3 mins ago</small></p>
                </div>
              </div>
              <div class='card border-danger'>
                <img src='productos/3.jpg' width='100px' height='200px' class='card-img-top' alt='...'>
                <div class='card-body'>
                  <h5 class='card-title'>Producto 3</h5>
                  <p class='card-text'>This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                  <p class='card-text'><small class='text-muted'>Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
              ";
          }
      ?>
      <br><br><br>
  </div>
  <footer>
    derechos reservados a
  </footer>
</body>
  <script src="js/jquery.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="js/bootstrap.js"></script>
</html>
