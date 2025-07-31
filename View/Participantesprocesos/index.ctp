<div class="participantesprocesos index">
	<h2><?php echo __('Participantesprocesos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('persona_id'); ?></th>
			<th><?php echo $this->Paginator->sort('procesoregistro_id'); ?></th>
			<th><?php echo $this->Paginator->sort('fecharegistro'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($participantesprocesos as $participantesproceso): ?>
	<tr>
		<td><?php echo h($participantesproceso['Participantesproceso']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($participantesproceso['Persona']['id'], array('controller' => 'personas', 'action' => 'view', $participantesproceso['Persona']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($participantesproceso['Procesoregistro']['id'], array('controller' => 'procesoregistros', 'action' => 'view', $participantesproceso['Procesoregistro']['id'])); ?>
		</td>
		<td><?php echo h($participantesproceso['Participantesproceso']['fecharegistro']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $participantesproceso['Participantesproceso']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $participantesproceso['Participantesproceso']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $participantesproceso['Participantesproceso']['id']), array(), __('Are you sure you want to delete # %s?', $participantesproceso['Participantesproceso']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Participantesproceso'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Procesoregistros'), array('controller' => 'procesoregistros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Procesoregistro'), array('controller' => 'procesoregistros', 'action' => 'add')); ?> </li>
	</ul>
</div>
