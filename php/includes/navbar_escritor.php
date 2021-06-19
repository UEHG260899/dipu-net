<?php
require_once(realpath(dirname(__DIR__) . '/includes/header.php'));
$servidor = "localhost";
$usuario = "root";
$pwd = "";
$nombreBD = "examen-u5";
$conn = new mysqli($servidor, $usuario, $pwd, $nombreBD);

if (!$conn) {
    echo 'Error de conexión: ' . mysqli_connect_error();
}
session_start();

$sql = "SELECT * FROM escritor WHERE id_usuario = ".$_SESSION['usuario']['id'] ." ";
$resultado = mysqli_query($conn, $sql);
$escritor = mysqli_fetch_assoc($resultado);

?>
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-principal ">
        <div class="container">
            <a class="navbar-brand" href="#">
                <p class="my-0">Dipu-net</p>
            </a>

            <button data-toggle="collapse" class="navbar-toggler" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link " href="<?php echo $root . '/php/escritor/home.php' ?>">Inicio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            Artículo
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="<?php echo $root . '/php/escritor/articulo/crear.php' ?>">Crear artículo</a>
                        </div>
                    </li>
                </ul>

                <ul class="nav navbar-nav ml-auto">
                    <a class="ml-auto" style="float:right; padding: .5rem 1rem;">
                        <?php   
                        echo "Bienvenido: " . $escritor['nombre'] ; 
                        ?>
                    </a>
                    <li class="nav-item" role="presentation">
                    <a class="nav-link " href=<?php echo $root . '/php/index.php?logout' ?>>Cerrar sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>