<div class="equipos form">
<?php echo $this->Form->create('Equipo'); ?>
	<fieldset>
		<legend><?php echo __('Edit Equipo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('dependencia');
		echo $this->Form->input('eje');
		echo $this->Form->input('dimension');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Equipo.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Equipo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Equipos'), array('action' => 'index')); ?></li>
	</ul>
</div>
