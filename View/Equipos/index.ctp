<?php $this->layout = 'formulario'?>
<div class="equipos index">
	<h2><?php echo __('Equipos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('dependencia'); ?></th>
			<th><?php echo $this->Paginator->sort('eje'); ?></th>
			<th><?php echo $this->Paginator->sort('dimension'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($equipos as $equipo): ?>
	<tr>
		<td><?php echo h($equipo['Equipo']['id']); ?>&nbsp;</td>
		<td><?php echo h($equipo['Equipo']['dependencia']); ?>&nbsp;</td>
		<td><?php echo h($equipo['Equipo']['eje']); ?>&nbsp;</td>
		<td><?php echo h($equipo['Equipo']['dimension']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $equipo['Equipo']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $equipo['Equipo']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $equipo['Equipo']['id']), array(), __('Are you sure you want to delete # %s?', $equipo['Equipo']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Nuevo Equipo'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Nueva Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
	</ul>
</div>
