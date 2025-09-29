<?php $this->layout = 'default' ?>

<div class="max-w-5xl mx-auto text-center mb-8">
    <h1 class="text-5xl font-bold mb-4 text-blue-600">
        Actas
    </h1>
    <p class="text-gray-500 mb-4 text-lg">
        Visualice el listado de actas.
    </p>
</div>

<table id="miTabla" style="width:100%;"
        class="stripe hover text-sm text-left text-gray-600 border border-gray-200 rounded-lg overflow-hidden">
        <thead class="bg-gray-200 font-medium border-b border-gray-300">
            <tr class=" text-gray-900 font-light">
                <th class="px-2 w-6"></th> <!-- control (+) -->
                <th class="px-4 py-2 font-semibold text-center cursor-pointer hover:bg-gray-100">ID</th>
				<th class="px-4 py-2 font-semibold text-center cursor-pointer hover:bg-gray-100">ID-actividad</th>
				 <th class="px-4 py-2 font-semibold text-center cursor-pointer hover:bg-green-100">Prioridad</th>
                <th class="px-4 py-2 font-semibold text-center cursor-pointer hover:bg-green-100">Actividad</th>
                <th class="px-16 py-2 font-semibold text-center cursor-pointer hover:bg-green-100">Fecha</th>
                <th class="px-16 py-2 font-semibold text-center cursor-pointer hover:bg-green-100">Tematica</th>
                <th class="px-2 py-2 font-semibold text-center cursor-pointer hover:bg-green-100">Tipo Reunión</th>
                <th class="px-2 py-2 font-semibold text-center cursor-pointer hover:bg-green-100">Responsables</th>
                <th class="px-2 py-2 font-semibold text-center cursor-pointer hover:bg-green-100">Acciones</th>
                
            </tr>

			
        </thead>
        <tbody class="bg-white divide-y divide-gray-300">
            <!-- DataTables llenará esta sección -->
        </tbody>
    </table>

	 <script>
        const URL_view = "<?php echo $this->Html->url(['action' => 'view', '__ID__']); ?>";
        const URL_edit = "<?php echo $this->Html->url(['action' => 'edit', '__ID__']); ?>";
        const URL_delete = "<?php echo $this->Html->url(['action' => 'delete', '__ID__']); ?>";


        $(document).ready(function() {
            const $miTabla = $('#miTabla');

            // Inicializar DataTable
            const table = $miTabla.DataTable({
                createdRow: function(row, data, dataIndex) {
                    // Aplica clases a cada celda del body
                    $('td', row).each(function(index) {
                        $(this).addClass('px-4 py-3 align-center-left');
                        if (index === 1) $(this).addClass(
                            'text-center text-black font-bold'); // ID

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

                        if (index === 5) $(this).addClass(
                            'text-center font-bold text-black text-xs'); // responsable
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
                pageLength: 7,
                processing: true,
                serverSide: true,
                ajax: "/aplicacioncakephp/PIC_2025/actas/getActas", // Ajustar segun la Ruta para obtener datos
                columns: [
                    // Columna control (+)
                    {
                        data: null,
                        className: 'dtr-control',
                        orderable: false,
                        searchable: false,
                        defaultContent: '',
                        render: function() {
                            return '<span class="text-gray-400">+</span>';
                        }
                    },

                    {
                        data: "id"
                    },
					
                    {
                        data: "numproducto"
                    },
                    {
                        data: "prioridad"
                    },
                    {
                        data: "tarea"
                    },
                    {
                        data: "fecha"
                    },
					{
                        data: "tema"
                    },
					{
                        data: "alcancereunion"
                    },
					{
                        data: "responsables"
                    },
                    

                    {
                        data: "id",
                        orderable: false,
                        searchable: false,
                        render: function(data) {
                            const viewUrl = URL_view.replace('__ID__', data);
                            const editUrl = URL_edit.replace('__ID__', data);
                            const deleteUrl = URL_delete.replace('__ID__', data);
                            return `
          <div class="relative inline-block text-left">
            <a href="${viewUrl}" class="block px-4 py-2 text-sm hover:bg-gray-100">Ver</a>
            <a href="${editUrl}" class="block px-4 py-2 text-sm hover:bg-gray-100">Editar</a>
            <hr class="my-1 border-gray-200">
            <a href="${deleteUrl}" class="block w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-gray-100"
               onclick="return confirm('¿Seguro que quieres borrar #${data}?');">Borrar</a>
          </div>`;
                        }
                    }
                ],
                // Opcional: prioridades de columnas (qué esconder primero)
                columnDefs: [{
                        responsivePriority: 1,
                        targets: 2
                    }, // nombreproducto
                    {
                        responsivePriority: 2,
                        targets: 3
                    }, // objactividad
                    {
                        responsivePriority: 3,
                        targets: -2
                    } // created
                ]
            });
            $miTabla.removeClass("dataTable no-footer rounded-lg shadow-lg overflow-hidden");

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
                table.page("first").draw("page");
            });

            $(document).on("click", ".previous-page", function() {
                table.page("previous").draw("page");
            });

            $(document).on("click", ".next-page", function() {
                table.page("next").draw("page");
            });

            $(document).on("click", ".last-page", function() {
                table.page("last").draw("page");
            });

            // Actualizar info de la página actual
            function updatePageInfo() {
                let info = table.page.info();
                $(".page-info").text(`Página ${info.page + 1} de ${info.pages}`);
            }

            // Llamar en cada cambio de página
            table.on("draw", function() {
                updatePageInfo();
                setupDropdowns(); // <-- Vuelve a conectar los eventos cada vez que se dibuja la tabla
                stylePagination && stylePagination(); // si tienes esta función
            });
            updatePageInfo();


            // Conectar el nuevo input con DataTables
            $('#customSearch').on('keyup', function() {
                table.search(this.value).draw();
            });

            table.on('draw', stylePagination);
        });


        // Función para manejar el despliegue de los menús
        function setupDropdowns() {
            const buttons = document.querySelectorAll('[id^="menu-button-"]');

            buttons.forEach(button => {
                button.addEventListener('click', (event) => {
                    const buttonId = event.currentTarget.id;

                    const recordId = buttonId.split('-')[2];
                    console.log(buttonId);
                    const menu = document.getElementById(`menu-options-${recordId}`);

                    // Oculta todos los menús desplegables
                    document.querySelectorAll('[id^="menu-options-"]').forEach(m => {
                        if (m.id !== menu.id) {
                            m.classList.add('hidden');
                        }
                    });

                    // Muestra o esconde el menú actual
                    menu.classList.toggle('hidden');
                });
            });

            // Oculta los menús si se hace clic fuera de ellos
            window.addEventListener('click', function(event) {
                if (!event.target.matches('[id^="menu-button-"]')) {
                    document.querySelectorAll('[id^="menu-options-"]').forEach(menu => {
                        if (!menu.classList.contains('hidden')) {
                            menu.classList.add('hidden');
                        }
                    });
                }
            });

            document.querySelectorAll('.ver-mas').forEach(function(link) {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const td = link.closest('td');
                    td.querySelector('.texto-truncado').classList.add('hidden');
                    td.querySelector('.texto-completo').classList.remove('hidden');
                    td.querySelector('.ver-mas').classList.add('hidden');
                    td.querySelector('.ver-menos').classList.remove('hidden');
                });
            });

            document.querySelectorAll('.ver-menos').forEach(function(link) {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const td = link.closest('td');
                    td.querySelector('.texto-truncado').classList.remove('hidden');
                    td.querySelector('.texto-completo').classList.add('hidden');
                    td.querySelector('.ver-mas').classList.remove('hidden');
                    td.querySelector('.ver-menos').classList.add('hidden');
                });
            });


            const menu = document.getElementById('miTabla_processing');
            if (menu) {
                menu.classList.remove('dataTables_processing');
                menu.classList.add('hidden');
            }


        }

        // Función para la confirmación de borrado
        function confirmarBorrado(id) {
            if (confirm('¿Estás seguro de que quieres eliminar este registro?')) {
                // Si el usuario confirma, redirige o envía una solicitud a la ruta de borrado.
                // Aquí debes reemplazar '/ruta/borrar/' con tu URL real.
                window.location.href = '/ruta/borrar/' + id;
            }
        }

        // Llama a la función de configuración cuando el DOM esté cargado
        document.addEventListener('DOMContentLoaded', setupDropdowns);
    </script>




