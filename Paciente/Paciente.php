<?php 

include_once('../config/config.php');
include('../config/Database.php');

class Paciente{

   public $conexion;

   function _construct()
   {
    $db = new Database();
    $this->conexion =$db->connectToDatabase();
   }

   function save($params){
    $nombres = $params ['nombres'];
    $apellidos = $params ['apellidos'];
    $email = $params ['email'];
    $telefono = $params ['telefono'];
    $observaciones = $params ['observaciones'];


    $insert = " INSERT INTO Pacientes VALUES (NULL, '$nombres', '$apellidos', '$email', $telefono, '$observaciones') ";
    return mysqli_query($this->conexion, $insert);
   }

}

?>