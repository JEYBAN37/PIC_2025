<div class="referentes index">
	<h2><?php echo __('Referentes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('tipodoc'); ?></th>
			<th><?php echo $this->Paginator->sort('numero'); ?></th>
			<th><?php echo $this->Paginator->sort('nombres'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_nac'); ?></th>
			<th><?php echo $this->Paginator->sort('celular'); ?></th>
			<th><?php echo $this->Paginator->sort('telefono'); ?></th>
			<th><?php echo $this->Paginator->sort('correo'); ?></th>
			<th><?php echo $this->Paginator->sort('profesion'); ?></th>
			<th><?php echo $this->Paginator->sort('cargo'); ?></th>
			<th><?php echo $this->Paginator->sort('familiar'); ?></th>
			<th><?php echo $this->Paginator->sort('parentesco'); ?></th>
			<th><?php echo $this->Paginator->sort('tel_familiar'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($referentes as $referente): ?>
	<tr>
		<td><?php echo h($referente['Referente']['id']); ?>&nbsp;</td>
		<td><?php echo h($referente['Referente']['tipodoc']); ?>&nbsp;</td>
		<td><?php echo h($referente['Referente']['numero']); ?>&nbsp;</td>
		<td><?php echo h($referente['Referente']['nombres']); ?>&nbsp;</td>
		<td><?php echo h($referente['Referente']['fecha_nac']); ?>&nbsp;</td>
		<td><?php echo h($referente['Referente']['celular']); ?>&nbsp;</td>
		<td><?php echo h($referente['Referente']['telefono']); ?>&nbsp;</td>
		<td><?php echo h($referente['Referente']['correo']); ?>&nbsp;</td>
		<td><?php echo h($referente['Referente']['profesion']); ?>&nbsp;</td>
		<td><?php echo h($referente['Referente']['cargo']); ?>&nbsp;</td>
		<td><?php echo h($referente['Referente']['familiar']); ?>&nbsp;</td>
		<td><?php echo h($referente['Referente']['parentesco']); ?>&nbsp;</td>
		<td><?php echo h($referente['Referente']['tel_familiar']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $referente['Referente']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $referente['Referente']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $referente['Referente']['id']), array(), __('Are you sure you want to delete # %s?', $referente['Referente']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Referente'), array('action' => 'add')); ?></li>
	</ul>
</div>
