<div class="aseguradoras form">
<?php echo $this->Form->create('Aseguradora'); ?>
	<fieldset>
		<legend><?php echo __('Edit Aseguradora'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('aseguradora');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Aseguradora.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Aseguradora.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Aseguradoras'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Smseventos'), array('controller' => 'smseventos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Smsevento'), array('controller' => 'smseventos', 'action' => 'add')); ?> </li>
	</ul>
</div>
