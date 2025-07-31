<?php $this->layout = 'printactividades'?>


<h3><a><img src="../img/logo_Pasto.png" width="40" height="auto" ></a> Plan de Salud Publica de Intervenciones Colectivas </h3></h3></a>

<div class = "row">
    <div class="col-lg-12">
        <div class="panel panel-default">
			<div class="panel-heading">
				<p>Actas PIC-2020</p>
				<div class="btn-group">
					<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
						<?php echo ('Acciones'); ?> <span class="caret"></span>
					</button>
					<ul class="dropdown-menu" role="menu">
						<li><?php echo $this->Html->link(('Home'), array('controller' => 'users', 'action' => 'home')); ?></li>
						<li><?php echo $this->Html->link(('Regresar'),  array('controller' => 'actas', 'action' => 'index')); ?></li>
						<li class="divider"></li>
						<li><?php echo $this->Html->link(('Nueva Acta'),  array('controller' => 'actas', 'action' => 'add')); ?></li>
						<li><a href="javascript:window.print();"> Imprimir</a> </li>
						<li><a class="copi" href="javascript:getlink();">Copiar URL</a> </li>
						
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
											<th >Actividad</th>
											<th >Tarea</th>
											<th >Dimensión</th>
											<th >Fecha</th>
											<th >Lugar</th>
											<th >Objetivo</th>
                                            <th >Tipo reunion</th>		
											<th >anexo</th>										
                                            <th >Opciones</th>	
                                            <th >Creado</th>											
											<th >Modificado</th>										
                                            <th >Responsable</th>
                                            
											
											
										</tr>
									</thead>
									<tbody>
									
										<?php foreach ($actas as $acta) : ?>
											<tr class="gradeA odd" >

												<td class="sorting_1"><?php echo ($acta['Acta']['id']); ?> 
												</td>
												<td><?php echo ($acta['Producto']['dimensiones']); ?></td>
												<td><?php echo ($acta['Producto']['tarea']); ?></td>
												<td><?php echo ($acta['Producto']['nombredim']); ?></td>
												<td><?php echo ($acta['Acta']['fecha']); ?></td>
												<td><?php echo ($acta['Ubicacion']['comuna']); ?></td>												
												<td><?php echo ($acta['Acta']['objactividad']); ?></td>
												<td><?php echo ($acta['Acta']['alcancereunion']); ?></td>
												<td><?php echo ($acta['Acta']['anexo']); ?></td>											
												
												<td class="actions">
													<div class="btn-group">
														<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
															<?php echo ('Acciones'); ?> <span class="caret"></span>
														</button>
														<ul class="dropdown-menu" role="menu">
															<li><?php echo $this->Html->link(('Ver'), array('action' => 'view', $acta['Acta']['id'])); ?></li>
															<li><?php echo $this->Html->link(('Editar'), array('action' => 'edit', $acta['Acta']['id'])); ?></li>
															<li><?php echo $this->Html->link(('Anexo'), array('action' => 'editanexo', $acta['Acta']['id'])); ?></li>
														</ul>
													</div>
                                                </td>
                                                <td>	<?php echo $this->Time->format('d-m-Y h:i A',($acta['Acta']['created'])); ?></td>
												<td>	<?php echo $this->Time->format('d-m-Y h:i A',($acta['Acta']['modified'])); ?></td>
												<td><?php echo ($acta['Responsable']['nombres']); ?></td>
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