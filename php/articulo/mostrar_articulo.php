<?php
    $root_dir = "http://localhost/dipu-net";
    require_once(realpath(dirname(__FILE__) . '/../includes/navbar.php'));
?>
<main>
    <section class="container">
            <div class="row">
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <div>
                        <img src="../hola.jpg" alt="Nombre del candidato">
                    </div>
                    <div>
                        <img src="../hola2.jpg" alt="Imagen Partido">
                    </div>
                    <div class="row">
                        <h3>Nombre del candidato</h3>
                    </div>
                </div>
                <div class="col-sm-12 col-md-9 col-lg-9">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12 col-md-4 col-lg-4">
                                    <h5>Nombre Completo:</h5>
                                    <p>Uriel Enrique Hernández González</p>
                                </div>
                                <div class="col-sm-12 col-md-4 col-lg-4">
                                    <h5>Genero:</h5>
                                    <p>Masculino</p>
                                </div>
                                <div class="col-sm-12 col-md-4 col-lg-4">
                                    <h5>Fecha de nacimiento:</h5>
                                    <p>26/08/1999</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <h5>Estado de Nacimiento:</h5>
                                    <p>México</p>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <h5>Municipio:</h5>
                                    <p>Toluca</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-sm-12 col-md-9 col-lg-9 offset-md-3 offset-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12 col-md-4 col-lg-4">
                                    <h5>Carrera:</h5>
                                    <p>Ingeniería en Sistemas Computacionales</p>
                                </div>
                                <div class="col-sm-12 col-md-4 col-lg-4">
                                    <h5>Escuela de procedencia:</h5>
                                    <p>Instituto Tecnológico de Toluca</p>
                                </div>
                                <div class="col-sm-12 col-md-4 col-lg-4">
                                    <h5>Puesto Actual:</h5>
                                    <p>Estudiante de 8vo Semestre.</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <h5>Distrito:</h5>
                                    <p>Toluca</p>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <h5>Tipo de candidatura</h5>
                                    <p>Diputación Federal</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
    </section>

    <section class="container">
        <h3>Artículo</h3>
        <h4>Por: <a href="#">Uriel Hernández</a></h4>
        <br>
        <div class="row">
            <div class="col-12">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea nostrum quasi tempore obcaecati facilis veritatis, unde itaque repellendus suscipit rem optio ex ratione nulla numquam sit voluptate ipsum consectetur sequi.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, molestias. Odit libero aliquam facere sed numquam? Quidem nam aliquid ipsam perferendis ducimus saepe quod incidunt eos facilis. Soluta, explicabo sequi!
                </p>
            </div>    
        </div>
        <hr>
    </section>

    <section class="container">
        <h3>Comentarios</h3>
        <div class="card">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Do</li>
                <li class="list-group-item">Re</li>
                <li class="list-group-item">Mi</li>
                <li class="list-group-item">Fa</li>
                <li class="list-group-item">Sol</li>
                <li class="list-group-item">
                    <h6>Agregar un comentario:</h6>
                    <div class="row">
                        <div class="col-12">
                            <textarea style="width: 100%"></textarea>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-12 text-right">
                            <button class="btn btn-success">Agregar</button>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
</main>

<?php
    require_once(realpath(dirname(__FILE__) . '/../includes/footer.php'));
?>