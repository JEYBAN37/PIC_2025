<div class="victimas form">
<?php echo $this->Form->create('Victima'); ?>
	<fieldset>
		<legend><?php echo __('Edit Victima'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('victima');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Victima.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Victima.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Victimas'), array('action' => 'index')); ?></li>
	</ul>
</div>
