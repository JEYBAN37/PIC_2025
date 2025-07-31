<?php $this->layout = 'tablas'?>
<div class="personasActividades index">

<?php
echo $this->Form->create("PersonasActividad", array("action" => "nuebus"));
echo $this->Form->input("Busqueda", array("Label" => "Actividad a buscar"));
echo "Buscar por: ".$this->Form->select("Campo",$Campos,array("empty" => false));
echo $this->Form->end("Consultar");

?>

<div class="actions">
		<ul>
	 <li>
	 <?php ?>
	 	<?php echo $this->Html->link(__('Export',true),array('controller'=>'personasActividades','action'=>'excel'));?>
	 </li>
	</ul>
	</div>
	<br/>

<table cellpadding="0" cellspacing="0">
	<tr>
	<?php
	if(empty($l)){
		echo "Sin resultados";
	} else {
	foreach ($l[0]["PersonasActividad"] as $i => $v) {
		echo "<th>".$i."</th>";
	}
	}
	echo "<th>Ver</th>";
	?>
	</tr>

	<div class="actions">

	<?php
	foreach($l as $i => $v){
		echo "<tr>";
		foreach($v["PersonasActividad"] as $j => $w){
			echo "<td>".$w."</td>";
		}
		
		echo "<td>".$this->Html->link("Ver", "view/".$v["PersonasActividad"]["id"])."</td>";	

		echo "</tr>";
	}
	?></div>


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

		<li><?php echo $this->Html->link(__('Nuevo Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>	
		<li><?php echo $this->Html->link(__('Nueva Actividad'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Asignar actividad'), array('controller' => 'Personasactividad', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Actualizar'), array('controller' => 'actividades', 'action' => 'nuebus')); ?> </li>

	</ul>
</div>

