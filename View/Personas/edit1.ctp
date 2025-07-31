<?php $this->layout = 'formulario'?>
<div class="personas form">
<?php echo $this->Form->create('Persona'); ?>
	<fieldset>
		<legend><?php echo __('Editar Integrante Acción Colectiva'); ?></legend>
	<?php
		echo $this->Form->input('id');
		$option = array ('' => 'Elegir','C.C' => 'C.C', 'R.C' => 'R.C', 'C.E' => 'C.E', 'T.I' => 'T.I', 'PAS' => 'PAS');
					echo $this->Form->input('tipoidoc', array('label'=> 'Tipo de documento', 'type' => 'select', 'options' => $option));
		
		
		echo $this->Form->input('identificacion', array('label' => 'Nùmero de documento'));
		echo $this->Form->input('nombres');
		echo $this->Form->input('apellidos');
		
		
		
	$option1 = array(
					'label' => 'Fecha de Nacimiento',
					'dateFormat'	=>	'DMY',
					'minYear'		=>	date('Y') - 100,
					'maxYear'		=>	date('Y') + 100,
					
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
		
	
		echo $this->Form->input('fecharegistro');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('Persona.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Persona.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Lista Personas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Lista Generos'), array('controller' => 'generos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Genero'), array('controller' => 'generos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Preferencias'), array('controller' => 'preferencias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Preferencia'), array('controller' => 'preferencias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Etnias'), array('controller' => 'etnias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Etnia'), array('controller' => 'etnias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Estudios'), array('controller' => 'estudios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Estudio'), array('controller' => 'estudios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Poblaciones'), array('controller' => 'poblaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Poblacion'), array('controller' => 'poblaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Ubicaciones'), array('controller' => 'ubicaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Ubicacion'), array('controller' => 'ubicaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Aseguradoras'), array('controller' => 'aseguradoras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Aseguradora'), array('controller' => 'aseguradoras', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Sociedades'), array('controller' => 'sociedades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Sociedad'), array('controller' => 'sociedades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Sectores'), array('controller' => 'sectores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Sector'), array('controller' => 'sectores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Actividades'), array('controller' => 'actividades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Actividad'), array('controller' => 'actividades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Organizaciones'), array('controller' => 'organizaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Organizacion'), array('controller' => 'organizaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Personaactividades'), array('controller' => 'personaactividades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Persona actividad'), array('controller' => 'personaactividades', 'action' => 'add')); ?> </li>
	</ul>
</div>
