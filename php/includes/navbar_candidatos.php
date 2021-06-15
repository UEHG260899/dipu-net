<!DOCTYPE html>
<html>
<?php
$root = "http://localhost/dipu-net";
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dipu-net</title>
    <link rel="stylesheet" href="<?php echo $root . "/css/bootstrap.min.css"; ?>">
    <link rel="stylesheet" href="<?php echo $root . "/css/styles.css"; ?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

</head>

<body>
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
                    <a class="nav-link " href="articulos.php">Candidatos</a>
                </li>
            </ul>
            
            <ul class="nav navbar-nav ml-auto">
            <a class="ml-auto" style="float:right; padding: .5rem 1rem;">
            Bienvenido
            </a>
                <li class="nav-item" role="presentation">
                    <a class="nav-link " href="register.php">Cerrar sesión</a>
                </li>
            </ul>
        </div>
    </div>
</nav>