
<?php $this->layout = 'default' ?>

<div class="max-w-5xl mx-auto text-center mb-8">
	<h1 class="text-5xl font-bold mb-4 text-blue-600">
		Seguimiento Actividad
	</h1>
	<p class="text-gray-500 mb-4 text-lg">
		Visualice e imprima la información registrada del seguimiento de la actividad.
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
				<h1 class="text-xl font-semibold">Avance de la actividad</h1>
				<p class="text-gray-500">Mes reportado: <?php echo h($seguimiento['Seguimiento']['fecha']); ?></p>
			</div>
		</div>
		<div class="grid grid-cols-1 md:grid-cols-2">

			<!-- Objetivo General -->
			<div class="col-span-1 col-span-2 md:col-span-1 text-md font-semibold my-4 mr-4 rounded-lg border  border-gray-300 p-4">
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
							stroke="#2563eb"
							stroke-width="6"
							fill="none"
							stroke-dasharray="<?php echo 2 * pi() * 20; ?>"
							stroke-dashoffset="<?php
												$percent = isset($seguimiento['Seguimiento']['valorprogramado']) && is_numeric($seguimiento['Seguimiento']['valorejecutado']) ? $seguimiento['Seguimiento']['valorejecutado'] : 0;
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
					<label for="objactividad" class="mr-2 font-semibold text-gray-800 text-center text-md">Avance de actividad</label>
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
												$percent = isset($seguimiento['Producto']['porcentajeavancetotal']) && is_numeric($seguimiento['Producto']['porcentajeavancetotal']) ? $seguimiento['Producto']['porcentajeavancetotal'] : 0;
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

	<?php if ($tipoUsuario === '3' || $tipoUsuario === '1') : ?>
		<button title="Editar Reporte" type="button" id="btn-hide"
			class="flex items-center w-38 space-x-2 bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-list-check-icon lucide-list-check" onclick="window.location.href='<?php echo $this->Html->url(array('controller'=>'Seguimientos','action' => 'editpic/'. $seguimiento['Seguimiento']['id'])); ?>'">
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
							NOMBRE DEL FORMATO: <br>Reporte al cumplimiento de actividades (PIC) del Sistema de información Ciudad Bienestar</br>
						</td>
					</tr>

					<tr>
						<td colspan="3" class="border border-gray-300 p-2">VIGENCIA: 2026</td>
						<td colspan="1" class="border border-gray-300 p-2">VERSIÓN: 02</td>
						<td colspan="2" class="border border-gray-300 p-2">CÓDIGO: SP-F-000</td>
						<td colspan="3" class="border border-gray-300 py-2 pr-12 pl-2">
							<span class="font-semibold">Página:</span>
						</td>
					</tr>


					<tr class="bg-gray-100">
						<th colspan="9" class="border border-gray-300 text-center font-bold p-2 uppercase"><?php echo __('Producto Anexo Tecnico 2026'); ?></th>
					</tr>
					<tr>
						<td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Responsable'); ?></td>
						<td colspan="3" class="border border-gray-300 p-2 lowercase"><?php echo h($seguimiento['Responsable']['nombres']); ?> </td>
						<td colspan="2" class="border border-gray-300 font-semibold p-2 text-center "><?php echo __('Referente SMS'); ?></td>
						<td colspan="3" class="border border-gray-300 p-2 lowercase"><?php echo h($seguimiento['Referente']['nombres']); ?> </td>
					</tr>

					<tr>
						<td colspan="1" class="border border-gray-300 font-semibold p-2">Id</td>
						<td colspan="1" class="border border-gray-300 p-2">
							<?php echo h($seguimiento['Producto']['id']); ?>
						</td>
						<td colspan="1" class="border border-gray-300 font-semibold p-2 text-center">Creación</td>
						<td colspan="2" class="border border-gray-300 p-2"><?php echo $this->Time->format('d-m-Y h:i A', ($seguimiento['Seguimiento']['created'])); ?> </td>
						<td colspan="1" class="border border-gray-300 font-semibold p-2 text-center">Modificación</td>
						<td colspan="3" class="border border-gray-300 p-2"><?php echo $this->Time->format('d-m-Y h:i A', ($seguimiento['Seguimiento']['update_date'])); ?></td>
					</tr>

					<!-- Información general -->
					<tr class="bg-gray-100">

						<td colspan="1" class="border border-gray-300 font-semibold p-2">N° Producto</td>
						<td colspan="1" class="border border-gray-300 p-2">
							<?php echo ($seguimiento['Producto']['numproductos']); ?>
						</td>
						<td colspan="1" class="border border-gray-300 font-semibold p-2">N° Actividad</td>
						<td colspan="1" class="border border-gray-300 p-2">
							<?php echo ($seguimiento['Producto']['id']); ?>
						</td>

						<td colspan="1" class="border border-gray-300 font-semibold p-2">Linea Operativa</td>
						<td colspan="3" class="border border-gray-300 p-2">
							<?php echo ($seguimiento['Producto']['lineaOperativa']); ?>
						</td>
					</tr>

					<tr>
						<td colspan="1" class="border border-gray-300 font-semibold p-2 bg-gray-100">Proyecto relacionado</td>
						<td colspan="3" class="border border-gray-300 p-2">
							<?php echo ($seguimiento['Producto']['nombredim']); ?>							
						</td>
						<td colspan="1" class="border border-gray-300 font-semibold p-2 bg-gray-100">Presupuesto actividad</td>

						<td colspan="4" class="border border-gray-300 font-semibold p-2">
							<?php
							$valoractividad = $seguimiento['Producto']['valor_total'];
							if (is_numeric($valoractividad)) {
								echo '$ ' . number_format($valoractividad, 0, '', '.');
							} else {
								echo h($valoractividad);
							}
							?>
						</td>
					</tr>
					<tr>
						<td colspan="1" class="border border-gray-300 font-semibold p-2">Indicador PTS</td>
						<td colspan="8" class="border border-gray-300 p-2">
							<?php echo $seguimiento['Producto']['indicadorpts']; ?>
						</td>
					</tr>

					<tr>
						<td colspan="1" class="border border-gray-300 font-semibold p-2 bg-gray-100">Eje Estratégico</td>
						<td colspan="3" class="border border-gray-300 p-2">
							<?php echo ($seguimiento['Producto']['ejeEstrategico']); ?>
						</td>
					
						<td colspan="1" class="border border-gray-300 font-semibold p-2 bg-gray-100">Linea Operativa</td>
						<td colspan="4" class="border border-gray-300 font-semibold p-2">
							<?php echo ($seguimiento['Producto']['lineaOperativa']); ?>
						</td>
					</tr>


					<tr>
						<td colspan="1" class="border border-gray-300 font-semibold p-2 text-center">Problemática</td>
						<td colspan="8" class="border border-gray-300 p-2">
							<?php echo $seguimiento['Producto']['Evento']; ?>
						</td>
					</tr>

					<tr>
						<td colspan="1" class="border border-gray-300 font-semibold p-2 text-center">Producto</td>
						<td colspan="8" class="border border-gray-300 p-2">
							<?php echo $seguimiento['Producto']['producto']; ?>
						</td>
					</tr>
					<tr>
						<td colspan="1" class="border border-gray-300 font-semibold p-2">Indicador de Producto</td>
						<td colspan="8" class="border border-gray-300 p-2">
							<?php echo $seguimiento['Producto']['indicadorProducto']; ?>
						</td>
					</tr>
					<tr>
						<td colspan="1" class="border border-gray-300 font-semibold p-2">Resultado Esperado</td>
						<td colspan="8" class="border border-gray-300 p-2">
							<?php echo $seguimiento['Producto']['resultadoEsperado']; ?>
						</td>
					</tr>
						<tr>
						<td colspan="1" class="border border-gray-300 font-semibold p-2">Linea Base</td>
						<td colspan="8" class="border border-gray-300 p-2">
							<?php echo $seguimiento['Producto']['lineaBase']; ?>
						</td>
					</tr>

					<tr>
						<td colspan="1" class="border border-gray-300 font-semibold p-2 text-center">Actividad</td>
						<td colspan="8" class="border border-gray-300 p-2">
							<?php echo $seguimiento['Producto']['actividad']; ?>
						</td>
					</tr>
					<tr>
						<td colspan="1" class="border border-gray-300 font-semibold p-2 bg-gray-100">Cantidad</td>
						<td colspan="3" class="border border-gray-300 p-2">
							<?php echo ($seguimiento['Producto']['cantidad']); ?>
						</td>
					
						<td colspan="1" class="border border-gray-300 font-semibold p-2 bg-gray-100">Unidad de Medida</td>
						<td colspan="4" class="border border-gray-300 font-semibold p-2">
							<?php echo ($seguimiento['Producto']['unidadMedida']); ?>
						</td>
					</tr>


					<!-- Información general -->
					<tr class="bg-gray-100">
						<td colspan="2" class="border border-gray-300 font-semibold p-2">Cursos de Vida</td>
						<td colspan="2" class="border border-gray-300 p-2">
							<?php echo $seguimiento['Producto']['cursoVida']; ?>
						</td>
						<td colspan="1" class="border border-gray-300 font-semibold p-2"> Entorno</td>
						<td colspan="1" class="border border-gray-300 p-2">
							<?php echo $seguimiento['Producto']['entorno']; ?>
						</td>
						<td colspan="1" class="border border-gray-300 font-semibold p-2">Tecnología</td>
						<td colspan="2" class="border border-gray-300 p-2">
							<?php echo $seguimiento['Producto']['tecnologiapic']; ?>
						</td>
					</tr>


					<tr class="bg-gray-100">
						
					<td colspan="1" class="border border-gray-300 font-semibold p-2">Población</td>
						<td colspan="3" class="border border-gray-300 p-2"><?php echo $seguimiento['Producto']['poblacion']; ?>
						</td>
						<td colspan="1" class="border border-gray-300 font-semibold p-2 bg-gray-100">Estado</td>
						<td colspan="4" class="border border-gray-300 p-2">
							<?php echo $seguimiento['Seguimiento']['estado']; ?>
						</td>

					

						
					</tr>


					<tr>
						<td colspan="1" class="border border-gray-300 font-semibold p-2">% avance</td>
						<td colspan="3" class="border border-gray-300 p-2"><?php echo $seguimiento['Seguimiento']['valorejecutado']; ?>%
						</td>
						<td colspan="1" class="border border-gray-300 font-semibold p-2 bg-gray-100">Pago estimado</td>

						<td colspan="4" class="border border-gray-300 font-semibold p-2">

							<?php
								$valoractividad = $seguimiento['Producto']['valor_total'];
								$valorejecutado = $seguimiento['Seguimiento']['valorejecutado'];

								// Verificamos que ambos sean números para evitar errores
								if (is_numeric($valoractividad) && is_numeric($valorejecutado)) {
									$porcentaje = $valorejecutado / 100;
									$resultado = $valoractividad * $porcentaje;
									echo '$ ' . number_format($resultado, 0, ',', '.');
								} else {
									// Si no son números, mostramos un guion o 0
									echo '$ 0';
								}
								?>
							
							
						</td>
							
							
						</td>
					</tr>


					<tr>
						<td colspan="1" class="border border-gray-300 font-semibold p-2 text-center">Evidencia requerida</td>
						<td colspan="8" class="border border-gray-300 p-2">
							<?php echo $seguimiento['Producto']['soportes']; ?>
						</td>
					</tr>

					<tr>
						<td colspan="1" class="border border-gray-300 font-semibold p-2 text-center">Observación PIC</td>
						<td colspan="8" class="border border-gray-300 p-2">
							<?php echo $seguimiento['Seguimiento']['observacionoperador']; ?>
						</td>
					</tr>


					<tr>
						<td colspan="1" class="border border-gray-300 font-semibold p-2 text-center">Observación SMS</td>
						<td colspan="8" class="border border-gray-300 p-2">
							<?php echo $seguimiento['Seguimiento']['observacionreferente']; ?>
						</td>
					</tr>
					<tr>
						<td colspan="1" class="border border-gray-300 font-semibold p-2">Anexo</td>
						<td colspan="2" class="border border-gray-300 p-2 text-blue-600 hover:underline break-words max-w-xs" style="word-break: break-all;">
							<?php echo $this->Html->link('../files/producto/anexo/' . $seguimiento['Producto']['dirproduc'] . '/' . $seguimiento['Producto']['anexo']); ?>
						</td>
						<td colspan="1" class="border border-gray-300 font-semibold p-2">Enlaces:</td>
						<td colspan="6" class="border border-gray-300 p-2 text-blue-600 hover:underline break-words max-w-xs" style="word-break: break-all;">
							<?php echo $this->Html->link($seguimiento['Seguimiento']['enlace1']); ?>
						</td>
					</tr>

					<tr>
						<td colspan="1" class="border border-gray-300 font-semibold p-2">Enlaces:</td>
						<td colspan="8" class="border border-gray-300 p-2 text-blue-600 hover:underline break-words max-w-xs" style="word-break: break-all;">
							<?php echo $this->Html->link($seguimiento['Seguimiento']['enlace2']); ?>
						</td>
					</tr>

				</tbody>
			</table>
		</div>
	</div>
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
		const $seguimiento = $('#seguimientos');


		// Inicializar DataTable
		const tableSistematizacion = $sistematizacion.DataTable(tablaProperties);
		const tablePlansesion = $plansesion.DataTable(tablaProperties);
		const tableActividad = $actividad.DataTable(tablaProperties);
		const tableInfoevento = $infoevento.DataTable(tablaProperties);
		const tableActas = $actas.DataTable(tablaProperties);
		const tableSeguimiento = $seguimiento.DataTable(tablaProperties);

		$sistematizacion.removeClass("dataTable no-footer rounded-lg shadow-lg overflow-hidden");
		$plansesion.removeClass("dataTable no-footer rounded-lg shadow-lg overflow-hidden");
		$actividad.removeClass("dataTable no-footer rounded-lg shadow-lg overflow-hidden");
		$infoevento.removeClass("dataTable no-footer rounded-lg shadow-lg overflow-hidden");
		$actas.removeClass("dataTable no-footer rounded-lg shadow-lg overflow-hidden");
		$seguimiento.removeClass("dataTable no-footer rounded-lg shadow-lg overflow-hidden");

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

		

        // Bloquear si excede
        editor.on('key', function(evt) {
            var text = editor.getData().replace(/<[^>]*>/g, '');
            if (text.length >= maxChars && evt.data.keyCode != 8 && evt.data.keyCode != 46) {
                evt.cancel();
                alert("Máximo permitido: " + maxChars + " caracteres.");
            }
        });

        // Bloquear pegar excedido
        editor.on('paste', function(evt) {
            var text = evt.data.dataValue.replace(/<[^>]*>/g, '');
            if (text.length > maxChars) {
                evt.cancel();
                alert("No puedes pegar más de " + maxChars + " caracteres.");
            }
        });

        editor.on('key', updateCount);
        editor.on('paste', updateCount);
        editor.on('change', updateCount);

        updateCount(); // inicializar contador
    

		// Conectar botones de paginación personalizados
		$(document).on("click", ".first-page", function() {
			tableSistematizacion.page("first").draw("page");
			tableActividad.page("first").draw("page");
			tablePlansesion.page("first").draw("page");
			tableInfoevento.page("first").draw("page");
			tableActas.page("first").draw("page");
			tableSeguimiento.page("first").draw("page");
		});

		$(document).on("click", ".previous-page", function() {
			tableSistematizacion.page("previous").draw("page");
			tableActividad.page("previous").draw("page");
			tablePlansesion.page("previous").draw("page");
			tableInfoevento.page("previous").draw("page");
			tableActas.page("previous").draw("page");
			tableSeguimiento.page("previous").draw("page");
		});

		$(document).on("click", ".next-page", function() {
			tableSistematizacion.page("next").draw("page");
			tableActividad.page("next").draw("page");
			tablePlansesion.page("next").draw("page");
			tableInfoevento.page("next").draw("page");
			tableActas.page("next").draw("page");
			tableSeguimiento.page("next").draw("page");
		});

		$(document).on("click", ".last-page", function() {
			tableSistematizacion.page("last").draw("page");
			tableActividad.page("last").draw("page");
			tablePlansesion.page("last").draw("page");
			tableInfoevento.page("last").draw("page");
			tableActas.page("last").draw("page");
			tableSeguimiento.page("last").draw("page");
		});

		tableSistematizacion.on('draw', stylePagination);
		tableActividad.on('draw', stylePagination);
		tablePlansesion.on('draw', stylePagination);
		tableInfoevento.on('draw', stylePagination);
		tableActas.on('draw', stylePagination);
		tableSeguimiento.on('draw', stylePagination);
	


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
			},
			{
				btn: "btn-seguimientos",
				section: "tab-seguimientos"
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


		var porcentaje = <?php echo isset($seguimiento['Producto']['porcentajeavancetotal']) && is_numeric($seguimiento['Producto']['porcentajeavancetotal']) ? $seguimiento['Producto']['porcentajeavancetotal'] : 0; ?>;
		var porcentajeavance = <?php echo isset($seguimiento['Producto']['porcentajeavance1']) && is_numeric($seguimiento['Producto']['porcentajeavance1']) ? $seguimiento['Producto']['porcentajeavance1'] : 0; ?>;

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
		$('texactividad').each(function() {
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
