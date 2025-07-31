<div class="plsesiones index">
	<h2><?php echo __('Plsesiones'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha'); ?></th>
			<th><?php echo $this->Paginator->sort('hora_fin'); ?></th>
			<th><?php echo $this->Paginator->sort('sesion'); ?></th>
			<th><?php echo $this->Paginator->sort('tema'); ?></th>
			<th><?php echo $this->Paginator->sort('intension'); ?></th>
			<th><?php echo $this->Paginator->sort('cuerpoterritorio'); ?></th>
			<th><?php echo $this->Paginator->sort('part_significativa'); ?></th>
			<th><?php echo $this->Paginator->sort('ciudadaniaactiva'); ?></th>
			<th><?php echo $this->Paginator->sort('territorial'); ?></th>
			<th><?php echo $this->Paginator->sort('poblacional'); ?></th>
			<th><?php echo $this->Paginator->sort('interultural'); ?></th>
			<th><?php echo $this->Paginator->sort('diferencial'); ?></th>
			<th><?php echo $this->Paginator->sort('genero'); ?></th>
			<th><?php echo $this->Paginator->sort('obj_individuos'); ?></th>
			<th><?php echo $this->Paginator->sort('obj_organizaciones'); ?></th>
			<th><?php echo $this->Paginator->sort('obj_instituciones'); ?></th>
			<th><?php echo $this->Paginator->sort('objetivog'); ?></th>
			<th><?php echo $this->Paginator->sort('objetivoe'); ?></th>
			<th><?php echo $this->Paginator->sort('tipoblacion'); ?></th>
			<th><?php echo $this->Paginator->sort('proceso'); ?></th>
			<th><?php echo $this->Paginator->sort('dimension'); ?></th>
			<th><?php echo $this->Paginator->sort('responsable_id'); ?></th>
			<th><?php echo $this->Paginator->sort('tematica'); ?></th>
			<th><?php echo $this->Paginator->sort('resultado'); ?></th>
			<th><?php echo $this->Paginator->sort('preguntasentido'); ?></th>
			<th><?php echo $this->Paginator->sort('califi_obj1'); ?></th>
			<th><?php echo $this->Paginator->sort('califi_obj2'); ?></th>
			<th><?php echo $this->Paginator->sort('califi_obj3'); ?></th>
			<th><?php echo $this->Paginator->sort('califi_premisa_ct'); ?></th>
			<th><?php echo $this->Paginator->sort('califi_premisa_ps'); ?></th>
			<th><?php echo $this->Paginator->sort('califi_premisa_ca'); ?></th>
			<th><?php echo $this->Paginator->sort('califi_enfo_territorial'); ?></th>
			<th><?php echo $this->Paginator->sort('califi_enfo_poblacional'); ?></th>
			<th><?php echo $this->Paginator->sort('califi_enfo_intercultural'); ?></th>
			<th><?php echo $this->Paginator->sort('califi_enfo_diferencial'); ?></th>
			<th><?php echo $this->Paginator->sort('digitador'); ?></th>
			<th><?php echo $this->Paginator->sort('anexo'); ?></th>
			<th><?php echo $this->Paginator->sort('dirplanes'); ?></th>
			<th><?php echo $this->Paginator->sort('enlaceurl'); ?></th>
			<th><?php echo $this->Paginator->sort('fecharegistro'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($plsesiones as $plsesion): ?>
	<tr>
		<td><?php echo h($plsesion['Plsesion']['id']); ?>&nbsp;</td>
		<td><?php echo h($plsesion['Plsesion']['fecha']); ?>&nbsp;</td>
		<td><?php echo h($plsesion['Plsesion']['hora_fin']); ?>&nbsp;</td>
		<td><?php echo h($plsesion['Plsesion']['sesion']); ?>&nbsp;</td>
		<td><?php echo h($plsesion['Plsesion']['tema']); ?>&nbsp;</td>
		<td><?php echo h($plsesion['Plsesion']['intension']); ?>&nbsp;</td>
		<td><?php echo h($plsesion['Plsesion']['cuerpoterritorio']); ?>&nbsp;</td>
		<td><?php echo h($plsesion['Plsesion']['part_significativa']); ?>&nbsp;</td>
		<td><?php echo h($plsesion['Plsesion']['ciudadaniaactiva']); ?>&nbsp;</td>
		<td><?php echo h($plsesion['Plsesion']['territorial']); ?>&nbsp;</td>
		<td><?php echo h($plsesion['Plsesion']['poblacional']); ?>&nbsp;</td>
		<td><?php echo h($plsesion['Plsesion']['interultural']); ?>&nbsp;</td>
		<td><?php echo h($plsesion['Plsesion']['diferencial']); ?>&nbsp;</td>
		<td><?php echo h($plsesion['Plsesion']['genero']); ?>&nbsp;</td>
		<td><?php echo h($plsesion['Plsesion']['obj_individuos']); ?>&nbsp;</td>
		<td><?php echo h($plsesion['Plsesion']['obj_organizaciones']); ?>&nbsp;</td>
		<td><?php echo h($plsesion['Plsesion']['obj_instituciones']); ?>&nbsp;</td>
		<td><?php echo h($plsesion['Plsesion']['objetivog']); ?>&nbsp;</td>
		<td><?php echo h($plsesion['Plsesion']['objetivoe']); ?>&nbsp;</td>
		<td><?php echo h($plsesion['Plsesion']['tipoblacion']); ?>&nbsp;</td>
		<td><?php echo h($plsesion['Plsesion']['proceso']); ?>&nbsp;</td>
		<td><?php echo h($plsesion['Plsesion']['dimension']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($plsesion['Responsable']['nombres'], array('controller' => 'responsables', 'action' => 'view', $plsesion['Responsable']['id'])); ?>
		</td>
		<td><?php echo h($plsesion['Plsesion']['tematica']); ?>&nbsp;</td>
		<td><?php echo h($plsesion['Plsesion']['resultado']); ?>&nbsp;</td>
		<td><?php echo h($plsesion['Plsesion']['preguntasentido']); ?>&nbsp;</td>
		<td><?php echo h($plsesion['Plsesion']['califi_obj1']); ?>&nbsp;</td>
		<td><?php echo h($plsesion['Plsesion']['califi_obj2']); ?>&nbsp;</td>
		<td><?php echo h($plsesion['Plsesion']['califi_obj3']); ?>&nbsp;</td>
		<td><?php echo h($plsesion['Plsesion']['califi_premisa_ct']); ?>&nbsp;</td>
		<td><?php echo h($plsesion['Plsesion']['califi_premisa_ps']); ?>&nbsp;</td>
		<td><?php echo h($plsesion['Plsesion']['califi_premisa_ca']); ?>&nbsp;</td>
		<td><?php echo h($plsesion['Plsesion']['califi_enfo_territorial']); ?>&nbsp;</td>
		<td><?php echo h($plsesion['Plsesion']['califi_enfo_poblacional']); ?>&nbsp;</td>
		<td><?php echo h($plsesion['Plsesion']['califi_enfo_intercultural']); ?>&nbsp;</td>
		<td><?php echo h($plsesion['Plsesion']['califi_enfo_diferencial']); ?>&nbsp;</td>
		<td><?php echo h($plsesion['Plsesion']['digitador']); ?>&nbsp;</td>
		<td><?php echo h($plsesion['Plsesion']['anexo']); ?>&nbsp;</td>
		<td><?php echo h($plsesion['Plsesion']['dirplanes']); ?>&nbsp;</td>
		<td><?php echo h($plsesion['Plsesion']['enlaceurl']); ?>&nbsp;</td>
		<td><?php echo h($plsesion['Plsesion']['fecharegistro']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $plsesion['Plsesion']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $plsesion['Plsesion']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $plsesion['Plsesion']['id']), array(), __('Are you sure you want to delete # %s?', $plsesion['Plsesion']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Plsesion'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Responsables'), array('controller' => 'responsables', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Responsable'), array('controller' => 'responsables', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Plsmomentos'), array('controller' => 'plsmomentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Plsmomento'), array('controller' => 'plsmomentos', 'action' => 'add')); ?> </li>
	</ul>
</div>
