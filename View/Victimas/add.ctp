<?php $this->layout = 'formulario'?>
<div class="victimas form">
<?php echo $this->Form->create('Victima'); ?>
	<fieldset>
		<legend><?php echo __('Agregar Victima'); ?></legend>
	<?php
		echo $this->Form->input('victima');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Lista Victimas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Nueva Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
	</ul>
</div>
