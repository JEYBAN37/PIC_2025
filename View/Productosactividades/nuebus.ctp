<!--?php echo $this->element('menusinsoporte');?-->
 <?php echo $this->element('menusinsoporte'); ?>
<?php $this->layout = 'tablas' ?>
<?php echo $this->Html->script('tablefilter/tablefilter'); ?>


	


<div class="actions">

	   	 <li>

		<?php echo $this->Html->link(__('Regresar'), array('controller' => 'actividades', 'action' => 'add')); ?> 
		
		<?php echo $this->Html->link(__('Refrescar'), array('controller' => 'productosactividades', 'action' => 'nuebus')); ?>
		<?php echo $this->Html->link(__('cargar soportes'), array('controller' => 'productosactividades', 'action' => 'add')); ?>

	

</div><br>
	<div >


	
<?php
echo $this->Form->create("Productosactividad", array("action" => "nuebus"));
//echo $this->Form->select("Campo",$Campos,array("empty" => false));

//$optiondim = array('' => 'Elegir', 'CSSM' => 'Convivencia Social y Salud Mental', 'FAS' => 'Fortalecimiento de la Autoridad Sanitaria', 'S_Ambiental' => 'Salud Ambiental', 'EMGYD' => 'Salud Pública Emergencias y desastres', 'SAL' => 'Salud y Ámbito Laboral', 'SAN' => 'Seguridad Alimentaria y Nutricional', 'DSDR' => 'Sexualidad, Derechos Sexuales y Reproductivos', 'GDPV' => 'Transversal Gestión Diferencial de Poblaciones Vulnerables', 'VSCNT' => 'Vida Saludable y Condiciones no Transmisibles', 'VSET' => 'Vida Saludable y Enfermedades Transmisibles', 'TDE' => 'Todas las Dimensiones Enfoques', 'TDEC' => 'Todas las Dimensiones Educación y Comunicación','TDF'=>'Todas las dimensiones Fortalecimiento','TDG'=>'Todas las Dimensiones Gestión','TDMP'=>'Todas las dimensiones Modo Pedagógico','TD_OBJ'=>'Todas las Dimensiones Objeivos');

//echo $this->Form->input("Dim", array("label" => "Buscar por Dimensión", 'type' => 'select', 'options' => $optiondim, 'class' => 'form-control select-search'));



