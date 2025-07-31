<?php $this->layout = 'formulario' ?>
<div class="personas form">
    <?php echo $this->Form->create('Persona'); ?>
    <fieldset>
        <legend><?php echo __('Asociar Participante a  Actividad'); ?></legend>
        <?php
        echo $this->Form->input('id');
         $option11 = array(
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
                <?php echo $this->Form->input('fecha', $option11); ?>
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
                $option12 = array('' => 'Elegir', '1' => 'Masulino', '2' => 'Femenino', '3' => 'Otro', '4' => 'No Informa');
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
                echo('Datos de ubicación lugar de residencia');
                $optionzona = array('' => 'Elegir', '1' => 'Urbano', '2' => 'Rural');
                echo $this->Form->input('zona', array('label' => 'Zona de residencia', 'options' => $optionzona,'class' => 'form-control select-search'));
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                echo('Si no ubica algun barrio o vereda, seleccione la opcion "Actualizar" que se encuentra al final de la lista.');
                echo $this->Form->input('ubicacion_id', array('label' => 'Barrio', 'type' => 'select','class' => 'form-control select-search'));
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                echo $this->Form->input('vereda', array('label' => 'Registre aquí Barrio/Vereda','class' => 'form-control'));
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                $option2 = array('' => 'Elegir', 'No aplica' => 'No aplica', 'Comuna 1' => 'Comuna 1', 'Comuna 2' => 'Comuna 2', 'Comuna 3' => 'Comuna 3', 'Comuna 4' => 'Comuna 4', 'Comuna 5' => 'Comuna 5', 'Comuna 6' => 'Comuna 6', 'Comuna 7' => 'Comuna 7', 'Comuna 8' => 'Comuna 8', 'Comuna 9' => 'Comuna 9', 'Comuna 10' => 'Comuna 10', 'Comuna 11' => 'Comuna 11', 'Comuna 12' => 'Comuna 12');
                echo $this->Form->input('comuna', array('label' => 'Comuna', 'options' => $option2,'class' => 'form-control select-search'));
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                $option3 = array('' => 'Elegir', 'No aplica' => 'No aplica', 'Buesaquillo' => 'Buesaquillo', 'Cabrera' => 'Cabrera', 'Catambuco' => 'Catambuco', 'El Encano' => 'El Encano', 'El Socorro' => 'El Socorro', 'Genoy' => 'Genoy', 'Gualmatan' => 'Gualmatan', 'Jamondino' => 'Jamondino', 'Jongovito' => 'Jongovito', 'La Caldera' => 'La Caldera', 'La Laguna' => 'La Laguna', 'Mapachico' => 'Mapachico', 'Mocondino' => 'Mocondino', 'Morasurco' => 'Morasurco', 'Obonuco' => 'Obonuco', 'San Fernando' => 'San Fernando', 'Santa Barbara' => 'Santa Barbara');
                echo $this->Form->input('corregimiento', array('label' => 'Corregimiento', 'type' => 'select', 'options' => $option3,'class' => 'form-control select-search'));
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
            <div class="form-group col-md-6">
                <?php
                echo $this->Form->input('correo', array('class' => 'form-control'));
                ?>
            </div>
            <div class="form-group col-md-12">
                <?php
                echo $this->Form->input('ocupacion', array('label' => 'Ocupación actual', 'class' => 'form-control'));
                ?>
            </div>
            <div class="form-group col-md-12">
                <?php
                echo ('Asocie este usuario con una actividad ');
                echo $this->Form->input('Actividad', array('label' => 'Actividades registradas', 'type' => 'select', 'multiple' => 'checkbox', 'class' => 'checkbox-inline'));
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
        $('.select-search-multi').select2({
            closeOnSelect: false
        });
    });
</script>