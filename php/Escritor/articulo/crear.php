<?php
require_once '../../includes/navbar_escritor.php';
?>
<style>
.btn-floating {
    box-shadow: 0 5px 11px 0 rgb(0 0 0 / 18%), 0 4px 15px 0 rgb(0 0 0 / 15%);
    width: 47px;
    height: 47px;
    z-index: 1;
    display: inline-block;
    overflow: hidden;
    -webkit-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
    margin: 10px;
    -webkit-border-radius: 50%;
    border-radius: 50%;
    padding: 0;
    cursor: pointer;
    background: #4285f4;
}

.btn-floating i {
    font-size: 1.25rem;
    line-height: 47px;
    display: inline-block;
    width: inherit;
    text-align: center;
    color: #fff;
}

.controls-top {
    text-align: center;
    margin-bottom: 1rem;
    margin-top: 1.88rem;
}

.co {
    font-size: 0.8rem;
    padding: 0.4rem;
    text-align: center;
}

.card {
    margin-bottom: 10px;

}

.tall {
    height: 48px;
}
</style>

<div class="container mb-5">
    <div class="col-12 mt-5" style="text-align:right">
        <img src="../../../img/avatar.png" alt="" width="65px" height="65px" class="text-center mt-4">
    </div>
    <div class="row justify-content-md-center mb-3">
        <div class="col-md-4" style="text-align:center">
            <h2>Crear Artículo</h2>
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
                                        <textarea id="w3review" name="w3review" rows="12" style="width:100%; height:100%" disabled="disabled"></textarea>
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
    
    <div class="mb-5">
        <br>
    </div>
</div>
<?php
require_once '../../includes/footer.php';
?>