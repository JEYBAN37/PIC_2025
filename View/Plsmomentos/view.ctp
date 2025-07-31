<div class="plsmomentos view">
<h2><?php echo __('Plsmomento'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($plsmomento['Plsmomento']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Plsesion'); ?></dt>
		<dd>
			<?php echo $this->Html->link($plsmomento['Plsesion']['id'], array('controller' => 'plsesiones', 'action' => 'view', $plsmomento['Plsesion']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Momento'); ?></dt>
		<dd>
			<?php echo h($plsmomento['Plsmomento']['momento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Duracion'); ?></dt>
		<dd>
			<?php echo h($plsmomento['Plsmomento']['duracion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Metodologia'); ?></dt>
		<dd>
			<?php echo h($plsmomento['Plsmomento']['metodologia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Resultado'); ?></dt>
		<dd>
			<?php echo h($plsmomento['Plsmomento']['resultado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Insumo'); ?></dt>
		<dd>
			<?php echo h($plsmomento['Plsmomento']['insumo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Plsmomento'), array('action' => 'edit', $plsmomento['Plsmomento']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Plsmomento'), array('action' => 'delete', $plsmomento['Plsmomento']['id']), array(), __('Are you sure you want to delete # %s?', $plsmomento['Plsmomento']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Plsmomentos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Plsmomento'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Plsesiones'), array('controller' => 'plsesiones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Plsesion'), array('controller' => 'plsesiones', 'action' => 'add')); ?> </li>
	</ul>
</div>
