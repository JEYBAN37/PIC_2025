<?php $this->layout = 'printactividades' ?>

<?php 
// IMPORTANTE: Cambiar la informacion de datos de conexion
$serv = 'localhost';
$port = '3307';
$userS = 'root';
$passS = '20166';
$bd = 'cake_Pic_2024';
?>

<div class="row">
	<div class="col-lg-10">
		<div class="panel panel-default">
			<div class="panel-heading">
				<p>Productos PIC-2024</p>
				<div class="btn-group">
					<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
						<?php echo ('Acciones'); ?> <span class="caret"></span>
					</button>
					<ul class="dropdown-menu" role="menu">
						<li><?php echo $this->Html->link(('Home'), array('controller' => 'users', 'action' => 'home')); ?></li>
						<li><?php echo $this->Html->link(('Regresar'),  array('controller' => 'productos', 'action' => 'index')); ?></li>
						<li><?php echo $this->Html->link(('Editar Producto'), array('action' => 'edit', $producto['Producto']['id'])); ?> </li>
						<li><?php echo $this->Html->link(('Actualizar soportes'), array('action' => 'editanexo', $producto['Producto']['id'])); ?></li>
						<li><?php echo $this->Html->link(('Agregar observacion SMS'), array('action' => 'smsedit', $producto['Producto']['id'])); ?></li>
						<li class="divider"></li>
						<li><a href="javascript:window.print();"> Imprimir</a> </li>
						<li><a class="copi" href="javascript:getlink();">Copiar URL</a> </li>
					</ul>
				</div>

			</div>




			<div class="panel-body">
				<div class="dataTable_wrapper">

					<div class="row">
						<div class="col-sm-11">

							<table width="100%" class="table table-striped table-bordered table-hover">

								<tr>
									<td colspan="2" rowspan="4" style="text-align: center; "><img src="../../img/logoescudopasto.jpg" width="110" height="auto"></td>
								</tr>
								<tr>
									<td colspan="8" style="text-align: center; ">PROCESO SALUD PÚBLICA</td>
								</tr>
								<tr>
									<td colspan="9">NOMBRE DEL FORMATO: ANEXO TECNICO PIC</td>
								</tr>
								<tr>
									<td>VIGENCIA: 2025</td>
									<td>VERSION:01</td>
									<td>CÓDIGO: XX-X-001</td>
									<td>PÁGINA:</td>

								</tr>
								<tr>
									<p> <strong>Avance de tarea</strong> </p>

									<p>
										<span class="pull-right text-muted"><?php echo ($producto['Producto']['porcentajeavancetotal']); ?>%</span>
									</p>
									<div class="progress progress-striped active">
										<div class="progress-bar  progress-bar-success" role="progressbar" aria-valuenow="<?php echo ($producto['Producto']['porcentajeavancetotal']); ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo ($producto['Producto']['porcentajeavancetotal']); ?>%">
											<span class="sr-only"><?php echo ($producto['Producto']['porcentajeavancetotal']); ?></span>
										</div>
									</div>


								</tr>
								<tr>
									<p> <strong>Porcentaje reportado </strong> </p>

									<p>
										<span class="pull-right text-muted"><?php echo ($producto['Producto']['porcentajeavance1']); ?>%</span>
									</p>
									<div class="progress progress-striped active">
										<div class="progress-bar  progress-bar-warning" role="progressbar" aria-valuenow="<?php echo ($producto['Producto']['porcentajeavance1']); ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo ($producto['Producto']['porcentajeavance1']); ?>%">
											<span class="sr-only"><?php echo ($producto['Producto']['porcentajeavance1']); ?></span>
										</div>
									</div>


								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>



			<div class="panel-body">
				<div class="dataTable_wrapper">

					<div class="row">
						<div class="col-sm-11">

							<table width="100%" class="table table-striped table-bordered table-hover">

								<tr>
									<td colspan="8" style="text-align: center; "><?php echo ('Producto Anexo Tecnico 2024'); ?></td>
								</tr>
								<tr>

									<td>Id:
										<?php echo ($producto['Producto']['id']); ?>
									</td>

									<td colspan="2">Num producto:
										<?php echo ($producto['Producto']['numproductos']); ?>
									</td>
									
									<td colspan="2">Num tarea:
										<?php echo ($producto['Producto']['numtarea']); ?>
									</td>


									<td colspan="4">Linea:
										<?php echo ($producto['Producto']['lineaoperativa']); ?>
									</td>


								</tr>
								<tr>


									<td colspan="4"> Dimensión:
										<?php echo ($producto['Producto']['nombredim']); ?>

										-
										<?php echo ($producto['Producto']['dimensiones']); ?>
									</td>

									<td colspan="4">Presupuesto tarea
										<?php echo ($producto['Producto']['valortarea']); ?>
									</td>

								</tr>
								<tr>
									<td><?php echo ('Normas'); ?></td>
									<td colspan="8">
										<?php echo ($producto['Producto']['linormativas']); ?>
									</td>
								</tr>
								<tr>
									<td><?php echo ('Linea PPSC'); ?></td>
									<td colspan="3">
										<?php echo ($producto['Producto']['lineappsc']); ?>



									</td>
									<td><?php echo ('Sub linea PPSC'); ?></td>
									<td colspan="3">
										<?php echo ($producto['Producto']['sublineappsc']); ?>


								</tr>



								<tr>
									<td><?php echo ('Producto'); ?></td>
									<td colspan="8">
										<?php echo ($producto['Producto']['resultado']); ?>
									</td>
									
								</tr>

								<tr>
								
									<td><?php echo ('Resumen'); ?></td>
									<td colspan="8">
										<?php echo ($producto['Producto']['activity']); ?>
									</td>
								</tr>
								<tr>
									<td><?php echo ('Cursos de Vida'); ?></td>
									<td>
										<?php echo ($producto['Producto']['vidacursos']); ?>
									</td>
									<td><?php echo ('Entorno'); ?></td>
									<td>
										<?php echo ($producto['Producto']['entorno']); ?>
									</td>
									<td><?php echo ('Tecnologia'); ?></td>
									<td>
										<?php echo ($producto['Producto']['tecnologias']); ?>
									</td>
									<td><?php echo ('% producto'); ?></td>
									<td>
										<?php echo ($producto['Producto']['porcproducto']); ?>
									</td>
								</tr>
								<!--tr>
									<td><?php echo ('Tarea'); ?></td>
									<td colspan="8">
										<?php echo ($producto['Producto']['tarea']); ?>
									</td>
									
								</tr-->

								<tr>
									
									<td><?php echo ('% tarea'); ?></td>
									<td colspan="2">
										<?php echo ($producto['Producto']['porctareas']); ?>
									</td>
									<td> <strong>% avance</strong>
									
										<div>
											<p>

												<span class="pull-right text-muted"><?php echo ($producto['Producto']['porcentajeavancetotal']); ?>%</span>
											</p>
											<div class="progress progress-striped active">
												<div class="progress-bar  progress-bar-success" role="progressbar" aria-valuenow="<?php echo ($producto['Producto']['porcentajeavancetotal']); ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo ($producto['Producto']['porcentajeavancetotal']); ?>%">
													<span class="sr-only"><?php echo ($producto['Producto']['porcentajeavancetoal']); ?></span>
												</div>
											</div>
										</div>

									</td>
									<td><?php echo ('Estado'); ?></td>
									<td>
										<?php echo ($producto['Producto']['estado']); ?>
									</td>
									<td><?php echo ('Objetivo CB'); ?></td>
									<td>
										<?php echo ($producto['Producto']['clasobjetivos']); ?>
									</td>
								</tr>
								<tr>
									
									<td><?php echo ('Evidencia requerida'); ?></td>
									<td colspan="8">
										<?php echo ($producto['Producto']['evidencia']); ?>
									</td>
								</tr>
								<tr>
									

									<td><?php echo ('Observación PIC'); ?></td>
									<td colspan="8">
										<?php echo ($producto['Producto']['observacionpic']); ?>
									</td>
									
								</tr>
								<tr>
									<td><?php echo ('Observación SMS'); ?></td>
									<td colspan="8">
										<?php echo ($producto['Producto']['observacionsms']); ?>
									</td>
								</tr>
								<tr>

									<td><?php echo ('Anexo'); ?></td>
									<td colspan="7">
										<?php echo $this->Html->link('../files/producto/anexo/' . $producto['Producto']['dirproduc'] . '/' . $producto['Producto']['anexo']); ?>
									</td>
								</tr>

								<tr>
									<td><?php echo ('Enlace'); ?></td>
									<td colspan="3">
										<?php echo $this->Html->link($producto['Producto']['enlace']); ?>



									</td>
									<td><?php echo ('Enlace'); ?></td>
									<td colspan="3">
										<?php echo $this->Html->link($producto['Producto']['enlacedos']); ?>
									</td>

								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>

			<div class="panel-body">
				<div class="dataTable_wrapper">

					<div class="row">
						<div class="col-sm-11">

							<table width="100%" class="table table-striped table-bordered table-hover">
								<tr>
									<td><?php echo ('Responsable equipo PIC'); ?></td>
									<td>
										<?php echo ($producto['Responsable']['nombres']); ?>

									</td>
									<td><?php echo ('Fecha Registro'); ?></td>
									<td>
											<?php echo $this->Time->format('d-m-Y h:i A',($producto['Producto']['created'])); ?>
									</td>
								</tr>
								<tr>
									<td><?php echo ('Referente SMS'); ?></td>
									<td>
										<?php echo ($producto['Referente']['nombres']); ?>
									</td>
									<td><?php echo ('Fecha Actualizado'); ?></td>
									<td>
										<?php echo $this->Time->format('d-m-Y h:i A', ($producto['Producto']['modified'])); ?>
									</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-10">
		<div class="panel panel-default">
			<div class="panel-heading">
				<p>Anexos relacionados al producto: <?php echo ($producto['Producto']['activity']); ?>
					Tarea: <?php echo ($producto['Producto']['tarea']); ?>
					</td>
				</p>


			</div>
			
				<div class="panel panel-default">
				<div class="panel-heading">
					Regisitros relacionados a la tarea
				</div>
				<!-- /.panel-heading -->
				<div class="panel-body">
					<!-- Nav tabs -->
					<ul class="nav nav-pills">
						<li class="active"><a href="#home-pills" data-toggle="tab">Sistematizaciones</a>
						</li>
						<li><a href="#profile-pills" data-toggle="tab">Actividades</a>
						</li>
						<li><a href="#messages-pills" data-toggle="tab">Planes de sesión</a>
						</li>
						<li><a href="#settings-pills" data-toggle="tab">Informe de eventos</a>
						</li>
						<li><a href="#actas-pills" data-toggle="tab">Actas</a>
						</li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content">
						<div class="tab-pane fade in active" id="home-pills">
							<h4>Sistematizacion procesos</h4>
							<div class="card-body">


								<?php if (!empty($producto['Proactividad'])) : ?>

									<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
										<!--table cellpatding="0" cellspacing="0" class="table-hover table-striped table-bordered"-->
										<thead>
											<tr>
												<th>Id</th>
												<th>Grupo participante</th>
												<th>Tipo población</th>
												<th>objetivo actvidad</th>
												<th>Responsable</th>
												<th>Sesión</th>
												<th>Acciones</th>


											</tr>
											<thead>
											<tbody>
												<?php foreach ($producto['Proactividad'] as $proactividad) :
													if (!empty($proactividad['id'])) {
												?>
														<tr class="gradeA odd">


															<td class="sorting_1"><?php echo $proactividad['id']; ?></td>
															<td><?php echo $proactividad['grupo']; ?></td>
															<td><?php echo $proactividad['poblaciones']; ?></td>
															<td><?php echo $proactividad['objactividad']; ?></td>

															<!--td><?php
															//echo $actividad['responsable_id']; 
															$link = mysqli_connect($serv, $userS, $passS);
															mysqli_select_db($link, $bd);
															$tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente
															$result = mysqli_query($link, "SELECT nombres FROM Responsables WHERE id = " . $actividad['responsable_id']);
															while ($fila = mysqli_fetch_array($result)) {
																echo $fila['nombres'];

																mysqli_close($link);
															}
															?></td-->
															<td><?php echo $proactividad['caracteristicasesion']; ?></td>

															<td class="actions">

																<div class="btn-group">
																	<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
																		<?php echo ('Acciones'); ?> <span class="caret"></span>
																	</button>
																	<ul class="dropdown-menu" role="menu">
																		<li><?php echo $this->Html->link("Ver", "../proactividades/view/" . $proactividad['id'], array('target' => '_blank')); ?></li>
																		<li><?php echo $this->Html->link("Editar", "../proactividades/edit/" . $proactividad['id'], array('target' => '_blank')); ?></li>
																		<li><?php echo $this->Html->link(('Nueva sistematización'), array('controller' => 'proactividades', 'action' => 'add')); ?></li>

																	</ul>
																</div>

															</td>




														</tr>
												<?php }
												endforeach; ?>
											</tbody>
									</table>
								<?php endif; ?>



							</div>

						</div>
						<div class="tab-pane fade" id="profile-pills">
							<h4>Sistematización actividades</h4>
							<div class="card-body">

								
								<?php if (!empty($producto['Actividad'])) : ?>
									<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-actividades">
										<thead>
											<tr>
												<th>Id</th>
												<th>Fecha</th>
												<th>Tema</th>
												<th>Barrio</th>
												<th>Tipo</th>
												<th>Anexo</th>
												<th>Responsable</th>
												<th>Acciones</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($producto['Actividad'] as $actividad) :
												if (!empty($actividad['id'])) {
											?>
													<tr class="gradeA even">
														<td class="sorting_1"><?php echo $actividad['id']; ?></td>
														<td><?php echo $actividad['fecha']; ?></td>
														<td><?php echo $actividad['tema']; ?></td>
														<td><?php
															//echo $actividad['ubicacion_id']; 
															$link = mysqli_connect($serv, $userS, $passS);
															mysqli_select_db($link, $bd);
															$tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente
															$result = mysqli_query($link, "SELECT barrio FROM Ubicaciones WHERE id = " . $actividad['ubicacion_id']);
															while ($fila = mysqli_fetch_array($result)) {
																echo $fila['barrio'];

																mysqli_close($link);
															}
															?></td>
														<td><?php echo $actividad['caracteristicasesion']; ?></td>
														<td><?php echo $actividad['anexo']; ?></td>
														<td><?php
															//echo $actividad['responsable_id']; 
															$link = mysqli_connect($serv, $userS, $passS);
															mysqli_select_db($link, $bd);
															$tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente
															$result = mysqli_query($link, "SELECT nombres FROM Responsables WHERE id = " . $actividad['responsable_id']);
															while ($fila = mysqli_fetch_array($result)) {
																echo $fila['nombres'];

																mysqli_close($link);
															}
															?></td>

														<td class="actions">

															<div class="btn-group">
																<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
																	<?php echo ('Acciones'); ?> <span class="caret"></span>
																</button>
																<ul class="dropdown-menu" role="menu">
																	<li><?php echo $this->Html->link("Ver", "../actividades/view/" . $actividad['id'], array('target' => '_blank')); ?></li>
																	<li><?php echo $this->Html->link("Editar", "../actividades/edit/" . $actividad['id'], array('target' => '_blank')); ?></li>
																	<li><?php echo $this->Html->link(('Nueva sistematización'), array('controller' => 'actividades', 'action' => 'add')); ?></li>

																</ul>
															</div>

														</td>
													</tr>
											<?php
												}
											endforeach;
											?>
										</tbody>
									</table>
								<?php endif; ?>


							</div>

						</div>
						<div class="tab-pane fade" id="messages-pills">
							<h4>Planes de sesión</h4>
							<div class="card-body">

								
								<?php if (!empty($producto['Plsesion'])) : ?>
									<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-planes">
										<thead>

											<tr>
												<th>Id</th>
												<th>Fecha</th>
												<th>Tema</th>
												<th>Intension</th>
												<th>Dimension</th>
												<th>Responsable</th>

												<th class="actions"><?php echo ('Acciones'); ?></th>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($producto['Plsesion'] as $plsesion) :
												if (!empty($plsesion['id'])) {
											?>
													<tr class="gradeA odd">
														<td class="sorting_1"><?php echo $plsesion['id']; ?></td>

														<td><?php echo $plsesion['fecha']; ?></td>
														<td><?php echo $plsesion['tema']; ?></td>
														<td><?php echo $plsesion['intension']; ?></td>
														<td><?php echo $plsesion['dimension']; ?></td>
														<td><?php
															//echo $plsesion['responsable_id']; 
															$link = mysqli_connect($serv, $userS, $passS);
															mysqli_select_db($link, $bd);
															$tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente
															$result = mysqli_query($link, "SELECT nombres FROM Responsables WHERE id = " . $plsesion['responsable_id']);
															while ($fila = mysqli_fetch_array($result)) {
																echo $fila['nombres'];

																mysqli_close($link);
															}
															?></td>

														<td class="actions">
															<?php //echo $this->Html->link(('Ver'), array('target' => '_blank','controller' => 'plsesiones', 'action' => 'view', $plsesion['id'])); 
															echo $this->Html->link("Ver", "../plsesiones/view/" . $plsesion['id'], array('target' => '_blank'));
															?>
															<?php //echo $this->Html->link(('Editar'), array('controller' => 'plsesiones', 'action' => 'edit', $plsesion['id'])); 
															echo $this->Html->link("Editar", "../plsesiones/edit/" . $plsesion['id'], array('target' => '_blank'));
															?>
														</td>
													</tr>
											<?php }
											endforeach; ?>
										</tbody>
									</table>
								<?php endif; ?>

								<div class="actions">
									<ul>
										<li><?php echo $this->Html->link(('Nuevo Plan de Sesión'), array('controller' => 'plsesiones', 'action' => 'add')); ?> </li>
									</ul>
								</div>

							</div>
						</div>
						<div class="tab-pane fade" id="settings-pills">
							<h4>Informes eventos</h4>
							<div class="card-body">
								
								<?php if (!empty($producto['Infoevento'])) : ?>
									<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-informes">
										<thead>
											<tr>
												<th><?php echo ('Id'); ?></th>
												<th><?php echo ('Fecha'); ?></th>
												<th><?php echo ('Tema'); ?></th>
												<th><?php echo ('Tipo'); ?></th>
												<th><?php echo ('anexo'); ?></th>
												<th><?php echo ('Observacion'); ?></th>
												<th><?php echo ('Responsable'); ?></th>

												<th class="actions"><?php echo ('Acciones'); ?></th>
											</tr>
										</thead>

										<body>
											<?php foreach ($producto['Infoevento'] as $infoevento) :
												if (!empty($infoevento['id'])) {
											?>
													<tr class="gradeA odd">
														<td class="sorting_1"><?php echo $infoevento['id']; ?></td>
														<td><?php echo $infoevento['fecha']; ?></td>
														<td><?php echo $infoevento['tema']; ?></td>
														<td><?php echo $infoevento['tipo']; ?></td>
														<td><?php echo $infoevento['anexo']; ?></td>
														<td><?php echo $infoevento['observacion']; ?></td>
														<td><?php
															//echo $plsesion['responsable_id']; 
															$link = mysqli_connect($serv, $userS, $passS);
															mysqli_select_db($link, $bd);
															$tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente
															$result = mysqli_query($link, "SELECT nombres FROM Responsables WHERE id = " . $infoevento['responsable_id']);
															while ($fila = mysqli_fetch_array($result)) {
																echo $fila['nombres'];

																mysqli_close($link);
															}
															?></td>

														<td class="actions">
															<?php //echo $this->Html->link(('Ver'), array('target' => '_blank','controller' => 'plsesiones', 'action' => 'view', $plsesion['id'])); 
															echo $this->Html->link("Ver", "../infoeventos/view/" . $infoevento['id'], array('target' => '_blank'));
															?>
															<?php //echo $this->Html->link(('Editar'), array('controller' => 'plsesiones', 'action' => 'edit', $plsesion['id'])); 
															echo $this->Html->link("Editar", "../infoeventos/edit/" . $infoevento['id'], array('target' => '_blank'));
															?>
														</td>
													</tr>
											<?php }
											endforeach; ?>
										</body>
									</table>
								<?php endif; ?>

								<div class="actions">
									<ul>
										<li><?php echo $this->Html->link(('Nuevo informe'), array('controller' => 'infoeventos', 'action' => 'add')); ?> </li>
									</ul>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="actas-pills">
							<h4>Actas</h4>
							<div class="card-body">
								
								<?php if (!empty($producto['Acta'])) : ?>
									<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-actas">
										<thead>


											<tr>
												<th><?php echo ('Id'); ?></th>
												<th><?php echo ('Fecha'); ?></th>
												<th><?php echo ('Tema'); ?></th>
												<th><?php echo ('barrio'); ?></th>
												<th><?php echo ('Responsable Id'); ?></th>
												<th><?php echo ('Objetivo'); ?></th>
												<th><?php echo ('Anexo'); ?></th>
												<th class="actions"><?php echo ('Acciones'); ?></th>
											</tr>
										</thead>

										<body>


											<?php foreach ($producto['Acta'] as $acta) :

												if (!empty($acta['id'])) {
											?>
													<tr class="gradeA odd">
														<td class="sorting_1"><?php echo $acta['id']; ?></td>
														<td><?php echo $acta['fecha']; ?></td>
														<td><?php echo $acta['tema']; ?></td>
														<td><?php
															//echo $acta['ubicacion_id']; 
															$link = mysqli_connect($serv, $userS, $passS);
															mysqli_select_db($link, $bd);
															$tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente
															$result = mysqli_query($link, "SELECT barrio FROM Ubicaciones WHERE id = " . $acta['ubicacion_id']);
															while ($fila = mysqli_fetch_array($result)) {
																echo $fila['barrio'];

																mysqli_close($link);
															}

															?></td>
														<td><?php
															//echo $acta['responsable_id']; 
															$link = mysqli_connect($serv, $userS, $passS);
															mysqli_select_db($link, $bd);
															$tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente
															$result = mysqli_query($link, "SELECT nombres FROM Responsables WHERE id = " . $acta['responsable_id']);
															while ($fila = mysqli_fetch_array($result)) {
																echo $fila['nombres'];

																mysqli_close($link);
															}

															?></td>
														<td><?php echo $acta['objactividad']; ?></td>
														<td><?php echo $acta['anexo']; ?></td>
														<td class="actions">
															<?php echo $this->Html->link("Ver", "../actas/view/" . $acta['id'], array('target' => '_blank')); ?>
															<?php echo $this->Html->link("Editar", "../actas/edit/" . $acta['id'], array('target' => '_blank')); ?>
														</td>
													</tr>
											<?php
												}
											endforeach;
											?>
										</body>
									</table>
								<?php endif; ?>

								<div class="actions">
									<ul>
										<li><?php echo $this->Html->link(('Nueva Acta'), array('controller' => 'actas', 'action' => 'add')); ?> </li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /.panel-body -->
			</div>

			

			
		</div>
	</div>
</div>

<script>
	$(document).ready(function() {
		$('#dataTables-example').DataTable({
			responsive: true
		});
	});
	$(document).ready(function() {
		$('#dataTables-actividades').DataTable({
			responsive: true
		});
	});
	$(document).ready(function() {
		$('#dataTables-informes').DataTable({
			responsive: true
		});
	});
	$(document).ready(function() {
		$('#dataTables-planes').DataTable({
			responsive: true
		});
	});
	$(document).ready(function() {
		$('#dataTables-actas').DataTable({
			responsive: true
		});
	});
</script>