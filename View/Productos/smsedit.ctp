<!--div class="modal fade" id="mostrarmodal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Formulario de reporte de avances PIC 2020</h4>



            </div>
            <div class="modal-body">
                <div>
                    <img src="../../img/logo_Pasto.png" alt="Imagen de marcador genérico" width="199px" height="auto">
                </div>
                <h4>Estados y porcentajes</h4>

                <p> <strong> Reportado (mes):</strong> Cuando se haya agregado los soportes y observaciones correspondientes del mes o periodo solicitado</p>

                <p> <strong> Corregido:</strong> Cuando los soportes relacionados a la tarea después de la revisión de Referente de SMS<strong> "NO"</strong> presentan las características de calidad o no son claros, deben ser ajustados, una vez realizado se elige el estado CORREGIDO para su nueva revisión.</p>

                <p> <strong> Actualizado:</strong> Cuando los soportes relacionados a la tarea después de la revisión de Referente de SMS presentan observaciones de forma y no de fondo, deben ser ajustados, una vez realizado se elige el estado ACTUALIZADO para su nueva revisión.</p>

                <p> <strong>Sin avance:</strong> Cuando no se tiene ningún soporte u observación asociado a la tarea aun cuando dentro de la planeación o cronograma dentro del mes reportado se debía realizar actividades en cumplimiento de la tarea.</p>

                <p> <strong>Avance limitado:</strong> Cuando se ha realizado las acciones pertinentes para el desarrollo de las tareas, <strong>se cuenta con soportes</strong>, pero situaciones externas <strong>(validación, concertación, autorizaciones, convenios, situaciones comunitarias y/o poblacionales, situaciones de emergencia)</strong> afectan los tiempos de despliegue o ejecución de las acciones.</p>
                <p> <strong> No aplica para el periodo:</strong> Cuando no se tiene acciones de avance programadas para la tarea durante el mes reportado</p>
                <p> <strong> Reportar avance (mes)</strong> Cuando Referente de SMS realiza la programación de avance del mes correspondiente asigna este estado para notificar a Equipo operativo PIC </p>
                <p> <strong> Cumple avance (mes)</strong> Cuando los soportes y observaciones en relación al avance de la tarea son aceptados por Referente de SMS</p>
                <p> <strong> Tarea cerrada cumple</strong> Cuando la tarea se ha cumplido en un 100% y cuenta con los soportes requeridos dentro del sistema de información</p>

                <p> <strong> Porcentaje programado:</strong> Es aquel porcentaje de avance calificado ente 0% y 100 % según el análisis y programación que se ha definido por el Referente de SMS, este valor se ajusta mensualmente.</p>
                <p> <strong>Porcentaje de cumplimiento de tarea:</strong> es el porcentaje alcanzado calificado entre 0% y 100% según los soportes y avance de la tarea presentado por Equipo operativo PIC, este valor se ajusta mensualmente.</p>
                <p> <strong>Bitácora observaciones</strong> Este campo es de texto abierto debe registrar las observaciones precisas tanto del Equipo operativo PIC y Referentes de SMS siempre que actualicen este formulario, iniciar un comentario con la fecha y posteriormente la observación,<strong> FECHA_OBSERVACIÓN</strong>


            </div>
            <div class="modal-footer">
                <a href="#" data-dismiss="modal" class="btn btn-danger">Cerrar</a>
            </div>
        </div>
    </div>
</div-->




