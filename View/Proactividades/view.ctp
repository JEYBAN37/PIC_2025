<?php $this->layout = 'print_' ?>


<?php
// IMPORTANTE: Cambiar la informacion de datos de conexion
$serv = 'localhost';
$port = '3307';
$userS = 'root';
$passS = '20166';
$bd = 'cake_Pic_2023';
?>



<div class="panel panel-default table-responsive">
    <div class="panel-heading">

        <div class="btn-group">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                <?php echo __('Acciones'); ?> <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" role="menu">
                <li><?php echo $this->Html->link(__('Home'), array('controller' => 'users', 'action' => 'home')); ?></li>
                <li><?php echo $this->Html->link(__('Regresar'),  array('controller' => 'proactividades', 'action' => 'index')); ?></li>
                <li><?php echo $this->Html->link(__('Editar Sistematización'), array('action' => 'edit', $proactividad['Proactividad']['id'])); ?> </li>
                <li><?php echo $this->Html->link(__('Nueva sistematización de proceso'), array('controller' => 'proactividades', 'action' => 'add')); ?></li>
                <li><?php echo $this->Html->link(__('Registro de sesiones'), array('controller' => 'sistematizacionprocesosviewtests', 'action' => 'nuebus')); ?> </li>
                <li><?php echo $this->Html->link(__('Agregar sesión'), array('controller' => 'procesoregistros', 'action' => 'add')); ?> </li>
            </ul>
        </div>
    </div>


    <div class="panel-body table-responsive">
        <div class="dataTable_wrapper">


            <div class="col-sm-11 table-responsive">
                <thead>

                    <table width="100%" class="table table-striped table-bordered table-hover table-responsive">



                        <tr>
                            <td rowspan="4"><img src="../../img/logo_Pasto.png" width="110" height="auto"></td>
                        </tr>
                        <tr>
                            <td colspan="8">PROCESO SALUD PÚBLICA</td>
                        </tr>
                        <tr>
                            <td colspan="8">NOMBRE DEL FORMATO:SISTEMATIZACIÓN ACTIVIDADES PIC</td>
                        </tr>
                        <tr>
                            <td>VIGENCIA: 2021</td>
                            <td>VERSION:XX</td>
                            <td colspan="3">CÓDIGO: SP-F-XXX</td>
                            <td colspan="2">PÁGINA:</td>

                        </tr>

                        <tr>

                            <td colspan="5"><?php echo __('Ficha de sistematización de procesos, se diligencia y complementa durante y hasta finalizar el proceso formativo o educativo'); ?></td>
                            <td><?php echo __('Id sistematización:'); ?></td>
                            <td><?php echo h($proactividad['Proactividad']['id']); ?></td>
                        </tr>

                        <tr>
                            <td><?php echo __('Dimensión:'); ?></td>
                            <td colspan="3"><?php echo h($proactividad['Producto']['dimensiones']); ?></td>
                            <td>Entorno:<?php echo h($proactividad['Producto']['entorno']); ?></td>
                            <td><?php echo __('Producto:'); ?></td>
                            <td colspan="2"><?php echo h($proactividad['Producto']['activity']); ?></td>



                        </tr>
                        <tr>
                            <td><?php echo __('Tarea:'); ?></td>
                            <td colspan="3"><?php echo $this->Html->link($proactividad['Producto']['tarea'], array('controller' => 'productos', 'action' => 'view', $proactividad['Producto']['id'])); ?></td>

                            <td><?php echo __('Producto relacionado:'); ?></td>
                            <td colspan="3"><?php echo h($proactividad['Proactividad']['producto1']); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo __('Tema:'); ?></td>
                            <td colspan="6"><?php echo h($proactividad['Proactividad']['objactividad']); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo __('Grupo participante:'); ?></td>
                            <td colspan="6"><?php echo h($proactividad['Proactividad']['grupo']); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo __('Caracteristica población:'); ?></td>
                            <td colspan="6"><?php echo h($proactividad['Proactividad']['poblaciones']); ?></td>
                        </tr>

                    </table>


                    <table width="100%" class="table table-striped table-bordered table-hover">


                        <tr>
                            <td><?php echo __('Objetivo:'); ?></td>
                            <td colspan="6"><?php echo h($proactividad['Proactividad']['objactividad']); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo __('Objetivo especificos:'); ?></td>
                            <td colspan="6"><?php echo h($proactividad['Proactividad']['objetivoespecifico']); ?></td>
                        </tr>

                        <tr>
                            <td><?php echo __('Caracteristica de sesión:') ?></td>
                            <td colspan="4"><?php echo h($proactividad['Proactividad']['caracteristicasesion']); ?></td>
                            <td colspan="2"><?php echo __('Otro tipo:'); ?>
                                <?php echo h($proactividad['Proactividad']['otrocual']); ?></td>
                        </tr>


                        <tr>
                            <td colspan="8"> <?php echo __('RELACION CON LOS OBJETIVOS DE LA ESTRATEGIA') ?></td>
                        </tr>
                        <tr>
                            <td><?php echo __('Individual') ?></td>
                            <td><?php echo h($proactividad['Proactividad']['objetivouno']); ?></td>
                            <td><?php echo __('Comunitario'); ?></td>
                            <td colspan="2"><?php echo h($proactividad['Proactividad']['objetivodos']); ?></td>
                            <td><?php echo __('Institucional'); ?></td>
                            <td colspan="2"><?php echo h($proactividad['Proactividad']['objetivotres']); ?></td>
                        </tr>
                    </table>

                    <table width="100%" class="table table-striped table-bordered table-hover">
                        <tr>
                            <td colspan="6">CONTRIBUCIÓN A LOS OBJETIVOS</td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                $auxContObj = strrpos(($proactividad['Proactividad']['contobjetivo']), '/');
                                if ($auxContObj === false) {
                                ?>
                                    <?php echo ($proactividad['Proactividad']['contobjetivo']); ?>
                                <?php
                                } else {
                                    print($proactividad['Proactividad']['contobjetivo']);
                                }
                                ?>
                            </td>
                        </tr>
                    </table>

                    <table width="100%" class="table table-striped table-bordered table-hover">
                        <tr>
                            <td colspan="8"> <?php echo __('RELACIÓN CON LAS PREMISAS') ?></td>
                        </tr>
                        <tr>
                            <td><?php echo __('Participación significativa') ?></td>
                            <td><?php echo h($proactividad['Proactividad']['premisauno']); ?></td>
                            <td><?php echo __('Cuerpo territorio'); ?></td>
                            <td><?php echo h($proactividad['Proactividad']['premisados']); ?></td>
                            <td><?php echo __('Ciudadanía Activa'); ?></td>
                            <td><?php echo h($proactividad['Proactividad']['premisatres']); ?></td>
                        </tr>
                    </table>

                    <table width="100%" class="table table-striped table-bordered table-hover">
                        <tr>
                            <td colspan="8">CONTRIBUCIÓN A LAS PREMISAS</td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                $auxContPrem = strrpos(h($proactividad['Proactividad']['contpremisa']), '/');
                                if ($auxContPrem === false) {
                                ?>
                                    <?php echo h($proactividad['Proactividad']['contpremisa']); ?> sin registro
                                <?php
                                } else {
                                    print($proactividad['Proactividad']['contpremisa']);
                                }
                                ?>
                            </td>
                        </tr>
                    </table>

                    <table width="100%" class="table table-striped table-bordered table-hover">
                        <tr>
                            <td colspan="8"> <?php echo __('RELACIÓN CON LAS PERSPECTIVAS') ?></td>
                        </tr>
                        <tr>
                            <td><?php echo __('Derechos') ?></td>
                            <td><?php echo h($proactividad['Proactividad']['perspectivados']); ?></td>
                            <td><?php echo __('Determinación social'); ?></td>
                            <td><?php echo h($proactividad['Proactividad']['perspectivauno']); ?></td>
                        </tr>
                    </table>

                    <table width="100%" class="table table-striped table-bordered table-hover">
                        <tr>
                            <td colspan="8">CONTRIBUCIÓN A LAS PERSPECTIVAS</td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                $auxContPers = strrpos(($proactividad['Proactividad']['contperspectiva']), '/');
                                if ($auxContPers === false) {
                                ?>
                                    <?php echo ($proactividad['Proactividad']['contperspectiva']); ?>
                                <?php
                                } else {
                                    print($proactividad['Proactividad']['contperspectiva']);
                                }
                                ?>
                            </td>
                        </tr>
                    </table>

                    <table width="100%" class="table table-striped table-bordered table-hover">
                        <tr>
                            <td colspan="8"> <?php echo __('RELACIÓN CON LOS ENFOQUES') ?></td>
                        </tr>
                        <tr>
                            <td><?php echo __('Territorial') ?></td>
                            <td><?php echo h($proactividad['Proactividad']['enfoqueuno']); ?></td>
                            <td><?php echo __('Poblacional'); ?></td>
                            <td><?php echo h($proactividad['Proactividad']['enfoquedos']); ?></td>
                            </td>
                            <td><?php echo __('Intercultural'); ?></td>
                            <td><?php echo h($proactividad['Proactividad']['enfoquetres']); ?></td>
                            </td>
                            <td><?php echo __('Diferencial'); ?></td>
                            <td><?php echo h($proactividad['Proactividad']['enfoquecuatro']); ?></td>
                        </tr>
                    </table>

                    <table width="100%" class="table table-striped table-bordered table-hover">
                        <tr>
                            <td colspan="8">CONTRIBUCIÓN CON LOS ENFOQUES</td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                $auxContEnf = strrpos(h($proactividad['Proactividad']['contribucionenfoque']), '/');
                                if ($auxContEnf === false) {
                                ?>
                                    <?php echo h($proactividad['Proactividad']['contribucionenfoque']); ?>
                                <?php
                                } else {
                                    print($proactividad['Proactividad']['contribucionenfoque']);
                                }
                                ?>
                            </td>
                        </tr>
                    </table>


                    <table width="100%" class="table table-striped table-bordered table-hover">
                        <tr>
                            <td colspan="8">COMPROMISOS GENERADOS</td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                $auxComp = strrpos(h($proactividad['Proactividad']['compromiso']), '/');
                                if ($auxComp === false) {
                                ?>
                                   <?php echo h($proactividad['Proactividad']['compromiso']); ?>
                                <?php
                                } else {
                                    print($proactividad['Proactividad']['compromiso']);
                                }
                                ?>
                            </td>
                        </tr>
                    </table>

                    <table width="100%" class="table table-striped table-bordered table-hover">
                        <tr>
                            <td colspan="8">APORTES DE LA COMUNIDAD</td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                $auxApor = strrpos(h($proactividad['Proactividad']['aportes']), '/');
                                if ($auxApor === false) {
                                ?>
                                   <?php echo h($proactividad['Proactividad']['aportes']); ?>
                                <?php
                                } else {
                                    print($proactividad['Proactividad']['aportes']);
                                }
                                ?>
                            </td>
                        </tr>
                    </table>

                    <table width="100%" class="table table-striped table-bordered table-hover">
                        <tr>
                            <td colspan="8">CONCLUSIONES</td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                $auxConcl = strrpos(($proactividad['Proactividad']['conclusiones']), '/');
                                if ($auxConcl === false) {
                                ?>
                                   <?php echo h($proactividad['Proactividad']['conclusiones']); ?>
                                <?php
                                } else {
                                    print($proactividad['Proactividad']['conclusiones']);
                                }
                                ?>
                            </td>
                        </tr>
                    </table>

                    <table width="100%" class="table table-striped table-bordered table-hover">
                        <tr>
                            <td colspan="8">RELATORIA</td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                $auxConcl = strrpos(h($proactividad['Proactividad']['relatoria']), '/');
                                if ($auxConcl === false) {
                                ?>
                                  <?php echo h($proactividad['Proactividad']['relatoria']); ?>
                                <?php
                                } else {
                                    print($proactividad['Proactividad']['relatoria']);
                                }
                                ?>
                            </td>
                        </tr>
                    </table>



                    <table width="100%" class="table table-striped table-bordered table-hover">



                        <tr>
                            <td><?php echo __('RESPONSABLE DEL REGISTRO'); ?></td>
                            <td><?php echo h($proactividad['Responsable']['nombres']); ?> </td>
                            <td><?php echo h($proactividad['Responsable']['profesion']); ?> </td>
                        </tr>



                    </table>

                    <table width="100%" class="table table-striped table-bordered table-hover">
                        <tr>
                            <td><?php echo __('Fecha_ingreso: '); ?><?php echo h($proactividad['Proactividad']['created']); ?></td>
                            <td><?php echo __('Fecha_actualización: '); ?><?php echo h($proactividad['Proactividad']['modified']); ?></td>
                        </tr>
                    </table>

                    <table width="100%" class="table table-striped table-bordered table-hover">
                        <h3><?php echo __('Sesiones realizadas asociados a la sitematizacion de proceso'); ?></h3>
                        <?php if (!empty($proactividad['Procesoregistro'])) : ?>
                            <table width="100%" class="table table-striped table-bordered table-hover">
                                <tr>
                                    <th><?php echo __('Id'); ?></th>
                                    <th><?php echo __('Fecha'); ?></th>
                                    <th><?php echo __('Tematica'); ?></th>
                                    <th><?php echo __('Barrio/vda/corregimiento'); ?></th>
                                    <th><?php echo __('Plsesion Id'); ?></th>
                                    <th><?php echo __('Anexo'); ?></th>
                                    <th><?php echo __('Sisproceso Dir'); ?></th>


                                    <th class="actions"><?php echo __('Acciones'); ?></th>
                                </tr>
                                <?php foreach ($proactividad['Procesoregistro'] as $procesoregistro) : ?>
                                    <tr>
                                        <td><?php echo $procesoregistro['id']; ?></td>
                                        <td><?php echo $procesoregistro['fecha']; ?></td>
                                        <td><?php echo $procesoregistro['tema']; ?></td>
                                        <td><?php
                                            //echo $actividad['ubicacion_id']; 
                                            $link = mysqli_connect($serv, $userS, $passS);
                                            mysqli_select_db($link, $bd);
                                            $tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente
                                            $result = mysqli_query($link, "SELECT barrio FROM Ubicaciones WHERE id = " . $procesoregistro['ubicacion_id']);
                                            while ($fila = mysqli_fetch_array($result)) {
                                                echo $fila['barrio'];
                                                mysqli_close($link);
                                            }
                                            ?></td>

                                        <td><?php echo $procesoregistro['plsesion_id']; ?></td>
                                        <td><?php echo $procesoregistro['anexo']; ?></td>
                                        <td><?php echo $procesoregistro['sisproceso_dir']; ?></td>

                                        <td class="acciones">



                                            <div class="btn-group">
                                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                    <?php echo __('Acciones'); ?> <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><?php echo $this->Html->link(__('Ver'), array('controller' => 'procesoregistros', 'action' => 'view', $procesoregistro['id'])); ?></li>
                                                    <li><?php echo $this->Html->link(__('Editar'), array('controller' => 'procesoregistros', 'action' => 'edit', $procesoregistro['id'])); ?> </li>




                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>









                            <?php endif; ?>
                            </table>
                    </table>
                </thead>

            </div>

        </div>
    </div>


</div>



<script type="text/javascript">
    $(document).ready(function() {
        $('textarea').each(function() {
            this.setAttribute('style', 'height:' + (this.scrollHeight) + 'px;overflow-y:hidden;');
        }).on('input', function() {
            this.style.height = 'auto';
            this.style.height = (this.scrollHeight) + 'px';
        });

    });
</script>