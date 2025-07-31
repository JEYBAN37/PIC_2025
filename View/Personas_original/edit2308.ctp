<div class="personas form">
<?php echo $this->Form->create('Persona'); ?>
	<fieldset>
		<legend><?php echo __('Edit Persona'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('grupo');
		echo $this->Form->input('tipoidoc');
		echo $this->Form->input('identificacion');
		echo $this->Form->input('apellido1');
		echo $this->Form->input('apellido2');
		echo $this->Form->input('nombre1');
		echo $this->Form->input('nombre2');
		echo $this->Form->input('fechanac');
		echo $this->Form->input('edad');
		echo $this->Form->input('barrio');
		echo $this->Form->input('comuna');
		echo $this->Form->input('celular');
		echo $this->Form->input('telefono');
		echo $this->Form->input('correo');
		echo $this->Form->input('genero_id');
		echo $this->Form->input('preferencia_id');
		echo $this->Form->input('etnia_id');
		echo $this->Form->input('estudio_id');
		echo $this->Form->input('profesion');
		echo $this->Form->input('ocupacion');
		echo $this->Form->input('cargo');
		echo $this->Form->input('tiempoexperiencia');
		echo $this->Form->input('poblacion_id');
		echo $this->Form->input('discapacidad');
		echo $this->Form->input('ubicacion_id');
		echo $this->Form->input('aseguradora_id');
		echo $this->Form->input('regimen');
		echo $this->Form->input('perteneceorganizacion');
		echo $this->Form->input('sociedad_id');
		echo $this->Form->input('sector_id');
		echo $this->Form->input('nombrecontacto');
		echo $this->Form->input('parentesco');
		echo $this->Form->input('teefonolacudiente');
		echo $this->Form->input('actividad_id');
		echo $this->Form->input('fecharegistro');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Persona.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Persona.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Personas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Generos'), array('controller' => 'generos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Genero'), array('controller' => 'generos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Preferencias'), array('controller' => 'preferencias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Preferencia'), array('controller' => 'preferencias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Etnias'), array('controller' => 'etnias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Etnia'), array('controller' => 'etnias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estudios'), array('controller' => 'estudios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estudio'), array('controller' => 'estudios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Poblaciones'), array('controller' => 'poblaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Poblacion'), array('controller' => 'poblaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ubicaciones'), array('controller' => 'ubicaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ubicacion'), array('controller' => 'ubicaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Aseguradoras'), array('controller' => 'aseguradoras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aseguradora'), array('controller' => 'aseguradoras', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sociedades'), array('controller' => 'sociedades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sociedad'), array('controller' => 'sociedades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sectores'), array('controller' => 'sectores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sector'), array('controller' => 'sectores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actividades'), array('controller' => 'actividades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actividad'), array('controller' => 'actividades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Organizaciones'), array('controller' => 'organizaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Organizacion'), array('controller' => 'organizaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personaactividades'), array('controller' => 'personaactividades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Personaactividad'), array('controller' => 'personaactividades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
