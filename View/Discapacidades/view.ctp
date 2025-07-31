<div class="discapacidades view">
<h2><?php echo __('Discapacidad'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($discapacidad['Discapacidad']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Discapacidad'); ?></dt>
		<dd>
			<?php echo h($discapacidad['Discapacidad']['discapacidad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Caracteristica'); ?></dt>
		<dd>
			<?php echo h($discapacidad['Discapacidad']['caracteristica']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Discapacidad'), array('action' => 'edit', $discapacidad['Discapacidad']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Discapacidad'), array('action' => 'delete', $discapacidad['Discapacidad']['id']), array(), __('Are you sure you want to delete # %s?', $discapacidad['Discapacidad']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Discapacidades'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Discapacidad'), array('action' => 'add')); ?> </li>
	</ul>
</div>
