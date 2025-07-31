<div class="victimas view">
<h2><?php echo __('Victima'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($victima['Victima']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Victima'); ?></dt>
		<dd>
			<?php echo h($victima['Victima']['victima']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Victima'), array('action' => 'edit', $victima['Victima']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Victima'), array('action' => 'delete', $victima['Victima']['id']), array(), __('Are you sure you want to delete # %s?', $victima['Victima']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Victimas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Victima'), array('action' => 'add')); ?> </li>
	</ul>
</div>
