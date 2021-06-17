<?php

session_start();

if (isset($_SESSION['id_lector'])) {

    $idArticulo = $_REQUEST["idArticulo"];

    $servidor = "localhost";
    $usuarioBD = "root";
    $pwdBD = "";
    $nomBD = "examen-u5";

    $idLector = $_SESSION['id_lector'];
    
    $db = mysqli_connect($servidor, $usuarioBD, $pwdBD, $nomBD);

    if (!$db) {
        
        die("La conexión fallo: ". mysqli_connect_error());
    }
    else{
        
        $sql = "DELETE FROM  mas_tarde WHERE id_articulo = '$idArticulo' AND 
                                             id_lector   =' $idLector' ";

        $query = mysqli_query($db,$sql); 
        
        if ($query) {
            //Estatus exito
            echo '0'; 
        } else {
            //Estatus error
            echo '1'; 
        }
            
    }
}
else{

}

?>