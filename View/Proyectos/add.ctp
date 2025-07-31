<?php $this->layout = 'formulario'?>
<div class="proyectos form">
<?php echo $this->Form->create('Proyecto'); ?>
	<fieldset>
		<legend><?php echo __('Agregar Proyecto'); ?></legend>
	<?php
		echo $this->Form->input('entidad_id');
		echo $this->Form->input('nombreproyecto');
		echo $this->Form->input('objetivo');
		echo $this->Form->input('poblacion_id');
		echo $this->Form->input('vigencia');
		echo $this->Form->input('duracion');
		echo $this->Form->input('ubicacion_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Opcion'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Lista Proyectos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Lista Entidades'), array('controller' => 'entidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Entidad'), array('controller' => 'entidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Poblaciones'), array('controller' => 'poblaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Poblacion'), array('controller' => 'poblaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Ubicaciones'), array('controller' => 'ubicaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Ubicacion'), array('controller' => 'ubicaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Organizaciones'), array('controller' => 'organizaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Organizacion'), array('controller' => 'organizaciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
