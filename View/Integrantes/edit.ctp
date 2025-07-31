<?php $this->layout = 'tablas'?>
<?php echo $this->element('menuteam');?>

<?php echo $this->Form->create('Integrante'); ?>
	<fieldset>
		<legend><?php echo __('Edit Integrante'); ?></legend>

		<div class="actions">
	
	<ul>

		
		<li><?php echo $this->Html->link(__('List Integrantes'), array('action' => 'index')); ?></li>
		
		<li><?php echo $this->Html->link(__('List Responsables'), array('controller' => 'responsables', 'action' => 'index')); ?> </li>
		
		
	</ul>
</div>

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
