<?php
require_once(realpath(dirname(__FILE__) . "../../../includes/navbar_escritor.php"));
?>
<link rel="stylesheet" href="<?php echo $root . "/css/escritor/estilos.css"; ?>">

<div class="container mb-5">
    <div class="col-12 mt-5" style="text-align:right">
        <img src="../../../img/avatar.png" alt="" width="65px" height="65px" class="text-center mt-4">
    </div>
    <div class="row justify-content-md-center mb-3">
        <div class="col-md-4" style="text-align:center">
            <h2>Artículo</h2>
        </div>
    </div>
    <div class="col-md-12">
        <hr />
    </div>
    <!--Sección ver articulo-->
    <div class="row mb-3">
        <div class="col-md-2 col-sm-4" style="text-align:left">
            <button class="btn btn-sm btn-primary" onclick="$('#mostrar').slideToggle();">Ver Artículo</button>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card" id="mostrar">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3 mt-5" style="text-align:center">
                            <p class="card-text text-center">Jose Antonio</p>

                            <img src="../../../img/avatar.png" alt="" width="150px" height="150px"
                                class="text-center mb-4 ">
                            <div class="col-12">
                                <img src="../../../img/partidos/iconos/pan.png" alt="" width="40px" height="40px"
                                    class="text-center">
                            </div>
                        </div>
                        <div class="col-md-9 mt-5" style="text-align:center">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row justify-content-around ">
                                            <div class="col-md-4 mb-4">
                                                <p class="card-text text-left"><strong>Nombre Completo:</strong><br></p>
                                                <p class="card-text text-left"></p>
                                            </div>
                                            <div class="col-md-4 mb-4">
                                                <p class="card-text text-left"><strong>Genero:</strong><br></p>
                                                <p class="card-text text-left"></p>
                                            </div>
                                            <div class="col-md-4 ">
                                                <p class="card-text text-left"><strong>Fecha Nacimiento:</strong><br>
                                                </p>
                                                <p class="card-text text-left"></p>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-md-4 mt-4">
                                                <p class="card-text text-left"><strong>Estado Nacimiento:</strong><br>
                                                </p>
                                                <p class="card-text text-left"></p>
                                            </div>
                                            <div class="col-md-4 mt-4">
                                                <p class="card-text text-left"><strong>Municipio
                                                        Nacimiento:</strong><br></p>
                                                <p class="card-text text-left"></p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row justify-content-around ">
                                            <div class="col-md-4 mb-4">
                                                <p class="card-text text-left"><strong>Carrera:</strong><br></p>
                                                <p class="card-text text-left"></p>
                                            </div>
                                            <div class="col-md-4 mb-4">
                                                <p class="card-text text-left"><strong>Escuela de
                                                        procedencia:</strong><br></p>
                                                <p class="card-text text-left"></p>
                                            </div>
                                            <div class="col-md-4">
                                                <p class="card-text text-left"><strong>Puesto actual:</strong><br></p>
                                                <p class="card-text text-left"></p>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center ">
                                            <div class="col-md-4 mt-4">
                                                <p class="card-text text-left"><strong>Distrito:</strong><br></p>
                                                <p class="card-text text-left"></p>
                                            </div>
                                            <div class="col-md-4 mt-4">
                                                <p class="card-text text-left"><strong>Tipo de candidatura:</strong><br>
                                                </p>
                                                <p class="card-text text-left"></p>
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
                                        <textarea id="w3review" name="w3review" rows="12"
                                            style="width:100%; height:100%" disabled="disabled"></textarea>
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
    <div class="col-md-12">
        <hr />
    </div>
    <div class="row justify-content-md-center mt-5">
        <div class="col-md-4" style="text-align:center">
            <h2>Crear Artículo</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-sm-4" style="text-align:left">
            <form>
                <div class="form-group">
                    <label>Buscar</label>
                    <div class="input-group ">
                        <input type="text" class="form-control" placeholder="Ingrese nombre">
                        <div class="input-group-append disabled">
                            <button class="btn bg-boton" type="submit"><span><i
                                        class="fa fa-search"></i></span></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="mb-5">
                <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

                    <!--Controls-->
                    <div class="controls-top">
                        <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i
                                class="fas fa-chevron-left"></i></a>
                        <a class="btn-floating" href="#multi-item-example" data-slide="next"><i
                                class="fas fa-chevron-right"></i></a>
                    </div>
                    <!--/.Controls-->

                    <!--Indicators
            <ol class="carousel-indicators" style="text-align: center;">
                <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
                <li data-target="#multi-item-example" data-slide-to="1"></li>
            </ol>
            /.Indicators-->

                    <!--Slides-->
                    <div class="carousel-inner" role="listbox">

                        <!--First slide-->
                        <div class="carousel-item active ">

                            <div class="col-md-3" style="float:left">
                                <div class="card" style="border-radius: 10px;">
                                    <div class="card-header">
                                        <p class="card-text text-left">Jose Antonio Garcia Garcia</p>
                                    </div>
                                    <div class="d-flex align-self-end">
                                        <img src="../../../img/partidos/iconos/pan.png" alt="" width="50px"
                                            height="50px" class="po">
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex justify-content-center">

                                            <img src="../../../img/avatar.png" alt="" width="200px" height="200px"
                                                class="text-center">
                                        </div>
                                        <p class="card-text text-left">Tipo candidatura:</p>
                                        <p class="card-text text-left">Distrito:</p>
                                        <div class="row justify-content-center mt-2">
                                            <div class="col-md-5" style="text-align:center">
                                                <button class="btn btn-sm bg-boton">Elegir</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3" style="float:left">
                                <div class="card" style="border-radius: 10px;">
                                    <div class="card-header">
                                        <p class="card-text text-left">Jose Antonio Garcia Garcia</p>
                                    </div>
                                    <div class="d-flex align-self-end">
                                        <img src="../../../img/partidos/iconos/pan.png" alt="" width="50px"
                                            height="50px" class="po">
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex justify-content-center">

                                            <img src="../../../img/avatar.png" alt="" width="200px" height="200px"
                                                class="text-center">
                                        </div>
                                        <p class="card-text text-left">Tipo candidatura:</p>
                                        <p class="card-text text-left">Distrito:</p>
                                        <div class="row justify-content-center mt-2">
                                            <div class="col-md-5" style="text-align:center">
                                                <button class="btn btn-sm bg-boton">Elegir</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3" style="float:left">
                                <div class="card" style="border-radius: 10px;">
                                    <div class="card-header">
                                        <p class="card-text text-left">Jose Antonio Garcia Garcia</p>
                                    </div>
                                    <div class="d-flex align-self-end">
                                        <img src="../../../img/partidos/iconos/pan.png" alt="" width="50px"
                                            height="50px" class="po">
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex justify-content-center">

                                            <img src="../../../img/avatar.png" alt="" width="200px" height="200px"
                                                class="text-center">
                                        </div>
                                        <p class="card-text text-left">Tipo candidatura:</p>
                                        <p class="card-text text-left">Distrito:</p>
                                        <div class="row justify-content-center mt-2">
                                            <div class="col-md-5" style="text-align:center">
                                                <button class="btn btn-sm bg-boton">Elegir</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3" style="float:left">
                                <div class="card" style="border-radius: 10px;">
                                    <div class="card-header">
                                        <p class="card-text text-left">Jose Antonio Garcia Garcia</p>
                                    </div>
                                    <div class="d-flex align-self-end">
                                        <img src="../../../img/partidos/iconos/pan.png" alt="" width="50px"
                                            height="50px" class="po">
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex justify-content-center">

                                            <img src="../../../img/avatar.png" alt="" width="200px" height="200px"
                                                class="text-center">
                                        </div>
                                        <p class="card-text text-left">Tipo candidatura:</p>
                                        <p class="card-text text-left">Distrito:</p>

                                        <div class="row justify-content-center mt-2">
                                            <div class="col-md-5" style="text-align:center">
                                                <button class="btn btn-sm bg-boton">Elegir</button>
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
    </div>
    <!--Fin Sección seleccion candidato-->

    <div class="col-md-12">
        <hr />
    </div>
    <div class="row justify-content-md-start mt-5">
        <div class="col-md-4" style="text-align:left">
            <h4>Crear Artículo</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3" style="text-align:center">
                            <p class="card-text text-center">Jose Antonio</p>

                            <img src="../../../img/avatar.png" alt="" width="150px" height="150px"
                                class="text-center mb-4 ">
                            <div class="col-12">
                                <img src="../../../img/partidos/iconos/pan.png" alt="" width="40px" height="40px"
                                    class="text-center">
                            </div>
                        </div>
                        <div class="col-md-8 mt-5">
                            <div class="row justify-content-around ">
                                <div class="col-md-4 mb-4">
                                    <p class="card-text text-left"><strong>Carrera:</strong><br></p>
                                    <p class="card-text text-left"></p>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <p class="card-text text-left"><strong>Escuela de
                                            procedencia:</strong><br></p>
                                    <p class="card-text text-left"></p>
                                </div>
                                <div class="col-md-4">
                                    <p class="card-text text-left"><strong>Puesto actual:</strong><br></p>
                                    <p class="card-text text-left"></p>
                                </div>
                            </div>
                            <div class="row justify-content-center ">
                                <div class="col-md-4 mt-4">
                                    <p class="card-text text-left"><strong>Distrito:</strong><br></p>
                                    <p class="card-text text-left"></p>
                                </div>
                                <div class="col-md-4 mt-4">
                                    <p class="card-text text-left"><strong>Tipo de candidatura:</strong><br>
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
    <div class="row justify-content-md-start mt-5">
        <div class="col-md-4" style="text-align:left">
            <h4>Artículo</h4>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <textarea id="w3review" class="form-control" name="w3review" rows="12" style="width:100%; height:100%"></textarea>

                    <div class="row justify-content-end mt-2">
                        <div class="col-md-5" style="text-align:right">
                            <button class="btn btn-sm bg-boton">Guardar</button>
                            <button class="btn btn-sm btn-primary">Publicar</button>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mb-5">
        <br>
    </div>
</div>
<?php
require_once(realpath(dirname(__FILE__) . "../../../includes/footer.php"));
?>
<script src="<?php echo $root . "/js/articulo/crear.js"; ?>"></script>