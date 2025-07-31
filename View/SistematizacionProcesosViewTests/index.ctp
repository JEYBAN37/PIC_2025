<?php $this->layout = 'printactividades' ?>
<div class="sistematizacionProcesosViewTests index">
	<h2><?php echo __('Sistematizacion Procesos View Tests'); ?></h2>
	<table cellpadding="0" cellspacing="0">
		<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('proactividad_id'); ?></th>
			<th><?php echo $this->Paginator->sort('poblaciones'); ?></th>
			<th><?php echo $this->Paginator->sort('grupo'); ?></th>
			<th><?php echo $this->Paginator->sort('producto_id'); ?></th>
			<th><?php echo $this->Paginator->sort('N_producto'); ?></th>
			<th><?php echo $this->Paginator->sort('Dimension'); ?></th>
			<th><?php echo $this->Paginator->sort('producto'); ?></th>
			<th><?php echo $this->Paginator->sort('tarea'); ?></th>
			<th><?php echo $this->Paginator->sort('caracteristicasesion'); ?></th>
			<th><?php echo $this->Paginator->sort('otrocual'); ?></th>
			<th><?php echo $this->Paginator->sort('objactividad'); ?></th>
			<th><?php echo $this->Paginator->sort('contobjetivo'); ?></th>
			<th><?php echo $this->Paginator->sort('contpremisa'); ?></th>
			<th><?php echo $this->Paginator->sort('contperspectiva'); ?></th>
			<th><?php echo $this->Paginator->sort('contribucionenfoque'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha'); ?></th>
			<th><?php echo $this->Paginator->sort('tema'); ?></th>
			<th><?php echo $this->Paginator->sort('ubicacion_id'); ?></th>
			<th><?php echo $this->Paginator->sort('comuna_actividad'); ?></th>
			<th><?php echo $this->Paginator->sort('barrio'); ?></th>
			<th><?php echo $this->Paginator->sort('zona'); ?></th>
			<th><?php echo $this->Paginator->sort('responsable_id'); ?></th>
			<th><?php echo $this->Paginator->sort('responsable'); ?></th>
			<th><?php echo $this->Paginator->sort('plsesion_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
		</tr>
		<?php foreach ($sistematizacionProcesosViewTests as $sistematizacionProcesosViewTest) : ?>
			<tr>
				<td><?php echo h($sistematizacionProcesosViewTest['SistematizacionProcesosViewTest']['id']); ?>&nbsp;</td>
				<td>
					<?php echo $this->Html->link($sistematizacionProcesosViewTest['Proactividad']['nombreact'], array('controller' => 'proactividades', 'action' => 'view', $sistematizacionProcesosViewTest['Proactividad']['id'])); ?>
				</td>
				<td><?php echo h($sistematizacionProcesosViewTest['SistematizacionProcesosViewTest']['poblaciones']); ?>&nbsp;</td>
				<td><?php echo h($sistematizacionProcesosViewTest['SistematizacionProcesosViewTest']['grupo']); ?>&nbsp;</td>
				<td>
					<?php echo $this->Html->link($sistematizacionProcesosViewTest['Producto']['nombreproducto'], array('controller' => 'productos', 'action' => 'view', $sistematizacionProcesosViewTest['Producto']['id'])); ?>
				</td>
				<td><?php echo h($sistematizacionProcesosViewTest['SistematizacionProcesosViewTest']['N_producto']); ?>&nbsp;</td>
				<td><?php echo h($sistematizacionProcesosViewTest['SistematizacionProcesosViewTest']['Dimension']); ?>&nbsp;</td>
				<td><?php echo h($sistematizacionProcesosViewTest['SistematizacionProcesosViewTest']['producto']); ?>&nbsp;</td>
				<td><?php echo h($sistematizacionProcesosViewTest['SistematizacionProcesosViewTest']['tarea']); ?>&nbsp;</td>
				<td><?php echo h($sistematizacionProcesosViewTest['SistematizacionProcesosViewTest']['caracteristicasesion']); ?>&nbsp;</td>
				<td><?php echo h($sistematizacionProcesosViewTest['SistematizacionProcesosViewTest']['otrocual']); ?>&nbsp;</td>
				<td><?php echo h($sistematizacionProcesosViewTest['SistematizacionProcesosViewTest']['objactividad']); ?>&nbsp;</td>
				<td><?php echo h($sistematizacionProcesosViewTest['SistematizacionProcesosViewTest']['contobjetivo']); ?>&nbsp;</td>
				<td><?php echo h($sistematizacionProcesosViewTest['SistematizacionProcesosViewTest']['contpremisa']); ?>&nbsp;</td>
				<td><?php echo h($sistematizacionProcesosViewTest['SistematizacionProcesosViewTest']['contperspectiva']); ?>&nbsp;</td>
				<td><?php echo h($sistematizacionProcesosViewTest['SistematizacionProcesosViewTest']['contribucionenfoque']); ?>&nbsp;</td>
				<td><?php echo h($sistematizacionProcesosViewTest['SistematizacionProcesosViewTest']['fecha']); ?>&nbsp;</td>
				<td><?php echo h($sistematizacionProcesosViewTest['SistematizacionProcesosViewTest']['tema']); ?>&nbsp;</td>
				<td>
					<?php echo $this->Html->link($sistematizacionProcesosViewTest['Ubicacion']['barrio'], array('controller' => 'ubicaciones', 'action' => 'view', $sistematizacionProcesosViewTest['Ubicacion']['id'])); ?>
				</td>
				<td><?php echo h($sistematizacionProcesosViewTest['SistematizacionProcesosViewTest']['comuna_actividad']); ?>&nbsp;</td>
				<td><?php echo h($sistematizacionProcesosViewTest['SistematizacionProcesosViewTest']['barrio']); ?>&nbsp;</td>
				<td><?php echo h($sistematizacionProcesosViewTest['SistematizacionProcesosViewTest']['zona']); ?>&nbsp;</td>
				<td>
					<?php echo $this->Html->link($sistematizacionProcesosViewTest['Responsable']['nombres'], array('controller' => 'responsables', 'action' => 'view', $sistematizacionProcesosViewTest['Responsable']['id'])); ?>
				</td>
				<td><?php echo h($sistematizacionProcesosViewTest['SistematizacionProcesosViewTest']['responsable']); ?>&nbsp;</td>
				<td>
					<?php echo $this->Html->link($sistematizacionProcesosViewTest['Plsesion']['nombreplan'], array('controller' => 'plsesiones', 'action' => 'view', $sistematizacionProcesosViewTest['Plsesion']['id'])); ?>
				</td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('action' => 'view', $sistematizacionProcesosViewTest['SistematizacionProcesosViewTest']['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $sistematizacionProcesosViewTest['SistematizacionProcesosViewTest']['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $sistematizacionProcesosViewTest['SistematizacionProcesosViewTest']['id']), array(), __('Are you sure you want to delete # %s?', $sistematizacionProcesosViewTest['SistematizacionProcesosViewTest']['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
	</table>
	<p>
		<?php
		echo $this->Paginator->counter(array(
			'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
		));
		?> </p>
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
		<li><?php echo $this->Html->link(__('New Sistematizacion Procesos View Test'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Proactividades'), array('controller' => 'proactividades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proactividad'), array('controller' => 'proactividades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ubicaciones'), array('controller' => 'ubicaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ubicacion'), array('controller' => 'ubicaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Responsables'), array('controller' => 'responsables', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Responsable'), array('controller' => 'responsables', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Plsesiones'), array('controller' => 'plsesiones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Plsesion'), array('controller' => 'plsesiones', 'action' => 'add')); ?> </li>
	</ul>
</div>
