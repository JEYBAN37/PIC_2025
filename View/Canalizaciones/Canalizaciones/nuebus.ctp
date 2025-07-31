<?php $this->layout = 'tablas'?>
<div class="action">


	<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>

		<li> <a  href="../users/bienvenida" >Inicio</a>
					
		<?php echo $this->Html->link(__('Nueva canalización'), array('action' => 'add')); ?></li>
		
		
		

				
	</ul>
</div>


<?php
echo $this->Form->create("Canalizacion", array("action" => "nuebus"));
echo $this->Form->select("Campo",$Campos,array("empty" => false));



echo $this->Form->input("Identificacion", array("label" => "Buscar por identificación"));
echo $this->Form->input("Nombres", array("label" => "Nombre a buscar"));
echo $this->Form->input("Apellidos", array("label" => "Apellidos a buscar"));

$option7 = array ('' => 'Elegir','Promoción y mantenimiento de la salud' => 'Promoción y mantenimiento de la salud', 'Materno perinatal' => 'Materno perinatal', 'Enfermedades infecciosas' => 'Enfermedades infecciosas', 'Cardio - Cerebro - Vascular' => 'Cardio - Cerebro - Vascular','Cáncer' => 'Cáncer', 'Alteraciones nutricionales' => 'Alteraciones nutricionales', 'Transtornos asociados al consumo de SPA' => 'Transtornos asociados al consumo de SPA', 'Ninguna' => 'Ninguna');
		
		echo $this->Form->input('Ria', array('label'=> 'Ria a buscar', 'type' => 'select', 'options' => $option7));


echo $this->Form->input("Concepto", array("label" => "Verificar asistensia"));


echo $this->Form->end("Consultar");

?>

<table cellpadding="0" cellspacing="0">
	<tr>
	<?php
	if(empty($l)){
		 echo "<br> Por favor seleccione otra opción de consulta </br>";
		
	} else {
	foreach ($l[0]["Canalizacion"] as $i => $v) {
		echo "<th>".$i."</th>";
	}
	}
	echo "<th>Editar</th>";
	echo "<th>Ver</th>";

	?>
	</tr>

	<div class="actions">
	
	<ul>
	 <li>
	 <?php ?>
	 	<?php echo $this->Html->link(__('Exportar',true),array('controller'=>'canalizaciones','action'=>'excel'));?>
	 </li>
	</ul>

	<?php
	foreach($l as $i => $v){
		echo "<tr>";
		foreach($v["Canalizacion"] as $j => $w){
			echo "<td>".$w."</td>";
		}
		
		
		echo "<td>".$this->Html->link("Ver", "view/".$v["Canalizacion"]["id"])."</td>";

		echo "<td>".$this->Html->link("Editar", "edit/".$v["Canalizacion"]["id"])."</td>";
		
		
		
		
			

		echo "</tr>";
	}
	?></div>




</table>
<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Página {:page} of {:pages}, Demostración {:current} Los registros de cada {:count} total, A partir del registro {:start}, Que concluye el {:end}')
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
		<li><?php echo $this->Html->link(__('Actualizar'), array('controller' => 'canalizaciones', 'action' => 'nuebus')); ?> </li>			
		
	</ul>
</div>


</div>

