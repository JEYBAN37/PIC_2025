<div class="sociedades form">
<?php echo $this->Form->create('Sociedad'); ?>
	<fieldset>
		<legend><?php echo __('Edit Sociedad'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('tiposociedad');
		echo $this->Form->input('caracteristica');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Sociedad.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Sociedad.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Sociedades'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Organizaciones'), array('controller' => 'organizaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Organizacion'), array('controller' => 'organizaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
	</ul>
</div>
