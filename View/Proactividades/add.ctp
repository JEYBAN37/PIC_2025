<div class="container">
    <div class="row">


        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading" class="page-header">

                    <?php $this->layout = 'formulario' ?>
                    <?php echo $this->Html->script('ckeditor/ckeditor'); ?>

                </div>

                <?php echo $this->Form->create('Proactividad', array('type' => 'file', 'novalidate' => 'novalidate')); ?>
                <fieldset>

                    <h1 class="page-header">Sistemtizar proceso formativo - educativo</h1>


                    <?php
                    $option = array(
                        'label' => 'Fecha',
                        'dateFormat' => 'DMY',
                        'minYear' => date('Y') - 0,
                        'maxYear' => date('Y') + 0,
                        'empty' => array(
                            'day' => 'Día',
                            'month' => 'Mes',
                            'year' => 'Año'
                        )
                    );
                    ?>

                    <div class="row">

                        <div class="form-group col-md-12">
                            <?php
                            echo $this->Form->input('producto_id', array('label' => 'Producto/tarea relacionada', 'type' => 'select',  'class' => 'form-control select-search')); ?>
                        </div>

                        <div class="form-group col-md-12">
                            <?php
                            echo $this->Form->input('producto1', array('label' => 'Escriba brevemente los productos o procesos relacionados(opcional)', 'class' => 'form-control'));
                            ?>
                        </div>


                     


                        <div class="form-group col-md-12">
                            <?php
                            echo $this->Form->input('objactividad', array('label' => 'Objetivo General del proceso', 'class' => 'form-control'));
                            ?>
                        </div>
                        <div class="form-group col-md-12">
                            <?php
                            echo $this->Form->input('objetivoespecifico', array('label' => 'Objetivos Específicos del proceso', 'class' => 'form-control'));
                            ?>
                        </div>




                  

                    </div>
                </fieldset>

                <p>
                    <?php echo $this->Form->end(array('label' => 'Crear sistematización', 'class' => 'btn btn-success')); ?>
                </p>

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
        var auxFile = document.getElementById('ActividadAnexo');
        var sizeF = auxFile.files[0].size;

        if (sizeF > 5000000) {
            alert('El archivo debe ser menor a 5 Mb');
            auxFile.value = '';
        }
    }

    function agregarOpcionSeleccion() {
        $("#ProactividadUbicacionId").prepend("<option value='' selected='selected'>Seleccione</option>");
        $("#ProactividadProductoId").prepend("<option value='' selected='selected'>Seleccione</option>");
        $("#ProactividadResponsableId").prepend("<option value='' selected='selected'>Seleccione</option>");
    }


    function mostrarOtrosesion(id) {
        if (id == "5. Otro")
            $("#divOtroSesion").show();
        else
            $("#divOtroSesion").hide();
    }
</script>