<div class="profesiones view">
<h2><?php echo __('Profesion'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($profesion['Profesion']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Profesion'); ?></dt>
		<dd>
			<?php echo h($profesion['Profesion']['profesion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Perfilprofesion'); ?></dt>
		<dd>
			<?php echo h($profesion['Profesion']['perfilprofesion']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Profesion'), array('action' => 'edit', $profesion['Profesion']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Profesion'), array('action' => 'delete', $profesion['Profesion']['id']), array(), __('Are you sure you want to delete # %s?', $profesion['Profesion']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Profesiones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Profesion'), array('action' => 'add')); ?> </li>
	</ul>
</div>
