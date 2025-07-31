<?php $this->layout = 'formulario'?>
<div class="usuarios index">


<?php
echo $this->Form->create("Persona", array("action" => "check"));
echo $this->Form->input("Busqueda", array("Label" => "Persona a buscar"));
echo "Buscar por: ".$this->Form->select("Campo",$Campos,array("empty" => false));
echo $this->Form->end("Consultar");

?>

<table cellpadding="0" cellspacing="0">
	<tr>
	<?php
	if(empty($l)){
		 echo "<br> Por favor seleccione otra opción de consulta </br>";
		echo "Sin resultados ";
		 echo $this->Html->link(__('Crear Participante'), array('action' => 'add7'));
	} else {
	foreach ($l[0]["Persona"] as $i => $v) {
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
		foreach($v["Persona"] as $j => $w){
			echo "<td>".$w."</td>";
		}
		
		
		echo "<td>".$this->Html->link("Ver", "view/".$v["Persona"]["id"])."</td>";
		

		echo "<td>".$this->Html->link("Asociar Actividades", "edit8/".$v["Persona"]["id"])."</td>";
		
		
		echo "<td>".$this->Html->link("Caracterizar Persona", "edit2/".$v["Persona"]["id"])."</td>";
		
		
		
		
		
			
		
		
			

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
		<li><?php echo $this->Html->link(__('Actualizar'), array( 'action' => 'nuebus')); ?> </li>			
		
	</ul>
</div>


</div>

<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>

		<li> <a  href="../users/bienvenida"	 >Inicio</a></li>

		<li><?php echo $this->Html->link(__('Regresar'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Organizaciones'), array('controller'=> 'organizaciones','action' => 'nuebus')); ?></li>
		
		<li><?php echo $this->Html->link(__('Crear Agente Comunitario'), array('action' => 'add2')); ?></li>
		<li> <a href="http://www.sistemasycomunicaciones.com.co/DOCUMENTOS/Agentes%20caracterizados2015sigp.xlsx" target="_blank">Caracterizacion 2014_2015</a></li>

		<li> <a href="http://www.fosyga.gov.co/Consultas/BDUABasedeDatosUnicadeAfiliados/AfiliadosBDUA/tabid/436/Default.aspx" target="_blank">Base FOSYGA</a></li>

		<li> <a href="http://www.sisben.gov.co/atencion-al-ciudadano/Paginas/consulta-del-puntaje.aspx" target="_blank">Base SISBEN</a></li>	

		<li> <a href="http://cfiscal.contraloria.gov.co/siborinternet/certificados/certificadosPersonaNatural.asp" target="_blank">Contraloria</a></li>
		
		<li> <a href="http://www.procuraduria.gov.co/portal/antecedentes.html" target="_blank">Procuraduria</a></li>

				
	</ul>
</div>