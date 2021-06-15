<?php
require_once '../includes/navbar.php';
?>
<br>
<br>
<br>
<div class="container mb-large">
    <h4>Para una búsqueda más exacta, ingrese el nombre del candidato</h4>
    <br>
    <div class="row">
        <div class="col-md-4">
            <input type="text" class="form-control" id="iptNomCandidato">
        </div>
        <div class="col-md-4">
            <button class="btn bg-boton" data-toggle="modal" data-target="#mdlPartidos"><span><i class="fa fa-search"></i></span> Buscar</button>
        </div>
    </div>
    <br>
    <hr>
    <h4>O bien, seleccione los siguientes criterios</h4>
    <br>
    <form action="" method="post">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="selGradoAcad">Grado Académico:</label>
                    <select class="form-control" id="selGradoAcad">
                        <option>Primaria</option>
                        <option>Secundaria</option>
                        <option>Bachillerato</option>
                        <option>Universidad</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="selRangoEdad">Rango de edad:</label>
                    <select class="form-control" id="selRangoEdad">
                        <option>18 - 29</option>
                        <option>30 - 39</option>
                        <option>40 - 49</option>
                        <option>50 - 59</option>
                        <option>60 +</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="selRangoEdad">Sexo:</label><br>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="rbMasculino">
                            <input type="radio" class="form-check-input" id="rbMasculino" name="rbMasculino" value="masculino" >Masculino
                        </label>
                        </div>
                        <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="rbFemenino" name="rbFemenino" value="femenino">Femenino
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <label for="pwd">Partido Político:</label>
                    <div class="input-group ">
                        <input type="text" class="form-control" placeholder="Buscar">
                            <div class="input-group-append disabled">
                            <button class="btn bg-boton" type="submit"><span><i class="fa fa-search"></i></span></button>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <br>
    <hr>
    <h4>Resultados de la búsqueda</h4>
    <br>
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card">
                <div class="d-flex justify-content-between">
                    <p class="my-1 ml-3">Jose Antonio Garcia Garcia</p>
                    <img src="../../img/partidos/iconos/pan.png" alt="" width="50px" height="50px">
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-center">

                        <img src="../../img/avatar.png" alt="" width="200px" height="200px" class="text-center">
                    </div>

                    <p class="card-text text-right">Autor: Eduardo Apodaca</p>
                    <div class="d-flex justify-content-between">
                        <button class="btn btn-info">Ver más tarde</button>
                        <button class="btn bg-boton">Ver articulo completo</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card">
                <div class="d-flex justify-content-between">
                    <p class="my-1 ml-3">Jose Antonio Garcia Garcia</p>
                    <img src="../../img/partidos/iconos/pan.png" alt="" width="50px" height="50px">
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-center">

                        <img src="../../img/avatar.png" alt="" width="200px" height="200px" class="text-center">
                    </div>

                    <p class="card-text text-right">Autor: Eduardo Apodaca</p>
                    <div class="d-flex justify-content-between">
                        <button class="btn btn-info">Ver más tarde</button>
                        <button class="btn bg-boton">Ver articulo completo</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card">
                <div class="d-flex justify-content-between">
                    <p class="my-1 ml-3">Jose Antonio Garcia Garcia</p>
                    <img src="../../img/partidos/iconos/pan.png" alt="" width="50px" height="50px">
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-center">

                        <img src="../../img/avatar.png" alt="" width="200px" height="200px" class="text-center">
                    </div>

                    <p class="card-text text-right">Autor: Eduardo Apodaca</p>
                    <div class="d-flex justify-content-between">
                        <button class="btn btn-info">Ver más tarde</button>
                        <button class="btn bg-boton">Ver articulo completo</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- The Modal -->
<div class="modal fade" id="mdlPartidos">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Seleccione un Partido Político o Coalición</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="row">
            <div class="col-md-6">
            <!--
                <div class="radio">

                </div>
            </div>-->
            <div class="form-check">
                <label class="form-check-label" for="radio1">
                    <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked><img src="../../img/partidos/iconos/fuerza.png" alt="" width="30px" height="30px" class="text-center">Option 1
                </label>
            </div>
        </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>


<?php
require_once '../includes/footer.php';
?>