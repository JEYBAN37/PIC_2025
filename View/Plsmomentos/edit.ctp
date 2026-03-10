>
                     

<?php $this->layout = 'default' ?>
<?php echo $this->Html->script('ckeditor/ckeditor'); ?>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<script src="https://cdn.jsdelivr.net/npm/jquery"></script>
<script src="https://cdn.jsdelivr.net/npm/moment"></script>
<script src="https://cdn.jsdelivr.net/npm/daterangepicker"></script>
<div class="max-w-5xl mx-auto text-center mb-8">
    <h1 class="text-5xl font-bold mb-4 text-blue-600">
        Agregar Momento
    </h1>
    <p class="text-gray-500 mb-4 text-lg">
        Registre los datos del momento.
    </p>
</div>
<?php echo $this->Form->create('Plsmomento', [
    'type' => 'file',
    'novalidate' => 'novalidate',
    'class' => 'space-y-6',
]);


echo $this->Form->input('plsesion_id', array('value' => '' . $idAux, 'type' => 'hidden'));

echo $this->Form->input('id');
echo $this->Form->input('plsesion_id', array('type' => 'hidden'));




$accionesInformativas = array(
    ' ' => 'Elegir',
    'No aplica' => 'No aplica',
    'Prevención Polvora' => 'Pólvora',
    'PAI' => 'PAI',
    'Tuberculosis' => 'Tuberculosis',
    'Hasen Lepra' => 'Hasen/Lepra',
    'Ley 1335' => 'Ley 1335',
);

