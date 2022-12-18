<?php
include_once('../config/config.php');
include('Paciente.php');

$p = new Paciente();
$data = $p->getAll();

if ( isset($_GET['id']) && !empty($_GET['id']) ){
    $remove = $p->delete($_GET['id']);
    if ($remove){
        header('Location: '.ROOT.'/Paciente/index.php');
    }else{
        $mensaje = '<div class="alert alert-danger" role="alert" > Error al eliminar </div>';
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lista de pacientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/iniciostyle.css">
</head>
<body>
<?php include('../menu.php') ?>
    <div class="container">
        <h2 class="text-center nb-2">Nuestros Pacientes</h2>
        <div class="row">
            <?php
            while( $pt = mysqli_fetch_object($data) ){
                echo "<div class='col-6' >";
                 echo " <div class='border border-info p-2'> ";
                   echo "<h5> $pt->nombres $pt->apellidos </h5>";
                   echo "<h5> $pt->telefono</h5>";
                   echo "<div class='text-center'>";
                     echo "<a class='btn btn-success' href='".ROOT."/Paciente/edit.php?id=$pt->id' > Modificar </a> - <a class='btn btn-danger' href='".ROOT."/Paciente/index.php?id=$pt->id' >Eliminar </a>";
                   echo "</div>";
                 echo " </div> ";
                echo "</div>";
            }
            ?>
        </div>
    </div>
</body>
</html>