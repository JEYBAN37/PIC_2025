<?php $this->layout = 'formulario' ?>
<?php echo $this->Html->script('ckeditor/ckeditor'); ?>
<div class="instituciones form">

    <?php echo $this->Form->create('Institucion'); ?>
    <fieldset>
        <legend><?php echo __('Editar datos de Institución'); ?></legend>
        <?php
        echo $this->Form->input('id');

        $option = array(
            'label' => 'Fecha',
            'dateFormat' => 'DMY',
            'minYear' => date('Y') - 2,
            'maxYear' => date('Y') + 0,
            'empty' => array(
                'day' => 'Día',
                'month' => 'Mes',
                'year' => 'Año'
            )
        );
        ?>

        <div class = "row">
            <div class = "form-group col-md-6">
                <?php echo $this->Form->input('fecha', $option);
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                $option8 = array('' => 'Elegir', 'Publico' => 'Publico', 'Privado' => 'Privado');
                echo $this->Form->input('tipo', array('label' => 'Sector', 'options' => $option8, 'class' => 'form-control select-search'));
                ?>
            </div>
            <div class="form-group col-md-12">
                <?php
                echo ('Información de contacto del representante o delegado');
                echo $this->Form->input('nombre', array('label' => 'Nombres', 'class' => 'form-control'));
                ?>
            </div>
            <div class="form-group col-md-12">
                <?php
                echo $this->Form->input('apellido', array('label' => 'Apellidos', 'class' => 'form-control'));
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                $option1 = array('' => 'Elegir', 'C.C' => 'C.C', 'R.C' => 'R.C', 'C.E' => 'C.E', 'T.I' => 'T.I', 'PAS' => 'PAS');
                echo $this->Form->input('tipodoc', array('label' => 'Tipo de documento', 'type' => 'select', 'options' => $option1, 'class' => 'form-control select-search'));
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                echo $this->Form->input('documento_contact', array('label' => 'Nùmero de documento', 'class' => 'form-control'));
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                echo $this->Form->input('telfijo', array('label' => 'Teléfono fijo', 'class' => 'form-control'));
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                echo $this->Form->input('telcel', array('label' => 'Teléfono celular', 'class' => 'form-control'));
                ?>
            </div>
            <div class="form-group col-md-12">
                <?php
                echo $this->Form->input('correo_contacto', array('label' => 'Correo electrónico', 'class' => 'form-control'));
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                echo $this->Form->input('cargo_inst', array('label' => 'Cargo en la Institucíon', 'class' => 'form-control'));
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                $option8 = array('' => 'Elegir', '1 año' => '1 año', '2 años' => '2 años', 'Mas de 3 años' => 'Mas de 3 años');
                echo $this->Form->input('experienciacargo', array('label' => 'Tiempo de trabajo', 'options' => $option8, 'class' => 'form-control select-search'));
                ?>
            </div>
            <div class="form-group col-md-12">
                <?php
                echo ('Información de la institución');
                echo $this->Form->input('nombre_inst', array('label' => 'Nombre institución', 'class' => 'form-control'));
                ?>
            </div>
            <div class="form-group col-md-12">
                <?php
                echo $this->Form->input('representante', array('label' => 'Nombre del representante', 'class' => 'form-control'));
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                echo $this->Form->input('ubicacion_id', array('label' => 'Barrio', 'class' => 'form-control select-search'));
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                echo $this->Form->input('barrio_institucion', array('label' => 'Barrio/Vereda', 'class' => 'form-control'));
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                $option2 = array('' => 'Elegir', 'No aplica' => 'No aplica', 'Comuna 1' => 'Comuna 1', 'Comuna 2' => 'Comuna 2', 'Comuna 3' => 'Comuna 3', 'Comuna 4' => 'Comuna 4', 'Comuna 5' => 'Comuna 5', 'Comuna 6' => 'Comuna 6', 'Comuna 7' => 'Comuna 7', 'Comuna 8' => 'Comuna 8', 'Comuna 9' => 'Comuna 9', 'Comuna 10' => 'Comuna 10', 'Comuna 11' => 'Comuna 11', 'Comuna 12' => 'Comuna 12');
                echo $this->Form->input('comuna_institucion', array('label' => 'Comuna', 'options' => $option2, 'class' => 'form-control select-search'));
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                $option3 = array('' => 'Elegir', 'No aplica' => 'No aplica', 'Buesaquillo' => 'Buesaquillo', 'Cabrera' => 'Cabrera', 'Catambuco' => 'Catambuco', 'El Encano' => 'El Encano', 'El Socorro' => 'El Socorro', 'Genoy' => 'Genoy', 'Gualmatan' => 'Gualmatan', 'Jamondino' => 'Jamondino', 'Jongovito' => 'Jongovito', 'La Caldera' => 'La Caldera', 'La Laguna' => 'La Laguna', 'Mapachico' => 'Mapachico', 'Mocondino' => 'Mocondino', 'Morasurco' => 'Morasurco', 'Obonuco' => 'Obonuco', 'San Fernando' => 'San Fernando', 'Santa Barbara' => 'Santa Barbara');
                echo $this->Form->input('corregimiento_inst', array('label' => 'Corregimiento', 'type' => 'select', 'options' => $option3, 'class' => 'form-control select-search'));
                ?>
            </div>
            <div class="form-group col-md-12">
                <?php
                echo $this->Form->input('direccion_institucion', array('label' => 'Dirección de la institución', 'class' => 'form-control'));
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                echo $this->Form->input('telefono_instutucion', array('label' => 'Teléfono de la institución', 'class' => 'form-control'));
                ?>
            </div>
            <div class="form-group col-md-12">
                <?php
                echo ('Registar no aplica en el caso de no tener algun medio de comunicación presentados a continuación');
                echo $this->Form->input('correo_institucion', array('label' => 'Correo electrónico institución', 'class' => 'form-control'));
                ?>
            </div>
            <div class="form-group col-md-12">
                <?php
                echo $this->Form->input('redes', array('label' => 'Redes sociales de la institución', 'class' => 'form-control'));
                ?>
            </div>
            <div class="form-group col-md-12">
                <?php
                echo $this->Form->input('web', array('label' => 'Sitio web de la institución', 'class' => 'form-control'));
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                $option4 = array('' => 'Elegir ', 'Municipal' => 'Municipal', 'Departamental' => 'Departamental', 'Nacional' => 'Nacional');
                echo $this->Form->input('nivel_operativo', array('label' => 'Nivel administrativo territorial', 'type' => 'select', 'options' => $option4, 'class' => 'form-control select-search'));
                ?>
            </div>
            <div class="form-group col-md-12">
                <?php
                echo $this->Form->input('actividad', array('label' => 'Actividad que desarrolla', 'class' => 'ckeditor'));
                ?>
            </div>
            <div class="form-group col-md-12">
                <?php
                echo('Registre aquí las poblaciones particpantes, con el codigo y nombre respectivo');
                echo $this->Form->input('poblaciones_ident', array('label' => 'Las poblaciones para las que trabaja su institución ', 'class' => 'ckeditor'));
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                echo $this->Form->input('responsable_encuesta', array('label' => 'Nombre quien realiza la encuesta', 'class' => 'form-control'));
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                echo $this->Form->input('fecha_registro', array('label' => 'Registro'));
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
        <li><?php echo $this->Html->link(__('Lista Personas'), array('controller' => 'personas', 'action' => 'nuebus')); ?> </li>
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
    });
</script>