<?php $this->layout = 'formulario'?>
<div class="discapacidades form">
<?php echo $this->Form->create('Discapacidad'); ?>
	<fieldset>
		<legend><?php echo __('Agregar Discapacidad'); ?></legend>
	<?php
		echo $this->Form->input('discapacidad');
		echo $this->Form->input('caracteristica');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Lista Discapacidades'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Nueva Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
	</ul>
</div>
