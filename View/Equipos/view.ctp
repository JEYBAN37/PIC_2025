<div class="equipos view">
<h2><?php echo __('Equipo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($equipo['Equipo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dependencia'); ?></dt>
		<dd>
			<?php echo h($equipo['Equipo']['dependencia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Eje'); ?></dt>
		<dd>
			<?php echo h($equipo['Equipo']['eje']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dimension'); ?></dt>
		<dd>
			<?php echo h($equipo['Equipo']['dimension']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Equipo'), array('action' => 'edit', $equipo['Equipo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Equipo'), array('action' => 'delete', $equipo['Equipo']['id']), array(), __('Are you sure you want to delete # %s?', $equipo['Equipo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Equipos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipo'), array('action' => 'add')); ?> </li>
	</ul>
</div>
