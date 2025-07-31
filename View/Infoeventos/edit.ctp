<div class="container">
    <div class="row">

        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading" class="page-header">
                    <?php $this->layout = 'formulario' ?>
                    <?php echo $this->Html->script('ckeditor/ckeditor'); ?>
                </div>
                <?php echo $this->Form->create('Infoevento', array('type' => 'file', 'novalidate' => 'novalidate')); ?>
                <fieldset>
                    <h2 class="page-header">Editar Informe de eventos o acciones informativas</h2>
                   
                    <?php
                       
                    echo $this->Form->input('id');
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
                        <div class="form-group col-md-4">
                            <?php echo $this->Form->input('fecha', $option); ?>
                        </div>

                        <div class="form-group col-md-6">
                            <?php
                            echo $this->Form->input('tipo', array('label' => 'Tipo de soporte', 'options' => array('' => 'Elegir','Informe accion informativa' => 'Informe acción informativa' , 'Informe evento ' => 'Informe evento', 'Informe acompanamiento' => 'Informe acompañamiento'), 'class' => 'form-control'));
                            ?>
                        </div>


                        <div class="form-group col-md-12">
                            <?php
                            echo ('Ingrese aquí exclusivamente el título de la temática o austo del informe o evento. No incluya poblaciones, lugares de realización de la actividad o ningún otro dato.');
                            echo $this->Form->input('tema', array('label' => 'Temática o asunto de informe o evento'));
                            ?>
                        </div>
                        <div class="form-group col-md-12">
                            <?php
                            echo 'Por ejemplo: Grupo surprisecity, si el informe o evento refiere grupos participantes';
                            echo $this->Form->input('nombregrupo', array('label' => 'Nombre de organización o grupo'));
                            ?>
                        </div>
                        <div class="form-group col-md-6">
                            <?php
                            echo $this->Form->input('ubicacion_id', array('label' => 'Barrio', 'class' => 'form-control select-search', 'onchange' => 'mostrarBarrio(this.value);'));
                            ?>
                            <p class="help-block">'Si la actividad fue virtual selecciona la opcion correspondiente.'</p>
                        </div>

                        <div id="divActualizarBarrio" class="form-group col-md-6" style="display: none;">

                            <p class="help-block">Si seleccionó ‘barrio’ coloque en la casilla Barrio/vereda ‘No aplica’</p>
                            <?php


                            echo $this->Form->input('vereda', array('label' => 'Barrio/Vereda', 'class' => 'form-control'));
                            ?>
                        </div>



                        <div class="form-group col-md-12">
                            <?php
                            echo 'Por ejemplo: Pasto Salud ESE';
                            echo $this->Form->input('lugar', array('label' => 'Nombre de lugar o dirección'));
                            ?>
                        </div>

                        <div class="form-group col-md-6">
                            <?php
                            echo 'Ingresar nombre completo';
                            echo $this->Form->input('responsable_id', array('label' => 'Responsable de registro', 'class' => 'form-control select-search'));
                            ?>
                        </div>

                        <div class="form-group col-md-12">
                            <?php
                            echo $this->Form->input('producto_id', array('label' => 'Producto/tarea relacionada', 'type' => 'select',  'class' => 'form-control select-search')); ?>
                        </div>

                        <div class="form-group col-md-12">
                            <?php
                            echo $this->Form->input('producto1', array('label' => 'Escriba brevemente los productos o procesos relacionados(opcional)'));
                            ?>
                        </div>


                        <div class="form-group col-md-12">

                            <h2><?php echo 'Poblaciones' ?><br></h2>

                            <p> <?php echo 'Copie de esta lista a la casilla siguiente las poblaciones referidas si son referidas en su informe/evento o escriba otras que no esten categorizadas.' ?></p>

                            <?php echo  '1. Población en general 2. Hombres  3. Mujeres 4. Niños y niñas 5. Adolescentes 6. Adultos 7. Afrocolombianos  8. Campesinos    9. Habitantes de Calle     10. Indígenas  11. Líderes y lideresas  12. Madres gestantes  13. Madres Lactantes  14. Población con situación de discapacidad 15. Población LGBTI 16. Población privada de la libertad 17. Población desmovilizada 18. Población víctima de conflicto armado 19. Población víctima de violencia 20. Trabajadores(as) sexuales 21. Instituciones' ?>

                        </div>

                        <div class="form-group col-md-12">
                            <?php
                            echo ('Registre aquí las poblaciones participantes, con el código y nombre respectivo');
                            echo $this->Form->input('poblaciones', array('label' => 'Poblaciones participantes', 'class' => 'form-control'));
                            ?>
                        </div>



                 

                        <div class="form-group col-md-12">
                            <?php echo $this->Form->input('observacion', array('label' => 'Observación')); ?>
                        </div>
                    </div>



                </fieldset>
                <?php echo $this->Form->end(__('Enviar')); ?>
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
        var auxFile = document.getElementById('InfoeventoAnexo');
        var sizeF = auxFile.files[0].size;

        if (sizeF > 5000000) {
            alert('El archivo debe ser menor a 5 Mb');
            auxFile.value = '';
        }
    }

    function agregarOpcionSeleccion() {
        $("#InfoeventoUbicacionId").prepend("<option value='' selected='selected'>Seleccione</option>");
        $("#InfoeventoProductoId").prepend("<option value='' selected='selected'>Seleccione</option>");
        $("#InfoeventoResponsableId").prepend("<option value='' selected='selected'>Seleccione</option>");
    }

    function mostrarBarrio(id) {
        if (id == "2")
            $("#divActualizarBarrio").show();
        else
            $("#divActualizarBarrio").hide();
    }

    function validar() {
        var todo_correcto = true;

        if (document.getElementById('status').value == '') {
            todo_correcto = false;
        }

        if (!todo_correcto) {
            alert('Algunos campos no están correctos, vuelva a revisarlos');
        }

        return todo_correcto;
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