<?php
require_once '../includes/navbar_candidatos.php';
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<style>
.card-header{
    background-color: #ab49ccce;
}
</style>
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

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<?php
require_once '../includes/footer.php';
?>