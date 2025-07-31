<?php $this->layout = 'formulario'?>
<div class="estudios form">
<?php echo $this->Form->create('Estudio'); ?>
	<fieldset>
		<legend><?php echo __('Agregar Estudio'); ?></legend>
	<?php
		echo $this->Form->input('estudio');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Lista Estudios'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Lista Participantes'), array('controller' => 'participantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Participante'), array('controller' => 'participantes', 'action' => 'add')); ?> </li>
	</ul>
</div>
