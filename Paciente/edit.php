<?php
include('../config/config.php');
include('paciente.php');

$p = new Paciente();
$dp = mysqli_fetch_object($p->getOne($_GET['id']));

if (isset($_POST) && !empty($_POST)){
    $update = $p->update($_POST);
    if ($update){
        $mensaje = '<div class="alert alert-success" role="alert" > Sesión modificada con exito. </div>';
    }else{
        $mensaje = '<div class="alert alert-danger" role="alert" > Error! </div>';
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
       <meta charset="UFT-8" /> 
       <title>Modificar sesión</title>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>
    <?php include('../menu.php') ?>
        <div class="container">
            <?php 
            if(isset($mensaje)){
                echo $mensaje;
            }
            ?>
            <h2 class="text-center nb-2">Modificar sesión</h2>
            <form method="POST" enctype="multipart/form-data" >

            <div class="row nb-2">
                <div class="col">
                    <input type="text" name="nombres" id="nombres" placeholder="Nombres del paciente" class="form-control" value="<?= $dp->nombres ?>" />
                    <input type="hidden" name="id" value="<?= $dp->id ?>" />
                </div>
                <div class="col">
                    <input type="text" name="apellidos" id="apellidos" placeholdeR="Apellidos del paciente" class="form-control" value="<?= $dp->apellidos ?>" />
                </div>
            </div>

            <div class="row nb-2">
                <div class="col">
                    <input type="email" name="email" id="email" placeholder="Email del paciente" class="form-control" value="<?= $dp->email ?>" />
                </div>
                <div class="col">
                    <input type="number" name="telefono" id="telefono" placeholdeR="Telefono del paciente" class="form-control" value="<?= $dp->telefono ?>" >
                </div>
            </div>

            <div class="row nb-2">
                <div class="col">
                    <textarea name="observaciones" id="observaciones" placeholder="Observaciones del paciente" class="form-control"> <?= $dp->observaciones ?> </textarea>
                </div>
            </div>
            <button class="btn btn-success"> Modificar </button>
            </form>
        </div>
    </body>


</html>