<?php $this->layout = 'tablas'?>
<?php echo $this->element('menuteam');?>



<?php
echo $this->Form->create("Integrante", array("action" => "nuebus" ));
echo $this->Form->input("Busqueda", array("Label" => "Integrante a buscar"));
echo "Buscar por: ".$this->Form->select("Campo",$Campos,array("empty" => false));
echo $this->Form->end("Consultar");

?>



<!--div class="actions">
		<ul>
	 <li>
	 <?php ?>
	 	<?php echo $this->Html->link(__('Nuevo registro',true),array('controller'=>'integrantes','action'=>'add'));?>
	 </li>
	</ul>
	</div>
	<br/-->


		

<table cellpadding="0" cellspacing="0">
	<tr>
	<?php
	if(empty($l)){
		echo "Sin resultados";
	} else {
	foreach ($l[0]["Integrante"] as $i => $v) {
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
		foreach($v["Integrante"] as $j => $w){
			echo "<td>".$w."</td>";
		}
		
		echo "<td>".$this->Html->link("Ver", "view/".$v["Integrante"]["id"])."</td>";
		echo "<td>".$this->Html->link("Editar", "edit/".$v["Integrante"]["id"])."</td>";


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
<div class="actions">
	
	<ul>
		<li><?php echo $this->Html->link(__('Actualizar'), array('controller' => 'integrantes', 'action' => 'nuebus')); ?> </li>			
		
	</ul>
		
</div>






