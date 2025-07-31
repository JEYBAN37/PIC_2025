<?php $this->layout = 'tablas' ?>
<div class="procesoregistros index">
	<h2><?php echo __('Procesoregistros'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('proactividad_id'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha'); ?></th>
			<th><?php echo $this->Paginator->sort('tema'); ?></th>	
			<th><?php echo $this->Paginator->sort('ubicacion_id'); ?></th>
			<th><?php echo $this->Paginator->sort('barrio'); ?></th>
			<th><?php echo $this->Paginator->sort('plsesion_id'); ?></th>
			<th><?php echo $this->Paginator->sort('anexo'); ?></th>
			
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($procesoregistros as $procesoregistro): ?>
	<tr>
		<td><?php echo h($procesoregistro['Procesoregistro']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($procesoregistro['Proactividad']['id'], array('controller' => 'productos', 'action' => 'view', $producto['Producto']['activity'])); ?>
		</td>
		<td><?php echo h($procesoregistro['Procesoregistro']['fecha']); ?>&nbsp;</td>
		<td><?php echo h($procesoregistro['Procesoregistro']['tema']); ?>&nbsp;</td>
		
		<td>
			<?php echo $this->Html->link($procesoregistro['Ubicacion']['barrio'], array('controller' => 'ubicaciones', 'action' => 'view', $procesoregistro['Ubicacion']['id'])); ?>
		</td>
		<td><?php echo h($procesoregistro['Procesoregistro']['barrio']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($procesoregistro['Plsesion']['id'], array('controller' => 'plsesiones', 'action' => 'view', $procesoregistro['Plsesion']['id'])); ?>
		</td>
		<td><?php echo h($procesoregistro['Procesoregistro']['anexo']); ?>&nbsp;</td>
		
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $procesoregistro['Procesoregistro']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $procesoregistro['Procesoregistro']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $procesoregistro['Procesoregistro']['id']), array(), __('Are you sure you want to delete # %s?', $procesoregistro['Procesoregistro']['id'])); ?>
			<li><?php echo $this->Html->link(__('Ver'), array('action' => 'view', $proactividad['Proactividad']['id'])); ?></li>
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
		 <li> <a  href="../SICB/users/bienvenida"   >Inicio</a></li>
		<li><?php echo $this->Html->link(__('Nuevo registro'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Lista procesos'), array('controller' => 'proactividades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo sist. de proceso'), array('controller' => 'proactividades', 'action' => 'add')); ?> </li>
		
	</ul>
</div>




