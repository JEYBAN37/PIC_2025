<?php $this->layout = 'default' ?>

<div class="max-w-5xl mx-auto text-center mb-8">
    <h1 class="text-5xl font-bold mb-4 text-blue-600">
        Nueva Sistematización
    </h1>
    <p class="text-gray-500 mb-4 text-lg">
        Registre preliminarmente los campos relacionados con la sistematización.
        Tenga en cuenta que podrá editar y complementar los demás campos posteriormente.
    </p>
</div>


<div class="max-w-6xl mx-auto p-18">
    <div class="bg-white shadow-2xl rounded-xl p-12">
        <!-- Header -->
        <div class="flex items-center mb-4">
            <img src="../img/update/docHover.png" alt="p-8 bg-blue-600" class="p-2 bg-blue-100 rounded-lg">
            <div class="ml-4">
                <h1 class="text-xl font-semibold">Información del proceso</h1>
                <p class="text-gray-500">Complete los datos básicos del proceso de sistematización.</p>
            </div>

        </div>


        <!-- Formulario -->
        <?php
        echo $this->Form->create('Proactividad', [
            'type' => 'file',
            'novalidate' => 'novalidate',
            'class' => 'space-y-6',
        ]);
        ?>



        <div class="grid grid-cols-1 md:grid-cols-2">

            <!-- Producto/tarea relacionada -->
            <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">1</span>
                    <label for="producto_id" class="font-semibold">Producto | Actividad relacionada</label>
                    <p class="text-red-600">*</p>

                </div>
                <?php
                echo $this->Form->input('producto_id', [
                    'type' => 'select',
                    'id' => 'producto_id',
                    'class' => 'w-full',
                    'label' => '',
                    'options' => $productos,
                    'empty' => 'Seleccione el producto | actividad',
                    'error' => false // No mostrar error aquí
                ]);
                ?>
                <?php
                if (!empty($this->Form->error('producto_id'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('producto_id') . '</div>';
                }
                ?>
            </div>


            <!-- total_sesiones tratada -->
            <div class="col-span-2 text-md font-semibold mt-4 mb-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">2</span>
                    <label for="totalsesiones" class="font-semibold">Total de encuentros programados</label>
                    <p class="text-red-600">*</p>

                </div>

                <p class="help-block text-gray-500 text-xs mb-2">Ingrese el número de sesiones (talleres, encuentros) que desarrollará para este proceso.</p>

                <?php
                echo $this->Form->input('totalsesiones', [
                    'label' => false,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none  focus:ring-1 focus:ring-blue-500 focus:border-blue-500 borde azul  mt-2 font-semibold text-gray-700  text-sm focus:text-gray-900',
                    'error' => false,
                    'min' => 1,
                    'max' => 15
                ]);

                if (!empty($this->Form->error('totalsesiones'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('totalsesiones') . '</div>';
                }
                ?>
            </div>

            <!-- Objetivo General -->
            <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">3</span>
                    <label for="objactividad" class="font-semibold">Objetivo General del proceso</label>
                    <p class="text-red-600">*</p>

                </div>
                <?php
                echo $this->Form->input('objactividad', [
                    'label' => '',
                    'data-maxlength' => 500,
                    'class' => 'ckeditor border rounded-lg w-full p-2 focus:ring focus:ring-blue-200 mt-2',
                    'error' => false // No mostrar error aquí
                ]);
                if (!empty($this->Form->error('objactividad'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('objactividad') . '</div>';
                }
                ?>
            </div>

            <!-- Objetivos específicos -->
            <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">4</span>
                    <label for="producto_id" class="font-semibold">Objetivos Específicos del proceso</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('objetivoespecifico', [
                    'label' => '',
                    'data-maxlength' => 800,
                    'class' => 'ckeditor border rounded-lg w-full p-2 focus:ring focus:ring-blue-200',
                    'error' => false // No mostrar error aquí
                ]);
                if (!empty($this->Form->error('objetivoespecifico'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('objetivoespecifico') . '</div>';
                }
                ?>
            </div>

        </div>

        <?php
        $id_responsable = isset($_SESSION['Auth']['User']['id_responsable']) ? $_SESSION['Auth']['User']['id_responsable'] : '';
        echo $this->Form->input('responsable_id', [
            'type' => 'hidden',
            'value' => $id_responsable
        ]);
        ?>

        <!-- Botón -->
        <div class="pt-2">
            <button type="submit" class="bg-green-600 text-white px-6 py-2 rounded-md hover:bg-green-700 transition font-medium flex items-center justify-center gap-2">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-save-icon lucide-save">
                        <path d="M15.2 3a2 2 0 0 1 1.4.6l3.8 3.8a2 2 0 0 1 .6 1.4V19a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2z" />
                        <path d="M17 21v-7a1 1 0 0 0-1-1H8a1 1 0 0 0-1 1v7" />
                        <path d="M7 3v4a1 1 0 0 0 1 1h7" />
                    </svg>
                </span>
                Crear sistematización
            </button>
            <?php echo $this->Form->end(); ?>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const choices = new Choices("#producto_id", {
            searchEnabled: true,
            searchChoices: true,
            removeItemButton: false,
            itemSelectText: '',
            shouldSort: false,
            searchPlaceholderValue: "Escriba para filtrar...",
            fuseOptions: {
            includeScore: true,
            threshold: 0.3,
            keys: ['label', 'value']
            },
            renderChoiceLimit: -1, // Sin límite de renderizado
            searchResultLimit: 20, // Puedes aumentar este valor si tienes muchos resultados
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

    // Prevenir retroceso con la flecha del navegador (mejor experiencia)
    history.pushState(null, null, location.href);
</script>