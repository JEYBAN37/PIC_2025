
	<?php $this->layout='tablas'?>
	<?php echo $this->element('menuinst');?>
	<h2><?php echo __('Instituciones Públicas'); ?></h2>

		<!--div class="actions">
		<ul>
	 <li>
	 <?php ?>
	 	<?php echo $this->Html->link(__('Consultar',true),array('controller'=>'publicos','action'=>'nuebus'));?>
	 </li>
	</ul>	
	</div>

		<!--div class="actions">
		<ul>
	 <li>
	 <?php ?>
	 	<?php echo $this->Html->link(__('Export',true),array('controller'=>'publicos','action'=>'excel'));?>
	 </li>
	</ul>
	</div>
	<br/-->
	<h4><font><?php
	echo $this->Paginator->counter(array(
	'format' => __('Total: {:count} Instituciones')
	));
	?></fonrt></h4>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha'); ?></th>
			<th><?php echo $this->Paginator->sort('usuario_id','Contacto'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre_inst','Nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('representante'); ?></th>
			<th><?php echo $this->Paginator->sort('nivel'); ?></th>
			<!--th><?php echo $this->Paginator->sort('objetivo'); ?></th-->
			<th><?php echo $this->Paginator->sort('comuna_id'); ?></th>
			<th><?php echo $this->Paginator->sort('corregimiento'); ?></th>
			<th><?php echo $this->Paginator->sort('barrio_vereda','Barrio/vereda'); ?></th>
			<th><?php echo $this->Paginator->sort('direccion'); ?></th>
			<th><?php echo $this->Paginator->sort('telefono'); ?></th>
			<th><?php echo $this->Paginator->sort('correo'); ?></th>
			<!--th><?php echo $this->Paginator->sort('web'); ?></th-->		
			<th class="actions"><?php echo __('Opciones'); ?></th>
	</tr>
	<?php foreach ($publicos as $publico): ?>
	<tr>
		<td><?php echo h($publico['Publico']['id']); ?>&nbsp;</td>
		<td><?php echo h($publico['Publico']['fecha']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($publico['Usuario']['nombres'], array('controller' => 'usuarios', 'action' => 'view', $publico['Usuario']['id'])); ?>
		</td>
		<td><?php echo h($publico['Publico']['nombre_inst']); ?>&nbsp;</td>
		<td><?php echo h($publico['Publico']['representante']); ?>&nbsp;</td>
		<td><?php echo h($publico['Publico']['nivel']); ?>&nbsp;</td>
		<!--td><?php echo h($publico['Publico']['objetivo']); ?>&nbsp;</td-->
		<td><?php echo h($publico['Comuna']['id']); ?>&nbsp;</td>
		<td><?php echo h($publico['Publico']['corregimiento']); ?>&nbsp;</td>
		<td><?php echo h($publico['Publico']['barrio_vereda']); ?>&nbsp;</td>
		<td><?php echo h($publico['Publico']['direccion']); ?>&nbsp;</td>
		<td><?php echo h($publico['Publico']['telefono']); ?>&nbsp;</td>
		<td><?php echo h($publico['Publico']['correo']); ?>&nbsp;</td>
		<!--td><?php echo h($publico['Publico']['web']); ?>&nbsp;</td-->			
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $publico['Publico']['id'])); ?>
			
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

