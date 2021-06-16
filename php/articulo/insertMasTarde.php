<?php

session_start();


if(!isset($_SESSION['usuario'])){
    echo '1';
}
else{
    $lector = $_SESSION['usuario'];  
    $idArticulo = $_REQUEST["idArticulo"];

    $servidor = "localhost";
    $usuarioBD = "root";
    $pwdBD = "";
    $nomBD = "examen-u5";

    $db = mysqli_connect($servidor, $usuarioBD, $pwdBD, $nomBD);

    if (!$db) {
        
        die("La conexión fallo: ". mysqli_connect_error());
    }
    else{
        
        
            
    }
    echo '2';
}



?>

