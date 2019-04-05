<?php
require_once 'class.archivo.php';

    class Evento{
        private $idEvento;
        private $archivo;
        private $idCarro;
        private $titulo;
        private $descripcion;
        private $color;
        private $textColor;
        private $inicio;
        private $final;

        

        /**
         * Get the value of idEvento
         */ 
        public function getIdEvento()
        {
                return $this->idEvento;
        }

        /**
         * Set the value of idEvento
         *
         * @return  self
         */ 
        public function setIdEvento($idEvento)
        {
                $this->idEvento = $idEvento;

                return $this;
        }

        /**
         * Get the value of archivo
         */ 
        public function getArchivo()
        {
                return $this->archivo;
        }

        /**
         * Set the value of archivo
         *
         * @return  self
         */ 
        public function setArchivo($archivo)
        {
                $this->archivo = $archivo;

                return $this;
        }

        /**
         * Get the value of idCarro
         */ 
        public function getIdCarro()
        {
                return $this->idCarro;
        }

        /**
         * Set the value of idCarro
         *
         * @return  self
         */ 
        public function setIdCarro($idCarro)
        {
                $this->idCarro = $idCarro;

                return $this;
        }

        /**
         * Get the value of titulo
         */ 
        public function getTitulo()
        {
                return $this->titulo;
        }

        /**
         * Set the value of titulo
         *
         * @return  self
         */ 
        public function setTitulo($titulo)
        {
                $this->titulo = $titulo;

                return $this;
        }

        /**
         * Get the value of descripcion
         */ 
        public function getDescripcion()
        {
                return $this->descripcion;
        }

        /**
         * Set the value of descripcion
         *
         * @return  self
         */ 
        public function setDescripcion($descripcion)
        {
                $this->descripcion = $descripcion;

                return $this;
        }

        /**
         * Get the value of color
         */ 
        public function getColor()
        {
                return $this->color;
        }

        /**
         * Set the value of color
         *
         * @return  self
         */ 
        public function setColor($color)
        {
                $this->color = $color;

                return $this;
        }

        /**
         * Get the value of textColor
         */ 
        public function getTextColor()
        {
                return $this->textColor;
        }

        /**
         * Set the value of textColor
         *
         * @return  self
         */ 
        public function setTextColor($textColor)
        {
                $this->textColor = $textColor;

                return $this;
        }

        /**
         * Get the value of inicio
         */ 
        public function getInicio()
        {
                return $this->inicio;
        }

        /**
         * Set the value of inicio
         *
         * @return  self
         */ 
        public function setInicio($inicio)
        {
                $this->inicio = $inicio;

                return $this;
        }

        /**
         * Get the value of final
         */ 
        public function getFinal()
        {
                return $this->final;
        }

        /**
         * Set the value of final
         *
         * @return  self
         */ 
        public function setFinal($final)
        {
                $this->final = $final;

                return $this;
        }
    }
?>