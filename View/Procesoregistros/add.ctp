<?php $this->layout = 'default' ?>
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
?>


<div class="max-w-5xl mx-auto text-center mb-8">
    <h1 class="text-5xl font-bold mb-4 text-blue-600">
        Asociar sesión a proceso formativo - educativo
    </h1>
    <p class="text-gray-500 mb-4 text-lg">
        Registre los datos de la sesión que desea asociar al proceso formativo o educativo.
    </p>
</div>

<?php
echo $this->Form->create('Procesoregistro', [
    'type' => 'file',
    'novalidate' => 'novalidate',
    'class' => 'space-y-6',
]);
?>
<div class="max-w-6xl mx-auto p-18">
    <div class="bg-white shadow-2xl rounded-xl p-12">
        <!-- Header -->
        <div class="flex items-center mb-4">
            <img src="../img/update/docHover.png" alt="p-8 bg-blue-600" class="p-2 bg-blue-100 rounded-lg">
            <div class="ml-4">
                <h1 class="text-xl font-semibold">Información de la Sesión</h1>
                <p class="text-gray-500">Complete los datos básicos de la sesión.</p>
            </div>

        </div>
        <div class="grid grid-cols-1 md:grid-cols-2">


            <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">1</span>
                    <label for="proactividad_id" class="font-semibold">Sistematizacion relacionada</label>
                    <p class="text-red-600">*</p>

                </div>
                <?php

                echo $this->Form->input(
                    'proactividad_id',
                    [
                        'type' => 'select',
                        'id' => 'proactividad_id',
                        'class' => 'w-full',
                        'label' => '',
                        'empty' => 'Seleccione la sistematización relacionada',
                        'error' => false // No mostrar error aquí
                    ]
                );
                if (!empty($this->Form->error('proactividad_id'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('proactividad_id') . '</div>';
                }
                ?>
            </div>

            <!-- Fecha de sesión realizada -->
            <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center ">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">2</span>
                    <label for="producto_id" class="font-semibold">Registro de fecha de sesión realizada</label>
                    <p class="text-red-600">*</p>

                </div>
                <div class="col-span-2 text-md font-semibold my-6">
                    <div class="flex flex-col w-full">
                        <?php echo $this->Form->label('datetime_range', 'Seleccione Rango de Fecha y Hora', [
                            'class' => 'text-gray-700 font-semibold text-sm mb-2'
                        ]); ?>
                        <input type="text" name="datetime_range" id="datetime_range"
                            class="border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400 w-full"
                            placeholder="Selecciona rango de fecha y hora" />
                        <span class="text-sm text-red-600 mt-1">
                            <?= $this->Form->error('datetime_range') ?>
                        </span>
                    </div>

                </div>
            </div>


            <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">3</span>
                    <label for="plsesion_id" class="font-semibold">Plan de sesión</label>
                    <p class="text-red-600">*</p>
                </div>

                <?php
                echo $this->Form->input('plsesion_id', [
                    'type' => 'select',
                    'id' => 'plsesion_id',
                    'class' => 'w-full',
                    'label' => false,
                    'empty' => 'Seleccione el plan de sesión',
                ]);

                if (!empty($this->Form->error('plsesion_id'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('plsesion_id') . '</div>';
                }
                ?>
            </div>


            <!-- Temática tratada -->
            <div class="col-span-2 text-md font-semibold mt-4 mb-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">4</span>
                    <label for="tema" class="font-semibold">Temática tratada</label>
                    <p class="text-red-600">*</p>
                </div>

                <p class="help-block text-gray-500 text-xs mb-2">
                    Ingrese aquí exclusivamente el título de la temática tratada.
                </p>

                <!-- Input oculto: guarda el ID -->
                <?php echo $this->Form->hidden('tema', ['id' => 'tema_hidden']); ?>

                <!-- Input visible: solo muestra el nombre -->
                <input type="text" id="tema_visible" class="border border-gray-300 rounded-lg w-full p-2 focus:outline-none
                  focus:ring-1 focus:ring-blue-500 focus:border-blue-500 mt-2 font-semibold
                  text-gray-700 text-sm focus:text-gray-900" placeholder="Seleccione un plan de sesión" readonly />
            </div>


            <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">5</span>
                    <label for="tipopoblacion" class="font-semibold">Tipo de población participante</label>
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
                    'tipopoblacion',
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
                if (!empty($this->Form->error('tipopoblacion'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('tipopoblacion') . '</div>';
                }
                ?>
            </div>

            <!-- Entorno -->
            <div class="col-span-2 md:col-span-1  text-md font-semibold my-6 mr-4">

                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">6</span>
                    <label for="proactividad_id" class="font-semibold">Entorno</label>
                    <p class="text-red-600">*</p>

                </div>
                <?php
                $optiontime = [
                    '' => 'Elegir',
                    'No aplica' => 'No aplica',
                    'Comunitario' => 'Comunitario',
                    'Hogar' => 'Hogar',
                    'Institucional' => 'Institucional',
                    'Educativo' => 'Educativo',
                    'Laboral informal' => 'Laboral informal'
                ];
                echo $this->Form->input('entorno', [
                    'type' => 'select',
                    'options' => $optiontime,
                    'label' => false,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700',
                    'error' => false
                ]);
                if (!empty($this->Form->error('entorno'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('entorno') . '</div>';
                }
                ?>
            </div>

            <!-- Curso de vida -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6">

                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">7</span>
                    <label for="proactividad_id" class="font-semibold">Curso de Vida</label>
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

            <!-- Acción informativa -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">8</span>
                    <label for="proactividad_id" class="font-semibold">Acción informativa</label>
                    <p class="text-red-600">*</p>

                </div>
                <?php
                $optiontime = [
                    '' => 'Elegir',
                    'No aplica' => 'No aplica',
                    'Hogar' => 'Pólvora',
                    'PAI' => 'PAI',
                    'Tuberculosis' => 'Tuberculosis',
                    'Hasen Lepra' => 'Hasen/Lepra',
                    'Ley 1335' => 'Ley 1335'
                ];
                echo $this->Form->input('accioninformativa', [
                    'type' => 'select',
                    'options' => $optiontime,
                    'label' => false,
                    'error' => false,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700',
                ]);
                if (!empty($this->Form->error('accioninformativa'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('accioninformativa') . '</div>';
                }
                ?>
            </div>

            <!-- Ubicación (Barrio) -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">9</span>
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
            <div id="divActualizarBarrio" class="col-span-2 md:col-span-1 text-md font-semibold my-6 hidden mr-4">
                <p class="text-gray-500 text-xs mb-1">Agregue el nombre del barrio o vereda</p>
                <?php echo $this->Form->label('barrio', 'Barrio/Vereda', [
                    'class' => 'text-gray-700 font-semibold text-sm mb-2'
                ]); ?>
                <?php
                echo $this->Form->input('barrio', [
                    'label' => false,
                    'error' => false,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700',
                ]);
                if (!empty($this->Form->error('barrio'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('barrio') . '</div>';
                }
                ?>
            </div>

            <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">10</span>
                    <label for="limitantes" class="font-semibold">limitantes en el desarrollo del encuentro</label>
                    <p class="text-red-600">*</p>

                </div>
                <?php
                $options = [
                    '0. No aplica' => '0. No aplica',
                    '1. Logstico' => '1 - Logístico(Materiales, Refrigerios, espacios)',
                    '2. Administrativo' => '2 - Administrativo(Contractuales, no acuerdo institucional)',
                    '3. Técnico' => '3 - Tecnicos(Limitantes conceptuales, metodologicos)',
                    '4. Comunitario' => '4 - Comunitario(Renuencia, inasistencia de participantes, solicitud de garantias adicionales )',
                    
                ];

                echo $this->Form->input(
                    'limitantes',
                    [
                        'type' => 'select',
                        'label' => false,
                        'multiple' => true,
                        'id' => 'limitantes',
                        'class' => 'w-full',
                        'empty' => false,
                        'options' => $options,
                        'error' => false // No mostrar error aquí
                    ]
                );
                if (!empty($this->Form->error('limitantes'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('limitantes') . '</div>';
                }
                ?>
            </div>



            <!-- Acompañamiento -->
            <div class="flex justify-between col-span-2 text-md font-semibold m-6">
                <div class="flex items-center w-64">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">11</span>
                    <label for="acompanamiento" class="font-semibold">Acompañamiento Referente SMS</label>
                    <p class="text-red-600">*</p>
                </div>

                <div class="flex space-x-4 items-center">
                    <!-- Botón NO -->
                    <div>
                        <input type="radio" name="data[Procesoregistro][acompanamiento]" id="acompanamiento-no"
                            value="0" class="hidden peer" data-target="acompanamiento" data-show="false" checked />
                        <!-- 👈 Por defecto NO -->
                        <label for="acompanamiento-no" class="px-12 py-2 rounded-lg border cursor-pointer hover:text-white hover:bg-blue-600
                       peer-checked:bg-blue-600 peer-checked:text-white">
                            -
                        </label>
                    </div>

                    <!-- Botón SÍ -->
                    <div>
                        <input type="radio" name="data[Procesoregistro][acompanamiento]" id="acompanamiento-si"
                            value="1" data-target="acompanamiento" data-show="true"
                            class="hidden peer cursor-pointer" />
                        <label for="acompanamiento-si" class="px-12 py-2 rounded-lg border hover:bg-blue-600 cursor-pointer hover:text-white
                       peer-checked:bg-blue-600 peer-checked:text-white">
                            X
                        </label>
                    </div>
                </div>

                <div class="col-span-2 text-md font-semibold my-6">
                    <div class="flex items-center mb-4">
                        <?php

                        $observacionseguimiento = [
                                '0 Elegir' => 'Elegir',
                                '1 Retroalimentación' => 'Brindo Retroalimentación',
                                '2 No Retroalimentación ' => 'Sin Retroalimentación',
                                '3 Apoyo Conceptual-normativo' => 'Apoyo Conceptual, normativo',
                                                        
                            ];

                        echo $this->Form->input('observacionseguimiento', [
                            'id' => 'acompanamiento',
                            'style' => 'display: none;',
                            'type' => 'select',
                            'options' => $observacionseguimiento,
                            'label' => false,
                            'error' => false,
                            'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700',
                        ]);
                        ?>

                    </div>

                </div>
            </div>



            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">12</span>
                    <label for="numeroparticipantes" class="font-semibold">Total Número de participantes</label>
                    <p class="text-red-600">*</p>

                </div>

                <?php
                        echo $this->Form->input('numeroparticipantes', [
                            'label' => false,
                            'type' => 'number',
                            'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none  focus:ring-1 focus:ring-blue-500 focus:border-blue-500 borde azul  mt-2 font-semibold text-gray-700  text-sm focus:text-gray-900',
                            'error' => false,
                            'min' => 1,
                            'max' => 200
                        ]);

                        if (!empty($this->Form->error('numeroparticipantes'))) {
                            echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('totalsesiones') . '</div>';
                        }
                        ?>

                <p class="help-block text-gray-500 text-xs mb-2">Ingrese el número participantes comunitarios de cuerdo
                    a lista de asistencia</p>


            </div>


        </div>
    </div>
    <div class="bg-white shadow-2xl rounded-xl p-16 mt-4">
        <!-- Header -->
        <div class="flex items-center mb-4">
            <img src="../img/update/historicoHover.png" alt="p-8 bg-blue-600"
                class="p-2 bg-blue-100 rounded-lg w-[60px]">
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

                        echo $this->Form->input('sisproceso_dir', array('type' => 'hidden'));
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
                <button type="submit" name="btn" value="Guardar y asociar otra sesion"
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
                    Guardar y asociar otra sesión
                </button>
                <button type="submit" name="btn" value="Finalizar"
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
                    Finalizar
                </button>
            </div>
        </div>
    </div>
</div>








<?php
$this->Html->css([
    'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css',
    'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'
], ['block' => 'css']);
$this->Html->script([
    'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js',
    'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js'
], ['block' => 'script']);
?>

<script type="text/javascript">
$(document).ready(function() {
    $('.select-search').select2();
    $('.select-search-multi').select2({
        closeOnSelect: false
    });
    agregarOpcionSeleccion();

    /*
    $('#poblaciones').val('');
     var data = $('#poblaciones_aux').select2('data').map(function(elem){ 
            return elem.text 
       });
     $('#poblaciones').val(data);
     $('#poblaciones_aux').on('select2:unselecting', function (e) {
        $('#poblaciones').val('');
    });
    */

});


function validarTamanioSoporte() {
    var auxFile = document.getElementById('ProcesoregistroAnexo');
    var sizeF = auxFile.files[0].size;

    if (sizeF > 5000000) {
        alert('El archivo debe ser menor a 5 Mb');
        auxFile.value = '';
    }
}

function agregarOpcionSeleccion() {
    $("#ProcesoregistroUbicacionId").prepend("<option value='' selected='selected'>Seleccione</option>");
    $("#ProcesoregistroProactividadId").prepend("<option value='' selected='selected'>Seleccione</option>");
    $("#ProcesoregistroPlsesionId").prepend("<option value='' selected='selected'>Seleccione</option>");
    // $("#status").prepend("<option value='' selected='selected'>Seleccione</option>");
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

<script>
document.addEventListener("DOMContentLoaded", () => {
    const choices = new Choices("#proactividad_id", {
        searchEnabled: true,
        searchChoices: true,
        removeItemButton: false,
        itemSelectText: '',
        shouldSort: false,
        searchPlaceholderValue: "Escriba para filtrar...",
    });

    const choices_plsesion = new Choices("#plsesion_id", {
        searchEnabled: true, // 🔎 activa búsqueda
        searchChoices: true, // 🔎 filtra opciones
        removeItemButton: false, // ❌ no mostrar botón de eliminar
        itemSelectText: '', // 🚫 quita el "Press to select"
        shouldSort: false, // 📌 mantiene el orden original
        searchPlaceholderValue: "Escriba para filtrar...", // placeholder búsqueda
    });

    const choices_ubicacion = new Choices("#ubicacion_id", {
        searchEnabled: true, // 🔎 activa búsqueda
        searchChoices: true, // 🔎 filtra opciones
        removeItemButton: false, // ❌ no mostrar botón de eliminar
        itemSelectText: '', // 🚫 quita el "Press to select"
        shouldSort: false, // 📌 mantiene el orden original
        searchPlaceholderValue: "Escriba para filtrar...", // placeholder búsqueda
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

    const choices_limitantes = new Choices("#limitantes", {
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

    const select = document.getElementById("plsesion_id");
    const temaHidden = document.getElementById("tema_hidden");
    const temaVisible = document.getElementById("tema_visible");

    select.addEventListener("change", function() {
        const valor = this.value;
        if (!valor) {
            temaHidden.value = "";
            temaVisible.value = "";
            return;
        }

        fetch("<?php echo $this->Html->url(['controller' => 'Procesoregistros', 'action' => 'getPlsesion']); ?>/" +
                valor)
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    temaHidden.value = data.data.nombre; // guardar el ID
                    temaVisible.value = data.data.nombre; // mostrar el nombre
                } else {
                    temaHidden.value = "";
                    temaVisible.value = "No encontrado";
                }
            })
            .catch(err => {
                console.error(err);
                temaHidden.value = "";
                temaVisible.value = "Error en la consulta";
            });
    });

});

$(function() {
    $('#datetime_range').daterangepicker({
        timePicker: true,
        timePicker24Hour: true,
        timePickerIncrement: 1,
        autoApply: true,
        locale: {
            format: 'YYYY-MM-DD HH:mm',
            separator: ' a ',
            applyLabel: "Aplicar",
            cancelLabel: "Cancelar",
            fromLabel: "Desde",
            toLabel: "Hasta",
            daysOfWeek: ["Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa"],
            monthNames: [
                "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio",
                "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"
            ],
            firstDay: 1
        }
    }, function(start, end) {
        // 👇 Extraer fecha y horas
        let fecha = start.format('YYYY-MM-DD');
        let hora_inicio = start.format('HH:mm');
        let hora_fin = end.format('HH:mm');

        console.log("Fecha:", fecha);
        console.log("Hora inicio:", hora_inicio);
        console.log("Hora fin:", hora_fin);

        // Si necesitas guardarlos en campos ocultos para enviarlos al backend:
        if (!$("#fecha").length) {
            $("form").append('<?php echo $this->Form->hidden('fecha', ['id' => 'fecha']); ?>');
            $("form").append(
                '<?php echo $this->Form->hidden('hora_inicio', ['id' => 'hora_inicio']); ?>');
            $("form").append('<?php echo $this->Form->hidden('hora_fin', ['id' => 'hora_fin']); ?>');
        }
        $("#fecha").val(fecha);
        $("#hora_inicio").val(hora_inicio);
        $("#hora_fin").val(hora_fin);
    });
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


});



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