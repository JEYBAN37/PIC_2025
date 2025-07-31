<div class="usuarios form">
<?php echo $this->Form->create('Usuario'); ?>
	<fieldset>
		<legend><?php echo __('Asistente a eventos'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('group_id', array('label'=>'Grupo'));
		echo $this->Form->input('actividad_id');
		echo $this->Form->input('nombres');
		echo $this->Form->input('apellidos');		
		echo $this->Form->input('numero', array('label'=>'Numero de identificación'));		
		echo $this->Form->input('edad_id', array('label'=>'Su rango de edad esta entre'));
		echo $this->Form->input('celular', array('label'=>'Numero de celular'));
		echo $this->Form->input('barrio', array('label'=>'Barrio/vereda'));
		echo $this->Form->input('comuna_id', array('label'=>'comuna'));
		echo $this->Form->input('fecha_reg', array('label'=>'registro'));
	?>
	</fieldset>

</div>
<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Lista Asistentes'), array('action' => 'index_1')); ?></li>
		<li><?php echo $this->Html->link(__('Lista Usuarios'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Lista Comunitarios'), array('controller' => 'comunitarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Comunitario'), array('controller' => 'comunitarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Participantes'), array('controller' => 'participantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Participante'), array('controller' => 'participantes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Publicos'), array('controller' => 'publicos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Publico'), array('controller' => 'publicos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Sociales'), array('controller' => 'sociales', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Social'), array('controller' => 'sociales', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Registros'), array('controller' => 'registros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Registro'), array('controller' => 'registros', 'action' => 'add')); ?> </li>
		
	</ul>
</div>
