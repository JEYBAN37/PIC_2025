<div class="estudios view">
<h2><?php echo __('Estudio'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($estudio['Estudio']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estudio'); ?></dt>
		<dd>
			<?php echo h($estudio['Estudio']['estudio']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Estudio'), array('action' => 'edit', $estudio['Estudio']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Estudio'), array('action' => 'delete', $estudio['Estudio']['id']), array(), __('Are you sure you want to delete # %s?', $estudio['Estudio']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Estudios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estudio'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Participantes'), array('controller' => 'participantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Participante'), array('controller' => 'participantes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Participantes'); ?></h3>
	<?php if (!empty($estudio['Participante'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('NumCel'); ?></th>
		<th><?php echo __('Telefono'); ?></th>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('CorreEle'); ?></th>
		<th><?php echo __('Estudio'); ?></th>
		<th><?php echo __('PrefSexual'); ?></th>
		<th><?php echo __('Fecha'); ?></th>
		<th><?php echo __('Victima'); ?></th>
		<th><?php echo __('Actividad'); ?></th>
		<th><?php echo __('ExperienciaLab'); ?></th>
		<th><?php echo __('Direccion'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($estudio['Participante'] as $participante): ?>
		<tr>
			<td><?php echo $participante['numCel']; ?></td>
			<td><?php echo $participante['telefono']; ?></td>
			<td><?php echo $participante['id']; ?></td>
			<td><?php echo $participante['correEle']; ?></td>
			<td><?php echo $participante['estudio']; ?></td>
			<td><?php echo $participante['prefSexual']; ?></td>
			<td><?php echo $participante['fecha']; ?></td>
			<td><?php echo $participante['victima']; ?></td>
			<td><?php echo $participante['actividad']; ?></td>
			<td><?php echo $participante['experienciaLab']; ?></td>
			<td><?php echo $participante['direccion']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'participantes', 'action' => 'view', $participante['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'participantes', 'action' => 'edit', $participante['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'participantes', 'action' => 'delete', $participante['id']), array(), __('Are you sure you want to delete # %s?', $participante['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Participante'), array('controller' => 'participantes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
