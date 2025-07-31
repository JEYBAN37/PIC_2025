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

               
                    <div class='row'>
                        <h1 class="page-header">Cargar o actualizar soporte </h1>
                        <?php echo $this->Form->input('id'); ?>

                        <div class="form-group col-md-12">
                            <p class="help-block">Ver informacion sobre el producto</p>

                            <select id="status" name="status" required onChange="mostrar(this.value);">
                                <option value="no">OCULTAR</option>
                                <option value="si">MOSTRAR</option>

                            </select>

                        </div>
                        <div id="si" class="panel panel-default form-group col-md-12" style="display: none;">
                            <div class="form-group col-md-4">
                                <?php
                                echo $this->Form->input('dimensiones', array('label' => 'Dimension', 'readonly'));
                                ?>
                            </div>
                            <div class="form-group col-md-4">
                                <?php
                                echo $this->Form->input('numproductos', array('label' => 'Producto Nº', 'readonly'));
                                ?>
                            </div>

                            <div class="form-group col-md-12">
                                <?php
                                echo $this->Form->input('activity', array('label' => 'Productos', 'readonly')); ?>
                            </div>

                            <div class="form-group col-md-12">
                                <?php echo $this->Form->input('tarea', array('label' => 'Tarea', 'readonly')); ?>
                            </div>

                            <div class="form-group col-md-12">
                                <?php
                                echo $this->Form->input('evidencia', array('label' => 'Soporte solicitado en anexo tecnico', 'readonly')); ?>
                            </div>
                       

                        <div class="form-group col-md-6">
                            <?php echo ('Calificar el avance en una escala de 0 a 100'); ?>
                            <?php echo $this->Form->input('porcentajeavance', array('label' => 'Porcentaje de cumplimiento de tarea')); ?>

                        </div>

                        <div class="form-group col-md-12">
                            <?php
                            echo ('Favor registrar de manera clara los aspectos relevantes de facilitaron o limitaron el avance de la tarea, asi como orientaciones que le permitan al Referente de SMS porder revisar los soportes');
                            echo $this->Form->input('observacionpic', array('label' => 'Observación sobre avance')); ?>
                        </div>

                        <div class="form-group col-md-12">
                            <?php
                            echo $this->Form->input('enlace', array('label' => 'Enlace de soporte adicionales')); ?>
                        </div>

                        <div class="form-group col-md-12">
                            <?php echo $this->Form->input('enlace2', array('label' => 'Enlace de soporte adicionales')); ?>
                        </div>

                        </div>  

                        




                        <div class="form-group col-md-12">
                            <p class="help-block"> Tenga en cuenta renombrara el archivo agregando al final el numero de la versión Ejemplo V1,V2</p></br>
                            <p class="help-block"> El soporte que adjunte debe ser relacionado con la evidencia que solicita el anxexo tecnico, y que no haya sido cargado en otros formularios de sistema</p>
                            <?php                          

                            echo $this->Form->input('anexo', array('label' => 'Archivos cargados', 'readonly'));
                            echo $this->Form->input('anexo', array('label' => 'Soportes', 'type' => 'file', 'onchange' => 'validarTamanioSoporte()'));
                            echo $this->Form->input('dirproduc', array('type' => 'hidden'));
                            echo (' NOTA: Cargar el archivo comprimido extensión ".zip" o ".rar" si son varios soportes * listado asistencia .pdf - no imagen');
                            ?>
                        </div>
                    </div>
                </fieldset>

                <div class="row">

                    <div class="form-group col-md-6">
                        <?php echo $this->Form->submit('Guardar'); ?>
                    </div>
                </div>


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
    $(document).ready(function() {
        $('.select-search').select2();
        agregarOpcionSeleccion();
    });


    function validarTamanioSoporte() {
        var auxFile = document.getElementById('ProductoAnexo');
        var sizeF = auxFile.files[0].size;
        if (sizeF > 4000000) {
            alert('El archivo debe ser menor a 4 Mb');
            auxFile.value = '';
        }
    }

    function agregarOpcionSeleccion() {
        // $("#ActaUbicacionId").prepend("<option value='' selected='selected'>Seleccione</option>");
        //   $("#ActaProductoId").prepend("<option value='' selected='selected'>Seleccione</option>");
        $("#ProductoResponsableId").prepend("<option value='' selected='selected'>Seleccione</option>");
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
</script>