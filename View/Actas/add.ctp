<div class="container">
    <div class="row">

        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading" class="page-header">


                    <?php $this->layout = 'formulario' ?>
                    <?php echo $this->Html->script('ckeditor/ckeditor'); ?>

                </div>



                <?php echo $this->Form->create('Acta', array('type' => 'file', 'novalidate' => 'novalidate')); ?>
                <fieldset>
                    <h2 class="page-header">Nueva Acta</h2>
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
                        <div class="form-group col-md-4">
                            <?php echo $this->Form->input('fecha', $option, array('class' => 'form-control')); ?>
                        </div>
                        <div class="form-group col-md-4">
                            <?php
                            echo $this->Form->input('hora_inicio');
                            ?>
                        </div>
                        <div class="form-group col-md-4">
                            <?php
                            echo $this->Form->input('hora_fin');
                            ?>
                        </div>
                        <div class="form-group col-md-12">


                            <?php echo $this->Form->input('tema', array('label' => 'Temática tratada', 'class' => 'form-control')); ?>

                            <p class="help-block">'Ingrese aquí exclusivamente el título de la temática tratada. No incluya poblaciones, lugares de realización de la actividad o ningún otro dato.'</p>
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


                            echo $this->Form->input('barrio', array('label' => 'Barrio/Vereda', 'class' => 'form-control'));
                            ?>
                        </div>

                        <!--div class="form-group col-md-12">
                                        <?php
                                        echo 'Por ejemplo: Pasto Salud ESE';
                                        echo $this->Form->input('lugar', array('label' => 'Nombre de lugar o dirección'));
                                        ?>
                                    </div-->


                        <div class="form-group col-md-12">
                            <?php
                            echo $this->Form->input('producto_id', array('label' => 'Producto/tarea relacionada', 'type' => 'select',  'class' => 'form-control select-search'));
                            ?>
                        </div>
                       
                    

                        <div class="form-group col-md-12" >
                            <?php
                            echo $this->Form->input('producto1', array('label' => 'Escriba brevemente los productos o procesos relacionados(opcional)', 'class' => 'form-control'));
                            ?>
                        </div>
                        <!--div class="form-group col-md-6">
                                        <?php
                                        //$optiondim = array('' => 'Elegir', 'CSSM' => 'Convivencia Social y Salud Mental', 'FAS' => 'Fortalecimiento de la Autoridad Sanitaria', 'S_Ambiental' => 'Salud Ambiental', 'EMGYD' => 'Salud Pública Emergencias y desastres', 'SAL' => 'Salud y Ámbito Laboral', 'SAN' => 'Seguridad Alimentaria y Nutricional', 'DSDR' => 'Sexualidad, Derechos Sexuales y Reproductivos', 'GDPV' => 'Transversal Gestión Diferencial de Poblaciones Vulnerables', 'VSCNT' => 'Vida Saludable y Condiciones no Transmisibles', 'VSET' => 'Vida Saludable y Enfermedades Transmisibles', 'TDE' => 'Todas las Dimensiones Enfoques', 'TDEC' => 'Todas las Dimensiones Educación y Comunicación', 'TDF' => 'Todas las dimensiones Fortalecimiento', 'TDG' => 'Todas las Dimensiones Gestión', 'TDMP' => 'Todas las dimensiones Modo Pedagógico', 'TD_OBJ' => 'Todas las Dimensiones Objeivos');
                                        $optiondim = array(''=>'Elegir','Consumo de SPA Consuducta Suicida'=>'Consumo de SPA - Consuducta Suicida','Violencia basada en genero Maternidad'=>'Violencia basada en genero - Maternidad','Condiciones crónicas prevalentes y mal nutrición'=>'Condiciones crónicas prevalentes y mal nutrición','Falta de incorporación del enfoque diferencial'=>'Falta de incorporación del enfoque diferencial', 'Acciones Transversales'=>'Acciones Transversales');
                                        echo $this->Form->input('dimension', array('label' => 'Dimensión', 'type' => 'select', 'options' => $optiondim, 'class' => 'form-control select-search'));
                                        ?>
                                    </div!-->

                        <div class="form-group col-md-12">
                            <?php
                            echo $this->Form->input('objactividad', array('label' => 'Objetivo General de  la actividad', 'class' => 'form-control'));
                            ?>
                        </div>
                        <div class="form-group col-md-12">
                            <?php
                            echo $this->Form->input('grupo', array('label' => 'Grupo u Organización con el que se realizó la actividad', 'class' => 'form-control'));
                            ?>
                            <p class="help-block">'Agrege en este campo el nombre de la Organización o grupo con el cual realizó la actividad formativa'</p>
                        </div>
                        <div class="form-group col-md-12">
                            <?php
                            echo $this->Form->input('ordendia', array('label' => 'orden del día', 'class' => 'ckeditor', 'class' => 'form-control'));
                            ?>
                        </div>

                        <div class="form-group col-md-12">
                        <p class="help-block">La reunión programada es resultado de compromisos de encuentros previos</p>
                                   

                                        <select id="status" name="status" required onChange="mostrar(this.value);">
                                            <option value="no">NO</option>
                                            <option value="si">SI</option>
                                            
                                        </select>



                                </div>

                        <div id="si" class="panel panel-default form-group col-md-12" style="display: none;">
                            <?php
                            echo $this->Form->input('compromisosprevios', array('label' => 'Verificación de compromisos previos (si hubo una reunion previa relacionada a esta)', 'class' => 'ckeditor', 'class' => 'form-control'));
                            ?>
                        </div>
                        <div class="form-group col-md-12">
                            <p class="help-block"> Registre los momentos desarrollados de la actividad mas importantes (max 1000 caracteres)</p>
                            <?php

                            echo $this->Form->input('desarrollo', array('label' => 'Desarrollo', 'class' => 'ckeditor'));
                            ?>

                        </div>
                        <div class="form-group col-md-12">
                            <?php
                            echo ('Registre los compromisos y tareas de la reunión');
                            echo $this->Form->input('compromiso', array('label' => 'Compromisos y tareas', 'class' => 'ckeditor'));
                            ?>
                        </div>

                        <div class="form-group col-md-6">
                            <?php
                            $alcancereunion = array('' => 'Elegir', 'planeacion operativa administrativa' => 'Planenación operativa/administrativa', 'ejcucion operativa administrativa' => 'Ejecución operativa/administrativa', 'planeacion pedagogica' => 'Planeación pedagógica', 'articulacion interinstitucional' => 'Apoyo interinstitucional', 'acompañamiento a organizaciones' => 'Acompañamiento a organizaciones', 'Ejecucion de eventos o actividades' => 'Ejecución de eventos o actividades', 'participacion escenarios externos' => 'participación escenarios externos');
                            echo $this->Form->input('alcancereunion', array('label' => 'Alcance de la reunión', 'type' => 'select', 'options' => $alcancereunion, 'class' => 'form-control select-search', 'class' => 'form-control'));
                            ?>
                        </div>
                        <div class="form-group col-md-6">
                            <p class="help-block">'Favor registrar fecha y lugar de la proxima convocatoria'</p>
                            <?php
                            echo $this->Form->input('convocatoria', array('label' => 'Proxima convocatoria', 'class' => 'form-control'));
                            ?>
                        </div>
                        <div class="form-group col-md-6">
                            <p class="help-block">Adjuntar anexo ' NOTA: Cargar el archivo comprimido extensión ".zip" o ".rar" si son varios soportes * listado asistencia .pdf - no imagen'</p>
                            <?php

                            //echo $this->Form->input('anexo', array('label'=>'archivos cargados', 'readonly'));
                            echo $this->Form->input('anexo', array('label' => 'Soportes', 'type' => 'file', 'onchange' => 'validarTamanioSoporte()', 'class' => 'form-control'));
                            echo $this->Form->input('dir', array('type' => 'hidden', 'class' => 'form-control'));
                            ?>
                        </div>
                        <div class="form-group col-md-6">
                            <?php
                            echo $this->Form->input('responsable_id', array('label' => 'Responsable de registro', 'class' => 'form-control select-search'));
                            echo $this->Form->input('created', array('label' => ' Fecha de registro', 'type' => 'hidden'));
                            ?>
                        </div>

                    </div>


                </fieldset>


                <p>
                    <?php echo $this->Form->end(array('label' => 'Crear acta', 'class' => 'btn btn-success')); ?>
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
        agregarOpcionSeleccion();
    });


    function validarTamanioSoporte() {
        var auxFile = document.getElementById('ActaAnexo');
        var sizeF = auxFile.files[0].size;
        if (sizeF > 4000000) {
            alert('El archivo debe ser menor a 4 Mb');
            auxFile.value = '';
        }
    }

    function agregarOpcionSeleccion() {
        $("#ActaUbicacionId").prepend("<option value='' selected='selected'>Seleccione</option>");
        $("#ActaProductoId").prepend("<option value='' selected='selected'>Seleccione</option>");
        $("#ActaResponsableId").prepend("<option value='' selected='selected'>Seleccione</option>");
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