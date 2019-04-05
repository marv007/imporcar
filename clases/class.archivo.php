<?php
class Archivo{
    private $idArchivo;
    private $nombre;
    private $ruta;

    

    /**
     * Get the value of ruta
     */ 
    public function getRuta()
    {
        return $this->ruta;
    }

    /**
     * Set the value of ruta
     *
     * @return  self
     */ 
    public function setRuta($ruta)
    {
        $this->ruta = $ruta;

        return $this;
    }

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of idArchivo
     */ 
    public function getIdArchivo()
    {
        return $this->idArchivo;
    }

    /**
     * Set the value of idArchivo
     *
     * @return  self
     */ 
    public function setIdArchivo($idArchivo)
    {
        $this->idArchivo = $idArchivo;

        return $this;
    }
}
?>