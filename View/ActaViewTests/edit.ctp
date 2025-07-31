<div class="actaViewTests form">
<?php echo $this->Form->create('ActaViewTest'); ?>
	<fieldset>
		<legend><?php echo __('Edit Acta View Test'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('fecha');
		echo $this->Form->input('grupo');
		echo $this->Form->input('tema');
		echo $this->Form->input('objactividad');
		echo $this->Form->input('alcancereunion');
		echo $this->Form->input('ubicacion_id');
		echo $this->Form->input('comuna');
		echo $this->Form->input('barrio');
		echo $this->Form->input('zona');
		echo $this->Form->input('producto_id');
		echo $this->Form->input('lineas');
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
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ActaViewTest.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('ActaViewTest.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Acta View Tests'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Ubicaciones'), array('controller' => 'ubicaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ubicacion'), array('controller' => 'ubicaciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
