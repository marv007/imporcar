<?php
  require_once 'clases/class.archivo.php';
  require_once 'clases/class.evento.php';
  require_once 'clases/manejadorEvento.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href='./css/style.css'>


    <link href='./packages/core/main.css' rel='stylesheet' />
    <link href='./packages/daygrid/main.css' rel='stylesheet' />
    <script src='./packages/core/main.js'></script>
    <script src='./packages/interaction/main.js'></script>
    <script src='./packages/daygrid/main.js'></script>
    <script src='./packages/core/locales/es.js'></script>

   

   
    <title></title>
  </head>
  
  <body>
  
  
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="position: fixed; width: 100%; top:0; z-index: 1000;">
  <a class="navbar-brand" href="#">Monterroza'simporcar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
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
      <li class="nav-item active">
        <a class="nav-link" href="#">Taller de pintura</a>
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

<?php
  if(isset($_GET["search"])){
    $mEventos = new ManejadorEvento;
    $eventos = array();
    

    $eventos = $mEventos->obtenerEventos($_GET["search"]);
    
    echo count($eventos);

?>
<br>
<!-- form de busqueda -->
     
      <h6>Verifica el estado de tu vehiculo</h6><br>
      <form class="inline d-flex justify-content-center" method="post">
        <input class="form-control mr-sm-2  col-lg-5 input" type="text" name="buscar" value="" placeholder="Ingrese número de placa">
        <button type="button" class="btn btn-primary col-lg-1 button">
        <i class="fa fa-search"></i> Buscar
        </button>
        
      </form>
  

    <br>

    <!-- Centered Pills -->
    <div class="d-flex justify-content-center">
<ul class="nav nav-pills nav-justified">
  <li class="nav-item"><a class="nav-link active" data-toggle="pill" href="#home">Álbum</a></li>
  <li class="nav-item"><a class="nav-link" data-toggle="pill" href="#menu1">Calendario</a></li>
  
</ul>
</div>
<br>


<div class="tab-content pestana" id="contenido">
  <div id="home" class="tab-pane fade show active">
    <h3><?php
    echo $_GET["search"];
    ?></h3>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
  <?php
    $longitud = count($eventos);
    for($i=0; $i<$longitud; $i++){
      ?>      
      <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i ?>"
      <?php if($i==0) echo 'class="active"'?>></li>
      <?php

    }
    ?>
    </ol>
    <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?php echo $eventos[0]->getArchivo()->getRuta() ?>">
    </div>
    <?php
    for($i=1; $i<$longitud; $i++){
      ?>
      <div class="carousel-item">
        <img class="d-block w-100" src="<?php echo $eventos[$i]->getArchivo()->getRuta() ?>" alt="<?php echo $eventos[$i]->getArchivo->getNombre ?>">
      </div>
      <?php

    }

    
  ?> 
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


  </div>

  <div id="menu1" class="tab-pane fade active">
  
    
  
    <div id="calendar" ></div>
   
    <br>



  </div>
  
  

</div>
<?php
  }else{
    ?>
    <br>
    <!-- form de busqueda -->
     <div class="busqueda">
      <h2>Verifica el estado de tu vehiculo</h2><br>
      
        <form class="inline d-flex justify-content-center" method="post">        
          <input class="form-control mr-sm-2  col-lg-5 input" type="text" name="buscar" value="" placeholder="Ingrese número de placa">
          <a class="btn btn-primary col-lg-1 button" href="taller.php?search=si"> 
          <i class="fa fa-search"></i> Buscar
          </a>
          
        </form>
     </div>
    
  

    <br>
    <br>
    <?php

  }

?>

    
<div class="jumbotron jumbotron-fluid text-center patron jumbo">
        <h2>Monterrozasimporcar</h2>
        <p class="lead">Accesorios, partes de vehiculos y más</p>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>

document.addEventListener('DOMContentLoaded', function() {
  
  var calendarEl = document.getElementById('calendar');

  var calendar = new FullCalendar.Calendar(calendarEl, {
    plugins: [ 'dayGrid'],
    locale: 'es'
  });

  calendar.render();
});

</script>
  </body>

</html>
