<?php
require_once 'class.conexion.php';
require_once 'class.evento.php';

class ManejadorEvento extends mysqli{

    public function insertarEvento(Evento $e){
        $conn = conexion::getInstance();

        
    }

    public function obtenerEventos(string $placa){
        try{
            //$conn = conexion::getInstance();
            $conn = new PDO('mysql:host=localhost;dbname=imporcars', 'root', '');

            $sql = "SELECT * FROM eventos e INNER JOIN carros c ON e.id_carro = c.id_carro INNER JOIN archivo a ON e.id_archivo = a.id_archivo WHERE c.placa= :placa";
            $resultado =$conn->prepare($sql);

            $resultado->bindValue(":placa", $placa);
            $resultado->execute();

            $existe=$resultado->rowCount();

            if($existe!=0){
                $eventos = array();
                foreach ($resultado as $rs) {
                    $e = new Evento;
                    $e->setIdEvento($rs['id_evento']);
                    $e->setTitulo($rs['titulo']);

                    $a = new Archivo;
                    $a->setIdArchivo([$rs['id_archivo']]);
                    $a->setNombre([$rs['nombre']]);
                    $a->setRuta([$rs['ruta']]);

                    $e->setArchivo($a);
                    $e->setDescripcion($rs['descripcion']);
                    $e->setColor($rs['color']);
                    //faltan propiedades


                    array_push($eventos, $e);

                

                }

            }

            $conn = null;
            return $eventos;
        }catch(exeption $e){
            die("Error :". $e->getMessage());
        }

    }
}
?>