// $option4 = array('' => 'Elegir', '1 Estrategia comunitaria de fortalecimiento' => '1 Estrategia comunitaria de fortalecimiento', '2 Campaña "Mi cuerpo habla dice respeto"' => '2 Campana Mi cuerpo habla dice respeto', '3 Aplicativo móvil "Vive sin violencia"' => '3 Aplicativo móvil Vive sin violencia ', '4 Prevención y mitigación consumo SPA' => '4 Prevención y mitigación consumo SPA', '5 Plan pedagógico potenciar relación con el SER' => '5 Plan pedagógico potenciar relación con el SER', '6 Eventos masivos CSSM' => '6 Eventos masivos CSSM', '7 Proceso pedagógico ACSM' => '7 Proceso pedagógico ACSM', '8 Plan estratégico prevención suicidio' => '8 Plan estratégico prevención suicidio', '9 Proceso pedagógico Mesa de Victimas' => '9 Proceso pedagógico Mesa de Victimas', '10 Incorporación Enfoques' => '10 Incorporación Enfoques', '11 Estructura técnica y Org. Fort. Y EPPS' => '11 Estructura técnica y Org. Fort. Y EPPS', '12 Fortalecimiento organizaciones sociales' => '12 Fortalecimiento organizaciones sociales', '13 Indicador Fortalecimiento' => '13 Indicador Fortalecimiento', '14 Indicadores Objs. 1 y 3' => '14 Indicadores Objs. 1 y 3', '15 Sesiones Mesa de Salud Colectivas' => '15 Sesiones Mesa de Salud Colectivas', '16 Sexta versión iniciativas sociales' => '16 Sexta versión iniciativas sociales', '17 Construcción PPSC' => '17 Construcción PPSC', '18 Admón. SICB' => '18 Admón. SICB', '19 Indicadores CB' => '19 Indicadores CB', '20 Informe MSC y ASGSS' => '20 Informe MSC y ASGSS', '21 Documento CB 2017' => '21 Documento CB 2017', '22 SIGP' => '22 SIGP', '23 Incorporación Modo pedagógico' => '23 Incorporación Modo pedagógico', '24 Plan estratégico de Comunicación CB' => '24 Plan estratégico de Comunicación CB', '25 Video Documental' => '25 Video Documental', '26 Programa voluntariado' => '26 Programa voluntariado', '27 Estrategia Comunicación Alternativa Tomate la Vida' => '27 Estrategia Comunicación Alternativa Tomate la Vida', '28 Estrategia Comunicación Alternativa Tomate la Vida F 6 y 9' => '28 Estrategia Comunicación Alternativa Tomate la Vida F 6 y 9', '29 Estrategia Comunicación Alternativa Tomate la Vida F 7 y 9' => '29 Estrategia Comunicación Alternativa Tomate la Vida F 7 y 9', '30 Estrategia Comunicación Alternativa Tomate la Vida F 7 y 9' => '30 Estrategia Comunicación Alternativa Tomate la Vida F 7 y 9', '31 Eventos masivos VSCNT' => '31 Eventos masivos VSCNT', '32 P. A. promoción entorno escolar' => '32 P. A. promoción entorno escolar', '33 Estrategia planto mis derechos' => '33 Estrategia planto mis derechos', '34 Programa Nacional de Geohelmintiasis'=> '34 Programa Nacional de Geohelmintiasis', '35 Unidades centinela' => '35 Unidades centinela', '36 Evento Habitantes de Calle' => '36 Evento Habitantes de Calle', '37 Curso virtual lengua de señas' => '37 Curso virtual lengua de señas','38 Estrategia "Familias Fuertes"'=>'38 Estrategia "Familias Fuertes"','39 Estrategia comunicacional derechos GDPV'=>'39 Estrategia comunicacional derechos GDPV','40 Fortalecimiento Escuela Campesina'=>'40 Fortalecimiento Escuela Campesina','41 Proceso implementación huertas caseras'=>'41 Proceso implementación huertas caseras','43 Proceso Escuela de Gestores'=>'43 Proceso Escuela de Gestores','44 Evento SMLM'=>'44 Evento SMLM','45 Mindala día de la alimentación'=>'45 Mindala día de la alimentación','46 Proceso plan SAN'=>'46 Proceso plan SAN','47 Vinculación NDA a PRN47 Vinculación NDA a PRN'=>'47 Vinculación NDA a PRN','48 Promoción Maternidad Segura'=>'48 Promoción Maternidad Segura','49 Proceso veeduría SSAAJ'=>'49 Proceso veeduría SSAAJ','50 Proceso semilleros D&D50 Proceso semilleros D&D'=>'50 Proceso semilleros D&D','51 Conmemoración Semana Andina PEA51 Conmemoración Semana Andina PEA'=>'51 Conmemoración Semana Andina PEA','52 Proceso D&D padres52 Proceso D&D padres'=>'52 Proceso D&D padres','53 Campaña comunicación VIH/SIDA53 Campaña comunicación VIH/SIDA'=>'53 Campaña comunicación VIH/SIDA','54 Conmemoración día mundial respuesta positiva VIH'=>'54 Conmemoración día mundial respuesta positiva VIH','55 Curso virtual DSDR'=>'55 Curso virtual DSDR','56 Promoción PAI'=>'56 Promoción PAI','57 Prevención Tuberculosis'=>'57 Prevención Tuberculosis','58 Prevención uso de pólvora'=>'58 Prevención uso de pólvora','59 Evento dia de la salud en el mundo del trabajo'=>'59 Evento dia de la salud en el mundo del trabajo','60 Construccion y ejecucion plan Acción CIETI'=>'60 Construcción y ejecución plan Acción CIETI','61 Plan Seguridad y Salud en el Trabajo trabajadores informales'=>'61 Plan Seguridad y Salud en el Trabajo - trabajadores informales','62 Fortalecimiento colectivo Civico Potrerillo'=>'62 Fortalecimiento colectivo Civico Potrerillo');


			
		

