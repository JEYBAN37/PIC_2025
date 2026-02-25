<div class="seguimientos index">
	<h2><?php echo __('Seguimientos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('producto_id'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha'); ?></th>
			<th><?php echo $this->Paginator->sort('valorprogramado'); ?></th>
			<th><?php echo $this->Paginator->sort('valorejecutado'); ?></th>
			<th><?php echo $this->Paginator->sort('observacionoperador'); ?></th>
			<th><?php echo $this->Paginator->sort('observacionreferente'); ?></th>
			<th><?php echo $this->Paginator->sort('estado'); ?></th>
			<th><?php echo $this->Paginator->sort('limitantes'); ?></th>
			<th><?php echo $this->Paginator->sort('acompanamiento'); ?></th>
			<th><?php echo $this->Paginator->sort('descripcionacompanamiento'); ?></th>
			<th><?php echo $this->Paginator->sort('enlace1'); ?></th>
			<th><?php echo $this->Paginator->sort('enlace2'); ?></th>
			<th><?php echo $this->Paginator->sort('referente_id'); ?></th>
			<th><?php echo $this->Paginator->sort('responsable_id'); ?></th>
			<th><?php echo $this->Paginator->sort('productoanexo'); ?></th>
			<th><?php echo $this->Paginator->sort('dirproductoanexo'); ?></th>
			<th><?php echo $this->Paginator->sort('update_date'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($seguimientos as $seguimiento): ?>
	<tr>
		<td><?php echo h($seguimiento['Seguimiento']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($seguimiento['Producto']['nombredim'], array('controller' => 'productos', 'action' => 'view', $seguimiento['Producto']['id'])); ?>
		</td>
		<td><?php echo h($seguimiento['Seguimiento']['fecha']); ?>&nbsp;</td>
		<td><?php echo h($seguimiento['Seguimiento']['valorprogramado']); ?>&nbsp;</td>
		<td><?php echo h($seguimiento['Seguimiento']['valorejecutado']); ?>&nbsp;</td>
		<td><?php echo h($seguimiento['Seguimiento']['observacionoperador']); ?>&nbsp;</td>
		<td><?php echo h($seguimiento['Seguimiento']['observacionreferente']); ?>&nbsp;</td>
		<td><?php echo h($seguimiento['Seguimiento']['estado']); ?>&nbsp;</td>
		<td><?php echo h($seguimiento['Seguimiento']['limitantes']); ?>&nbsp;</td>
		<td><?php echo h($seguimiento['Seguimiento']['acompanamiento']); ?>&nbsp;</td>
		<td><?php echo h($seguimiento['Seguimiento']['descripcionacompanamiento']); ?>&nbsp;</td>
		<td><?php echo h($seguimiento['Seguimiento']['enlace1']); ?>&nbsp;</td>
		<td><?php echo h($seguimiento['Seguimiento']['enlace2']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($seguimiento['Referente']['nombres'], array('controller' => 'referentes', 'action' => 'view', $seguimiento['Referente']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($seguimiento['Responsable']['nombres'], array('controller' => 'responsables', 'action' => 'view', $seguimiento['Responsable']['id'])); ?>
		</td>
		<td><?php echo h($seguimiento['Seguimiento']['productoanexo']); ?>&nbsp;</td>
		<td><?php echo h($seguimiento['Seguimiento']['dirproductoanexo']); ?>&nbsp;</td>
		<td><?php echo h($seguimiento['Seguimiento']['update_date']); ?>&nbsp;</td>
		<td><?php echo h($seguimiento['Seguimiento']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $seguimiento['Seguimiento']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $seguimiento['Seguimiento']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $seguimiento['Seguimiento']['id']), array(), __('Are you sure you want to delete # %s?', $seguimiento['Seguimiento']['id'])); ?>
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
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Seguimiento'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Referentes'), array('controller' => 'referentes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Referente'), array('controller' => 'referentes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Responsables'), array('controller' => 'responsables', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Responsable'), array('controller' => 'responsables', 'action' => 'add')); ?> </li>
	</ul>
</div>
