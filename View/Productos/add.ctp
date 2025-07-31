<?php $this->layout = 'formulario' ?>
<div class="productos form">
<?php echo $this->Form->create('Producto'); ?>
	<fieldset>
		<legend><?php echo __('Add Producto'); ?></legend>
	<?php
		echo $this->Form->input('numproductos');
		//echo $this->Form->input('lineas');
		echo $this->Form->input('dimensiones');
		echo $this->Form->input('nombredim');
		echo $this->Form->input('costodim');
		echo $this->Form->input('linormativas');
		echo $this->Form->input('resultado');
		echo $this->Form->input('activity');
		echo $this->Form->input('vidacursos');
		echo $this->Form->input('entorno');
		echo $this->Form->input('tecnologias');
		echo $this->Form->input('porcproducto');
		echo $this->Form->input('tarea');
		echo $this->Form->input('porctareas');
		echo $this->Form->input('clasobjetivos');
		echo $this->Form->input('evidencia');
		//echo $this->Form->input('actividad_id');
		/*echo $this->Form->input('acta_id');
		echo $this->Form->input('responsable_id');
		echo $this->Form->input('fecha_registro');
		echo $this->Form->input('porcentajeavance');
		echo $this->Form->input('observacionpic');
		echo $this->Form->input('observacionsms');
		echo $this->Form->input('estado');
		echo $this->Form->input('referente_id');
		echo $this->Form->input('enlace');
		echo $this->Form->input('enlacedos');
		echo $this->Form->input('fecha_actualizado');
		echo $this->Form->input('Actividad');*/
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Productos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Actividades'), array('controller' => 'actividades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actividad'), array('controller' => 'actividades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actas'), array('controller' => 'actas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Acta'), array('controller' => 'actas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Responsables'), array('controller' => 'responsables', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Responsable'), array('controller' => 'responsables', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Acta View Tests'), array('controller' => 'acta_view_tests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Acta View Test'), array('controller' => 'acta_view_tests', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actividades View Tests'), array('controller' => 'actividades_view_tests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actividades View Test'), array('controller' => 'actividades_view_tests', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Plsesiones'), array('controller' => 'plsesiones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Plsesion'), array('controller' => 'plsesiones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Productosactividades'), array('controller' => 'productosactividades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Productosactividad'), array('controller' => 'productosactividades', 'action' => 'add')); ?> </li>
	</ul>
</div>
