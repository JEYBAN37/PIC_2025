<?php $this->layout='formulario'?>
<div class="equipos form">
<?php echo $this->Form->create('Equipo'); ?>
	<fieldset>
		<legend><?php echo __('Agregar Equipo'); ?></legend>
	<?php
		echo $this->Form->input('dependencia');
		echo $this->Form->input('eje');
		echo $this->Form->input('dimension');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Lista Equipos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Nueva Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
	</ul>
</div>
