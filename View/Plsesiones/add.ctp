<?php $this->layout = 'default' ?>
<?php echo $this->Html->script('ckeditor/ckeditor'); ?>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<script src="https://cdn.jsdelivr.net/npm/jquery"></script>
<script src="https://cdn.jsdelivr.net/npm/moment"></script>
<script src="https://cdn.jsdelivr.net/npm/daterangepicker"></script>
<?php
$option = array(
    'label' => 'Fecha',
    'dateFormat' => 'DMY',
    'minYear' => date('Y') - 0,
    'maxYear' => date('Y') + 0,
    'empty' => array(
        'day' => 'Día',
        'month' => 'Mes',
        'year' => 'Año'
    )
);

$optionpuntaje = [
    '' => 'Elegir',
    '1 No tiene' => '1 No tiene',
    '2 Poca' => '2 Poca',
    '3 Moderada' => '3 Moderada',
    '4 Fuerte' => '4 Fuerte',
    '5 Muy Fuerte' => '5 Muy Fuerte'
];
?>

<div class="max-w-5xl mx-auto text-center mb-8">
    <h1 class="text-5xl font-bold mb-4 text-blue-600">
        Registrar Nuevo Plan de Sesión
    </h1>
    <p class="text-gray-500 mb-4 text-lg">
        Registre los datos del nuevo plan de sesión.
    </p>
</div>

<?php

echo $this->Form->create('Plsesion',  [
    'type' => 'file',
    'novalidate' => 'novalidate',
    'class' => 'space-y-6',
]);

