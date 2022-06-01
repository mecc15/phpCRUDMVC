<?php
  class Empleado
  {
      private $id_emp;
      private $nombre;
      private $id_dep;

      function __construct($id_emp,$nombre,$id_dep){
          $this->id_emp=$id_emp;
          $this->nombre=$nombre;
          $this->id_dep=$id_dep;
      }

      function getId_emp(){
         return $this->id_emp;
      }
      function setId_emp($id_emp){
         $this->id_emp=$id_emp;
      } 
      function getNombre(){
          return $this->nombre;
      }
      function setNombre($nombre){
          $this->nombre=$nombre;
      }
      function getId_dep(){
          return $this->id_dep;
      }    
      function setId_dep($id_dep){
          $this->id_dep=$id_dep;
      }
  }
  

?>