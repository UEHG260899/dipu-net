<?php
require_once '../includes/navbar.php';
?>
<link rel="stylesheet" href="<?php echo $root . "/css/estilosLector.css"; ?>">
<br>
<br>
<br>
<div class="container mb-large">
    <div class="row align-items-center mt-3">
        <div class="col-md-8 offset-md-2">
            <h4>¡Actualiza tu información y continúa informándote!</h4>
        </div>
        
    </div>
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Información del lector</div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="pwd">Nombre(s):</label>
                                    <input type="text" class="form-control" id="iptNombre">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="pwd">Apellido Paterno:</label>
                                    <input type="text" class="form-control" id="iptApp">
                                </div>
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="pwd">Apellido Materno:</label>
                                    <input type="text" class="form-control" id="iptApm">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="pwd">Fecha de Nacimiento:</label>
                                    <input type="date" class="form-control" id="iptFecNac">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-lg-4 col-md-4 col-sm-12 col-12 ">
                                <button class="btn bg-boton" id="btnUpdate"><span><i class="fa fa-save"></i></span> Actualizar Información</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once '../includes/footer.php';
?>