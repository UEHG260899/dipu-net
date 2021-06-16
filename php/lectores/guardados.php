<?php
require_once '../includes/navbar.php';
?>

<?php 
  
    $servidor = "localhost";
    $usuarioBD = "root";
    $pwdBD = "";
    $nomBD = "examen-u5";

    $db = mysqli_connect($servidor, $usuarioBD, $pwdBD, $nomBD);

    if (!$db) {
        
        die("La conexión fallo: ". mysqli_connect_error());
    }
    else{
        
        $sql = "SELECT *                  
                  FROM mas_tarde
                 WHERE id_lector = 'Publicado'";

        $resultadoConsulta = mysqli_query($db, $sql);  

    }
?>

<br>
<br>
<br>
<div class="container mb-large">
    <h4>Aquí se encuentra tu lista de artículos guardados para leer en el momento que desees</h4>
    <br>
    <div class="row">
        <div class=" col-lg-4 col-md-4 col-sm-8 col-8">
            <input type="text" class="form-control" id="iptNomCandidato" placeholder="Nombre del candidato">
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
            <button class="btn bg-boton"><span><i class="fa fa-search"></i></span> Buscar</button>
        </div>
    </div>
    <br>
    <hr>
    <br>
    <h4>Resultados de la búsqueda</h4>
    <br>
    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
            <div class="card">
                <div class="d-flex justify-content-between">
                    <p class="my-1 ml-3">Jose Antonio Garcia Garcia</p>
                    <img src="../../img/partidos/iconos/pan.png" alt="" width="50px" height="50px">
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-center">

                        <img src="../../img/avatar.png" alt="" width="200px" height="200px" class="text-center">
                    </div>

                    <p class="card-text text-right">Autor: Eduardo Apodaca</p>
                    <div class="d-flex justify-content-between">
                        <button class="btn btn-info">Ver más tarde</button>
                        <button class="btn bg-boton">Ver articulo completo</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
            <div class="card">
                <div class="d-flex justify-content-between">
                    <p class="my-1 ml-3">Jose Antonio Garcia Garcia</p>
                    <img src="../../img/partidos/iconos/pan.png" alt="" width="50px" height="50px">
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-center">

                        <img src="../../img/avatar.png" alt="" width="200px" height="200px" class="text-center">
                    </div>

                    <p class="card-text text-right">Autor: Eduardo Apodaca</p>
                    <div class="d-flex justify-content-between">
                        <button class="btn btn-info">Ver más tarde</button>
                        <button class="btn bg-boton">Ver articulo completo</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
            <div class="card">
                <div class="d-flex justify-content-between">
                    <p class="my-1 ml-3">Jose Antonio Garcia Garcia</p>
                    <img src="../../img/partidos/iconos/pan.png" alt="" width="50px" height="50px">
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-center">

                        <img src="../../img/avatar.png" alt="" width="200px" height="200px" class="text-center">
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
</div>




<?php
require_once '../includes/footer.php';
?>