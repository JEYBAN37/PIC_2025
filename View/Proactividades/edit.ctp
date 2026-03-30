<?php

use function PHPSTORM_META\type;

$this->layout = 'default' ?>

<div class="max-w-5xl mx-auto text-center mb-8">
    <h1 class="text-5xl font-bold mb-4 text-blue-600">
        Actualizar Sistemtización proceso formativo - educativo
    </h1>
    <p class="text-gray-500 mb-4 text-lg">
        Registre preliminarmente los campos relacionados con la sistematización.
        Tenga en cuenta que podrá editar y complementar los demás campos posteriormente.
    </p>
</div>

<!-- Formulario -->
<?php
echo $this->Form->create('Proactividad', [
    'type' => 'file',
    'novalidate' => 'novalidate',
    'class' => 'space-y-6',
]);
?>


<div class="max-w-6xl mx-auto p-18">
    <div class="bg-white shadow-2xl rounded-xl p-12">
        <!-- Header -->
        <div class="flex items-center mb-4">
            <img src="<?php echo $this->webroot; ?>/img/update/docHover.png" alt="p-8 bg-blue-600" class="p-2 bg-blue-100 rounded-lg">
            <div class="ml-4">
                <h1 class="text-xl font-semibold">Información del proceso</h1>
                <p class="text-gray-500">Complete los datos básicos del proceso de sistematización.</p>
            </div>

        </div>

        <?php
        echo $this->Form->input('id', ['type' => 'hidden']); ?>

        <div class="grid grid-cols-1 md:grid-cols-2 ">

            <!-- Producto/tarea relacionada -->
            <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-blue-200 text-md font-semibold">1</span>
                    <label for="producto_id" class="font-semibold">Producto | Actividad relacionada</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('producto_id', [
                    'type' => 'select',
                    'id' => 'producto_id',
                    'class' => 'w-full',
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

             <!-- total_sesiones tratada -->
            <div class="col-span-2 text-md font-semibold mt-4 mb-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-blue-200 text-md font-semibold">2</span>
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
                    'max' => 50
                ]);

                if (!empty($this->Form->error('totalsesiones'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('totalsesiones') . '</div>';
                }
                ?>
            </div>

            <!-- Tipo de poblacion participante -->
            <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">3</span>
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
                        'id' => 'tipopoblacion',
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

            <!-- Nombre de organización o grupo -->
            <div class="col-span-2 md:col-span-1  text-md font-semibold my-6 mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">4</span>
                    <label for="objactividad" class="font-semibold">Nombre de organización o grupo</label>
                    <p class="text-red-600">*</p>

                </div>

                <p class="help-block text-gray-500 text-xs mb-2">Por ejemplo: Grupo surprisecity.</p>

                <?php
                echo $this->Form->input('grupo', [
                    'label' => false,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none  focus:ring-1 focus:ring-blue-500 focus:border-blue-500 borde azul  mt-2 font-semibold text-gray-700  text-sm focus:text-gray-900',
                    'error' => false
                ]);

                if (!empty($this->Form->error('grupo'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('grupo') . '</div>';
                }
                ?>
            </div>

            <!-- Caracteristica de la sesión -->
            <div class="col-span-2 md:col-span-1  text-md font-semibold my-6">

                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">5</span>
                    <label for="proactividad_id" class="font-semibold">Caracteristica de la sesión</label>
                    <p class="text-red-600">*</p>

                </div>

                <p class="help-block text-gray-500 text-xs mb-2">Elija el tipo de actividad desarrollada</p>
                <?php
                $optiontime = [
                    '' => 'Elegir',
                    '1. Taller ' => '1. Taller ',
                    '2. Minga' => '2. Minga',
                    '3. Encuentro' => '3. Encuentro  ',
                    '5. Otro' => '5. Otro '
                ];
                echo $this->Form->input('caracteristicasesion', [
                    'type' => 'select',
                    'options' => $optiontime,
                    'label' => false,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700 mt-2',
                    'error' => false
                ]);
                if (!empty($this->Form->error('caracteristicasesion'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('caracteristicasesion') . '</div>';
                }
                ?>
            </div>
        </div>
    </div>
</div>

<div class="max-w-6xl mx-auto p-18 mt-8">
    <div class="bg-white shadow-2xl rounded-xl p-12">
        <!-- Header -->
        <div class="flex items-center mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" class="p-2 bg-blue-100 rounded-lg text-blue-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clipboard-pen-icon lucide-clipboard-pen">
                <circle cx="12" cy="12" r="10" />
                <circle cx="12" cy="12" r="4" />
                <path d="M12 12h.01" />
            </svg>
            <div class="ml-4">
                <h1 class="text-xl font-semibold">Objetivos</h1>
                <p class="text-gray-500">Relación de la actividad a sistematizar con los objetivos</p>
            </div>

        </div>

        <div class="grid grid-cols-1 md:grid-cols-2">

            <!-- Objetivo General -->
            <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-blue-200 text-md font-semibold">1</span>
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
                    <span class="mr-2 px-2 rounded-lg bg-blue-200 text-md font-semibold">2</span>
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
    </div>
</div>

<div class="max-w-6xl mx-auto p-18 mt-8">
    <div class="bg-white shadow-2xl rounded-xl p-12">

        <!-- Header -->
        <div class="flex items-center mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" class="p-2 bg-blue-100 rounded-lg text-blue-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clipboard-pen-icon lucide-clipboard-pen">
                <circle cx="12" cy="12" r="10" />
                <circle cx="12" cy="12" r="4" />
                <path d="M12 12h.01" />
            </svg>
            <div class="ml-4">
                <h1 class="text-xl font-semibold">Objetivos Ciudad Bienestar</h1>
                <p class="text-gray-500">Relación de la actividad a sistematizar con los objetivos de la estrategia Ciudad Bienestar</p>
            </div>

        </div>

        <div class="grid grid-cols-1 md:grid-cols-2">

            <!-- Objetivo 1  -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mr-4">

                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">1</span>
                    <label for="proactividad_id" class="font-semibold">Objetivo 1 </label>
                    <p class="text-red-600">*</p>

                </div>

                <p class="help-block text-gray-500 text-xs mb-2">Elija el tipo de actividad desarrollada</p>
                <?php
                $optiontime = [
                    '' => 'Elegir',
                    '1 No tiene' => '1 No tiene',
                    '2 Poca' => '2 Poca',
                    '3 Moderada' => '3 Moderada',
                    '4 Fuerte' => '4 Fuerte',
                    '5 Muy Fuerte' => '5 Muy Fuerte'
                ];
                echo $this->Form->input('objetivouno', [
                    'type' => 'select',
                    'options' => $optiontime,
                    'label' => false,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700 mt-2',
                    'error' => false
                ]);
                if (!empty($this->Form->error('objetivouno'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('objetivouno') . '</div>';
                }
                ?>
            </div>

            <!-- Objetivo 2  -->
            <div class="col-span-2 md:col-span-1  text-md font-semibold my-6">

                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">2</span>
                    <label for="proactividad_id" class="font-semibold">Objetivo 2 </label>
                    <p class="text-red-600">*</p>

                </div>

                <p class="help-block text-gray-500 text-xs mb-2">Elija el tipo de actividad desarrollada</p>
                <?php
                echo $this->Form->input('objetivodos', [
                    'type' => 'select',
                    'options' => $optiontime,
                    'label' => false,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700 mt-2',
                    'error' => false
                ]);
                if (!empty($this->Form->error('objetivodos'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('objetivodos') . '</div>';
                }
                ?>
            </div>

            <!-- Objetivo 3  -->
            <div class="col-span-2 md:col-span-1  text-md font-semibold my-6 mr-4">

                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">3</span>
                    <label for="proactividad_id" class="font-semibold">Objetivo 3 </label>
                    <p class="text-red-600">*</p>

                </div>

                <p class="help-block text-gray-500 text-xs mb-2">Elija el tipo de actividad desarrollada</p>
                <?php
                echo $this->Form->input('objetivotres', [
                    'type' => 'select',
                    'options' => $optiontime,
                    'label' => false,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700 mt-2',
                    'error' => false
                ]);
                if (!empty($this->Form->error('objetivotres'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('objetivotres') . '</div>';
                }
                ?>
            </div>

            <!-- Objetivos Ciudad Bienestar -->
            <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-start mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">4</span>
                    <label for="producto_id" class="font-semibold">Describa de qué forma la actividad contribuye con el o los objetivos de la estrategia CB segun la puntuacion asignada</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('contobjetivo', [
                    'label' => '',
                    'data-maxlength' => 5000,
                    'class' => 'ckeditor border rounded-lg w-full p-2 focus:ring focus:ring-blue-200',
                    'error' => false // No mostrar error aquí
                ]);
                if (!empty($this->Form->error('contobjetivo'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('contobjetivo') . '</div>';
                }
                ?>
            </div>
        </div>
    </div>
</div>

<div class="max-w-6xl mx-auto p-18 mt-8">
    <div class="bg-white shadow-2xl rounded-xl p-12">

        <!-- Header -->
        <div class="flex items-center mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" class="p-2 bg-blue-100 rounded-lg text-blue-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clipboard-pen-icon lucide-clipboard-pen">
                <circle cx="12" cy="12" r="10" />
                <circle cx="12" cy="12" r="4" />
                <path d="M12 12h.01" />
            </svg>
            <div class="ml-4">
                <h1 class="text-xl font-semibold">Premisas Ciudad Bienestar</h1>
                <p class="text-gray-500">Relación de la actividad con las premisas de la estrategia Ciudad Bienestar</p>
            </div>

        </div>


        <div class="grid grid-cols-1 md:grid-cols-2 col-span-2 gap-4">

            <!-- Participación significativa  -->
            <div class="col-span-3 md:col-span-1  text-md font-semibold my-6">

                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">1</span>
                    <label for="proactividad_id" class="font-semibold">Participación significativa</label>
                    <p class="text-red-600">*</p>

                </div>
                <?php
                echo $this->Form->input('premisauno', [
                    'type' => 'select',
                    'options' => $optiontime,
                    'label' => false,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700 mt-2',
                    'error' => false
                ]);
                if (!empty($this->Form->error('premisauno'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('premisauno') . '</div>';
                }
                ?>
            </div>

            <!-- Cuerpo territorio  -->
            <div class="col-span-3 md:col-span-1  text-md font-semibold my-6">

                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">2</span>
                    <label for="proactividad_id" class="font-semibold">Cuerpo territorio </label>
                    <p class="text-red-600">*</p>

                </div>
                <?php
                echo $this->Form->input('premisados', [
                    'type' => 'select',
                    'options' => $optiontime,
                    'label' => false,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700 mt-2',
                    'error' => false
                ]);
                if (!empty($this->Form->error('premisados'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('premisados') . '</div>';
                }
                ?>
            </div>

            <!-- Ciudadanía Activa -->
            <div class="col-span-3 md:col-span-1  text-md font-semibold my-6">

                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">3</span>
                    <label for="proactividad_id" class="font-semibold">Ciudadanía Activa</label>
                    <p class="text-red-600">*</p>

                </div>
                <?php
                echo $this->Form->input('premisatres', [
                    'type' => 'select',
                    'options' => $optiontime,
                    'label' => false,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700 mt-2',
                    'error' => false
                ]);
                if (!empty($this->Form->error('premisatres'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('premisatres') . '</div>';
                }
                ?>
            </div>

            <!-- contpremisa Ciudad Bienestar -->
            <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-start mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">4</span>
                    <label for="producto_id" class="font-semibold">Describa de qué forma la actividad contribuye con el o los objetivos de la estrategia CB segun la puntuacion asignada</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('contpremisa', [
                    'label' => '',
                    'data-maxlength' => 5000,
                    'class' => 'ckeditor border rounded-lg w-full p-2 focus:ring focus:ring-blue-200',
                    'error' => false // No mostrar error aquí
                ]);
                if (!empty($this->Form->error('contpremisa'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('contpremisa') . '</div>';
                }
                ?>
            </div>
        </div>
    </div>


</div>

<div class="max-w-6xl mx-auto p-18 mt-8">
    <div class="bg-white shadow-2xl rounded-xl p-12">

        <!-- Header -->
        <div class="flex items-center mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" class="p-2 bg-blue-100 rounded-lg text-blue-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clipboard-pen-icon lucide-clipboard-pen">
                <circle cx="12" cy="12" r="10" />
                <circle cx="12" cy="12" r="4" />
                <path d="M12 12h.01" />
            </svg>
            <div class="ml-4">
                <h1 class="text-xl font-semibold">Perspectivas Ciudad Bienestar</h1>
                <p class="text-gray-500">Relación de la actividad con las perspectivas de la estrategia Ciudad Bienestar</p>
            </div>

        </div>


        <div class="grid grid-cols-1 md:grid-cols-2 col-span-2 gap-4">

            <!-- Derechos -->
            <div class="col-span-3 md:col-span-1  text-md font-semibold my-6">

                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">1</span>
                    <label for="proactividad_id" class="font-semibold">Derechos</label>
                    <p class="text-red-600">*</p>

                </div>
                <?php
                echo $this->Form->input('perspectivados', [
                    'type' => 'select',
                    'options' => $optiontime,
                    'label' => false,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700 mt-2',
                    'error' => false
                ]);
                if (!empty($this->Form->error('perspectivados'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('perspectivados') . '</div>';
                }
                ?>
            </div>

            <!-- Determinación social  -->
            <div class="col-span-3 md:col-span-1  text-md font-semibold my-6">

                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">2</span>
                    <label for="proactividad_id" class="font-semibold">Determinación social</label>
                    <p class="text-red-600">*</p>

                </div>
                <?php
                echo $this->Form->input('perspectivauno', [
                    'type' => 'select',
                    'options' => $optiontime,
                    'label' => false,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700 mt-2',
                    'error' => false
                ]);
                if (!empty($this->Form->error('perspectivauno'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('perspectivauno') . '</div>';
                }
                ?>
            </div>

            <!-- pesrpectivas Activa -->
            <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-start mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">3</span>
                    <label for="producto_id" class="font-semibold">Describa de qué forma la actividad contribuye con las perspectivas de la estrategia CB, segun la puntuacion asignada</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('contperspectiva', [
                    'label' => '',
                    'data-maxlength' => 5000,
                    'class' => 'ckeditor border rounded-lg w-full p-2 focus:ring focus:ring-blue-200',
                    'error' => false // No mostrar error aquí
                ]);
                if (!empty($this->Form->error('contperspectiva'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('contperspectiva') . '</div>';
                }
                ?>
            </div>
        </div>
    </div>


</div>

<div class="max-w-6xl mx-auto p-18 mt-8">
    <div class="bg-white shadow-2xl rounded-xl p-12">

        <!-- Header -->
        <div class="flex items-center mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" class="p-2 bg-blue-100 rounded-lg text-blue-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clipboard-pen-icon lucide-clipboard-pen">
                <circle cx="12" cy="12" r="10" />
                <circle cx="12" cy="12" r="4" />
                <path d="M12 12h.01" />
            </svg>
            <div class="ml-4">
                <h1 class="text-xl font-semibold">Enfoque Ciudad Bienestar</h1>
                <p class="text-gray-500">Relación de la actividad con los enfoques de la estrategia Ciudad Bienestar</p>
            </div>

        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 col-span-2 gap-4">

            <!-- Territorial  -->
            <div class="col-span-3 md:col-span-1  text-md font-semibold my-6">

                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">1</span>
                    <label for="proactividad_id" class="font-semibold">Territorial</label>
                    <p class="text-red-600">*</p>

                </div>
                <?php
                echo $this->Form->input('enfoqueuno', [
                    'type' => 'select',
                    'options' => $optiontime,
                    'label' => false,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700 mt-2',
                    'error' => false
                ]);
                if (!empty($this->Form->error('enfoqueuno'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('enfoqueuno') . '</div>';
                }
                ?>
            </div>

            <!-- Población  -->
            <div class="col-span-3 md:col-span-1  text-md font-semibold my-6">

                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">2</span>
                    <label for="proactividad_id" class="font-semibold">Población</label>
                    <p class="text-red-600">*</p>

                </div>
                <?php
                echo $this->Form->input('enfoquedos', [
                    'type' => 'select',
                    'options' => $optiontime,
                    'label' => false,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700 mt-2',
                    'error' => false
                ]);
                if (!empty($this->Form->error('enfoquedos'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('enfoquedos') . '</div>';
                }
                ?>
            </div>

            <!-- Interculturalidad -->
            <div class="col-span-3 md:col-span-1  text-md font-semibold my-6">

                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">3</span>
                    <label for="proactividad_id" class="font-semibold">Intercultural</label>
                    <p class="text-red-600">*</p>

                </div>
                <?php
                echo $this->Form->input('enfoquetres', [
                    'type' => 'select',
                    'options' => $optiontime,
                    'label' => false,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700 mt-2',
                    'error' => false
                ]);
                if (!empty($this->Form->error('enfoquetres'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('enfoquetres') . '</div>';
                }
                ?>
            </div>

            <!-- Diferencial -->
            <div class="col-span-3 md:col-span-1  text-md font-semibold my-6">

                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">4</span>
                    <label for="proactividad_id" class="font-semibold">Diferencial</label>
                    <p class="text-red-600">*</p>

                </div>
                <?php
                echo $this->Form->input('enfoquatro', [
                    'type' => 'select',
                    'options' => $optiontime,
                    'label' => false,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700 mt-2',
                    'error' => false
                ]);
                if (!empty($this->Form->error('enfoquatro'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('enfoquatro') . '</div>';
                }
                ?>
            </div>

            <!-- enfoque Ciudad Bienestar -->
            <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-start mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">5</span>
                    <label for="producto_id" class="font-semibold">Describa de qué forma la actividad contribuye con el o los enfoques de la estrategia CB,segun la puntuacion asignada</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('contribucionenfoque', [
                    'label' => '',
                    'data-maxlength' => 6000,
                    'class' => 'ckeditor border rounded-lg w-full p-2 focus:ring focus:ring-blue-200',
                    'error' => false // No mostrar error aquí
                ]);
                if (!empty($this->Form->error('contribucionenfoque'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('contribucionenfoque') . '</div>';
                }
                ?>
            </div>
        </div>
    </div>


</div>

<div class="max-w-6xl mx-auto p-18 mt-8">
    <div class="bg-white shadow-2xl rounded-xl p-12">

        <!-- Header -->
        <div class="flex items-center mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" class="p-2 bg-blue-100 rounded-lg text-blue-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clipboard-pen-icon lucide-clipboard-pen">
                <circle cx="12" cy="12" r="10" />
                <circle cx="12" cy="12" r="4" />
                <path d="M12 12h.01" />
            </svg>
            <div class="ml-4">
                <h1 class="text-xl font-semibold">Conclusiones Finales</h1>
                <p class="text-gray-500">Detalle e ingrese sus conclusiones finales sobre la actividad.</p>
            </div>

        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 col-span-2 gap-4">
            <!-- contribucionppsc -->
            <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-start mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">1</span>
                    <label for="producto_id" class="font-semibold">Analice y explique de qué manera se aplicaron las líneas y sublíneas de la Política Publica en Salud Colectiva al proceso pedagógico</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('contribucionppsc', [
                    'label' => '',
                    'data-maxlength' => 5000,
                    'class' => 'ckeditor border rounded-lg w-full p-2 focus:ring focus:ring-blue-200',
                    'error' => false // No mostrar error aquí
                ]);
                if (!empty($this->Form->error('contribucionppsc'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('contribucionppsc') . '</div>';
                }
                ?>
            </div>

            <!-- Compromiso -->
            <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-start mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">2</span>
                    <label for="producto_id" class="font-semibold">Compromisos de la actividad</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('compromiso', [
                    'label' => '',
                    'data-maxlength' => 5000,
                    'class' => 'ckeditor border rounded-lg w-full p-2 focus:ring focus:ring-blue-200',
                    'error' => false // No mostrar error aquí
                ]);
                if (!empty($this->Form->error('compromiso'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('compromiso') . '</div>';
                }
                ?>
            </div>

            <!-- Aportes de la comunidad -->
            <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-start mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">3</span>
                    <label for="producto_id" class="font-semibold">Aportes de la comunidad</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('aportes', [
                    'label' => '',
                    'data-maxlength' => 5000,
                    'class' => 'ckeditor border rounded-lg w-full p-2 focus:ring focus:ring-blue-200',
                    'error' => false // No mostrar error aquí
                ]);
                if (!empty($this->Form->error('aportes'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('aportes') . '</div>';
                }
                ?>
            </div>

            <!-- Realice un breve relatoria del proceso realizado -->
            <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-start mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">4</span>
                    <label for="producto_id" class="font-semibold">Conclusiones</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('conclusiones', [
                    'label' => '',
                    'data-maxlength' => 5000,
                    'class' => 'ckeditor border rounded-lg w-full p-2 focus:ring focus:ring-blue-200',
                    'error' => false // No mostrar error aquí
                ]);
                if (!empty($this->Form->error('conclusiones'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('conclusiones') . '</div>';
                }
                ?>
            </div>

            <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-start mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">5</span>
                    <label for="producto_id" class="font-semibold">Realice un breve relatoria del proceso realizado</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('relatoria', [
                    'label' => '',
                    'data-maxlength' => 30000,
                    'class' => 'ckeditor border rounded-lg w-full p-2 focus:ring focus:ring-blue-200',
                    'error' => false // No mostrar error aquí
                ]);
                if (!empty($this->Form->error('relatoria'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('relatoria') . '</div>';
                }
                ?>
            </div>

            <!-- Responsable -->
            <div class="col-span-2  text-md font-semibold my-6 mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">6</span>
                    <label for="objactividad" class="font-semibold">Responsable: <?php
                                                                                    echo $this->Form->input('responsable_id', ['type' => 'hidden']);
                                                                                    echo isset($responsable['Responsable']['nombres']) ? h($responsable['Responsable']['nombres']) : '';
                                                                                    ?> </label>
                    <p class="text-red-600">*</p>

                </div>


            </div>
        </div>

        <div class="flex gap-4">
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
                    Guardar Cambios
                </button>
                <?php echo $this->Form->end(); ?>
            </div>

            <!-- Botón -->
            <div class="pt-2">
                <button type="button" class="bg-green-600 text-white px-6 py-2 rounded-md hover:bg-green-700 transition font-medium flex items-center justify-center gap-2" onclick="preventBackNavigation()">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-save-icon lucide-save">
                            <path d="M21 17v2a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-2" />
                            <path d="M21 7V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2" />
                            <circle cx="12" cy="12" r="1" />
                            <path d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0" />
                        </svg>

                    </span>
                    Ver Sistematización
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
            renderChoiceLimit: -1, // Sin límite de renderizado
            searchResultLimit: 20, // Puedes aumentar este valor si tienes muchos resultados
        });

        const choices_tipopoblacion = new Choices("#tipopoblacion", {
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
        if (!confirm('¿Está seguro que desea salir de la página? Se pueden perder los cambios no guardados.')) {
            history.pushState(null, null, location.href);
        }
    });
    function preventBackNavigation() {
        if (confirm('¿Está seguro que desea salir de la página? Se pueden perder los cambios no guardados.')) {
            window.location.href = '<?php echo $this->Html->url(['action' => 'view', $idredirect]); ?>';
        }
    }

    // Prevenir retroceso con la flecha del navegador (mejor experiencia)
    history.pushState(null, null, location.href);
</script>