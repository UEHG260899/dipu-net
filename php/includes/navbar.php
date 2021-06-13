<?php
require_once (realpath(dirname(__DIR__) . '/includes/header.php'));
?>
<nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-principal ">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <p class="my-0">Dipu-net</p>
        </a>

        <button data-toggle="collapse" class="navbar-toggler" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="nav navbar-nav">
                <li class="nav-item" role="presentation">
                    <a class="nav-link " href="index.php">Inicio</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link " href="articulos.php">Articulos</a>
                </li>
            </ul>
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item" role="presentation">
                    <a class="nav-link " href="login.php">iniciar sesión</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link " href="register.php">registrarse</a>
                </li>
            </ul>
        </div>
    </div>
</nav>