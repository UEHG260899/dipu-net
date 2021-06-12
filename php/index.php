<?php
require_once './includes/navbar.php';
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
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block " src="../img/partidos/pan.png" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Partido Accion nacional</h5>
                    <a href="articulos.php" type="button" class="btn  bg-boton">Ver articulos</a>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block " src="../img/partidos/pan.png" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Partido Accion nacional</h5>
                    <a href="articulos.php" type="button" class="btn  bg-boton">Ver articulos</a>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block " src="../img/partidos/pan.png" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <a href="articulos.php" type="button" class="btn  bg-boton">Ver articulos</a>

                </div>
            </div>
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
                <div class="d-flex justify-content-between">
                    <p class="my-1 ml-3">Jose Antonio Garcia Garcia</p>
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
                <div class="d-flex justify-content-between">
                    <p class="my-1 ml-3">Jose Antonio Garcia Garcia</p>
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
                <div class="d-flex justify-content-between">
                    <p class="my-1 ml-3">Jose Antonio Garcia Garcia</p>
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