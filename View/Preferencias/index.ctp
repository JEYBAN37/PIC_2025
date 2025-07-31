<?php $this->layout = 'formulario'?>
<div class="preferencias index">
	<h2><?php echo __('Preferencias'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('preferencia'); ?></th>
			<th><?php echo $this->Paginator->sort('caracteristicas'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($preferencias as $preferencia): ?>
	<tr>
		<td><?php echo h($preferencia['Preferencia']['id']); ?>&nbsp;</td>
		<td><?php echo h($preferencia['Preferencia']['preferencia']); ?>&nbsp;</td>
		<td><?php echo h($preferencia['Preferencia']['caracteristicas']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $preferencia['Preferencia']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $preferencia['Preferencia']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $preferencia['Preferencia']['id']), array(), __('Are you sure you want to delete # %s?', $preferencia['Preferencia']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Nueva Preferencia'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Nueva Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
	</ul>
</div>
