<div class="registros view">
<h2><?php echo __('Registro de participación'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($registro['Registro']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usuario'); ?></dt>
		<dd>
			<?php echo $this->Html->link($registro['Usuario']['nombres'], array('controller' => 'usuarios', 'action' => 'view', $registro['Usuario']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Actividad'); ?></dt>
		<dd>
			<?php echo $this->Html->link($registro['Actividad']['tema'], array('controller' => 'actividades', 'action' => 'view', $registro['Actividad']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
