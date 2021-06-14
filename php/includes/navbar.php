<?php
require_once(realpath(dirname(__DIR__) . '/includes/header.php'));
session_start();
if ($_SERVER['QUERY_STRING'] == 'logout') {
    session_unset();
    header('Location:' . $root . '/php/index.php');
}
?>
<nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-principal ">
    <div class="container">
        <a class="navbar-brand" href=<?php echo $root . '/php/index.php' ?>>
            <p class="my-0">Dipu-net</p>
        </a>

        <button data-toggle="collapse" class="navbar-toggler" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="nav navbar-nav">
                <li class="nav-item" role="presentation">
                    <a class="nav-link " href=<?php echo $root . '/php/index.php' ?>>Inicio</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link " href=<?php echo $root . '/php/catalogo.php' ?>>Articulos</a>
                </li>
            </ul>
            <ul class="nav navbar-nav ml-auto">
                <?php
                if (isset($_SESSION['usuario']['correo'])) {
                ?>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link " href=<?php echo $root . '/php/mi-cuenta.php' ?>><?php echo $_SESSION['usuario']['correo']; ?></a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link " href=<?php echo $root . '/php/index.php?logout' ?>>Cerrar sesión</a>
                    </li>
                <?php
                } else {
                ?>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link " href=<?php echo $root . '/php/login.php' ?>>iniciar sesión</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link " href=<?php echo $root . '/php/register.php' ?>>registrarse</a>
                    </li>
                <?php
                }
                ?>


            </ul>
        </div>
    </div>
</nav>