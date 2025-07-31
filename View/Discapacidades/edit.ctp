<div class="discapacidades form">
<?php echo $this->Form->create('Discapacidad'); ?>
	<fieldset>
		<legend><?php echo __('Edit Discapacidad'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('discapacidad');
		echo $this->Form->input('caracteristica');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Discapacidad.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Discapacidad.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Discapacidades'), array('action' => 'index')); ?></li>
	</ul>
</div>
