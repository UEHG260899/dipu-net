<?php
require_once '../includes/navbar_escritor.php';
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

</style>

<div class="container mb-5">
    <div class="col-12 mt-5" style="text-align:right">
        <img src="../../img/avatar.png" alt="" width="65px" height="65px" class="text-center mt-4">
    </div>
    <!--Sección escritor-->
    <div class="row justify-content-md-center mb-3">
        <div class="col-md-4" style="text-align:center">
            <h2>Escritor</h2>
        </div>
    </div>
    <div class="row justify-content-around">
        <div class="col-lg-3 col-md-3 col-sm-12">
            <div class="card" style="border-radius: 10px;">
                <div class="card-header">
                    <p class="card-text text-center">Artículos Publicados</p>
                </div>
                <div class="card-body">
                    <p class="card-text text-center">10</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12">
            <div class="card" style="border-radius: 10px;">
                <div class="card-header">
                    <p class="card-text text-center">Artículos Escritos</p>
                </div>
                <div class="card-body">
                    <p class="card-text text-center">10</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12">
            <div class="card" style="border-radius: 10px;">
                <div class="card-header">
                    <p class="card-text text-center">Número comentarios</p>
                </div>
                <div class="card-body">
                    <p class="card-text text-center">10</p>
                </div>
            </div>
        </div>
    </div>
    <!--Fin Sección escritor-->
    <div class="col-md-12">
        <hr />
    </div>
    <!--Sección articulos publicados-->
    <div class="row justify-content-md-center mt-5">
        <div class="col-md-6" style="text-align:center">
            <h2>Artículos publicados por usted</h2>
        </div>
    </div>
    <!--Carousel Wrapper-->
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

                <!--Indicators-->
                <ol class="carousel-indicators" style="text-align: center;">
                    <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
                    <li data-target="#multi-item-example" data-slide-to="1"></li>

                </ol>
                <!--/.Indicators-->

                <!--Slides-->
                <div class="carousel-inner" role="listbox">

                    <!--First slide-->
                    <div class="carousel-item active">
                        <div class="row justify-content-center">
                            <div class="col-md-4">
                                <div class="card" style="border-radius: 10px;">
                                    <div class="card-header">
                                        <p class="card-text text-left">Jose Antonio Garcia Garcia <a
                                                style="color:green; float:right"> Publicado</a></p>
                                    </div>
                                    <div class="d-flex align-self-end">
                                        <img src="../../img/partidos/iconos/pan.png" class="po" alt="" width="50px"
                                            height="50px">
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex justify-content-center">

                                            <img src="../../img/avatar.png" alt="" width="200px" height="200px"
                                                class="text-center">
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-6">
                                                <div class="card">
                                                    <div class="card-header co">Comentarios</div>
                                                    <div class="card-body co">10</div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="card">
                                                    <div class="card-header co">Vistas</div>
                                                    <div class="card-body co">10</div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card" style="border-radius: 10px;">
                                    <div class="card-header">
                                        <p class="card-text text-left">Jose Antonio Garcia Garcia <a
                                                style="color:green; float:right"> Publicado</a></p>
                                    </div>
                                    <div class="d-flex align-self-end">
                                        <img src="../../img/partidos/iconos/pan.png" alt="" width="50px" height="50px"
                                            class="po">
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex justify-content-center">

                                            <img src="../../img/avatar.png" alt="" width="200px" height="200px"
                                                class="text-center">
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-6">
                                                <div class="card">
                                                    <div class="card-header co">Comentarios</div>
                                                    <div class="card-body co">10</div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="card">
                                                    <div class="card-header co">Vistas</div>
                                                    <div class="card-body co">10</div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card" style="border-radius: 10px;">
                                    <div class="card-header">
                                        <p class="card-text text-left">Jose Antonio Garcia Garcia <a
                                                style="color:green; float:right"> Publicado</a></p>
                                    </div>
                                    <div class="d-flex align-self-end">
                                        <img src="../../img/partidos/iconos/pan.png" alt="" width="50px" height="50px"
                                            class="po">
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex justify-content-center">

                                            <img src="../../img/avatar.png" alt="" width="200px" height="200px"
                                                class="text-center">
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-6">
                                                <div class="card">
                                                    <div class="card-header co">Comentarios</div>
                                                    <div class="card-body co">10</div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="card">
                                                    <div class="card-header co">Vistas</div>
                                                    <div class="card-body co">10</div>
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
    </div>
    <!--Fin Sección articulos publicados-->
    <div class="mb-5">
        <br>
    </div>
</div>
<?php
require_once '../includes/footer.php';
?>