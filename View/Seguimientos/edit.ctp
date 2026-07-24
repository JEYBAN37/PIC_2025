<?php
$this->layout = 'default' ?>
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
        Seguimiento ejecución Anexo Técnico PIC 2026
    </h1>
    <p class="text-gray-500 mb-4 text-lg">
        Segumiento físico técnico al cumplimiento del plan de intervenciones colectivas
    </p>
</div>

<!-- Formulario -->
<?php
echo $this->Form->create('Seguimiento', [
    'type' => 'file',
    'novalidate' => 'novalidate',
    'class' => 'space-y-6',
]);
// se utiliza para llamar el id responsable donde sea necesario
$nombreUsuario = isset($_SESSION['Auth']['User']['id_responsable']) ? $_SESSION['Auth']['User']['id_responsable'] : '';
echo $this->Form->input('responsable_id', array('type' => 'hidden'));
echo $this->Form->input('referente_id', array('value' => $nombreUsuario, 'type' => 'hidden'));
// se utiliza para mantener el id del seguimiento
echo $this->Form->input('producto_id', array('type' => 'hidden'));

$idredirect = $this->Form->value('producto_id');
?>





<div class="max-w-6xl mx-auto p-18">
    <div class="bg-white shadow-2xl rounded-xl p-12">
        <!-- Header -->
        <div class="flex items-center mb-4">
            <img src="<?php echo $this->webroot; ?>/img/update/docHover.png" alt="p-8 bg-blue-600"
                class="p-2 bg-blue-100 rounded-lg">
            <div class="ml-4">
                <h1 class="text-xl font-semibold">Reporte de avance</h1>
                <p class="text-gray-500">Diligencie la información solicitada segun corresponda</p>
            </div>

        </div>

        <?php
        echo $this->Form->input('id', ['type' => 'hidden']); ?>

        <div class="grid grid-cols-1 md:grid-cols-2 ">


            <!-- Fecha de sesión realizada -->
            <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center ">
                    <span class="mr-2 px-2 rounded-lg bg-blue-200 text-md font-semibold">1</span>
                    <label for="producto_id" class="font-semibold">Mes reportado</label>
                    <p class="text-red-600">*</p>
                </div>
                <div class="col-span-2 text-md font-semibold my-6">
                    <div class="flex flex-col w-full">
                        <?php
                        echo $this->Form->input('fecha', [
                            'label' => false,
                            'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none  focus:ring-1 focus:ring-blue-500 focus:border-blue-500 borde azul  mt-2 font-semibold text-gray-700  text-sm focus:text-gray-900',
                            'error' => false,
                            'readonly'


                        ]);
                        ?>

                        <span class="text-sm text-red-600 mt-1">
                            <?= $this->Form->error('fecha') ?>
                        </span>
                    </div>

                </div>
            </div>

            <!-- Observación Operador -->
            <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-blue-200 text-md font-semibold"></span>
                    <label for="observacionoperador" class="font-semibold">Observación Equipo PIC</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('observacionoperador', [
                    'label' => '',
                    'class' => 'ckeditor border rounded-lg w-full p-2 focus:ring focus:ring-blue-200 mt-2',
                    'data-maxlength' => 2000,
                    'error' => false, // No mostrar error aquí
                    'readonly'
                ]);
                if (!empty($this->Form->error('observacionoperador'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('observacionoperador') . '</div>';
                }
                ?>
            </div>



            <!-- Valor asignado de la actividad -->
            <div class="col-span-2 text-md font-semibold mt-4 mb-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-blue-200 text-md font-semibold">2</span>
                    <label for="valorprogramado" class="font-semibold">Porcentaje porgramado para el mes</label>
                    <p class="text-red-600">*</p>

                </div>

                <p class="help-block text-gray-500 text-xs mb-2">Verificar el Porcentaje asisgnado a la actividad para
                    el mes
                    reportado según anexo técnico.</p>

                <?php
                echo $this->Form->input('valorprogramado', [
                    'label' => false,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none  focus:ring-1 focus:ring-blue-500 focus:border-blue-500 borde azul  mt-2 font-semibold text-gray-700  text-sm focus:text-gray-900',
                    'error' => false,
                    'type' => 'number'
                    
                ]);

                if (!empty($this->Form->error('valorprogramado'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('valorprogramado') . '</div>';
                }
                ?>
            </div>

            <!-- Valor ejecutado de la actividad -->
            <div class="col-span-2 text-md font-semibold mt-4 mb-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-blue-200 text-md font-semibold">3</span>
                    <label for="valorejecutado" class="font-semibold">porcentaje ejecutado para el mes</label>
                    <p class="text-red-600">*</p>

                </div>

                <p class="help-block text-gray-500 text-xs mb-2">Porcentaje ejecutado del mes reportado.</p>

                <?php
                echo $this->Form->input('valorejecutado', [
                    'label' => false,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none  focus:ring-1 focus:ring-blue-500 focus:border-blue-500 borde azul  mt-2 font-semibold text-gray-700  text-sm focus:text-gray-900',
                    'error' => false,
                    'min' => 1,
                    'maxLeght' => 2,
                    'type' => 'number'
                    //Consultar en gemmy ia limite de 0 a 100
                ]);

                if (!empty($this->Form->error('valorejecutado'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('valorejecutado') . '</div>';
                }
                ?>
            </div>


        </div>
    </div>
</div>



<div class="max-w-6xl mx-auto p-18 mt-8">
    <div class="bg-white shadow-2xl rounded-xl p-12">

        <!-- Observación Referente -->
        <div class="col-span-2 text-md font-semibold my-6">
            <div class="flex items-center mb-4">
                <span class="mr-2 px-2 rounded-lg bg-blue-200 text-md font-semibold">6</span>
                <label for="observacionreferente" class="font-semibold">Observación Referente SMS</label>
                <p class="text-red-600">*</p>
            </div>
            <?php
            echo $this->Form->input('observacionreferente', [
                'label' => '',
                'data-maxlength' => 1200,
                'class' => 'ckeditor border rounded-lg w-full p-2 focus:ring focus:ring-blue-200',
                'error' => false // No mostrar error aquí
            ]);
            if (!empty($this->Form->error('observacionreferente'))) {
                echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('observacionreferente') . '</div>';
            }
            ?>
        </div>

        <!-- Acompañamiento -->
        <div
            class="flex flex-col md:flex-row justify-center md:justify-between col-span-1 md:col-span-2 text-md font-semibold my-6 mr-4">
            <div class="flex items-center mb-4">
                <span class="mr-2 px-2 rounded-lg bg-blue-200 text-md font-semibold">7</span>
                <label for="actividad" class="font-semibold">Acompañamiento Referente SMS</label>
                <p class="text-red-600">*</p>
            </div>

            <div class="flex space-x-4 items-center justify-center md:justify-start mt-4 pr-0 md:pr-[10%]  md:mt-0 ">
                <!-- Botón NO -->
                <?php $selected = $this->Form->value('acompanamiento'); ?>
                <div>
                    <input type="radio" name="data[Seguimiento][acompanamiento]" id="acompanamiento-no" value="0"
                        class="hidden peer" data-target="acompanamiento" data-show="false"
                        <?php if ($selected === null || $selected === '' || $selected === '0') echo 'checked'; ?>
                        checked /> <!-- 👈 Por defecto NO -->
                    <label for="acompanamiento-no" class="px-12 py-2 rounded-lg border cursor-pointer hover:text-white hover:bg-blue-600
                       peer-checked:bg-blue-600 peer-checked:text-white">
                        NO
                    </label>
                </div>

                <!-- Botón SÍ -->
                <div>
                    <input type="radio" name="data[Seguimiento][acompanamiento]" id="acompanamiento-si" value="1"
                        data-target="acompanamiento" data-show="true" <?php if ($selected === '1') echo 'checked'; ?>
                        class="hidden peer cursor-pointer" />
                    <label for="acompanamiento-si" class="px-12 py-2 rounded-lg border hover:bg-blue-600 cursor-pointer hover:text-white
                       peer-checked:bg-blue-600 peer-checked:text-white">
                        SI
                    </label>
                </div>
            </div>
        </div>

        <div id="acompanamiento" class="grid grid-cols-2 gap-4 col-span-2 md:col-span-2 text-md font-semibold">

            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">?</span>
                    <label for="tipoAcomañaiento" class="font-semibold">Observacion del
                        acompañamiento</label>
                </div>
                <?php

                $observacionseguimiento = [
                    '0 Elegir' => 'Elegir',
                    '1 Asistencia Técnica' => 'Asistencia Técnica',
                    '2 Verificación propuestas pedagógicas ' => 'Verificación propuestas pedagógicas',
                    '3 Verificación concertacion comunitaria' => 'Verificación concertacion comunitaria',
                    '4 Apoyo Gestión y articulación institucional' => 'Apoyo Gestión y articulación institucional',
                    '5 Orientación en la elaboración de soportes' => 'Orientacion en la elaboración de soportes',
                    '6 Orientación en la elaboración de soportes' => 'Orientacion en la elaboración de soportes',
                    '7 Acompañamiento en acciones programadas' => 'Acompañamiento en acciones programadas',
                    '8 Acompañamiento Administrativo_Logistico' => 'Acompañamiento Administrativo_logistico',
                    '9 Verificación de convocatoria' => 'Verificación de convocatoria',

                ];

                echo $this->Form->input('descripcionacompanamiento', [
                    'id' => 'descripcionacompanamiento',
                    'type' => 'select',
                    'multiple' => true,
                    'empty' => false,
                    'options' => $observacionseguimiento,
                    'label' => false,
                    'error' => false,
                     'class' => 'w-full'
                ]);

                ?>
            </div>
        </div>



        <div class="col-span-2 text-md font-semibold my-6">
            <div class="flex items-center mb-4">
                <span class="mr-2 px-2 rounded-lg bg-blue-200 text-md font-semibold">8</span>
                <label for="estado" class="font-semibold">Estado</label>
                <p class="text-red-600">*</p>

            </div>
            <?php
            $options = [
            '1. Cumple actividad Cerreda' => 'Cumple actividad cerrada',    
            '1. Cumple avance' => 'Cumple avance',
                '1. Avance parcial' => 'Avance parcial',
                '1. Sin avance programado' => 'Sin avance programado',
                '3. No aplica periodo' => 'No aplica periodo',
                '4. Sin avance' => 'Sin avance',
                '5. Avance limitado' => 'Avance limitado',
                '6. Corregir' => 'Corregir',
            ];

            echo $this->Form->input(
                'estado',
                [
                    'type' => 'select',
                    'label' => false,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700',
                    'options' => $options,
                    'error' => false // No mostrar error aquí
                ]
            );
            if (!empty($this->Form->error('estado'))) {
                echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('estado') . '</div>';
            }
            ?>
        </div>


        <div class="pt-2 flex gap-4">
            <button type="submit" name="btn" value="Guardar Seguimiento"
                class="bg-green-600 text-white px-6 py-2 rounded-md hover:bg-green-700 transition font-medium flex items-center justify-center gap-2">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-save-icon lucide-save">
                        <path
                            d="M15.2 3a2 2 0 0 1 1.4.6l3.8 3.8a2 2 0 0 1 .6 1.4V19a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2z" />
                        <path d="M17 21v-7a1 1 0 0 0-1-1H8a1 1 0 0 0-1 1v7" />
                        <path d="M7 3v4a1 1 0 0 0 1 1h7" />
                    </svg>
                </span>
                Guardar Seguimiento
            </button>
        </div>
    </div>
</div>


<script>
document.addEventListener("DOMContentLoaded", function() {
    document.querySelectorAll('input[type="radio"][data-target]').forEach(function(radio) {
        radio.addEventListener('change', function() {
            var targetId = radio.getAttribute('data-target');
            var show = radio.getAttribute('data-show') === 'true';
            var target = document.getElementById(targetId);
            if (target) {
                target.style.display = show ? 'block' : 'none';
            }
        });
        // Mostrar/ocultar al cargar la página según el radio seleccionado
        if (radio.checked) {
            var targetId = radio.getAttribute('data-target');
            var show = radio.getAttribute('data-show') === 'true';
            var target = document.getElementById(targetId);
            if (target) {
                target.style.display = show ? 'block' : 'none';
            }
        }
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
const choices_descripcionacompanamiento = new Choices("#descripcionacompanamiento", {
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
    placeholderValue: "Seleccione la(s) acción(es) de acompañamiento",
});

// Detectar si el usuario intenta retroceder con la flecha del navegador
window.addEventListener('popstate', function(event) {
    if (!confirm('¿Está seguro que desea salir de la página? Se pueden perder los cambios no guardados.')) {
        history.pushState(null, null, location.href);
    }
});

function preventBackNavigation() {
    if (confirm('¿Está seguro que desea salir de la página? Se pueden perder los cambios no guardados.')) {
        window.location.href =
            '<?php echo $this->Html->url(['controller' => 'Productos', 'action' => 'view', $idredirect]); ?>';
    }
}

// Prevenir retroceso con la flecha del navegador (mejor experiencia)
history.pushState(null, null, location.href);
</script>