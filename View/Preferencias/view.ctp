<div class="preferencias view">
<h2><?php echo __('Preferencia'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($preferencia['Preferencia']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Preferencia'); ?></dt>
		<dd>
			<?php echo h($preferencia['Preferencia']['preferencia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Caracteristicas'); ?></dt>
		<dd>
			<?php echo h($preferencia['Preferencia']['caracteristicas']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Preferencia'), array('action' => 'edit', $preferencia['Preferencia']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Preferencia'), array('action' => 'delete', $preferencia['Preferencia']['id']), array(), __('Are you sure you want to delete # %s?', $preferencia['Preferencia']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Preferencias'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Preferencia'), array('action' => 'add')); ?> </li>
	</ul>
</div>
