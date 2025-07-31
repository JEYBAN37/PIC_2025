<div class="integrantes form">
<?php echo $this->Form->create('Integrante'); ?>
	<fieldset>
		<legend><?php echo __('Edit Integrante'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('documento_id');
		echo $this->Form->input('numero');
		echo $this->Form->input('nombres');
		echo $this->Form->input('apellidos');
		echo $this->Form->input('day_id');
		echo $this->Form->input('month_id');
		echo $this->Form->input('fecha_id');
		echo $this->Form->input('genero_id');
		echo $this->Form->input('group_id');
		echo $this->Form->input('celular');
		echo $this->Form->input('telefono');
		echo $this->Form->input('correo');
		echo $this->Form->input('profesion');
		echo $this->Form->input('cargo');
		echo $this->Form->input('ano_id');
		echo $this->Form->input('mes_id');
		echo $this->Form->input('fecha_reg');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Integrante.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Integrante.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Integrantes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Documentos'), array('controller' => 'documentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Documento'), array('controller' => 'documentos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Days'), array('controller' => 'days', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Day'), array('controller' => 'days', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Months'), array('controller' => 'months', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Month'), array('controller' => 'months', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fechas'), array('controller' => 'fechas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fecha'), array('controller' => 'fechas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Generos'), array('controller' => 'generos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Genero'), array('controller' => 'generos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Anos'), array('controller' => 'anos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ano'), array('controller' => 'anos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Meses'), array('controller' => 'meses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mes'), array('controller' => 'meses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actividades'), array('controller' => 'actividades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actividad'), array('controller' => 'actividades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Responsables'), array('controller' => 'responsables', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Responsable'), array('controller' => 'responsables', 'action' => 'add')); ?> </li>
	</ul>
</div>
