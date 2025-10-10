<?php $this->layout = 'default' ?>

<div class="max-w-5xl mx-auto text-center mb-8">
	<h1 class="text-5xl font-bold mb-4 text-blue-600">
		Formato Producto PIC 2025
	</h1>
	<p class="text-gray-500 mb-4 text-lg">
		Visualice e imprima la información registrada en la sistematización de productos.
	</p>
</div>

<div class="max-w-6xl mx-auto p-18">
	<div class="bg-white shadow-2xl rounded-xl p-12 block mb-10">

		<!-- Header -->
		<div class="flex items-center mb-4">
			<svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" class="p-2 bg-blue-100 rounded-lg text-blue-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clipboard-pen-icon lucide-clipboard-pen">
				<path d="M12 16v5" />
				<path d="M16 14v7" />
				<path d="M20 10v11" />
				<path d="m22 3-8.646 8.646a.5.5 0 0 1-.708 0L9.354 8.354a.5.5 0 0 0-.707 0L2 15" />
				<path d="M4 18v3" />
				<path d="M8 14v7" />
			</svg>
			<div class="ml-4">
				<h1 class="text-xl font-semibold">Avance del producto</h1>
				<p class="text-gray-500">Estado General del producto.</p>
			</div>
		</div>
		<div class="grid grid-cols-1 md:grid-cols-2">

			<!-- Objetivo General -->
			<div class="col-span-1 col-span-2 md:col-span-1 text-md font-semibold my-4 mr-4 rounded-lg border  border-gray-300 p-4">
				<div class="w-full flex items-center justify-center mb-2">
					<label for="objactividad" class="mr-2 font-semibold text-gray-800 text-center text-md">Avance de tarea</label>
				</div>
				<div class="w-full background-white flex items-center justify-center">
					<!-- Barra circular de progreso -->
					<svg width="150" height="150" viewBox="0 0 48 48">
						<circle
							cx="24"
							cy="24"
							r="20"
							stroke="#e5e7eb"
							stroke-width="6"
							fill="none" />
						<circle
							cx="24"
							cy="24"
							r="20"
							stroke="#2563eb"
							stroke-width="6"
							fill="none"
							stroke-dasharray="<?php echo 2 * pi() * 20; ?>"
							stroke-dashoffset="<?php
												$percent = isset($producto['Producto']['porcentajeavancetotal']) && is_numeric($producto['Producto']['porcentajeavancetotal']) ? $producto['Producto']['porcentajeavancetotal'] : 0;
												$circumference = 2 * pi() * 20;
												echo $circumference - ($circumference * $percent / 100);
												?>"
							transform="rotate(-90 24 24)" />
						<text x="25" y="27" text-anchor="middle" fill="#9b9b9bff" font-size="8" font-weight="bold" id="porcentaje-texto">
							<?php echo $percent . '%'; ?>
						</text>
					</svg>
				</div>
			</div>
			<div class="col-span-1 col-span-2 md:col-span-1 text-md font-semibold my-4 rounded-lg border  border-gray-300 p-4">
				<div class="w-full flex items-center justify-center mb-2">
					<label for="objactividad" class="mr-2 font-semibold text-gray-800 text-center text-md">Porcentaje reportado</label>
				</div>
				<div class="w-full background-white flex items-center justify-center">
					<!-- Barra circular de progreso -->
					<svg width="150" height="150" viewBox="0 0 48 48">
						<circle
							cx="24"
							cy="24"
							r="20"
							stroke="#e5e7eb"
							stroke-width="6"
							fill="none" />
						<circle
							cx="24"
							cy="24"
							r="20"
							stroke="#43A047"
							stroke-width="6"
							fill="none"
							stroke-dasharray="<?php echo 2 * pi() * 20; ?>"
							stroke-dashoffset="<?php
												$percent = isset($producto['Producto']['porcentajeavance1']) && is_numeric($producto['Producto']['porcentajeavance1']) ? $producto['Producto']['porcentajeavance1'] : 0;
												$circumference = 2 * pi() * 20;
												echo $circumference - ($circumference * $percent / 100);
												?>"
							transform="rotate(-90 24 24)" />
						<text x="25" y="27" text-anchor="middle" fill="#9b9b9bff" font-size="8" font-weight="bold" id="porcentaje-texto">
							<?php echo $percent . '%'; ?>
						</text>
					</svg>
				</div>
			</div>
		</div>
	</div>
	<!-- Header -->
</div>


