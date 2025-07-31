
<?php $this->layout='tablas'?>
<?php echo $this->element('menuorgc');?>
	<h2><?php echo __('Organizaciones Comunitarias'); ?></h2>

	<!--div class="actions">
		<ul>
	 <li>
	 <?php ?>
	 	<?php echo $this->Html->link(__('Consultar',true),array('controller'=>'comunitarios','action'=>'nuebus'));?>
	 </li>
	</ul>	
	</div>

		<!--div class="actions">
		<ul>
	 <li>
	 <?php ?>
	 	<?php echo $this->Html->link(__('Export',true),array('controller'=>'comunitarios','action'=>'excel'));?>
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
			<th><?php echo $this->Paginator->sort('usuario_id','Contacto'); ?></th>
			<th><?php echo $this->Paginator->sort('representante'); ?></th>
			<th><?php echo $this->Paginator->sort('tel_representante','numero contacto'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre_org','organización'); ?></th>
			<!--th><?php echo $this->Paginator->sort('objetivo'); ?></th-->	
			<th><?php echo $this->Paginator->sort('comuna_id'); ?></th>
			<th><?php echo $this->Paginator->sort('corregimiento'); ?></th>
			<th><?php echo $this->Paginator->sort('barrio_vereda'); ?></th>
			<th><?php echo $this->Paginator->sort('direccion','dirección'); ?></th>
			<th><?php echo $this->Paginator->sort('telefono','teléfono'); ?></th>
			<th><?php echo $this->Paginator->sort('correo','email'); ?></th>		
					
			<th class="actions"><?php echo __('Opciones'); ?></th>
	</tr>
	<?php foreach ($comunitarios as $comunitario): ?>
	<tr>
		<td><?php echo h($comunitario['Comunitario']['id']); ?>&nbsp;</td>
		<td><?php echo h($comunitario['Comunitario']['fecha']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($comunitario['Usuario']['nombres'], array('controller' => 'usuarios', 'action' => 'view', $comunitario['Usuario']['id'])); ?>
		</td>
		<td><?php echo h($comunitario['Comunitario']['representante']); ?>&nbsp;</td>
		<td><?php echo h($comunitario['Comunitario']['tel_representante']); ?>&nbsp;</td>
		<td><?php echo h($comunitario['Comunitario']['nombre_org']); ?>&nbsp;</td>
		<!--td><?php echo h($comunitario['Comunitario']['objetivo']); ?>&nbsp;</td-->
		<td><?php echo h($comunitario['Comuna']['comuna']); ?>&nbsp;</td>		
		<td><?php echo h($comunitario['Comunitario']['corregimiento']); ?>&nbsp;</td>
		<td><?php echo h($comunitario['Comunitario']['barrio_vereda']); ?>&nbsp;</td>
		<td><?php echo h($comunitario['Comunitario']['direccion']); ?>&nbsp;</td>
		<td><?php echo h($comunitario['Comunitario']['telefono']); ?>&nbsp;</td>
		<td><?php echo h($comunitario['Comunitario']['correo']); ?>&nbsp;</td>
		
		
		<td class="actions">
			<?php echo $this->Html->link(__('ver'), array('action' => 'view', $comunitario['Comunitario']['id'])); ?>
			
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
