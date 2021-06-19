<?php
require_once '../includes/navbar.php';
?>

<?php 
    
    session_start();

    if (isset($_SESSION['id_lector'])) {
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

            $sql = "SELECT CONCAT_WS(' ',c.nombre ,c.ap_paterno ,c.ap_materno) as candidato
                      ,CONCAT_WS(' ',e.nombre , e.ap_paterno , e.ap_materno) as escritor
                      ,a.id as id_articulo   
                      ,a.id_candidato as id_candidato 
                      ,p.url_imagen as img_partido
                      ,c.url_imagen as img_candidato                  
                  FROM articulo a INNER JOIN escritor e ON a.id_escritor = e.id
                                  INNER JOIN candidato c ON a.id_candidato = c.id
                                  INNER JOIN partidos p ON c.id_partido = p.id   
                 WHERE  a.id IN (SELECT id_articulo                  
                                   FROM mas_tarde
                                  WHERE id_lector = '$idLector')";
            
            $resultadoConsulta = mysqli_query($db, $sql);  

        }
    }
    else{

    }
    
?>

<br>
<br>
<br>
<div class="container mb-large">
    <h4>Aquí se encuentra tu lista de artículos guardados para leer en el momento que desees</h4>
    <br>
    <div class="row">
        <div class=" col-lg-4 col-md-4 col-sm-8 col-8">
            <input type="text" class="form-control" id="iptNomCandidatoSaved" placeholder="Nombre del candidato">
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
            <button class="btn bg-boton" id="btnBuscarGuardados"><span><i class="fa fa-search"></i></span> Buscar</button>
        </div>
    </div>
    <br>
    <hr>
    <br>
    <h4>Resultados de la búsqueda</h4>
    <br>
    <div class="row" id="rowCardsSaved">
        <?php 
            while($articulo = mysqli_fetch_array($resultadoConsulta)){
        ?>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card about">
                    <div class="d-flex justify-content-between">
                        <p class="my-1 ml-3"><?php echo $articulo['candidato']?></p>
                        <img src="../../img/partidos/iconos/<?php echo $articulo['img_partido']?>" alt="" width="50px" height="50px">
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-center">

                            <img src="../../img/candidatos/<?php echo $articulo['img_candidato']?>" alt="" width="200px" height="200px" class="text-center">
                        </div>

                        <p class="card-text text-right">Autor: <?php echo $articulo['escritor']?></p>
                        <div class="d-flex justify-content-between">
                            <button class="btn btn-info btnEliminarGuardado" dataId="<?php echo $articulo['id_articulo']?>">Eliminar</button>
                            <button class="btn bg-boton btnVerCompleto" dataId="<?php echo $articulo['id_articulo']?>" id_candidato = "<?php echo $articulo['id_candidato']?>">Ver articulo completo</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php     
            }  
        ?>
    </div>
</div>

<div class="modal fade" id="mdlConfirm">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      
      <div class="modal-header">
        <h4 class="modal-title">¡Confirmar Operación!</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="row mb-3 mt-3">
            <div class="col-md-12">
                <p>¿Está seguro de que desea eliminar el artículo de su lista para "Leer más tarde"?</p>
            </div>
            
        </div>
        
      </div>
      <div class="modal-footer">
        <form action="../login.php" method="get" id="formLogin">
            <button type="submit" class="btn bg-boton" id="btnAcept" data-dismiss="modal"><span><i class="fa fa-check"></i></span> Aceptar</button>
            
        </form>
        <button type="button" class="btn btn-info" data-dismiss="modal"><span><i class="fa fa-times-circle"></i></span> Cancelar</button>
      </div>

    </div>
  </div>
</div>

<div class="modal fade" id="mdlErrorSaved">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      
      <div class="modal-header">
        <h4 class="modal-title" id="titleResultSaved">¡Error!</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="row mb-3 mt-3">
            <div class="col-md-12">
                <p id="pResultSaved">Ocurrió un problema inesperado al eliminar el artículo.</p>
            </div>
            
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal"><span><i class="fa fa-times-circle"></i></span> Cerrar</button>
      </div>

    </div>
  </div>
</div>


<form action="../articulo/mostrar_articulo.php" method="get" id="formIdArt" hidden>
    <input type="text" name="candidato" id="candidato">
</form>

<?php
require_once '../includes/footer.php';
?>

<script src="../../js/articulo/guardado_functions.js"></script>