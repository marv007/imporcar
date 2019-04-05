<?php
  require_once 'clases/class.archivo.php';
  require_once 'clases/class.evento.php';
  require_once 'clases/manejadorEvento.php';

  $me = new ManejadorEvento;

  $e = array();
  $e = $me->obtenerEventos(123456);
  echo '<img src="/home/marvin/Descargas/logo.png">';

  foreach($e as $ev){
      $a = new Archivo;
      $a = $ev->getArchivo();
      ?>
      <img src="/home/marvin/Descargas/logo.png">
      <img src="<?php
      print join(',', $a->getRuta());
      ?>">
      <?php  
      print join(',', $a->getRuta());    
      //echo $a->getRuta();

      
      //print_r($a->getRuta());
  }
?>