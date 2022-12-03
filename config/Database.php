<?php 

class Database{
    public $host = 'localhost'; //Servidor
    public $user = 'root'; // Usuario de phpmyadmin
    public $pass = ''; //Contraseña de phpmyadmin
    public $db = 'contactanos'; //base de datos
    public $conexion;

    function connectToDatabase(){
        $this->conexion = mysqli_connect( $this->host, $this->user, $this->pass, $this->db );

        if (mysqli_connect_error() ) {
            echo 'Error de conexión' . mysqli_connect_error();
        }

        return $this->conexion;
    }

}
?>