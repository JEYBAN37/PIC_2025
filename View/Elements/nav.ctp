<?php
$enlace_actual = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$auxDsr = strrpos($enlace_actual, 'edit');

?>
<?php
$enlace_actual = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$auxDsr1 = strrpos($enlace_actual, 'editanexo');

?>

<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <?php
        if ($auxDsr === false) {
            echo '<a class="navbar-brand" href="../users/home">Sistema de Información Ciudad Bienestar</a>';
        } else {
            echo '<a class="navbar-brand" href="../../users/home">Sistema de Información Ciudad Bienestar</a>';
        }

        ?>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">
        <li class="dropdown">
            <?php
            if ($auxDsr === false) {
                echo '<a href="../users/home">';
            } else {
                echo '<a href="../../users/home">';
            }
            ?>            
                <i> <svg class="bi bi-house-fill" width="25px" height="25px" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 3.293l6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                        <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                    </svg></i>

                <?php
                if ($auxDsr === false) {
                    echo '<i><img src="../img/flechaabajo.png" alt="Imagen de marcador genérico" width="10px" height="10px"></i>';
                } else {
                    echo '<i><img src="../../img/flechaabajo.png" alt="Imagen de marcador genérico" width="10px" height="10px"></i>';
                }
                ?>

            </a>

            <!-- /.dropdown-messages -->
        </li>
        <li class="dropdown">
            <a data-toggle="dropdown" href="#">
                <i> <svg class="bi bi-info-square-fill" width="25px" height="25px" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm8.93 4.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"></path>
                    </svg></i>
                    <?php
                    if ($auxDsr === false) { 
                        echo '<i><img src="../img/flechaabajo.png" alt="Imagen de marcador genérico" width="10px" height="10px"></i>';
                    } else {
                        echo '<i><img src="../../img/flechaabajo.png" alt="Imagen de marcador genérico" width="10px" height="10px"></i>';
                    }              
                    ?>
                
            </a>
            <ul class="dropdown-menu dropdown-messages">
                <li>
                    <a href="#">
                        <div>
                            <strong>Acceso a sistema</strong>
                            <span class="pull-right text-muted">
                                <em>2023</em>
                            </span>
                        </div>
                        <div>Realizar la solicitud de usuario y contraseña al correo planintervencionescolectivas@saludpasto.gov.co</div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="https://ciudadbienestar.github.io/usuariosSICB/Index.html" target="_blank">
                        <div>
                            <strong>Recordar contraseña </strong>
                            <span class="pull-right text-muted">
                                <em>2023</em>
                            </span>
                        </div>
                        <div>Haz click aquí</div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#">
                        <div>
                            <strong>Capacitación </strong>
                            <span class="pull-right text-muted">
                                <em>05 2023</em>
                            </span>
                        </div>
                        <div>Mayo Capacitación CB</div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="https://www.ciudadbienestar.gov.co/index.php/blog/12-escuela-de-participacion-politica-en-salud-y-transformacion-social">
                        <div>
                            <strong>Autoformación </strong>
                            <span class="pull-right text-muted">
                                <em>05 2023</em>
                            </span>
                        </div>
                        <div>Aula Virtual CB</div>
                    </a>
                </li>
                <li class="divider"></li>
                <!--li>
                    <a href="#">
                        <div>
                            <strong>Anexo tecnico COVID </strong>
                            <span class="pull-right text-muted">
                                <em>Yesterday</em>
                            </span>
                        </div>
                        <div>En el modulo anexo tecnico puede revisar los productos y tareas</div>
                    </a>
                </li-->
                <li class="divider"></li>
                <li>
                    <a class="text-center" href="#">
                        <strong>ir a notas Administrador</strong>
                        <i><?php
                if ($auxDsr === false) {
                    echo '<i><img src="../img/flecha.png" alt="Imagen de marcador genérico" width="10px" height="10px"></i>';
                } else {
                    echo '<i><img src="../../img/flecha.png" alt="Imagen de marcador genérico" width="10px" height="10px"></i>';
                }
                ?></i>
                    </a>
                </li>
            </ul>
            <!-- /.dropdown-messages -->
        </li>
        <!-- /.dropdown -->
        <!--li class="dropdown">
            <a data-toggle="dropdown" href="#">
                <i><svg class="bi bi-list-task" width="25px" height="25px" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M2 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5V3a.5.5 0 0 0-.5-.5H2zM3 3H2v1h1V3z"></path>
                        <path d="M5 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM5.5 7a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 4a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9z"></path>
                        <path fill-rule="evenodd" d="M1.5 7a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5V7zM2 7h1v1H2V7zm0 3.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5H2zm1 .5H2v1h1v-1z"></path>
                    </svg></i> <?php
                if ($auxDsr === false) {
                    echo '<i><img src="../img/flechaabajo.png" alt="Imagen de marcador genérico" width="10px" height="10px"></i>';
                } else {
                    echo '<i><img src="../../img/flechaabajo.png" alt="Imagen de marcador genérico" width="10px" height="10px"></i>';
                }
                ?>
            </a>
            </a>
            <ul class="dropdown-menu dropdown-tasks" style="width: 502px;">
            <a class="text-center" ><strong>Avance primer cohorte julio-agosto 2021</strong></a>
                <div class="col-lg-6">
                <li>
                    <a href="#">
                        <div>
                            <p>
                                <strong>Salud Menta -CSSM</strong>
                                <span class="pull-right text-muted">22.17%</span>
                            </p>
                            <div class="progress progress-striped active">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 22.17%">
                                    <span class="sr-only">22.17% Complete (success)</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#">
                        <div>
                            <p>
                                <strong>G.Diferencial- GDPV</strong>
                                <span class="pull-right text-muted">50.59%</span>
                            </p>
                            <div class="progress progress-striped active">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 50.59%">
                                    <span class="sr-only">50.59% Complete</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#">
                        <div>
                            <p>
                                <strong>Ambito laboral - SAL</strong>
                                <span class="pull-right text-muted">29.05%</span>
                            </p>
                            <div class="progress progress-striped active">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 29.05%">
                                    <span class="sr-only">29.05% Complete (info)</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#">
                        <div>
                            <p>
                                <strong>Ambiental - SAM</strong>
                                <span class="pull-right text-muted">54.74%</span>
                            </p>
                            <div class="progress progress-striped active">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 54.74%">
                                    <span class="sr-only">54.74% Complete (danger)</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#">
                        <div>
                            <p>
                                <strong>Nutricional - SAN</strong>
                                <span class="pull-right text-muted">8.76%</span>
                            </p>
                            <div class="progress progress-striped active">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 8.76%">
                                    <span class="sr-only">8.76% Complete (danger)</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="divider"></li>
                </div>
                <div class="col-lg-6">
                
                <li>
                    <a href="#">
                        <div>
                            <p>
                                <strong>S. Sexual - SDSDR</strong>
                                <span class="pull-right text-muted">13.02%</span>
                            </p>
                            <div class="progress progress-striped active">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 13.02%">
                                    <span class="sr-only">13.02% Complete (danger)</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#">
                        <div>
                            <p>
                                <strong>Cronicas - VSCNT</strong>
                                <span class="pull-right text-muted">31.46%</span>
                            </p>
                            <div class="progress progress-striped active">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 31.46%">
                                    <span class="sr-only">31.46% Complete (danger)</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#">
                        <div>
                            <p>
                                <strong>Transmisibles - VSENT</strong>
                                <span class="pull-right text-muted">43.21%</span>
                            </p>
                            <div class="progress progress-striped active">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 43.21%">
                                    <span class="sr-only">43.21% Complete (danger)</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#">
                        <div>
                            <p>
                                <strong>Transversales - TDM</strong>
                                <span class="pull-right text-muted">12.67% </span>
                            </p>
                            <div class="progress progress-striped active">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 12.67%">
                                    <span class="sr-only">12.67% Complete (danger)</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#">
                        <div>
                            <p>
                                <strong>Total avance</strong>
                                <span class="pull-right text-muted">26.06% </span>
                            </p>
                            <div class="progress progress-striped active">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 26.06%">
                                    <span class="sr-only">26.06% Complete (danger)</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                </div> 
                <li>
                    <a class="text-center" href="#">
                        <strong>Ver más estadísticas</strong><i>
                        <?php
                if ($auxDsr === false) {
                    echo '<i><img src="../img/flecha.png" alt="Imagen de marcador genérico" width="10px" height="10px"></i>';
                } else {
                    echo '<i><img src="../../img/flecha.png" alt="Imagen de marcador genérico" width="10px" height="10px"></i>';
                }
                ?></i>
                    </a>
                </li>
            </ul>
            <!-- /.dropdown-tasks>
        <--/li>
        <!-- /.dropdown -->
        <li class="dropdown">
            <a data-toggle="dropdown" href="#">
                <i><svg class="bi bi-alarm-fill" width="25px" height="25px" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M5.5.5A.5.5 0 0 1 6 0h4a.5.5 0 0 1 0 1H9v1.07a7.002 7.002 0 0 1 3.537 12.26l.817.816a.5.5 0 0 1-.708.708l-.924-.925A6.967 6.967 0 0 1 8 16a6.967 6.967 0 0 1-3.722-1.07l-.924.924a.5.5 0 0 1-.708-.708l.817-.816A7.002 7.002 0 0 1 7 2.07V1H5.999a.5.5 0 0 1-.5-.5zM.86 5.387A2.5 2.5 0 1 1 4.387 1.86 8.035 8.035 0 0 0 .86 5.387zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1zm-5 4a.5.5 0 0 0-1 0v3.882l-1.447 2.894a.5.5 0 1 0 .894.448l1.5-3A.5.5 0 0 0 8.5 9V5z"></path>
                    </svg></i><i>  <?php
                if ($auxDsr === false) {
                    echo '<i><img src="../img/flechaabajo.png" alt="Imagen de marcador genérico" width="10px" height="10px"></i>';
                } else {
                    echo '<i><img src="../../img/flechaabajo.png" alt="Imagen de marcador genérico" width="10px" height="10px"></i>';
                }
                ?> </i>
            </a>
            <ul class="dropdown-menu dropdown-alerts">
                <li>
                    <a href="#">
                        <div>
                            <i> <?php
                if ($auxDsr === false) {
                    echo '<i><img src="../img/flecha.png" alt="Imagen de marcador genérico" width="10px" height="10px"></i>';
                } else {
                    echo '<i><img src="../../img/flecha.png" alt="Imagen de marcador genérico" width="10px" height="10px"></i>';
                }
                ?></i> Mesa de referentes
                            <span class="pull-right text-muted small">por programar</span>
                        </div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#">
                        <div>
                            <i> <?php
                if ($auxDsr === false) {
                    echo '<i><img src="../img/flecha.png" alt="Imagen de marcador genérico" width="10px" height="10px"></i>';
                } else {
                    echo '<i><img src="../../img/flecha.png" alt="Imagen de marcador genérico" width="10px" height="10px"></i>';
                }
                ?></i> 1er Cohorte administrativo
                            <span class="pull-right text-muted small">por programar</span>
                        </div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#">
                        <div>
                            <i><?php
                if ($auxDsr === false) {
                    echo '<i><img src="../img/flecha.png" alt="Imagen de marcador genérico" width="10px" height="10px"></i>';
                } else {
                    echo '<i><img src="../../img/flecha.png" alt="Imagen de marcador genérico" width="10px" height="10px"></i>';
                }
                ?></i> Segundo Cohorte
                            <span class="pull-right text-muted small">por programar</span>
                        </div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#">
                        <div>
                            <i><?php
                if ($auxDsr === false) {
                    echo '<i><img src="../img/flecha.png" alt="Imagen de marcador genérico" width="10px" height="10px"></i>';
                } else {
                    echo '<i><img src="../../img/flecha.png" alt="Imagen de marcador genérico" width="10px" height="10px"></i>';
                }
                ?></i> Monitoreo ejecucion PIC
                            <span class="pull-right text-muted small">por programar</span>
                        </div>
                    </a>
                </li>

                <li class="divider"></li>
                <li>
                    <a class="text-center" href="#">
                        <strong>Revisar cronograma</strong>
                        <i> <?php
                if ($auxDsr === false) {
                    echo '<i><img src="../img/flecha.png" alt="Imagen de marcador genérico" width="10px" height="10px"></i>';
                } else {
                    echo '<i><img src="../../img/flecha.png" alt="Imagen de marcador genérico" width="10px" height="10px"></i>';
                }
                ?></i>
                    </a>
                </li>
            </ul>
            <!-- /.dropdown-alerts -->
        </li>
        <!-- /.dropdown-alerts -->
        </li>
        <!-- /.dropdown -->
        <li class="dropdown">
            <a data-toggle="dropdown" href="#">
                <i><svg class="bi bi-toggle-off" width="25px" height="25px" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M11 4a4 4 0 0 1 0 8H8a4.992 4.992 0 0 0 2-4 4.992 4.992 0 0 0-2-4h3zm-6 8a4 4 0 1 1 0-8 4 4 0 0 1 0 8zM0 8a5 5 0 0 0 5 5h6a5 5 0 0 0 0-10H5a5 5 0 0 0-5 5z"></path>
                    </svg></i> <?php
                if ($auxDsr === false) {
                    echo '<i><img src="../img/flechaabajo.png" alt="Imagen de marcador genérico" width="10px" height="10px"></i>';
                } else {
                    echo '<i><img src="../../img/flechaabajo.png" alt="Imagen de marcador genérico" width="10px" height="10px"></i>';
                }
                ?> </i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="#"><i><?php
                if ($auxDsr === false) {
                    echo '<i><img src="../img/users1.png" alt="Imagen de marcador genérico" width="20px" height="20px"></i> User Profile</a></i>';
                } else {
                    echo '<i><img src="../../img/users1.png" alt="Imagen de marcador genérico" width="20px" height="20px"></i> User Profile</a></i>';
                }
                ?>
                </i>
                    
                </li>
                <li><a href="#"><i><?php
                if ($auxDsr === false) {
                    echo '<i><img src="../img/config.png" alt="Imagen de marcador genérico" width="20px" height="20px"></i> Settings</a></i>';
                } else {
                    echo '<i><img src="../../img/config.png" alt="Imagen de marcador genérico" width="20px" height="20px"></i> Settings</a></i>';
                }
                ?></i>
                    
                
               
                </li>
                <li class="divider"></li>
                <li><a href="login.html"><i></i> <?= $usr = $this->Session->read("usr");
                                                    echo $this->Html->link("Cerrar Sesión", "/users/salir", array());
                                                    ?> </a>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>

</nav>

