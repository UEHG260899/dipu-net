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
                <div class="col-sm-12 col-md-3 col-lg-3 text-center">
                    <div>
                        <img src="../hola.jpg" alt="Nombre del candidato">
                    </div>
                    <div>
                        <img src="<?php echo $root_dir . '/img/partidos/iconos/' . $imagen_partido;?>" alt="Imagen Partido">
                    </div>
                    <div class="row">
                        <h3><?php echo $nombre . " " . $apP . " " . $apM;?></h3>
                    </div>
                </div>
                <div class="col-sm-12 col-md-9 col-lg-9">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12 col-md-4 col-lg-4">
                                    <h5>Nombre Completo:</h5>
                                    <p><?php echo $nombre . " " . $apP . " " . $apM;?></p>
                                </div>
                                <div class="col-sm-12 col-md-4 col-lg-4">
                                    <h5>Genero:</h5>
                                    <p><?php echo $genero;?></p>
                                </div>
                                <div class="col-sm-12 col-md-4 col-lg-4">
                                    <h5>Fecha de nacimiento:</h5>
                                    <p><?php echo $fecha_nacimiento;?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <h5>Estado de Nacimiento:</h5>
                                    <p><?php echo $estado;?></p>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <h5>Municipio:</h5>
                                    <p><?php echo $municipio;?></p>
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
                                    <p><?php echo $carrera;?></p>
                                </div>
                                <div class="col-sm-12 col-md-4 col-lg-4">
                                    <h5>Escuela de procedencia:</h5>
                                    <p><?php echo $escuela;?></p>
                                </div>
                                <div class="col-sm-12 col-md-4 col-lg-4">
                                    <h5>Puesto Actual:</h5>
                                    <p><?php echo $puesto;?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <h5>Distrito:</h5>
                                    <p><?php echo $distrito;?></p>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <h5>Tipo de candidatura</h5>
                                    <p><?php echo $distrito;?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
    </section>
        <?php
           $query_articulo = "SELECT e.nombre,
                                e.ap_paterno,
                                a.articulo,
                                a.no_vistas,
                                a.id
                                FROM escritor e JOIN articulo a
                                ON e.id = a.id_escritor
                                WHERE a.estatus = 'publicado'
                                AND a.id_candidato = $id_candidato";
            $result_art = mysqli_query($db, $query_articulo);
            if($result_art){
                while($row_art = mysqli_fetch_array($result_art, MYSQLI_ASSOC)){
                    $nombre_autor = $row_art["nombre"] . " " . $row_art["ap_paterno"];
                    $articulo = $row_art["articulo"];
                    $vistas = (int) $row_art["no_vistas"];
                    $id_art = (int) $row_art["id"];
                }

                $vistas ++;
                $sql = "UPDATE articulo
                            SET no_vistas = $vistas
                            WHERE articulo.id_candidato = $id_candidato
                            AND articulo.id = $id_art";
                $result_sql = mysqli_query($db, $sql);
                if(!$result_sql){
                    echo "Algo fallo en la actualización de las vistas del articulo";
                }

            }else{
                echo "Algo ocurrió al momento de ejecutar la consulta";
            }
        ?>
    <section class="container">
        <h3>Artículo</h3>
        <h4>Por: <a href="#"><?php echo $nombre_autor;?></a></h4>
        <br>
        <div class="row">
            <div class="col-12">
                <p>
                   <?php echo $articulo;?>
                </p>
            </div>    
        </div>
        <hr>
    </section>

    <section class="container">
        <h3>Comentarios</h3>
        <div class="card">
            <?php
                if(isset($_POST["textComentario"])){
                    $comentario = $_POST["textComentario"];
                    if(isset($_SESSION["usuario"])){
                        $correo = $_SESSION["usuario"]["correo"];
                        $query_lector = "SELECT id
                                            FROM lector
                                            WHERE id_usuario = (SELECT id
                                                                    FROM usuarios
                                                                    WHERE correo = '$correo')";
                        $resultadol = mysqli_query($db, $query_lector);
                        if($resultadol){
                            while($rowl = mysqli_fetch_array($resultadol, MYSQLI_ASSOC)){
                                $id_l = $rowl["id"];
                            }
                            mysqli_free_result($resultadol);
                            $fecha_creacion = date('Y-m-d');
                            $insert = "INSERT INTO comentarios VALUES (NULL, '$id_art', '$id_l', '$comentario', '$fecha_creacion')";
                            $resultadol = mysqli_query($db, $insert);
                            if(!$resultadol){
                                echo "Error al momento de insertar comentario: " . mysqli_error($db);
                            }
                        }else{
                            echo "Error al momento de obtener lector: " . mysqli_error($db);
                        }
                        
                    }else{
                        header("Location: $root_dir/php/login.php");
                    }
                }
            ?>
            <ul class="list-group list-group-flush">
                <?php
                    $query_coment = "SELECT c.comentario,
                                        l.nombre,
                                        l.ap_paterno
                                        FROM comentarios c JOIN lector l
                                        ON c.id_lector = l.id
                                        WHERE c.id_articulo = $id_art";
                    $resul_coment = mysqli_query($db, $query_coment);
                    if($resul_coment){
                        while($row_com = mysqli_fetch_array($resul_coment, MYSQLI_ASSOC)){
                            $nombre_lector = $row_com["nombre"];
                            $comentario = $row_com["comentario"];
                            $ap_pat = $row_com["ap_paterno"];
                            echo '<li class="list-group-item">
                                    <h6>' . $nombre_lector . ' ' . $ap_pat .'</h6>
                                    <p>'. $comentario .'</p>
                                  </li>';
                        }
                        mysqli_close($db);
                    }else{
                        echo "Algo sucedio al momento de obtener los comentarios";
                    }
                ?>
                <li class="list-group">
                    <h6>Agregar un comentario:</h6>
                    <form action="<?php echo "mostrar_articulo.php?candidato=" . $id_candidato;?>" method="POST" id="formComentario">
                        <div class="row">
                            <div class="col-12">
                                <textarea class="form-control" id="textComentario" name="textComentario"></textarea>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-12 text-right">
                                <button type="button" class="btn btn-success" id="btnComentario">Enviar Comentario</button>
                            </div>
                        </div>
                    </form>
                </li>
            </ul>
        </div>
    </section>
</main>

<!--Modal de error-->
<div class="modal fade" id="modalErrores">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4>
                    <i class="fa fa-lg fa-times-circle"></i>
                    Han ocurrido errores de Validación
                </h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                Para poder publicar un comentario debe de introducir texto en el campo requerido.
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-dismiss="modal">Aceptar</button>
            </div>
        </div>
    </div>
</div>
<!--Fin modal-->


<?php
    require_once(realpath(dirname(__FILE__) . '/../includes/footer.php'));
?>

<script src="<?php echo $root_dir . "/js/agrega_comentario/script.js"?>"></script>