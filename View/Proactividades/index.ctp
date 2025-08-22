
<?php $this->layout = 'default' ?>

<!-- Incluye DataTables y Buttons -->

<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.colVis.min.js"></script> <!-- 👈 necesario -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>


<div class="p-4 overflow-x-auto mt-[100px]">
  <table id="miTabla" class="stripe hover w-full text-sm text-left text-gray-600">
	<thead class="bg-gray-100 text-gray-800 font-semibold">
	  <tr>
		<th class="px-4 py-2">ID</th>
		<th class="px-4 py-2">Producto</th>
	  </tr>
	</thead>
	<tbody>
	  <?php foreach ($proactividades as $proactividad) : ?>
		<tr class="hover:bg-gray-50">
		  <td class="px-4 py-2"><?= $proactividad['Proactividad']['id'] ?></td>
		  <td class="px-4 py-2"><?= $proactividad['Producto']['activity'] ?></td>
		</tr>
	  <?php endforeach; ?>
	</tbody>
  </table>
</div>

<script>
  $(document).ready(function() {
	$('#miTabla').DataTable({
	  responsive: true,
	  dom: '<"flex items-center justify-between mb-4"<"w-1/3 flex items-center"<"w-full"f>><"w-1/3 flex items-center justify-center font-semibold "p><"w-1/3"B>>rt',
	  lengthMenu: [
		[10],
		[10]
	  ],
	  pageLength: 10,
	  buttons: [

		{
		  extend: 'copy',
		  text: 'Copiar',
		  className: 'bg-blue-600 text-white font-medium text-sm mr-2 p-4 py-2 rounded hover:bg-green-600 transition-colors cursor-pointer items-center'
		},
		{
		  extend: 'csv',
		  text: 'CSV',
		  className: 'bg-blue-600 text-white font-medium text-sm mr-2 p-4 py-2 rounded hover:bg-green-600 transition-colors cursor-pointer items-center'
		},
		{
		  extend: 'excel',
		  text: 'Excel',
		  className: 'bg-blue-600 text-white font-medium text-sm mr-2 p-4 py-2 rounded hover:bg-green-600 transition-colors cursor-pointer items-center'
		},
		{
		  extend: 'pdf',
		  text: 'PDF',
		  className: 'bg-blue-600 text-white font-medium text-sm mr-2 p-4 py-2 rounded hover:bg-green-600 transition-colors cursor-pointer items-center'
		},
		{
		  extend: 'print',
		  text: 'Imprimir',
		  className: 'bg-blue-600 text-white font-medium text-sm mr-2 p-4 py-2 rounded hover:bg-green-600 transition-colors cursor-pointer items-center'
		},
	  ],
	});

	// 🎨 Estilizar el selector de filas (lengthMenu)
	setTimeout(() => {
	  $('select[name="miTabla_length"]').addClass(
		'border border-gray-300 rounded-md px-3 py-2 text-sm focus:ring-2 focus:ring-blue-500 focus:outline-none'
	  );
	}, 100);
  });
</script>