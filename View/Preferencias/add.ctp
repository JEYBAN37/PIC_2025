<?php $this->layout = 'formulario'?>
<div class="preferencias form">
<?php echo $this->Form->create('Preferencia'); ?>
	<fieldset>
		<legend><?php echo __('Agregar Preferencia'); ?></legend>
	<?php
		echo $this->Form->input('preferencia');
		echo $this->Form->input('caracteristicas');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Lista Preferencias'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Nueva Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
	</ul>
</div>
