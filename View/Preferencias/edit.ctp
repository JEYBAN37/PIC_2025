<div class="preferencias form">
<?php echo $this->Form->create('Preferencia'); ?>
	<fieldset>
		<legend><?php echo __('Edit Preferencia'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('preferencia');
		echo $this->Form->input('caracteristicas');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Preferencia.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Preferencia.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Preferencias'), array('action' => 'index')); ?></li>
	</ul>
</div>
