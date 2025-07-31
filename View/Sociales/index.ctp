
<?php $this->layout='tablas'?>
<?php echo $this->element('menuorgs');?>
	<h2><?php echo __('Organizaciones Sociales'); ?></h2>

		<!--div class="actions">
		<ul>
	 <li>
	 <?php ?>
	 	<?php echo $this->Html->link(__('Consultar',true),array('controller'=>'sociales','action'=>'nuebus'));?>
	 </li>
	</ul>	
	</div>

		<!--div class="actions">
		<ul>
	 <li>
	 <?php ?>
	 	<?php echo $this->Html->link(__('Export',true),array('controller'=>'sociales','action'=>'excel'));?>
	 </li>
	</ul>
	</div>
	<br/-->
	<h4><font><?php
	echo $this->Paginator->counter(array(
	'format' => __('Total: {:count} Organizaciones')
	));
	?></fonrt></h4>

	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha'); ?></th>
			<th><?php echo $this->Paginator->sort('usuario_id','contacto'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre_org'); ?></th>
			<th><?php echo $this->Paginator->sort('representante'); ?></th>
			<!--th><?php echo $this->Paginator->sort('objetivo'); ?></th-->
			<th><?php echo $this->Paginator->sort('comuna_id'); ?></th>
			<th><?php echo $this->Paginator->sort('corregimiento'); ?></th>
			<th><?php echo $this->Paginator->sort('barrio_vereda'); ?></th>
			<th><?php echo $this->Paginator->sort('direccion'); ?></th>
			<th><?php echo $this->Paginator->sort('telefono'); ?></th>
			<th><?php echo $this->Paginator->sort('correo'); ?></th>			
			<th><?php echo $this->Paginator->sort('sociedad_id'); ?></th>			
			<th class="actions"><?php echo __('Opciones'); ?></th>
	</tr>
	<?php foreach ($sociales as $sociale): ?>
	<tr>
		<td><?php echo h($sociale['Sociale']['id']); ?>&nbsp;</td>
		<td><?php echo h($sociale['Sociale']['fecha']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($sociale['Usuario']['nombres'], array('controller' => 'usuarios', 'action' => 'view', $sociale['Usuario']['id'])); ?>
		</td>
		<td><?php echo h($sociale['Sociale']['nombre_org']); ?>&nbsp;</td>
		<td><?php echo h($sociale['Sociale']['representante']); ?>&nbsp;</td>
        <!--td><?php echo h($sociale['Sociale']['objetivo']); ?>&nbsp;</td-->
		<td><?php echo h($sociale['Comuna']['id']); ?>&nbsp;</td>		
		<td><?php echo h($sociale['Sociale']['corregimiento']); ?>&nbsp;</td>
		<td><?php echo h($sociale['Sociale']['barrio_vereda']); ?>&nbsp;</td>
		<td><?php echo h($sociale['Sociale']['direccion']); ?>&nbsp;</td>
		<td><?php echo h($sociale['Sociale']['telefono']); ?>&nbsp;</td>
		<td><?php echo h($sociale['Sociale']['correo']); ?>&nbsp;</td>		
		<td><?php echo h($sociale['Sociedad']['id']); ?>&nbsp;</td>		
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $sociale['Sociale']['id'])); ?>
			
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Pagina{:page} de {:pages}, se muestran {:current} registros de {:count} total')
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

