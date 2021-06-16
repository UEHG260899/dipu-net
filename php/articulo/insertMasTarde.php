<?php

session_start();

if(!isset($_SESSION['usuario']['id'])){
    echo '2';
}
else{
    $usuario = $_SESSION['usuario']['id'];  
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

        $sql = "SELECT id             
                  FROM lector 
                 WHERE id_usuario = '$usuario'";

        $resultado = mysqli_query($db, $sql);
        if ($resultado->num_rows == 1) {
            
            $lector = mysqli_fetch_assoc($resultado);
            $idLector = $lector ['id'];

            $sql = "INSERT INTO mas_tarde( id_lector, id_articulo) "
            . "VALUES( '$idLector','$idArticulo')";

            if (mysqli_query($db, $sql)) {
                /**
                 * * Se regresa identificador de proceso exitoso
                 */
                echo '0';
            } else {
                /**
                 * * Se regresa identificador de proceso erroneo
                 */
                echo '1';
            }
        
        } else {
            /**
             * * Se regresa identificador de lector no existente
             */
            echo '3';
        }
        
        
            
    }
    
}



?>

