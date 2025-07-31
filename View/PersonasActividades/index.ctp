<?php $this->layout = 'formulario'?>
<div class="personasActividades index">
	<h2><?php echo __('Personas Actividades'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('persona_id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombres'); ?></th>
			<th><?php echo $this->Paginator->sort('apellidos'); ?></th>
			<th><?php echo $this->Paginator->sort('id_actividad'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha'); ?></th>
			<th><?php echo $this->Paginator->sort('tema'); ?></th>
			<th><?php echo $this->Paginator->sort('dimension'); ?></th>
			<th><?php echo $this->Paginator->sort('id_actividad'); ?></th>
			<th><?php echo $this->Paginator->sort('registro'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($personasActividades as $personasActividad): ?>
	<tr>
		<td><?php echo h($personasActividad['PersonasActividad']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($personasActividad['Persona']['identificacion'], array('controller' => 'personas', 'action' => 'view', $personasActividad['Persona']['id'])); ?>
		</td>
		
		<td>
			<?php echo $this->Html->link($personasActividad['Persona']['nombres'], array('controller' => 'personas', 'action' => 'view', $personasActividad['Persona']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($personasActividad['Persona']['apellidos'], array('controller' => 'personas', 'action' => 'view', $personasActividad['Persona']['id'])); ?>
		</td>
		
		<td>
			<?php echo $this->Html->link($personasActividad['Actividad']['id'], array('controller' => 'actividades', 'action' => 'view', $personasActividad['Actividad']['id'])); ?>
		</td>
		<td><?php echo h($personasActividad['Actividad']['fecha']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($personasActividad['Actividad']['tema'], array('controller' => 'actividades', 'action' => 'view', $personasActividad['Actividad']['id'])); ?>
			
		</td>
		<td>
			<?php echo $this->Html->link($personasActividad['Actividad']['dimension'], array('controller' => 'actividades', 'action' => 'view', $personasActividad['Actividad']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($personasActividad['Actividad']['pro_asociado'], array('controller' => 'actividades', 'action' => 'view', $personasActividad['Actividad']['id'])); ?>
		</td>
		<td><?php echo h($personasActividad['PersonasActividad']['registro']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $personasActividad['PersonasActividad']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $personasActividad['PersonasActividad']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $personasActividad['PersonasActividad']['id']), array(), __('Are you sure you want to delete # %s?', $personasActividad['PersonasActividad']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Nueva Personas Actividad'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Lista Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Export',true),array('controller'=>'personasActividades','action'=>'excel'));?></li>
		
		<li><?php echo $this->Html->link(__('Nueva Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Actividades'), array('controller' => 'actividades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Actividad'), array('controller' => 'actividades', 'action' => 'add')); ?> </li>
	</ul>
</div>
