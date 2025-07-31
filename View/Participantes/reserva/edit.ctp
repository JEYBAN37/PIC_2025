<div class="participantes form">
<?php echo $this->Form->create('Participante'); ?>
	<fieldset>
		<legend><?php echo __('Editar Participantes'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('fecha');
		echo $this->Form->input('usuario_id');
		echo $this->Form->input('actividad_id');
		
		echo $this->Form->input('estudio_id');
		echo $this->Form->input('preferencia_id');
		echo $this->Form->input('grupo_id');
		echo $this->Form->input('victima_id');
		echo $this->Form->input('actividad_economica'); 
		echo ('Registre su experiencia laboral');		
		echo $this->Form->input('ano_id',array('label'=>'Año'));
		echo $this->Form->input('mes_id');
		echo $this->Form->input('sector',array('label'=>'Area de ubicación'));
		echo $this->Form->input('comuna_id');
		echo $this->Form->input('corregimiento');
		echo $this->Form->input('barrio_vereda',array('label'=>'Barrio/vereda'));
		echo $this->Form->input('estrato',array(
            'options' => array('1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6')));
		
		echo $this->Form->input('regimen',array(
            'options' => array('subsidado' => 'Subsidado', 'contributivo' => 'Contributivo', 'vinculado' => 'Vinculado', 'r_especial' => 'R_Especial', 'no_asegurado' => 'No_asegurado' )));
		echo $this->Form->input('eps');
		echo $this->Form->input('discapacidad',array(
            'options' => array('si' => 'Si', 'no' => 'No', 'sd' => 'SD', 'ni' => 'NI')));
		echo $this->Form->input('tipo_discapacidad');
		echo $this->Form->input('pertenece_org',array('label'=>'Pertenece a organizaciónes',
            'options' => array('si' => 'Si', 'no' => 'No', 'sd' => 'SD', 'ni' => 'NI')));
		echo $this->Form->input('nombre_org',array('label'=>'Nombre de la organización'));
		echo $this->Form->input('registro');
	?>
	</fieldset>

</div>
<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $this->Form->value('Participante.id')), array(), __('Esta seguro de borrar el registro?', $this->Form->value('Participante.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Lista Participantes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Lista Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>		
	</ul>
</div>
