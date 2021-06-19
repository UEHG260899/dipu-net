<?php
require_once(realpath(dirname(__FILE__) . "../../../includes/navbar_admin.php"));
?>

<main>
    <section class="container mb-5">
        <from id="formBorrar">
            <br><br>

            <div class="card mt-5 mt-5 mb-5">
                <h4 class="card-header"><b>Información personal y de candidatura</b></h4>
                <div class="card-body">

                    <div class="form-row">
                        <div class="form-group col-3">
                            <label class="font-weight-bold" class="font-weight-bold" for="nombreCan">Nombre</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                                </div>
                                <input disabled type="text" class="form-control validar" id="nombreCan" name="nombreCan" placeholder="Ingrese nombre del candidato">
                                <div class="invalid-feedback nombreCan"></div>
                            </div>
                        </div>


                        <div class="form-group col-3">
                            <label class="font-weight-bold" for="apPatCan">Apellido Peterno</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-user-friends"></i></span>
                                </div>
                                <input disabled type="text" class="form-control validar" id="apPatCan" name="apPatCan" placeholder="Ingrese apellido paterno del candidato">
                                <div class="invalid-feedback apPatCan"></div>
                            </div>
                        </div>

                        <div class="form-group col-3">
                            <label class="font-weight-bold" for="apMatCan">Apellido Materno</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-user-friends"></i></span>
                                </div>
                                <input disabled type="text" class="form-control validar" id="apMatCan" name="apMatCan" placeholder="Ingrese apellido materno del candidato">
                                <div class="invalid-feedback apMatCan"></div>
                            </div>
                        </div>

                        <div class="form-group col-3">
                            <label class="font-weight-bold" for="generoCan">Genero</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-venus-mars"></i></span>
                                </div>
                                <select disabled id="generoCan" name="generoCan" class="form-control validar">
                                    <option disabled hidden selected value="0">Seleccione una opcion</option>
                                    <option value="Masculino">Masculino</option>
                                    <option value="Femenino">Femenino</option>
                                </select>
                                <div class="invalid-feedback generoCan"></div>
                            </div>
                        </div>
                    </div>






                    <div class="form-row mb-4">
                        <div class="form-group col-3">
                            <label class="font-weight-bold" for="estadoCan">Estado</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-map"></i></span>
                                </div>
                                <select disabled id="estadoCan" name="estadoCan" class="form-control validar">
                                    <option disabled hidden selected value="0">Seleccione una opcion</option>
                                    <option value="México">México</option>
                                </select>
                                <div class="invalid-feedback estadoCan"></div>
                            </div>
                        </div>


                        <div class="form-group col-3">
                            <label class="font-weight-bold" for="municipioCan">Municipio</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-map-marked-alt"></i></span>
                                </div>
                                <select disabled id="municipioCan" name="municipioCan" class="form-control validar">
                                    <option disabled hidden selected value="0">Seleccione una Municipio</option>
                                    <option value="Acambay">Acambay</option>
                                    <option value="Acolman">Acolman</option>
                                    <option value="Aculco">Aculco</option>
                                    <option value="Almoloya de Alquisiras">Almoloya de Alquisiras</option>
                                    <option value="Almoloya de Juárez">Almoloya de Juárez</option>
                                    <option value="Almoloya del Río">Almoloya del Río</option>
                                    <option value="Amanalco">Amanalco</option>
                                    <option value="Amatepec">Amatepec</option>
                                    <option value="Amecameca">Amecameca</option>
                                    <option value="Apaxco">Apaxco</option>
                                    <option value="Atenco">Atenco</option>
                                    <option value="Atizapán">Atizapán</option>
                                    <option value="Atizapán de Zaragoza">Atizapán de Zaragoza</option>
                                    <option value="Atlacomulco">Atlacomulco</option>
                                    <option value="Atlautla">Atlautla</option>
                                    <option value="Axapusco">Axapusco</option>
                                    <option value="Ayapango">Ayapango</option>
                                    <option value="Calimaya">Calimaya</option>
                                    <option value="Capulhuac">Capulhuac</option>
                                    <option value="Chalco">Chalco</option>
                                    <option value="Chapa de Mota">Chapa de Mota</option>
                                    <option value="Chapultepec">Chapultepec</option>
                                    <option value="Chiautla">Chiautla</option>
                                    <option value="Chicoloapan">Chicoloapan</option>
                                    <option value="Chiconcuac">Chiconcuac</option>
                                    <option value="Chimalhuacán">Chimalhuacán</option>
                                    <option value="Coacalco de Berriozábal">Coacalco de Berriozábal</option>
                                    <option value="Coatepec Harinas">Coatepec Harinas</option>
                                    <option value="Cocotitlán">Cocotitlán</option>
                                    <option value="Coyotepec">Coyotepec</option>
                                    <option value="Cuautitlán">Cuautitlán</option>
                                    <option value="Cuautitlán Izcalli">Cuautitlán Izcalli</option>
                                    <option value="Donato Guerra">Donato Guerra</option>
                                    <option value="Ecatepec de Morelos">Ecatepec de Morelos</option>
                                    <option value="Ecatzingo">Ecatzingo</option>
                                    <option value="El Oro">El Oro</option>
                                    <option value="Huehuetoca">Huehuetoca</option>
                                    <option value="Hueypoxtla">Hueypoxtla</option>
                                    <option value="Huixquilucan">Huixquilucan</option>
                                    <option value="Isidro Fabela">Isidro Fabela</option>
                                    <option value="Ixtapaluca">Ixtapaluca</option>
                                    <option value="Ixtapan de la Sal">Ixtapan de la Sal</option>
                                    <option value="Ixtapan del Oro">Ixtapan del Oro</option>
                                    <option value="Ixtlahuaca">Ixtlahuaca</option>
                                    <option value="Jaltenco">Jaltenco</option>
                                    <option value="Jilotepec">Jilotepec</option>
                                    <option value="Jilotzingo">Jilotzingo</option>
                                    <option value="Jiquipilco">Jiquipilco</option>
                                    <option value="Jocotitlán">Jocotitlán</option>
                                    <option value="Joquicingo">Joquicingo</option>
                                    <option value="Juchitepec">Juchitepec</option>
                                    <option value="La Paz">La Paz</option>
                                    <option value="Lerma">Lerma</option>
                                    <option value="Luvianos">Luvianos</option>
                                    <option value="Malinalco">Malinalco</option>
                                    <option value="Melchor Ocampo">Melchor Ocampo</option>
                                    <option value="Metepec">Metepec</option>
                                    <option value="Mexicaltzingo">Mexicaltzingo</option>
                                    <option value="Morelos">Morelos</option>
                                    <option value="Naucalpan de Juárez">Naucalpan de Juárez</option>
                                    <option value="Nextlalpan">Nextlalpan</option>
                                    <option value="Nezahualcóyotl">Nezahualcóyotl</option>
                                    <option value="Nicolás Romero">Nicolás Romero</option>
                                    <option value="Nopaltepec">Nopaltepec</option>
                                    <option value="Ocoyoacac">Ocoyoacac</option>
                                    <option value="Ocuilan">Ocuilan</option>
                                    <option value="Otumba">Otumba</option>
                                    <option value="Otzoloapan">Otzoloapan</option>
                                    <option value="Otzolotepec">Otzolotepec</option>
                                    <option value="Ozumba">Ozumba</option>
                                    <option value="Papalotla">Papalotla</option>
                                    <option value="Polotitlán">Polotitlán</option>
                                    <option value="Rayón">Rayón</option>
                                    <option value="San Antonio la Isla">San Antonio la Isla</option>
                                    <option value="San Felipe del Progreso">San Felipe del Progreso</option>
                                    <option value="San José del Rincón">San José del Rincón</option>
                                    <option value="San Martín de las Pirámides">San Martín de las Pirámides</option>
                                    <option value="San Mateo Atenco">San Mateo Atenco</option>
                                    <option value="San Simón de Guerrero">San Simón de Guerrero</option>
                                    <option value="Santo Tomás">Santo Tomás</option>
                                    <option value="Soyaniquilpan de Juárez">Soyaniquilpan de Juárez</option>
                                    <option value="Sultepec">Sultepec</option>
                                    <option value="Tecámac">Tecámac</option>
                                    <option value="Tejupilco">Tejupilco</option>
                                    <option value="Temamatla">Temamatla</option>
                                    <option value="Temascalapa">Temascalapa</option>
                                    <option value="Temascalcingo">Temascalcingo</option>
                                    <option value="Temascaltepec">Temascaltepec</option>
                                    <option value="Temoaya">Temoaya</option>
                                    <option value="Tenancingo">Tenancingo</option>
                                    <option value="Tenango del Aire">Tenango del Aire</option>
                                    <option value="Tenango del Valle">Tenango del Valle</option>
                                    <option value="Teoloyucán">Teoloyucán</option>
                                    <option value="Teotihuacán">Teotihuacán</option>
                                    <option value="Tepetlaoxtoc">Tepetlaoxtoc</option>
                                    <option value="Tepetlixpa">Tepetlixpa</option>
                                    <option value="Tepotzotlán">Tepotzotlán</option>
                                    <option value="Tequixquiac">Tequixquiac</option>
                                    <option value="Texcaltitlán">Texcaltitlán</option>
                                    <option value="Texcalyacac">Texcalyacac</option>
                                    <option value="Texcoco">Texcoco</option>
                                    <option value="Tezoyuca">Tezoyuca</option>
                                    <option value="Tianguistenco">Tianguistenco</option>
                                    <option value="Timilpan">Timilpan</option>
                                    <option value="Tlalmanalco">Tlalmanalco</option>
                                    <option value="Tlalnepantla de Baz">Tlalnepantla de Baz</option>
                                    <option value="Tlatlaya">Tlatlaya</option>
                                    <option value="Toluca">Toluca</option>
                                    <option value="Tonanitla">Tonanitla</option>
                                    <option value="Tonatico">Tonatico</option>
                                    <option value="Tultepec">Tultepec</option>
                                    <option value="Tultitlán">Tultitlán</option>
                                    <option value="Valle de Bravo">Valle de Bravo</option>
                                    <option value="Valle de Chalco Solidaridad">Valle de Chalco Solidaridad</option>
                                    <option value="Villa de Allende">Villa de Allende</option>
                                    <option value="Villa del Carbón">Villa del Carbón</option>
                                    <option value="Villa Guerrero">Villa Guerrero</option>
                                    <option value="Villa Victoria">Villa Victoria</option>
                                    <option value="Xalatlaco">Xalatlaco</option>
                                    <option value="Xonacatlán">Xonacatlán</option>
                                    <option value="Zacazonapan">Zacazonapan</option>
                                    <option value="Zacualpan">Zacualpan</option>
                                    <option value="Zinacantepec">Zinacantepec</option>
                                    <option value="Zumpahuacán">Zumpahuacán</option>
                                    <option value="Zumpango">Zumpango</option>
                                </select>
                                <div class="invalid-feedback municipioCan"></div>
                            </div>
                        </div>

                        <div class="form-group col-3">
                            <label class="font-weight-bold" for="nacimientoCan">Fecha de Nacimiento</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-calendar-alt"></i></span>
                                </div>
                                <input disabled type="date" class="form-control validar" id="nacimientoCan" name="nacimientoCan" placeholder="">
                                <div class="invalid-feedback nacimientoCan"></div>
                            </div>
                        </div>

                        <div class="form-group col-3">
                            <label class="font-weight-bold" for="imgCan">Imagen</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-image"></i></span>
                                </div>
                                <input disabled type="text" class="form-control validar" id="imgCan" name="imgCan" placeholder="Ingrese nombre de la imagen">
                                <div class="invalid-feedback imgCan"></div>
                            </div>
                        </div>
                    </div>





                    <div class="form-row mb-4">
                        <div class="form-group col-4">
                            <label class="font-weight-bold" class="font-weight-bold" for="partidoCan">Partido</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-vote-yea"></i></span>
                                </div>
                                <select disabled id="partidoCan" name="partidoCan" class="form-control validar">

                                    <option disabled hidden selected value="0">Seleccione un Partido</option>
                                    <?php


                                    $serv = "localhost";
                                    $usr = "root";
                                    $pwd = "";
                                    $nomBD = "examen-u5";

                                    $conn = new mysqli($serv, $usr, $pwd, $nomBD);

                                    $result = $conn->query("select * from partidos;");
                                    while ($valores = mysqli_fetch_array($result)) {
                                        echo '<option value="' . $valores[0] . '">' . $valores[1] . '</option>';
                                    }
                                    $conn->close();


                                    ?>
                                </select>
                                <div class="invalid-feedback partidoCan"></div>
                            </div>
                        </div>


                        <div class="form-group col-4">
                            <label class="font-weight-bold" for="tipoCan">Tipo de candidatura</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-landmark"></i></span>
                                </div>
                                <select disabled id="tipoCan" name="tipoCan" class="form-control validar">
                                    <option disabled hidden selected value="0">Seleccione un tipo de candidatura</option>
                                    <option value="Diputación mayoria relativa">Diputación mayoria relativa</option>
                                    <option value="Diputación representación proporcional">Diputación representación proporcional</option>
                                </select>
                                <div class="invalid-feedback tipoCan"></div>
                            </div>
                        </div>

                        <div class="form-group col-4">
                            <label class="font-weight-bold" for="distritoCan">Distrito (Seccion electoral)</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-map-marker-alt"></i></span>
                                </div>
                                <input disabled type="number" class="form-control validar" id="distritoCan" name="distritoCan" placeholder="Número de distrito">
                                <div class="invalid-feedback distritoCan"></div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>












            <div class="card mt-5 mb-5">
                <h4 class="card-header"><b>Información Academica y profesional</b></h4>
                <div class="card-body">

                    <div class="form-row mb-4">
                        <div class="form-group col-4">
                            <label class="font-weight-bold" class="font-weight-bold" for="gradoCan">Grado académico (Carrera)</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-graduation-cap"></i></span>
                                </div>
                                <select disabled id="gradoCan" name="gradoCan" class="form-control validar">
                                    <option disabled hidden selected value="0">Seleccione un grado academico</option>
                                    <option value="Doctorado Titulado(a)">Doctorado Titulado(a)</option>
                                    <option value="Doctorado Concluido(a)">Doctorado Concluido(a)</option>
                                    <option value="Doctorado Trunco(a)">Doctorado Trunco(a)</option>
                                    <option value="Maestría Titulado(a)">Maestría Titulado(a)</option>
                                    <option value="Maestría Concluido(a)">Maestría Concluido(a)</option>
                                    <option value="Maestría Trunco(a)">Maestría Trunco(a)</option>
                                    <option value="Especialidad Titulado(a)">Especialidad Titulado(a)</option>
                                    <option value="Especialidad Concluido(a)">Especialidad Concluido(a)</option>
                                    <option value="Licenciatura Titulado(a)">Licenciatura Titulado(a)</option>
                                    <option value="Licenciatura Concluido(a)">Licenciatura Concluido(a)</option>
                                    <option value="Licenciatura Trunco(a)">Licenciatura Trunco(a)</option>
                                    <option value="Educación media superior Concluido(a)">Educación media superior Concluido(a)</option>
                                    <option value="Educación media superior Trunca">Educación media superior Trunca</option>
                                    <option value="Educación Basica Concluido(a)">Educación Basica Concluido(a)</option>
                                    <option value="Educación Basica Trunca">Educación Basica Trunca</option>
                                </select>
                                <div class="invalid-feedback gradoCan"></div>
                            </div>
                        </div>


                        <div class="form-group col-4">
                            <label class="font-weight-bold" for="institucionCan">Institución académica</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-school"></i></span>
                                </div>
                                <input disabled type="text" class="form-control validar" id="institucionCan" name="institucionCan" placeholder="Ingrese Institución donde se formo el candidato">
                                <div class="invalid-feedback institucionCan"></div>
                            </div>
                        </div>

                        <div class="form-group col-4">
                            <label class="font-weight-bold" for="puestoCan">Puesto actual</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-building"></i></span>
                                </div>
                                <input disabled type="text" class="form-control validar" id="puestoCan" name="puestoCan" placeholder="Ingrese que puesto laboral actual del condidato">
                                <div class="invalid-feedback puestoCan"></div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>

            <button class="btn guardar float-right text-white" type="button" id="borrar">Borrar</button>

        </from>
        <hr>
    </section>
</main>

<?php
require_once(realpath(dirname(__FILE__) . "../../includes/footer.php"));
echo '<script>var id=' . $id = $_GET["id"] . '</script>';
?>


<script src="<?php echo $root . "/js/candidatos/eliminar.js"; ?>"></script>