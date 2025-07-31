<div class="participantesprocesos view">
<h2><?php echo __('Participantesproceso'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($participantesproceso['Participantesproceso']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Persona'); ?></dt>
		<dd>
			<?php echo $this->Html->link($participantesproceso['Persona']['id'], array('controller' => 'personas', 'action' => 'view', $participantesproceso['Persona']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Procesoregistro'); ?></dt>
		<dd>
			<?php echo $this->Html->link($participantesproceso['Procesoregistro']['id'], array('controller' => 'procesoregistros', 'action' => 'view', $participantesproceso['Procesoregistro']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecharegistro'); ?></dt>
		<dd>
			<?php echo h($participantesproceso['Participantesproceso']['fecharegistro']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Participantesproceso'), array('action' => 'edit', $participantesproceso['Participantesproceso']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Participantesproceso'), array('action' => 'delete', $participantesproceso['Participantesproceso']['id']), array(), __('Are you sure you want to delete # %s?', $participantesproceso['Participantesproceso']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Participantesprocesos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Participantesproceso'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Procesoregistros'), array('controller' => 'procesoregistros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Procesoregistro'), array('controller' => 'procesoregistros', 'action' => 'add')); ?> </li>
	</ul>
</div>