<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading" class="page-header">
                    <?php $this->layout = 'formulario' ?>
                    <?php echo $this->Html->script('ckeditor/ckeditor'); ?>
                </div>
                <?php echo $this->Form->create('Producto', array('type' => 'file', 'novalidate' => 'novalidate')); ?>
                <fieldset>
                    <h2 class="page-header">Reporte de avance tarea</h2> <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#mostrarmodal">
                        Ayuda
                    </button></i>
                    <!--a href="#" data-toggle="modal" data-target="#mostrarmodal">Leer Aviso Legal </a!-->
                    <?php echo $this->Form->input('id'); ?>


                    <div class="row">
                        <div class="form-group col-md-12">
                            <p class="help-block">Ver informacion sobre el producto</p>

                            <select id="status" name="status" required onChange="mostrar(this.value);">
                                <option value="no">OCULTAR</option>
                                <option value="si">MOSTRAR</option>

                            </select>

                        </div>
                        <div id="si" class="panel panel-default form-group col-md-12" , style="display: none;">

                            <div class="form-group col-md-3">
                                <?php
                                echo $this->Form->input('numproductos', array('label' => 'Producto Nº', 'readonly', 'class' => 'form-control'));
                                ?>
                            </div>

                            <div class="form-group col-md-3">
                                <?php
                                echo $this->Form->input('dimensiones', array('label' => 'Dimension', 'readonly', 'class' => 'form-control'));
                                ?>
                            </div>

                            <div class="form-group col-md-3">
                                <?php
                                echo $this->Form->input('porcproducto', array('label' => 'Porcentaje del producto', 'readonly', 'class' => 'form-control'));
                                ?>
                            </div>

                            <div class="form-group col-md-12">
                                <?php
                                echo $this->Form->input('activity', array('label' => 'Productos', 'readonly', 'class' => 'form-control')); ?>
                            </div>
                            <div class="form-group col-md-12">
                                <?php
                                echo $this->Form->input('tarea', array('label' => 'tarea', 'readonly', 'class' => 'form-control')); ?>
                            </div>
                            <div class="form-group col-md-12">
                                <?php echo $this->Form->input('evidencia', array('label' => 'Soportes', 'readonly', 'class' => 'form-control')); ?>
                            </div>



                        </div>


                        <?php $optionsporcentaje = array('0' => '0', 
'1' => '1', 
'2' => '2', 
'3' => '3', 
'4' => '4', 
'5' => '5', 
'6' => '6', 
'7' => '7', 
'8' => '8', 
'9' => '9', 
'10' => '10', 
'11' => '11', 
'12' => '12', 
'13' => '13', 
'14' => '14', 
'15' => '15', 
'16' => '16', 
'17' => '17', 
'18' => '18', 
'19' => '19', 
'20' => '20', 
'21' => '21', 
'22' => '22', 
'23' => '23', 
'24' => '24', 
'25' => '25', 
'26' => '26', 
'27' => '27', 
'28' => '28', 
'29' => '29', 
'30' => '30', 
'31' => '31', 
'32' => '32', 
'33' => '33', 
'34' => '34', 
'35' => '35', 
'36' => '36', 
'37' => '37', 
'38' => '38', 
'39' => '39', 
'40' => '40', 
'41' => '41', 
'42' => '42', 
'43' => '43', 
'44' => '44', 
'45' => '45', 
'46' => '46', 
'47' => '47', 
'48' => '48', 
'49' => '49', 
'50' => '50', 
'51' => '51', 
'52' => '52', 
'53' => '53', 
'54' => '54', 
'55' => '55', 
'56' => '56', 
'57' => '57', 
'58' => '58', 
'59' => '59', 
'60' => '60', 
'61' => '61', 
'62' => '62', 
'63' => '63', 
'64' => '64', 
'65' => '65', 
'66' => '66', 
'67' => '67', 
'68' => '68', 
'69' => '69', 
'70' => '70', 
'71' => '71', 
'72' => '72', 
'73' => '73', 
'74' => '74', 
'75' => '75', 
'76' => '76', 
'77' => '77', 
'78' => '78', 
'79' => '79', 
'80' => '80', 
'81' => '81', 
'82' => '82', 
'83' => '83', 
'84' => '84', 
'85' => '85', 
'86' => '86', 
'87' => '87', 
'88' => '88', 
'89' => '89', 
'90' => '90', 
'91' => '91', 
'92' => '92', 
'93' => '93', 
'94' => '94', 
'95' => '95', 
'96' => '96', 
'97' => '97', 
'98' => '98', 
'99' => '99', 
'100' => '100' 
); ?>

                        <div class="form-group col-md-12">
                            <?php
                            echo ('Observaciones del equipo PIC sobre desarrollo de la tarea');
                            echo $this->Form->input('observacionpic', array('label' => 'Bitácora Observaciones sobre avance del equipo PIC', 'readonly', 'class' => 'form-control')); ?>
                        </div>

                        <!--div class="form-group col-md-12">
                            <h5 class="help-block">Procentajes de programación </h5>
                        </div>
                        <div class="form-group col-md-3">

                        <?php echo $this->Form->input('primercohorte', array('label' => '%  programado 1er cohorte',  'readonly', 'class' => 'form-control')); ?>

                        </div>
                        <div class="form-group col-md-3">

                        <?php echo $this->Form->input('segundocohorte', array('label' => '% programado 2er cohorte', 'readonly', 'class' => 'form-control')); ?>
                        </div>

                        <div class="form-group col-md-3">

                            <?php echo $this->Form->input('tercercohorte', array('label' => '% programado 3er cohorte', 'readonly', 'class' => 'form-control')); ?>
                        </div>

                        <div class="form-group col-md-3">
                            <?php echo $this->Form->input('totalavance', array('label' => 'Acumulado % programado', 'readonly', 'class' => 'form-control')); ?>
                        </div-->

                        <div class="form-group col-md-12">
                            <h5 class="help-block">Porcentajes de ejecución </h5>
                        </div>

                        <div class="form-group col-md-3">
                           
                            <h6 class="help-block">Porcentaje reportado por PIC: <?php echo ($producto['Producto']['porcentajeavance1']); ?>%</h6>
                           
                            <?php echo $this->Form->input('porcentajeavance1', array('label' => 'Validar % cumplimiento', 'class' => 'form-control', 'options'=> $optionsporcentaje)); ?>

                        </div>

                        <!--div class="form-group col-md-2">
                        <h6 class="help-block">Porcentaje reportado por PIC 2do cohorte: <?php echo ($producto['Producto']['porcentajeavance2']); ?>%</h6>
                            <?php

                            echo $this->Form->input('porcentajeavance2', 
                            array('label' => 'Validar % Avance 2do cohorte ', 'class' => 'form-control', 'readonly' )); ?>
                            
                        </div>
                        <div class="form-group col-md-2">
                        
                        <h6 class="help-block">Porcentaje reportado por PIC 3er cohorte: <?php echo ($producto['Producto']['porcentajeavance3']); ?>%</h6>
                            <?php

                            echo $this->Form->input('porcentajeavance3', array('label' => 'Validar % Avance 3er cohorte', 'class' => 'form-control', 'options' => $optionsporcentaje));
                            ?>
                        </div-->


                        <div class="form-group col-md-2">
                            <?php

                            echo $this->Form->input('porcentajeavancetotal', array('label' => '% avanece acomulado', 'class' => 'form-control', 'readonly'));
                            ?>
                        </div>
                        <div class="form-group col-md-2">
                        <?php


                            echo $this->Form->input('porctareas', array('label' => ' Porcentaje de la tarea ', 'class' => 'form-control', 'readonly'));
                            ?>
                        </div>
                        <div class="form-group col-md-3">
                            <?php echo $this->Form->input('porcentajecumplimiento', array('label' => '% Acumulado cumplimiento tarea', 'class' => 'form-control','readonly')); ?>


                        </div>

                        <div class="form-group col-md-12">
                            <?php
                            echo ('Favor registrar de manera clara los aspectos relevantes de su evaluacion del avance de la tarea, asi como orientaciones que le permitan al equipo PIC porder avanzar en el cumplimiento de la tarea');
                            echo $this->Form->input('observacionsms', array('label' => 'Bitácora observaciones sobre avance reportado', 'class' => 'form-control')); ?>
                        </div>

                        <div class="form-group col-md-6">
                            <!--p class="help-block">Ver informacion sobre el producto</p-->

                            <?php $options = array('' => 'Elegir', ' Sin reporte' => 'Sin reporte', 'Actualizar' => 'Actualizar', ' Corregir' => 'Corregir', 'Cumple avance programado mayo' => 'Cumple avance programado mayo','Cumple avance programado junio' => 'Cumple avance programado junio','Cumple avance parcial junio' => 'Cumple avanceparcial junio', 'Tarea cerrada cumple' => 'Tarea cerrada cumple', 'Sin avance' => 'Sin avance', 'No aplica al periodo' => 'No aplica al periodo','Avance limitado' => 'Avance limitado'); ?>
                            <!--?php $options = array('' => 'Elegir','Pendiente' => 'Pendiente', 'Tarea cerrada cumple' => 'Tarea cerrada cumple','No cumple tarea cerrada'=>'No cumple tarea cerrada', 'Avance limitado' => 'Avance limitado','Sin avance'=>'Sin Avance'); ?-->

                            <?php







                            echo $this->Form->input('estado', array('label'  => 'Estado', 'type' => 'select', 'options' => $options, 'class' => 'form-control select-search')); ?>
                        </div>




                        <div class="form-group col-md-6">
                            <?php
                            echo $this->Form->input('referente_id', array('label' => 'Responsable de la revisión', 'class' => 'form-control select-search'));


                            echo $this->Form->input('modified', array('label' => ' Fecha de registro', 'type' => 'hidden'));
                            ?>
                        </div>


                    </div>
                </fieldset>
                <?php echo $this->Form->end(__('Guardar')); ?>
            </div>
        </div>
    </div>
