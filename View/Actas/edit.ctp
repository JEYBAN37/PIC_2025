<?php $this->layout = 'default' ?>
<?php echo $this->Html->script('ckeditor/ckeditor'); ?>


<div class="max-w-5xl mx-auto text-center mb-8">
    <h1 class="text-5xl font-bold mb-4 text-blue-600">
        Editar Acta
    </h1>
    <p class="text-gray-500 mb-4 text-lg">
        Registre los datos del acta.
    </p>
</div>

<?php
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->create('Acta',  [
    'type' => 'file',
    'novalidate' => 'novalidate',
    'class' => 'space-y-6',
]);
// se utiliza para llamar el id responsable donde sea necesario
$nombreUsuario = isset($_SESSION['Auth']['User']['id_responsable']) ? $_SESSION['Auth']['User']['id_responsable'] : '';

?>

<div class="max-w-6xl mx-auto p-18">
    <div class="bg-white shadow-2xl rounded-xl p-12">
        <!-- Header -->
        <div class="flex items-center mb-4">
            <img src="<?php echo $this->webroot; ?>/img/update/docHover.png" alt="p-8 bg-blue-600" class="p-2 bg-blue-100 rounded-lg">
            <div class="ml-4">
                <h1 class="text-xl font-semibold">Información General</h1>
                <p class="text-gray-500">Datos generales del acta.</p>
            </div>

        </div>

        <div class="col-span-2 text-md font-semibold mt-4 mb-6">
            <div class="flex items-center mb-4">
                <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">Creador</span>
            </div>
            <?php
            echo $this->Form->input('responsable_id', [
                'label' => false,
                'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none  focus:ring-1 focus:ring-blue-500 focus:border-blue-500 borde azul  mt-2 font-semibold text-gray-700  text-sm focus:text-gray-900',
                'error' => false
            ]);

            if (!empty($this->Form->error('responsable_id'))) {
                echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('responsable_id') . '</div>';
            }
            ?>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2">
            <!-- Fecha de sesión realizada -->
            <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center ">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">1</span>
                    <label for="producto_id" class="font-semibold">Registro de fecha</label>
                    <p class="text-red-600">*</p>
                </div>
                <div class="col-span-2 text-md font-semibold my-6">
                    <div class="flex flex-col w-full">
                        <?php echo $this->Form->label('datetime_range', 'Seleccione Rango de Fecha y Hora', [
                            'class' => 'text-gray-700 font-semibold text-sm mb-2'
                        ]); ?>
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

            <!-- Temática tratada -->
            <div class="col-span-2 text-md font-semibold mt-4 mb-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">2</span>
                    <label for="objactividad" class="font-semibold">Temática tratada</label>
                    <p class="text-red-600">*</p>
                </div>

                <p class="help-block text-gray-500 text-xs mb-2">Ingrese aquí exclusivamente el título de la temática tratada. No incluya poblaciones, lugares de realización de la actividad ni ningún otro dato.</p>

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

            <!-- Ubicación (Barrio) -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mr-4">
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

            <!-- Producto/tarea relacionada -->
            <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">4</span>
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
                <h1 class="text-xl font-semibold">Detalles Específicos</h1>
                <p class="text-gray-500">Datos específicos del acta.</p>
            </div>

        </div>
        <div class="grid grid-cols-1 md:grid-cols-2">

            <!-- Objetivo General -->
            <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">1</span>
                    <label for="objactividad" class="font-semibold">Objetivo General del proceso</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('objactividad', [
                    'label' => '',
                    'data-maxlength' => 500, // <-- aquí defines el límite de caracteres
                    'class' => 'ckeditor border rounded-lg w-full p-2 focus:ring focus:ring-blue-200 mt-2',
                    'error' => false // No mostrar error aquí
                ]);
                if (!empty($this->Form->error('objactividad'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('objactividad') . '</div>';
                }
                ?>
            </div>

            <!-- grupo u Organización -->
            <div class="col-span-2 text-md font-semibold mt-4 mb-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">2</span>
                    <label for="objactividad" class="font-semibold">Grupo u Organización con el que se realizó la actividad</label>
                    <p class="text-red-600">*</p>
                </div>

                <p class="help-block text-gray-500 text-xs mb-2">Ingrese aquí el nombre de la Organización o grupo con el cual realizó la actividad formativa.</p>

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

            <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">3</span>
                    <label for="ordendia" class="font-semibold">Orden del día</label>
                    <p class="text-red-600">*</p>
                </div>

                <?php
                echo $this->Form->input('ordendia', [
                    'label' => '',
                    'class' => 'ckeditor border rounded-lg w-full p-2 focus:ring focus:ring-blue-200 mt-2',
                    'error' => false, // No mostrar error aquí
                    'data-maxlength' => 600, // <-- aquí defines el límite de caracteres

                ]);
                if (!empty($this->Form->error('ordendia'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('ordendia') . '</div>';
                }
                ?>
            </div>

            <div class="col-span-2 text-md font-semibold my-6">


                <div class="mt-4 w-full flex">
                    <p class="font-medium text-sm text-gray-600 pr-4">¿Esta acta es resultado a compromisos de encuentros previos programados?</p>
                    <label class=" relative inline-flex  cursor-pointer">
                        <input type="checkbox" name="status" id="status" value="si" class="sr-only peer" onchange="mostrar(this.checked)">
                        <div class="w-11 h-6 bg-gray-300 peer-focus:outline-none peer-focus:ring-2 peer-focus:ring-blue-400 rounded-lg   peer peer-checked:bg-green-600 transition-colors"></div>
                        <div class="absolute left-0.5 top-0.5 w-5 h-5 bg-white rounded-lg transition-transform peer-checked:translate-x-5"></div>
                    </label>
                </div>




                <div id="si" class="" style="display: none;">

                    <div class="flex items-center mb-4 mt-4">
                        <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">?</span>
                        <label for="desarrollo" class="font-semibold">Verificación de compromisos previos (si hubo una reunion previa relacionada a esta)</label>
                    </div>

                    <?php
                    echo $this->Form->input('compromisosprevios', [
                        'label' => '',
                        'class' => 'ckeditor border rounded-lg w-full p-2 focus:ring focus:ring-blue-200 mt-2',
                        'error' => false, // No mostrar error aquí
                        'data-maxlength' => 500, // <-- aquí defines el límite de caracteres

                    ]);
                    if (!empty($this->Form->error('compromisosprevios'))) {
                        echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('compromisosprevios') . '</div>';
                    }
                    ?>
                </div>
            </div>




            <!-- Desarrollo -->
            <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">4</span>
                    <label for="desarrollo" class="font-semibold">Desarrollo</label>
                    <p class="text-red-600">*</p>
                </div>

                <p class="help-block text-gray-500 text-xs mb-2">Registre los momentos más importantes desarrollados durante la actividad (máximo 4000 caracteres).</p>

                <?php
                echo $this->Form->input('desarrollo', [
                    'label' => '',
                    'class' => 'ckeditor border rounded-lg w-full p-2 focus:ring focus:ring-blue-200 mt-2',
                    'error' => false, // No mostrar error aquí
                    'data-maxlength' => 4000, // <-- aquí defines el límite de caracteres

                ]);
                if (!empty($this->Form->error('desarrollo'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('desarrollo') . '</div>';
                }
                ?>
            </div>

            <!-- Compromisos -->
            <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">5</span>
                    <label for="compromiso" class="font-semibold">Compromisos y tareas</label>
                    <p class="text-red-600">*</p>
                </div>

                <p class="help-block text-gray-500 text-xs mb-2">Registre los compromisos y tareas de la reunión</p>

                <?php
                echo $this->Form->input('compromiso', [
                    'label' => '',
                    'class' => 'ckeditor border rounded-lg w-full p-2 focus:ring focus:ring-blue-200 mt-2',
                    'data-maxlength' => 2000, // <-- aquí defines el límite de caracteres
                    'error' => false // No mostrar error aquí
                ]);
                if (!empty($this->Form->error('compromiso'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('compromiso') . '</div>';
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
            <img src="<?php echo $this->webroot; ?>/img/update/historicoHover.png" alt="p-8 bg-blue-600" class="p-2 bg-blue-100 rounded-lg w-[60px]">
            <div class="ml-4">
                <h1 class="text-xl font-semibold">Cierre de Acta</h1>
                <p class="text-gray-500">Datos finales del acta.</p>
            </div>

        </div>

        <div class="grid grid-cols-1 md:grid-cols-2">
            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mr-4">

                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">1</span>
                    <label for="proactividad_id" class="font-semibold">Alcance de la reunión</label>
                    <p class="text-red-600">*</p>
                </div>

                <?php
                $alcancereunion = array(
                    '' => 'Elegir',
                    'planeacion operativa administrativa' => 'Planenación operativa/administrativa',
                    'ejcucion operativa administrativa' => 'Ejecución operativa/administrativa',
                    'planeacion pedagogica' => 'Planeación pedagógica',
                    'articulacion interinstitucional' => 'Apoyo interinstitucional',
                    'acompañamiento a organizaciones' => 'Acompañamiento a organizaciones',
                    'Ejecucion de eventos o actividades' => 'Ejecución de eventos o actividades',
                    'participacion escenarios externos' => 'participación escenarios externos'
                );

                echo $this->Form->input('alcancereunion', [
                    'type' => 'select',
                    'options' => $alcancereunion,
                    'label' => false,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700',
                    'error' => false
                ]);
                if (!empty($this->Form->error('alcancereunion'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('alcancereunion') . '</div>';
                }
                ?>
            </div>

            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">2</span>
                    <label for="ordendia" class="font-semibold">Proxima convocatoria</label>
                    <p class="text-red-600">*</p>
                </div>

                <?php
                echo $this->Form->input('convocatoria', [
                    'label' => '',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none  focus:ring-1 focus:ring-blue-500 focus:border-blue-500 borde azul font-semibold text-gray-700  text-sm focus:text-gray-900',
                    'error' => false, // No mostrar error aquí
                    'data-maxlength' => 600, // <-- aquí defines el límite de caracteres

                ]);
                if (!empty($this->Form->error('convocatoria'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('convocatoria') . '</div>';
                }
                ?>
                <p class="help-block text-gray-500 text-xs mt-2">Favor registrar fecha y lugar de la proxima convocatoria</p>

            </div>
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

                    echo $this->Form->input('dir', array('type' => 'hidden', 'class' => 'form-control'));
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

            <div class="relative w-full mt-4">
                <?php if (!empty($this->request->data['Acta']['anexo'])): ?>
                    <div class="block w-full text-sm text-gray-700 border border-gray-300 rounded-lg cursor-pointer bg-white focus:outline-none focus:ring-2 focus:ring-blue-400 p-3 file:mr-4 file:py-6 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                        Archivo actual:
                        <a href="<?php echo $this->webroot . 'files/acta/anexo/' . $this->request->data['Acta']['dir'] . '/' . $this->request->data['Acta']['anexo']; ?>" target="_blank" class="text-blue-600 underline ml-2">
                            <?php echo $this->request->data['Acta']['anexo']; ?>
                        </a>
                    </div>
                <?php endif; ?>
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

    document.addEventListener("DOMContentLoaded", () => {

        const options = {
            searchEnabled: true,
            searchChoices: true,
            removeItemButton: false,
            itemSelectText: '',
            shouldSort: false,
            searchPlaceholderValue: "Escriba para filtrar<?php echo $this->webroot; ?>.",
        };

        const choices_ubicacion = new Choices("#ubicacion_id", options);
        const choices_producto = new Choices("#producto_id", options);


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
                $("form").append('<?php echo $this->Form->hidden('hora_inicio', ['id' => 'hora_inicio']); ?>');
                $("form").append('<?php echo $this->Form->hidden('hora_fin', ['id' => 'hora_fin']); ?>');
            }
            $("#fecha").val(fecha);
            $("#hora_inicio").val(hora_inicio);
            $("#hora_fin").val(hora_fin);
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
</script>