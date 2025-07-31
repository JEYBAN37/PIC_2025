<div class="sistematizacionProcesosViewTests form">
<?php echo $this->Form->create('SistematizacionProcesosViewTest'); ?>
	<fieldset>
		<legend><?php echo __('Add Sistematizacion Procesos View Test'); ?></legend>
	<?php
		echo $this->Form->input('proactividad_id');
		echo $this->Form->input('poblaciones');
		echo $this->Form->input('grupo');
		echo $this->Form->input('producto_id');
		echo $this->Form->input('N_producto');
		echo $this->Form->input('Dimensión');
		echo $this->Form->input('producto');
		echo $this->Form->input('tarea');
		echo $this->Form->input('caracteristicasesion');
		echo $this->Form->input('otrocual');
		echo $this->Form->input('objactividad');
		echo $this->Form->input('contobjetivo');
		echo $this->Form->input('contpremisa');
		echo $this->Form->input('contperspectiva');
		echo $this->Form->input('contribucionenfoque');
		echo $this->Form->input('fecha');
		echo $this->Form->input('tema');
		echo $this->Form->input('ubicacion_id');
		echo $this->Form->input('comuna_actividad');
		echo $this->Form->input('barrio');
		echo $this->Form->input('zona');
		echo $this->Form->input('responsable_id');
		echo $this->Form->input('responsable');
		echo $this->Form->input('plsesion_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Sistematizacion Procesos View Tests'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Proactividades'), array('controller' => 'proactividades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proactividad'), array('controller' => 'proactividades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ubicaciones'), array('controller' => 'ubicaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ubicacion'), array('controller' => 'ubicaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Responsables'), array('controller' => 'responsables', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Responsable'), array('controller' => 'responsables', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Plsesiones'), array('controller' => 'plsesiones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Plsesion'), array('controller' => 'plsesiones', 'action' => 'add')); ?> </li>
	</ul>
</div>
