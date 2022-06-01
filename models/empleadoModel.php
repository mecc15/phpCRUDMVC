<?php
require '../db/conexion.php';
require 'empleado.php';

class EmpleadoModel extends Conexion{
   public $error='';
   
   function __construct(){
       parent::__construct();
   }
   
   function getEmpleado(){
       $res=$this->con->query("select * from empleado");
       $r=array();
       while($row=$res->fetch_assoc()){
           $e=new Empleado($row[0],$row[1],$row[2]);
           $r[]=$e;
       }
       return $r;
   }

   function getDepartamento(){
       $res=$this->con->query("select * from departamento");
       $r=array();
       while($row=$res->fetch_assoc()){
           $r[]=$row;
       }
       return $r;
   }

   function insertarEmpleado($e){
         try{
             $para=$this->con->prepare("insert into empleado(id_emp,nombre,id_dep) values(?,?,?)");
             $para->bind_param('sss',$a,$b,$c);
             $a='';
             $b=$e->getNombre();
             $c=$e->getId_dep();
             $para->execute();
         }catch(Exception $e){
              echo $e;
         }finally{
             $para->close(); 
         }
    }



}

?>