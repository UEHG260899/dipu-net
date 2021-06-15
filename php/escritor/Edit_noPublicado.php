<?php
require_once(realpath(dirname(__FILE__) . "../../../includes/navbar_escritor.php"));
?>

<main>

    <section class="container mb-5">
        <from>
            <br><br>

            <div class="text-center">
                <h1 class="display-4"><b>Editar Artículo no publicado</b></h1>
            </div>
            <div class="card mt-5 mt-5 mb-5">
                <h4 class="card-header"><b>Información de artículo no publicado:</b></h4>
                <div class="card-body">

                    <div class="form-row">

                        <div class="col-3">
                            <div class="text-center">
                                <label class="text-center">José Luis García García</label>
                            </div>
                            <div >
                                <img src="../../img/partidos/iconos/pan.png" class="float-right" alt="" width="50px" height="50px" style="position: absolute; align-content: right">
                                <div class="text-center">
                                    <img src="../../img/avatar.png" alt="" width="200px" height="200px" class="">
                                </div>
                            </div>
                        </div>


                        <div class="col-9">
                            <div class="form-row text-center mt-5">
                                <div class="form-group col-4">
                                    <label class="font-weight-bold">Carrera:</label>
                                    <br>
                                    <label class="label-control">Lic. en derecho</label>
                                </div>

                                <div class="form-group col-4">
                                    <label class="font-weight-bold">Escuela de procedencia:</label>
                                    <br>
                                    <label class="label-control">Tecnológico de Monterrey</label>
                                </div>

                                <div class="form-group col-4">
                                    <label class="font-weight-bold">Puesto actual</label>
                                    <br>
                                    <label class="label-control">Abogado privado</label>
                                </div>
                            </div>


                            <div class="form-row text-center  mt-5">
                                <div class="col-2"></div>
                                <div class="form-group col-4">
                                    <label class="font-weight-bold">Carrera:</label>
                                    <br>
                                    <label class="label-control">Lic. en derecho</label>
                                </div>

                                <div class="form-group col-4">
                                    <label class="font-weight-bold">Escuela de procedencia:</label>
                                    <br>
                                    <label class="label-control">Tecnológico de Monterrey</label>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>












            <div class="card mt-5 mb-5">
                <h4 class="card-header"><b>Articulo</b></h4>
                <div class="card-body">

                    <div class="form-row mb-4">
                        <div class="form-group col-12">
                            <textarea class="form-control" rows="3" style="min-width: 100%;"></textarea>
                        </div>
                    </div>



                </div>
            </div>
        </from>
        <hr>
    </section>
</main>

<?php
require_once(realpath(dirname(__FILE__) . "../../../includes/footer.php"));
?>
