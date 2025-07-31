<?php $this->layout = 'printactividades' ?>


<h3><a><img src="../img/logoescudopasto.jpg" width="40" height="auto" ></a> Plan de Salud Publica de Intervenciones Colectivas </h3></h3></a>

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">

                <h2><?php echo __('Sistematizacion de Procesos'); ?></h2>


                <div class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <?php echo __('Acciones'); ?> <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li><?php echo $this->Html->link(__('Home'), array('controller' => 'users', 'action' => 'home')); ?></li>
                        <li><?php echo $this->Html->link(__('Regresar'),  array('controller' => 'proactividades', 'action' => 'index')); ?></li>
                        <li><?php echo $this->Html->link(__('Nueva sistematización de proceso'), array('controller' => 'proactividades', 'action' => 'add')); ?></li>
                        <li><?php echo $this->Html->link(__('Registro de sesiones'), array('controller' => 'sistematizacionprocesosviewtests', 'action' => 'nuebus')); ?> </li>
                        <li><?php echo $this->Html->link(__('Agregar sesión'), array('controller' => 'procesoregistros', 'action' => 'add')); ?> </li>
                    </ul>
                </div>
            </div>
			<!-- /.panel-heading -->
			<div class="panel-body">
				<div class="dataTable_wrapper">

					<div class="row">
						<div class="col-sm-12">

							<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
								<thead>
									<tr>


										<th>id</th>
										<th>Producto</th>
										<th>Dimension</th>
										<th>Población</th>
										<th>Grupo</th>
										<th>Objetivo</th>
										<th>Responsable</th>
										<th>Creado</th>
										<th>Modificado</th>										
										<th>Opciones</th>



									</tr>
								</thead>
								<tbody>

									<?php foreach ($proactividades as $proactividad) : ?>
										<tr class="gradeA odd">

											<td class="sorting_1"><?php echo ($proactividad['Proactividad']['id']); ?>
											</td>
											<td><?php echo ($proactividad['Producto']['activity']); ?></td>
											<td><?php echo ($proactividad['Producto']['dimensiones']); ?></td>
											<td><?php echo ($proactividad['Proactividad']['poblaciones']); ?></td>
											<td><?php echo ($proactividad['Proactividad']['grupo']); ?></td>
											<td><?php echo ($proactividad['Proactividad']['objactividad']); ?></td>
											<td><?php echo ($proactividad['Responsable']['nombres']); ?></td>
											<td> <?php echo $this->Time->format('d-m-Y h:i A', ($proactividad['Proactividad']['created'])); ?></td>
											<td> <?php echo $this->Time->format('d-m-Y h:i A', ($proactividad['Proactividad']['modified'])); ?></td>
											

											<td class="actions">
												<div class="btn-group">
													<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
														<?php echo __('Acciones'); ?> <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li><?php echo $this->Html->link(__('Ver'), array('action' => 'view', $proactividad['Proactividad']['id'])); ?></li>
														<li><?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $proactividad['Proactividad']['id'])); ?> </li>
													</ul>
												</div>
											</td>
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
		var tab_text = "<table border='2px'><tr bgcolor='#87AFC6'>";
		var textRange;
		var j = 0;
		tab = document.getElementById('dataTables-example'); // id of table

		for (j = 0; j < tab.rows.length; j++) {
			tab_text = tab_text + tab.rows[j].innerHTML + "</tr>";
		}

		tab_text = tab_text + "</table>";

		tab_text = tab_text.replace(/<A[^>]*>|<\/A>/g, ""); //remove if u want links in your table
		tab_text = tab_text.replace(/<img[^>]*>/gi, ""); // remove if u want images in your table
		tab_text = tab_text.replace(/<input[^>]*>|<\/input>/gi, ""); // reomves input params

		var ua = window.navigator.userAgent;
		var msie = ua.indexOf("MSIE ");

		if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./)) // If Internet Explorer
		{
			txtArea1.document.open("txt/html", "replace");
			txtArea1.document.write(tab_text);
			txtArea1.document.close();
			txtArea1.focus();
			sa = txtArea1.document.execCommand("SaveAs", true, "Say Thanks to Sumit.xls");
		} else
			sa = window.open('data:application/vnd.ms-excel,' + encodeURIComponent(tab_text));

		//return (sa);
	}
</script>