<div class="flex max-w-6xl mx-auto text-center mb-8 gap-4">
	<button title="Imprimir" type="button" id="btn-print" class="flex items-center space-x-2 bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-printer-icon lucide-printer">
			<path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2" />
			<path d="M6 9V3a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v6" />
			<rect x="6" y="14" width="12" height="8" rx="1" />
		</svg>
	</button>
	<button title="Copiar enlace" class="flex items-center space-x-2 bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700" onclick="getlink()">
		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-square-pen-icon lucide-square-pen">
			<path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71" />
			<path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71" />
		</svg>
	</button>
	<button title="Actualizar soportes" class="flex items-center space-x-2 bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700" onclick="window.location.href='<?php echo $this->Html->url(array('action' => 'edit', $producto['Producto']['id'])); ?>'">
		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-square-pen-icon lucide-square-pen">
			<path d="M12 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" />
			<path d="M18.375 2.625a1 1 0 0 1 3 3l-9.013 9.014a2 2 0 0 1-.853.505l-2.873.84a.5.5 0 0 1-.62-.62l.84-2.873a2 2 0 0 1 .506-.852z" />
		</svg>
	</button>
	<button title="Ver Anexos" type="button" id="btn-hide"
		class="flex items-center w-38 space-x-2 bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
		<svg id="btn-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye-icon lucide-eye">
			<path d="M12 3v17a1 1 0 0 1-1 1H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v6a1 1 0 0 1-1 1H3" />
			<path d="m16 19 2 2 4-4" />
		</svg>
	</button>

	<?php
	if ($tipoUsuario === '2' || $tipoUsuario === '1') :
	?>

		<button title="Calificar SMS" type="button" id="btn-hide"
			class="flex items-center w-38 space-x-2 bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-list-check-icon lucide-list-check" onclick="window.location.href='<?php echo $this->Html->url(array('action' => 'smsedit', $producto['Producto']['id'])); ?>'">
				<path d="M16 5H3" />
				<path d="M16 12H3" />
				<path d="M11 19H3" />
				<path d="m15 18 2 2 4-4" />
			</svg>
		</button>

	<?php elseif ($tipoUsuario === '3' || $tipoUsuario === '1') : ?>
		<button title="Calificar PIC" type="button" id="btn-hide"
			class="flex items-center w-38 space-x-2 bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-list-check-icon lucide-list-check" onclick="window.location.href='<?php echo $this->Html->url(array('action' => 'editpic', $producto['Producto']['id'])); ?>'">
				<path d="M16 5H3" />
				<path d="M16 12H3" />
				<path d="M11 19H3" />
				<path d="m15 18 2 2 4-4" />
			</svg>
		</button>
	<?php
	endif;
	?>

</div>

