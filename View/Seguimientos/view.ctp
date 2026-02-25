<div class="seguimientos view">
<h2><?php echo __('Seguimiento'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($seguimiento['Seguimiento']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Producto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($seguimiento['Producto']['nombredim'], array('controller' => 'productos', 'action' => 'view', $seguimiento['Producto']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha'); ?></dt>
		<dd>
			<?php echo h($seguimiento['Seguimiento']['fecha']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valorprogramado'); ?></dt>
		<dd>
			<?php echo h($seguimiento['Seguimiento']['valorprogramado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valorejecutado'); ?></dt>
		<dd>
			<?php echo h($seguimiento['Seguimiento']['valorejecutado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Observacionoperador'); ?></dt>
		<dd>
			<?php echo h($seguimiento['Seguimiento']['observacionoperador']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Observacionreferente'); ?></dt>
		<dd>
			<?php echo h($seguimiento['Seguimiento']['observacionreferente']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado'); ?></dt>
		<dd>
			<?php echo h($seguimiento['Seguimiento']['estado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Limitantes'); ?></dt>
		<dd>
			<?php echo h($seguimiento['Seguimiento']['limitantes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Acompanamiento'); ?></dt>
		<dd>
			<?php echo h($seguimiento['Seguimiento']['acompanamiento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcionacompanamiento'); ?></dt>
		<dd>
			<?php echo h($seguimiento['Seguimiento']['descripcionacompanamiento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Enlace1'); ?></dt>
		<dd>
			<?php echo h($seguimiento['Seguimiento']['enlace1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Enlace2'); ?></dt>
		<dd>
			<?php echo h($seguimiento['Seguimiento']['enlace2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Referente'); ?></dt>
		<dd>
			<?php echo $this->Html->link($seguimiento['Referente']['nombres'], array('controller' => 'referentes', 'action' => 'view', $seguimiento['Referente']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Responsable'); ?></dt>
		<dd>
			<?php echo $this->Html->link($seguimiento['Responsable']['nombres'], array('controller' => 'responsables', 'action' => 'view', $seguimiento['Responsable']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Productoanexo'); ?></dt>
		<dd>
			<?php echo h($seguimiento['Seguimiento']['productoanexo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dirproductoanexo'); ?></dt>
		<dd>
			<?php echo h($seguimiento['Seguimiento']['dirproductoanexo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Update Date'); ?></dt>
		<dd>
			<?php echo h($seguimiento['Seguimiento']['update_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($seguimiento['Seguimiento']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Seguimiento'), array('action' => 'edit', $seguimiento['Seguimiento']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Seguimiento'), array('action' => 'delete', $seguimiento['Seguimiento']['id']), array(), __('Are you sure you want to delete # %s?', $seguimiento['Seguimiento']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Seguimientos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Seguimiento'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Referentes'), array('controller' => 'referentes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Referente'), array('controller' => 'referentes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Responsables'), array('controller' => 'responsables', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Responsable'), array('controller' => 'responsables', 'action' => 'add')); ?> </li>
	</ul>
</div>
