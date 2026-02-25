<div class="seguimientos form">
<?php echo $this->Form->create('Seguimiento'); ?>
	<fieldset>
		<legend><?php echo __('Edit Seguimiento'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('producto_id');
		echo $this->Form->input('fecha');
		echo $this->Form->input('valorprogramado');
		echo $this->Form->input('valorejecutado');
		echo $this->Form->input('observacionoperador');
		echo $this->Form->input('observacionreferente');
		echo $this->Form->input('estado');
		echo $this->Form->input('limitantes');
		echo $this->Form->input('acompanamiento');
		echo $this->Form->input('descripcionacompanamiento');
		echo $this->Form->input('enlace1');
		echo $this->Form->input('enlace2');
		echo $this->Form->input('referente_id');
		echo $this->Form->input('responsable_id');
		echo $this->Form->input('productoanexo');
		echo $this->Form->input('dirproductoanexo');
		echo $this->Form->input('update_date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Seguimiento.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Seguimiento.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Seguimientos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Referentes'), array('controller' => 'referentes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Referente'), array('controller' => 'referentes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Responsables'), array('controller' => 'responsables', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Responsable'), array('controller' => 'responsables', 'action' => 'add')); ?> </li>
	</ul>
</div>