<div class="max-w-6xl mx-auto p-18 mb-8">
	<div class="bg-white shadow-2xl rounded-xl p-12 block" id="print-area">
		<!-- Contenido a imprimir -->
		<div class="overflow-x-auto">
			<table class="w-full border border-gray-300 text-sm text-gray-800">
				<tbody>
					<!-- Encabezado con logo y datos -->
					<tr>
						<td rowspan="3" class="p-2 text-center align-center">
							<img src="../../img/logo_Pasto.png" alt="Logo Pasto" class="w-[500px] mx-auto">
						</td>
						<td colspan="8" class="border border-gray-300 font-bold text-center p-2">
							PROCESO SALUD PÚBLICA
						</td>
					</tr>
					<tr>
						<td colspan="8" class="border border-gray-300 font-semibold text-center p-2">
							NOMBRE DEL FORMATO: ANEXO TECNICO PIC
						</td>
					</tr>

					<tr>
						<td colspan="3" class="border border-gray-300 p-2">VIGENCIA: 2025</td>
						<td colspan="1" class="border border-gray-300 p-2">VERSIÓN: 02</td>
						<td colspan="2" class="border border-gray-300 p-2">CÓDIGO: SP-F-00X</td>
						<td colspan="3" class="border border-gray-300 py-2 pr-12 pl-2">
							<span class="font-semibold">Página:</span>
						</td>
					</tr>


					<tr class="bg-gray-100">
						<th colspan="9" class="border border-gray-300 text-center font-bold p-2 uppercase"><?php echo __('Producto Anexo Tecnico 2024'); ?></th>
					</tr>
					<tr>
						<td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Responsable'); ?></td>
						<td colspan="3" class="border border-gray-300 p-2 lowercase"><?php echo h($producto['Responsable']['nombres']); ?> </td>
						<td colspan="2" class="border border-gray-300 font-semibold p-2 text-center "><?php echo __('Referente SMS'); ?></td>
						<td colspan="3" class="border border-gray-300 p-2 lowercase"><?php echo h($producto['Referente']['nombres']); ?> </td>
					</tr>

					<tr>
						<td colspan="1" class="border border-gray-300 font-semibold p-2">Id</td>
						<td colspan="1" class="border border-gray-300 p-2">
							<?php echo h($producto['Producto']['id']); ?>
						</td>
						<td colspan="1" class="border border-gray-300 font-semibold p-2 text-center">Creacion</td>
						<td colspan="2" class="border border-gray-300 p-2"><?php echo $this->Time->format('d-m-Y h:i A', ($producto['Producto']['created'])); ?> </td>
						<td colspan="1" class="border border-gray-300 font-semibold p-2 text-center">Modificacion</td>
						<td colspan="3" class="border border-gray-300 p-2"><?php echo $this->Time->format('d-m-Y h:i A', ($producto['Producto']['modified'])); ?></td>
					</tr>

					<!-- Información general -->
					<tr class="bg-gray-100">

						<td colspan="1" class="border border-gray-300 font-semibold p-2">N° Producto</td>
						<td colspan="1" class="border border-gray-300 p-2">
							<?php echo ($producto['Producto']['numproductos']); ?>
						</td>
						<td colspan="1" class="border border-gray-300 font-semibold p-2">N° Tarea</td>
						<td colspan="1" class="border border-gray-300 p-2">
							<?php echo ($producto['Producto']['numtarea']); ?>
						</td>

						<td colspan="1" class="border border-gray-300 font-semibold p-2">Linea</td>
						<td colspan="3" class="border border-gray-300 p-2">
							<?php echo ($producto['Producto']['lineaoperativa']); ?>
						</td>
					</tr>

					<tr>
						<td colspan="1" class="border border-gray-300 font-semibold p-2 bg-gray-100">Dimensión</td>
						<td colspan="3" class="border border-gray-300 p-2">
							<?php echo ($producto['Producto']['nombredim']); ?>

							-
							<?php echo ($producto['Producto']['dimensiones']); ?>
						</td>
						<td colspan="1" class="border border-gray-300 font-semibold p-2 bg-gray-100">Presupuesto tarea</td>

						<td colspan="4" class="border border-gray-300 font-semibold p-2">
							<?php
							$valorTarea = $producto['Producto']['valortarea'];
							if (is_numeric($valorTarea)) {
								echo '$ ' . number_format($valorTarea, 0, '', '.');
							} else {
								echo h($valorTarea);
							}
							?>
						</td>
					</tr>
					<tr>
						<td colspan="1" class="border border-gray-300 font-semibold p-2">Normas</td>
						<td colspan="8" class="border border-gray-300 p-2">
							<?php echo $producto['Producto']['linormativas']; ?>
						</td>
					</tr>

					<tr>
						<td colspan="1" class="border border-gray-300 font-semibold p-2 bg-gray-100">Linea PPSC</td>
						<td colspan="8" class="border border-gray-300 p-2">
							<?php echo ($producto['Producto']['lineappsc']); ?>
						</td>
					</tr>

					<tr>
						<td colspan="1" class="border border-gray-300 font-semibold p-2 bg-gray-100">Sub linea PPSC</td>
						<td colspan="8" class="border border-gray-300 font-semibold p-2">
							<?php echo ($producto['Producto']['sublineappsc']); ?>
						</td>
					</tr>


					<tr>
						<td colspan="1" class="border border-gray-300 font-semibold p-2 text-center">Problemática</td>
						<td colspan="8" class="border border-gray-300 p-2">
							<?php echo $producto['Producto']['resultado']; ?>
						</td>
					</tr>

					<tr>
						<td colspan="1" class="border border-gray-300 font-semibold p-2 text-center">Producto</td>
						<td colspan="8" class="border border-gray-300 p-2">
							<?php echo $producto['Producto']['activity']; ?>
						</td>
					</tr>

					<tr>
						<td colspan="1" class="border border-gray-300 font-semibold p-2 text-center">Actividad</td>
						<td colspan="8" class="border border-gray-300 p-2">
							<?php echo $producto['Producto']['tarea']; ?>
						</td>
					</tr>


					<!-- Información general -->
					<tr class="bg-gray-100">
						<td colspan="2" class="border border-gray-300 font-semibold p-2">Cursos de Vida</td>
						<td colspan="2" class="border border-gray-300 p-2">
							<?php echo $producto['Producto']['vidacursos']; ?>
						</td>
						<td colspan="1" class="border border-gray-300 font-semibold p-2"> Entorno</td>
						<td colspan="1" class="border border-gray-300 p-2">
							<?php echo $producto['Producto']['entorno']; ?>
						</td>
						<td colspan="1" class="border border-gray-300 font-semibold p-2">Tecnología</td>
						<td colspan="2" class="border border-gray-300 p-2">
							<?php echo $producto['Producto']['tecnologias']; ?>
						</td>
					</tr>


					<tr class="bg-gray-100">
						<td colspan="1" class="border border-gray-300 font-semibold p-2">% producto</td>
						<td colspan="2" class="border border-gray-300 p-2">
							<?php echo $producto['Producto']['porcproducto']; ?>
						</td>
						<td colspan="1" class="border border-gray-300 font-semibold p-2">% tarea</td>
						<td colspan="2" class="border border-gray-300 p-2">
							<?php echo $producto['Producto']['porctareas']; ?>
						</td>
						<td colspan="1" class="border border-gray-300 font-semibold p-2">% avance</td>
						<td colspan="2" class="border border-gray-300 p-2">

						</td>
					</tr>


					<tr>
						<td colspan="1" class="border border-gray-300 font-semibold p-2 bg-gray-100">Estado</td>
						<td colspan="3" class="border border-gray-300 p-2">
							<?php echo $producto['Producto']['estado']; ?>
						</td>
						<td colspan="1" class="border border-gray-300 font-semibold p-2 bg-gray-100">Objetivo CB</td>

						<td colspan="4" class="border border-gray-300 font-semibold p-2">
							<?php echo $producto['Producto']['clasobjetivos']; ?>
						</td>
					</tr>


					<tr>
						<td colspan="1" class="border border-gray-300 font-semibold p-2 text-center">Evidencia requerida</td>
						<td colspan="8" class="border border-gray-300 p-2">
							<?php echo $producto['Producto']['evidencia']; ?>
						</td>
					</tr>

					<tr>
						<td colspan="1" class="border border-gray-300 font-semibold p-2 text-center">Observación PIC</td>
						<td colspan="8" class="border border-gray-300 p-2">
							<?php echo $producto['Producto']['observacionpic']; ?>
						</td>
					</tr>


					<tr>
						<td colspan="1" class="border border-gray-300 font-semibold p-2 text-center">Observación SMS</td>
						<td colspan="8" class="border border-gray-300 p-2">
							<?php echo $producto['Producto']['observacionsms']; ?>
						</td>
					</tr>
					<tr>
						<td colspan="1" class="border border-gray-300 font-semibold p-2">Anexo</td>
						<td colspan="2" class="border border-gray-300 p-2 text-blue-600 hover:underline break-words max-w-xs" style="word-break: break-all;">
							<?php echo $this->Html->link('../files/producto/anexo/' . $producto['Producto']['dirproduc'] . '/' . $producto['Producto']['anexo']); ?>
						</td>
						<td colspan="1" class="border border-gray-300 font-semibold p-2">Enlaces:</td>
						<td colspan="6" class="border border-gray-300 p-2 text-blue-600 hover:underline break-words max-w-xs" style="word-break: break-all;">
							<?php echo $this->Html->link($producto['Producto']['enlace']); ?>
						</td>
					</tr>

					<tr>
						<td colspan="1" class="border border-gray-300 font-semibold p-2">Enlaces:</td>
						<td colspan="8" class="border border-gray-300 p-2 text-blue-600 hover:underline break-words max-w-xs" style="word-break: break-all;">
							<?php echo $this->Html->link($producto['Producto']['enlacedos']); ?>
						</td>
					</tr>

				</tbody>
			</table>
		</div>
	</div>
