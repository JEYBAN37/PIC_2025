<?php $this->layout = 'tablas'?>
<div class="ubicaciones index">
	<h2><?php echo __('Ubicaciones'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('zona'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo1'); ?></th>
			<th><?php echo $this->Paginator->sort('comuna'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo2'); ?></th>
			<th><?php echo $this->Paginator->sort('barrio'); ?></th>
			<th><?php echo $this->Paginator->sort('estrato'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($ubicaciones as $ubicacion): ?>
	<tr>
		<td><?php echo h($ubicacion['Ubicacion']['id']); ?>&nbsp;</td>
		<td><?php echo h($ubicacion['Ubicacion']['zona']); ?>&nbsp;</td>
		<td><?php echo h($ubicacion['Ubicacion']['tipo1']); ?>&nbsp;</td>
		<td><?php echo h($ubicacion['Ubicacion']['comuna']); ?>&nbsp;</td>
		<td><?php echo h($ubicacion['Ubicacion']['tipo2']); ?>&nbsp;</td>
		<td><?php echo h($ubicacion['Ubicacion']['barrio']); ?>&nbsp;</td>
		<td><?php echo h($ubicacion['Ubicacion']['estrato']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $ubicacion['Ubicacion']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $ubicacion['Ubicacion']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $ubicacion['Ubicacion']['id']), array(), __('Are you sure you want to delete # %s?', $ubicacion['Ubicacion']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Nueva Ubicacion'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Lista Actividades'), array('controller' => 'actividades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Actividad'), array('controller' => 'actividades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Proyectos'), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
	</ul>
</div>
