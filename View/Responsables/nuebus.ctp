<?php $this->layout = 'formulario'?>
<div class="usuarios index">


<?php
echo $this->Form->create("Responsable", array("action" => "nuebus"));
echo $this->Form->input("Busqueda", array("Label" => "Responsable a buscar"));
echo "Buscar por: ".$this->Form->select("Campo",$Campos,array("empty" => false));
echo $this->Form->end("Consultar");

?>

<table cellpadding="0" cellspacing="0">
	<tr>
	<?php
	if(empty($l)){
		echo "Sin resultados";
	} else {
	foreach ($l[0]["Responsable"] as $i => $v) {
		echo "<th>".$i."</th>";
	}
	}
	echo "<th>Editar</th>";
	echo "<th>Ver</th>";

	?>
	</tr>

	<div class="actions">

	<?php
	foreach($l as $i => $v){
		echo "<tr>";
		foreach($v["Responsable"] as $j => $w){
			echo "<td>".$w."</td>";
		}
		
		
		echo "<td>".$this->Html->link("Ver", "view/".$v["Responsable"]["id"])."</td>";

		echo "<td>".$this->Html->link("Editar ", "edit/".$v["Responsable"]["id"])."</td>";
		//echo "<td>".$this->Form->postLink("Eliminar", "delete/".$v['Responsable']['id'])."</td>";
		echo "<td>".$this->Form->postLink("Eliminar", "delete/".$v['Responsable']['id'], array(), __('Esta seguro de eliminar # %s?', $v['Responsable']['id']))."</td>";	
		
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
		<li><?php echo $this->Html->link(__('Actualizar'), array('controller' => 'actividades', 'action' => 'nuebus')); ?> </li>			
		
	</ul>
</div>


</div>

<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>

		<li> <a  href="../../users/bienvenida"	 >Inicio</a></li>

		<li><?php echo $this->Html->link(__('Regresar'), array('controller' => 'personas','action' => 'add')); ?></li>	
		<li><?php echo $this->Html->link(__('Lista Organizaciones'), array('controller'=>'organizaciones','action' => 'nuebus')); ?></li>
		<li><?php echo $this->Html->link(__('Nuevo Responsable'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Admin cuentas'), array('controller'=>'users','action' => 'admin')); ?></li>


		<li> <a href="http://www.fosyga.gov.co/Consultas/BDUABasedeDatosUnicadeAfiliados/AfiliadosBDUA/tabid/436/Default.aspx" target="_blank">Base FOSYGA</a></li>

		<li> <a href="http://www.sisben.gov.co/atencion-al-ciudadano/Paginas/consulta-del-puntaje.aspx" target="_blank">Base SISBEN</a></li>	

		<li> <a href="http://cfiscal.contraloria.gov.co/siborinternet/certificados/certificadosPersonaNatural.asp" target="_blank">Contraloria</a></li>
		
		<li> <a href="http://www.procuraduria.gov.co/portal/antecedentes.html" target="_blank">Procuraduria</a></li>				
				
	</ul>
</div>