<?php
$servidor = "localhost";
$usuario = "root";
$pwd = "";
$nombreBD = "examen-u5";
$conn = new mysqli($servidor, $usuario, $pwd, $nombreBD);

if (!$conn) {
    echo 'Error de conexión: ' . mysqli_connect_error();
}

if (isset($_GET['candidatoB'])) {
$nombreB = mysqli_real_escape_string($conn, $_GET['candidatoB']);

$sql = "SELECT * FROM candidato WHERE nombre like '$nombreB%'";
$resultado = mysqli_query($conn, $sql);

$i = 0;

while($row = $resultado->fetch_array()){
    $sqlImagen = "SELECT * FROM partidos WHERE id =  " .$row['id_partido']."  ";
    $r = mysqli_query($conn, $sqlImagen);
    $partido = mysqli_fetch_assoc($r);

    if($i == 0){
        echo "<div class='carousel-item active'>";
    }else if($i % 4 == 0){
        echo "<div class='carousel-item'>";
    }
    echo "
<div class='col-md-3' style='float:left'>
    <div class='card' style='border-radius: 10px;' style='box-shadow: 0 3px 10px 0 rgba(0, 0, 0, 0.2);'>
        <div class='card-header' style='background-color: #d80065; color:white'>
            <p class='card-text text-left'>".$row['nombre'] ." ". $row['ap_paterno'] ." ". $row['ap_materno']."</p>
        </div>
        <div class='d-flex align-self-end'>
            <img src='../../../img/partidos/iconos/". $partido['url_imagen'] ."' alt='' width='50px' height='50px'
                class='po'>
        </div>
        <div class='card-body'>
            <div class='d-flex justify-content-center'>

                <img src='../../../img/".$row['url_imagen']."' alt='' width='200px' height='200px'
                    class='text-center'>
            </div>
            <p class='card-text text-left'>Tipo candidatura: ".$row['tipo_candidatura']."</p>
            <p class='card-text text-left'>Distrito: ".$row['distrito']."</p>
            <div class='row justify-content-center mt-2'>
                <div class='col-md-5' style='text-align:center'>
                <div class='form-group'>
                    <div class='input-group'>
                        <div class='input-group-append'>
                            <button class='btn btn-sm bg-boton' type='submit' name='submitElegir' onclick='mostrarDatosCandidato(".$row['id'].")'>Elegir</button>
                        </div>
                    </div>
                </div>
           
                </div>
           
            </div>
        </div>
    </div>
</div>

";
$i++;
if($i % 4 == 0){
    echo "</div>";
}
}
$temp = mysqli_query($conn, $sql);
if($temp->fetch_array() == 0){
    echo "<div class='text-center'>
    <img src='../../../img/escritor/noData.png' alt=' ' width='350' height='350'
    class='text-center'>
    </div>";
    }else{
        echo "</div>";

    }
}
if (isset($_GET['submitElegir'])) {
    $id = mysqli_real_escape_string($conn, $_GET['submitElegir']);
    $sql = "SELECT * FROM candidato WHERE id = '$id'";
    $resultado = mysqli_query($conn, $sql);
    
    while($row = $resultado->fetch_array()){
    
    $sqlImagen = "SELECT * FROM partidos WHERE id =  " .$row['id_partido']."  ";
    $r = mysqli_query($conn, $sqlImagen);
    $partido = mysqli_fetch_assoc($r);
    
    echo "  
    <div class='col-md-3 mt-5' style='text-align:center'>
    <p class='card-text text-center' >".$row['nombre']."</p>
  <img src='../../../img/".$row['url_imagen']."' alt='' width='150px' height='150px'
        class='text-center mb-4' style='box-shadow: 0 3px 10px 0 rgba(0, 0, 0, 0.1);'>

    <div class='col-12'>
        <img src='../../../img/partidos/iconos/".$partido['url_imagen']."' alt='' width='40px' height='40px'
            class='text-center' style='box-shadow: 0 3px 10px 0 rgba(0, 0, 0, 0.1);'>
    </div>
</div>                 
         <div class='col-md-9 mt-5' style='text-align:center'>
    <div class='col-md-12'>
        <div class='card' style='box-shadow: 0 3px 10px 0 rgba(0, 0, 0, 0.1);'>
            <div class='card-body'>
                <div class='row justify-content-around'>
                    <div class='col-md-4 mb-4'>
                        <p class='card-text text-left'><strong>Nombre Completo:
                            </strong><br>" . $row['nombre']." ".$row['ap_paterno'] . " " .$row['ap_materno'] . "</p>
                        <p class='card-text text-left'></p>
                    </div>
                    <div class='col-md-4 mb-4'>
                        <p class='card-text text-left'>
                            <strong>Genero:</strong><br>" . $row['genero'] . "
                        </p>
                        <p class='card-text text-left'></p>
                    </div>
                    <div class='col-md-4 '>
                        <p class='card-text text-left'><strong>Fecha
                                Nacimiento:</strong><br>" . $row['fecha_nacimiento'] . "
                        </p>
                        <p class='card-text text-left'></p>
                    </div>
                </div>
                <div class='row justify-content-center'>
                    <div class='col-md-4 mt-4'>
                        <p class='card-text text-left'><strong>Estado
                                Nacimiento:</strong><br>" . $row['estado'] ."
                        </p>
                        <p class='card-text text-left'></p>
                    </div>
                    <div class='col-md-4 mt-4'>
                        <p class='card-text text-left'><strong>Municipio
                                Nacimiento:</strong><br>" . $row['municipio'] . "</p>
                        <p class='card-text text-left'></p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <input id='idCandidato' value='". $row['id'] ."' hidden>
    <div class='col-md-12'>
        <div class='card' style='box-shadow: 0 3px 10px 0 rgba(0, 0, 0, 0.1);'>
            <div class='card-body'>
                <div class='row justify-content-around'>
                    <div class='col-md-4 mb-4'>
                        <p class='card-text text-left'>
                            <strong>Carrera:</strong><br>" . $row['carrera'] . "
                        </p>
                        <p class='card-text text-left'></p>
                    </div>
                    <div class='col-md-4 mb-4'>
                        <p class='card-text text-left'><strong>Escuela de
                                procedencia:</strong><br>" . $row['escuela'] ."</p>
                        <p class='card-text text-left'></p>
                    </div>
                    <div class='col-md-4'>
                        <p class='card-text text-left'><strong>Puesto
                                actual:</strong><br>" . $row['puesto_actual'] . " </p>
                        <p class='card-text text-left'></p>
                    </div>
                </div>
                <div class='row justify-content-center'>
                    <div class='col-md-4 mt-4'>
                        <p class='card-text text-left'>
                            <strong>Distrito:</strong><br> " . $row['distrito'] ."
                        </p>
                        <p class='card-text text-left'></p>
                    </div>
                    <div class='col-md-4 mt-4'>
                        <p class='card-text text-left'><strong>Tipo de
                                candidatura:</strong><br>" . $row['tipo_candidatura'] . "
                        </p>
                        <p class='card-text text-left'></p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>";
}
}
?>