<?php $this->layout = 'formulario' ?>
<?php echo $this->Html->script('ckeditor/ckeditor'); ?>
<div class="organizaciones form">

    <?php echo $this->Form->create('Organizacion'); ?>
    <fieldset>
        <legend><?php echo __('Agregar Organizacion Social'); ?></legend>
        <?php
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

        <div class="row">
            <div class="form-group col-md-6">
        <?php
        echo $this->Form->input('fecha', $option);
        ?>
            </div>
            <div class="form-group col-md-12">
                <?php echo ('Información de contacto del representante o delegado'); ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                echo $this->Form->input('nombre', array('label' => 'Nombres', 'class' => 'form-control'));
                ?>
            </div>
            <div class="form-group col-md-6">
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
            <div class="form-group col-md-6">
                <?php
                echo $this->Form->input('correo_contacto', array('label' => 'Correo electrónico', 'class' => 'form-control'));
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                echo $this->Form->input('cargoorg', array('label' => 'Cargo en la organización', 'class' => 'form-control'));
                ?>
            </div>
            <div class="form-group col-md-12">
                <?php
                echo ('Información de la organización');
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                $option8 = array('Social' => 'Social');
                echo $this->Form->input('tipo_org', array('label' => 'Tipo de organización', 'options' => $option8, 'class' => 'form-control select-search'));
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                echo $this->Form->input('nombre_org', array('label' => 'Nombre organización', 'class' => 'form-control'));
                ?>
            </div>
            <div class="form-group col-md-6">
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
                echo $this->Form->input('barrio_org', array('label' => 'Barrio/Vereda', 'class' => 'form-control'));
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                $option2 = array('' => 'Elegir', 'No aplica' => 'No aplica', 'Comuna 1' => 'Comuna 1', 'Comuna 2' => 'Comuna 2', 'Comuna 3' => 'Comuna 3', 'Comuna 4' => 'Comuna 4', 'Comuna 5' => 'Comuna 5', 'Comuna 6' => 'Comuna 6', 'Comuna 7' => 'Comuna 7', 'Comuna 8' => 'Comuna 8', 'Comuna 9' => 'Comuna 9', 'Comuna 10' => 'Comuna 10', 'Comuna 11' => 'Comuna 11', 'Comuna 12' => 'Comuna 12');
                echo $this->Form->input('comuna_org', array('label' => 'Comuna', 'options' => $option2, 'class' => 'form-control select-search'));
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                $option3 = array('' => 'Elegir', 'No aplica' => 'No aplica', 'Buesaquillo' => 'Buesaquillo', 'Cabrera' => 'Cabrera', 'Catambuco' => 'Catambuco', 'El Encano' => 'El Encano', 'El Socorro' => 'El Socorro', 'Genoy' => 'Genoy', 'Gualmatan' => 'Gualmatan', 'Jamondino' => 'Jamondino', 'Jongovito' => 'Jongovito', 'La Caldera' => 'La Caldera', 'La Laguna' => 'La Laguna', 'Mapachico' => 'Mapachico', 'Mocondino' => 'Mocondino', 'Morasurco' => 'Morasurco', 'Obonuco' => 'Obonuco', 'San Fernando' => 'San Fernando', 'Santa Barbara' => 'Santa Barbara');
                echo $this->Form->input('corregimiento_org', array('label' => 'Corregimiento', 'type' => 'select', 'options' => $option3, 'class' => 'form-control select-search'));
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                echo $this->Form->input('direccion_org', array('label' => 'Dirección de la organización', 'class' => 'form-control'));
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                echo $this->Form->input('telefono_org', array('label' => 'Teléfono de la organización', 'class' => 'form-control'));
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                $option4 = array('' => 'Elegir', 'Municipal' => 'Municipal', 'Departamental' => 'Departamental', 'Nacional' => 'Nacional', 'Internacional' => 'Internacional');
                echo $this->Form->input('nivel_operativo', array('label' => 'Nivel administrativo territorial', 'type' => 'select', 'options' => $option4, 'class' => 'form-control select-search'));
                ?>
            </div>
            <div class="form-group col-md-12">
                <?php
                echo ('Registar no aplica en el caso de no tener algun medio de comunicación presentados a continuación');
                echo $this->Form->input('web', array('label' => 'Sitio web de la organización', 'class' => 'form-control'));
                ?>
            </div>
            <div class="form-group col-md-12">
                <?php
                echo $this->Form->input('correo_org', array('label' => 'Correo electrónico organización', 'class' => 'form-control'));
                ?>
            </div>
            <div class="form-group col-md-12">
                <?php
                echo $this->Form->input('redes', array('label' => 'Redes sociales de la organización', 'class' => 'form-control'));
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                $option5 = array('' => 'Elegir', 'Formal' => 'Formal', 'Informal' => 'Informal');
                echo $this->Form->input('constitucion', array('label' => 'Constitución de la orgnización', 'type' => 'select', 'options' => $option5, 'class' => 'form-control select-search'));
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                echo $this->Form->input('tiempoconst', array('label' => 'Tiempo constitución', 'class' => 'form-control'));
                ?>
            </div>
            <div class="form-group col-md-12">
                <?php
                echo $this->Form->input('actividad', array('label' => 'Actividad a desarrollar', 'class' => 'ckeditor'));
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                echo $this->Form->input('numintegrantes', array('label' => 'Número de integrantes', 'class' => 'form-control'));
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                echo $this->Form->input('numbeneficiarios', array('label' => 'Número de beneficiarios', 'class' => 'form-control'));
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                echo ('Registre si sus acciones se realizan en zona rural, urbana o en ambas');
                $option9 = array('' => 'Elegir', 'Urbana' => 'Urbana', 'Rural' => 'Rural', 'UyR' => 'Urbano/Rural');
                echo $this->Form->input('zonaactividad', array('label' => 'Zona de actividad', 'type' => 'select', 'options' => $option9, 'class' => 'form-control select-search'));
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                echo('Registre los barrios, veredas con su respectivo corregimiento donde realizan acciones');
                echo $this->Form->input('barrio_actividad', array('label' => 'Barrio donde realiza actividades', 'class' => 'form-control'));
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                echo('Registre las comunas, donde realizan acciones');
                echo $this->Form->input('comuna_actividad', array('label' => 'Comunas donde se realizan actividades', 'class' => 'form-control'));
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                echo $this->Form->input('corregimiento_actividad', array('label' => 'corregimientos donde se realizan actividades', 'class' => 'form-control'));
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                echo('Personas y/o poblaciones que participan en la organización');
                echo $this->Form->input('numhombre', array('label' => 'Número de hombres', 'class' => 'form-control'));
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                echo $this->Form->input('nummujer', array('label' => 'Número de mujeres', 'class' => 'form-control'));
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                echo $this->Form->input('nummenor', array('label' => 'Número de menores', 'class' => 'form-control'));
                ?>
            </div>
            <div class="form-group col-md-12">
                <?php
                echo('registre aquí las poblaciones particpantes, con el codigo y nombre respectivo');
                echo $this->Form->input('integrantesorg', array('label' => 'Integrantes (La organización esta compuesta por)', 'type' => 'text', 'class' => 'form-control'));
                ?>
            </div>
            <div class="form-group col-md-12">
