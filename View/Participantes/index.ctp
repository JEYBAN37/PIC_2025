<?php $this->layout = 'tablas'?>
<?php echo $this->element('menupart');?>



	<h2><?php echo __('Agentes Comunitarios'); ?></h2>

	<!--div class="actions">
		<ul>
	 <li>
	 <?php ?>
	 	<?php echo $this->Html->link(__('Buscar participante',true),array('controller'=>'usuarios','action'=>'nuebus'));?>
	 </li>
	</ul>	
	</div-->

	<h4><font><?php
	echo $this->Paginator->counter(array(
	'format' => __('Total: {:count} Agentes comunitarios')
	));
	?></fonrt></h4>



	<!--div class="actions">
		<ul>
	 <li>
	 <?php ?>
	<?php echo $this->Html->link(__('Export',true),array('controller'=>'participantes','action'=>'excel'));?> 
	
	 </li>
	</ul>
	</div>
	<br/-->
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha'); ?></th>
			<th><?php echo $this->Paginator->sort('usuario_id'); ?></th>			
			<th><?php echo $this->Paginator->sort('actividad_economica','Actividad'); ?></th>			
			<th><?php echo $this->Paginator->sort('sector'); ?></th>
			<th><?php echo $this->Paginator->sort('comuna_id'); ?></th>
			<th><?php echo $this->Paginator->sort('corregimiento'); ?></th>
			<th><?php echo $this->Paginator->sort('barrio_vereda','Barrio/vereda'); ?></th>				
			<th><?php echo $this->Paginator->sort('eps'); ?></th>
			<th><?php echo $this->Paginator->sort('discapacidad'); ?></th>			
			<th><?php echo $this->Paginator->sort('nombre_org','Organizacion'); ?></th>			
			<th class="actions"><?php echo __('Opciones'); ?></th>
	</tr>
	<?php foreach ($participantes as $participante): ?>
	<tr>
		<td><?php echo h($participante['Participante']['id']); ?>&nbsp;</td>
		<td><?php echo h($participante['Participante']['fecha']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($participante['Usuario']['nombres'], array('controller' => 'usuarios', 'action' => 'view', $participante['Usuario']['id'])); ?>
		</td>	
			
			
			
		<td><?php echo h($participante['Participante']['actividad_economica']); ?>&nbsp;</td>			
		<td><?php echo h($participante['Participante']['sector']); ?>&nbsp;</td>
		<td><?php echo h($participante['Comuna']['id']); ?>&nbsp;</td>		
		<td><?php echo h($participante['Participante']['corregimiento']); ?>&nbsp;</td>
		<td><?php echo h($participante['Participante']['barrio_vereda']); ?>&nbsp;</td>	
		<td><?php echo h($participante['Participante']['eps']); ?>&nbsp;</td>
		<td><?php echo h($participante['Participante']['discapacidad']); ?>&nbsp;</td>		
		<td><?php echo h($participante['Participante']['nombre_org']); ?>&nbsp;</td>		
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $participante['Participante']['id'])); ?>
			
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
