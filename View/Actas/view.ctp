<?php $this->layout = 'printactividades' ?>

<div class="row">
    <div class="col-lg-10">
        <div class="panel panel-default">

            <div class="panel-heading">
                <p>Plan de Salud Publica de Intervenciones Colectivas</p>

                <div class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <?php echo ('Acciones'); ?> <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="../../users/home"> Home</a> </li>
                        <li><?php echo $this->Html->link(('Regresar a registros'), array('controller' => 'actaviewtests', 'action' => 'nuebus')); ?> </li>
                        <li><?php echo $this->Html->link(('Editar Acta'), array('action' => 'edit', $acta['Acta']['id'])); ?> </li>
                        <li><?php echo $this->Html->link(('Actualizar anexo'), array('action' => 'editanexo', $acta['Acta']['id'])); ?> </li>
                        <li>
                            <td><?php echo $this->Form->postLink(('Borrar registro'), array('action' => 'delete', $acta['Acta']['id']), array(), __('Esta seguro/a de eliminar registro con ID# %s?', $acta['Acta']['id'])); ?>
                        </li>
                        <li class="divider"></li>
                        <li><a href="javascript:window.print();"> Imprimir</a> </li>
                        <li><a class="copi" href="javascript:getlink();">Copiar URL</a> </li>

                    </ul>
                </div>

            </div>

            <div class="panel-body">
                <div class="dataTable_wrapper">

                    <div class="row">
                        <div class="col-sm-11">

                            <table width="100%" class="table table-striped table-bordered table-hover">

                                <thead>

                                    <tr>
                                    <tr>
                                        <td rowspan="4"><img src="../../img/logo_Pasto.png" width="110" height="auto"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="6">PROCESO SALUD PÚBLICA</td>
                                    </tr>
                                    <tr>
                                        <td colspan="6">NOMBRE DEL FORMATO: ACTA REUNIÓN</td>
                                    </tr>
                                    <td>VIGENCIA: 23-Julio-09</td>
                                    <td>VERSION:01</td>
                                    <td>CÓDIGO: SP-F-001</td>
                                    <td>PÁGINA:</td>

                                    </tr>

                                    <div class="panel-body">
                                        <div class="dataTable_wrapper">

                                            <div class="row">
                                                <div class="col-sm-11">

                                                    <table width="100%" class="table table-striped table-bordered table-hover">
                                                        <tr>
                                                            <td rowspan="2"><?php echo __('Fecha'); ?></td>
                                                            <td>DIA MES AÑO</td>
                                                            <td>HORA INICIO</td>
                                                            <td>HORA FINAL</td>
                                                            <td colspan="3">ACTA Nº</td>
                                                        </tr>
                                                        <tr>

                                                            <td><?php echo ($acta['Acta']['fecha']); ?></td>
                                                            <td><?php echo ($acta['Acta']['hora_inicio']); ?></td>
                                                            <td><?php echo ($acta['Acta']['hora_fin']); ?></td>
                                                            <td colspan="3"><?php echo ($acta['Acta']['id']); ?></td>

                                                        </tr>
                                                        <tr>
                                                            <td><?php echo __('Nombre de la Reunión'); ?></td>
                                                            <td colspan="6"><?php echo ($acta['Acta']['tema']); ?> con <?php echo ($acta['Acta']['grupo']); ?>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td><?php echo __('TEMA'); ?></td>
                                                            <td colspan="6"><?php echo ($acta['Acta']['objactividad']); ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td><?php echo __('Proposito'); ?></td>
                                                            <td colspan="6"><?php echo ($acta['Acta']['alcancereunion']); ?></td>
                                                        </tr>

                                                        <tr>
                                                            <td>Lugar</td>

                                                            <td><?php echo ($acta['Ubicacion']['barrio']); ?></td>
                                                            <td><?php echo ($acta['Ubicacion']['comuna']); ?></td>

                                                            <td colspan="4"><?php echo ($acta['Acta']['lugar']); ?></td>

                                                        </tr>

                                                        <tr>
                                                            <td colspan="8">PERSONAS QUE INTERVIENEN EN LA REUNIÓN</td>

                                                        </tr>


                                                        <tr>

                                                            <td colspan="2">NOMBRE</td>
                                                            <td colspan="2">CARGO</td>
                                                            <td colspan="2">INSTITUCION</td>
                                                            <td colspan="2">FIRMA</td>
                                                        </tr>

                                                        <tr>
                                                            <td colspan="2">1.</td>
                                                            <td colspan="2"></td>
                                                            <td colspan="2"></td>
                                                            <td colspan="2"></td>

                                                        </tr>
                                                        <tr>
                                                            <td colspan="2">2.</td>
                                                            <td colspan="2"></td>
                                                            <td colspan="2"></td>
                                                            <td colspan="2"></td>

                                                        </tr>
                                                        <tr>
                                                            <td colspan="2">3.</td>
                                                            <td colspan="2"></td>
                                                            <td colspan="2"></td>
                                                            <td colspan="2"></td>

                                                        </tr>
                                                        <tr>
                                                            <td colspan="8">Anexo registro de asistencia demás participantes</td>


                                                        </tr>

                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel-body">
                                        <div class="dataTable_wrapper">

                                            <div class="row">
                                                <div class="col-sm-11">

                                                    <table width="100%" class="table table-striped table-bordered table-hover">

                                                        <tr>
                                                            <td colspan="8">ORDEN DEL DÍA</td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                            <?php echo ($acta['Acta']['ordendia']); ?>
                                                            </td>
                                                        </tr>

                                                        <td>COMPROMISOS PREVIOS</td>

                                                        <tr>
                                                                                             

                                                            <td>
                                                            <?php echo ($acta['Acta']['compromisosprevios']); ?>
                                                            </td>
                                                        </tr>


                                                        <td>DESARROLLO DE LA REUNIÓN</td>

                                                        <tr>
                                                            <td>
                                                                <?php
                                                                $auxDsr = strrpos(($acta['Acta']['desarrollo']), '/');
                                                                if ($auxDsr === false) {
                                                                ?>
                                                                    <textarea class="ckeditor" readonly><?php echo ($acta['Acta']['desarrollo']); ?></textarea> <?php
                                                                                                                                                            } else {
                                                                                                                                                                print($acta['Acta']['desarrollo']);
                                                                                                                                                            }
                                                                                                                                                                ?>
                                                            </td>
                                                        </tr>

                                                        <td>COMPROMISOS</td>


                                                        <tr>
                                                            <td>
                                                                <?php
                                                                $auxComp = strrpos(($acta['Acta']['compromiso']), '/');
                                                                if ($auxComp === false) {
                                                                ?>
                                                                    <textarea readonly id="" style="margin: 0px; width: 980px; height: 100px;"><?php echo ($acta['Acta']['compromiso']); ?></textarea> <?php
                                                                                                                                                                                                    } else {
                                                                                                                                                                                                        print($acta['Acta']['compromiso']);
                                                                                                                                                                                                    }
                                                                                                                                                                                                        ?>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>PRÓXIMA CONVOCATORIA</td>
                                                        </tr>
                                                        <tr>
                                                            <td><?php echo ($acta['Acta']['convocatoria']); ?></td>
                                                        </tr>



                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel-body">
                                        <div class="dataTable_wrapper">

                                            <div class="row">
                                                <div class="col-sm-11">

                                                    <table width="100%" class="table table-striped table-bordered table-hover">

                                                        <tr>



                                                            <td colspan="8">Anexo: <?php echo $this->Html->link('../files/acta/anexo/' . $acta['Acta']['dir'] . '/' . $acta['Acta']['anexo']); ?> </td>

                                                        </tr>

                                                        <tr>

                                                            <td>Responsable de elaboración del acta: <?php echo ($acta['Responsable']['nombres']); ?> </td>
                                                            <td>Grupo tematico:<?php echo ($acta['Producto']['nombredim']); ?></td>



                                                        </tr>
                                                        <tr>
                                                            <td>Actividad:<?php echo ($acta['Producto']['resultado']); ?></td>
                                                            <td>Entorno:<?php echo ($acta['Producto']['entorno']); ?></td>

                                                        </tr>
                                                        <tr>
                                                            <td colspan="8">Tarea:<?php echo ($acta['Producto']['tarea']); ?></td>
                                                        </tr>

                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel-body">
                                        <div class="dataTable_wrapper">

                                            <div class="row">
                                                <div class="col-sm-11">

                                                    <table width="100%" class="table table-striped table-bordered table-hover">
                                                        <tr>
                                                            <td><?php echo __('Fecha_digitación: '); ?><?php echo ($acta['Acta']['created']); ?></td>
                                                            <td><?php echo __('Fecha_actualización: '); ?><?php echo ($acta['Acta']['modified']); ?></td>
                                                            <td><a href="javascript:window.print();">Imprimir</a></td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <thead>

                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>



<?php
/*$this->Html->css([
    'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'
        ], ['block' => 'css']
);
$this->Html->script([
    'https://code.jquery.com/jquery-3.2.1.min.js',
    'https://cdn.ckeditor.com/4.9.2/basic/ckeditor.js',
    'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js'
        ], ['block' => 'script']
);*/
?>
<script type="text/javascript">
    $(document).ready(function() {
        $('textarea').eac(function() {
            this.setAttribute('style', 'height:' + (this.scrollHeight) + 'px;overflow-y:hidden;');
        }).on('input', function() {
            this.style.height = 'auto';
            this.style.height = (this.scrollHeight) + 'px';
        });

    });
</script>