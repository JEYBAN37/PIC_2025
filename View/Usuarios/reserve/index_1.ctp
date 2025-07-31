<div class="usuarios index">
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<h2><?php echo __('Usuarios'); ?></h2>
	

	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('group_id'); ?></th>
			<th><?php echo $this->Paginator->sort('actividad_id', 'Tema'); ?></th>
			<th><?php echo $this->Paginator->sort('numero', 'documento'); ?></th>
			<th><?php echo $this->Paginator->sort('nombres'); ?></th>			
			<th><?php echo $this->Paginator->sort('edad_id', 'Edad'); ?></th>
			<th><?php echo $this->Paginator->sort('celular'); ?></th>
			<th><?php echo $this->Paginator->sort('barrio'); ?></th>
			<th><?php echo $this->Paginator->sort('comuna_id'); ?></th>			
			<th><?php echo $this->Paginator->sort('fecha_reg', 'Registro'); ?></th>
			<th class="actions"><?php echo __('Opciones'); ?></th>
	</tr>
	<?php foreach ($usuarios as $usuario): ?>
	<tr>
		<td><?php echo h($usuario['Usuario']['id']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Group']['pertenece']); ?>&nbsp;</td>	
		<td><?php echo h($usuario['Actividad']['tema']); ?>&nbsp;</td>	
		<td><?php echo h($usuario['Usuario']['numero']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['nombres']); ?>&nbsp;</td>				
		<td><?php echo h($usuario['Edad']['rango']); ?>&nbsp;</td>			
		<td><?php echo h($usuario['Usuario']['celular']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['barrio']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Comuna']['comuna']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['fecha_reg']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view_1', $usuario['Usuario']['id'])); ?>
			
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('anterior'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('proximo') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Nuevo asistente'), array('action' => 'add_1')); ?></li>
		<li><?php echo $this->Html->link(__('Lista Comunitarios'), array('controller' => 'comunitarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Comunitario'), array('controller' => 'comunitarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Participantes'), array('controller' => 'participantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Participante'), array('controller' => 'participantes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Publicos'), array('controller' => 'publicos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Publico'), array('controller' => 'publicos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Sociales'), array('controller' => 'sociales', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Social'), array('controller' => 'sociales', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Registros'), array('controller' => 'registros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Registro'), array('controller' => 'registros', 'action' => 'add')); ?> </li>
	</ul>
</div>
