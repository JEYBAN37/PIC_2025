<?php $this->layout = 'printactividades' ?>


<h3><a><img src="../../img/escudos.png"></h3></a>

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<p>Planes de sesión</p>
				<div class="btn-group">
					<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
						<?php echo ('Acciones'); ?> <span class="caret"></span>
					</button>
					<ul class="dropdown-menu" role="menu">
						<li><?php echo $this->Html->link(('Home'), array('controller' => 'users', 'action' => 'home')); ?></li>
						<li><?php echo $this->Html->link(('Regresar'),  array('controller' => 'planes', 'action' => 'index')); ?></li>
						<li class="divider"></li>
						<li><?php echo $this->Html->link(('Nuevo Plan'),  array('controller' => 'plsesiones', 'action' => 'add')); ?></li>
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

							<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
								<thead>
									<tr>


										<th>id</th>										
										<th>Fecha</th>
										<th>Dimensión</th>
										<th>Proceso</th>
										<th>Tematica</th>
										<th>Tema</th>
										<th>Población</th>
										<th>Resultado</th>
										<th>Opciones</th>
										<th>Momento uno</th>
										<th>Momento dos</th>
										<th>Momento tres</th>
										<th>Momento cuatro</th>
										<th>Objetivo</th>
										<th>Objetivo Especifico</th>
									</tr>
								</thead>
								<tbody>

									<?php foreach ($planes as $plan) : ?>
										<tr class="gradeA odd">


											<td><?php echo($plan['Plan']['id']); ?>&nbsp;</td>
											<td><?php echo($plan['Plan']['fecha']); ?>&nbsp;</td>
											<td><?php echo($plan['Plan']['dimension']); ?>&nbsp;</td>
											<td><?php echo($plan['Plan']['proceso']); ?>&nbsp;</td>											
											<td><?php echo($plan['Plan']['tematica']); ?>&nbsp;</td>
											<td><?php echo($plan['Plan']['tema']); ?>&nbsp;</td>											
											<td><?php echo($plan['Plan']['tipoblacion']); ?>&nbsp;</td>											
											<td><?php echo($plan['Plan']['resultado']); ?>&nbsp;</td>											
											<td class="actions">
												<div class="btn-group">
													<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
														<?php echo ('Acciones'); ?> <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
													<li><?php echo $this->Html->link(__('Ver'), array('action' => 'view', $plan['Plan']['id'])); ?></li>
													</ul>
												</div>
											</td>
											<td><?php echo($plan['Plan']['momento']); ?>&nbsp;</td>
											<td><?php echo($plan['Plan']['momentouno']); ?>&nbsp;</td>
											<td><?php echo($plan['Plan']['momentodos']); ?>&nbsp;</td>
											<td><?php echo($plan['Plan']['momentotres']); ?>&nbsp;</td>
											<td><?php echo($plan['Plan']['objetivog']); ?>&nbsp;</td>
											<td><?php echo($plan['Plan']['objetivoe']); ?>&nbsp;</td>
											
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
