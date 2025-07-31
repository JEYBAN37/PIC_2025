<div class="integrantes form">
<?php echo $this->Form->create('Integrante'); ?>
	<fieldset>
		<legend><?php echo __('Ingresar Integrante'); ?></legend>
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
		echo $this->Form->input('genero_id');
		echo $this->Form->input('group_id',array('label'=>'Usted hace parte de:'));
		echo $this->Form->input('celular', array('label'=>'Numero de celular'));
		echo $this->Form->input('telefono', array('label'=>'Numero de telefóno'));
		echo $this->Form->input('correo',array('label'=>'Correo (Ej: example@gmail.com)'));
		echo $this->Form->input('profesion');
		echo $this->Form->input('cargo');
		echo ('Registre su experiencia laboral en la estrategia');
		echo $this->Form->input('mes_id');
		echo $this->Form->input('ano_id',array('label'=>'año'));		
		echo $this->Form->input('fecha_reg');
	?>


	</fieldset>
<?php echo $this->Form->end(__('Enviar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		
	    <li><?php echo $this->Html->link(__('Nuevo Responsable'), array('controller' => 'responsables', 'action' => 'add')); ?> </li>	
		
	</ul>
</div>
