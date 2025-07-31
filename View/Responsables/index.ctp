<?php $this->layout = 'formulario'?>
<div class="responsables index">
	<h2><?php echo __('Responsables'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('tipodoc'); ?></th>
			<th><?php echo $this->Paginator->sort('numero'); ?></th>
			<th><?php echo $this->Paginator->sort('nombres'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_nac'); ?></th>
			<th><?php echo $this->Paginator->sort('celular'); ?></th>
			<th><?php echo $this->Paginator->sort('telefono'); ?></th>
			<th><?php echo $this->Paginator->sort('correo'); ?></th>
			<th><?php echo $this->Paginator->sort('profesion'); ?></th>
			<th><?php echo $this->Paginator->sort('cargo'); ?></th>
			<th><?php echo $this->Paginator->sort('familiar'); ?></th>
			<th><?php echo $this->Paginator->sort('parentesco'); ?></th>
			<th><?php echo $this->Paginator->sort('tel_familiar'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($responsables as $responsable): ?>
	<tr>
		<td><?php echo h($responsable['Responsable']['id']); ?>&nbsp;</td>
		<td><?php echo h($responsable['Responsable']['tipodoc']); ?>&nbsp;</td>
		<td><?php echo h($responsable['Responsable']['numero']); ?>&nbsp;</td>
		<td><?php echo h($responsable['Responsable']['nombres']); ?>&nbsp;</td>
		<td><?php echo h($responsable['Responsable']['fecha_nac']); ?>&nbsp;</td>
		<td><?php echo h($responsable['Responsable']['celular']); ?>&nbsp;</td>
		<td><?php echo h($responsable['Responsable']['telefono']); ?>&nbsp;</td>
		<td><?php echo h($responsable['Responsable']['correo']); ?>&nbsp;</td>
		<td><?php echo h($responsable['Responsable']['profesion']); ?>&nbsp;</td>
		<td><?php echo h($responsable['Responsable']['cargo']); ?>&nbsp;</td>
		<td><?php echo h($responsable['Responsable']['familiar']); ?>&nbsp;</td>
		<td><?php echo h($responsable['Responsable']['parentesco']); ?>&nbsp;</td>
		<td><?php echo h($responsable['Responsable']['tel_familiar']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $responsable['Responsable']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $responsable['Responsable']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $responsable['Responsable']['id']), array(), __('Are you sure you want to delete # %s?', $responsable['Responsable']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Nuevo Responsable'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Lista Actividades'), array('controller' => 'actividades', 'action' => 'nuebus')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Actividad'), array('controller' => 'actividades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Regresar'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
	</ul>
</div>
