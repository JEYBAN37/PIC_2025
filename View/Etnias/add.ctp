<?php $this->layout = 'formulario'?>
<div class="etnias form">
<?php echo $this->Form->create('Etnia'); ?>
	<fieldset>
		<legend><?php echo __('Agregar Etnia'); ?></legend>
	<?php
		echo $this->Form->input('etnia');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Lista Etnias'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Lista Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
	</ul>
</div>
