<div class="entidades form">
<?php echo $this->Form->create('Entidad'); ?>
	<fieldset>
		<legend><?php echo __('Edit Entidad'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('entidad_id');
		echo $this->Form->input('proyecto_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Entidad.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Entidad.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Entidades'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Entidades'), array('controller' => 'entidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entidad'), array('controller' => 'entidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proyectos'), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Smseventos'), array('controller' => 'smseventos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Smsevento'), array('controller' => 'smseventos', 'action' => 'add')); ?> </li>
	</ul>
</div>
