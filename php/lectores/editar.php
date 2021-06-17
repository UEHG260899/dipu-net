<?php
require_once '../includes/navbar.php';
?>

<?php

session_start();

if (isset($_SESSION['id_lector'])) {

    $servidor = "localhost";
    $usuarioBD = "root";
    $pwdBD = "";
    $nomBD = "examen-u5";

    $idLector = $_SESSION['id_lector'];

    $db = mysqli_connect($servidor, $usuarioBD, $pwdBD, $nomBD);

    if (!$db) {
        
        die("La conexión fallo: ". mysqli_connect_error());
    }
    else{
        
        $sql = "SELECT nombre,
                       ap_paterno,
                       ap_materno,
                       fecha_nacimiento
                  FROM lector
                 WHERE id = '$idLector'";

        $resultado = mysqli_query($db, $sql);

        if ($resultado->num_rows == 1) {
            
            $lector = mysqli_fetch_assoc($resultado);
            
        }  
            
    }
}
else{

}

?>

<link rel="stylesheet" href="<?php echo $root . "/css/estilosLector.css"; ?>">
<br>
<br>
<br>
<div class="container mb-large">
    <div class="row align-items-center mt-3">
        <div class="col-md-8 offset-md-2">
            <h4>¡Actualiza tu información y continúa leyendo!</h4>
        </div>
        
    </div>
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-boton">Información del lector</div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="iptNombre">Nombre(s):</label>
                                    <input type="text" class="form-control" id="iptNombre" value="<?php echo $lector['nombre']?>" required> 
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="iptApp">Apellido Paterno:</label>
                                    <input type="text" class="form-control" id="iptApp" value="<?php echo $lector['ap_paterno']?>" required>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="iptApm">Apellido Materno:</label>
                                    <input type="text" class="form-control" id="iptApm" value="<?php echo $lector['ap_materno']?>" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="iptFecNac">Fecha de Nacimiento:</label>
                                    <input type="date" class="form-control" id="iptFecNac" value="<?php echo $lector['fecha_nacimiento']?>" required>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5 text-right">
                            <div class="col-md-12">
                                <button class="btn bg-boton" id="btnUpdate"><span><i class="fa fa-save"></i></span> Actualizar Información</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal validacion -->
<div class="modal fade" id="mdlValidacion">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header ">
                <h4>
                    <i class="fa fa-times-circle"></i> ¡Datos erróneos!
                </h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                Estimado lector, favor de verificar lo siguiente:<br><br>
                <ul id="listaErrores">
                    
                </ul>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-dismiss="modal"><i class="fa fa-check-circle"></i> Aceptar</button>
            </div>
        </div>
    </div>
</div>

<!--Fin Modal validacion -->

<!-- Modal resultado -->
<div class="modal fade" id="mdlResultado">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header ">
                <h4>
                    ¡Información Actualizada!
                </h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>Estimado lector, su información ha sido actualizada de manera correcta.</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-dismiss="modal"><i class="fa fa-pen"></i> Volver a editar</button>
                <button class="btn bg-boton" data-dismiss="modal" id="btnAceptarEdit"><i class="fa fa-check-circle"></i> Aceptar</button>
            </div>
        </div>
    </div>
</div>

<!--Fin Modal resultado -->

<!--Formulario para redirigir -->

<form action="../articulo/catalogo.php" method="get" id="formGetCatalogo">

</form>
<!--Fin Formulario para redirigir -->

<?php
require_once '../includes/footer.php';
?>

<script src="../../js/lector/editar_functions.js"></script>