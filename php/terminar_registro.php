<link href="<?php echo $root_directory . '/css/styles_fin_registro.css'?>" rel="stylesheet">
<main>
    <section class="container">
        <h2 class="text-center">Terminemos de Registrarte!</h2>
        <div class="row">
            <div class="col-12">
                <div class="panel-formulario">
                    <form action="terminar_registro.php" method="POST" id="formFinRegistro">
                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="nombre">Nombre(s):</label>
                                    <input class="form-control validar" id="nombre" name="nombre" type="text"
                                        required>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="ap_pat">Apellido Paterno:</label>
                                    <input class="form-control validar" id="ap_pat" name="ap_pat"
                                        type="text" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="ap_mat">Apellido Materno:</label>
                                    <input type="text" class="form-control validar"
                                        id="ap_mat" name="ap_mat" required>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="fecha_nac">Fecha de nacimiento:</label>
                                    <input type="date" class="form-control validar"
                                        id="fecha_nac" name="fecha_nac" required>
                                </div>
                            </div>
                        </div>
                        <div class="row text-right">
                            <div class="col-12">
                                <button class="btn btn-primary" type="button" id="btnFinaliza">Guardar datos</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

<!--Modal de errores-->
<div class="modal fade" id="modalErrores">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4>
                    <i class="fa fa-lg fa-times-circle"></i>
                    Han ocurrido errores de Validación
                </h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                Para poder continuar,debe de hacer caso a las siguientes indicaciones:
                <p id="listaErrores"></p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-dismiss="modal">Aceptar</button>
            </div>
        </div>
    </div>
</div>
<!--Fin modal de errores-->