<?php
require_once(realpath(dirname(__DIR__) . '/includes/header.php'));
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
                    <a class="nav-link " href="<?php echo $root . '/php/Administrador/home.php' ?>">Inicio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            Candidatos
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Crear candidato</a>
                            <a class="dropdown-item" href="#">Actualizar candidato</a>
                        </div>
                    </li>
                </ul>

                <ul class="nav navbar-nav ml-auto">
                    <a class="ml-auto" style="float:right; padding: .5rem 1rem;">
                    <?php    session_start();
                        echo "Bienvenido: " . substr( $_SESSION["usuario"]['correo'],0, strpos( $_SESSION["usuario"]['correo'],'@'))  ; 
                        ?>
                    </a>
                    <li class="nav-item" role="presentation">
                    <a class="nav-link " href=<?php echo $root . '/php/index.php?logout' ?>>Cerrar sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>