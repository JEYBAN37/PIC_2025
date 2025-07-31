<div class="profesiones form">
<?php echo $this->Form->create('Profesion'); ?>
	<fieldset>
		<legend><?php echo __('Edit Profesion'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('profesion');
		echo $this->Form->input('perfilprofesion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Profesion.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Profesion.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Profesiones'), array('action' => 'index')); ?></li>
	</ul>
</div>
