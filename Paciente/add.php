<?php 
include_once('../config/config.php');
include('Paciente.php');

if ( isset($_POST) && !empty($_POST) ){
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
       <link rel="stylesheet" href="../css/iniciostyle.css">
       <link rel="stylesheet" href="../css/contactanosstyle.css">
       <link rel="stylesheet" href="../css/mq.css">
       <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400;1,700&display=swap" rel="stylesheet">
    </head>
    <body>
    <header>
        <nav>
            <a href="/index.html"> <img src="..//imagenes/Logo.jpg" class="img-logo" width="100px" alt=""></a>
            <ul>
                <li><a href="../index.html">Inicio</a></li>
                <li><a href="../pagina2.html">Nuestros Profesionales</a></li>
                <li><a href="../Paciente/add.php">Contactanos</a></li>
            </ul>
        </nav>
    </header>
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
                    <input type="number" name="telefono" id="telefono" placeholdeR="Teléfono del paciente" class="form-control">
                </div>
            </div>

            <div class="row nb-2">
                <div class="col">
                    <textarea name="observaciones" id="observaciones" placeholder="Motivo de consulta" class="form-control"></textarea>
                </div>
            </div>
            <button class="btn btn-success">Registrar</button>
            </form>
        </div>
        <footer>
        <div class="div1">
            <h4>Mas información de la compañia</h4>
            <p>Esta compañía se dedica a la consulta psicologica de manera presencial o virtual para ayudar a problemas de salud mental, se busca una mejor calidad de vida de los pacientes.</p>
        </div>

        <div class="div2">
            <h4>Redes sociales</h4>
            <ul>
              <li><a href="#">Facebook</a></li>
              <li><a href="#">Instagram</a></li>
              <li><a href="">Twitter</a></li>
            </ul>
        </div>

        <div class="div3">
            <h4>Información contactos</h4>
            <li><a href="#">consultorioafa@gmail.com</a></li>
            <li><a href="#">601842122</a></li>
            <li><a href="#">Ak. 15 #136-55</a></li>
        </div>

    </footer>
    </body>


</html>