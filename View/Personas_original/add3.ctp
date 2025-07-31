<?php $this->layout = 'formulario'?>
<div class="personas form">
<?php echo $this->Form->create('Persona'); ?>
	<fieldset>
		<legend><?php echo __('Nuevo Registro Integrante SMS'); ?></legend>
	<?php
		$option = array ('' => 'Elegir','C.C' => 'C.C', 'R.C' => 'R.C', 'C.E' => 'C.E', 'T.I' => 'T.I', 'PAS' => 'PAS');
					echo $this->Form->input('tipoidoc', array('label'=> 'Tipo de documento', 'type' => 'select', 'options' => $option));
		
		
		echo $this->Form->input('identificacion', array('label' => 'Nùmero de documento'));
		echo $this->Form->input('nombres');
		echo $this->Form->input('apellidos');
		
		
		
	$option1 = array(
					'label' => 'Fecha de Nacimiento',
					'dateFormat'	=>	'DMY',
					'minYear'		=>	date('Y') - 100,
					'maxYear'		=>	date('Y') ,
					
					'empty' => array (
					
							'day'	=>	'Día',
							'month'	=>	'Mes',
							'year'	=>	'Año'
						
					  )
					);	
		
		echo $this->Form->input('fechanac', $option1);
 	
		  
		echo $this->Form->input('genero_id');
		
			
		echo $this->Form->input('celular');
		echo $this->Form->input('telefono');
		echo $this->Form->input('correo');
		echo $this->Form->input('profesion');
		echo $this->Form->input('cargo');		
		echo $this->Form->input('equipo');
		
		echo $this->Form->input('nombrecontacto', array('label' => 'Nombre acudiente'));
		echo $this->Form->input('parentesco');
		echo $this->Form->input('teefonolacudiente', array('label' => 'Teléfono acudiente'));
		echo $this->Form->input('perteneceorganizacion', array('label' => 'Pertenece a alguna organización'));
		
		echo $this->Form->input('tiempoexperiencia', array('label' => 'Tiempo de experiencia'));
		
		echo $this->Form->input('fecharegistro' , array('label' => 'Fecha de registro'));
	
		
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>
    
    
		<li><?php echo $this->Html->link(__('Regresar'), array('action' => 'add')); ?></li>

		<li><?php echo $this->Html->link(__('Lista Personas'), array('action' => 'nuebus')); ?></li>
		
		

		<li><?php echo $this->Html->link(__('Lista Actividades'), array('controller' => 'actividades', 'action' => 'nuebus')); ?> </li>
		
		<li> <a href="http://www.procuraduria.gov.co/portal/antecedentes.html" target="_blank">Procuraduria</a></li>

		
	</ul>
</div>
