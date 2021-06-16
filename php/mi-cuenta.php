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
    mysqli_query($conn, "SET NAMES UTF8");
    $correo = $_SESSION['usuario']['correo'];
    $id = $_SESSION['usuario']['id'];
    $queryInfo = "SELECT id_usuario,nombre, concat_ws(' ', ap_paterno, ap_materno) as apellidos, fecha_nacimiento 
                FROM lector WHERE id_usuario = $id";
    $resultInfo = mysqli_query($conn, $queryInfo);
    if ($resultInfo) {
        while ($row = mysqli_fetch_array($resultInfo, MYSQLI_ASSOC)) {
            $nombre = $row["nombre"];
            $apellidos = $row["apellidos"];
            $fecha_nacimiento = $row["fecha_nacimiento"];
        }
    } else {
        echo "Algo ha salido mal al momento de realizar la consulta";
    }
}
?>
<div class="container mt-5">
    <h1>Mi cuenta</h1>
    <div class="card">

        <div class="card-body">
            <div class="row">
                <div class="offset-lg-1 col-lg-4 col-md-4 col-sm-8 ">
                    <p>Nombre: <strong><?php echo $nombre; ?></strong></p>
                </div>
                <div class="offset-lg-1 col-lg-4 col-md-4 ">
                    <p>Apellidos: <strong><?php echo $apellidos; ?></strong></p>
                </div>
            </div>
            <div class="row">
                <div class="offset-lg-1 col-lg-6 col-md-6 col-sm-8 ">
                    <p>Correo: <strong><?php echo $correo ?></strong></p>
                </div>
            </div>
            <div class="row">
                <div class="offset-lg-1 col-lg-6 col-md-6 col-sm-8 ">
                    <p>Fecha de nacimiento: <strong><?php echo $fecha_nacimiento; ?></strong></p>
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