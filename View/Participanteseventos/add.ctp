<div class="participanteseventos form">
<?php echo $this->Form->create('Participantesevento'); ?>
	<fieldset>
		<legend><?php echo __('Add Participantesevento'); ?></legend>
	<?php
		echo $this->Form->input('persona_id');
		echo $this->Form->input('infoevento_id');
		echo $this->Form->input('registro');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Participanteseventos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Infoeventos'), array('controller' => 'infoeventos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Infoevento'), array('controller' => 'infoeventos', 'action' => 'add')); ?> </li>
	</ul>
</div>
