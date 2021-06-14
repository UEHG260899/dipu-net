<?php
require_once '../includes/navbar_escritor.php';
?>

<div class="container mb-5">
    <div class="col-12 mt-5" style="text-align:right">
        <img src="../../img/avatar.png" alt="" width="65px" height="65px" class="text-center mt-4">
    </div>
    <!--Sección escritor-->
    <div class="row justify-content-md-center mb-3">
        <div class="col-md-4" style="text-align:center">
            <h2>Escritor</h2>
        </div>
    </div>
    <div class="row justify-content-around">
        <div class="col-lg-3 col-md-3 col-sm-12">
            <div class="card" style="border-radius: 10px;">
                <div class="card-header">
                    <p class="card-text text-center">Artículos Publicados</p>
                </div>
                <div class="card-body">
                    <p class="card-text text-center">10</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12">
            <div class="card" style="border-radius: 10px;">
                <div class="card-header">
                    <p class="card-text text-center">Artículos Escritos</p>
                </div>
                <div class="card-body">
                    <p class="card-text text-center">10</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12">
            <div class="card" style="border-radius: 10px;">
                <div class="card-header">
                    <p class="card-text text-center">Número comentarios</p>
                </div>
                <div class="card-body">
                    <p class="card-text text-center">10</p>
                </div>
            </div>
        </div>
    </div>
    <!--Fin Sección escritor-->
    <div class="mb-5">
        <br>
    </div>
</div>
<?php
require_once '../includes/footer.php';
?>