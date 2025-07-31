<div class="participantesprocesos form">
<?php echo $this->Form->create('Participantesproceso'); ?>
	<fieldset>
		<legend><?php echo __('Edit Participantesproceso'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('persona_id');
		echo $this->Form->input('procesoregistro_id');
		echo $this->Form->input('fecharegistro');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Participantesproceso.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Participantesproceso.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Participantesprocesos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Procesoregistros'), array('controller' => 'procesoregistros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Procesoregistro'), array('controller' => 'procesoregistros', 'action' => 'add')); ?> </li>
	</ul>
</div>
