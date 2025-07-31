<?php $this->layout = 'tablas'?>
<?php echo $this->element('menupart');?>


<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />


	<h2><?php echo __('Participantes'); ?></h2>

	<!--div class="actions">
		<ul>
	 <li>
	 <?php ?>
	 	<?php echo $this->Html->link(__('Consultar',true),array('controller'=>'usuarios','action'=>'nuebus'));?>
	 </li>
	</ul>	
	</div>

	<br/-->
	<h4><font><?php
	echo $this->Paginator->counter(array(
	'format' => __('Total: {:count} participantes')
	));
	?></fonrt></h4>

	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombres'); ?></th>			
			<th><?php echo $this->Paginator->sort('genero_id', 'Genero'); ?></th>
			<th><?php echo $this->Paginator->sort('group_id', 'Grupo'); ?></th>
			<th><?php echo $this->Paginator->sort('celular'); ?></th>
			<th><?php echo $this->Paginator->sort('telefono'); ?></th>
			<th><?php echo $this->Paginator->sort('correo'); ?></th>	
			<th><?php echo $this->Paginator->sort('cargo','Ocupacion'); ?></th>
			
		
		
			<th class="actions"><?php echo __('Opciones'); ?></th>
	</tr>
	<?php foreach ($usuarios as $usuario): ?>


	<tr>
		<td><?php echo h($usuario['Usuario']['id']); ?>&nbsp;</td>			
		
		<td><?php echo h($usuario['Usuario']['nombres']); ?>&nbsp;</td>	
		
		<td><?php echo h($usuario['Genero']['genero']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Group']['pertenece']); ?>&nbsp;</td>		
		<td><?php echo h($usuario['Usuario']['celular']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['telefono']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['correo']); ?>&nbsp;</td>		
		<td><?php echo h($usuario['Usuario']['cargo']); ?>&nbsp;</td>
		
		
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $usuario['Usuario']['id'])); ?>
			
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
