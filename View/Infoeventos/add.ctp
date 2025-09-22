<?php $this->layout = 'default' ?>
<?php echo $this->Html->script('ckeditor/ckeditor'); ?>
<!-- Choices.js -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css" />
<script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<script src="https://cdn.jsdelivr.net/npm/jquery"></script>
<script src="https://cdn.jsdelivr.net/npm/moment"></script>
<script src="https://cdn.jsdelivr.net/npm/daterangepicker"></script>


<div class="max-w-5xl mx-auto text-center mb-8">
    <h1 class="text-5xl font-bold mb-4 text-blue-600">
        Registrar Nuevo Evento
    </h1>
    <p class="text-gray-500 mb-4 text-lg">
        Registre los datos de la nuevo evento.
    </p>
</div>
<?php

echo $this->Form->create(
    'Infoevento',
    array('type' => 'file', 'novalidate' => 'novalidate')
);

$nombreUsuario = isset($_SESSION['Auth']['User']['id_responsable']) ? $_SESSION['Auth']['User']['id_responsable'] : '';
echo $this->Form->input('responsable_id', array('value' => $nombreUsuario, 'type' => 'hidden'));
?>

<div class="max-w-6xl mx-auto p-18">
    <div class="bg-white shadow-2xl rounded-xl p-12">
        <!-- Header -->
        <div class="flex items-center mb-4">
            <img src="../img/update/docHover.png" alt="p-8 bg-blue-600" class="p-2 bg-blue-100 rounded-lg">
            <div class="ml-4">
                <h1 class="text-xl font-semibold">Información General</h1>
                <p class="text-gray-500">Agregar Informe de eventos o acciones informativas.</p>
            </div>

        </div>
        <div class="grid grid-cols-1 md:grid-cols-2">

            <!-- Fecha de sesión realizada -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mr-4">
                <div class="flex items-center ">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">1</span>
                    <label for="producto_id" class="font-semibold">Fecha de registro</label>
                    <p class="text-red-600">*</p>
                </div>
                <div class="col-span-2 text-md font-semibold my-4">
                    <div class="flex flex-col w-full">
                        <input
                            type="text"
                            name="datetime_range"
                            id="datetime_range"
                            class="border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400 w-full"
                            placeholder="Selecciona rango de fecha y hora" />
                        <span class="text-sm text-red-600 mt-1">
                            <?= $this->Form->error('datetime_range') ?>
                        </span>
                    </div>

                </div>
            </div>

            <!-- Tipo de soporte -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">2</span>
                    <label for="proactividad_id" class="font-semibold">Tipo de Soporte</label>
                    <p class="text-red-600">*</p>

                </div>
                <?php
                echo $this->Form->input('tipo', [
                    'type' => 'select',
                    'id' => 'tipo',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-600 focus:text-gray-900',
                    'error' => false,
                    'options' =>  array('' => 'Elegir', 'Informe accion informativa' => 'Informe acción informativa', 'Informe evento ' => 'Informe evento', 'Informe acompanamiento' => 'Informe acompañamiento'),
                    'label' => '',
                    'empty' => 'Seleccione el evento'
                ]);
                if (!empty($this->Form->error('tipo'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('tipo') . '</div>';
                }
                ?>
            </div>

            <!-- Ubicación (Barrio) -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold mb-6 mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">3</span>
                    <label for="proactividad_id" class="font-semibold">Lugar</label>
                    <p class="text-red-600">*</p>

                </div>
                <?php
                echo $this->Form->input('ubicacion_id', [
                    'type' => 'select',
                    'id' => 'ubicacion_id',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700',
                    'onchange' => 'mostrarBarrio(this.value);',
                    'error' => false,
                    'label' => '',
                    'empty' => 'Seleccione una lugar'
                ]);
                if (!empty($this->Form->error('ubicacion_id'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('ubicacion_id') . '</div>';
                }
                ?>
                <p class="text-gray-500 text-xs mt-2">
                    Si la actividad fue virtual selecciona la opción correspondiente.
                </p>
            </div>

            <!-- Campo barrio (oculto al inicio) -->
            <div id="divActualizarBarrio" class="col-span-2 md:col-span-1 text-md font-semibold hidden mr-4">
                <p class="text-gray-500 text-xs mb-1">Agregue el nombre del lugar.</p>
                <?php echo $this->Form->label('barrio', 'Barrio/Vereda/Lugar', [
                    'class' => 'text-gray-700 font-semibold text-sm mb-2'
                ]); ?>
                <?php
                echo $this->Form->input('vereda', [
                    'label' => false,
                    'error' => false,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700',
                ]);
                if (!empty($this->Form->error('vereda'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('vereda') . '</div>';
                }
                ?>
            </div>

            <!-- Nombre del lugar -->
            <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">4</span>
                    <label for="objactividad" class="font-semibold">Nombre de lugar o dirección</label>
                    <p class="text-red-600">*</p>
                </div>

                <?php
                echo $this->Form->input('lugar', [
                    'type' => 'text',
                    'label' => false,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none  focus:ring-1 focus:ring-blue-500 focus:border-blue-500 borde azul  mt-2 font-semibold text-gray-700  text-sm focus:text-gray-900',
                    'error' => false,
                    'placeholder' => 'Por ejemplo: Pasto Salud ESE'
                ]);

                if (!empty($this->Form->error('lugar'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('lugar') . '</div>';
                }
                ?>
            </div>

            <!-- Nombre del grupo -->
            <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">5</span>
                    <label for="objactividad" class="font-semibold">Nombre del grupo</label>
                    <p class="text-red-600">*</p>
                </div>

                <p class="help-block text-gray-500 text-xs mb-2">Por ejemplo: Grupo surprisecity, si el informe o evento refiere grupos participantes.</p>

                <?php
                echo $this->Form->input('nombregrupo', [
                    'type' => 'text',
                    'label' => false,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none  focus:ring-1 focus:ring-blue-500 focus:border-blue-500 borde azul  mt-2 font-semibold text-gray-700  text-sm focus:text-gray-900',
                    'error' => false
                ]);

                if (!empty($this->Form->error('nombregrupo'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('nombregrupo') . '</div>';
                }
                ?>
            </div>

            <!-- Temática tratada -->
            <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">6</span>
                    <label for="objactividad" class="font-semibold">Temática tratada</label>
                    <p class="text-red-600">*</p>
                </div>

                <p class="help-block text-gray-500 text-xs mb-2">Ingrese aquí exclusivamente el título de la temática o austo del informe o evento. No incluya poblaciones, lugares de realización de la actividad o ningún otro dato.</p>

                <?php
                echo $this->Form->input('tema', [
                    'label' => false,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none  focus:ring-1 focus:ring-blue-500 focus:border-blue-500 borde azul  mt-2 font-semibold text-gray-700  text-sm focus:text-gray-900',
                    'error' => false
                ]);

                if (!empty($this->Form->error('tema'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('tema') . '</div>';
                }
                ?>
            </div>


            <!-- Producto/tarea relacionada -->
            <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">7</span>
                    <label for="producto_id" class="font-semibold">Producto | Actividad relacionada</label>
                </div>
                <?php
                echo $this->Form->input('producto_id', [
                    'type' => 'select',
                    'id' => 'producto_id',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700',
                    'label' => '',
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







        </div>
    </div>
</div>


<div class="max-w-6xl mx-auto p-18 mt-10">
    <div class="bg-white shadow-2xl rounded-xl p-12">
        <!-- Header -->
        <div class="flex items-center mb-0">
            <img src="../img/update/historicoHover.png" alt="p-8 bg-blue-600" class="p-2 bg-blue-100 rounded-lg w-[60px]">
            <div class="ml-4">
                <h1 class="text-xl font-semibold">Detalles Adicionales</h1>
                <p class="text-gray-500">Complete los datos adicionales.</p>
            </div>

        </div>

        <div class="grid grid-cols-1 md:grid-cols-2">
            <div class="col-span-2 text-md font-semibold my-6 mr-4">

                <div class="col-span-2 text-md font-semibold my-6">
                    <div class="flex items-center mb-4">
                        <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">1</span>
                        <label for="tipopoblacion" class="font-semibold">Tipo de poblacion participante</label>
                        <p class="text-red-600">*</p>

                    </div>
                    <?php
                    $options = [
                        '1. Población en general' => '1 - Población en general',
                        '2. Hombres' => '2 - Hombres',
                        '3. Mujeres' => '3 - Mujeres',
                        '4. Niños y niñas' => '4 - Niños y niñas',
                        '5. Adolescentes' => '5 - Adolescentes',
                        '6. Adultos' => '6 - Adultos',
                        '7. Afrocolombianos' => '7 - Afrocolombianos',
                        '8. Campesinos' => '8 - Campesinos',
                        '9. Habitantes de Calle' => '9 - Habitantes de Calle',
                        '10. Indígenas' => '10 - Indígenas',
                        '11. Líderes y lideresas' => '11 - Líderes y lideresas',
                        '12. Madres gestantes' => '12 - Madres gestantes',
                        '13. Madres Lactantes' => '13 - Madres Lactantes',
                        '14. Población con situación de discapacidad' => '14 - Población con situación de discapacidad',
                        '15. Población LGBTI' => '15 - Población LGBTI',
                        '16. Población privada de la libertad' => '16 - Población privada de la libertad',
                        '17. Población desmovilizada' => '17 - Población desmovilizada',
                        '18. Población víctima de conflicto armado' => '18 - Población víctima de conflicto armado',
                        '19. Población víctima de violencia' => '19 - Población víctima de violencia',
                        '20. Trabajadores(as) sexuales' => '20 - Trabajadores(as) sexuales',
                        '21. Instituciones' => '21 - Instituciones',
                        '22. Trabajadores informales' => '22 - Trabajadores informales'
                    ];

                    echo $this->Form->input(
                        'poblaciones',
                        [
                            'type' => 'select',
                            'label' => false,
                            'multiple' => true,
                            'id' => 'poblaciones',
                            'class' => 'w-full',
                            'empty' => false,
                            'options' => $options,
                            'error' => false // No mostrar error aquí
                        ]
                    );
                    if (!empty($this->Form->error('poblaciones'))) {
                        echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('poblaciones') . '</div>';
                    }
                    ?>
                </div>
            </div>

            <div class="col-span-2 text-md font-semibold mb-6 ">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">2</span>
                    <label for="observacion" class="font-semibold">Observaciones</label>
                    <p class="text-red-600">*</p>
                </div>

                <?php
                echo $this->Form->input('observacion', [
                    'label' => '',
                    'class' => 'ckeditor border rounded-lg w-full p-2 focus:ring focus:ring-blue-200 mt-2',
                    'error' => false, // No mostrar error aquí
                    'data-maxlength' => 600, // <-- aquí defines el límite de caracteres

                ]);
                if (!empty($this->Form->error('observacion'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('observacion') . '</div>';
                }
                ?>
            </div>

            <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">3</span>
                    <label for="proactividad_id" class="font-semibold">Soportes</label>
                </div>

                <div class="flex flex-col gap-2">
                    <label for="ProcesoregistroAnexo" class="block text-gray-700 font-semibold text-sm mb-2">
                        Adjuntar archivo comprimido (.zip o .rar)
                    </label>
                    <div class="relative w-full">
                        <?php
                        echo $this->Form->input('anexo', [
                            'label' => false,
                            'type' => 'file',
                            'class' => 'block w-full text-sm text-gray-700 border border-gray-300 rounded-lg cursor-pointer bg-white focus:outline-none focus:ring-2 focus:ring-blue-400 p-3 file:mr-4 file:py-6 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100',
                            'onchange' => 'validarTamanioSoporte()',
                            'id' => 'ProcesoregistroAnexo',
                            'error' => false
                        ]);
                        if (!empty($this->Form->error('anexo'))) {
                            echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('anexo') . '</div>';
                        }

                        echo $this->Form->input('informe_dir', array('type' => 'hidden', 'class' => 'form-control'));
                        ?>
                    </div>
                    <span class="text-xs text-gray-500 mt-1">
                        NOTA:
                        * Cargar en archivo comprimido extensión ".zip" o ".rar" <br>
                        * listado asistencia.pdf (meet o físico), registro excel participantes <br>
                        * tres (3) pantallazos o fotos resolución 600px * 600px <br>
                        El nombre del archivo no debe tener tildes o diéresis.
                    </span>
                </div>
            </div>
            <div class="pt-2 flex gap-4">
                <button type="submit" name="btn" value="Guardar Acta" class="bg-green-600 text-white px-6 py-2 rounded-md hover:bg-green-700 transition font-medium flex items-center justify-center gap-2">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-save-icon lucide-save">
                            <path d="M15.2 3a2 2 0 0 1 1.4.6l3.8 3.8a2 2 0 0 1 .6 1.4V19a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2z" />
                            <path d="M17 21v-7a1 1 0 0 0-1-1H8a1 1 0 0 0-1 1v7" />
                            <path d="M7 3v4a1 1 0 0 0 1 1h7" />
                        </svg>
                    </span>
                    Guardar Acta
                </button>
            </div>
        </div>
    </div>


    <script type="text/javascript">
        function validarTamanioSoporte() {
            var auxFile = document.getElementById('InfoeventoAnexo');
            var sizeF = auxFile.files[0].size;

            if (sizeF > 5000000) {
                alert('El archivo debe ser menor a 5 Mb');
                auxFile.value = '';
            }
        }

        function agregarOpcionSeleccion() {
            $("#InfoeventoUbicacionId").prepend("<option value='' selected='selected'>Seleccione</option>");
            $("#InfoeventoProductoId").prepend("<option value='' selected='selected'>Seleccione</option>");
            $("#InfoeventoResponsableId").prepend("<option value='' selected='selected'>Seleccione</option>");
        }

        function mostrarBarrio(id) {
            if (id == "2")
                $("#divActualizarBarrio").show();
            else
                $("#divActualizarBarrio").hide();
        }

        function validar() {
            var todo_correcto = true;

            if (document.getElementById('status').value == '') {
                todo_correcto = false;
            }

            if (!todo_correcto) {
                alert('Algunos campos no están correctos, vuelva a revisarlos');
            }

            return todo_correcto;
        }

        function mostrar(id) {
            if (id == "si") {
                $("#si").show();
                $("#no").hide();

            } else if (id == "no") {
                $("#si").hide();
                $("#no").show();

            }
        }

        document.addEventListener("DOMContentLoaded", () => {

            const options = {
                searchEnabled: true,
                searchChoices: true,
                removeItemButton: false,
                itemSelectText: '',
                shouldSort: false,
                searchPlaceholderValue: "Escriba para filtrar...",
                renderChoiceLimit: -1, // Sin límite de renderizado
                searchResultLimit: 20, // Puedes aumentar este valor si tienes muchos resultados
            };

            const choices_ubicacion = new Choices("#ubicacion_id", options);
            const choices_producto = new Choices("#producto_id", options);

            const choices_tipopoblacion = new Choices("#poblaciones", {
                searchEnabled: true,
                searchChoices: true,
                removeItemButton: true, // Permite eliminar seleccionados
                itemSelectText: '',
                shouldSort: false,
                searchPlaceholderValue: "Escriba para filtrar...",
                maxItemCount: -1, // Sin límite
                removeItems: true, // Permite quitar seleccionados
                duplicateItemsAllowed: false,
                placeholder: true,
                placeholderValue: "Seleccione la(s) población(es)",
            });
        });


        $(function() {
            $('#datetime_range').daterangepicker({
                singleDatePicker: true,
                autoApply: true,
                locale: {
                    format: 'YYYY-MM-DD',
                    applyLabel: "Aplicar",
                    cancelLabel: "Cancelar",
                    daysOfWeek: ["Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa"],
                    monthNames: [
                        "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio",
                        "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"
                    ],
                    firstDay: 1
                }
            }, function(start) {
                // Extraer fecha y hora seleccionada
                let fecha = start.format('YYYY-MM-DD');
                // Si necesitas guardarlo en un campo oculto para enviarlo al backend:
                if (!$("#fecha").length) {
                    $("form").append('<?php echo $this->Form->hidden('fecha', ['id' => 'fecha']); ?>');
                }
                $("#fecha").val(fecha);
            });
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