<?php
    require_once(realpath(dirname(__FILE__) . '/../includes/navbar.php'));
    $root_dir = "http://localhost/dipu-net";
    $servidor = "localhost";
    $usuarioBD = "root";
    $psw = "";
    $nomBD = "examen-u5";
    $db = mysqli_connect($servidor, $usuarioBD, $psw, $nomBD);
?>
<link href="<?php echo $root_dir . '/css/styles_articulo.css'?>" rel="stylesheet">
<main>
    <?php
        if(isset($_GET["candidato"])){
            if(!$db){
                die("Error al conectarse a la Base de datos" . mysqli_connect_error());
            }else{
                mysqli_query($db, "SET NAMES UTF8");
                $id_candidato = $_GET["candidato"];
                $query = "SELECT c.id,
                                c.nombre,
                                c.ap_paterno,
                                c.ap_materno,
                                c.genero,
                                c.fecha_nacimiento,
                                c.estado,
                                c.municipio,
                                c.url_imagen,
                                c.carrera,
                                c.escuela,
                                c.puesto_actual,
                                d.url_imagen AS imagen,
                                c.tipo_candidatura,
                                c.distrito
                                FROM candidato c JOIN partidos d
                                ON c.id_partido = d.id
                                WHERE c.id = $id_candidato";
                $result = mysqli_query($db, $query);
                if($result){
                    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                        $nombre = $row["nombre"];
                        $apP = $row["ap_paterno"];
                        $apM = $row["ap_materno"];
                        $genero = $row["genero"];
                        $fecha_nacimiento = $row["fecha_nacimiento"];
                        $estado = $row["estado"];
                        $municipio = $row["municipio"];
                        $imagen = $row["url_imagen"];
                        $carrera = $row["carrera"];
                        $escuela = $row["escuela"];
                        $puesto = $row["puesto_actual"];
                        $imagen_partido = $row["imagen"];
                        $tipo = $row["tipo_candidatura"];
                        $distrito = $row["distrito"];
                    }
                }else{
                    echo "Algo ha salido mal al momento de realizar la consulta";
                }
            }
        }
    ?>
    <section class="container">
            <div class="row">
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <div>
                        <img src="../hola.jpg" alt="Nombre del candidato">
                    </div>
                    <div>
                        <img src="../hola2.jpg" alt="Imagen Partido">
                    </div>
                    <div class="row">
                        <h3>Nombre del candidato</h3>
                    </div>
                </div>
                <div class="col-sm-12 col-md-9 col-lg-9">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12 col-md-4 col-lg-4">
                                    <h5>Nombre Completo:</h5>
                                    <p>Uriel Enrique Hernández González</p>
                                </div>
                                <div class="col-sm-12 col-md-4 col-lg-4">
                                    <h5>Genero:</h5>
                                    <p>Masculino</p>
                                </div>
                                <div class="col-sm-12 col-md-4 col-lg-4">
                                    <h5>Fecha de nacimiento:</h5>
                                    <p>26/08/1999</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <h5>Estado de Nacimiento:</h5>
                                    <p>México</p>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <h5>Municipio:</h5>
                                    <p>Toluca</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-sm-12 col-md-9 col-lg-9 offset-md-3 offset-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12 col-md-4 col-lg-4">
                                    <h5>Carrera:</h5>
                                    <p>Ingeniería en Sistemas Computacionales</p>
                                </div>
                                <div class="col-sm-12 col-md-4 col-lg-4">
                                    <h5>Escuela de procedencia:</h5>
                                    <p>Instituto Tecnológico de Toluca</p>
                                </div>
                                <div class="col-sm-12 col-md-4 col-lg-4">
                                    <h5>Puesto Actual:</h5>
                                    <p>Estudiante de 8vo Semestre.</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <h5>Distrito:</h5>
                                    <p>Toluca</p>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <h5>Tipo de candidatura</h5>
                                    <p>Diputación Federal</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
    </section>

    <section class="container">
        <h3>Artículo</h3>
        <h4>Por: <a href="#">Uriel Hernández</a></h4>
        <br>
        <div class="row">
            <div class="col-12">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea nostrum quasi tempore obcaecati facilis veritatis, unde itaque repellendus suscipit rem optio ex ratione nulla numquam sit voluptate ipsum consectetur sequi.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, molestias. Odit libero aliquam facere sed numquam? Quidem nam aliquid ipsam perferendis ducimus saepe quod incidunt eos facilis. Soluta, explicabo sequi!
                </p>
            </div>    
        </div>
        <hr>
    </section>

    <section class="container">
        <h3>Comentarios</h3>
        <div class="card">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Do</li>
                <li class="list-group-item">Re</li>
                <li class="list-group-item">Mi</li>
                <li class="list-group-item">Fa</li>
                <li class="list-group-item">Sol</li>
                <li class="list-group-item">
                    <h6>Agregar un comentario:</h6>
                    <div class="row">
                        <div class="col-12">
                            <textarea style="width: 100%"></textarea>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-12 text-right">
                            <button class="btn btn-success">Agregar</button>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
</main>

<?php
    require_once(realpath(dirname(__FILE__) . '/../includes/footer.php'));
?>