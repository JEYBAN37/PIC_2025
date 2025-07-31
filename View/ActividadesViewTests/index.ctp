<div class="actividadesViewTests index">
	<h2><?php echo __('Actividades View Tests'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha'); ?></th>
			<th><?php echo $this->Paginator->sort('tema'); ?></th>
			<th><?php echo $this->Paginator->sort('responsable_id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombres'); ?></th>
			<th><?php echo $this->Paginator->sort('ubicacion_id'); ?></th>
			<th><?php echo $this->Paginator->sort('comuna'); ?></th>
			<th><?php echo $this->Paginator->sort('barrio'); ?></th>
			<th><?php echo $this->Paginator->sort('zona'); ?></th>
			<th><?php echo $this->Paginator->sort('producto_id'); ?></th>
			<th><?php echo $this->Paginator->sort('lineas'); ?></th>
			<th><?php echo $this->Paginator->sort('dimensiones'); ?></th>
			<th><?php echo $this->Paginator->sort('nombredim'); ?></th>
			<th><?php echo $this->Paginator->sort('costodim'); ?></th>
			<th><?php echo $this->Paginator->sort('linormativas'); ?></th>
			<th><?php echo $this->Paginator->sort('resultado'); ?></th>
			<th><?php echo $this->Paginator->sort('activity'); ?></th>
			<th><?php echo $this->Paginator->sort('vidacursos'); ?></th>
			<th><?php echo $this->Paginator->sort('entorno'); ?></th>
			<th><?php echo $this->Paginator->sort('tecnologias'); ?></th>
			<th><?php echo $this->Paginator->sort('porcproducto'); ?></th>
			<th><?php echo $this->Paginator->sort('tarea'); ?></th>
			<th><?php echo $this->Paginator->sort('porctareas'); ?></th>
			<th><?php echo $this->Paginator->sort('clasobjetivos'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($actividadesViewTests as $actividadesViewTest): ?>
	<tr>
		<td><?php echo h($actividadesViewTest['ActividadesViewTest']['id']); ?>&nbsp;</td>
		<td><?php echo h($actividadesViewTest['ActividadesViewTest']['fecha']); ?>&nbsp;</td>
		<td><?php echo h($actividadesViewTest['ActividadesViewTest']['tema']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($actividadesViewTest['Responsable']['nombres'], array('controller' => 'responsables', 'action' => 'view', $actividadesViewTest['Responsable']['id'])); ?>
		</td>
		<td><?php echo h($actividadesViewTest['ActividadesViewTest']['nombres']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($actividadesViewTest['Ubicacion']['barrio'], array('controller' => 'ubicaciones', 'action' => 'view', $actividadesViewTest['Ubicacion']['id'])); ?>
		</td>
		<td><?php echo h($actividadesViewTest['ActividadesViewTest']['comuna']); ?>&nbsp;</td>
		<td><?php echo h($actividadesViewTest['ActividadesViewTest']['barrio']); ?>&nbsp;</td>
		<td><?php echo h($actividadesViewTest['ActividadesViewTest']['zona']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($actividadesViewTest['Producto']['numporductos'], array('controller' => 'productos', 'action' => 'view', $actividadesViewTest['Producto']['id'])); ?>
		</td>
		<td><?php echo h($actividadesViewTest['ActividadesViewTest']['lineas']); ?>&nbsp;</td>
		<td><?php echo h($actividadesViewTest['ActividadesViewTest']['dimensiones']); ?>&nbsp;</td>
		<td><?php echo h($actividadesViewTest['ActividadesViewTest']['nombredim']); ?>&nbsp;</td>
		<td><?php echo h($actividadesViewTest['ActividadesViewTest']['costodim']); ?>&nbsp;</td>
		<td><?php echo h($actividadesViewTest['ActividadesViewTest']['linormativas']); ?>&nbsp;</td>
		<td><?php echo h($actividadesViewTest['ActividadesViewTest']['resultado']); ?>&nbsp;</td>
		<td><?php echo h($actividadesViewTest['ActividadesViewTest']['activity']); ?>&nbsp;</td>
		<td><?php echo h($actividadesViewTest['ActividadesViewTest']['vidacursos']); ?>&nbsp;</td>
		<td><?php echo h($actividadesViewTest['ActividadesViewTest']['entorno']); ?>&nbsp;</td>
		<td><?php echo h($actividadesViewTest['ActividadesViewTest']['tecnologias']); ?>&nbsp;</td>
		<td><?php echo h($actividadesViewTest['ActividadesViewTest']['porcproducto']); ?>&nbsp;</td>
		<td><?php echo h($actividadesViewTest['ActividadesViewTest']['tarea']); ?>&nbsp;</td>
		<td><?php echo h($actividadesViewTest['ActividadesViewTest']['porctareas']); ?>&nbsp;</td>
		<td><?php echo h($actividadesViewTest['ActividadesViewTest']['clasobjetivos']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $actividadesViewTest['ActividadesViewTest']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $actividadesViewTest['ActividadesViewTest']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $actividadesViewTest['ActividadesViewTest']['id']), array(), __('Are you sure you want to delete # %s?', $actividadesViewTest['ActividadesViewTest']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Actividades View Test'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Responsables'), array('controller' => 'responsables', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Responsable'), array('controller' => 'responsables', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ubicaciones'), array('controller' => 'ubicaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ubicacion'), array('controller' => 'ubicaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
	</ul>
</div>