</div>

<?php
$this->Html->css([
    'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css',
    'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'
], ['block' => 'css']);
$this->Html->script([
    'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js',
    'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js'
], ['block' => 'script']);
?>



<script type="text/javascript">
    $('document').ready(function() {

        $val = 0;
        $porcentajeavance1 = 0;
        $porcentajeavance2 = 0;
        $porcentajeavance3 = 0;
        $valtotal = 0;
        $porcentajetareas = 0;
        $porcentajeavancetotal = 0;

        $('#ProductoPorcentajeavance1').on('change', function() {

            calcularAvancetotal();
        });
        $('#ProductoPorcentajeavance2').on('change', function() {
            calcularAvancetotal();
        });
        $('#ProductoPorcentajeavance3').on('change', function() {
            calcularAvancetotal();
        });

        $('#ProductoPorctareas').on('change', function() {

            calcularAvancetotal();
        });
        $('#ProductoPorcentajeavancetotal').on('change', function() {
            calcularAvancetotal();
        });

    });



    function calcularAvancetotal() {

        try {

            $porcentajeavance1 = $('#ProductoPorcentajeavance1').val();
                     

            $val = parseInt($porcentajeavance1);

            if ($val > 100) {
                if (confirm("El porcentaje acomulado no debe superar el 100%")) {
                    $val =  null;
                    $porcentajeavance3 =  $('#ProductoPorcentajeavance3').val(null);


                }
            }

            $('#ProductoPorcentajeavancetotal').val($val);

            $porcentajetareas = $('#ProductoPorctareas').val();
            $porcentajeavancetotal = $('#ProductoPorcentajeavancetotal').val();

            $valtotal = (parseFloat($porcentajetareas) * parseInt($porcentajeavancetotal) ) / 100;

            if ($valtotal > 100) {
                if (confirm("El porcentaje acomulado no debe superar el 100%")) {
                    
                    $valtotal =  $('#ProductoPorcentajecumplimiento').val();

                }
            }

            $('#ProductoPorcentajecumplimiento').val($valtotal); 



        } catch (err) {}
    }

   
