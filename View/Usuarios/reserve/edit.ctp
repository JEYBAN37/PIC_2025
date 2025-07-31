<div class="usuarios form">
<?php echo $this->Form->create('Usuario'); ?>
	<fieldset>
		<legend><?php echo __('Editar Usuario'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('documento_id');
		echo $this->Form->input('numero', array('label'=>'Numero de identificación'));
		echo $this->Form->input('nombres');
		echo $this->Form->input('apellidos');
		echo ('Fecha de nacimiento');
		echo $this->Form->input('day_id', array('label'=>'Dia'));
		echo $this->Form->input('month_id', array('label'=>'Mes'));
		echo $this->Form->input('fecha_id', array('label'=>'Año'));
		echo $this->Form->input('edad_id', array('label'=>'Su rango de edad esta entre'));
		echo $this->Form->input('genero_id');
		echo $this->Form->input('group_id', array('label'=>'Grupo'));
		echo $this->Form->input('celular', array('label'=>'Numero de celular'));
		echo $this->Form->input('telefono', array('label'=>'Numero de telefóno'));
		echo $this->Form->input('correo');
		echo $this->Form->input('profesion', array('label'=>'profesión'));
		echo $this->Form->input('cargo');
		echo ('Registre su experiencia laboral');
		echo $this->Form->input('mes_id', array('label'=>'años'));
		echo $this->Form->input('ano_id' ,array('label'=>'meses'));		
		echo $this->Form->input('fecha_reg', array('label'=>'registro'));
	?>
	</fieldset>

</div>
<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>

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
