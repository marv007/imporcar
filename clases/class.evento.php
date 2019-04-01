<?php

    class Evento{
        private $idEvento;
        private $idArchivo;
        private $idCarro;
        private $titulo;
        private $descripcion;
        private $color;
        private $textColor;
        private $inicio;
        private $final;

        //getters

        public function getIdEvento(){
            return $this->$idEvento;
        }

        public function getIdArchivo(){
            return $this->$idArchivo;
        }

        public function getIdCarro(){
            return $this->$idCarro;
        }

        public function getTitulo(){
            return $this->$titulo;
        }

        public function getDescripcion(){
            return $this->$descripcion;
        }

        public function getColor(){
            return $this->$color;
        }

        public function getTextColor(){
            return $this->$textColor;
        }

        public function getInicio(){
            return $this->$inicio;
        }

        public function getFinal(){
            return $this->$final;
        }

        //setters

        public function setIdEvento($idEvento){
            $this->idEvento = $idEvento;
        }

        public function setIdArchivo($idArchivo){
            $this->idArchivo = $idArchivo;
        }

        public function setIdCarro($idCarro){
            $this->idCarro = $idCarro;
        }

        public function setTitulo($titulo){
            $this->titulo = $titulo;
        }

        public function setDescripcion($descripcion){
            $this->descripcion = $descripcion;
        }

        public function setColor($color){
            $this->color = $color;
        }

        public function setTextColor($texColor){
            $this->textColor = $textColor;
        }

        public function setInicio($inicio){
            $this->inicio = $inicio;
        }

        public function setFinal($final){
            $this->final = $final;
        }

    }
?>