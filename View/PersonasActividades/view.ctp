<div class="personasActividades view">
<h2><?php echo __('Personas Actividad'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($personasActividad['PersonasActividad']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Persona'); ?></dt>
		<dd>
			<?php echo $this->Html->link($personasActividad['Persona']['identificacion'], array('controller' => 'personas', 'action' => 'view', $personasActividad['Persona']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Actividad'); ?></dt>
		<dd>
			<?php echo $this->Html->link($personasActividad['Actividad']['id'], array('controller' => 'actividades', 'action' => 'view', $personasActividad['Actividad']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Registro'); ?></dt>
		<dd>
			<?php echo h($personasActividad['PersonasActividad']['registro']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Personas Actividad'), array('action' => 'edit', $personasActividad['PersonasActividad']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Personas Actividad'), array('action' => 'delete', $personasActividad['PersonasActividad']['id']), array(), __('Are you sure you want to delete # %s?', $personasActividad['PersonasActividad']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Personas Actividades'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Personas Actividad'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actividades'), array('controller' => 'actividades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actividad'), array('controller' => 'actividades', 'action' => 'add')); ?> </li>
	</ul>
</div>
