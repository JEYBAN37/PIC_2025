<?php $this->layout = 'formulario'?>
<div class="poblaciones form">
<?php echo $this->Form->create('Poblacion'); ?>
	<fieldset>
		<legend><?php echo __('Editar Poblacion'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('poblacion');
		echo $this->Form->input('caracteristica');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('Poblacion.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Poblacion.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Lista Poblaciones'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Lista Actividades'), array('controller' => 'actividades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Actividad'), array('controller' => 'actividades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Organizaciones'), array('controller' => 'organizaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Organizacion'), array('controller' => 'organizaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Proyectos'), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
	</ul>
</div>
