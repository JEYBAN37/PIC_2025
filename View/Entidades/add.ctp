<?php $this->layout = 'formulario'?>
<div class="entidades form">
<?php echo $this->Form->create('Entidad'); ?>
	<fieldset>
		<legend><?php echo __('Agregar Entidad'); ?></legend>
	<?php
		echo $this->Form->input('entidad_id');
		echo $this->Form->input('proyecto_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Lista Entidades'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Lista Entidades'), array('controller' => 'entidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Entidad'), array('controller' => 'entidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Proyectos'), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Smseventos'), array('controller' => 'smseventos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nue Smsevento'), array('controller' => 'smseventos', 'action' => 'add')); ?> </li>
	</ul>
</div>
