<?php $this->layout = 'formulario' ?>

<div class="personas form">
    <?php echo $this->Form->create('Persona'); ?>
    <fieldset>
        <legend><?php echo __('Editar Agente Comunitario'); ?></legend>
        <?php
        echo $this->Form->input('id');
       $option11 = array(
            'label' => 'Fecha de diligenciamiento encuesta',
            'dateFormat' => 'DMY',
            'minYear' => date('Y') + 0,
            'maxYear' => date('Y') + 0,
            'empty' => array(
                'day' => 'Día',
                'month' => 'Mes',
                'year' => 'Año'
            )
        );
        ?>

        <div class="row">
            <div class="form-group col-md-6">
                <?php echo $this->Form->input('fecha', $option11); ?>
            </div>
            <div class="form-group col-md-6"></div>
            <!--div class="form-group col-md-6">
                <?php
                $option = array('' => 'Elegir', 'C.C' => 'C.C', 'R.C' => 'R.C', 'C.E' => 'C.E', 'T.I' => 'T.I', 'PAS' => 'PAS');
                echo $this->Form->input('tipoidoc', array('label' => 'Tipo de documento', 'type' => 'select', 'options' => $option, 'class' => 'form-control select-search'));
                ?>
            </div-->
            <!--div class="form-group col-md-6">
                <?php
                echo $this->Form->input('identificacion', array('label' => 'Número de documento', 'class' => 'form-control'));
                ?>
            </div-->
            <div class="form-group col-md-6">
                <?php
                echo $this->Form->input('nombres', array('class' => 'form-control'));
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                echo $this->Form->input('apellidos', array('class' => 'form-control'));
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                echo $this->Form->input('celular', array('class' => 'form-control'));
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                echo $this->Form->input('telefono', array('class' => 'form-control'));
                ?>
            </div>
            <div class="form-group col-md-12">
                <?php
                echo $this->Form->input('correo', array('class' => 'form-control'));
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                $option1 = array(
                    'label' => 'Fecha de Nacimiento',
                    'dateFormat' => 'DMY',
                    'minYear' => date('Y') - 100,
                    'maxYear' => date('Y'),
                    'empty' => array(
                        'day' => 'Día',
                        'month' => 'Mes',
                        'year' => 'Año'
                    )
                );
                echo $this->Form->input('fechanac', $option1);
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                echo $this->Form->input('edad', array('class' => 'form-control'));
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                //echo $this->Form->input('grupo', array('label' => 'Reporta edad ?', 'options' => array('' => 'Elegir', 'Si' => 'Si', 'No' => 'No')) );
                $option12 = array('' => 'Elegir', '1' => 'Masulino', '2' => 'Femenino', '3' => 'Otro', '4' => 'No Informa');
                echo $this->Form->input('genero', array('options' => $option12, 'class' => 'form-control select-search'));
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                echo('Si marco la opción otro, diligencie la casilla que continua, de lo contrario escriba "No aplica"');
                echo $this->Form->input('otrogenero', array('label' => 'Otro cual ?', 'class' => 'form-control'));
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                $option13 = array('' => 'Elegir', '1' => 'Hombres', '2' => 'Mujeres', '3' => 'Mujer y Hombre', '4' => 'No Informa', '5' => 'Sin dato');
                echo $this->Form->input('preferencia', array('label' => 'Preferencia sexual', 'type' => 'select', 'options' => $option13, 'class' => 'form-control select-search'));
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                $option14 = array('' => 'Elegir', '1' => 'Afrodescendiente', '2' => 'Gitano(ROM)', '3' => 'Indígena', '4' => 'mestizo', '5' => 'Palenqueros', '6' => 'Raizal(San Andrés y Providencia)', '7' => 'Ninguno de los anteriores', '8'
                    => 'No informa', '9' => 'Sin Dato');
                echo $this->Form->input('etnia', array('label' => 'Grupo etnico', 'type' => 'select', 'options' => $option14, 'class' => 'form-control select-search'));
                ?>
            </div>
            <div class="form-group col-md-12">
                <?php
                echo('Registrar ultimo nivel de escolaridad alcanzado');
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                echo $this->Form->input('estudio_id', array('label' => 'Estudio', 'class' => 'form-control select-search'));
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                echo('Si marco la opción otro, diligencie la casilla a continuación');
                echo $this->Form->input('otroestudio', array('label' => 'Otro nivel de estudio', 'class' => 'form-control'));
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                echo('Si el nivel educativo es “Técnico”, “Tecnológico”, “Universitario” registre la siguiente casilla');
                echo $this->Form->input('profesion', array('label' => 'Especifique la profesión ', 'class' => 'form-control'));
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                echo('registre aquí las poblaciones con las que se identifica');
                echo $this->Form->input('poblacion_id', array('label' => 'Población con la que se identifica', 'class' => 'form-control select-search'));
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                echo('Si la persona regisatra otras poblaciones registrelas aquí');
                echo $this->Form->input('poblaciones', array('label' => 'Población con la que se identifica', 'class' => 'form-control'));
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                echo('Si la persona manifiesta tener discapacidad, diligencie la casilla siguiente, de lo contrario coloque "No aplica"');
                echo $this->Form->input('discapacidad', array('class' => 'form-control'));
                ?>
            </div>

            <div class="form-group col-md-6">
                <?php
                echo(' Si no ubica algun barrio o vereda, seleccione la opcion "barrio no encontrado" ');
                echo $this->Form->input('ubicacion_id', array('label' => 'Barrio/Comuna - Corregimiento/vereda', 'class' => 'form-control select-search'));
            ?>
            </div>

             <div class="form-group col-md-6">
                <?php
                              
                echo $this->Form->input('vereda', array('label' => 'Registre aquí Barrio/Vereda, si no se encuentra en la lista', 'class' => 'form-control'));
                ?>
            </div>
          
            <div class="form-group col-md-12">
                <?php
                echo $this->Form->input('ocupacion', array('label' => 'Ocupación actual', 'class' => 'form-control'));
                ?>
            </div>
            <div class="form-group col-md-12">
                <?php
                echo $this->Form->input('tiempoexperiencia', array('label' => 'Tiempo de experiencia (Años y/o Meses)', 'class' => 'form-control'));
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                echo $this->Form->input('aseguradora_id', array('label' => 'Eps', 'class' => 'form-control select-search'));
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                $options15 = array('' => 'Elegir', 'Contributivo' => 'Contributivo', 'Subsidiado' => 'Subsidiado', 'Vinculado' => 'Vinculado', 'Régimen especial' => 'Régimen especial');
                echo $this->Form->input('regimen', array('options' => $options15, 'class' => 'form-control select-search'));
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                echo $this->Form->input('perteneceorganizacion', array('label' => 'Organización', 'options' => array('' => 'Elegir', 'Si' => 'Si', 'No' => 'No'), 'class' => 'form-control select-search'));
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                echo('Si marco la opción si, diligencie las casillas a continuación, de lo contrario escriba "No aplica" en cada uno de los campos');
                echo $this->Form->input('organizacion', array('label' => 'Organización', 'class' => 'form-control'));
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                echo $this->Form->input('sociedad_id', array('label' => 'Sociedad', 'class' => 'form-control select-search select-search'));
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                echo $this->Form->input('sector_id', array('label' => 'Sector', 'class' => 'form-control select-search'));
                ?>
            </div>
            <div class="form-group col-md-12">
                <?php
                echo $this->Form->input('fecharegistro');
                ?>
            </div>
        </div>
    </fieldset>
    <?php echo $this->Form->end(__('Enviar')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Opciones'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Regresar'), array('action' => 'nuebus')); ?></li>
        <li><?php echo $this->Html->link(__('Lista Personas'), array('action' => 'nuebus')); ?></li>
        <li><?php echo $this->Html->link(__('Lista Actividades'), array('controller' => 'actividades', 'action' => 'nuebus')); ?> </li>
        <li><?php echo $this->Html->link(__('Nueva Actividad'), array('controller' => 'actividades', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('Lista Organizaciones'), array('controller' => 'organizaciones', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('Nueva Organizacion'), array('controller' => 'organizaciones', 'action' => 'add')); ?> </li>
    </ul>
</div>

<?php
$this->Html->css([
    'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css',
    'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'
        ], ['block' => 'css']
);
$this->Html->script([
    'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js',
    'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js'
        ], ['block' => 'script']
);
?>

<script type="text/javascript">
    $(document).ready(function () {
        $('.select-search').select2();
        agregarOpcionSeleccion();
    });

    function validarTamanioSoporte(){
        var auxFile = document.getElementById('ActaAnexo');
        var sizeF = auxFile.files[0].size;
        if(sizeF > 3000000)
        {
            alert('El archivo debe ser menor a 3 Mb');
            auxFile.value = '';
        }
    }

   function agregarOpcionSeleccion(){
        $("#PersonaUbicacionId").prepend("<option value='' selected='selected'>Seleccione</option>");
        $("#PersonaProductoId").prepend("<option value='' selected='selected'>Seleccione</option>");
        $("#PersonaResponsableId").prepend("<option value='' selected='selected'>Seleccione</option>");
        $("#PersonaAseguradoraId").prepend("<option value='' selected='selected'>Seleccione</option>");
        $("#PersonaSociedadId").prepend("<option value='' selected='selected'>Seleccione</option>");
        $("#PersonaSectorId").prepend("<option value='' selected='selected'>Seleccione</option>");
        $("#PersonaPoblacionId").prepend("<option value='' selected='selected'>Seleccione</option>");
        $("#PersonaEstudioId").prepend("<option value='' selected='selected'>Seleccione</option>");
        $("#PersonaEtniaId").prepend("<option value='' selected='selected'>Seleccione</option>");
    }
</script>