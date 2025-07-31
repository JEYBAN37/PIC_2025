<div class="entidades view">
<h2><?php echo __('Entidad'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($entidad['Entidad']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Entidad'); ?></dt>
		<dd>
			<?php echo $this->Html->link($entidad['Entidad']['id'], array('controller' => 'entidades', 'action' => 'view', $entidad['Entidad']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Proyecto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($entidad['Proyecto']['id'], array('controller' => 'proyectos', 'action' => 'view', $entidad['Proyecto']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Entidad'), array('action' => 'edit', $entidad['Entidad']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Entidad'), array('action' => 'delete', $entidad['Entidad']['id']), array(), __('Are you sure you want to delete # %s?', $entidad['Entidad']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Entidades'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entidad'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Entidades'), array('controller' => 'entidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entidad'), array('controller' => 'entidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proyectos'), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Smseventos'), array('controller' => 'smseventos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Smsevento'), array('controller' => 'smseventos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Entidades'); ?></h3>
	<?php if (!empty($entidad['Entidad'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Entidad Id'); ?></th>
		<th><?php echo __('Proyecto Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($entidad['Entidad'] as $entidad): ?>
		<tr>
			<td><?php echo $entidad['id']; ?></td>
			<td><?php echo $entidad['entidad_id']; ?></td>
			<td><?php echo $entidad['proyecto_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'entidades', 'action' => 'view', $entidad['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'entidades', 'action' => 'edit', $entidad['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'entidades', 'action' => 'delete', $entidad['id']), array(), __('Are you sure you want to delete # %s?', $entidad['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Entidad'), array('controller' => 'entidades', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Proyectos'); ?></h3>
	<?php if (!empty($entidad['Proyecto'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Entidad Id'); ?></th>
		<th><?php echo __('Nombreproyecto'); ?></th>
		<th><?php echo __('Objetivo'); ?></th>
		<th><?php echo __('Poblacion Id'); ?></th>
		<th><?php echo __('Vigencia'); ?></th>
		<th><?php echo __('Duracion'); ?></th>
		<th><?php echo __('Ubicacion Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($entidad['Proyecto'] as $proyecto): ?>
		<tr>
			<td><?php echo $proyecto['id']; ?></td>
			<td><?php echo $proyecto['entidad_id']; ?></td>
			<td><?php echo $proyecto['nombreproyecto']; ?></td>
			<td><?php echo $proyecto['objetivo']; ?></td>
			<td><?php echo $proyecto['poblacion_id']; ?></td>
			<td><?php echo $proyecto['vigencia']; ?></td>
			<td><?php echo $proyecto['duracion']; ?></td>
			<td><?php echo $proyecto['ubicacion_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'proyectos', 'action' => 'view', $proyecto['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'proyectos', 'action' => 'edit', $proyecto['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'proyectos', 'action' => 'delete', $proyecto['id']), array(), __('Are you sure you want to delete # %s?', $proyecto['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Smseventos'); ?></h3>
	<?php if (!empty($entidad['Smsevento'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Fuenteevento Id'); ?></th>
		<th><?php echo __('Dimension Id'); ?></th>
		<th><?php echo __('Evento Id'); ?></th>
		<th><?php echo __('Ubicaciones Id'); ?></th>
		<th><?php echo __('Fechareporte'); ?></th>
		<th><?php echo __('Entidad Id'); ?></th>
		<th><?php echo __('Identificacion'); ?></th>
		<th><?php echo __('Nombres'); ?></th>
		<th><?php echo __('Apellidos'); ?></th>
		<th><?php echo __('Fechanac'); ?></th>
		<th><?php echo __('Edad'); ?></th>
		<th><?php echo __('Regimen'); ?></th>
		<th><?php echo __('Aseguradora Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($entidad['Smsevento'] as $smsevento): ?>
		<tr>
			<td><?php echo $smsevento['id']; ?></td>
			<td><?php echo $smsevento['fuenteevento_id']; ?></td>
			<td><?php echo $smsevento['dimension_id']; ?></td>
			<td><?php echo $smsevento['evento_id']; ?></td>
			<td><?php echo $smsevento['ubicaciones_id']; ?></td>
			<td><?php echo $smsevento['fechareporte']; ?></td>
			<td><?php echo $smsevento['entidad_id']; ?></td>
			<td><?php echo $smsevento['identificacion']; ?></td>
			<td><?php echo $smsevento['nombres']; ?></td>
			<td><?php echo $smsevento['apellidos']; ?></td>
			<td><?php echo $smsevento['fechanac']; ?></td>
			<td><?php echo $smsevento['edad']; ?></td>
			<td><?php echo $smsevento['regimen']; ?></td>
			<td><?php echo $smsevento['aseguradora_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'smseventos', 'action' => 'view', $smsevento['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'smseventos', 'action' => 'edit', $smsevento['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'smseventos', 'action' => 'delete', $smsevento['id']), array(), __('Are you sure you want to delete # %s?', $smsevento['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Smsevento'), array('controller' => 'smseventos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
