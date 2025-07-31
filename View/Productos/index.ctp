<?php $this->layout = 'printactividades' ?>

<h3><a ><img src="../img/logo_Pasto.png" width="40" height="auto" ></a> Plan de Salud Publica de Intervenciones Colectivas </h3>



<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<p>Anexo tecnico PIC-2025</p>
				<div class="btn-group">
					<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
						<?php echo ('Acciones'); ?> <span class="caret"></span>
					</button>
					<ul class="dropdown-menu" role="menu">
						<li><?php echo $this->Html->link(('Home'), array('controller' => 'users', 'action' => 'home')); ?></li>
						<li><?php echo $this->Html->link(('Regresar'),  array('controller' => 'productos', 'action' => 'index')); ?></li>
						<li class="divider"></li>
						<li><a href="javascript:window.print();"> Imprimir</a> </li>
						<li><a class="copi" href="javascript:getlink();">Copiar URL</a> </li>
						<!-- <li><a class="copi" href="javascript:fnExcelReport();"> Exportar </a> </li> -->
					</ul>
				</div>

			</div>
			<!-- /.panel-heading -->
			<div class="panel-body">
				<div class="dataTable_wrapper">
				
						<div class="row">
							<div class="col-sm-12">
							
								<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example" >
									<thead>
										<tr >
											
											
											<th >id</th>
											<th >Nº producto</th>										
											<th >Problemática</th>
											<!--th >Resultado</th-->
											<th >Producto</th>
											<th >Actividad</th>	
											<th >Evidencia</th>	
											<th >% Programado</th>																		
											<th >% Avanzado</th>											
											<th >Estado</th>
											<th >Modificado</th>
											<th >Opciones</th>
											<th >Observación Producto</th>
											<th >Curso de vida</th>
											<th >Entorno</th>
											<th >Tecnologias</th>
											<th >% producto</th>
											<th >% avanzado tarea</th>
											<th >% avance tarea</th>
											<th> Observación PIC</th>
											<th >Observación SMS</th>
											
											<th >Creado</th>
											
										</tr>
									</thead>
									<tbody>
									
										<?php foreach ($productos as $producto) : ?>
											<tr class="gradeA odd" >

												<td class="sorting_1"><?php echo ($producto['Producto']['id']); ?> 
												</td>
												<td>producto <?php echo ($producto['Producto']['numproductos']); ?></td>
												<td><?php echo ($producto['Producto']['dimensiones']); ?></td>
												
												<!--td><?php echo ($producto['Producto']['resultado']); ?></td-->
												<td class="center"><?php echo ($producto['Producto']['activity']); ?></td>
												<!--td class="center"><?php //echo substr($producto['Producto']['tarea'], 0, 150); ?>...</td permite solo mostrar un numero definifdo de caracteres de la bd-->
													<td class="center"><?php echo ($producto['Producto']['tarea']); ?></td>
													
													<td><?php echo ($producto['Producto']['evidencia']); ?></td>
													<td><?php echo ($producto['Producto']['porctareas']); ?></td>
												<td>
													<div>
														<p>
															<span class="pull-right text-muted"><?php echo ($producto['Producto']['porcentajeavancetotal']); ?>%</span>
														</p>
														<div class="progress progress-striped active">
															<div class="progress-bar  progress-bar-success" role="progressbar" aria-valuenow="<?php echo ($producto['Producto']['porcentajeavancetotal']); ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo ($producto['Producto']['porcentajeavancetotal']); ?>%">
																<span class="sr-only"><?php echo ($producto['Producto']['porcentajeavancetotal']); ?></span>
															</div>
														</div>
													</div>
												</td>
												<td><?php echo ($producto['Producto']['estado']); ?></td>
												<td><?php echo $this->Time->format('d-m-Y h:i A', ($producto['Producto']['modified'])); ?></td>
												
												<td class="actions">
													<div class="btn-group">
														<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
															<?php echo ('Acciones'); ?> <span class="caret"></span>
														</button>
														<ul class="dropdown-menu" role="menu">
															<li><?php echo $this->Html->link(('Ver'), array('action' => 'view', $producto['Producto']['id'])); ?></li>
															<li><?php echo $this->Html->link(('Nota SMS'), array('action' => 'smsedit', $producto['Producto']['id'])); ?></li>
															<li><?php echo $this->Html->link(('Nota PIC'), array('action' => 'editpic', $producto['Producto']['id'])); ?></li>
															<li><?php echo $this->Html->link(('Anexo'), array('action' => 'editanexo', $producto['Producto']['id'])); ?></li>
														</ul>
													</div>
												</td>
												<td><?php echo ($producto['Producto']['observacion']); ?></td>
												<td><?php echo ($producto['Producto']['vidacursos']); ?></td>
												<td><?php echo ($producto['Producto']['entorno']); ?></td>
												<td><?php echo ($producto['Producto']['tecnologias']); ?></td>
												<td><?php echo ($producto['Producto']['porcproducto']); ?></td>											
												<td><?php echo ($producto['Producto']['porcentajeavancetotal']); ?></td>
												<td><?php echo ($producto['Producto']['porcentajecumplimiento']); ?></td>
												<td><?php echo ($producto['Producto']['observacionpic']); ?></td>
												<td><?php echo ($producto['Producto']['observacionsms']); ?></td>
												<td>	<?php echo $this->Time->format('d-m-Y h:i A',($producto['Producto']['created'])); ?></td>
												</tr>
											
										<?php endforeach; ?>
										

									</tbody>
								</table>
							</div>
						</div>
						
				</div>
				<!-- /.table-responsive -->

			</div>
			<!-- /.panel-body -->
		</div>
		<!-- /.panel -->
	</div>
	<!-- /.col-lg-12 -->
</div>
<script>
	$(document).ready(function() {
		$('#dataTables-example').DataTable({
			responsive: true,
			dom: 'Bfrtip',
			language: {
				searchBuilder: {
					button: 'Filter',
				}
			},
			buttons: [
				'pageLength',
				'copyHtml5',
				'excelHtml5',
				'csvHtml5',
				'colvis',
				'searchBuilder'
			]
		});
	});

	function fnExcelReport() { 
		var tab_text="<table border='2px'><tr bgcolor='#87AFC6'>";
		var textRange; var j=0;
		tab = document.getElementById('dataTables-example'); // id of table

		for(j = 0 ; j < tab.rows.length ; j++) {     
			tab_text=tab_text+tab.rows[j].innerHTML+"</tr>";
		}

		tab_text=tab_text+"</table>";
		
		tab_text= tab_text.replace(/<A[^>]*>|<\/A>/g, "");//remove if u want links in your table
		tab_text= tab_text.replace(/<img[^>]*>/gi,""); // remove if u want images in your table
		tab_text= tab_text.replace(/<input[^>]*>|<\/input>/gi, ""); // reomves input params

		var ua = window.navigator.userAgent;
		var msie = ua.indexOf("MSIE "); 

		if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./))      // If Internet Explorer
		{
			txtArea1.document.open("txt/html","replace");
			txtArea1.document.write(tab_text);
			txtArea1.document.close();
			txtArea1.focus(); 
			sa=txtArea1.document.execCommand("SaveAs",true,"Say Thanks to Sumit.xls");
		}  
		else 
			sa = window.open('data:application/vnd.ms-excel,' + encodeURIComponent(tab_text));  

		//return (sa);
	}
	
</script>