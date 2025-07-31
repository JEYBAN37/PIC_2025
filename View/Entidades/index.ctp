<?php $this->layout = 'tablas'?>
<div class="entidades index">
	<h2><?php echo __('Entidades'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('entidad_id'); ?></th>
			<th><?php echo $this->Paginator->sort('proyecto_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($entidades as $entidad): ?>
	<tr>
		<td><?php echo h($entidad['Entidad']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($entidad['Entidad']['id'], array('controller' => 'entidades', 'action' => 'view', $entidad['Entidad']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($entidad['Proyecto']['id'], array('controller' => 'proyectos', 'action' => 'view', $entidad['Proyecto']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $entidad['Entidad']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $entidad['Entidad']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $entidad['Entidad']['id']), array(), __('Are you sure you want to delete # %s?', $entidad['Entidad']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Nueva Entidad'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Lista Entidades'), array('controller' => 'entidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Entidad'), array('controller' => 'entidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Proyectos'), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Smseventos'), array('controller' => 'smseventos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Smsevento'), array('controller' => 'smseventos', 'action' => 'add')); ?> </li>
	</ul>
</div>
