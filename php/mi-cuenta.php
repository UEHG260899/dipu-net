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
session_start();


if (isset($_SESSION['usuario'])) {
    $correo = $_SESSION['usuario']['correo'];
}
?>
<div class="container mt-5">
    <h1>Mi cuenta</h1>
    <div class="card">

        <div class="card-body">
            <div class="row">
                <div class="offset-lg-1 col-lg-4 col-md-4 col-sm-8 ">
                    <p>Nombre: <strong>Eduardo</strong></p>
                </div>
                <div class="offset-lg-1 col-lg-4 col-md-4 ">
                    <p>Apellidos: <strong>Jimenez Apodaca</strong></p>
                </div>
            </div>
            <div class="row">
                <div class="offset-lg-1 col-lg-6 col-md-6 col-sm-8 ">
                    <p>Correo: <strong><?php echo $correo ?></strong></p>
                </div>
            </div>
            <div class="row">
                <div class="offset-lg-1 col-lg-6 col-md-6 col-sm-8 ">
                    <p>Fecha de nacimiento: <strong>25/10/1999</strong></p>
                </div>
            </div>
            <div class="row">
                <div class="offset-lg-1 col-lg-6 col-md-6 col-sm-8 ">
                    <button class="btn bg-boton">Editar mis datos</button>
                </div>
            </div>



        </div>
    </div>
    <div class="card mt-5">

        <div class="card-body">
            <div class="row">
                <div class="col-8 mx-auto">
                    <div class="row">
                        <div class="col-5">
                            <div class="card">
                                <div class="card-header text-center bg-principal">
                                    Artículos Guardados
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-center"><strong>5</strong></h5>
                                    <div class="d-flex justify-content-center">
                                        <button class="btn bg-boton mt-3">Ver todo</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" col-5 ml-auto">
                            <div class="card">
                                <div class="card-header text-center bg-principal">
                                    Articulos comentados
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-center"><strong>7</strong></h5>
                                    <div class="d-flex justify-content-center">
                                        <button class="btn bg-boton mt-3">Ver todo</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
</div>
<?php
require_once './includes/footer.php';
?>