?>
<div class="max-w-6xl mx-auto p-18">
    <div class="bg-white shadow-2xl rounded-xl p-12">
        <!-- Header -->
        <div class="flex items-center mb-4">
            <img src="<?php echo $this->webroot; ?>/img/update/docHover.png" alt="p-8 bg-blue-600" class="p-2 bg-blue-100 rounded-lg">
            <div class="ml-4">
                <h1 class="text-xl font-semibold">Información General</h1>
                <p class="text-gray-500">Datos generales del momento.</p>
            </div>

        </div>

        <div class="grid grid-cols-1 md:grid-cols-2">

            <!-- Nombre del momento -->
            <div class="col-span-2 text-md font-semibold mt-4 mb-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">1</span>
                    <label for="objactividad" class="font-semibold">Nombre del momento</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('momento', [
                    'label' => false,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none  focus:ring-1 focus:ring-blue-500 focus:border-blue-500 borde azul  mt-2 font-semibold text-gray-700  text-sm focus:text-gray-900',
                    'error' => false
                ]);

                if (!empty($this->Form->error('momento'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('momento') . '</div>';
                }
                ?>
            </div>

            <!--  (Duración de actividad) -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">2</span>
                    <label for="proactividad_id" class="font-semibold">Duración de actividad</label>
                    <p class="text-red-600">*</p>

                </div>
                <?php
                echo $this->Form->input('duracion', [
                    'type' => 'select',
                    'id' => 'duracion',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                    'onchange' => 'mostrarBarrio(this.value);',
                    'error' => false,
                    'options' => $duracionesFiltradas,
                    'label' => '',
                    'empty' => 'Seleccione duración',
                ]);
                if (!empty($this->Form->error('duracion'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('duracion') . '</div>';
                }
                ?>
            </div>

            <!-- Acción Informativa -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">2</span>
                    <label for="proactividad_id" class="font-semibold">Acción informativa</label>
                    <p class="text-red-600">*</p>

                </div>
                <?php
                echo $this->Form->input('accioninformativa', [
                    'type' => 'select',
                    'id' => 'accioninformativa',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                    'onchange' => 'mostrarBarrio(this.value);',
                    'error' => false,
                    'options' => $accionesInformativas,
                    'label' => '',
                    'empty' => 'Seleccione acción informativa',
                ]);
                if (!empty($this->Form->error('accioninformativa'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('accioninformativa') . '</div>';
                }
                ?>
            </div>

            <!--Metodología utilizada -->
            <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">3</span>
                    <label for="metodologia" class="font-semibold">Metodología utilizada</label>
                    <p class="text-red-600">*</p>

                </div>
                <?php
                echo $this->Form->input('metodologia', [
                    'label' => '',
                    'data-maxlength' => 10000,
                    'class' => 'ckeditor border rounded-lg w-full p-2 focus:ring focus:ring-blue-200 mt-2',
                    'error' => false // No mostrar error aquí
                ]);
                if (!empty($this->Form->error('metodologia'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('metodologia') . '</div>';
                }
                ?>
            </div>
            <!--resultado -->
            <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">4</span>
                    <label for="resultado" class="font-semibold">Resultado momento</label>
                    <p class="text-red-600">*</p>

                </div>
                <?php
                echo $this->Form->input('resultado', [
                    'label' => '',
                    'data-maxlength' => 1000,
                    'class' => 'ckeditor border rounded-lg w-full p-2 focus:ring focus:ring-blue-200 mt-2',
                    'error' => false // No mostrar error aquí
                ]);
                if (!empty($this->Form->error('resultado'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('resultado') . '</div>';
                }
                ?>
            </div>

            <!--insumo -->
            <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">5</span>
                    <label for="insumo" class="font-semibold">Insumos o materiales didacticos</label>
                    <p class="text-red-600">*</p>

                </div>
                <p class="help-block text-gray-500 text-xs mb-2">Incluya o describa los medios o herramientas virtuales a utilizar en este momento.</p>

                <?php
                echo $this->Form->input('insumo', [
                    'label' => '',
                    'data-maxlength' => 1000,
                    'class' => 'ckeditor border rounded-lg w-full p-2 focus:ring focus:ring-blue-200 mt-2',
                    'error' => false // No mostrar error aquí
                ]);
                if (!empty($this->Form->error('insumo'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('insumo') . '</div>';
                }
                ?>
            </div>
        </div>

        <div class="flex gap-4">
            <!-- Botón -->
            <div class="pt-2">
                <div class="cursor-pointer bg-green-600 text-white px-6 py-2 rounded-md hover:bg-green-700 transition font-medium flex items-center justify-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-save-icon lucide-save">
                        <rect width="13" height="7" x="3" y="3" rx="1" />
                        <path d="m22 15-3-3 3-3" />
                        <rect width="13" height="7" x="3" y="14" rx="1" />
                    </svg>
                    <?php echo $this->Form->submit('Guardar Otro', array('name' => 'btn', 'class' => 'cursor-pointer hover:bg-green-700 transition')); ?>
                </div>
            </div>


            <!-- Botón -->
            <div class="pt-2">
                <div class="cursor-pointer bg-green-600 text-white px-6 py-2 rounded-md hover:bg-green-700 transition font-medium flex items-center justify-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-save-icon lucide-save">
                        <path d="M15.2 3a2 2 0 0 1 1.4.6l3.8 3.8a2 2 0 0 1 .6 1.4V19a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2z" />
                        <path d="M17 21v-7a1 1 0 0 0-1-1H8a1 1 0 0 0-1 1v7" />
                        <path d="M7 3v4a1 1 0 0 0 1 1h7" />
                    </svg>
                    <?php echo $this->Form->submit('Finalizar', array('name' => 'btn', 'class' => 'cursor-pointer hover:bg-green-700 transition')); ?>
                </div>
            </div>


            <!-- Botón -->
            <div class="pt-2">
                <button type="button" name="Finalizar" class="bg-green-600 text-white px-6 py-2 rounded-md hover:bg-green-700 transition font-medium flex items-center justify-center gap-2" onclick="preventBackNavigation()">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-save-icon lucide-save">
                            <path d="M21 17v2a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-2" />
                            <path d="M21 7V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2" />
                            <circle cx="12" cy="12" r="1" />
                            <path d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0" />
                        </svg>

                    </span>
                    Ir A Plan de Sesión
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const choices = new Choices("#producto_id", { // Botón para eliminar seleccionados
            searchEnabled: true, // 🔎 activa búsqueda
            searchChoices: true, // 🔎 filtra opciones
            removeItemButton: false, // ❌ no mostrar botón de eliminar
            itemSelectText: '', // 🚫 quita el "Press to select"
            shouldSort: false, // 📌 mantiene el orden original
            searchPlaceholderValue: "Escriba para filtrar...", // placeholder búsqueda
        });

        // Aplicar estilos con Tailwind
        const inner = document.querySelector('.choices__inner');
        if (inner) {
            inner.classList.add(
                'bg-white', 'border', 'border-gray-300', 'rounded-lg',
                'px-3', 'py-2', 'focus:ring', 'focus:ring-blue-200', 'text-gray-700'
            );
        }

        const dropdown = document.querySelector('.choices__list--dropdown');
        if (dropdown) {
            dropdown.classList.add('bg-white', 'shadow-lg', 'rounded-lg', 'border', 'border-gray-200');
        }
    });


    CKEDITOR.on('instanceReady', function(ev) {
        var editor = ev.editor;
        var textarea = editor.element.$;
        var maxChars = textarea.getAttribute("data-maxlength"); // Lee el límite de cada campo
        maxChars = maxChars ? parseInt(maxChars) : 300; // Default 300 si no se define

        // Crear un contador debajo del campo
        var counter = document.createElement("div");
        counter.className = "text-gray-600 mt-1 text-sm";
        counter.id = "charCount_" + textarea.id;
        textarea.parentNode.appendChild(counter);

        function updateCount() {
            var text = editor.getData().replace(/<[^>]*>/g, '');
            var length = text.length;
            var remaining = maxChars - length;

            counter.innerHTML = "Caracteres usados: " + length + " / " + maxChars;

            if (remaining < 0) {
                counter.style.color = "red";
                editor.setData(text.substring(0, maxChars));
            } else {
                counter.style.color = "gray";
            }
        }

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
    });

    // Detectar si el usuario intenta retroceder con la flecha del navegador
    window.addEventListener('popstate', function(event) {
        if (confirm('¿Está seguro que desea salir de la página? Se pueden perder los cambios no guardados.')) {
            window.location.href = 'index'; // Redirigir a la página deseada
        } else {
            history.pushState(null, null, location.href); // Mantener en la página actual
        }
    });

    function preventBackNavigation() {
        if (confirm('¿Está seguro que desea salir de la página? Se pueden perder los cambios no guardados.')) {
            window.location.href = '<?php echo $this->Html->url(['controller' => 'plsesiones', 'action' => 'view', $idAux]); ?>';
        }
    }

    // Prevenir retroceso con la flecha del navegador (mejor experiencia)
    history.pushState(null, null, location.href);
</script>