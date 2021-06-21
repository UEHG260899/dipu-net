<?php
require_once(realpath(dirname(__FILE__) . "../../../includes/navbar_escritor.php"));
?>
<link rel="stylesheet" href="<?php echo $root . "/css/escritor/estilos.css"; ?>">

<div class="container mb-5">
    <div class="col-12 mt-5" style="text-align:right">
        <img src="../../../img/autores/<?php echo $escritor['url_imagen']; ?>" alt=" " width="75px" height="75px"
            class="text-center mt-4 rightToLeft">
    </div>
    <div class="row justify-content-md-center mb-3 about">
        <div class="col-md-4" style="text-align:center">
            <h2>Artículo</h2>
        </div>
    </div>
    <div class="col-md-12 rightToLeft">
        <hr />
    </div>
    <!--Sección ver articulo-->
    <div class="row mb-3">
        <div class="col-md-2 col-sm-4 leftToRight" style="text-align:left">
            <button class="btn btn-sm btn-primary" onclick="$('#mostrar').slideToggle();">Vista previa </button>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card" style="display: none;" id="mostrar">
                <div class="card-body">
                    <div class="col-md-12">


                        <div id="candidato" class="row">
                            <div class="col-md-3 mt-5" style="text-align:center">
                                <p class="card-text text-center"></p>
                                <img src="../../../img/candidatos/no-image.jpg" alt="" width="150px" height="150px"
                                    class="text-center mb-4" style="box-shadow: 0 3px 10px 0 rgba(0, 0, 0, 0.2);">

                                <div class="col-12">
                                    <img src="../../../img/escritor/partido.png" alt="" width="40px" height="40px"
                                        class="text-center" style="box-shadow: 0 3px 10px 0 rgba(0, 0, 0, 0.2);">
                                </div>
                            </div>


                            <div class="col-md-9 mt-5" style="text-align:center">
                                <div class="col-md-12">
                                    <div class="card" style="box-shadow: 0 3px 10px 0 rgba(0, 0, 0, 0.1);">
                                        <div class="card-body">
                                            <div class="row justify-content-around ">
                                                <div class="col-md-4 mb-4">
                                                    <p class="card-text text-left"><strong>Nombre Completo:
                                                        </strong><br></p>
                                                    <p class="card-text text-left"></p>
                                                </div>
                                                <div class="col-md-4 mb-4">
                                                    <p class="card-text text-left">
                                                        <strong>Genero:</strong><br>
                                                    </p>
                                                    <p class="card-text text-left"></p>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <p class="card-text text-left"><strong>Fecha
                                                            Nacimiento:</strong><br>
                                                    </p>
                                                    <p class="card-text text-left"></p>
                                                </div>
                                            </div>
                                            <div class="row justify-content-center">
                                                <div class="col-md-4 mt-4">
                                                    <p class="card-text text-left"><strong>Estado
                                                            Nacimiento:</strong><br>
                                                    </p>
                                                    <p class="card-text text-left"></p>
                                                </div>
                                                <div class="col-md-4 mt-4">
                                                    <p class="card-text text-left"><strong>Municipio
                                                            Nacimiento:</strong><br>
                                                    <p class="card-text text-left"></p>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input id='idCandidato' class="validar" value="" hidden>
                                <div class="col-md-12">
                                    <div class="card" style="box-shadow: 0 3px 10px 0 rgba(0, 0, 0, 0.1);">
                                        <div class="card-body">
                                            <div class="row justify-content-around ">
                                                <div class="col-md-4 mb-4">
                                                    <p class="card-text text-left">
                                                        <strong>Carrera:</strong><br>
                                                    </p>
                                                    <p class="card-text text-left"></p>
                                                </div>
                                                <div class="col-md-4 mb-4">
                                                    <p class="card-text text-left"><strong>Escuela de
                                                            procedencia:</strong><br>
                                                    <p class="card-text text-left"></p>
                                                </div>
                                                <div class="col-md-4">
                                                    <p class="card-text text-left"><strong>Puesto
                                                            actual:</strong><br>
                                                    <p class="card-text text-left"></p>
                                                </div>
                                            </div>
                                            <div class="row justify-content-center ">
                                                <div class="col-md-4 mt-4">
                                                    <p class="card-text text-left">
                                                        <strong>Distrito:</strong><br>
                                                    </p>
                                                    <p class="card-text text-left"></p>
                                                </div>
                                                <div class="col-md-4 mt-4">
                                                    <p class="card-text text-left"><strong>Tipo de
                                                            candidatura:</strong><br>
                                                    </p>
                                                    <p class="card-text text-left"></p>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <hr />
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-4" style="text-align:left">
                                <h3>Artículo</h3>
                            </div>
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                    <div class="col-md-12" id="preArticulo">
                                   
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Fin sección ver articulo-->

    <!--Sección seleccion candidato-->
    <div class="col-md-12 rightToLeft">
        <hr />
    </div>
    <div class="row justify-content-md-center mt-5 about">
        <div class="col-md-4" style="text-align:center">
            <h2>Selección Candidato</h2>
        </div>
    </div>
    <div class="row leftToRight">
        <div class="col-md-4 col-sm-4" style="text-align:left">
            <div class="form-group">
                <label>Buscar</label>
                <div class="input-group ">
                    <input type="text" class="form-control" id="busca" placeholder="Ingrese nombre">
                    <div class="input-group-append disabled">
                        <button class="btn bg-boton" type="submit" name="submit"
                            onclick="mostrarCandidatos($('#busca').val())"><span><i
                                    class="fa fa-search"></i></span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="mb-5">
                <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

                    <!--Controls-->
                    <div class="controls-top about">
                        <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i
                                class="fas fa-chevron-left"></i></a>
                        <a class="btn-floating" href="#multi-item-example" data-slide="next"><i
                                class="fas fa-chevron-right"></i></a>
                    </div>
                    <!--/.Controls-->


                    <!--Slides-->
                    <div class="carousel-inner" role="listbox">
                        <!--slide-->
                        <div id="candidatos"></div>
                        <!---->

                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--Fin Sección seleccion candidato-->

    <div class="col-md-12">
        <hr />
    </div>
    <div class="row justify-content-md-start mt-5">
        <div class="col-md-4" style="text-align:left">
            <h4>Artículo</h4>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form id="formAgregar" class="form" action="CRUD.php" method="post">
                        <div class="form-group">
                        <div id="editor" style="width: 100%; height: 1500px; background-color: #ffffff">
                            </div>
                            <textarea id="articulo" class="form-control validar" name="articulo" rows="8"
                                style="width:100%; height:100%" hidden></textarea>

                            <div class="invalid-feedback art"></div>
                        </div>
                        <input id="opcion" name="opcion" value="" hidden class="form-control">
                        <input id="idC" name="idC" value="" hidden class="form-control">
                        <input id="idEscritor" name="idEscritor" value="<?php echo $escritor['id']; ?>" hidden
                            class="form-control">
                        <input id="operacion" name="operacion" value="crear" hidden class="form-control">

                    </form>
                    <div class="row justify-content-end mt-2">
                        <div class="col-md-5" style="text-align:right">
                            <button class="btn btn-sm bg-boton" type="submit" id="guardar">Guardar</button>
                            <button class="btn btn-sm btn-primary" type="submit" id="publicar">Publicar</button>
                            <a class="btn btn-sm btn-danger " href="<?php echo $root . '/php/escritor/home.php' ?>">Cancelar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mb-5">
        <br>
    </div>
    <div id="modalValida" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Verifique la siguiente información</h4>
                </div>
                <div class="modal-body">
                    <p>Por favor seleccione un candiato</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default bg-boton" data-dismiss="modal">Cerrar</button>
                </div>
            </div>

        </div>
    </div>
    <div id="modalElegido" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Candidato seleccionado</h4>
                </div>
                <div class="modal-body">
                    <p>Candidato seleccionado correctamente, verifique su selección en el apartado vista previa del artículo</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-boton" data-dismiss="modal">Cerrar</button>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
require_once(realpath(dirname(__FILE__) . "../../../includes/footer.php"));
?>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jodit/3.4.25/jodit.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/jodit/3.4.25/jodit.min.js"></script>

<script src="<?php echo $root . "/js/escritor/crear.js"; ?>"></script>
<script src="<?php echo $root . "/js/escritor/validaciones.js"; ?>"></script>