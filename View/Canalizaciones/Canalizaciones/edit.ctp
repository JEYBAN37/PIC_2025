<?php $this->layout = 'formulario'?>
<div class="canalizaciones form">
<?php echo $this->Form->create('Canalizacion'); ?>
	<fieldset>
		<legend><?php echo __('Editar Canalizacion'); ?></legend>
	<?php
		$option = array(
					'label' => 'Fecha de diligenciamiento encuesta ',
					'dateFormat'	=>	'DMY',
					'minYear'		=>	date('Y') - 3,
					'maxYear'		=>	date('Y') + 0,
					
					'empty' => array (
					
							'day'	=>	'Día',
							'month'	=>	'Mes',
							'year'	=>	'Año'
						
					  )
					);	
		
		echo $this->Form->input('fecha', $option);

		echo ('-> DATOS GENERALES');

		$option1 = array ('' => 'Elegir','C.C' => 'C.C', 'R.C' => 'R.C', 'C.E' => 'C.E', 'T.I' => 'T.I', 'PAS' => 'PAS');
		echo $this->Form->input('tipodoc', array('label'=> 'Tipo de documento', 'type' => 'select', 'options' => $option1));
		
		echo $this->Form->input('identificacion');
		echo $this->Form->input('nombres');
		echo $this->Form->input('apellidos');

		echo $this->Form->input('ubicacion_id',
array(
'label'=> 'Barrio',
'type'=>'select'
)
);

			echo $this->Form->input('vereda', array('label' => 'Vereda'));
		
 
		
		
		$option2 = array('' => 'Elegir', 'No aplica' => 'No aplica', 'Comuna 1' => 'Comuna 1', 'Comuna 2' => 'Comuna 2', 'Comuna 3' => 'Comuna 3', 'Comuna 4' => 'Comuna 4', 'Comuna 5' => 'Comuna 5', 'Comuna 6' => 'Comuna 6', 'Comuna 7' => 'Comuna 7', 'Comuna 8' => 'Comuna 8', 'Comuna 9' => 'Comuna 9', 'Comuna 10' => 'Comuna 10', 'Comuna 11' => 'Comuna 11', 'Comuna 12' => 'Comuna 12');
		
					echo $this->Form->input('comunas', array('label'=> 'Comuna', 'options' => $option2)); 

		$option3 = array('' => 'Elegir', 'No aplica' => 'No aplica','Buesaquillo' => 'Buesaquillo', 'Cabrera' => 'Cabrera', 'Catambuco' => 'Catambuco', 'El Encano' => 'El Encano', 'El Socorro' => 'El Socorro', 		'Genoy' => 'Genoy', 'Gualmatan' => 'Gualmatan', 'Jamondino' => 'Jamondino', 'Jongovito' => 'Jongovito', 'La Caldera' => 'La Caldera', 'La Laguna' => 'La Laguna', 'Mapachico' => 'Mapachico', 'Mocondino' => 'Mocondino', 'Morasurco' => 'Morasurco', 'Obonuco' => 'Obonuco', 'San Fernando' => 'San Fernando', 'Santa Barbara' => 'Santa Barbara');
		
					echo $this->Form->input('corregimiento', array('label'=> 'Corregimiento', 'type' => 'select', 'options' => $option3));
		echo $this->Form->input('direccion');
		echo $this->Form->input('telefono');
		echo $this->Form->input('celular');
		echo $this->Form->input('correo');

		echo ('-> SOLICITUD CIUDADANA');

		echo $this->Form->input('solicitud');

		echo ('-> CANALIZACIÓN');

		$option4 = array('' => 'Elegir', 'No aplica' => 'No aplica', 'Acciones colectivas' => 'Acciones colectivas', 'Alcaldía municipal de Pasto' => 'Alcaldía municipal de Pasto', 'Comisaria de familia' => 'Comisaria de familia', 'Consultorios jurídicos' => 'Consultorios jurídicos', 'Contraloría' => 'Contraloría', 'CTI' => 'CTI', 'Defensoría del pueblo' => 'Defensoría del pueblo', 'ICBF' => 'ICBF', 'Instituto departamental de salud' => 'Instituto departamental de salud', 'IPS' => 'IPS', 'Oficina de genero' => 'Oficina de genero', 'Personería municipal' => 'Personería mmunicipal', 'Policía de infancia y adolescencia' => 'Policía de infancia y adolescencia', 'Policía metropolitana' => 'Policía metropolitana', 'Secretaria municipal de salud' => 'Secretaria municipal de salud', 'Servicios públicos domiciliarios' => 'Servicios públicos domiciliarios', 'Unidad de reacción inmediata - URI' => 'Unidad de reacción inmediata - URI', 'URI' => 'URI');
		
					echo $this->Form->input('canalizacion', array('label'=> 'Canalización uno', 'options' => $option4));

					$option5 = array('' => 'Elegir', 'No aplica' => 'No aplica', 'Acciones colectivas' => 'Acciones colectivas', 'Alcaldía municipal de Pasto' => 'Alcaldía municipal de Pasto', 'Comisaria de familia' => 'Comisaria de familia', 'Consultorios jurídicos' => 'Consultorios jurídicos', 'Contraloría' => 'Contraloría', 'CTI' => 'CTI', 'Defensoría del pueblo' => 'Defensoría del pueblo', 'ICBF' => 'ICBF', 'Instituto departamental de salud' => 'Instituto departamental de salud', 'IPS' => 'IPS', 'Oficina de genero' => 'Oficina de genero', 'Personería municipal' => 'Personería mmunicipal', 'Policía de infancia y adolescencia' => 'Policía de infancia y adolescencia', 'Policía metropolitana' => 'Policía metropolitana', 'Secretaria municipal de salud' => 'Secretaria municipal de salud', 'Servicios públicos domiciliarios' => 'Servicios públicos domiciliarios', 'Unidad de reacción inmediata - URI' => 'Unidad de reacción inmediata - URI', 'URI' => 'URI');
		
					echo $this->Form->input('canalizacionuno', array('label'=> 'Canalización dos', 'options' => $option5));

					echo $this->Form->input('canalizaciondos', array('label'=> 'Canalización tres'));
		

		echo ('-> COMPROMISO');

		echo $this->Form->input('compromiso');

		echo ('-> ORIENTACIÓN BRINDADA');

		echo $this->Form->input('orientacion');
		echo $this->Form->input('responsable');

		echo $this->Form->input('fecharegistro');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>

		

		<li><?php echo $this->Html->link(__('Regresar'), array('action' => 'nuebus')); ?></li>
		
	</ul>
</div>
