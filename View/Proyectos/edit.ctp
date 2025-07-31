<div class="proyectos form">
<?php echo $this->Form->create('Proyecto'); ?>
	<fieldset>
		<legend><?php echo __('Edit Proyecto'); ?></legend>
	<?php
		echo $this->Form->input('id');
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
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Proyecto.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Proyecto.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Proyectos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Entidades'), array('controller' => 'entidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entidad'), array('controller' => 'entidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Poblaciones'), array('controller' => 'poblaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Poblacion'), array('controller' => 'poblaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ubicaciones'), array('controller' => 'ubicaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ubicacion'), array('controller' => 'ubicaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Organizaciones'), array('controller' => 'organizaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Organizacion'), array('controller' => 'organizaciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
