<?php

/** @var yii\web\View $this */

$this->title = 'Plantilla Personal';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1 class="display-4">Bienvenidos a mi blog personal</h1>

        <p class="lead">.</p>

        <p><a class="btn btn-lg btn-success" href="https://www.yiiframework.com">¡Comencemos!</a></p>
    </div>

    <div class="body-content">
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="card">
                    <!-- style="width: 30%" -->
                    <div class="card-header">
                        Datos
                    </div>
                    <div class="card-body">
                        <p>Nombre: <b>Maite Morena Manrique</b></p>
                        <p>Email: <b>maitemanrique2019@gmail.com</b></p>
                        <p>Teléfono: <b>2974370793</b></p>
                        <p>Fecha nacimiento: <b>02/12/2005</b></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <h4>Mis Habilidades</h4>
                <h5>Habilidades interpersonales</h5>
                
                <p>Tengo dos tipos de habilidades, ya que algunas son interpersonales y otras son técnicas.</p>
                

                <span class="badge text-bg-primary">Trabajo en equipo</span>
                <span class="badge text-bg-secondary">Adaptabilidad</span>
                <span class="badge text-bg-success">Responsabilidad</span>
                <span class="badge text-bg-danger">Comunicacion efectiva</span>
            </div>
            <div class="col-lg-4 col-sm-6">

                <h5>Habilidades Técnicas</h5>

                <p>Cada habilidad se fue formando a medida del tiempo en el hámbito escolar, secundario y en horas estracurriculares.</p>
                <span class="badge text-bg-primary">Programación y Desarrollo (Básico)</span>
                <span class="badge text-bg-secondary">Diseño Gráfico</span>
                <span class="badge text-bg-success">Excel Avanzado</span>
            </div>
        </div>
        
        <div class="row pt-3">
            <div class="col-lg-4">
                <h2>Formación</h2>

                <p><b>ESCUELA SECUNDARIA DE EDUCACIÓN TÉCNICA PROFESIONAL N°742</b></p>
            </div>
        </div>

        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
                </li>
            </ul>
        </nav>

    </div>
</div>
