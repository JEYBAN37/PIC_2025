
	<h2><?php echo __('Registros'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('usuario_id'); ?></th>
			<th><?php echo $this->Paginator->sort('actividad_id'); ?></th>
			<th class="actions"><?php echo __('Opciones'); ?></th>
	</tr>
	<?php foreach ($registros as $registro): ?>
	<tr>
		<td><?php echo h($registro['Registro']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($registro['Usuario']['nombres'], array('controller' => 'usuarios', 'action' => 'view', $registro['Usuario']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($registro['Actividad']['tema'], array('controller' => 'actividades', 'action' => 'view', $registro['Actividad']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('ver'), array('action' => 'view', $registro['Registro']['id'])); ?>
			
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
		echo $this->Paginator->prev('< ' . __('anterior'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('proximo') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>

