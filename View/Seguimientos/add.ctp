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
echo $this->Form->input('responsable_id', array('value' => $nombreUsuario, 'type' => 'hidden'));

$idAux = $_GET['reporte'];
echo $this->Form->input('producto_id', array('value' => '' . $idAux, 'type' => 'hidden'));
?>





<div class="max-w-6xl mx-auto p-18">
    <div class="bg-white shadow-2xl rounded-xl p-12">
        <!-- Header -->
        <div class="flex items-center mb-4">
            <img src="<?php echo $this->webroot; ?>/img/update/docHover.png" alt="p-8 bg-blue-600" class="p-2 bg-blue-100 rounded-lg">
            <div class="ml-4">
                <h1 class="text-xl font-semibold">Reporte de avance</h1>
                <p class="text-gray-500">Diligencie la información solicitada segun corresponda</p>
            </div>

        </div>

        <?php
        //echo $this->Form->input('id', ['type' => 'hidden']); ?>

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
                      
                        <input
                            type="month"  
                            name="data[Seguimiento][fecha]"   
                            id = "fecha"                                                                          
                            class="border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400 w-full"
                            placeholder="Selecciona mes reportado" />
                        <span class="text-sm text-red-600 mt-1">
                            <?= $this->Form->error('fecha') ?>
                        </span>
                    </div>

                </div>
            </div>

             <!-- Valor asignado de la actividad -->
            <div class="col-span-2 text-md font-semibold mt-4 mb-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-blue-200 text-md font-semibold">2</span>
                    <label for="valorprogramado" class="font-semibold">Porcentaje porgramado para el mes</label>
                    <p class="text-red-600">*</p>

                </div>

                <p class="help-block text-gray-500 text-xs mb-2">Porcentaje asisgnado a la actividad para el mes reportado según anexo técnico.</p>

                <?php
                echo $this->Form->input('valorprogramado', [
                    'label' => false,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none  focus:ring-1 focus:ring-blue-500 focus:border-blue-500 borde azul  mt-2 font-semibold text-gray-700  text-sm focus:text-gray-900',
                    'error' => false,
                    'type' => 'number',
                    'min' => 1,
                    'maxLeght' => 2
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
        <!-- Header -->
        <div class="flex items-center mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" class="p-2 bg-blue-100 rounded-lg text-blue-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clipboard-pen-icon lucide-clipboard-pen">
                <circle cx="12" cy="12" r="10" />
                <circle cx="12" cy="12" r="4" />
                <path d="M12 12h.01" />
            </svg>
            <div class="ml-4">
                <h1 class="text-xl font-semibold">Observación de ejecución</h1>
                <p class="text-gray-500">Registre los aspectos releventes sobre el desarrollo de la actividad</p>
            </div>

        </div>

        <div class="grid grid-cols-1 md:grid-cols-2">

            <!-- Observación Operador -->
            <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-blue-200 text-md font-semibold">4</span>
                    <label for="observacionoperador" class="font-semibold">Observación Equipo PIC</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('observacionoperador', [
                    'label' => '',                   
                    'class' => 'ckeditor border rounded-lg w-full p-2 focus:ring focus:ring-blue-200 mt-2',
                     'data-maxlength' => 500,
                    'error' => false // No mostrar error aquí
                ]);
                if (!empty($this->Form->error('observacionoperador'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('observacionoperador') . '</div>';
                }
                ?>
            </div>

             <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-blue-200 text-md font-semibold">5</span>
                    <label for="limitantes" class="font-semibold">limitantes en el desarrollo de la actividad</label>
                    <p class="text-red-600">*</p>

                </div>
                <?php
                $options = [
                    '0. No' => 'No',
                    '1. Logstico' => 'Logístico(Materiales, Refrigerios, espacios)',
                    '2. Administrativo' => 'Administrativo(Contractuales, no acuerdo institucional)',
                    '3. Técnico' => 'Tecnicos(Limitantes conceptuales, metodologicos)',
                    '4. Comunitario' => 'Comunitario(Renuencia, inasistencia de participantes, solicitud de garantias adicionales )',
                    
                ];

                echo $this->Form->input(
                    'limitantes',
                    [
                        'type' => 'select',
                        'label' => false,
                        'multiple' => false,
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

            <div class="col-span-2 text-md font-semibold mt-4 mb-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-blue-200 text-md font-semibold">6</span>
                    <label for="enlace1" class="font-semibold">Enlace sopores adicionales</label>
                    <p class="text-red-600">*</p>

                </div>

                <p class="help-block text-gray-500 text-xs mb-2">Agregar enlace Drive para soportes en construccion o soportes adicionales</p>

                <?php
                echo $this->Form->input('enlace1', [
                    'label' => false,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none  focus:ring-1 focus:ring-blue-500 focus:border-blue-500 borde azul  mt-2 font-semibold text-gray-700  text-sm focus:text-gray-900',
                    'error' => false,
                    'min' => 1,
                    'max' => 15
                ]);

                if (!empty($this->Form->error('enlace1'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('enlace1') . '</div>';
                }
                ?>
            </div>

            <div class="col-span-2 text-md font-semibold mt-4 mb-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-blue-200 text-md font-semibold">7</span>
                    <label for="enlace2" class="font-semibold">Enlace sopores adicionales</label>
                    <p class="text-red-600">*</p>

                </div>

                <p class="help-block text-gray-500 text-xs mb-2">Agregar enlace Drive para soportes en construccion o soportes adicionales</p>

                <?php
                echo $this->Form->input('enlace2', [
                    'label' => false,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none  focus:ring-1 focus:ring-blue-500 focus:border-blue-500 borde azul  mt-2 font-semibold text-gray-700  text-sm focus:text-gray-900',
                    'error' => false,
                    'min' => 1,
                    'max' => 15
                ]);

                if (!empty($this->Form->error('enlace1'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('enlace2') . '</div>';
                }
                ?>
            </div>

        <!--div class="col-span-2 text-md font-semibold my-6">
            <div class="flex items-center mb-4">
                <span class="mr-2 px-2 rounded-lg bg-blue-200 text-md font-semibold">11</span>
                <label for="soportes" class="font-semibold">Soportes</label>
            </div>

            <p class="help-block text-gray-500 text-xs mb-2">Solo Adjutar soportes finales de cuerdo a soportes de anexo técnico (documentos, informes, agendas, planes)
            </p>

            <div class="flex flex-col gap-2">
                <label for="productoanexo" class="block text-gray-700 font-semibold text-sm mb-2">
                    Adjuntar archivo comprimido (.zip o .rar)
                </label>
                <div class="relative w-full">
                    <?php
                    echo $this->Form->input('productoanexo', [
                        'label' => false,
                        'type' => 'file',
                        'class' => 'block w-full text-sm text-gray-700 border border-gray-300 rounded-lg cursor-pointer bg-white focus:outline-none focus:ring-2 focus:ring-blue-400 p-3 file:mr-4 file:py-6 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100',
                        'onchange' => 'validarTamanioSoporte()',
                        'id' => 'productoanexo',
                        'error' => false
                    ]);
                    if (!empty($this->Form->error('productoanexo'))) {
                        echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('productoanexo') . '</div>';
                    }

                    echo $this->Form->input('dirproductoanexo', array('type' => 'hidden', 'class' => 'form-control'));
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
        </div-->
                      
        </div>
    </div>
</div>

<div class="max-w-6xl mx-auto p-18 mt-8">
    <div class="bg-white shadow-2xl rounded-xl p-12">   
            

            <div class="col-span-2 text-md font-semibold my-6">
              
                <?php
                echo $this->Form->input('estado',[
                       'type' => 'hidden',
                        'value' => 'Reporte de avance',
                        'error' => false // No mostrar error aquí
                    ]
                );
                if (!empty($this->Form->error('estado'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('estado') . '</div>';
                }
                ?>
            </div>


        <div class="pt-2 flex gap-4">
            <button type="submit" name="btn" value="Guardar" class="bg-green-600 text-white px-6 py-2 rounded-md hover:bg-green-700 transition font-medium flex items-center justify-center gap-2">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-save-icon lucide-save">
                        <path d="M15.2 3a2 2 0 0 1 1.4.6l3.8 3.8a2 2 0 0 1 .6 1.4V19a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2z" />
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
    
    
   $(function() {
         $('#fecha').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            autoApply: true,
            locale: {
                format: 'YYYY-MM',
                applyLabel: "Aplicar",
                cancelLabel: "Cancelar",
                //daysOfWeek: ["Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa"],
                monthNames: [
                    "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio",
                    "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"
                ],
                firstDay: 1
            }
        }, function(start) {
            let fecha = start.format('YYYY-MM');
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
