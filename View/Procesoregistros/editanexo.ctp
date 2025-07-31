<div class="container">
    <div class="row">


        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading" class="page-header">

                    <?php $this->layout = 'formulario' ?>
                    <?php echo $this->Html->script('ckeditor/ckeditor'); ?>

                </div>


                <?php echo $this->Form->create('Procesoregistro', array('type' => 'file', 'novalidate' => 'novalidate')); ?>
                <fieldset>

                    <h1 class="page-header">Actualizar soporte de sesión formativo - educativo</h1>
                    <?php echo $this->Form->input('id'); ?>

                    <div class="row">

                        <div class="panel panel-default form-group col-md-12">
                            <p class="help-block">Tener encuenta nombrar el archivo segun la estructura y la nomenclatura asignadas</p>
                            <div class="row ">

                                <div class="form-group col-md-8">
                                    <?php

                                    echo $this->Form->input('anexo', array('label' => 'archivos cargados', 'readonly'));   ?>
                                    
                                </div>
                                <div class="form-group col-md-4">
                                    <?php
                                    echo $this->Form->input('anexo', array('label' => 'Soportes', 'type' => 'file', 'class' => 'form-control', 'onchange' => 'validarTamanioSoporte()'));

                                
                                    echo $this->Form->input('sisproceso_dir', array('type' => 'hidden'));
                                    echo ('El nombre del archivo no tiene que tener tildes o diéresis');

                                    //echo $this->Form->input('fecha_registro', array('label' => ' Fecha de registro', 'type' => 'hidden'));
                                    ?>
                                </div>
                                <p class="help-block">NOTA: Cargar en archivo comprimido extensión ".zip" o ".rar" * listado asistencia.pdf(meet o fisico), registro excel participantes  * tres(3) pantallazos o fotos reslucion 600px * 600px </p>   
                                              
                            </div>
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
        $('.select-search-multi').select2({
            closeOnSelect: false
        });
        agregarOpcionSeleccion();

        /*
        $('#poblaciones').val('');
         var data = $('#poblaciones_aux').select2('data').map(function(elem){ 
                return elem.text 
           });
         $('#poblaciones').val(data);
         $('#poblaciones_aux').on('select2:unselecting', function (e) {
            $('#poblaciones').val('');
        });
        */

    });


    function validarTamanioSoporte() {
        var auxFile = document.getElementById('ProcesoregistroAnexo');
        var sizeF = auxFile.files[0].size;

        if (sizeF > 5000000) {
            alert('El archivo debe ser menor a 5 Mb');
            auxFile.value = '';
        }
    }

    function agregarOpcionSeleccion() {
        //$("#ProcesoregistroUbicacionId").prepend("<option value='' selected='selected'>Seleccione</option>");
        //$("#ProcesoregistroProactividadId").prepend("<option value='' selected='selected'>Seleccione</option>");
        // $("#ProcesoregistroPlsesionId").prepend("<option value='' selected='selected'>Seleccione</option>");
    }
</script>