<div class="participanteseventos view">
<h2><?php echo __('Participantesevento'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($participantesevento['Participantesevento']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Persona'); ?></dt>
		<dd>
			<?php echo $this->Html->link($participantesevento['Persona']['id'], array('controller' => 'personas', 'action' => 'view', $participantesevento['Persona']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Infoevento'); ?></dt>
		<dd>
			<?php echo $this->Html->link($participantesevento['Infoevento']['id'], array('controller' => 'infoeventos', 'action' => 'view', $participantesevento['Infoevento']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Registro'); ?></dt>
		<dd>
			<?php echo h($participantesevento['Participantesevento']['registro']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Participantesevento'), array('action' => 'edit', $participantesevento['Participantesevento']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Participantesevento'), array('action' => 'delete', $participantesevento['Participantesevento']['id']), array(), __('Are you sure you want to delete # %s?', $participantesevento['Participantesevento']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Participanteseventos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Participantesevento'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Infoeventos'), array('controller' => 'infoeventos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Infoevento'), array('controller' => 'infoeventos', 'action' => 'add')); ?> </li>
	</ul>
</div>
