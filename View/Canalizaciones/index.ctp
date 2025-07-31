<div class="canalizaciones index">
	<h2><?php echo __('Canalizaciones'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha'); ?></th>
			<th><?php echo $this->Paginator->sort('tipodoc'); ?></th>
			<th><?php echo $this->Paginator->sort('identificacion'); ?></th>
			<th><?php echo $this->Paginator->sort('nombres'); ?></th>
			<th><?php echo $this->Paginator->sort('apellidos'); ?></th>
			<th><?php echo $this->Paginator->sort('ubicacion_id'); ?></th>
			<th><?php echo $this->Paginator->sort('vereda'); ?></th>
			<th><?php echo $this->Paginator->sort('comunas'); ?></th>
			<th><?php echo $this->Paginator->sort('corregimiento'); ?></th>
			<th><?php echo $this->Paginator->sort('direccion'); ?></th>
			<th><?php echo $this->Paginator->sort('telefono'); ?></th>
			<th><?php echo $this->Paginator->sort('celular'); ?></th>
			<th><?php echo $this->Paginator->sort('correo'); ?></th>
			<th><?php echo $this->Paginator->sort('solicitud'); ?></th>
			<th><?php echo $this->Paginator->sort('canalizacion'); ?></th>
			<th><?php echo $this->Paginator->sort('compromiso'); ?></th>
			<th><?php echo $this->Paginator->sort('orientacion'); ?></th>
			<th><?php echo $this->Paginator->sort('responsable'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($canalizaciones as $canalizacion): ?>
	<tr>
		<td><?php echo h($canalizacion['Canalizacion']['id']); ?>&nbsp;</td>
		<td><?php echo h($canalizacion['Canalizacion']['fecha']); ?>&nbsp;</td>
		<td><?php echo h($canalizacion['Canalizacion']['tipodoc']); ?>&nbsp;</td>
		<td><?php echo h($canalizacion['Canalizacion']['identificacion']); ?>&nbsp;</td>
		<td><?php echo h($canalizacion['Canalizacion']['nombres']); ?>&nbsp;</td>
		<td><?php echo h($canalizacion['Canalizacion']['apellidos']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($canalizacion['Ubicacion']['barrio'], array('controller' => 'ubicaciones', 'action' => 'view', $canalizacion['Ubicacion']['id'])); ?>
		</td>
		<td><?php echo h($canalizacion['Canalizacion']['vereda']); ?>&nbsp;</td>
		<td><?php echo h($canalizacion['Canalizacion']['comuna']); ?>&nbsp;</td>
		<td><?php echo h($canalizacion['Canalizacion']['corregimiento']); ?>&nbsp;</td>
		<td><?php echo h($canalizacion['Canalizacion']['direccion']); ?>&nbsp;</td>
		<td><?php echo h($canalizacion['Canalizacion']['telefono']); ?>&nbsp;</td>
		<td><?php echo h($canalizacion['Canalizacion']['celular']); ?>&nbsp;</td>
		<td><?php echo h($canalizacion['Canalizacion']['correo']); ?>&nbsp;</td>
		<td><?php echo h($canalizacion['Canalizacion']['solicitud']); ?>&nbsp;</td>
		<td><?php echo h($canalizacion['Canalizacion']['canalizacion']); ?>&nbsp;</td>
		<td><?php echo h($canalizacion['Canalizacion']['compromiso']); ?>&nbsp;</td>
		<td><?php echo h($canalizacion['Canalizacion']['orientacion']); ?>&nbsp;</td>
		<td><?php echo h($canalizacion['Canalizacion']['responsable']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $canalizacion['Canalizacion']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $canalizacion['Canalizacion']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $canalizacion['Canalizacion']['id']), array(), __('Are you sure you want to delete # %s?', $canalizacion['Canalizacion']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Canalizacion'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Ubicaciones'), array('controller' => 'ubicaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ubicacion'), array('controller' => 'ubicaciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
