<div class="etnias form">
<?php echo $this->Form->create('Etnia'); ?>
	<fieldset>
		<legend><?php echo __('Edit Etnia'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('etnia');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Etnia.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Etnia.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Etnias'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
	</ul>
</div>
