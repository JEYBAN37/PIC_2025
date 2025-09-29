<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.colVis.min.js"></script> <!-- 👈 necesario -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>


<div class="p-8 overflow-x-auto mt-[10px] border bg-white shadow-lg rounded-2xl">
    <h1 class="text-4xl font-bold mb-4 text-blue-600">Sistematizaciones</h1>
    <table id="miTabla" class="stripe hover w-full text-sm text-left text-gray-600">
        <thead class="bg-gray-100 text-gray-800 font-semibold">
            <tr>
                <th class="px-4 py2">id_encuentro</th>
                <th class="px-4 py-2">id_sistematización</th>
                <th class=".px-4 py-2">fecha actividad</th>
                <th class=".px-4 py-2">Tema</th>
                <th class=".px-4 py-2">Lugar</th>
                <th class=".px-4 py-2">Objetivo</th>
                <th class=".px-4 py-2">Responsable</th>
                <th class=".px-4 py-2">Acciones</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($procesoregistros as $procesoregistro) : ?>
            <tr class="hover:bg-gray-50">
                <td class="px-4 py-2"><?= $procesoregistro['Procesoregistro']['id'] ?></td>
                <td class="px-4 py-2"><?= $procesoregistro['Proactividad']['id'] ?></td>
                <td class="px-4 py-2"><?= $procesoregistro['Procesoregistro']['fecha'] ?></td>
                <td class="px-4 py-2"><?= $procesoregistro['Plsesion']['tema'] ?></td>
                <td class="px-4 py-2"><?= $procesoregistro['Ubicacion']['comuna'] ?></td>
                <td class="px-4 py-2"><?php echo $this->Text->truncate(
												$procesoregistro['Proactividad']['objactividad'],
												100,
												array(
													'ellipsis' => '...',
													'exact' => false,
													'html' => true
												)
											);
											?></td>
                <td class="px-4 py-2"><?= $procesoregistro['Proactividad']['responsable_id'] ?></td>

                <td class="px-4 py-2">
                    <div class="relative inline-block text-left">
                        <button type="button" class="... "
                            id="menu-button-{{<?= $procesoregistro['Procesoregistro']['id'] ?>}}">
                            Acciones
                        </button>

                        <div class="absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 hidden z-10"
                            role="menu" id="menu-options-{{<?= $procesoregistro['Procesoregistro']['id'] ?>}}">
                            <div class="py-1" role="none">
                                <a href="<?php echo $this->Html->url(array('action' => 'view', $procesoregistro['Procesoregistro']['id'])); ?>"
                                    class="block px-4 py-2 text-sm hover:bg-gray-100">Ver</a>
                                <a href="<?php echo $this->Html->url(array('action' => 'edit', $procesoregistro['Procesoregistro']['id'])); ?>"
                                    class="block px-4 py-2 text-sm hover:bg-gray-100">Editar</a>
                                <hr class="my-1 border-gray-200">

                                <?php echo $this->Form->postLink(
										__('Borrar'),
										array('action' => 'delete', $procesoregistro['Procesoregistro']['id']),
										array(
											'confirm' => __('Are you sure you want to delete # %s?', $procesoregistro['Procesoregistro']['id']),
											'class' => 'block w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-gray-100'
										)
									); ?>

                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script>
$(document).ready(function() {
    const $miTabla = $('#miTabla');
    const $filterInput = $('.dataTables_filter input[type="search"]');
    const $lengthSelect = $('select[name="miTabla_length"]');

    $miTabla.DataTable({
        responsive: true,
        dom: '<"flex items-center justify-between mb-4"<"w-2/3 flex "<"flex flex-row w-full"f>><"w-1/3 flex items-center justify-center font-semibold "p>>rt',
        lengthMenu: [
            [10],
            [10]
        ],
        pageLength: 10,
        buttons: []
    });

    // Estilizar el campo de búsqueda
    $filterInput.addClass(
        'px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent'
    );

    // Estilizar el selector de filas (lengthMenu)
    $lengthSelect.addClass(
        'border border-gray-300 rounded-md px-3 py-2 text-sm focus:ring-2 focus:ring-blue-500 focus:outline-none'
    );
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