//echo $this->Form->input("Pro", array("label" => "Buscar por Producto",'type' => 'select', 'options' => $option4, 'class' => 'form-control select-search'));
//echo $this->Form->input("Task", array("label" => "Buscar por tarea", 'class' => 'form-control select-search'));

//$options = array(''=>'Elegir','Cumple'=>'Cumple','No Cumple'=>'No Cumple','Pentiente'=>'Pendiente','En proceso'=>'En proceso','0'=>'Sin revisar','Actualizado'=>'Actualizado','Corregido'=>'Corregido', 'class' => 'form-control select-search');
//echo $this->Form->input("Estado", array("label" => "Buscar por Estado",'type' => 'select', 'options' => $options, 'class' => 'form-control select-search'));

//echo $this->Form->end("Consultar");

?>


<!--?php
echo $this->Form->create("Productosactividad", array("action" => "excel"));
echo $this->Form->input("Dim", array("type" => "hidden"));
echo $this->Form->input("Campo",array("type" => "hidden"));
echo $this->Form->input("Pro", array("type" => "hidden"));
echo $this->Form->input("Task", array("type" => "hidden"));
echo $this->Form->input("Estado", array("type" => "hidden"));
echo $this->Form->end("Exportar");


?-->


<table cellpadding="0" cellspacing="0" id="list" class="table table-bordered table-hover">
	<tr>
	<?php
	if(empty($l)){
		echo "Sin resultados";
	} else {
	foreach ($l[0]["Productosactividad"] as $i => $v) {
		echo "<th>".$i."</th>";
	}
	}
	echo "<th>Ver</th>";
	echo "<th>Editar</th>";
	echo "<th>Url</th>";
	
	?>
	</tr>

	<div class="actions">

	<?php
	foreach($l as $i => $v){
		echo "<tr>";
		foreach($v["Productosactividad"] as $j => $w){
			echo "<td>".$w."</td>";
		}
		
		echo "<td>".$this->Html->link("Ver", "view/".$v['Productosactividad']['id'], array('target' => '_blank'))."</td>";
		echo "<td>".$this->Html->link("Editar", "edit/".$v['Productosactividad']['id'])."</td>";
		echo "<td> <a id='copi' class='copi' href='javascript:getlink(" . $v["Productosactividad"]["id"] . ");' >Copiar URL </a></td>  " ;				

		
	}
	?></div>


</table>


</div>
<script language="javascript" type="text/javascript">
    $(document).ready(function () {
        var filtersConfig = {
            base_path: '../js/tablefilter/',
            col_1: 'select',
            col_2: 'select',
            col_5: 'select',
            col_6: 'none',
            col_7: 'none',
            col_8: 'none',
            col_9: 'none',
            col_10: 'none',
            col_11: 'none',
            loader: true, 
            paging: true,
            alternate_rows: true,
            rows_counter: true,
            btn_reset: true,
            status_bar: true,
            mark_active_columns: true,
            highlight_keywords: true,
            extensions:[{ name: 'sort' }]
        };

        var tf = new TableFilter('list', filtersConfig);
        tf.init();
	$('.helpBtn').hide();
    });
</script>

<script>
function getlink(id) {
var aux = document.createElement("input");

var locationAux = window.location.href;
var location = locationAux.replace("nuebus","view/");

aux.setAttribute("value",location + id);
//alert(location);
document.body.appendChild(aux);
aux.select();
document.execCommand("copy");
document.body.removeChild(aux);
}
    
</script>