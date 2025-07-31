<?php $this->layout = 'formulario'?>
<div class="responsables form">
<?php echo $this->Form->create('Responsable'); ?>
	<fieldset>
		<legend><?php echo __('Agregar Responsable'); ?></legend>
	<?php

	$option1 = array ('Elegir' => ' ','C.C' => 'C.C', 'R.C' => 'R.C', 'C.E' => 'C.E', 'T.I' => 'T.I', 'PAS' => 'PAS');
					echo $this->Form->input('tipodoc', array('label'=> 'Tipo de documento', 'type' => 'select', 'options' => $option1));
		
		echo $this->Form->input('numero');
		echo $this->Form->input('nombres');

		$option = array(
					'label' => 'Fecha nacimiento',
					'dateFormat'	=>	'DMY',
					'minYear'		=>	date('Y') - 100,
					'maxYear'		=>	date('Y') ,
					
					'empty' => array (
					
							'day'	=>	'Día',
							'month'	=>	'Mes',
							'year'	=>	'Año'
						
					  )
					);	
					
					echo $this->Form->input('fecha_nac', $option);
		
		echo $this->Form->input('celular');
		echo $this->Form->input('telefono');
		echo $this->Form->input('correo');
		echo $this->Form->input('profesion');
		echo $this->Form->input('cargo');
		echo $this->Form->input('familiar');
		echo $this->Form->input('parentesco');
		echo $this->Form->input('tel_familiar', array('label' => 'Telefono familiar'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>
		
		<li> <a  href="../users/bienvenida"	 >Inicio</a></li>

		<li><?php echo $this->Html->link(__('Lista Responsables'), array('action' => 'nuebus')); ?></li>
		<li><?php echo $this->Html->link(__('Lista Actividades'), array('controller' => 'actividades', 'action' => 'nuebus')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Actividad'), array('controller' => 'actividades', 'action' => 'add')); ?> </li>
		<li> <a href="http://www.procuraduria.gov.co/portal/antecedentes.html" target="_blank">Procuraduria</a></li>
	</ul>
</div>