</div>

<div class="max-w-6xl mx-auto text-left mt-10">
	<h1 class="text-3xl font-bold mb-1 text-blue-600">
		Sistematización de procesos
	</h1>
	<p class="text-gray-500 text-lg">
		<span class="font-normal">Aqui encontraras los anexos relacionados a la sistematización de producto</span>
	</p>
</div>

<div class="max-w-6xl mx-auto p-18 mt-8">
	<div class="bg-white shadow-2xl rounded-xl p-12 block mb-10">

		<!-- Header -->
		<div class="flex items-start mb-4">
			<svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" class="p-2 bg-blue-100 rounded-lg text-blue-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clipboard-pen-icon lucide-clipboard-pen">
				<rect width="6" height="16" x="4" y="2" rx="2" />
				<rect width="6" height="9" x="14" y="9" rx="2" />
				<path d="M22 22H2" />
			</svg>
			<div class="w-[80%] ml-4">
				<h1 class="text-xl font-semibold">Anexos relacionados al producto</h1>
				<p class="text-gray-500"> <?php echo ($producto['Producto']['activity']); ?></p>
			</div>
		</div>

		<div class="flex items-start mb-4 pl-14">
			<div class="w-[80%] ml-4">
				<p class="text-gray-500"> Tarea: <?php echo ($producto['Producto']['tarea']); ?>.</p>
			</div>
		</div>

		<div class="grid grid-cols-1 mt-10 mb-5">
			<div class="col-span-1 col-span-2 md:col-span-1 text-sm font-semibold rounded-lg border border-gray-300 py-[2px]">
				<div class="grid grid-cols-1 sm:grid-cols-4">
					<button type="button" id="btn-sistematizaciones" class="w-full py-1 text-black rounded hover:bg-blue-700 transition hover:text-white">Sistematizaciones</button>
					<button type="button" id="btn-planes-sesion" class="w-full py-1 text-black rounded hover:bg-blue-700 transition hover:text-white">Planes de sesión</button>
					<button type="button" id="btn-informe-eventos" class="w-full py-1 text-black rounded hover:bg-blue-700 transition hover:text-white">Informe de eventos</button>
					<button type="button" id="btn-actas" class="w-full py-1 text-black rounded hover:bg-blue-700 transition hover:text-white">Actas</button>
				</div>
			</div>
		</div>

		<div class="grid grid-cols-1">
			<!-- tabla sistematización -->
			<div id="tab-sistematizaciones" class="col-span-1 col-span-2 md:col-span-1 text-md font-semibold my-4  rounded-lg border  border-gray-300 px-8 pb-8">
				<?php if (!empty($producto['Proactividad'])) : ?>
					<table id="sistematizacion" style="width:100%;" class="stripe hover text-sm text-left text-gray-600 border border-gray-200 rounded-lg overflow-hidden">
						<thead class="bg-gray-200 font-medium border-b border-gray-300">
							<tr class=" text-gray-900 font-light">
								<th class="px-2 w-6"></th> <!-- control (+) -->
								<th class="px-4 py-2 font-semibold text-center cursor-pointer hover:bg-gray-100">ID</th>
								<th class="px-4 py-2 font-semibold text-center cursor-pointer hover:bg-green-100">Grupo participante</th>
								<th class="px-16 py-2 font-semibold text-center cursor-pointer hover:bg-green-100">Tipo población</th>
								<th class="px-16 py-2 font-semibold text-center cursor-pointer hover:bg-green-100">Objetivo actividad</th>
								<th class="px-4 py-2 font-semibold text-center cursor-pointer hover:bg-green-100">Responsable</th>
								<th class="px-4 py-2 font-semibold text-center cursor-pointer hover:bg-green-100">Sesión</th>
								<th class="px-4 py-2 font-semibold text-center cursor-pointer hover:bg-green-100">Acciones</th>
							</tr>
						</thead>
						<tbody class="bg-white divide-y divide-gray-300">
							<?php foreach ($producto['Proactividad'] as $proactividad) :
								if (!empty($proactividad['id'])) {
							?>
									<tr class="">
										<td class="dtr-control"></td>
										<td><?php echo $proactividad['id']; ?></td>
										<td><?php echo $proactividad['grupo']; ?></td>
										<td><?php echo $proactividad['poblaciones']; ?></td>
										<td><?php echo $proactividad['objactividad']; ?></td>
										<td><?php echo $proactividad['Responsable']['nombres']; ?></td>
										<td><?php echo $proactividad['caracteristicasesion']; ?></td>
										<td>
											<div class="btn-group">

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
				<?php else: ?>
					<div class="text-center text-gray-500 pt-2">
						No hay informes de sistematizaciones registradas para este producto.
					</div>
				<?php endif; ?>
			</div>

			<!-- tabla planes de sesion -->
			<div id="tab-planes-sesion" class="col-span-1 col-span-2 md:col-span-1 text-md font-semibold my-4  rounded-lg border  border-gray-300 px-8 pb-8">
				<?php if (!empty($producto['Plsesion'])) : ?>
					<table id="plansesion" style="width:100%;" class="stripe hover text-sm text-left text-gray-600 border border-gray-200 rounded-lg overflow-hidden">
						<thead class="bg-gray-200 font-medium border-b border-gray-300">
							<tr class=" text-gray-900 font-light">
								<th class="px-2 w-6"></th> <!-- control (+) -->
								<th class="px-4 py-2 font-semibold text-center cursor-pointer hover:bg-gray-100">ID</th>
								<th class="px-4 py-2 font-semibold text-center cursor-pointer hover:bg-green-100">Fecha</th>
								<th class="px-16 py-2 font-semibold text-center cursor-pointer hover:bg-green-100">Tema</th>
								<th class="px-16 py-2 font-semibold text-center cursor-pointer hover:bg-green-100">Intención</th>
								<th class="px-4 py-2 font-semibold text-center cursor-pointer hover:bg-green-100">Dimensión</th>
								<th class="px-4 py-2 font-semibold text-center cursor-pointer hover:bg-green-100">Responsable</th>
								<th class="px-4 py-2 font-semibold text-center cursor-pointer hover:bg-green-100">Acciones</th>
							</tr>
						</thead>
						<tbody class="bg-white divide-y divide-gray-300">
							<?php foreach ($producto['Plsesion'] as $plsesion) :
								if (!empty($plsesion['id'])) {
							?>
									<tr class="">
										<td class="dtr-control"></td>
										<td><?php echo $plsesion['id']; ?></td>
										<td><?php echo $plsesion['fecha']; ?></td>
										<td><?php echo $plsesion['tema']; ?></td>
										<td><?php echo $plsesion['intension']; ?></td>
										<td><?php echo $plsesion['dimension']; ?></td>
										<td><?php echo $plsesion['Responsable']['nombres']; ?></td>
										<td>
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
				<?php else: ?>
					<div class="text-center text-gray-500 pt-2">
						No hay informes de Planes de sesion registrados para este producto.
					</div>
				<?php endif; ?>
			</div>

			<!-- tabla informe de eventos -->
			<div id="tab-informe-eventos" class="col-span-1 col-span-2 md:col-span-1 text-md font-semibold my-4  rounded-lg border  border-gray-300 px-8 pb-8">
				<?php if (!empty($producto['Infoevento'])) : ?>
					<table id="infoevento" style="width:100%;" class="stripe hover text-sm text-left text-gray-600 border border-gray-200 rounded-lg overflow-hidden">
						<thead class="bg-gray-200 font-medium border-b border-gray-300">
							<tr class=" text-gray-900 font-light">
								<th class="px-2 w-6"></th> <!-- control (+) -->
								<th class="px-4 py-2 font-semibold text-center cursor-pointer hover:bg-gray-100">ID</th>
								<th class="px-4 py-2 font-semibold text-center cursor-pointer hover:bg-green-100">Fecha</th>
								<th class="px-16 py-2 font-semibold text-center cursor-pointer hover:bg-green-100">Tema</th>
								<th class="px-16 py-2 font-semibold text-center cursor-pointer hover:bg-green-100">Tipo</th>
								<th class="px-4 py-2 font-semibold text-center cursor-pointer hover:bg-green-100">Anexo</th>
								<th class="px-4 py-2 font-semibold text-center cursor-pointer hover:bg-green-100">Observaciones</th>
								<th class="px-4 py-2 font-semibold text-center cursor-pointer hover:bg-green-100">Responsable</th>
								<th class="px-4 py-2 font-semibold text-center cursor-pointer hover:bg-green-100">Acciones</th>
							</tr>
						</thead>
						<tbody class="bg-white divide-y divide-gray-300">
							<?php foreach ($producto['Infoevento'] as $infoevento) :
								if (!empty($infoevento['id'])) {
							?>
									<tr class="">
										<td class="dtr-control"></td>
										<td><?php echo $infoevento['id']; ?></td>
										<td><?php echo $infoevento['fecha']; ?></td>
										<td><?php echo $infoevento['tema']; ?></td>
										<td><?php echo $infoevento['tipo']; ?></td>
										<td><?php echo $infoevento['anexo']; ?></td>
										<td><?php echo $infoevento['observacion']; ?></td>
										<td><?php echo $infoevento['Responsable']['nombres']; ?></td>
										<td>
											<div class="btn-group">
												<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
													<?php echo ('Acciones'); ?> <span class="caret"></span>
												</button>
												<ul class="dropdown-menu" role="menu">
													<li>
														<?php echo $this->Html->link("Ver", "../infoeventos/view/" . $infoevento['id'], array('target' => '_blank')); ?>
													</li>
													<li>
														<?php echo $this->Html->link("Editar", "../infoeventos/edit/" . $infoevento['id'], array('target' => '_blank')); ?>
													</li>
												</ul>
											</div>
										</td>
									</tr>
							<?php	}
							endforeach; ?>
						</tbody>
					</table>
				<?php else: ?>
					<div class="text-center text-gray-500 pt-2">
						No hay informes de eventos registrados para este producto.
					</div>
				<?php endif; ?>
			</div>

			<div id="tab-actas" class="col-span-1 col-span-2 md:col-span-1 text-md font-semibold my-4  rounded-lg border  border-gray-300 px-8 pb-8">
				<?php if (!empty($producto['Acta'])) : ?>
					<table id="actas" style="width:100%;" class="stripe hover text-sm text-left text-gray-600 border border-gray-200 rounded-lg overflow-hidden">
						<thead class="bg-gray-200 font-medium border-b border-gray-300">
							<tr class=" text-gray-900 font-light">
								<th class="px-2 w-6"></th> <!-- control (+) -->
								<th class="px-4 py-2 font-semibold text-center cursor-pointer hover:bg-gray-100">ID</th>
								<th class="px-4 py-2 font-semibold text-center cursor-pointer hover:bg-green-100">Fecha</th>
								<th class="px-16 py-2 font-semibold text-center cursor-pointer hover:bg-green-100">Tema</th>
								<th class="px-16 py-2 font-semibold text-center cursor-pointer hover:bg-green-100">Lugar</th>
								<th class="px-4 py-2 font-semibold text-center cursor-pointer hover:bg-green-100">Responsable</th>
								<th class="px-4 py-2 font-semibold text-center cursor-pointer hover:bg-green-100">Objetivo</th>
								<th class="px-4 py-2 font-semibold text-center cursor-pointer hover:bg-green-100">Anexo</th>
								<th class="px-4 py-2 font-semibold text-center cursor-pointer hover:bg-green-100">Acciones</th>
							</tr>
						</thead>
						<tbody class="bg-white divide-y divide-gray-300">
							<?php foreach ($producto['Acta'] as $acta) :
								if (!empty($acta['id'])) {
							?>
									<tr class="">
										<td class="dtr-control"></td>
										<td><?php echo $acta['id']; ?></td>
										<td><?php echo $acta['fecha']; ?></td>
										<td><?php echo $acta['tema']; ?></td>
										<td><?php echo $acta['Ubicacion']['sitio']; ?></td>
										<td><?php echo $acta['Responsable']['nombres']; ?></td>
										<td><?php echo $acta['objactividad']; ?></td>
										<td class="text-center break-words max-w-xs" style="word-break: break-all;"><?php echo $acta['anexo']; ?></td>
										<td>
											<div class="btn-group">
												<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
													<?php echo ('Acciones'); ?> <span class="caret"></span>
												</button>
												<ul class="dropdown-menu" role="menu">
													<li> <?php echo $this->Html->link("Ver", "../actas/view/" . $acta['id'], array('target' => '_blank')); ?></li>
													<li><?php echo $this->Html->link("Editar", "../actas/edit/" . $acta['id'], array('target' => '_blank')); ?></li>
												</ul>
											</div>

										</td>
									</tr>
							<?php } else {
									echo "<tr><td colspan='9' class='text-center p-4'>No hay actas registradas para este producto.</td></tr>";
								}
							endforeach; ?>
						</tbody>
					</table>
				<?php else: ?>
					<div class="text-center text-gray-500 pt-2">
						No hay informes de actas para este producto.
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<!-- Header -->
</div>


<script>
	tablaProperties = {
		createdRow: function(row) {
			// Aplica clases a cada celda del body
			$('td', row).each(function(index) {
				$(this).addClass('px-4 py-3 align-center-left');
				if (index === 1) $(this).addClass('text-center text-black font-bold'); // ID

				if (index === 2) $(this).addClass('text-center'); // idproducto

				// Para columnas de texto largo (por ejemplo, nombreproducto, objactividad)
				if (index === 3 || index === 4) {
					const maxLength = 200;
					const cellText = $(this).text();
					if (cellText.length > maxLength) {
						const truncated = cellText.substring(0, maxLength) + '...';
						$(this).html(
							`<span class="texto-truncado">${truncated}</span>
                                     <span class="texto-completo hidden">${cellText}</span>
                                     <a href="#" class="ver-mas text-blue-500 underline ml-2">Ver más</a>
                                     <a href="#" class="ver-menos text-blue-500 underline ml-2 hidden">Ver menos</a>`
						);
					}
				}

				if (index === 5) $(this).addClass('text-center font-bold text-black text-xs'); // responsable
				if (index === 6) $(this).addClass('text-center'); // conCat
			});
			// Aplica clase a la fila completa si quieres
			$(row).addClass('hover:bg-gray-50 transition ');
		},
		responsive: {
			details: {
				type: 'column',
				target: 'td.dtr-control' // usa la col de control
			}
		},
		dom: '<"flex items-center justify-between py-8"<"w-2/3 flex"<"flex flex-row w-full custom-search-container">><"flex items-center custom-pagination"p>>rt',
		pageLength: 3,
	};

	$(document).ready(function() {
		const $sistematizacion = $('#sistematizacion');
		const $plansesion = $('#plansesion');
		const $actividad = $('#actividad');
		const $infoevento = $('#infoevento');
		const $actas = $('#actas');


		// Inicializar DataTable
		const tableSistematizacion = $sistematizacion.DataTable(tablaProperties);
		const tablePlansesion = $plansesion.DataTable(tablaProperties);
		const tableActividad = $actividad.DataTable(tablaProperties);
		const tableInfoevento = $infoevento.DataTable(tablaProperties);
		const tableActas = $actas.DataTable(tablaProperties);

		$sistematizacion.removeClass("dataTable no-footer rounded-lg shadow-lg overflow-hidden");
		$plansesion.removeClass("dataTable no-footer rounded-lg shadow-lg overflow-hidden");
		$actividad.removeClass("dataTable no-footer rounded-lg shadow-lg overflow-hidden");
		$infoevento.removeClass("dataTable no-footer rounded-lg shadow-lg overflow-hidden");
		$actas.removeClass("dataTable no-footer rounded-lg shadow-lg overflow-hidden");

		// Reemplazar el input original por uno custom
		$('.custom-search-container').html(`
        <div class="relative w-1/2">
            <svg class="absolute left-2 top-2.5 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-scan-search-icon lucide-scan-search"><path d="M3 7V5a2 2 0 0 1 2-2h2"/><path d="M17 3h2a2 2 0 0 1 2 2v2"/><path d="M21 17v2a2 2 0 0 1-2 2h-2"/><path d="M7 21H5a2 2 0 0 1-2-2v-2"/><circle cx="12" cy="12" r="3"/><path d="m16 16-1.9-1.9"/></svg>
            <input 
                type="search" 
                id="customSearch" 
                class="pl-10 pr-4 py-2 border border-gray-300 rounded-lg shadow-sm 
                       focus:ring-2 focus:ring-blue-500 focus:outline-none w-full" 
                placeholder="Buscar registros..."
            >
        </div>
        `);

		// Función para estilizar la paginación
		$('.custom-pagination').html(`
            <div class="pagination-container flex items-center space-x-2">
                <button class="first-page bg-white border border-gray-300 text-gray-700 px-3 py-1 rounded hover:bg-gray-100" title="Primera página" id="first-page">&laquo;&laquo;</button>
                <button class="previous-page bg-white border border-gray-300 text-gray-700 px-3 py-1 rounded hover:bg-gray-100" title="Página anterior" id="previous-page">&laquo;</button>
                <span class="page-info text-gray-700 text-sm"></span>
                <button class="next-page bg-white border border-gray-300 text-gray-700 px-3 py-1 rounded hover:bg-gray-100" title="Página siguiente" id="next-page">&raquo;</button>
                <button class="last-page bg-white border border-gray-300 text-gray-700 px-3 py-1 rounded hover:bg-gray-100" title="Última página" id="last-page">&raquo;&raquo;</button>
            </div>
        `);

		$('.custom-table-length').html(`
        <table>
           <tbody>
               <tr>
                   <td>
                       <div class="flex items-center space-x-2">
                           <label for="table-length" class="text-gray-700 text-sm">Mostrar</label>
                           <select id="table-length" class="border border-gray-300 rounded px-2 py-1 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                               <option value="5">5</option>
                               <option value="7" selected>7</option>
                               <option value="10">10</option>
                               <option value="25">25</option>
                               <option value="50">50</option>
                               <option value="100">100</option>
                           </select>
                           <span class="text-gray-700 text-sm">registros</span>
                       </div>
                   </td>
               </tr>
           </tbody>
        </table>
        `);

		// Conectar botones de paginación personalizados
		$(document).on("click", ".first-page", function() {
			tableSistematizacion.page("first").draw("page");
			tableActividad.page("first").draw("page");
			tablePlansesion.page("first").draw("page");
			tableInfoevento.page("first").draw("page");
			tableActas.page("first").draw("page");
		});

		$(document).on("click", ".previous-page", function() {
			tableSistematizacion.page("previous").draw("page");
			tableActividad.page("previous").draw("page");
			tablePlansesion.page("previous").draw("page");
			tableInfoevento.page("previous").draw("page");
			tableActas.page("previous").draw("page");
		});

		$(document).on("click", ".next-page", function() {
			tableSistematizacion.page("next").draw("page");
			tableActividad.page("next").draw("page");
			tablePlansesion.page("next").draw("page");
			tableInfoevento.page("next").draw("page");
			tableActas.page("next").draw("page");
		});

		$(document).on("click", ".last-page", function() {
			tableSistematizacion.page("last").draw("page");
			tableActividad.page("last").draw("page");
			tablePlansesion.page("last").draw("page");
			tableInfoevento.page("last").draw("page");
			tableActas.page("last").draw("page");
		});

		tableSistematizacion.on('draw', stylePagination);
		tableActividad.on('draw', stylePagination);
		tablePlansesion.on('draw', stylePagination);
		tableInfoevento.on('draw', stylePagination);
		tableActas.on('draw', stylePagination);
	});

	$(document).on('click', '.ver-mas', function(e) {
		e.preventDefault();
		const td = $(this).closest('td');
		td.find('.texto-truncado').addClass('hidden');
		td.find('.texto-completo').removeClass('hidden');
		td.find('.ver-mas').addClass('hidden');
		td.find('.ver-menos').removeClass('hidden');
	});

	$(document).on('click', '.ver-menos', function(e) {
		e.preventDefault();
		const td = $(this).closest('td');
		td.find('.texto-truncado').removeClass('hidden');
		td.find('.texto-completo').addClass('hidden');
		td.find('.ver-mas').removeClass('hidden');
		td.find('.ver-menos').addClass('hidden');
	});
</script>

<script>
	function imprimirContenido(e, printContents) {
		e.preventDefault();
		if (!printContents) {
			alert("El área de impresión está vacía o no existe");
			return;
		}

		var w = window.open('', '', 'height=900,width=1200');
		w.document.write('<html><head><title>Impresión</title>');
		w.document.write('<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">');
		w.document.write('<link rel="stylesheet" href="/css/app.css" />');
		// Estilos para impresión: ajusta márgenes y fuerza salto de página
		w.document.write('<style>@media print { body { margin: 0; } .bg-white { box-shadow: none !important; } table { page-break-inside:auto; } tr { page-break-inside:avoid; page-break-after:auto; } .page-break { page-break-before:always; } }</style>');
		w.document.write('</head><body style="margin:0;padding:0;">');
		w.document.write('<div style="width:100vw;max-width:100%;box-sizing:border-box;">' + printContents.innerHTML + '</div>');
		w.document.write('</body></html>');
		w.document.close();
		w.focus();
		w.print();
	}


	document.addEventListener("DOMContentLoaded", function() {
		const tabs = [{
				btn: "btn-sistematizaciones",
				section: "tab-sistematizaciones"
			},
			{
				btn: "btn-planes-sesion",
				section: "tab-planes-sesion"
			},
			{
				btn: "btn-informe-eventos",
				section: "tab-informe-eventos"
			},
			{
				btn: "btn-actas",
				section: "tab-actas"
			}
		];

		function showTab(sectionId, btnId) {
			tabs.forEach(tab => {
				document.getElementById(tab.section).classList.add("hidden");
				document.getElementById(tab.btn).classList.remove("bg-blue-700", "text-white");
				document.getElementById(tab.btn).classList.add("text-black");
			});
			document.getElementById(sectionId).classList.remove("hidden");
			document.getElementById(btnId).classList.add("bg-blue-700", "text-white");
			document.getElementById(btnId).classList.remove("text-black");
		}

		tabs.forEach(tab => {
			document.getElementById(tab.btn).addEventListener("click", function() {
				showTab(tab.section, tab.btn);
			});
		});


		// Mostrar el primero por defecto
		showTab("tab-sistematizaciones", "btn-sistematizaciones");


		var btn = document.getElementById('btn-print');
		var printContents = document.getElementById('print-area');
		var btnHide = document.getElementById('btn-hide');
		const btnText = document.getElementById('btn-text');
		const btnIcon = document.getElementById('btn-icon');

		btn.addEventListener('click', function(e) {
			imprimirContenido(e, printContents);
		});

		let isEdit = true; // estado inicial: "Editar"

		btnHide.addEventListener('click', function(e) {
			e.preventDefault();
			if (isEdit) {

				// Volver a "Editar"
				btnHide.title = 'Ver producto';
				btnIcon.innerHTML = `
                 <path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0" />
                <circle cx="12" cy="12" r="3" />
            `;
			} else {
				// Cambiar a "Guardar"

				btnHide.title = 'Ver anexos';
				btnIcon.innerHTML = `
            <path d="M12 3v17a1 1 0 0 1-1 1H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v6a1 1 0 0 1-1 1H3" />
            <path d="m16 19 2 2 4-4" />
            `;
			}
			isEdit = !isEdit;
			printContents.classList.toggle('block');
			printContents.classList.toggle('hidden');
		});


		var porcentaje = <?php echo isset($producto['Producto']['porcentajeavancetotal']) && is_numeric($producto['Producto']['porcentajeavancetotal']) ? $producto['Producto']['porcentajeavancetotal'] : 0; ?>;
		var porcentajeavance = <?php echo isset($producto['Producto']['porcentajeavance1']) && is_numeric($producto['Producto']['porcentajeavance1']) ? $producto['Producto']['porcentajeavance1'] : 0; ?>;

		const barraProgreso = document.getElementById("barra-progreso");
		const barraavance = document.getElementById("barra-progreso-avance");

		progressControl(barraProgreso, porcentaje);
		progressControl(barraavance, porcentajeavance);


	});


	function progressControl(barraProgreso, porcentaje) {
		// Animación de ancho
		barraProgreso.style.transition = "width 1s cubic-bezier(0.4,0,0.2,1)";
		setTimeout(() => {
			barraProgreso.style.width = porcentaje + "%";
		}, 100); // pequeño delay para que la animación se vea

		// Quitar posibles colores previos
		barraProgreso.classList.remove("bg-red-600", "bg-yellow-600", "bg-blue-600", "bg-green-600", "bg-gray-600");

		if (porcentaje >= 0 && porcentaje <= 25) {
			barraProgreso.classList.add("bg-red-600");
		} else if (porcentaje > 25 && porcentaje <= 50) {
			barraProgreso.classList.add("bg-yellow-600");
		} else if (porcentaje > 50 && porcentaje <= 75) {
			barraProgreso.classList.add("bg-blue-600");
		} else if (porcentaje > 75 && porcentaje <= 100) {
			barraProgreso.classList.add("bg-green-600");
		} else {
			barraProgreso.classList.add("bg-gray-600");
		}

	}
</script>


<script type="text/javascript">
	$(document).ready(function() {
		$('textarea').each(function() {
			this.setAttribute('style', 'height:' + (this.scrollHeight) + 'px;overflow-y:hidden;');
		}).on('input', function() {
			this.style.height = 'auto';
			this.style.height = (this.scrollHeight) + 'px';
		});

	});

	function toggleMenu(btn) {
		// Cierra otros menús abiertos
		document.querySelectorAll('.menu-options').forEach(function(menu) {
			if (menu !== btn.nextElementSibling) menu.classList.add('hidden');
		});
		// Alterna el menú actual
		btn.nextElementSibling.classList.toggle('hidden');
	}
	// Cierra el menú si se hace clic fuera
	document.addEventListener('click', function(e) {
		document.querySelectorAll('.menu-options').forEach(function(menu) {
			if (!menu.contains(e.target) && !menu.previousElementSibling.contains(e.target)) {
				menu.classList.add('hidden');
			}
		});
	});
</script>