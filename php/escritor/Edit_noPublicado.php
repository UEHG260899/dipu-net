<?php
require_once(realpath(dirname(__FILE__) . "../../includes/navbar_admin.php"));
?>



<?php

$serv = "localhost";
$usr = "root";
$pwd = "";
$nomBD = "examen-u5";
$db = mysqli_connect($serv, $usr, $pwd, $nomBD);

$id = $_GET["id"];
$result = mysqli_query($db, "SELECT * FROM articulo art INNER JOIN candidato can on can.id=art.id_candidato WHERE art.id = $id");
$data = array();

while ($row = mysqli_fetch_assoc($result)) {
    $data = $row;
}

$resultPartido = mysqli_query($db, "SELECT url_imagen FROM partidos WHERE partidos.id = " . $data['id_partido']);

$imgPartido = mysqli_fetch_assoc($resultPartido)["url_imagen"];

?>


<main>

    <section class="container mb-5 mt-5 about">
        <from>
            <br><br>

            <div class="text-center">
                <h3 class=""><b>Editar Artículo no publicado</b></h3>
            </div>
            <div class="card mt-5 mb-5 ">
                <h4 class="card-header"  style="background-color: #ab49ccce;"><b>Información de artículo no publicado:</b></h4>
                <div class="card-body">

                    <div class="form-row">

                        <div class="col-3">
                            <div class="text-center">
                                <label class="text-center"><?php echo $data['nombre'] . " " . $data['ap_paterno'] . " " . $data['ap_materno'] ?></label>
                            </div>
                            <div>
                                <img src="<?php echo $root . '/img/partidos/iconos/' . $imgPartido ?>" class="float-right" alt="" width="50px" height="50px" style="position: absolute; align-content: right">
                                <div class="text-center">
                                    <img src="<?php echo $root . '/img/candidatos/' . $data['url_imagen'] ?>" alt="" width="200px" height="200px" class="">
                                </div>
                            </div>
                        </div>


                        <div class="col-9">
                            <div class="form-row text-center mt-5">
                                <div class="form-group col-4">
                                    <label class="font-weight-bold">Grado academico (Carrera):</label>
                                    <br>
                                    <label id="LaGrado" class="label-control"><?php echo $data['carrera']; ?></label>
                                </div>

                                <div class="form-group col-4">
                                    <label class="font-weight-bold">Escuela de procedencia:</label>
                                    <br>
                                    <label id="LaEscuela" class="label-control"><?php echo $data['escuela']; ?></label>
                                </div>

                                <div class="form-group col-4">
                                    <label class="font-weight-bold">Puesto actual</label>
                                    <br>
                                    <label id="LaPuesto" class="label-control"><?php echo $data['puesto_actual']; ?></label>
                                </div>
                            </div>


                            <div class="form-row text-center  mt-5">
                                <div class="col-2"></div>
                                <div class="form-group col-4">
                                    <label class="font-weight-bold">Distrito:</label>
                                    <br>
                                    <label id="LaDistrito" class="label-control"><?php echo $data['distrito']; ?></label>
                                </div>

                                <div class="form-group col-4">
                                    <label class="font-weight-bold ">Tipo de candidatura:</label>
                                    <br>
                                    <label id="LaTipo" class="label-control"><?php echo $data['tipo_candidatura']; ?></label>
                                </div>

                            </div>
                        </div>

                    </div>



                    <div class="form-row mt-4">

                        <h4 class=""><b>Articulo</b></h4>
                        <div class="form-group col-12">
                            <textarea id="taArticulo" class="form-control" rows="3" style="min-width: 100%; min-height: 300px;"><?php echo $data['articulo']; ?></textarea>
                        </div>
                    </div>

                </div>
            </div>

            <button class="btn guardar float-right text-white" style="background-color: #ff0077;" type="button" id="actualizar">Actualizar</button>
        </from>
        <hr>
    </section>
</main>

<?php
require_once(realpath(dirname(__FILE__) . "../../includes/footer.php"));
echo '<script>var id=' . $id = $_GET["id"] . '</script>';
?>
<script src="<?php echo $root . "/js/escritor/actualizar_noPublicado.js"; ?>"></script>