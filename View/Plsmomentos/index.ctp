<div class="plsmomentos index">
	<h2><?php echo __('Plsmomentos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('plsesion_id'); ?></th>
			<th><?php echo $this->Paginator->sort('momento'); ?></th>
			<th><?php echo $this->Paginator->sort('duracion'); ?></th>
			<th><?php echo $this->Paginator->sort('metodologia'); ?></th>
			<th><?php echo $this->Paginator->sort('resultado'); ?></th>
			<th><?php echo $this->Paginator->sort('insumo'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($plsmomentos as $plsmomento): ?>
	<tr>
		<td><?php echo h($plsmomento['Plsmomento']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($plsmomento['Plsesion']['id'], array('controller' => 'plsesiones', 'action' => 'view', $plsmomento['Plsesion']['id'])); ?>
		</td>
		<td><?php echo h($plsmomento['Plsmomento']['momento']); ?>&nbsp;</td>
		<td><?php echo h($plsmomento['Plsmomento']['duracion']); ?>&nbsp;</td>
		<td><?php echo h($plsmomento['Plsmomento']['metodologia']); ?>&nbsp;</td>
		<td><?php echo h($plsmomento['Plsmomento']['resultado']); ?>&nbsp;</td>
		<td><?php echo h($plsmomento['Plsmomento']['insumo']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $plsmomento['Plsmomento']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $plsmomento['Plsmomento']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $plsmomento['Plsmomento']['id']), array(), __('Are you sure you want to delete # %s?', $plsmomento['Plsmomento']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Plsmomento'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Plsesiones'), array('controller' => 'plsesiones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Plsesion'), array('controller' => 'plsesiones', 'action' => 'add')); ?> </li>
	</ul>
</div>
