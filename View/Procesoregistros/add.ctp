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
                    <h1 class="page-header">Asociar sesión a proceso formativo - educativo</h1>

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
                            echo $this->Form->input('proactividad_id', array('label' => 'sistematizacion relacionada', 'type' => 'select',  'class' => 'form-control select-search')); ?>
                        </div>

                        <div class="panel panel-default form-group col-md-12">
                            <p class="help-block">Regristo de fecha se sesion realizada</p>
                            <div class="row ">


                                <div class="form-group col-md-4">
                                    <?php echo $this->Form->input('fecha', array('label' => 'Fecha de actvidad', 'option' => '$option')); ?>
                                </div>
                                <div class="form-group col-md-4">
                                    <?php echo $this->Form->input('hora_inicio'); ?>
                                </div>
                                <div class="form-group col-md-4">
                                    <?php echo $this->Form->input('hora_fin'); ?>
                                </div>
                            </div>
                        </div>


                        <div class="form-group col-md-12">
                            <p class="help-block">Ingrese aquí exclusivamente el título de la temática tratada. No incluya poblaciones, lugares de realización de la actividad o ningún otro dato.</p>

                            <?php

                            echo $this->Form->input('tema', array('label' => 'Temática tratada', 'class' => 'form-control'));
                            ?>
                        </div>
                        <!--div class="form-group col-md-12">
                                    <?php

                                    echo 'Por ejemplo: Grupo surprisecity';
                                    echo $this->Form->input('grupo', array('label' => 'Nombre de organización o grupo'));
                                    ?>
                                </div-->
                             

                         <div class="form-group col-md-12">
                             <p> <?php echo 'Copie de esta lista a la casilla siguiente las poblaciones participantes o escriba otras que no esten categorizadas.' ?></p>
                             <?php echo '1. Población en general 2. Hombres	 3. Mujeres	4. Niños y niñas 5. Adolescentes 6. Adultos	7. Afrocolombianos 	8. Campesinos	 9. Habitantes de Calle		10. Indígenas  11. Líderes y lideresas  12. Madres gestantes  13. Madres Lactantes  14. Población con situación de discapacidad 15. Población LGBTI 16. Población privada de la libertad 17. Población desmovilizada 18. Población víctima de conflicto armado 19. Población víctima de violencia 20. Trabajadores(as) sexuales	21. Instituciones 22. trabajadores informales' ?>
                             <?php echo $this->Form->input('tipopoblacion', array('label' => 'Tipo de poblacion participante.')); ?>
                         </div>

                        
                         <div class="form-group col-md-6">
                             <?php
                                $optiontime =  array(' ' => 'Elegir', 'No aplica' => 'No aplica', 'Comunitario' => 'Comunitario', 'Hogar' => 'Hogar', 'Institucional' => 'Institucional', 'Educativo' => 'Educativo', 'Laboral informal' => 'Laboral informal');
                                echo $this->Form->input('entorno', array('label' => 'Entorno', 'type' => 'select', 'class' => 'form-control', 'options' => $optiontime));
                                ?>
                         </div>



                         <div class="form-group col-md-6">
                             <p> <?php echo 'Copie de esta lista a la casilla siguiente el curso de vida' ?></p>
                             <?php echo 'Primera infancia, Infancia, adolescencia, jueventud, adultez, vejez' ?>
                             <?php
                                echo $this->Form->input('cursovida', array('label' => 'Curso de Vida', 'class' => 'form-control'));
                                ?>
                         </div>

                         <div class="form-group col-md-6">
                             <?php
                                $optiontime =  array(' ' => 'Elegir', 'No aplica' => 'No aplica', 'Hogar' => 'Pólvora', 'PAI' => 'PAI', 'Tuberculosis' => 'Tuberculosis', 'Hasen Lepra' => 'Hasen/Lepra', 'Ley 1335' => 'Ley 1335');
                                echo $this->Form->input('accioninformativa', array('label' => 'Acción informativa', 'type' => 'select', 'class' => 'form-control', 'options' => $optiontime));
                                ?>
                         </div>



                         <div class="form-group col-md-6">

                             <p class="help-block">'Si la actividad fue virtual selecciona la opcion correspondiente.'</p>


                             <?php

                                echo $this->Form->input('ubicacion_id', array('label' => 'Barrio', 'class' => 'form-control select-search', 'onchange' => 'mostrarBarrio(this.value);'));


                                ?>
                         </div>


                         <div id="divActualizarBarrio" class="form-group col-md-6" style="display: none;">

                             <p class="help-block">Agregue el nombre barrio/lugar</p>
                             <?php


                                echo $this->Form->input('barrio', array('label' => 'Barrio/Vereda', 'class' => 'form-control'));
                                ?>
                         </div>

                        <div class="panel panel-default form-group col-md-12">
                            <p class="help-block">Apoyo externo en el desarrollo de la actividad</p>
                            <div class="row ">
                                <div class="form-group col-md-2">
                                    <!-- <form method="post"> -->

                                        <select id="status" name="status" required onChange="mostrar(this.value);">
                                            <option value="no">NO</option>
                                            <option value="si">SI</option>
                                            
                                        </select>


                                        <!--?php
                                                echo $this->Form->input('externo', array('label' => 'Apoyo externo', 'options' => array('' => 'Elegir', 'Estudiante' => 'Estudiante', '2 No' => '2 No'), 'class' => 'form-control', 'id'=>'status', 'name'=>'status', 'onChange'=>'mostrar(this.value);'));
                                                ?-->
                                    <!-- </form> -->

                                </div>


                                <div id="si" class="panel panel-default form-group col-md-8" style="display: none;">
                                    <p class="help-block">Por favor agregue informacion de la organización</p>




                                    <div class="form-group col-md-8">
                                        <?php

                                        echo $this->Form->input('cargo', array('label' => ' Cargo en la institución u organización', 'class' => 'form-control'));
                                        ?>
                                    </div>

                                    <div class="form-group col-md-8">

                                        <?php
                                        echo $this->Form->input('organizacion', array('label' => ' Nombre de la Organización o Institución', 'class' => 'form-control'));
                                        ?>

                                    </div>

                                    <div class="form-group col-md-8">

                                        <?php
                                        echo $this->Form->input('tipoorganizacion', array(
                                            'label' => 'Tipo de organización ',
                                            'options' => array('' => 'Elegir', 'No Aplica ' => 'No aplica', 'Organizacion Comunitaria ' => '1 Organización Comunitaria ', 'Organizacion Social ' => '2 Organización Social ', 'Institucion Publica' => '3 Institución Publica', 'Institucion Privada ' => '4 Institución Privada '), 'class' => 'form-control'
                                        ));
                                        ?>

                                    </div>

                                </div>





                                <div class="form-group col-md-12">
                                    <p class="help-block">NOTA: Hacer uso de los instrumentos de caracterización de organizaciones o instituciones para registrar más información.</p>
                                </div>

                            </div>
                        </div>

                        <div class="panel panel-default form-group col-md-12">
                            <p class="help-block">Soportes requeridos</p>
                            <div class="row ">


                                <div class="form-group col-md-8">
                                    <?php
                                    echo $this->Form->input('plsesion_id', array('label' => 'Plan de sesion', 'class' => 'form-control select-search'));
                                    ?>
                                </div>
                                <div class="form-group col-md-4">

                                    <?php


                                    echo $this->Form->input('anexo', array('label' => 'Soportes', 'type' => 'file', 'class' => 'form-control', 'onchange' => 'validarTamanioSoporte()', 'class' => 'form-control'));



                                    echo ('NOTA: Cargar en archivo comprimido extensión ".zip" o ".rar" * listado asistencia.pdf(meet o fisico), registro excel participantes  * tres(3) pantallazos o fotos reslucion 600px * 600px, ');
                                    echo $this->Form->input('sisproceso_dir', array('type' => 'hidden'));
                                    echo ('El nombre del archivo no tiene que tener tildes o diéresis');

                                    //echo $this->Form->input('fecha_registro', array('label' => ' Fecha de registro', 'type' => 'hidden', 'class' => 'form-control'));
                                    ?>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!--cierra row-->


                    <div class="form-group col-md-6">
                        <?php //echo $this->Form->end(__('Guardar y Listar')); 
                        ?>
                        <?php echo $this->Form->submit('Guardar y asociar Otra sesion', array('name' => 'btn')); ?>

                    </div>
                    <div class="form-group col-md-6">
                        <?php echo $this->Form->submit('Finalizar', array('name' => 'btn')); ?>
                    </div>

                </fieldset>




                <?php //echo $this->Form->end(__('Enviar')); 
                ?>


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
        $("#ProcesoregistroUbicacionId").prepend("<option value='' selected='selected'>Seleccione</option>");
        $("#ProcesoregistroProactividadId").prepend("<option value='' selected='selected'>Seleccione</option>");
        $("#ProcesoregistroPlsesionId").prepend("<option value='' selected='selected'>Seleccione</option>");
        // $("#status").prepend("<option value='' selected='selected'>Seleccione</option>");
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
</script>