</script>







<script type="text/javascript">
    $(document).ready(function() {
        $('.select-search').select2();
        agregarOpcionSeleccion();

        $dir = $('#ProductoDirproduc').val();
        $anexo = $('#ProductoAnexo').val();

        if ($anexo != "") {
            //$('#linkAnexo').val('../files/producto/anexo/' + $dir + '/' + $anexo );
            $('#linkAnexo').attr("href", "~/files/producto/anexo/" + $dir + '/' + $anexo);
        }
    });


    function validarTamanioSoporte() {
        var auxFile = document.getElementById('ProductoAnexo');
        var sizeF = auxFile.files[0].size;
        if (sizeF > 3000000) {
            alert('El archivo debe ser menor a 3 Mb');
            auxFile.value = '';
        }
    }

    function agregarOpcionSeleccion() {
        // $("#ActaUbicacionId").prepend("<option value='' selected='selected'>Seleccione</option>");
        //   $("#ActaProductoId").prepend("<option value='' selected='selected'>Seleccione</option>");
        $("#ProductoReferenteId").prepend("<option value='' selected='selected'>Seleccione</option>");
        $("#ProductoPorcentajeavance1").prepend("<option value='' selected='selected'>Seleccione</option>");
        $("#ProductoPorcentajeavance2").prepend("<option value='' selected='selected'>Seleccione</option>");
        $("#ProductoPorcentajeavance3").prepend("<option value='' selected='selected'>Seleccione</option>");
        $("#ProductoPorcentajeseptiembre").prepend("<option value='' selected='selected'>Seleccione</option>");
        $("#ProductoPorcentajeoctubre").prepend("<option value='' selected='selected'>Seleccione</option>");
        // $("#ProductoPrimercohorte").prepend("<option value='' selected='selected'>Seleccione</option>");
        // $("#ProductoSegundocohorte").prepend("<option value='' selected='selected'>Seleccione</option>");
       // $("#ProductoTercercohorte").prepend("<option value='' selected='selected'>Seleccione</option>");


    }

    function mostrar(id) {
        if (id == "si") {
            $("#si").show();
            $("#no").hide();

        } else if (id == "no") {
            $("#si").hide();
            $("#no").show();

        }
    }

    $(document).ready(function() {
        $("#mostrarmodal").modal("show");
    });
</script>