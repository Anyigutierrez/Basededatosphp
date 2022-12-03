<?php 
include_once('../config/config.php');
include('Paciente.php');

if (isset($_POST) && !empty($_POST) ){
    $p = new Paciente();


$save = $p->save($_POST);
if ($save){
    $mensaje = '<div class="alert alert-success" > Sesión registrada</div>';
}else{
    $mensaje = '<div class="alert alert-danger" > Error al registrar! </div>';
  }

}
?>

<!DOCTYPE html>
<html>
    <head>
       <meta charset="UFT-8" /> 
       <title>Registrar sesión</title>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <?php 
            if(isset($mensaje)){
                echo $mensaje;
            }
            ?>
            <h2 class="text-center nb-2">Registrar sesión</h2>
            <form method="POST" enctype="multipart/form-data" >

            <div class="row nb-2">
                <div class="col">
                    <input type="text" name="nombres" id="nombres" placeholder="Nombres del paciente" class="form-control"/>
                </div>
                <div class="col">
                    <input type="text" name="apellidos" id="apellidos" placeholdeR="Apellidos del paciente" class="form-control">
                </div>
            </div>

            <div class="row nb-2">
                <div class="col">
                    <input type="email" name="email" id="email" placeholder="Email del paciente" class="form-control"/>
                </div>
                <div class="col">
                    <input type="number" name="telefono" id="telefono" placeholdeR="Telefono del paciente" class="form-control">
                </div>
            </div>

            <div class="row nb-2">
                <div class="col">
                    <textarea name="observaciones" id="observaciones" placeholder="Observaciones del paciente" class="form-control"></textarea>
                </div>
            </div>
            <button class="btn btn-success">Registrar</button>
            </form>
        </div>
    </body>


</html>