<?php
$option6 = array('' => 'Elegir', 'Población en general', 'Adolescentes', 'Adultos(as) mayores', 'Afrocolombianos', 'Campesinos', 'Habitandes de calle', 'Indígenas', 'Líderes y Lideresas', 'Madres gestantes', 'Madres lactantes', 'Población en situación de discapacidad', 'Población LGBTI', 'Población privada de libertad', 'Población reinsertada', 'Población víctima de conflicto armado', 'Población víctima de violencia', 'Trabajadores(as) sexuales', 'Otra');
echo('registre aquí las poblaciones particpantes, con el codigo y nombre respectivo');
echo $this->Form->input('poblaciones_ident', array('label' => 'Las poblaciones con las que trabaja su organización son', 'class' => 'form-control'));
?>
            </div>
            <div class="form-group col-md-6">
                <?php
                $option7 = array('' => 'Elegir', 'Comunitaria' => 'Comunitaria', 'JAC' => 'JAC', 'JAL' => 'JAL', 'Asociaciòn' => 'Asociaciòn', 'Comercial' => 'Comercial', 'Cooperativa' => 'Cooperativa', 'Fundaciòn' => 'Fundaciòn', 'Gremio' => 'Gremio', 'Servicios de salud' => 'Servicios de salud', 'Servicios educativos' => 'Servicios educativos', 'Sindicato' => 'Sidicato', 'Otra' => 'Otra');
                echo $this->Form->input('sociedad', array('label' => 'Sociedad', 'type' => 'select', 'options' => $option7, 'class' => 'form-control select-search'));
                ?>
            </div>
            <div class="form-group col-md-6">
<?php
$option8 = array('' => 'Elegir', 'Agrario/Afines' => 'Agrario/Afines', 'Asistencia Humanitaria' => 'Asistencia Humanitaria', 'Comunicaciones' => 'Comunicaciones', 'Construcciòn' => 'Construcciòn', 'Cultura' => 'Cultura', 'Deportes' => 'Deportes', 'Financieros' => 'Financieros', 'Industria' => 'Industria', 'recreaciòn' => 'Recreaciòn', 'Religioso' => 'Religioso', 'servicios' => 'Servicios', 'Social' => 'Social', 'Transporte' => 'Transporte', 'Otra' => 'Otra');
echo $this->Form->input('sector', array('label' => 'Actividad social o económica', 'type' => 'select', 'options' => $option8, 'class' => 'form-control select-search'));
?>            </div>
            <div class="form-group col-md-12">
<?php
echo('Registre aquí el nombre de las instituciones u organizaciones con las que articula su trabajo');
echo $this->Form->input('articulacion', array('label' => 'Articulación', 'class' => 'form-control'));
?>
            </div>
            <div class="form-group col-md-12">
<?php
echo ('De acuerdo a las instituciones u organizaciones registradas en la casilla anterior clasifique su nivel administrativo');
echo $this->Form->input('niveladmin', array('label' => 'Nivel administrativo', 'class' => 'form-control'));
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
        <li> <a  href="../users/bienvenida"	 >Inicio</a></li>
        <li><?php echo $this->Html->link(__('Regresar'), array('action' => 'nuebus')); ?></li>
        <li><?php echo $this->Html->link(__('Lista Personas'), array('controller' => 'personas', 'action' => 'nuebus')); ?> </li>
        <li><?php echo $this->Html->link(__('Lista Actividades'), array('controller' => 'actividades', 'action' => 'nuebus')); ?> </li>
        <li><?php echo $this->Html->link(__('Nueva Actividad'), array('controller' => 'actividades', 'action' => 'add')); ?> </li>
        <li> <a href="http://www.procuraduria.gov.co/portal/antecedentes.html" target="_blank">Procuraduria</a></li>
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