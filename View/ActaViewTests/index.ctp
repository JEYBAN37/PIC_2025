<div class="actaViewTests index">
	<h2><?php echo __('Acta View Tests'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha'); ?></th>
			<th><?php echo $this->Paginator->sort('grupo'); ?></th>
			<th><?php echo $this->Paginator->sort('tema'); ?></th>
			<th><?php echo $this->Paginator->sort('objactividad'); ?></th>
			<th><?php echo $this->Paginator->sort('alcancereunion'); ?></th>
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
	<?php foreach ($actaViewTests as $actaViewTest): ?>
	<tr>
		<td><?php echo h($actaViewTest['ActaViewTest']['id']); ?>&nbsp;</td>
		<td><?php echo h($actaViewTest['ActaViewTest']['fecha']); ?>&nbsp;</td>
		<td><?php echo h($actaViewTest['ActaViewTest']['grupo']); ?>&nbsp;</td>
		<td><?php echo h($actaViewTest['ActaViewTest']['tema']); ?>&nbsp;</td>
		<td><?php echo h($actaViewTest['ActaViewTest']['objactividad']); ?>&nbsp;</td>
		<td><?php echo h($actaViewTest['ActaViewTest']['alcancereunion']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($actaViewTest['Ubicacion']['id'], array('controller' => 'ubicaciones', 'action' => 'view', $actaViewTest['Ubicacion']['id'])); ?>
		</td>
		<td><?php echo h($actaViewTest['ActaViewTest']['comuna']); ?>&nbsp;</td>
		<td><?php echo h($actaViewTest['ActaViewTest']['barrio']); ?>&nbsp;</td>
		<td><?php echo h($actaViewTest['ActaViewTest']['zona']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($actaViewTest['Producto']['numporductos'], array('controller' => 'productos', 'action' => 'view', $actaViewTest['Producto']['id'])); ?>
		</td>
		<td><?php echo h($actaViewTest['ActaViewTest']['lineas']); ?>&nbsp;</td>
		<td><?php echo h($actaViewTest['ActaViewTest']['dimensiones']); ?>&nbsp;</td>
		<td><?php echo h($actaViewTest['ActaViewTest']['nombredim']); ?>&nbsp;</td>
		<td><?php echo h($actaViewTest['ActaViewTest']['costodim']); ?>&nbsp;</td>
		<td><?php echo h($actaViewTest['ActaViewTest']['linormativas']); ?>&nbsp;</td>
		<td><?php echo h($actaViewTest['ActaViewTest']['resultado']); ?>&nbsp;</td>
		<td><?php echo h($actaViewTest['ActaViewTest']['activity']); ?>&nbsp;</td>
		<td><?php echo h($actaViewTest['ActaViewTest']['vidacursos']); ?>&nbsp;</td>
		<td><?php echo h($actaViewTest['ActaViewTest']['entorno']); ?>&nbsp;</td>
		<td><?php echo h($actaViewTest['ActaViewTest']['tecnologias']); ?>&nbsp;</td>
		<td><?php echo h($actaViewTest['ActaViewTest']['porcproducto']); ?>&nbsp;</td>
		<td><?php echo h($actaViewTest['ActaViewTest']['tarea']); ?>&nbsp;</td>
		<td><?php echo h($actaViewTest['ActaViewTest']['porctareas']); ?>&nbsp;</td>
		<td><?php echo h($actaViewTest['ActaViewTest']['clasobjetivos']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $actaViewTest['ActaViewTest']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $actaViewTest['ActaViewTest']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $actaViewTest['ActaViewTest']['id']), array(), __('Are you sure you want to delete # %s?', $actaViewTest['ActaViewTest']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Acta View Test'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Ubicaciones'), array('controller' => 'ubicaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ubicacion'), array('controller' => 'ubicaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
	</ul>
</div>
