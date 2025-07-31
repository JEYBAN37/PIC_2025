<?php $this->layout = 'formulario'?>
<div class="canalizaciones form">
<?php echo $this->Form->create('Canalizacion'); ?>
	<fieldset>
		<legend><?php echo __('Agregar Canalización'); ?></legend>
	<?php
		$option = array(
					'label' => 'Fecha de diligenciamiento encuesta ',
					'dateFormat'	=>	'DMY',
					'minYear'		=>	date('Y') - 1,
					'maxYear'		=>	date('Y') + 2,
					
					'empty' => array (
					
							'day'	=>	'Día',
							'month'	=>	'Mes',
							'year'	=>	'Año'
						
					  )
					);	
		
		echo $this->Form->input('fecha', $option);

		echo ('-> I DATOS');

		$option1 = array ('' => 'Elegir','C.C' => 'C.C', 'C.E' => 'C.E', 'T.I' => 'T.I', 'PAS' => 'PAS','R.C' => 'R.C');
		echo $this->Form->input('tipodoc', array('label'=> 'Tipo de documento', 'type' => 'select', 'options' => $option1));
		
		echo $this->Form->input('identificacion');
		echo $this->Form->input('nombres');
		echo $this->Form->input('apellidos');
		
		echo $this->Form->input('ubicacion_id',array('label'=> 'Barrio','type'=>'select'));



			echo $this->Form->input('vereda', array('label' => 'Vereda'));
		
 
		
		
		$option2 = array('' => 'Elegir', 'No aplica' => 'No aplica', 'Comuna 1' => 'Comuna 1', 'Comuna 2' => 'Comuna 2', 'Comuna 3' => 'Comuna 3', 'Comuna 4' => 'Comuna 4', 'Comuna 5' => 'Comuna 5', 'Comuna 6' => 'Comuna 6', 'Comuna 7' => 'Comuna 7', 'Comuna 8' => 'Comuna 8', 'Comuna 9' => 'Comuna 9', 'Comuna 10' => 'Comuna 10', 'Comuna 11' => 'Comuna 11', 'Comuna 12' => 'Comuna 12');
		
					echo $this->Form->input('comunas', array('label'=> 'Comuna', 'options' => $option2)); 

		$option3 = array('' => 'Elegir', 'No aplica' => 'No aplica','Buesaquillo' => 'Buesaquillo', 'Cabrera' => 'Cabrera', 'Catambuco' => 'Catambuco', 'El Encano' => 'El Encano', 'El Socorro' => 'El Socorro', 		'Genoy' => 'Genoy', 'Gualmatan' => 'Gualmatan', 'Jamondino' => 'Jamondino', 'Jongovito' => 'Jongovito', 'La Caldera' => 'La Caldera', 'La Laguna' => 'La Laguna', 'Mapachico' => 'Mapachico', 'Mocondino' => 'Mocondino', 'Morasurco' => 'Morasurco', 'Obonuco' => 'Obonuco', 'San Fernando' => 'San Fernando', 'Santa Barbara' => 'Santa Barbara');
		
					echo $this->Form->input('corregimiento', array('label'=> 'Corregimiento', 'type' => 'select', 'options' => $option3));
		echo $this->Form->input('direccion');
		echo $this->Form->input('telefono');
		echo $this->Form->input('celular');
		
		$option6 = array ('' => 'Elegir','Contributivo' => 'Contributivo', 'Subsidiado' => 'Subsidiado', 'Régimen especial' => 'Régimen especial', 'No asegurado' => 'No asegurado');
		
		echo $this->Form->input('tipoafi', array('label'=> 'Tipo de afiliación', 'type' => 'select', 'options' => $option6));
		
		echo ('A continuación, escriba el nombre de la EPS a la cual está afiliado el usuario, y la IPS a la que asiste usualmente');
		
		
		echo $this->Form->input('aseguradora_id', array('label' => 'Eps'));
		
		echo $this->Form->input('ips');		
		

		echo ('-> II SOLICITUD CIUDADANA');

		echo $this->Form->input('solicitud');

		echo ('-> III CANALIZACIÓN');
		
		echo('');

		$option4 = array('' => 'Elegir', 'No aplica' => 'No aplica', 'Comisaria de Familia' => 'Comisaria de Familia', 'Contraloría' => 'Contraloría', 'CTI' => 'CTI', 'Defensoría del pueblo' => 'Defensoría del pueblo', 'Consultorios jurídicos' => 'Consultorios jurídicos', 'ESE Pasto Salud' => 'ESE Pasto Salud', 'IPS' => 'IPS','Alcaldía municipal de Pasto' => 'Alcaldía municipal de Pasto', 'EPS' => 'EPS', 'Instituto departamental de salud' => 'Instituto departamental de salud', 'ICBF' => 'ICBF', 'Oficina de genero' => 'Oficina de genero', 'Policía metropolitana' => 'Policía metropolitana', 'Personería municipal' => 'Personería municipal', 'Policía de infancia y adolescencia' => 'Policía de infancia y adolescencia', 'Secretaria municipal de salud' => 'Secretaria municipal de salud', 'Servicios públicos domiciliarios' => 'Servicios públicos domiciliarios', 'Unidad de reacción inmediata - URI' => 'Unidad de reacción inmediata - URI');
		
					echo $this->Form->input('canalizacion', array('label'=> 'Canalización', 'options' => $option4));

					
		
					echo $this->Form->input('canalizacionuno', array('label'=> 'Cuál dependencia?'));

					echo $this->Form->input('canalizaciondos', array('label'=> 'Otra, cual ?'));
		

		echo ('Seleccione la RIA, donde se dirige la canalización del caso');
		
		$option7 = array ('' => 'Elegir','Promoción y mantenimiento de la salud' => 'Promoción y mantenimiento de la salud', 'Materno perinatal' => 'Materno perinatal', 'Enfermedades infecciosas' => 'Enfermedades infecciosas', 'Cardio - Cerebro - Vascular' => 'Cardio - Cerebro - Vascular','Cáncer' => 'Cáncer', 'Alteraciones nutricionales' => 'Alteraciones nutricionales', 'Transtornos asociados al consumo de SPA' => 'Transtornos asociados al consumo de SPA', 'Ninguna' => 'Ninguna');
		
		echo $this->Form->input('ria', array('label'=> 'Seleccione RIA', 'type' => 'select', 'options' => $option7));
		
		echo $this->Form->input('riacual', array('label'=> 'Otra, cual ?'));
		

		echo ('-> IV ORIENTACIÓN BRINDADA Y/O ORIENTADA'); 
		
		echo ('Describa de manera clara y concisa cuál o cuáles fueron las indicaciones brindadas a la persona, asegurando una canalización efectiva.');

		echo $this->Form->input('orientacion');
		
		echo ('-> V SEGUIMIENTO');
		
		echo ('Asistió o se contactó con la institución o dependencia a la cual fue remitido?');
		
		$option5 = array('' => 'Elegir', 'SI' => 'SI', 'NO' => 'NO');
		
		echo $this->Form->input('concepto', array('label'=> 'Asistió', 'options' => $option5));
		
		echo ('Si la respuesta es SI, llene los siguientes espacios');
		
		echo $this->Form->input('resentidad',array('label'  => ' Respuesta de la entidad'));
		
		echo('Si la respuesta es NO, señale las razones por las cuales no asistió');
		
		$option8 = array('' => 'Elegir', 'No le pareció importante asistir al servicio' => 'No le pareció importante asistir al servicio', 'No contaba con los recursos (tiempo - dinero) para trasladarse al punto de atención' => 'No contaba con los recursos (tiempo - dinero) para trasladarse al punto de atención');
		
		echo $this->Form->input('razones', array('label'=> 'Razones', 'options' => $option8));
		
		echo $this->Form->input('razoncual', array('label'=> 'Otra, cual ?'));
		
		
		
		
	


		echo $this->Form->input('fecharegistro');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>

		<li> <a  href="../users/bienvenida"	 >Inicio</a></li>

		<li><?php echo $this->Html->link(__('Regresar'), array('action' => 'nuebus')); ?></li>
		
		<li> <a href="http://www.procuraduria.gov.co/portal/antecedentes.html" target="_blank">Procuraduria</a></li>
	</ul>
</div>
