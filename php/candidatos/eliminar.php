<?php
require_once(realpath(dirname(__FILE__) . "../../../includes/navbar_escritor.php"));
?>

<main>
    <section class="container mb-5">
        <from>
        <br><br>
            <div class="card mt-5 mt-5 mb-5">
                <h4 class="card-header"><b>Información personal y de candidatura</b></h4>
                <div class="card-body">

                    <div class="form-row">
                        <div class="form-group col-3">
                            <label class="font-weight-bold" class="font-weight-bold" for="nombreCan">Nombre</label>
                            <input disabled type="text" class="form-control" id="nombreCan" placeholder="Ingrese nombre del candidato">
                        </div>


                        <div class="form-group col-3">
                            <label class="font-weight-bold" for="apPatCan">Apellido Peterno</label>
                            <input disabled type="text" class="form-control" id="apPatCan" placeholder="Ingrese apellido paterno del candidato">
                        </div>

                        <div class="form-group col-3">
                            <label class="font-weight-bold" for="apMatCan">Apellido Materno</label>
                            <input disabled type="text" class="form-control" id="apMatCan" placeholder="Ingrese apellido materno del candidato">
                        </div>

                        <div class="form-group col-3">
                            <label class="font-weight-bold" for="generoCan">Genero</label>
                            <select disabled id="generoCan" class="form-control">
                                <option selected>Femenino</option>
                                <option>...</option>
                            </select>
                        </div>
                    </div>






                    <div class="form-row mb-4">
                        <div class="form-group col-3">
                            <label class="font-weight-bold" for="estadoCan">Estado</label>
                            <select disabled id="estadoCan" class="form-control">
                                <option selected >México</option>
                                <option>...</option>
                            </select>
                        </div>


                        <div class="form-group col-3">
                            <label class="font-weight-bold" for="municipioCan">Municipio</label>
                            <select disabled id="municipioCan" class="form-control">
                                <option selected>Metepec</option>
                                <option>...</option>
                            </select>
                        </div>

                        <div class="form-group col-3">
                            <label class="font-weight-bold" for="nacimientoCan">Fecha de Nacimiento</label>
                            <input disabled type="date" class="form-control" id="nacimientoCan" placeholder="">
                        </div>

                        <div class="form-group col-3">
                            <label class="font-weight-bold" for="imgCan">Imagen</label>
                            <input disabled type="text" class="form-control" id="imgCan" placeholder="Ingrese nombre de la imagen">
                        </div>
                    </div>





                    <div class="form-row mb-4">
                        <div class="form-group col-4">
                            <label class="font-weight-bold" class="font-weight-bold" for="partidoCan">Partido</label>
                            <select disabled id="partidoCan" class="form-control">
                                <option selected>Partido Acción Nacional</option>
                                <option>...</option>
                            </select>
                        </div>


                        <div class="form-group col-4">
                            <label class="font-weight-bold" for="institucionCan">Tipo de candidatura</label>
                            <select disabled id="institucionCan" class="form-control">
                                <option selected>Diputación mayoria relativa</option>
                                <option>...</option>
                            </select>
                        </div>

                        <div class="form-group col-4">
                            <label class="font-weight-bold" for="distritoCan">Distrito</label>
                            <input disabled type="number" class="form-control" id="distritoCan" placeholder="0">
                        </div>
                    </div>


                </div>
            </div>












            <div class="card mt-5 mb-5">
                <h4 class="card-header"><b>Información Academica y profesional</b></h4>
                <div class="card-body">

                    <div class="form-row mb-4">
                        <div class="form-group col-4">
                            <label class="font-weight-bold" class="font-weight-bold" for="gradoCan">Grado académico</label>
                            <select disabled id="gradoCan" class="form-control">
                                <option selected>Doctorado Titulado(a)</option>
                                <option>...</option>
                            </select>
                        </div>


                        <div class="form-group col-4">
                            <label class="font-weight-bold" for="institucionCan">Institución académica</label>
                            <input disabled type="text" class="form-control" id="institucionCan" placeholder="Ingrese Institución donde se formo el candidato">
                        </div>

                        <div class="form-group col-4">
                            <label class="font-weight-bold" for="puestoCan">Puesto actual</label>
                            <input disabled type="text" class="form-control" id="puestoCan" placeholder="Ingrese que puesto laboral actual del condidato">
                        </div>
                    </div>



                </div>
            </div>
        </from>
        <hr>
    </section>
</main>

<?php
require_once(realpath(dirname(__FILE__) . "../../includes/footer.php"));
?>