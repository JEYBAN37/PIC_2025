<?php $this->layout='tablas'?>
<?php echo $this->element('menuteam');?>
	<h2><?php echo __('Integrantes'); ?></h2>

	<!--div class="actions">
		<ul>
	 <li>
	 <?php ?>
	 	<?php echo $this->Html->link(__('Consultar',true),array('controller'=>'integrantes','action'=>'nuebus'));?>
	 </li>
	</ul>	
	</div>

	<br/-->
	

	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>			
			<th><?php echo $this->Paginator->sort('nombres'); ?></th>			
			<th><?php echo $this->Paginator->sort('day_id','fecha Nac.'); ?></th>			
			<th><?php echo $this->Paginator->sort('genero_id'); ?></th>			
			<th><?php echo $this->Paginator->sort('celular'); ?></th>
			<th><?php echo $this->Paginator->sort('telefono'); ?></th>
			<th><?php echo $this->Paginator->sort('correo'); ?></th>		
			<th><?php echo $this->Paginator->sort('cargo'); ?></th>
			<th><?php echo $this->Paginator->sort('ano_id','experiencia'); ?></th>			
			<th class="actions"><?php echo __('Opciones'); ?></th>
	</tr>
	<?php foreach ($integrantes as $integrante): ?>
	<tr>
		<td><?php echo h($integrante['Integrante']['id']); ?>&nbsp;</td>		
		<td><?php echo h($integrante['Integrante']['nombres']); ?>&nbsp;</td>
		<td><?php echo h($integrante['Day']['dia']); ?>	<?php echo h($integrante['Month']['mes']); ?> <?php echo h($integrante['Fecha']['año']); ?></td>		
		<td><?php echo h($integrante['Genero']['genero']); ?>&nbsp;</td>	    
		<td><?php echo h($integrante['Integrante']['celular']); ?>&nbsp;</td>
		<td><?php echo h($integrante['Integrante']['telefono']); ?>&nbsp;</td>
		<td><?php echo h($integrante['Integrante']['correo']); ?>&nbsp;</td>		
		<td><?php echo h($integrante['Integrante']['cargo']); ?>&nbsp;</td>
		<td><?php echo h($integrante['Ano']['años']); ?>a&ntilde;os <?php echo h($integrante['Mes']['mes']); ?>meses&nbsp;</td>		
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $integrante['Integrante']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'Edit', $integrante['Integrante']['id'])); ?>
			
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
		echo $this->Paginator->prev('< ' . __('Anterior'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('Siguiente') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>

