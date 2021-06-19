<?php
require_once './includes/navbar.php';

$servidor = "localhost";
$usuario = "root";
$pwd = "";
$nombreBD = "examen-u5";
$conn = new mysqli($servidor, $usuario, $pwd, $nombreBD);

if (!$conn) {
    echo 'Error de conexión: ' . mysqli_connect_error();
}
if (isset($_POST['submit-later'])) {
    $lector = mysqli_real_escape_string($conn, $_POST['id-lector']);
    $articulo = mysqli_real_escape_string($conn, $_POST['id-articulo']);
    $sql = "INSERT INTO mas_tarde( id, id_lector, id_articulo) "
        . "VALUES( NULL, '$lector', '$articulo')";
    $resultado = mysqli_query($conn, $sql);
    header('Location:' . $root . '/php/index.php#latest');
}


$query = "SELECT * FROM partidos";
$result = mysqli_query($conn, $query);

?>

<div class="banner mt-5 ">
    <p>
        Candidatos y candidatas a diputados
        <br>
        ¡Conócelos!
    </p>

</div>

<div class="container mt-3 about">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 my-auto">
            <h2>Acerca de la página</h2>
            <p>Dipu-net es una plataforma donde usted puede consultar los artículos correspondientes a cada uno de los candidatos a diputados del Estado de México.</p>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-12 ml-auto">
            <figure>
                <img src="../img/vote.png" alt="" width="100%">
            </figure>
        </div>
    </div>
</div>
<hr class="container">
<main class="container principal mb-5">

    <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
        <ol class="carousel-indicators">

            <?php
            if ($result) {
                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                    $id = $row["id"];
            ?>
                    <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $id - 1; ?>" class="<?php if ($id == 1) {
                                                                                                                    echo 'active';
                                                                                                                } ?>"></li>
            <?php
                }
            }
            $query = "SELECT * FROM partidos";
            $result = mysqli_query($conn, $query);
            ?>
        </ol>
        <div class="carousel-inner">
            <?php
            if ($result) {
                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                    $id = $row["id"];
                    $nombre = $row["nombre"];
                    $icon = $row["url_imagen"];
                    $banner = $row["img_banner"];
            ?>
                    <div class="carousel-item <?php if ($id == 1) {
                                                    echo 'active';
                                                } ?> ">
                        <img class="d-block " src="../img/partidos/carusel/<?php echo $banner; ?>" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5><?php echo $nombre; ?></h5>
                            <a href="articulos.php?<?php echo $id; ?>" type="button" class="btn  bg-boton">Ver articulos</a>
                        </div>
                    </div>
            <?php
                }
            }
            ?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
        </a>
    </div>
    <hr>
</main>
<section class="container mb-large" id="latest">
    <h2 class="mb-3">Últimos artículos</h2>
    <div class="row animate__animated animate__zoomIn">
        <?php
        $sql = "SELECT articulo.no_vistas,articulo.id,CONCAT_WS(' ',escritor.nombre ,escritor.ap_paterno ,escritor.ap_materno) AS nombreEsc ,CONCAT_WS(' ',candidato.nombre ,candidato.ap_paterno ,candidato.ap_materno) AS nombre, candidato.url_imagen as imagenCan, partidos.url_imagen as imagenPar FROM articulo INNER JOIN candidato ON candidato.id = articulo.id_candidato INNER JOIN partidos ON candidato.id_partido = partidos.id  INNER JOIN escritor ON articulo.id_escritor = escritor.id WHERE  articulo.estatus = 'publicado' ORDER BY articulo.id DESC LIMIT 3";
        $resultado = mysqli_query($conn, $sql);

        while ($row = $resultado->fetch_array()) {

        ?>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between bg-principal">

                        <p class="card-text text-left"><?php echo $row['nombre']; ?> </p>
                        <img src="../img/partidos/iconos/<?php echo $row['imagenPar']; ?>" alt="" width="50px" height="50px">


                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-center">

                            <img src="../img/candidatos/<?php echo $row['imagenCan']; ?>" alt="" width="200px" height="200px" class="text-center">
                        </div>

                        <p class="card-text text-right mt-2">Autor: <strong><?php echo $row['nombreEsc']; ?> </strong></p>
                        <div class="d-flex justify-content-between">
                            <?php
                            if (isset($_SESSION['usuario']['correo'])) {
                                $id_lector =  $_SESSION['id_lector'];

                                $sqlAgregado = "SELECT id FROM mas_tarde "
                                    . "WHERE id_articulo =" . $row['id'] . " AND id_lector = $id_lector";

                                $resultadoAgregado = mysqli_query($conn, $sqlAgregado);
                                /**
                                 * ?Si El articulo se encuentra en "ver mas tarde " se habilita boton para ver todos los guardados
                                 */
                                if ($resultadoAgregado->num_rows == 1) {
                                    echo ' <a href="lectores/guardados.php" class="btn bg-success text-white">Ver guardados</a>';
                                } else {
                            ?>
                                    <form action="index.php" method="POST">
                                        <input type="text" name="id-lector" value="<?php echo $_SESSION['id_lector']; ?>" style="display: none;">
                                        <input type="text" name="id-articulo" value="<?php echo $row['id']; ?>" style="display: none;">
                                        <button type="submit" class="btn btn-info" name="submit-later">Ver más tarde</button>
                                    </form>
                            <?php
                                }
                            }
                            ?>

                            <a href="articulo/mostrar_articulo.php?candidato=<?php echo $row['id']; ?>" class="btn bg-boton">Ver articulo completo</a>
                        </div>
                    </div>
                </div>
            </div>


        <?php

        }
        ?>





    </div>
</section>
<?php
require_once './includes/footer.php';
?>