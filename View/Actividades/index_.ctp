<?php $this->layout = 'tablas'?>
<div class="actividades index">
	<h2><?php echo __('Actividades'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha'); ?></th>
			<th><?php echo $this->Paginator->sort('hora_inicio'); ?></th>
			<th><?php echo $this->Paginator->sort('hora_fin'); ?></th>
			<th><?php echo $this->Paginator->sort('tema'); ?></th>
			<th><?php echo $this->Paginator->sort('ubicacion_id'); ?></th>
			<th><?php echo $this->Paginator->sort('comuna'); ?></th>
			<th><?php echo $this->Paginator->sort('corregimiento'); ?></th>
			<th><?php echo $this->Paginator->sort('vereda'); ?></th>
			<th><?php echo $this->Paginator->sort('lugar'); ?></th>
			<th><?php echo $this->Paginator->sort('direccion'); ?></th>
			<th><?php echo $this->Paginator->sort('responsable_id'); ?></th>
			<th><?php echo $this->Paginator->sort('dimension'); ?></th>
			<th><?php echo $this->Paginator->sort('num_producto'); ?></th>
			<th><?php echo $this->Paginator->sort('pro_asociado'); ?></th>
			<th><?php echo $this->Paginator->sort('poblacion_id'); ?></th>
			<th><?php echo $this->Paginator->sort('otraspoblaciones'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo_proceso'); ?></th>
			<th><?php echo $this->Paginator->sort('otro_tipo'); ?></th>
			<th><?php echo $this->Paginator->sort('caracteristica_sesion'); ?></th>
			<th><?php echo $this->Paginator->sort('otro_cual'); ?></th>
			<th><?php echo $this->Paginator->sort('objetivouno'); ?></th>
			<th><?php echo $this->Paginator->sort('objetivodos'); ?></th>
			<th><?php echo $this->Paginator->sort('objetivotres'); ?></th>
			<th><?php echo $this->Paginator->sort('cont_objetivo'); ?></th>
			<th><?php echo $this->Paginator->sort('obj_actividad'); ?></th>
			<th><?php echo $this->Paginator->sort('objetivo_especifico'); ?></th>
			<th><?php echo $this->Paginator->sort('premisauno'); ?></th>
			<th><?php echo $this->Paginator->sort('premisados'); ?></th>
			<th><?php echo $this->Paginator->sort('premisatres'); ?></th>
			<th><?php echo $this->Paginator->sort('cont_premisa'); ?></th>
			<th><?php echo $this->Paginator->sort('perspectivauno'); ?></th>
			<th><?php echo $this->Paginator->sort('perspectivados'); ?></th>
			<th><?php echo $this->Paginator->sort('cont_perspectiva'); ?></th>
			<th><?php echo $this->Paginator->sort('enfoqueuno'); ?></th>
			<th><?php echo $this->Paginator->sort('enfoquedos'); ?></th>
			<th><?php echo $this->Paginator->sort('enfoquetres'); ?></th>
			<th><?php echo $this->Paginator->sort('enfoquecuatro'); ?></th>
			<th><?php echo $this->Paginator->sort('contribucion_enfoque'); ?></th>
			<th><?php echo $this->Paginator->sort('compromiso'); ?></th>
			<th><?php echo $this->Paginator->sort('externo'); ?></th>
			<th><?php echo $this->Paginator->sort('cargo'); ?></th>
			<th><?php echo $this->Paginator->sort('organizacion'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo_organzacion'); ?></th>
			
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($actividades as $actividad): ?>
	<tr>
		<td><?php echo h($actividad['Actividad']['id']); ?>&nbsp;</td>
		<td><?php echo h($actividad['Actividad']['fecha']); ?>&nbsp;</td>
		<td><?php echo h($actividad['Actividad']['hora_inicio']); ?>&nbsp;</td>
		<td><?php echo h($actividad['Actividad']['hora_fin']); ?>&nbsp;</td>
		<td><?php echo h($actividad['Actividad']['tema']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($actividad['Ubicacion']['barrio'], array('controller' => 'ubicaciones', 'action' => 'view', $actividad['Ubicacion']['id'])); ?>
		</td>
		<td><?php echo h($actividad['Actividad']['comuna']); ?>&nbsp;</td>
		<td><?php echo h($actividad['Actividad']['corregimiento']); ?>&nbsp;</td>
		<td><?php echo h($actividad['Actividad']['vereda']); ?>&nbsp;</td>
		<td><?php echo h($actividad['Actividad']['lugar']); ?>&nbsp;</td>
		<td><?php echo h($actividad['Actividad']['direccion']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($actividad['Responsable']['id'], array('controller' => 'responsables', 'action' => 'view', $actividad['Responsable']['id'])); ?>
		</td>
		<td><?php echo h($actividad['Actividad']['dimension']); ?>&nbsp;</td>
		<td><?php echo h($actividad['Actividad']['num_producto']); ?>&nbsp;</td>
		<td><?php echo h($actividad['Actividad']['pro_asociado']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($actividad['Poblacion']['poblacion'], array('controller' => 'poblaciones', 'action' => 'view', $actividad['Poblacion']['id'])); ?>
		</td>
		<td><?php echo h($actividad['Actividad']['otraspoblaciones']); ?>&nbsp;</td>
		<td><?php echo h($actividad['Actividad']['tipo_proceso']); ?>&nbsp;</td>
		<td><?php echo h($actividad['Actividad']['otro_tipo']); ?>&nbsp;</td>
		<td><?php echo h($actividad['Actividad']['caracteristica_sesion']); ?>&nbsp;</td>
		<td><?php echo h($actividad['Actividad']['otro_cual']); ?>&nbsp;</td>
		<td><?php echo h($actividad['Actividad']['objetivouno']); ?>&nbsp;</td>
		<td><?php echo h($actividad['Actividad']['objetivodos']); ?>&nbsp;</td>
		<td><?php echo h($actividad['Actividad']['objetivotres']); ?>&nbsp;</td>
		<td><?php echo h($actividad['Actividad']['cont_objetivo']); ?>&nbsp;</td>
		<td><?php echo h($actividad['Actividad']['obj_actividad']); ?>&nbsp;</td>
		<td><?php echo h($actividad['Actividad']['objetivo_especifico']); ?>&nbsp;</td>
		<td><?php echo h($actividad['Actividad']['premisauno']); ?>&nbsp;</td>
		<td><?php echo h($actividad['Actividad']['premisados']); ?>&nbsp;</td>
		<td><?php echo h($actividad['Actividad']['premisatres']); ?>&nbsp;</td>
		<td><?php echo h($actividad['Actividad']['cont_premisa']); ?>&nbsp;</td>
		<td><?php echo h($actividad['Actividad']['perspectivauno']); ?>&nbsp;</td>
		<td><?php echo h($actividad['Actividad']['perspectivados']); ?>&nbsp;</td>
		<td><?php echo h($actividad['Actividad']['cont_perspectiva']); ?>&nbsp;</td>
		<td><?php echo h($actividad['Actividad']['enfoqueuno']); ?>&nbsp;</td>
		<td><?php echo h($actividad['Actividad']['enfoquedos']); ?>&nbsp;</td>
		<td><?php echo h($actividad['Actividad']['enfoquetres']); ?>&nbsp;</td>
		<td><?php echo h($actividad['Actividad']['enfoquecuatro']); ?>&nbsp;</td>
		<td><?php echo h($actividad['Actividad']['contribucion_enfoque']); ?>&nbsp;</td>
		<td><?php echo h($actividad['Actividad']['compromiso']); ?>&nbsp;</td>
		<td><?php echo h($actividad['Actividad']['externo']); ?>&nbsp;</td>
		<td><?php echo h($actividad['Actividad']['cargo']); ?>&nbsp;</td>
		<td><?php echo h($actividad['Actividad']['organizacion']); ?>&nbsp;</td>
		<td><?php echo h($actividad['Actividad']['tipo_organzacion']); ?>&nbsp;</td>
		
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $actividad['Actividad']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $actividad['Actividad']['id'])); ?>
			<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $actividad['Actividad']['id']), array(), __('Esta seguro de borrar el registro # %s?', $actividad['Actividad']['id'])); ?>
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
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Nueva Actividad'), array('action' => 'add')); ?></li>
		
		<li><?php echo $this->Html->link(__('Lista Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
	</ul>
</div>
