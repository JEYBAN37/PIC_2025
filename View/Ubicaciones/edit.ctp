<div class="ubicaciones form">
<?php echo $this->Form->create('Ubicacion'); ?>
	<fieldset>
		<legend><?php echo __('Edit Ubicacion'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('zona');
		echo $this->Form->input('tipo1');
		echo $this->Form->input('comuna');
		echo $this->Form->input('tipo2');
		echo $this->Form->input('barrio');
		echo $this->Form->input('estrato');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Ubicacion.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Ubicacion.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Ubicaciones'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Actividades'), array('controller' => 'actividades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actividad'), array('controller' => 'actividades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proyectos'), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
	</ul>
</div>
