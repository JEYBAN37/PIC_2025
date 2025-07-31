<?php $this->layout='formulario'?>
<div class="ubicaciones form">
<?php echo $this->Form->create('Ubicacion'); ?>
	<fieldset>
		<legend><?php echo __('Agregar Ubicacion'); ?></legend>
	<?php
		echo $this->Form->input('zona');
		echo $this->Form->input('tipo1');
		echo $this->Form->input('comuna');
		echo $this->Form->input('tipo2');
		echo $this->Form->input('barrio');
		echo $this->Form->input('estrato');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Lista Ubicaciones'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Lista Actividades'), array('controller' => 'actividades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Actividad'), array('controller' => 'actividades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Proyectos'), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
	</ul>
</div>
