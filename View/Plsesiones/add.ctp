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
            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mr-4">
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
                            name="fecha"
                            id="fecha"
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

                <p class="help-block text-gray-500 text-xs mb-2 md:mb-5">PENDIENTE.</p>

                <?php
                $optiontime =  array(
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
                    '1 Hora' => '1 Hora',
                    '1 Hora y media' => '1 Hora y 30 minutos',
                    '2 Horas' => '2 Horas',
                    '3 Horas' => '3 Horas',
                    '4 Horas' => '4 Horas',
                    '6 Horas' => '6 Horas',
                    '8 Horas' => '8 Horas'
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

            <!-- N° de sesión a desarrollar -->
            <div class="col-span-2 text-md font-semibold mb-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">3</span>
                    <label for="proactividad_id" class="font-semibold">Numero de sesiones a desarrollar</label>
                    <p class="text-red-600">*</p>

                </div>
                <?php
                echo $this->Form->input('sesion', [
                    'type' => 'number',
                    'id' => 'sesion',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700',
                    'onchange' => 'mostrarBarrio(this.value);',
                    'error' => false,
                    'min' => 1,
                    'max' => 20,
                    'label' => '',
                    'empty' => 'Seleccione una lugar'
                ]);
                if (!empty($this->Form->error('sesion'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('sesion') . '</div>';
                }
                ?>
            </div>

            <!-- Producto/tarea relacionada -->
            <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">4</span>
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

            <!-- Tema -->
            <!-- Objetivo General -->
            <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">6</span>
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



<div class="container">
    <div class="row">

        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading" class="page-header">

                </div>
                <?php echo $this->Form->create('Plsesion', array('type' => 'file', 'novalidate' => 'novalidate')); ?>
                <fieldset>

                    <h2 class="page-header">Agregar Plan de sesión</h2>

                    <?php
                    $option = array(
                        'label' => 'Fecha de elaboración </p>',
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

                    <div class="row">
                        <div class="form-group col-md-4">
                            <?php echo $this->Form->input('fecha', $option, array('label' => 'registro')); ?>
                        </div>
                        <div class="form-group col-md-4">
                            <?php
                            $optiontime =  array(' ' => 'Elegir', '5 minutos' => '5 minutos', '10 minutos' => '10 minutos', '15 minutos' => '15 minutos', '20 minutos' => '20 minutos', '25 minutos' => '25 minutos', '30 minutos' => '30 minutos', '35 minutos' => '35 minutos', '40 minutos' => '40 minutos', '45 minutos' => '45 minutos', '50 minutos' => '50 minutos', '55 minutos' => '55 minutos', 'Una Hora' => 'Una Hora', 'Una Hora y media' => 'Una Hora y media', 'Dos Horas' => 'Dos Horas', 'Tres Horas' => 'Tres Horas', 'Cuatro horas' => 'Cuatro horas', 'Seis horas' => 'Seis horas', 'Ocho horas' => 'Ocho horas');
                            echo $this->Form->input('hora_fin', array('label' => 'Duración total de la actividad', 'type' => 'select', 'class' => 'form-control', 'options' => $optiontime));
                            ?>

                        </div>
                        <div class="form-group col-md-4">
                            <?php echo $this->Form->input('sesion', array('label' => 'Numero de sesiones a desarrollar')); ?>
                        </div>
                        <div class="form-group col-md-12">
                            <?php echo $this->Form->input('producto_id', array('label' => 'Producto/tarea relacionada', 'type' => 'select',  'class' => 'form-control select-search')); ?>
                        </div>
                        <div class="form-group col-md-12">
                            <?php echo $this->Form->input('tema'); ?>
                        </div>
                        <div class="form-group col-md-12">
                            <h3><?php echo 'Intension ' ?><br></h3>
                            <?php echo 'Cual es la intensión del equipo con esta actividad, El espíritu de la práctica pedagógica, intensión con s, refiere a algo que se hace con intensidad.' ?>
                        </div>
                        <div class="form-group col-md-12">
                            <?php echo $this->Form->input('intension', array('label' => 'Intension', 'class' => 'ckeditor')); ?>
                        </div>
                        <div class="form-group col-md-12">
                            <h2><?php echo 'Premisas ' ?><br></h2>
                            <?php echo 'Marque con una X la casilla según corresponda. Establecen un norte de los procesos pedagógicos' ?>
                        </div>
                        <div class="form-group col-md-4">
                            <?php echo $this->Form->input('cuerpoterritorio', array('label' => 'Cuerpo territorio', 'options' => array('' => 'Elegir', '0 ' => '-', '1' => 'X'), 'class' => 'form-control')); ?>
                        </div>
                        <div class="form-group col-md-4">
                            <?php echo $this->Form->input('part_significativa', array('label' => 'Participación significativa', 'options' => array('' => 'Elegir', '0 ' => '-', '1' => 'X'), 'class' => 'form-control')); ?>
                        </div>
                        <div class="form-group col-md-4">
                            <?php echo $this->Form->input('ciudadaniaactiva', array('label' => 'Ciudadania activa', 'options' => array('' => 'Elegir', '0 ' => '-', '1' => 'X'), 'class' => 'form-control')); ?>
                        </div>
                        <div class="form-group col-md-12">
                            <h2><?php echo 'Enfoques ' ?><br></h2>
                            <?php echo 'Marque con una X la casilla según corresponda. Se centra en el grupo' ?>
                        </div>
                        <div class="form-group col-md-4">
                            <?php echo $this->Form->input('territorial', array('label' => 'Enfoque territorial', 'options' => array('' => 'Elegir', '0 ' => '-', '1' => 'X'), 'class' => 'form-control')); ?>
                        </div>
                        <div class="form-group col-md-4">
                            <?php echo $this->Form->input('poblacional', array('label' => 'Enfoque poblacional', 'options' => array('' => 'Elegir', '0 ' => '-', '1' => 'X'), 'class' => 'form-control')); ?>
                        </div>
                        <div class="form-group col-md-4">
                            <?php echo $this->Form->input('interultural', array('label' => 'Enfoque intercultural', 'options' => array('' => 'Elegir', '0 ' => '-', '1' => 'X'), 'class' => 'form-control')); ?>
                        </div>
                        <div class="form-group col-md-6">
                            <?php echo $this->Form->input('diferencial', array('label' => 'Enfoque diferencial', 'options' => array('' => 'Elegir', '0 ' => '-', '1' => 'X'), 'class' => 'form-control')); ?>
                        </div>
                        <div class="form-group col-md-6">
                            <?php echo $this->Form->input('genero', array('label' => 'Enfoque de género, Sub_categoria del diferencial', 'options' => array('' => 'Elegir', '0 ' => '-', '1' => 'X'), 'class' => 'form-control')); ?>
                        </div>
                        <div class="form-group col-md-12">
                            <h2><?php echo 'Objetivos de la estrategia ' ?><br></h2>
                            <?php echo 'Marque con una X según corresponda. A dónde va dirigido el impacto: al agente singular, a los colectivos y liderazgos o a las instituciones y sus trabajadores ' ?>
                        </div>
                        <div class="form-group col-md-4">
                            <?php echo $this->Form->input('obj_individuos', array('label' => 'Objetivo 1', 'options' => array('' => 'Elegir', '0 ' => '-', '1' => 'X'), 'class' => 'form-control')); ?>
                            <?php echo 'Fortalecer la capacidad de agencia en torno al bienestar individual y del entorno cercano, promoviendo procesos reflexivos, basados en la autonomía, el afecto y la construcción del conocimiento en relación con la promoción de la salud' ?>
                        </div>
                        <div class="form-group col-md-4">
                            <?php echo $this->Form->input('obj_organizaciones', array('label' => 'Objetivo 2', 'options' => array('' => 'Elegir', '0 ' => '-', '1' => 'X'), 'class' => 'form-control')); ?>
                            <?php echo 'Fortalecer las organizaciones sociales y los liderazgos propositivos a partir de la transformación de la cultura política en relación con el derecho a la salud, incrementando su capacidad de agencia e incidencia colectiva en la toma de decisiones que afectan su bienestar y calidad de vida.' ?>
                        </div>
                        <div class="form-group col-md-4">
                            <?php echo $this->Form->input('obj_instituciones', array('label' => 'Objetivo 3', 'options' => array('' => 'Elegir', '0 ' => '-', '1' => 'X'), 'class' => 'form-control')); ?>
                            <?php echo 'Contribuir con el mejoramiento de la capacidad de respuesta de las instituciones a las necesidades y demandas de la ciudadanía en relación con el derecho a la salud, promoviendo la participación cualificada de los diferentes actores sociales y fomentando la articulación intra e interinstitucional.' ?>
                        </div>
                        <div class="form-group col-md-12">
                            <?php echo $this->Form->input('objetivog', array('label' => 'Objetivo general de la actividad pedagogica. El objetivo debe ser medible y alcanzable', 'class' => 'ckeditor')); ?>
                        </div>
                        <div class="form-group col-md-12">
                            <?php echo $this->Form->input('objetivoe', array('label' => 'Objetivos especificos. Los objetivos van de acuerdo a los momentos metodológicos, concretan las intenciones educativas y contribuyen al logro del objetivo de la actividad pedagógica', 'class' => 'ckeditor')); ?>
                        </div>
                        <div class="form-group col-md-12">
                            <h2><?php echo 'Poblaciones ' ?><br></h2>
                            <p> <?php echo 'Copie de esta lista a la casilla siguiente las poblaciones participantes o escriba otras que no esten categorizadas.' ?></p>
                            <?php echo '1. Población en general 2. Hombres	 3. Mujeres	4. Niños y niñas 5. Adolescentes 6. Adultos	7. Afrocolombianos 	8. Campesinos	 9. Habitantes de Calle		10. Indígenas  11. Líderes y lideresas  12. Madres gestantes  13. Madres Lactantes  14. Población con situación de discapacidad 15. Población LGBTI 16. Población privada de la libertad 17. Población desmovilizada 18. Población víctima de conflicto armado 19. Población víctima de violencia 20. Trabajadores(as) sexuales	21. Instituciones' ?>
                        </div>
                        <div class="form-group col-md-12">
                            <?php echo $this->Form->input('tipoblacion', array('label' => 'Tipo de poblacion participante.')); ?>
                        </div>
                        <div class="form-group col-md-12">
                            <h2><?php echo 'Curso de vida ' ?><br></h2>
                            <p> <?php echo 'Copie de esta lista a la casilla siguiente el curso de vida' ?></p>
                            <?php echo 'Primera infancia, Infancia, adolescencia, jueventud, adultez, vejez' ?>
                        </div>
                        <div class="form-group col-md-12">
                            <?php echo $this->Form->input('cursovida', array('label' => 'Curso de vida')); ?>
                        </div>
                        <div class="form-group col-md-6">
                            <?php
                            echo $this->Form->input('proceso', array('label' => ' Tipo  de proceso', 'options' => array('' => 'Elegir', '1. Articulación' => '1. Articulación', '2. Educación y Comunicación ' => '2. Educación y Comunicación ', '3. Fortalecimiento y Formación ' => '3. Fortalecimiento y Formación ', '4. Gestión del  Conocimiento ' => '4. Gestión del  Conocimiento ', '5. Otro ' => '5. Otro '), 'class' => 'form-control'));
                            ?>
                        </div>
                        <div class="form-group col-md-6">
                            <?php

                            $optiondim = array(
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
                            );
                            echo $this->Form->input('dimension', array('label' => 'Problematica asociada', 'type' => 'select', 'class' => 'form-control select-search', 'options' => $optiondim));
                            ?>
                        </div>
                        <!--div class="form-group col-md-12">
                                        <?php echo $this->Form->input('equipores'); ?>
                                    </div-->
                        <!--            <div class="form-group col-md-6">
                                    <?php //echo $this->Form->input('responsable_id', array('class' => 'form-control select-search'));  
                                    ?>
                                                </div>-->
                        <!--div class="form-group col-md-6">
                                        <?php echo $this->Form->input('tematica'); ?>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <?php echo $this->Form->input('resultado'); ?>
                                    </div-->
                        <div class="form-group col-md-12">
                            <?php echo $this->Form->input('preguntasentido', array('label' => 'Preguntas de sentido. La información propende por generar conciencia, sujeto-tiempo-espacio, las preguntas construyen', 'class' => 'ckeditor')); ?>
                        </div>

                        <div class="form-group col-md-12">
                            <?php echo $this->Form->input('momentosresumen', array('label' => 'Registre los aspectos relevantes de cada momento asi como palabras clave escriba despues de cada momento las palalbras claves y la idea principal(Opcional)', 'class' => 'ckeditor')); ?>
                        </div>
                        <div class="form-group col-md-12">
                            <?php echo 'Atribuya valor a cada uno de los ítems según haya seleccionado al inicio del formato.' ?>
                        </div>
                        <div class="form-group col-md-4">
                            <?php
                            $optionpuntaje = array(' ' => 'Elegir', '1 No tiene' => '1 No tiene', '2 Poca' => '2 Poca', '3 Moderada' => '3 Moderada', '4 Fuerte' => '4 Fuerte', '5 Muy Fuerte' => '5 Muy Fuerte');
                            echo $this->Form->input('califi_obj1', array('label' => 'Objetivo 1', 'type' => 'select', 'class' => 'form-control', 'options' => $optionpuntaje));
                            ?>
                        </div>
                        <div class="form-group col-md-4">
                            <?php echo $this->Form->input('califi_obj2', array('label' => 'Objetivo 2', 'type' => 'select', 'class' => 'form-control', 'options' => $optionpuntaje)); ?>
                        </div>
                        <div class="form-group col-md-4">
                            <?php echo $this->Form->input('califi_obj3', array('label' => 'Objetivo 3', 'type' => 'select', 'class' => 'form-control', 'options' => $optionpuntaje)); ?>
                        </div>
                        <div class="form-group col-md-4">
                            <?php echo $this->Form->input('califi_premisa_ct', array('label' => 'Cuerpo territorio', 'type' => 'select', 'class' => 'form-control', 'options' => $optionpuntaje)); ?>
                        </div>
                        <div class="form-group col-md-4">
                            <?php echo $this->Form->input('califi_premisa_ps', array('label' => 'Participación significativa', 'type' => 'select', 'class' => 'form-control', 'options' => $optionpuntaje)); ?>
                        </div>
                        <div class="form-group col-md-4">
                            <?php echo $this->Form->input('califi_premisa_ca', array('label' => 'Ciudadania activa', 'type' => 'select', 'class' => 'form-control', 'options' => $optionpuntaje)); ?>
                        </div>
                        <div class="form-group col-md-3">
                            <?php echo $this->Form->input('califi_enfo_territorial', array('label' => 'Territorial', 'type' => 'select', 'class' => 'form-control', 'options' => $optionpuntaje)); ?>
                        </div>
                        <div class="form-group col-md-3">
                            <?php echo $this->Form->input('califi_enfo_poblacional', array('label' => 'Poblacional', 'type' => 'select', 'class' => 'form-control', 'options' => $optionpuntaje)); ?>
                        </div>
                        <div class="form-group col-md-3">
                            <?php echo $this->Form->input('califi_enfo_intercultural', array('label' => 'Intercultural', 'type' => 'select', 'class' => 'form-control', 'options' => $optionpuntaje)); ?>
                        </div>
                        <div class="form-group col-md-3">
                            <?php echo $this->Form->input('califi_enfo_diferencial', array('label' => 'Diferencial', 'type' => 'select', 'class' => 'form-control', 'options' => $optionpuntaje)); ?>
                        </div>

                        <div class="form-group col-md-6">

                            <?php
                            echo $this->Form->input('anexo', array('label' => 'Soportes', 'type' => 'file', 'class' => 'form-control', 'onchange' => 'validarTamanioSoporte()'));
                            echo $this->Form->input('dirplanes', array('type' => 'hidden'));
                            ?>

                        </div>

                        <div class="form-group col-md-6">
                            <?php
                            echo $this->Form->input('responsable_id', array('label' => 'Responsable de registro', 'class' => 'form-control select-search'));
                            echo $this->Form->input('created', array('label' => ' Fecha de registro', 'type' => 'hidden'));
                            ?>
                        </div>

                        <div class="form-group col-md-12">
                            <?php echo $this->Form->input('enlaceurl', array('label' => 'Enlace de insumos propuestos')); ?>
                        </div>

                        <div class="form-group col-md-12">
                            <p class="help-block">NOTA: Cargar el archivo comprimido extensión ".zip" o ".rar" si son varios soportes plan se sesion, documentos de apoyo claves para el desarrollo</p>
                        </div>

                    </div>
                </fieldset>
                <?php echo $this->Form->end(__('Enviar')); ?>

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

    document.addEventListener("DOMContentLoaded", () => {

        const options = {
            searchEnabled: true,
            searchChoices: true,
            removeItemButton: false,
            itemSelectText: '',
            shouldSort: false,
            searchPlaceholderValue: "Escriba para filtrar...",
        };

        const choices_ubicacion = new Choices("#ubicacion_id", options);
        const choices_producto = new Choices("#producto_id", options);


    });


    $(function() {
        $('#fecha').daterangepicker({
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
</script>