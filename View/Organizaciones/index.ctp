<?php $this->layout = 'tablas'?>
<div class="organizaciones index">
	<h2><?php echo __('Organizaciones'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha'); ?></th>
			<th><?php echo $this->Paginator->sort('persona_id'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo'); ?></th>
			<th><?php echo $this->Paginator->sort('nombreorg'); ?></th>
			<th><?php echo $this->Paginator->sort('representante'); ?></th>
			<th><?php echo $this->Paginator->sort('ubicacion_id'); ?></th>
			<th><?php echo $this->Paginator->sort('comuna'); ?></th>
			<th><?php echo $this->Paginator->sort('direccion'); ?></th>
			<th><?php echo $this->Paginator->sort('telefono'); ?></th>
			<th><?php echo $this->Paginator->sort('correo'); ?></th>
			<th><?php echo $this->Paginator->sort('web'); ?></th>
			<th><?php echo $this->Paginator->sort('redes'); ?></th>
			<th><?php echo $this->Paginator->sort('constitucion'); ?></th>
			<th><?php echo $this->Paginator->sort('nivel'); ?></th>
			<th><?php echo $this->Paginator->sort('tiempoconst'); ?></th>
			<th><?php echo $this->Paginator->sort('actividad'); ?></th>
			<th><?php echo $this->Paginator->sort('numintegrantes'); ?></th>
			<th><?php echo $this->Paginator->sort('numbeneficiarios'); ?></th>
			<th><?php echo $this->Paginator->sort('zonactividad'); ?></th>
			<th><?php echo $this->Paginator->sort('barrio'); ?></th>
			<th><?php echo $this->Paginator->sort('corregimiento'); ?></th>
			<th><?php echo $this->Paginator->sort('numhombre'); ?></th>
			<th><?php echo $this->Paginator->sort('nummujer'); ?></th>
			<th><?php echo $this->Paginator->sort('nummenor'); ?></th>
			<th><?php echo $this->Paginator->sort('integrantesorg'); ?></th>
			<th><?php echo $this->Paginator->sort('poblacion_id'); ?></th>
			<th><?php echo $this->Paginator->sort('sociedad_id'); ?></th>
			<th><?php echo $this->Paginator->sort('sector_id'); ?></th>
			<th><?php echo $this->Paginator->sort('articulacion'); ?></th>
			<th><?php echo $this->Paginator->sort('niveladmin'); ?></th>
			<th><?php echo $this->Paginator->sort('proyecto_id'); ?></th>
			<th><?php echo $this->Paginator->sort('registro'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($organizaciones as $organizacion): ?>
	<tr>
		<td><?php echo h($organizacion['Organizacion']['id']); ?>&nbsp;</td>
		<td><?php echo h($organizacion['Organizacion']['fecha']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($organizacion['Persona']['id'], array('controller' => 'personas', 'action' => 'view', $organizacion['Persona']['id'])); ?>
		</td>
		<td><?php echo h($organizacion['Organizacion']['tipo']); ?>&nbsp;</td>
		<td><?php echo h($organizacion['Organizacion']['nombreorg']); ?>&nbsp;</td>
		<td><?php echo h($organizacion['Organizacion']['representante']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($organizacion['Ubicacion']['id'], array('controller' => 'ubicaciones', 'action' => 'view', $organizacion['Ubicacion']['id'])); ?>
		</td>
		<td><?php echo h($organizacion['Organizacion']['comuna']); ?>&nbsp;</td>
		<td><?php echo h($organizacion['Organizacion']['direccion']); ?>&nbsp;</td>
		<td><?php echo h($organizacion['Organizacion']['telefono']); ?>&nbsp;</td>
		<td><?php echo h($organizacion['Organizacion']['correo']); ?>&nbsp;</td>
		<td><?php echo h($organizacion['Organizacion']['web']); ?>&nbsp;</td>
		<td><?php echo h($organizacion['Organizacion']['redes']); ?>&nbsp;</td>
		<td><?php echo h($organizacion['Organizacion']['constitucion']); ?>&nbsp;</td>
		<td><?php echo h($organizacion['Organizacion']['nivel']); ?>&nbsp;</td>
		<td><?php echo h($organizacion['Organizacion']['tiempoconst']); ?>&nbsp;</td>
		<td><?php echo h($organizacion['Organizacion']['actividad']); ?>&nbsp;</td>
		<td><?php echo h($organizacion['Organizacion']['numintegrantes']); ?>&nbsp;</td>
		<td><?php echo h($organizacion['Organizacion']['numbeneficiarios']); ?>&nbsp;</td>
		<td><?php echo h($organizacion['Organizacion']['zonactividad']); ?>&nbsp;</td>
		<td><?php echo h($organizacion['Organizacion']['barrio']); ?>&nbsp;</td>
		<td><?php echo h($organizacion['Organizacion']['corregimiento']); ?>&nbsp;</td>
		<td><?php echo h($organizacion['Organizacion']['numhombre']); ?>&nbsp;</td>
		<td><?php echo h($organizacion['Organizacion']['nummujer']); ?>&nbsp;</td>
		<td><?php echo h($organizacion['Organizacion']['nummenor']); ?>&nbsp;</td>
		<td><?php echo h($organizacion['Organizacion']['integrantesorg']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($organizacion['Poblacion']['id'], array('controller' => 'poblaciones', 'action' => 'view', $organizacion['Poblacion']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($organizacion['Sociedad']['id'], array('controller' => 'sociedades', 'action' => 'view', $organizacion['Sociedad']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($organizacion['Sector']['id'], array('controller' => 'sectores', 'action' => 'view', $organizacion['Sector']['id'])); ?>
		</td>
		<td><?php echo h($organizacion['Organizacion']['articulacion']); ?>&nbsp;</td>
		<td><?php echo h($organizacion['Organizacion']['niveladmin']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($organizacion['Proyecto']['id'], array('controller' => 'proyectos', 'action' => 'view', $organizacion['Proyecto']['id'])); ?>
		</td>
		<td><?php echo h($organizacion['Organizacion']['registro']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $organizacion['Organizacion']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $organizacion['Organizacion']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $organizacion['Organizacion']['id']), array(), __('Are you sure you want to delete # %s?', $organizacion['Organizacion']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Nueva Organizacion Social'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Nueva Institución'), array('action' => 'add1')); ?></li>
		<li><?php echo $this->Html->link(__('Nueva Organizacion Comunitaria'), array('action' => 'add2')); ?></li>
		<li><?php echo $this->Html->link(__('Lista Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Ubicaciones'), array('controller' => 'ubicaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Ubicacion'), array('controller' => 'ubicaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Poblaciones'), array('controller' => 'poblaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Poblacion'), array('controller' => 'poblaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Sociedades'), array('controller' => 'sociedades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Sociedad'), array('controller' => 'sociedades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Sectores'), array('controller' => 'sectores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Sector'), array('controller' => 'sectores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Proyectos'), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
	</ul>
</div>
