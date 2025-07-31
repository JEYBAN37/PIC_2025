<?php $this->layout = 'tablas'?>
<div class="proyectos index">
	<h2><?php echo __('Proyectos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('entidad_id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombreproyecto'); ?></th>
			<th><?php echo $this->Paginator->sort('objetivo'); ?></th>
			<th><?php echo $this->Paginator->sort('poblacion_id'); ?></th>
			<th><?php echo $this->Paginator->sort('vigencia'); ?></th>
			<th><?php echo $this->Paginator->sort('duracion'); ?></th>
			<th><?php echo $this->Paginator->sort('ubicacion_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($proyectos as $proyecto): ?>
	<tr>
		<td><?php echo h($proyecto['Proyecto']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($proyecto['Entidad']['id'], array('controller' => 'entidades', 'action' => 'view', $proyecto['Entidad']['id'])); ?>
		</td>
		<td><?php echo h($proyecto['Proyecto']['nombreproyecto']); ?>&nbsp;</td>
		<td><?php echo h($proyecto['Proyecto']['objetivo']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($proyecto['Poblacion']['poblacion'], array('controller' => 'poblaciones', 'action' => 'view', $proyecto['Poblacion']['id'])); ?>
		</td>
		<td><?php echo h($proyecto['Proyecto']['vigencia']); ?>&nbsp;</td>
		<td><?php echo h($proyecto['Proyecto']['duracion']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($proyecto['Ubicacion']['barrio'], array('controller' => 'ubicaciones', 'action' => 'view', $proyecto['Ubicacion']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $proyecto['Proyecto']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $proyecto['Proyecto']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $proyecto['Proyecto']['id']), array(), __('Are you sure you want to delete # %s?', $proyecto['Proyecto']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Nuevo Proyecto'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Lista Entidades'), array('controller' => 'entidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Entidad'), array('controller' => 'entidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Poblaciones'), array('controller' => 'poblaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Poblacion'), array('controller' => 'poblaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Ubicaciones'), array('controller' => 'ubicaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Ubicacion'), array('controller' => 'ubicaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Organizaciones'), array('controller' => 'organizaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Organizacion'), array('controller' => 'organizaciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
