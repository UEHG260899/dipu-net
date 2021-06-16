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


$query = "SELECT * FROM partidos";
$result = mysqli_query($conn, $query);
?>

<div class="banner mt-5">
    <p>
        Candidatos y candidatas a diputados
        <br>
        ¡Conocelos!
    </p>

</div>

<div class="container mt-3">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 my-auto">
            <h2>Acerca de la página</h2>
            <p>Dipunet es una plataforma donde usted puede consultar los arituclos correspondientes a cada uno de los candidatos a diputados del Estado de México.</p>
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
<section class="container mb-large">
    <h2 class="mb-3">Últimos articulos</h2>
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between bg-principal">

                    <p class="card-text text-left">Jose Antonio Garcia Garcia </p>
                    <img src="../img/partidos/iconos/pan.png" alt="" width="50px" height="50px">


                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-center">

                        <img src="../img/avatar.png" alt="" width="200px" height="200px" class="text-center">
                    </div>

                    <p class="card-text text-right">Autor: Eduardo Apodaca</p>
                    <div class="d-flex justify-content-between">
                        <button class="btn btn-info">Ver más tarde</button>
                        <button class="btn bg-boton">Ver articulo completo</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between bg-principal">

                    <p class="card-text text-left">Jose Antonio Garcia Garcia </p>
                    <img src="../img/partidos/iconos/pan.png" alt="" width="50px" height="50px">


                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-center">

                        <img src="../img/avatar.png" alt="" width="200px" height="200px" class="text-center">
                    </div>

                    <p class="card-text text-right">Autor: Eduardo Apodaca</p>
                    <div class="d-flex justify-content-between">
                        <button class="btn btn-info">Ver más tarde</button>
                        <button class="btn bg-boton">Ver articulo completo</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between bg-principal">

                    <p class="card-text text-left">Jose Antonio Garcia Garcia </p>
                    <img src="../img/partidos/iconos/pan.png" alt="" width="50px" height="50px">


                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-center">

                        <img src="../img/avatar.png" alt="" width="200px" height="200px" class="text-center">
                    </div>

                    <p class="card-text text-right">Autor: Eduardo Apodaca</p>
                    <div class="d-flex justify-content-between">
                        <button class="btn btn-info">Ver más tarde</button>
                        <button class="btn bg-boton">Ver articulo completo</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<?php
require_once './includes/footer.php';
?>