// se utiliza para llamar el id responsable donde sea necesario
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
                <p class="text-gray-500">Complete los datos generales del plan de sesión.</p>
            </div>

        </div>
        <div class="grid grid-cols-1 md:grid-cols-2">

            <!-- Fecha de sesión realizada -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold mt-6 mr-4">
                <div class="flex items-center ">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">1</span>
                    <label for="producto_id" class="font-semibold">Fecha de registro</label>
                    <p class="text-red-600">*</p>
                </div>
                <div class="col-span-2 text-md font-semibold my-6">
                    <div class="flex flex-col w-full">
                        <?php echo $this->Form->label('fecha', 'Seleccione Rango de Fecha', [
                            'class' => 'text-gray-700 font-semibold text-sm mb-2'
                        ]); ?>
                        <input
                            type="text"
                            name="datetime_range"
                            id="datetime_range"
                            class="border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400 w-full"
                            placeholder="Selecciona rango de fecha" />
                        <span class="text-sm text-red-600 mt-1">
                            <?= $this->Form->error('fecha') ?>
                        </span>
                    </div>

                </div>
            </div>

            <!-- Duración total de la actividad -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">2</span>
                    <label for="objactividad" class="font-semibold">Duración total de la actividad</label>
                    <p class="text-red-600">*</p>
                </div>

                <p class="help-block text-gray-500 text-xs mb-2 md:mb-5">Agregue la duración total de la actividad.</p>

                <?php
                $optiontime =  array(
                    ' ' => 'Elegir',
                    '5 minutos' => '5 minutos',
                    '10 minutos' => '10 minutos',
                    '15 minutos' => '15 minutos',
                    '20 minutos' => '20 minutos',
                    '25 minutos' => '25 minutos',
                    '30 minutos' => '30 minutos',
                    '35 minutos' => '35 minutos',
                    '40 minutos' => '40 minutos',
                    '45 minutos' => '45 minutos',
                    '50 minutos' => '50 minutos',
                    '55 minutos' => '55 minutos',
                    'Una Hora' => 'Una Hora',
                    'Una Hora y media' => 'Una Hora y media',
                    'Dos Horas' => 'Dos Horas',
                    'Tres Horas' => 'Tres Horas',
                    'Cuatro horas' => 'Cuatro horas',
                    'Seis horas' => 'Seis horas',
                    'Ocho horas' => 'Ocho horas'
                );

                echo $this->Form->input('hora_fin', [
                    'type' => 'select',
                    'id' => 'hora_fin',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700',
                    'onchange' => 'mostrarBarrio(this.value);',
                    'error' => false,
                    'label' => '',
                    'options' => $optiontime,
                    'empty' => 'Seleccione la duracion de la actividad'
                ]);

                if (!empty($this->Form->error('hora_fin'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('hora_fin') . '</div>';
                }
                ?>
            </div>

            <!-- Producto/tarea relacionada -->
            <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">3</span>
                    <label for="producto_id" class="font-semibold">Producto | Actividad relacionada</label>
                    <p class="text-red-600">*</p>
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

            <!-- N° de sesión a desarrollar -->
            <div class="col-span-2 text-md font-semibold mb-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">4</span>
                    <label for="sesion_numero" class="font-semibold">Número de la sesión a desarrollar</label>
                    <p class="text-red-600">*</p>
                </div>

                <div class="flex gap-2 items-center">
                    <input
                        type="number"
                        id="sesion_numero"
                        name="sesion_numero"
                        min="1"
                        max="12"
                        class="text-center border border-gray-300 rounded-lg w-64 p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700"
                        placeholder="Sesión a realizar N°"
                        required />
                    <span class="mx-2">de</span>
                    <input
                        type="number"
                        id="sesion_total"
                        name="sesion_total"
                        min="1"
                        max="12"
                        class="text-center border border-gray-300 rounded-lg w-64 p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700"
                        placeholder="Total de sesiones"
                        required />
                </div>

                <?php echo $this->Form->hidden('sesion', ['id' => 'sesion_hidden']); ?>


                <?php

                if (!empty($this->Form->error('sesion'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('sesion') . '</div>';
                }
                ?>
            </div>

            <!-- Tema -->
            <!-- Objetivo General -->
            <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">5</span>
                    <label for="tema" class="font-semibold">Tema</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('tema', [
                    'label' => '',
                    'data-maxlength' => 500, // <-- aquí defines el límite de caracteres
                    'class' => 'ckeditor border rounded-lg w-full p-2 focus:ring focus:ring-blue-200 mt-2',
                    'error' => false // No mostrar error aquí
                ]);
                if (!empty($this->Form->error('tema'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('tema') . '</div>';
                }
                ?>
            </div>
        </div>
    </div>
</div>

<div class="max-w-6xl mx-auto p-18">
    <div class="bg-white shadow-2xl rounded-xl p-12">
        <!-- Header -->
        <div class="flex items-center mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" class="p-2 bg-blue-100 rounded-lg text-blue-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clipboard-pen-icon lucide-clipboard-pen">
                <rect width="8" height="4" x="8" y="2" rx="1" />
                <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-5.5" />
                <path d="M4 13.5V6a2 2 0 0 1 2-2h2" />
                <path d="M13.378 15.626a1 1 0 1 0-3.004-3.004l-5.01 5.012a2 2 0 0 0-.506.854l-.837 2.87a.5.5 0 0 0 .62.62l2.87-.837a2 2 0 0 0 .854-.506z" />
            </svg>

            <div class="ml-4">
                <h1 class="text-xl font-semibold">Intención</h1>
                <p class="text-gray-500">Cual es la intención del equipo con esta actividad, El espíritu de la práctica pedagógica.</p>
            </div>

        </div>
        <div class="grid grid-cols-1 md:grid-cols-2">

            <!-- intención General -->
            <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">1</span>
                    <label for="objactividad" class="font-semibold">Intención de la actividad</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('intension', [
                    'label' => '',
                    'data-maxlength' => 500, // <-- aquí defines el límite de caracteres
                    'class' => 'ckeditor border rounded-lg w-full p-2 focus:ring focus:ring-blue-200 mt-2',
                    'error' => false // No mostrar error aquí
                ]);
                if (!empty($this->Form->error('intension'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('intension') . '</div>';
                }
                ?>
            </div>
        </div>
    </div>
</div>

<div class="max-w-6xl mx-auto p-18">
    <div class="bg-white shadow-2xl rounded-xl p-12">
        <!-- Header -->
        <div class="flex items-center mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" class="p-2 bg-blue-100 rounded-lg text-blue-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clipboard-pen-icon lucide-clipboard-pen">
                <path d="m13.69 12.479 1.29 4.88a.5.5 0 0 1-.697.591l-1.844-.849a1 1 0 0 0-.88.001l-1.846.85a.5.5 0 0 1-.693-.593l1.29-4.88" />
                <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7z" />
                <circle cx="12" cy="10" r="3" />
            </svg>

            <div class="ml-4">
                <h1 class="text-xl font-semibold">Premisas</h1>
                <p class="text-gray-500">Marque con una X la casilla según corresponda. Establecen un norte de los procesos pedagógicos.</p>
            </div>

        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 mx-16 md:mx-10 lg:mx-14">

            <!-- Premisas: Cuerpo territorio -->
            <div class="flex justify-between col-span-2 text-md font-semibold m-6">
                <div class="flex items-center w-64">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">1</span>
                    <label for="cuerpoterritorio" class="font-semibold">Cuerpo territorio</label>
                    <p class="text-red-600">*</p>
                </div>

                <div class="flex space-x-4 items-center">
                    <!-- Botón NO -->
                    <div>
                        <input type="radio"
                            name="data[Plsesion][cuerpoterritorio]"
                            id="cuerpoterritorio-no"
                            value="0"
                            class="hidden peer"
                            data-target="cuerpoterritorio"
                            data-show="false"
                            checked /> <!-- 👈 Por defecto NO -->
                        <label for="cuerpoterritorio-no"
                            class="px-12 py-2 rounded-lg border cursor-pointer hover:text-white hover:bg-blue-600
                       peer-checked:bg-blue-600 peer-checked:text-white">
                            -
                        </label>
                    </div>

                    <!-- Botón SÍ -->
                    <div>
                        <input type="radio"
                            name="data[Plsesion][cuerpoterritorio]"
                            id="cuerpoterritorio-si"
                            value="1"
                            data-target="cuerpoterritorio"
                            data-show="true"
                            class="hidden peer cursor-pointer" />
                        <label for="cuerpoterritorio-si"
                            class="px-12 py-2 rounded-lg border hover:bg-blue-600 cursor-pointer hover:text-white
                       peer-checked:bg-blue-600 peer-checked:text-white">
                            X
                        </label>
                    </div>
                </div>

                <div class="w-64 text-md font-semibold ">
                    <?php
                    echo $this->Form->input('califi_premisa_ct', [
                        'type' => 'select',
                        'id' => 'cuerpoterritorio',
                        'options' => $optionpuntaje,
                        'label' => false,
                        'style' => 'display: none;', // Oculto por defecto
                        'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700',
                        'error' => false
                    ]);
                    ?>
                </div>
            </div>

            <!-- Premisas: Participación significativa -->
            <div class="flex justify-between col-span-2 text-md font-semibold mb-6 mx-6">
                <div class="flex items-center w-64">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">2</span>
                    <label for="part_significativa" class="font-semibold">Participación significativa</label>
                    <p class="text-red-600">*</p>
                </div>

                <div class="flex space-x-4 items-center">
                    <!-- Botón NO -->
                    <div>
                        <input type="radio"
                            name="data[Plsesion][part_significativa]"
                            id="part_significativa-no"
                            value="0"
                            data-target="part_significativa"
                            data-show="false"
                            class="hidden peer"
                            checked /> <!-- 👈 Por defecto NO -->
                        <label for="part_significativa-no"
                            class="px-12 py-2 rounded-lg border cursor-pointer hover:text-white hover:bg-blue-600
                       peer-checked:bg-blue-600 peer-checked:text-white">
                            -
                        </label>
                    </div>

                    <!-- Botón SÍ -->
                    <div>
                        <input type="radio"
                            name="data[Plsesion][part_significativa]"
                            id="part_significativa-si"
                            value="1"
                            data-target="part_significativa"
                            data-show="true"
                            class="hidden peer cursor-pointer" />
                        <label for="part_significativa-si"
                            class="px-12 py-2 rounded-lg border hover:bg-blue-600 cursor-pointer hover:text-white
                       peer-checked:bg-blue-600 peer-checked:text-white">
                            X
                        </label>
                    </div>
                </div>
                <div class="w-64 text-md font-semibold ">
                    <?php
                    echo $this->Form->input('califi_premisa_ps', [
                        'type' => 'select',
                        'options' => $optionpuntaje,
                        'label' => false,
                        'id' => 'part_significativa',
                        'style' => 'display: none;', // Oculto por defecto
                        'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700',
                        'error' => false
                    ]);
                    ?>
                </div>

            </div>

            <!-- Premisas: Ciudadania activa -->
            <div class="flex justify-between col-span-2 text-md font-semibold mb-6 mx-6">
                <div class="flex items-center w-64">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">3</span>
                    <label for="ciudadaniaactiva" class="font-semibold">Ciudadanía activa</label>
                    <p class="text-red-600">*</p>
                </div>

                <div class="flex space-x-4 items-center">
                    <!-- Botón NO -->
                    <div>
                        <input type="radio"
                            name="data[Plsesion][ciudadaniaactiva]"
                            id="ciudadaniaactiva-no"
                            data-target="ciudadaniaactiva"
                            data-show="false"
                            value="0"
                            class="hidden peer"
                            checked /> <!-- 👈 Por defecto NO -->
                        <label for="ciudadaniaactiva-no"
                            class="px-12 py-2 rounded-lg border cursor-pointer hover:text-white hover:bg-blue-600
                       peer-checked:bg-blue-600 peer-checked:text-white">
                            -
                        </label>
                    </div>

                    <!-- Botón SÍ -->
                    <div>
                        <input type="radio"
                            name="data[Plsesion][ciudadaniaactiva]"
                            id="ciudadaniaactiva-si"
                            value="1"
                            data-target="ciudadaniaactiva"
                            data-show="true"
                            class="hidden peer cursor-pointer" />
                        <label for="ciudadaniaactiva-si"
                            class="px-12 py-2 rounded-lg border hover:bg-blue-600 cursor-pointer hover:text-white
                       peer-checked:bg-blue-600 peer-checked:text-white">
                            X
                        </label>
                    </div>
                </div>
                <div class="w-64 text-md font-semibold ">
                    <?php
                    echo $this->Form->input('califi_premisa_ca', [
                        'type' => 'select',
                        'options' => $optionpuntaje,
                        'label' => false,
                        'id' => 'ciudadaniaactiva',
                        'style' => 'display: none;', // Oculto por defecto
                        'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700',
                        'error' => false
                    ]);
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="max-w-6xl mx-auto p-18">
    <div class="bg-white shadow-2xl rounded-xl p-12">
        <!-- Header -->
        <div class="flex items-center mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" class="p-2 bg-blue-100 rounded-lg text-blue-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clipboard-pen-icon lucide-clipboard-pen">
                <path d="m10.065 12.493-6.18 1.318a.934.934 0 0 1-1.108-.702l-.537-2.15a1.07 1.07 0 0 1 .691-1.265l13.504-4.44" />
                <path d="m13.56 11.747 4.332-.924" />
                <path d="m16 21-3.105-6.21" />
                <path d="M16.485 5.94a2 2 0 0 1 1.455-2.425l1.09-.272a1 1 0 0 1 1.212.727l1.515 6.06a1 1 0 0 1-.727 1.213l-1.09.272a2 2 0 0 1-2.425-1.455z" />
                <path d="m6.158 8.633 1.114 4.456" />
                <path d="m8 21 3.105-6.21" />
                <circle cx="12" cy="13" r="2" />
            </svg>

            <div class="ml-4">
                <h1 class="text-xl font-semibold">Enfoques</h1>
                <p class="text-gray-500">Marque con una X la casilla según corresponda. Se centra en el grupo.</p>
            </div>

        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 mx-16 md:mx-10 lg:mx-14">

            <!-- Premisas: Enfoque territorial -->
            <div class="flex justify-between col-span-2 text-md font-semibold m-6">
                <div class="flex items-center w-64">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">1</span>
                    <label for="cuerpoterritorio" class="font-semibold">Enfoque territorial</label>
                    <p class="text-red-600">*</p>
                </div>

                <div class="flex space-x-4 items-center">
                    <!-- Botón NO -->
                    <div>
                        <input type="radio"
                            name="data[Plsesion][territorial]"
                            id="territorial-no"
                            value="0"
                            class="hidden peer"
                            data-target="territorial"
                            data-show="false"
                            checked /> <!-- 👈 Por defecto NO -->
                        <label for="territorial-no"
                            class="px-12 py-2 rounded-lg border cursor-pointer hover:text-white hover:bg-blue-600
                       peer-checked:bg-blue-600 peer-checked:text-white">
                            -
                        </label>
                    </div>

                    <!-- Botón SÍ -->
                    <div>
                        <input type="radio"
                            name="data[Plsesion][territorial]"
                            id="territorial-si"
                            value="1"
                            data-target="territorial"
                            data-show="true"
                            class="hidden peer cursor-pointer" />
                        <label for="territorial-si"
                            class="px-12 py-2 rounded-lg border hover:bg-blue-600 cursor-pointer hover:text-white
                       peer-checked:bg-blue-600 peer-checked:text-white">
                            X
                        </label>
                    </div>
                </div>
                <div class="w-64 text-md font-semibold ">
                    <?php
                    echo $this->Form->input('califi_enfo_territorial', [
                        'id' => 'territorial',
                        'style' => 'display: none;',
                        'type' => 'select',
                        'options' => $optionpuntaje,
                        'label' => false,
                        'error' => false,
                        'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700',
                    ]);
                    ?></div>

            </div>

            <!-- Premisas: poblacional -->
            <div class="flex justify-between col-span-2 text-md font-semibold mb-6 mx-6">
                <div class="flex items-center w-64">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">2</span>
                    <label for="poblacional" class="font-semibold">Enfoque poblacional</label>
                    <p class="text-red-600">*</p>
                </div>

                <div class="flex space-x-4 items-center">
                    <!-- Botón NO -->
                    <div>
                        <input type="radio"
                            name="data[Plsesion][poblacional]"
                            id="poblacional-no"
                            value="0"
                            data-target="poblacional"
                            data-show="false"
                            class="hidden peer"
                            checked /> <!-- 👈 Por defecto NO -->
                        <label for="poblacional-no"
                            class="px-12 py-2 rounded-lg border cursor-pointer hover:text-white hover:bg-blue-600
                       peer-checked:bg-blue-600 peer-checked:text-white">
                            -
                        </label>
                    </div>

                    <!-- Botón SÍ -->
                    <div>
                        <input type="radio"
                            name="data[Plsesion][poblacional]"
                            id="poblacional-si"
                            value="1"
                            data-target="poblacional"
                            data-show="true"
                            class="hidden peer cursor-pointer" />
                        <label for="poblacional-si"
                            class="px-12 py-2 rounded-lg border hover:bg-blue-600 cursor-pointer hover:text-white
                       peer-checked:bg-blue-600 peer-checked:text-white">
                            X
                        </label>
                    </div>
                </div>

                <div class="w-64 text-md font-semibold ">
                    <?php
                    echo $this->Form->input('califi_enfo_poblacional', [
                        'type' => 'select',
                        'id' => 'poblacional',
                        'options' => $optionpuntaje,
                        'label' => false,
                        'style' => 'display: none;', // Oculto por defecto
                        'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700',
                        'error' => false
                    ]);
                    ?>
                </div>
            </div>

            <!-- Premisas: Enfoque intercultural -->
            <div class="flex justify-between col-span-2 text-md font-semibold mb-6 mx-6">
                <div class="flex items-center w-64">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">3</span>
                    <label for="ciudadaniaactiva" class="font-semibold">Enfoque intercultural</label>
                    <p class="text-red-600">*</p>
                </div>

                <div class="flex space-x-4 items-center">
                    <!-- Botón NO -->
                    <div>
                        <input type="radio"
                            name="data[Plsesion][interultural]"
                            id="interultural-no"
                            value="0"
                            data-target="intercultural"
                            data-show="false"
                            class="hidden peer"
                            checked /> <!-- 👈 Por defecto NO -->
                        <label for="interultural-no"
                            class="px-12 py-2 rounded-lg border cursor-pointer hover:text-white hover:bg-blue-600
                       peer-checked:bg-blue-600 peer-checked:text-white">
                            -
                        </label>
                    </div>

                    <!-- Botón SÍ -->
                    <div>
                        <input type="radio"
                            name="data[Plsesion][interultural]"
                            id="interultural-si"
                            value="1"
                            data-target="intercultural"
                            data-show="true"
                            class="hidden peer cursor-pointer" />
                        <label for="interultural-si"
                            class="px-12 py-2 rounded-lg border hover:bg-blue-600 cursor-pointer hover:text-white
                       peer-checked:bg-blue-600 peer-checked:text-white">
                            X
                        </label>
                    </div>
                </div>

                <div class="w-64 text-md font-semibold ">
                    <?php
                    echo $this->Form->input('califi_enfo_intercultural', [
                        'type' => 'select',
                        'id' => 'intercultural',
                        'options' => $optionpuntaje,
                        'label' => false,
                        'style' => 'display: none;', // Oculto por defecto
                        'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700',
                        'error' => false
                    ]);
                    ?>
                </div>
            </div>

            <!-- Premisas: diferencial -->
            <div class="flex justify-between col-span-2 text-md font-semibold mb-6 mx-6">
                <div class="flex items-center w-64">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">4</span>
                    <label for="diferencial" class="font-semibold">Enfoque diferencial</label>
                    <p class="text-red-600">*</p>
                </div>

                <div class="flex space-x-4 items-center">
                    <!-- Botón NO -->
                    <div>
                        <input type="radio"
                            name="data[Plsesion][diferencial]"
                            id="diferencial-no"
                            value="0"
                            data-target="diferencial"
                            data-show="false"
                            class="hidden peer"
                            checked /> <!-- 👈 Por defecto NO -->
                        <label for="diferencial-no"
                            class="px-12 py-2 rounded-lg border cursor-pointer hover:text-white hover:bg-blue-600
                       peer-checked:bg-blue-600 peer-checked:text-white">
                            -
                        </label>
                    </div>

                    <!-- Botón SÍ -->
                    <div>
                        <input type="radio"
                            name="data[Plsesion][diferencial]"
                            id="diferencial-si"
                            value="1"
                            data-target="diferencial"
                            data-show="true"
                            class="hidden peer cursor-pointer" />
                        <label for="diferencial-si"
                            class="px-12 py-2 rounded-lg border hover:bg-blue-600 cursor-pointer hover:text-white
                       peer-checked:bg-blue-600 peer-checked:text-white">
                            X
                        </label>
                    </div>
                </div>
                <div class="w-64 text-md font-semibold ">
                    <?php
                    echo $this->Form->input('califi_enfo_diferencial', [
                        'type' => 'select',
                        'id' => 'diferencial',
                        'options' => $optionpuntaje,
                        'label' => false,
                        'style' => 'display: none;', // Oculto por defecto
                        'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700',
                        'error' => false
                    ]);
                    ?>
                </div>
            </div>
            <!-- Premisas: Enfoque intercultural -->
            <div class="flex justify-between col-span-2 text-md font-semibold mb-6 mx-6">
                <div class="flex items-center w-64">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">5</span>
                    <label for="ciudadaniaactiva" class="font-semibold">Enfoque de género</label>
                    <p class="text-red-600">*</p>
                </div>
                <div class="flex space-x-4 items-center">
                    <!-- Botón NO -->
                    <div>
                        <input type="radio"
                            name="data[Plsesion][genero]"
                            id="genero-no"
                            value="0"
                            data-target="genero"
                            data-show="false"
                            class="hidden peer"
                            checked /> <!-- 👈 Por defecto NO -->
                        <label for="genero-no"
                            class="px-12 py-2 rounded-lg border cursor-pointer hover:text-white hover:bg-blue-600
                       peer-checked:bg-blue-600 peer-checked:text-white">
                            -
                        </label>
                    </div>

                    <!-- Botón SÍ -->
                    <div>
                        <input type="radio"
                            name="data[Plsesion][genero]"
                            id="genero-si"
                            value="1"
                            data-target="genero"
                            data-show="true"
                            class="hidden peer cursor-pointer" />
                        <label for="genero-si"
                            class="px-12 py-2 rounded-lg border hover:bg-blue-600 cursor-pointer hover:text-white
                       peer-checked:bg-blue-600 peer-checked:text-white">
                            X
                        </label>
                    </div>
                </div>

                <div class="w-64 text-md font-semibold ">
                    <?php
                    echo $this->Form->input('califi_enfo_genero', [
                        'type' => 'select',
                        'id' => 'genero',
                        'options' => $optionpuntaje,
                        'label' => false,
                        'style' => 'display: none;', // Oculto por defecto
                        'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700',
                        'error' => false
                    ]);
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="max-w-6xl mx-auto p-18">
    <div class="bg-white shadow-2xl rounded-xl p-12">
        <!-- Header -->
        <div class="flex items-center mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" class="p-2 bg-blue-100 rounded-lg text-blue-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clipboard-pen-icon lucide-clipboard-pen">
                <path d="m13.69 12.479 1.29 4.88a.5.5 0 0 1-.697.591l-1.844-.849a1 1 0 0 0-.88.001l-1.846.85a.5.5 0 0 1-.693-.593l1.29-4.88" />
                <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7z" />
                <circle cx="12" cy="10" r="3" />
            </svg>

            <div class="ml-4">
                <h1 class="text-xl font-semibold">Objetivos de la estrategia</h1>
                <p class="text-gray-500">Marque con una X según corresponda. A dónde va dirigido el impacto: al agente singular, a los colectivos y liderazgos o a las instituciones y sus trabajadores.</p>
            </div>

        </div>

        <div class="grid grid-cols-1 md:grid-cols-2">

            <div class="col-span-2 grid grid-cols-1 md:grid-cols-2  md:grid-cols-2 mx-16 md:mx-10 lg:mx-14">
                <!-- Objetivo 1 -->
                <div class="col-span-2 text-md font-semibold my-8 ">
                    <div class="flex justify-between ">

                        <div class="flex items-center w-64">
                            <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">1</span>
                            <label for="cuerpoterritorio" class="font-semibold">Objetivo 1</label>
                            <p class="text-red-600">*</p>
                        </div>
                        <div class="flex space-x-4 items-center">
                            <!-- Botón NO -->
                            <div>
                                <input type="radio"
                                    name="data[Plsesion][obj_individuos]"
                                    id="obj_individuos-no"
                                    value="0"
                                    data-target="obj_individuos"
                                    data-show="false"
                                    class="hidden peer"
                                    checked /> <!-- 👈 Por defecto NO -->
                                <label for="obj_individuos-no"
                                    class="px-12 py-2 rounded-lg border cursor-pointer hover:text-white hover:bg-blue-600
                       peer-checked:bg-blue-600 peer-checked:text-white">
                                    -
                                </label>
                            </div>

                            <!-- Botón SÍ -->
                            <div>
                                <input type="radio"
                                    name="data[Plsesion][obj_individuos]"
                                    id="obj_individuos-si"
                                    value="1"
                                    data-target="obj_individuos"
                                    data-show="true"
                                    class="hidden peer cursor-pointer" />
                                <label for="obj_individuos-si"
                                    class="px-12 py-2 rounded-lg border hover:bg-blue-600 cursor-pointer hover:text-white
                       peer-checked:bg-blue-600 peer-checked:text-white">
                                    X
                                </label>
                            </div>
                        </div>

                        <div class="w-64 text-md font-semibold ">
                            <?php
                            echo $this->Form->input('califi_obj1', [
                                'type' => 'select',
                                'options' => $optionpuntaje,
                                'label' => false,
                                'id' => 'obj_individuos',
                                'style' => 'display: none;', // Oculto por defecto
                                'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700',
                                'error' => false
                            ]);
                            ?>
                        </div>
                    </div>
                    <p class="text-xs font-medium text-gray-400 text-align-center mt-6">Fortalecer la capacidad de agencia en torno al bienestar individual y del entorno cercano, promoviendo procesos reflexivos, basados en la autonomía, el afecto y la construcción del conocimiento en relación con la promoción de la salud. </p>
                </div>

                <!-- Objetivo 2 -->
                <div class="col-span-2 text-md font-semibold my-8 ">
                    <div class="flex justify-between">
                        <div class="flex items-center w-64">
                            <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">2</span>
                            <label for="obj_organizaciones" class="font-semibold">Objetivo 2</label>
                            <p class="text-red-600">*</p>
                        </div>

                        <div class="flex space-x-4 items-center">
                            <!-- Botón NO -->
                            <div>
                                <input type="radio"
                                    name="data[Plsesion][obj_organizaciones]"
                                    id="obj_organizaciones-no"
                                    value="0"
                                    data-target="obj_organizaciones"
                                    data-show="false"
                                    class="hidden peer"
                                    checked /> <!-- 👈 Por defecto NO -->
                                <label for="obj_organizaciones-no"
                                    class="px-12 py-2 rounded-lg border cursor-pointer hover:text-white hover:bg-blue-600
                       peer-checked:bg-blue-600 peer-checked:text-white">
                                    -
                                </label>
                            </div>

                            <!-- Botón SÍ -->
                            <div>
                                <input type="radio"
                                    name="data[Plsesion][obj_organizaciones]"
                                    id="obj_organizaciones-si"
                                    value="1"
                                    data-target="obj_organizaciones"
                                    data-show="true"
                                    class="hidden peer cursor-pointer" />
                                <label for="obj_organizaciones-si"
                                    class="px-12 py-2 rounded-lg border hover:bg-blue-600 cursor-pointer hover:text-white
                       peer-checked:bg-blue-600 peer-checked:text-white">
                                    X
                                </label>
                            </div>
                        </div>
                        <div class="w-64 text-md font-semibold ">
                            <?php
                            echo $this->Form->input('califi_obj2', [
                                'type' => 'select',
                                'options' => $optionpuntaje,
                                'label' => false,
                                'id' => 'obj_organizaciones',
                                'style' => 'display: none;', // Oculto por defecto
                                'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700',
                                'error' => false
                            ]);
                            ?>
                        </div>
                    </div>
                    <p class="text-xs font-medium text-gray-400 text-align-center mt-6">Fortalecer las organizaciones sociales y los liderazgos propositivos a partir de la transformación de la cultura política en relación con el derecho a la salud, incrementando su capacidad de agencia e incidencia colectiva en la toma de decisiones que afectan su bienestar y calidad de vida. </p>
                </div>

                <!-- Objetivo 3 -->
                <div class="col-span-2 text-md font-semibold my-8 ">
                    <div class="flex justify-between">
                        <div class="flex items-center w-64">
                            <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">3</span>
                            <label for="obj_instituciones" class="font-semibold">Objetivo 3</label>
                            <p class="text-red-600">*</p>
                        </div>

                        <div class="flex space-x-4">
                            <!-- Botón NO -->
                            <div>
                                <input type="radio"
                                    name="data[Plsesion][obj_instituciones]"
                                    id="obj_instituciones-no"
                                    value="0"
                                    data-target="obj_instituciones"
                                    data-show="false"
                                    class="hidden peer"
                                    checked /> <!-- 👈 Por defecto NO -->
                                <label for="obj_instituciones-no"
                                    class="px-12 py-2 rounded-lg border cursor-pointer hover:text-white hover:bg-blue-600
                       peer-checked:bg-blue-600 peer-checked:text-white">
                                    -
                                </label>
                            </div>

                            <!-- Botón SÍ -->
                            <div>
                                <input type="radio"
                                    name="data[Plsesion][obj_instituciones]"
                                    id="obj_instituciones-si"
                                    value="1"
                                    data-target="obj_instituciones"
                                    data-show="true"
                                    class="hidden peer cursor-pointer" />
                                <label for="obj_instituciones-si"
                                    class="px-12 py-2 rounded-lg border hover:bg-blue-600 cursor-pointer hover:text-white
                       peer-checked:bg-blue-600 peer-checked:text-white">
                                    X
                                </label>
                            </div>
                        </div>
                        <div class="w-64 text-md font-semibold ">
                            <?php
                            echo $this->Form->input('califi_obj3', [
                                'type' => 'select',
                                'options' => $optionpuntaje,
                                'label' => false,
                                'id' => 'obj_instituciones',
                                'style' => 'display: none;', // Oculto por defecto
                                'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700',
                                'error' => false
                            ]);
                            ?>
                        </div>
                    </div>
                    <p class="text-xs font-medium text-gray-400 text-align-center mt-6">Contribuir con el mejoramiento de la capacidad de respuesta de las instituciones a las necesidades y demandas de la ciudadanía en relación con el derecho a la salud, promoviendo la participación cualificada de los diferentes actores sociales y fomentando la articulación intra e interinstitucional.</p>
                </div>
            </div>

            <!-- Objetivo general  -->
            <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">4</span>
                    <label for="objactividad" class="font-semibold">Objetivo general de la actividad pedagogica. El objetivo debe ser medible y alcanzable</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('objetivog', [
                    'label' => '',
                    'data-maxlength' => 500, // <-- aquí defines el límite de caracteres
                    'class' => 'ckeditor border rounded-lg w-full p-2 focus:ring focus:ring-blue-200 mt-2',
                    'error' => false // No mostrar error aquí
                ]);
                if (!empty($this->Form->error('objetivog'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('objetivog') . '</div>';
                }
                ?>
            </div>

            <!-- Objetivo general  -->
            <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">5</span>
                    <label for="objactividad" class="font-semibold">Objetivos específicos. Los objetivos van de acuerdo a los momentos metodológicos, concretan las intenciones educativas y contribuyen al logro del objetivo de la actividad pedagógica.</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('objetivoe', [
                    'label' => '',
                    'data-maxlength' => 500, // <-- aquí defines el límite de caracteres
                    'class' => 'ckeditor border rounded-lg w-full p-2 focus:ring focus:ring-blue-200 mt-2',
                    'error' => false // No mostrar error aquí
                ]);
                if (!empty($this->Form->error('objetivoe'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('objetivoe') . '</div>';
                }
                ?>
            </div>
        </div>
    </div>
</div>

<div class="max-w-6xl mx-auto p-18">
    <div class="bg-white shadow-2xl rounded-xl p-12">
        <!-- Header -->
        <div class="flex items-center mb-4">

            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" class="p-2 bg-blue-100 rounded-lg text-blue-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clipboard-pen-icon lucide-clipboard-pen">
                <path d="M8.62 13.8A2.25 2.25 0 1 1 12 10.836a2.25 2.25 0 1 1 3.38 2.966l-2.626 2.856a.998.998 0 0 1-1.507 0z" />
                <path d="M3 10a2 2 0 0 1 .709-1.528l7-6a2 2 0 0 1 2.582 0l7 6A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
            </svg>
            <div class="ml-4">
                <h1 class="text-xl font-semibold">Curso de vida</h1>
                <p class="text-gray-500">Complete los datos relacionados con el curso de vida.</p>
            </div>

        </div>
        <div class="grid grid-cols-1 md:grid-cols-2">

            <!-- Tipo de poblacion participante -->
            <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">1</span>
                    <label for="tipoblacion" class="font-semibold">Tipo de poblacion participante</label>
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
                    'tipoblacion',
                    [
                        'type' => 'select',
                        'label' => false,
                        'multiple' => true,
                        'id' => 'tipoblacion',
                        'class' => 'w-full',
                        'empty' => false,
                        'options' => $options,
                        'error' => false // No mostrar error aquí
                    ]
                );
                if (!empty($this->Form->error('tipoblacion'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('tipoblacion') . '</div>';
                }
                ?>
            </div>

            <!-- Curso de vida -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mr-4">

                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">2</span>
                    <label for="cursovida" class="font-semibold">Curso de Vida</label>
                    <p class="text-red-600">*</p>

                </div>
                <?php
                echo $this->Form->input('cursovida', [
                    'type' => 'select',
                    'label' => false,
                    'multiple' => true,
                    'empty' => false,
                    'id' => 'cursovida',
                    'options' => [
                        'Primera infancia' => 'Primera infancia',
                        'Infancia' => 'Infancia',
                        'Adolescencia' => 'Adolescencia',
                        'Juventud' => 'Juventud',
                        'Adultez' => 'Adultez',
                        'Vejez' => 'Vejez'
                    ],
                    'class' => 'w-full',
                    'error' => false
                ]);
                if (!empty($this->Form->error('cursovida'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('cursovida') . '</div>';
                }
                ?>
            </div>

            <!-- Tipo de proceso -->
            <div class="col-span-2 md:col-span-1  text-md font-semibold my-6 mr-4">

                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">3</span>
                    <label for="proceso" class="font-semibold">Tipo de proceso</label>
                    <p class="text-red-600">*</p>

                </div>
                <?php
                $optiontime = [
                    '' => 'Elegir',
                    '1. Articulación' => '1. Articulación',
                    '2. Educación y Comunicación ' => '2. Educación y Comunicación ',
                    '3. Fortalecimiento y Formación ' => '3. Fortalecimiento y Formación ',
                    '4. Gestión del  Conocimiento ' => '4. Gestión del  Conocimiento ',
                    '5. Otro ' => '5. Otro '
                ];
                echo $this->Form->input('proceso', [
                    'type' => 'select',
                    'options' => $optiontime,
                    'label' => false,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700',
                    'error' => false
                ]);
                if (!empty($this->Form->error('proceso'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('proceso') . '</div>';
                }
                ?>
            </div>

            <!-- Dimension -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">4</span>
                    <label for="proactividad_id" class="font-semibold">Dimensión</label>
                    <p class="text-red-600">*</p>

                </div>
                <?php
                $optiontime = [
                    '' => 'Elegir',
                    '1.MalNutricion-HEVS' => '1.MalNutricion-HEVS',
                    '2.Les.Autoinflingidas' => '2.Les.Autoinflingidas',
                    '3.DebilidadEyD' => '3.DebilidadEyD',
                    '4.MM.Materna SSR' => '4.MM.Materna SSR',
                    '5.DeterAmbiental' => '5.DeterAmbiental',
                    '6.DefResolutividadGDPE' => '6.DefResolutividadGDPE',
                    '7.Mm Enf Trasmisible' => '7.Mm Enf Trasmisible',
                    '8.9.LaboralDebilVigilancia' => '8.9.LaboralDebilVigilancia',
                    '10.DebilGrantiaDerechoSalud' => '10.DebilGrantiaDerechoSalud',
                    'Dispositivos Comunitarios' => 'Dispositivos Comunitarios'
                ];
                echo $this->Form->input('dimension', [
                    'type' => 'select',
                    'options' => $optiontime,
                    'label' => false,
                    'error' => false,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700',
                ]);
                if (!empty($this->Form->error('dimension'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('dimension') . '</div>';
                }
                ?>
            </div>

            <!-- Preguntas de sentido  -->
            <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">5</span>
                    <label for="objactividad" class="font-semibold">Preguntas de sentido. La información propende por generar conciencia, sujeto-tiempo-espacio, las preguntas construyen</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('preguntasentido', [
                    'label' => '',
                    'data-maxlength' => 500, // <-- aquí defines el límite de caracteres
                    'class' => 'ckeditor border rounded-lg w-full p-2 focus:ring focus:ring-blue-200 mt-2',
                    'error' => false // No mostrar error aquí
                ]);
                if (!empty($this->Form->error('preguntasentido'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('preguntasentido') . '</div>';
                }
                ?>
            </div>

            <!-- Resumen de momentos  -->
            <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">6</span>
                    <label for="objactividad" class="font-semibold">Registre los aspectos relevantes de cada momento asi como palabras clave escriba despues de cada momento las palalbras claves y la idea principal(Opcional).</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('momentosresumen', [
                    'label' => '',
                    'data-maxlength' => 500, // <-- aquí defines el límite de caracteres
                    'class' => 'ckeditor border rounded-lg w-full p-2 focus:ring focus:ring-blue-200 mt-2',
                    'error' => false // No mostrar error aquí
                ]);
                if (!empty($this->Form->error('momentosresumen'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('momentosresumen') . '</div>';
                }
                ?>
            </div>

        </div>
    </div>
</div>

<div class="max-w-6xl mx-auto p-18 mt-4">
    <div class="bg-white shadow-2xl rounded-xl p-12">
        <!-- Header -->
        <div class="flex items-center mb-4">
            <img src="../img/update/historicoHover.png" alt="p-8 bg-blue-600" class="p-2 bg-blue-100 rounded-lg w-[60px]">
            <div class="ml-4">
                <h1 class="text-xl font-semibold">Soportes requeridos</h1>
                <p class="text-gray-500">Anexe los documentos requeridos para la sesión.</p>
            </div>

        </div>
        <div class="grid grid-cols-1 md:grid-cols-2">

            <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">1</span>
                    <label for="proactividad_id" class="font-semibold">Soportes</label>
                    <p class="text-red-600">*</p>

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

                        echo $this->Form->input('dirplanes', array('type' => 'hidden'));
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


            <div class="col-span-2 text-md font-semibold mb-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">2</span>
                    <label for="proactividad_id" class="font-semibold">Enlace de insumos propuestos</label>
                </div>
                <p class="text-gray-700 font-semibold text-sm mb-2">Por favor, proporcione el enlace a los insumos propuestos para la sesión. recuerde que los enlaces deben ser accesibles y estar correctamente formateados ademas de utilizar "," para separar. Estos son los dominios permitidos: 'drive.google.com',
                    'onedrive.com',
                    'youtube.com',
                    'github.com',
                    'gama.com',
                    'quiz.com'
                </p>
                <?php
                echo $this->Form->input('enlaceurl', [
                    'type' => 'text',
                    'id' => 'enlaceurl',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700',
                    'onchange' => 'mostrarBarrio(this.value);',
                    'error' => false,
                    'min' => 1,
                    'max' => 20,
                    'label' => '',
                    'empty' => 'Seleccione una lugar'
                ]);
                if (!empty($this->Form->error('enlaceurl'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('sesion') . '</div>';
                }
                ?>
            </div>


            <div class="pt-2 flex gap-4">
                <button type="submit" name="btn" value="Guardar y asociar otra sesion" class="bg-green-600 text-white px-6 py-2 rounded-md hover:bg-green-700 transition font-medium flex items-center justify-center gap-2">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-save-icon lucide-save">
                            <path d="M15.2 3a2 2 0 0 1 1.4.6l3.8 3.8a2 2 0 0 1 .6 1.4V19a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2z" />
                            <path d="M17 21v-7a1 1 0 0 0-1-1H8a1 1 0 0 0-1 1v7" />
                            <path d="M7 3v4a1 1 0 0 0 1 1h7" />
                        </svg>
                    </span>
                    Guardar
                </button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function mostrar(isChecked) {
        if (isChecked) {
            $("#si").show();
            $("#no").hide();
        } else {
            $("#si").hide();
            $("#no").show();
        }
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

    function agregarOpcionSeleccion() {
        $("#ProcesoregistroUbicacionId").prepend("<option value='' selected='selected'>Seleccione</option>");
        $("#ProcesoregistroProactividadId").prepend("<option value='' selected='selected'>Seleccione</option>");
        $("#ProcesoregistroPlsesionId").prepend("<option value='' selected='selected'>Seleccione</option>");
        // $("#status").prepend("<option value='' selected='selected'>Seleccione</option>");
    }

    function validarDominioEnlace(url) {
        const dominiosPermitidos = [
            'drive.google.com',
            'onedrive.com',
            'youtube.com',
            'github.com',
            'gama.com',
            'quiz.com'
        ];

        try {
            // Permite validar múltiples URLs separadas por coma
            const urls = url.split(',');
            return urls.every(u => {
                try {
                    const urlObj = new URL(u.trim());
                    return dominiosPermitidos.some(dominio => urlObj.hostname.includes(dominio));
                } catch (e) {
                    return false;
                }
            });
            return dominiosPermitidos.some(dominio => urlObj.hostname.includes(dominio));
        } catch (e) {
            return false; // URL no válida
        }
    }

    document.addEventListener("DOMContentLoaded", () => {

        // Busca todos los radios con data-target
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

        var enlaceInput = document.getElementById('enlaceurl');
        enlaceInput.addEventListener('change', function() {
            var url = enlaceInput.value;
            if (url && !validarDominioEnlace(url)) {
                alert('El enlace proporcionado no es válido. Por favor, utilice un enlace de google.com, onedrive.com, dropbox.com o github.com.');
                enlaceInput.value = ''; // Limpiar el campo
                enlaceInput.focus();
            }
        });

        const options = {
            searchEnabled: true,
            searchChoices: true,
            removeItemButton: false,
            itemSelectText: '',
            shouldSort: false,
            searchPlaceholderValue: "Escriba para filtrar...",
        };
        const choices_producto = new Choices("#producto_id", options);

        const choices_tipopoblacion = new Choices("#tipoblacion", {
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

        const choices_cursovida = new Choices("#cursovida", {
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


        function updateSesionField() {
            const num = document.getElementById('sesion_numero').value;
            const total = document.getElementById('sesion_total').value;
            const hidden = document.getElementById('sesion_hidden');

            console.log(`Número: ${num}, Total: ${total}`);

            if (num && total) {
                hidden.value = `${num} / ${total}`;
            } else {
                hidden.value = '';
            }
        }

        document.getElementById('sesion_numero').addEventListener('input', updateSesionField);
        document.getElementById('sesion_total').addEventListener('input', updateSesionField);

        // Inicializar por si ya vienen valores cargados
        updateSesionField();

    });

    $(function() {
        $('#datetime_range').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
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
            let fecha = start.format('YYYY-MM-DD');
            console.log("Fecha seleccionada:", fecha);
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


    function agregarOpcionSeleccion() {
        $("#PlsesionProductoId").prepend("<option value='' selected='selected'>Seleccione</option>");
        $("#PlsesionResponsableId").prepend("<option value='' selected='selected'>Seleccione</option>");
    }

    function validarTamanioSoporte() {
        var auxFile = document.getElementById('PlsesionAnexo');
        var sizeF = auxFile.files[0].size;
        if (sizeF > 3000000) {
            alert('El archivo debe ser menor a 3 Mb');
            auxFile.value = '';
        }
    }



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