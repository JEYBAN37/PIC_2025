<?php $this->layout = 'formulario' ?>

<div class="personas form">
    <?php echo $this->Form->create('Persona'); ?>
    <fieldset>
        <legend><?php echo __('Nuevo Registro Participante Actividad'); ?></legend>
       

        <div class="row">
            
            <div class="form-group col-md-6">
                <?php
                $option = array('' => 'Elegir', 'C.C' => 'C.C', 'R.C' => 'R.C', 'C.E' => 'C.E', 'T.I' => 'T.I', 'PAS' => 'PAS');
                echo $this->Form->input('tipoidoc', array('label' => 'Tipo de documento', 'type' => 'select', 'options' => $option, 'class' => 'form-control select-search'));
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                echo $this->Form->input('identificacion', array('label' => 'Número de documento', 'class' => 'form-control'));
                ?>
            </div>
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
                $option12 = array('' => 'Elegir', '1' => 'Hombre', '2' => 'Mujer', '3' => 'Otro', '4' => 'No Informa');
                echo $this->Form->input('genero', array('options' => $option12, 'class' => 'form-control select-search'));
                ?>
            </div>

            <div class="form-group col-md-6">
                <?php
                $option14 = array('' => 'Elegir', '1' => 'Afrodescendiente', '2' => 'Gitano(ROM)', '3' => 'Indígena', '4' => 'mestizo', '5' => 'Palenqueros', '6' => 'Raizal(San Andrés y Providencia)', '7' => 'Ninguno de los anteriores', '8'
                    => 'No informa', '9' => 'Sin Dato');
                echo $this->Form->input('etnia', array('label' => 'Grupo etnico', 'type' => 'select', 'options' => $option14,'class' => 'form-control select-search'));
                ?>
            </div>

            <div class="form-group col-md-12">

                 <p> <?php echo 'Copie de esta lista a la casilla siguiente las poblaciones participantes o escriba otras que no esten categorizadas.'?></p> 
                  
            <?php echo  '1.LGTBI 2. Campesinos  3. Poblacion Discapacidad 4. Victima 5. ninguno 6. Otro 7. Sin dato '?> 
        
           <?php echo $this->Form->input('poblaciones', array('label' => 'Población con la que se identifica','class' => 'form-control'));?><br> 
             </div> 

              
            <div class="form-group col-md-6">
                <?php
                echo(' Actualice el lugar de residencia aqui, Si no ubica algun barrio o vereda, seleccione la opcion "barrio no encontrado" ');
                echo $this->Form->input('ubicacion_id', array('label' => 'Barrio/Comuna - Corregimiento/vereda', 'type' => 'select','class' => 'form-control select-search'));
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                echo $this->Form->input('vereda', array('label' => 'Registre aquí Barrio/Vereda, si no se encuentra en la lista','class' => 'form-control'));
                ?>
            </div>
            
            
            <!--div class="form-group col-md-6">
                <?php
                echo('Si marco la opción otro, diligencie la casilla que continua, de lo contrario escriba "No aplica"');
                echo $this->Form->input('otrogenero', array('label' => 'Otro cual ?', 'class' => 'form-control'));
                ?>
            </div-->
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
            <!--div class="form-group col-md-6">
                <?php
                echo $this->Form->input('correo', array('class' => 'form-control'));
                ?>
            </div!-->
            <div class="form-group col-md-12">
                <?php
                echo $this->Form->input('ocupacion', array('label' => 'Ocupación actual', 'class' => 'form-control'));
                ?>
            </div>
            <div class="form-group col-md-12">
                <?php
                echo ('A continuación se muestran los ID de las actividades sistematizadas, por favor asocie al usuario con el ID de la sistematización según corresponda ');
                echo $this->Form->input('Actividad', array('label' => 'Actividades registradas', 'type' => 'select', 'multiple' => 'checkbox', 'class' => 'checkbox-inline'));
                ?>
            </div>

             <div class="form-group col-md-12">
                <?php
                echo ('A continuación se muestran los ID de los informes de eventos u otras acciones, por favor asocie al usuario con el ID del evento segun corresponda');
                echo $this->Form->input('Infoevento', array('label' => 'Eventos registrados', 'type' => 'select', 'multiple' => 'checkbox', 'class' => 'checkbox-inline'));
                ?>
            </div>

             <div class="form-group col-md-12">
                <?php
                echo ('Asocie este usuario con un proceso formativo');
                echo $this->Form->input('Procesoregistro', array('label' => 'Procesos formativos registrados', 'type' => 'select', 'multiple' => 'checkbox', 'class' => 'checkbox-inline'));
                ?>
            </div>

              <div class="form-group col-md-12">
                <?php
                echo ('Asocie este usuario con un acta');
                echo $this->Form->input('Acta', array('label' => 'Actas registradas', 'type' => 'select', 'multiple' => 'checkbox', 'class' => 'checkbox-inline'));
                ?>
            </div>
            <div class="form-group col-md-6">
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
        <li><?php echo $this->Html->link(__('Lista Personas'), array('action' => 'nuebus')); ?></li>
        <li><?php echo $this->Html->link(__('Lista Actividades'), array('controller' => 'actividades', 'action' => 'nuebus')); ?> </li>
        <li><?php echo $this->Html->link(__('Nueva Actividad'), array('controller' => 'actividades', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('Lista Organizaciones'), array('controller' => 'organizaciones', 'action' => 'nuebus')); ?> </li>
        <li><?php echo $this->Html->link(__('Nueva Organizacione'), array('controller' => 'organizaciones', 'action' => 'add')); ?> </li>
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