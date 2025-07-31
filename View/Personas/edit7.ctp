<?php $this->layout = 'formulario'?>
<div class="personas form">
<?php echo $this->Form->create('Persona'); ?>
	<fieldset>
		<legend><?php echo __('Editar Participante Actividad'); ?></legend>
	<?php
		echo $this->Form->input('id');
		$option11 = array(
					'label' => 'Fecha',
					'dateFormat'	=>	'DMY',
					'minYear'		=>	date('Y') - 1,
					'maxYear'		=>	date('Y') + 2,
					
					'empty' => array (
					
							'day'	=>	'Día',
							'month'	=>	'Mes',
							'year'	=>	'Año'
						
					  )
					);	
		
		echo $this->Form->input('fecha', $option11);
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
 	
		
		echo $this->Form->input('edad');

		echo $this->Form->input('genero_id');

		echo('Si marco la opción otro, diligencie la casilla que continua, de lo contrario escriba "No aplica"');
		echo $this->Form->input('otroGenero', array('label' => 'Otro cual ?'));

		echo $this->Form->input('celular');
		echo $this->Form->input('telefono');
		echo $this->Form->input('correo');


		
		 echo $this->Form->input('ocupacion', array('label' => 'Ocupación actual'));

		 
		echo ('Asocie este usuario con una actividad ');			
		
		echo $this->Form->input('actividad_id', array('label' => 'Actividades registradas'));
		
		
		
		
		
		
		
		
		
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