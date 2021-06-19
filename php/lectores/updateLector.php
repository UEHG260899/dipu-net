<?php

session_start();

if (isset($_SESSION['id_lector'])) {

    $servidor = "localhost";
    $usuarioBD = "root";
    $pwdBD = "";
    $nomBD = "examen-u5";

    $idLector = $_SESSION['id_lector'];

    $db = mysqli_connect($servidor, $usuarioBD, $pwdBD, $nomBD);

    $nombre = $_REQUEST["nombre"];
    $app = $_REQUEST["app"];
    $apm = $_REQUEST["apm"];
    $fec_nac = $_REQUEST["fec_nac"];

    $sql = "UPDATE lector 
               SET nombre='".$nombre."', 
                   ap_paterno='".$app."', 
                   ap_materno='".$apm."',
                   fecha_nacimiento='".$fec_nac."'  
             WHERE id='".$idLector."' ";

    $query = mysqli_query($db,$sql); 

    if ($query) {
        echo '0';
    } else {
        echo '1';
    }
}
else{
    echo '2';
}

?>