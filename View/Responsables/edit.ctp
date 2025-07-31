<?php $this->layout = 'formulario'?>
<div class="responsables form">
<?php echo $this->Form->create('Responsable'); ?>
	<fieldset>
		<legend><?php echo __('Editar Responsable'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('tipodoc');
		echo $this->Form->input('numero');
		echo $this->Form->input('nombres');
		echo $this->Form->input('fecha_nac');
		echo $this->Form->input('celular');
		echo $this->Form->input('telefono');
		echo $this->Form->input('correo');
		echo $this->Form->input('profesion');
		echo $this->Form->input('cargo');
		echo $this->Form->input('familiar');
		echo $this->Form->input('parentesco');
		echo $this->Form->input('tel_familiar');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>

		
		<li><?php echo $this->Html->link(__('Regresar'), array('action' => 'nuebus')); ?></li>

		<li><?php echo $this->Html->link(__('Lista Actividades'), array('controller' => 'actividades', 'action' => 'nuebus')); ?> </li>

		<li><?php echo $this->Html->link(__('Nueva Actividad'), array('controller' => 'actividades', 'action' => 'add')); ?> </li>
	</ul>
</div>
