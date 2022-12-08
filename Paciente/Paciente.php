<?php 

include_once('../config/config.php');
include('../config/Database.php');

class Paciente{

   public $conexion;

   function __construct()
   {
    $db = new Database();
    $this->conexion = $db->connectToDatabase();
   }

   function save($params){
    $nombres = $params ['nombres'];
    $apellidos = $params ['apellidos'];
    $email = $params ['email'];
    $telefono = $params ['telefono'];
    $observaciones = $params ['observaciones'];


    $insert = " INSERT INTO pacientes VALUES (NULL, '$nombres', '$apellidos', '$email', '$telefono', '$observaciones') ";
    return mysqli_query($this->conexion, $insert);
   }

   function getAll(){
      $sql = "SELECT * FROM pacientes";
      return mysqli_query($this->conexion, $sql);
   }

   function getOne($id)
   {
      $sql = "SELECT * FROM Pacientes WHERE id = $id";
      return mysqli_query($this->conexion, $sql);

   }

   function update($params){
    $nombres = $params ['nombres'];
    $apellidos = $params ['apellidos'];
    $email = $params ['email'];
    $telefono = $params ['telefono'];
    $observaciones = $params ['observaciones'];
    $id = $params['id'];

    $update = "UPDATE Pacientes SET nombres='$nombres', apellidos='$apellidos', email='$email', telefono=$telefono, observaciones='$observaciones' WHERE id = $id ";
    return mysqli_query($this->conexion, $update);

   }

   function delete($id){
      $delete = "DELETE FROM Pacientes WHERE id = $id ";
      return mysqli_query($this->conexion, $delete);
   }
}

?>