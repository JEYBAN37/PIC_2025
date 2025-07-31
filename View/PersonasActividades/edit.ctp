<?php $this->layout = 'formulario'?>
<div class="personasActividades form">
<?php echo $this->Form->create('PersonasActividad'); ?>
	<fieldset>
		<legend><?php echo __('Editar Personas Actividad'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('persona_id');
		echo $this->Form->input('actividad_id');
		echo $this->Form->input('registro');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('PersonasActividad.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('PersonasActividad.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Lista Personas Actividades'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Lista Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Actividades'), array('controller' => 'actividades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Actividad'), array('controller' => 'actividades', 'action' => 'add')); ?> </li>
	</ul>
</div>
