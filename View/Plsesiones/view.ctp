<?php $this->layout = 'default' ?>

<div class="max-w-5xl mx-auto text-center mb-8">
    <h1 class="text-5xl font-bold mb-4 text-blue-600">
        Formato Plan de sesión PIC
    </h1>
    <p class="text-gray-500 mb-4 text-lg">
        Visualice e imprima la información registrada en los planes de sesión.
    </p>
</div>

<div class="flex max-w-6xl mx-auto text-center mb-8 gap-4">
    <button title="Imprimir" type="button" id="btn-print" class="flex items-center space-x-2 bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-printer-icon lucide-printer">
            <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2" />
            <path d="M6 9V3a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v6" />
            <rect x="6" y="14" width="12" height="8" rx="1" />
        </svg>
    </button>

    <button title="Copiar enlace" class="flex items-center space-x-2 bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700" onclick="getlink()">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-square-pen-icon lucide-square-pen">
            <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71" />
            <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71" />
        </svg>
    </button>

    <button title="Editar Plan de Sesión" class="flex items-center space-x-2 bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700" onclick="window.location.href='<?php echo $this->Html->url(array('action' => 'edit', $plsesion['Plsesion']['id'])); ?>'">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-square-pen-icon lucide-square-pen">
            <path d="M12 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" />
            <path d="M18.375 2.625a1 1 0 0 1 3 3l-9.013 9.014a2 2 0 0 1-.853.505l-2.873.84a.5.5 0 0 1-.62-.62l.84-2.873a2 2 0 0 1 .506-.852z" />
        </svg>
    </button>

    <button title="Ver Momentos" type="button" id="btn-hide"
        class="flex items-center w-38 space-x-2 bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
        <svg id="btn-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye-icon lucide-eye">
            <path d="M12 3v17a1 1 0 0 1-1 1H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v6a1 1 0 0 1-1 1H3" />
            <path d="m16 19 2 2 4-4" />
        </svg>
    </button>


    <?php
    echo $this->Form->postLink(
        '<button title="Eliminar Plan de Sesión" class="flex items-center space-x-2 bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6"/><path d="M3 6h18"/>
          <path d="M8 6V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/>
        </svg>
    </button>',
        ['action' => 'delete', $plsesion['Plsesion']['id']],
        ['escape' => false, 'confirm' => '¿Está seguro de que desea borrar este plan de sesión?']
    );
    ?>
</div>

<div class="max-w-6xl mx-auto p-18">
    <div class="bg-white shadow-2xl rounded-xl p-12 block" id="print-area">
        <!-- Contenido a imprimir -->
        <div class="overflow-x-auto">
            <table class="w-full border border-gray-300 text-sm text-gray-800">
                <tbody>
                    <!-- Encabezado con logo y datos -->
                    <tr>
                        <td rowspan="3" class="p-2 text-center align-center">
                            <img src="../../img/logo_Pasto.png" alt="Logo Pasto" class="w-[500px] mx-auto">
                        </td>
                        <td colspan="8" class="border border-gray-300 font-bold text-center p-2">
                            PROCESO SALUD PÚBLICA
                        </td>
                    </tr>
                    <tr>
                        <td colspan="8" class="border border-gray-300 font-semibold text-center p-2">
                            NOMBRE DEL FORMATO: PLAN DE SESIÓN PIC
                        </td>
                    </tr>

                    <tr>
                        <td colspan="3" class="border border-gray-300 p-2">VIGENCIA: 2025</td>
                        <td colspan="2" class="border border-gray-300 p-2">VERSIÓN: 02</td>
                        <td colspan="2" class="border border-gray-300 p-2">CÓDIGO: SP-F-00X</td>
                        <td colspan="1" class="border border-gray-300 py-2 pr-12 pl-2"> <span class="font-semibold">Página:</span></td>
                    </tr>

                    <tr>

                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Responsable'); ?></td>
                        <td colspan="4" class="border border-gray-300 p-2"><?php echo h($plsesion['Responsable']['nombres']); ?> </td>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Profesión'); ?></td>
                        <td colspan="3" class="border border-gray-300 p-2"><?php echo h($plsesion['Responsable']['profesion']); ?> </td>
                    </tr>

                    <tr>

                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center">Creación</td>
                        <td colspan="4" class="border border-gray-300 p-2"><?php echo ($plsesion['Plsesion']['created']); ?> </td>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center">Modificación</td>
                        <td colspan="3" class="border border-gray-300 p-2"><?php echo h($plsesion['Plsesion']['modified']); ?> </td>
                    </tr>


                    <tr>
                        <th colspan="9" class="text-center font-bold p-2 uppercase"><?php echo __('Plan de sesión'); ?></th>
                    </tr>

                    <tr>
                        <td colspan="2" class="border border-gray-300 font-semibold p-2 text-center">Fecha de creación</td>
                        <td colspan="3" class="border border-gray-300 p-2"><?php echo h($plsesion['Plsesion']['fecha']); ?></td>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center">Duración</td>
                        <td colspan="3" class="border border-gray-300 p-2"><?php echo h($plsesion['Plsesion']['hora_fin']); ?></td>
                    </tr>


                    <!-- Información general -->
                    <tr class="bg-gray-100">
                        <td colspan="1" class="border border-gray-300 font-semibold p-2">Id plan de sesión</td>
                        <td colspan="8" class="border border-gray-300 p-2">
                            <?php echo h($plsesion['Plsesion']['id']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2">Tema</td>
                        <td colspan="8" class="border border-gray-300 p-2">
                            <?php echo $this->Html->div('tema', $plsesion['Plsesion']['tema'], ['escape' => false]); ?>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center">Producto relacionado:</td>
                        <td colspan="8" class="border border-gray-300 p-2">
                            <?php echo h($plsesion['Producto']['producto']); ?>
                        </td>

                    </tr>

                    <tr>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center">Actividad:</td>
                        <td colspan="8" class="border border-gray-300 p-2">
                            <?php echo h($plsesion['Producto']['actividad']); ?>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center">Intención:</td>
                        <td colspan="8" class="border border-gray-300 p-2">
                            <?php echo $this->Html->div('intension', $plsesion['Plsesion']['intension'], ['escape' => false]); ?>
                        </td>
                    </tr>

                    <tr class="bg-gray-100">
                        <th colspan="9" class="text-center font-bold p-2 uppercase">Premisas</th>
                    </tr>


                    <tr>
                        <td colspan="3" class="border border-gray-300 font-semibold p-2 bg-gray-100">Cuerpo territorio:</td>
                        <td colspan="1" class="border border-gray-300 p-2">
                            <?php echo $plsesion['Plsesion']['cuerpoterritorio']  == 1 ? 'Sí' : 'No'; ?>
                        </td>
                        <td colspan="5" class="border border-gray-300 font-semibold p-2">
                            <?php echo preg_replace('/\d+/', '', $plsesion['Plsesion']['califi_premisa_ct']); ?>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="3" class="border border-gray-300 font-semibold p-2 bg-gray-100">Participación Significativa:</td>
                        <td colspan="1" class="border border-gray-300 p-2">
                            <?php echo $plsesion['Plsesion']['part_significativa']  == 1 ? 'Sí' : 'No'; ?>
                        </td>
                        <td colspan="5" class="border border-gray-300 font-semibold p-2">
                            <?php echo preg_replace('/\d+/', '', $plsesion['Plsesion']['califi_premisa_ps']); ?>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="3" class="border border-gray-300 font-semibold p-2 bg-gray-100">Ciudadanía activa:</td>
                        <td colspan="1" class="border border-gray-300 p-2">
                            <?php echo $plsesion['Plsesion']['ciudadaniaactiva']  == 1 ? 'Sí' : 'No'; ?>
                        </td>
                        <td colspan="5" class="border border-gray-300 font-semibold p-2">
                            <?php
                            // Elimina los números usando expresiones regulares
                            echo preg_replace('/\d+/', '', $plsesion['Plsesion']['califi_premisa_ca']);
                            ?>
                        </td>
                    </tr>

                    <tr class="bg-gray-100">
                        <th colspan="9" class="text-center font-bold p-2 uppercase">Enfoques</th>
                    </tr>

                    <tr>
                        <td colspan="3" class="border border-gray-300 font-semibold p-2 bg-gray-100">Territorial:</td>
                        <td colspan="1" class="border border-gray-300 p-2">
                            <?php echo $plsesion['Plsesion']['territorial']  == 1 ? 'Sí' : 'No'; ?>
                        </td>
                        <td colspan="5" class="border border-gray-300 font-semibold p-2">
                            <?php echo preg_replace('/\d+/', '', $plsesion['Plsesion']['califi_enfo_territorial']); ?>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="3" class="border border-gray-300 font-semibold p-2 bg-gray-100">Poblacional:</td>
                        <td colspan="1" class="border border-gray-300 p-2">
                            <?php echo $plsesion['Plsesion']['poblacional']  == 1 ? 'Sí' : 'No'; ?>
                        </td>
                        <td colspan="5" class="border border-gray-300 font-semibold p-2">
                            <?php echo preg_replace('/\d+/', '', $plsesion['Plsesion']['califi_enfo_poblacional']); ?>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="3" class="border border-gray-300 font-semibold p-2 bg-gray-100">Intercultural:</td>
                        <td colspan="1" class="border border-gray-300 p-2">
                            <?php echo $plsesion['Plsesion']['interultural']  == 1 ? 'Sí' : 'No'; ?>
                        </td>
                        <td colspan="5" class="border border-gray-300 font-semibold p-2">
                            <?php
                            // Elimina los números usando expresiones regulares
                            echo preg_replace('/\d+/', '', $plsesion['Plsesion']['califi_enfo_intercultural']);
                            ?>
                        </td>
                    </tr>


                    <tr>
                        <td colspan="3" class="border border-gray-300 font-semibold p-2 bg-gray-100">Diferencial:</td>
                        <td colspan="1" class="border border-gray-300 p-2">
                            <?php echo $plsesion['Plsesion']['diferencial']  == 1 ? 'Sí' : 'No'; ?>
                        </td>
                        <td colspan="5" class="border border-gray-300 font-semibold p-2">
                            <?php
                            // Elimina los números usando expresiones regulares
                            echo preg_replace('/\d+/', '', $plsesion['Plsesion']['califi_enfo_diferencial']);
                            ?>
                        </td>
                    </tr>

                    <tr class="bg-gray-100">
                        <th colspan="9" class="text-center font-bold p-2 uppercase">Objetivos de la estrategia</th>
                    </tr>

                    <tr>
                        <td colspan="3" class="border border-gray-300 font-semibold p-2 bg-gray-100">Objetivo uno (Ser):</td>
                        <td colspan="1" class="border border-gray-300 p-2">
                            <?php echo $plsesion['Plsesion']['obj_individuos']  == 1 ? 'Sí' : 'No'; ?>
                        </td>
                        <td colspan="5" class="border border-gray-300 font-semibold p-2">
                            <?php
                            // Elimina los números usando expresiones regulares
                            echo preg_replace('/\d+/', '', $plsesion['Plsesion']['califi_obj1']);
                            ?>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="3" class="border border-gray-300 font-semibold p-2 bg-gray-100">Objetivo dos (fortalecimiento):</td>
                        <td colspan="1" class="border border-gray-300 p-2">
                            <?php echo $plsesion['Plsesion']['obj_organizaciones']  == 1 ? 'Sí' : 'No'; ?>
                        </td>
                        <td colspan="5" class="border border-gray-300 font-semibold p-2">
                            <?php
                            // Elimina los números usando expresiones regulares
                            echo preg_replace('/\d+/', '', $plsesion['Plsesion']['califi_obj2']);
                            ?>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="3" class="border border-gray-300 font-semibold p-2 bg-gray-100">Objetivo tres (Articulación):</td>
                        <td colspan="1" class="border border-gray-300 p-2">
                            <?php echo $plsesion['Plsesion']['obj_instituciones']  == 1 ? 'Sí' : 'No'; ?>
                        </td>
                        <td colspan="5" class="border border-gray-300 font-semibold p-2">
                            <?php
                            // Elimina los números usando expresiones regulares
                            echo preg_replace('/\d+/', '', $plsesion['Plsesion']['califi_obj3']);
                            ?>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center">Objetivo general:</td>
                        <td colspan="8" class="border border-gray-300 p-2">
                            <?php echo $this->Html->div('objetivog', $plsesion['Plsesion']['objetivog'], ['escape' => false]); ?>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center">Objetivo específicos:</td>
                        <td colspan="8" class="border border-gray-300 p-2">
                            <?php echo $this->Html->div('objetivoe', $plsesion['Plsesion']['objetivoe'], ['escape' => false]); ?>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2">Tipo de población</td>
                        <td colspan="3" class="border border-gray-300 p-2">
                            <?php echo $plsesion['Plsesion']['tipoblacion']; ?>
                        </td>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2">Curso de vida</td>
                        <td colspan="4" class="border border-gray-300 p-2">
                            <?php echo $plsesion['Plsesion']['cursovida']; ?>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2">Proceso</td>
                        <td colspan="3" class="border border-gray-300 p-2">
                            <?php echo $plsesion['Plsesion']['proceso']; ?>
                        </td>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2">Temática:</td>
                        <td colspan="4" class="border border-gray-300 p-2">
                            <?php echo $plsesion['Plsesion']['dimension']; ?>
                        </td>
                    </tr>

                    <tr class="bg-gray-100">
                        <th colspan="9" class="text-center font-bold p-2 uppercase">Preguntas de sentido</th>
                    </tr>

                    <tr>
                        <th colspan="9" class="border border-gray-300 font-normal text-left p-2 "><?php echo $this->Html->div('preguntasentido', $plsesion['Plsesion']['preguntasentido'], ['escape' => false]); ?></th>
                    </tr>
                    <tr>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2">Anexo</td>
                        <td colspan="4" class="border border-gray-300 p-2 text-blue-600 hover:underline">
                            <?php echo $this->Html->link('../files/plsesion/anexo/' . $plsesion['Plsesion']['dirplanes'] . '/' . $plsesion['Plsesion']['anexo']); ?>
                        </td>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2">Enlaces:</td>
                        <td colspan="3" class="border border-gray-300 p-2 text-blue-600 hover:underline">
                            <?php echo ($plsesion['Plsesion']['enlaceurl']); ?>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="max-w-6xl mx-auto text-left mt-10">
    <h1 class="text-3xl font-bold mb-1 text-blue-600">
        Momentos de la sesión
    </h1>
    <p class="text-gray-500 text-lg">
        <span class="font-normal">Momentos del plan de sesión</span>
    </p>
</div>

<div class="flex max-w-6xl mx-auto text-center my-8 gap-4">
    <button title="Imprimir" type="button" id="btn-print-momentos" class="flex items-center space-x-2 bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-printer-icon lucide-printer">
            <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2" />
            <path d="M6 9V3a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v6" />
            <rect x="6" y="14" width="12" height="8" rx="1" />
        </svg>
    </button>

    <button title="Crear momento" class="flex items-center space-x-2 bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700" onclick="window.location.href='<?php echo $this->Html->url(array('controller' => 'plsmomentos', 'action' =>  'add?sesion=' . $plsesion['Plsesion']['id'])); ?>'">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-square-pen-icon lucide-square-pen">
            <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z" />
            <path d="M14 2v4a2 2 0 0 0 2 2h4" />
            <path d="M9 15h6" />
            <path d="M12 18v-6" />
        </svg>
    </button>
</div>

<div class="max-w-6xl mx-auto p-18 mt-8">
    <div class="bg-white shadow-2xl rounded-xl p-12 block">
        <!-- Contenido a imprimir -->
        <div class="flex items-center mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" class="p-2 bg-blue-100 rounded-lg text-blue-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clipboard-pen-icon lucide-clipboard-pen">
                <line x1="10" x2="14" y1="2" y2="2" />
                <line x1="12" x2="15" y1="14" y2="11" />
                <circle cx="12" cy="14" r="8" />
            </svg>
            <div class="ml-4">
                <h1 class="text-xl font-semibold flex">
                    Tiempo de sesión registrado:
                    <p class="pl-4
                        <?php
                        if ($totalDuracion > $totalEnSesion) {
                            echo 'text-yellow-600 font-bold';
                        } elseif ($totalDuracion < ($totalEnSesion * 0.5)) {
                            echo 'text-red-600 font-bold';
                        } else {
                            echo 'text-green-600 font-bold';
                        }
                        ?>">
                        <?php echo $totalDuracion; ?>
                    </p>
                    <p class="text-xl font-normal flex pl-2">
                        <?php echo ' de las ' . $plsesion['Plsesion']['hora_fin'] . ' programadas'; ?>
                    </p>
                </h1>
                <p class="text-gray-500">Como regla de cumplimiento el tiempo programado no debe superarse en los momentos.</p>
            </div>
        </div>

        <div class="overflow-x-auto" id="print-area-momentos">
            <?php if (!empty($plsesion['Plsmomento'])) : ?>
                <?php foreach ($plsesion['Plsmomento'] as $plsmomento) : ?>
                    <div class="mb-6">
                        <table class="w-full">
                            <tr>
                                <td colspan="9">
                                    <!-- Botón de menú de opciones -->
                                    <div class="relative inline-block text-left">
                                        <button type="button" class="flex items-center justify-center w-8 h-8 rounded-full hover:bg-gray-200 hover:rounded-md focus:outline-none" onclick="toggleMenu(this)">
                                            <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                <path d="M3 5h1" />
                                                <path d="M3 12h1" />
                                                <path d="M3 19h1" />
                                                <path d="M8 5h1" />
                                                <path d="M8 12h1" />
                                                <path d="M8 19h1" />
                                                <path d="M13 5h8" />
                                                <path d="M13 12h8" />
                                                <path d="M13 19h8" />
                                            </svg>
                                        </button>
                                        <div class="hidden absolute left-0 mt-2 w-32 bg-white border border-gray-200 rounded shadow-lg z-50 menu-options">
                                            <a href="<?php echo $this->Html->url(['controller' => 'Plsmomentos', 'action' => 'edit', $plsmomento['id']]); ?>"
                                                class="block px-4 py-2 text-gray-700 hover:bg-gray-100 text-sm">Editar</a>
                                            <form method="post" action="<?php echo $this->Html->url(['controller' => 'Plsmomentos', 'action' => 'delete', $plsmomento['id'], $plsesion['Plsesion']['id']]); ?>" onsubmit="return confirm('<?php echo __('¿Está seguro/a de eliminar el registro con ID# %s?', $plsmomento['id']); ?>');">
                                                <?php echo $this->Form->hidden('_method', ['value' => 'POST']); ?>
                                                <button type="submit" class="w-full text-left px-4 py-2 text-red-600 hover:bg-gray-100 text-sm">Borrar</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr class="mt-4 bg-gray-100 ">
                                <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center text-sm text-gray-700"> Momento </td>
                                <td colspan="5" class="border border-gray-300 p-2 font-semibold text-blue-600 text-sm hover:underline">
                                    <?php echo $this->Html->link(strtoupper($plsmomento['momento']), array('controller' => 'Plsmomentos', 'action' => 'view', $plsmomento['id'])); ?>
                                </td>
                                <td colspan="1" class=" border border-gray-300 font-semibold p-2 text-center text-sm text-gray-700">Duración</td>
                                <td colspan="3" class="border border-gray-300 p-2 font-bold text-sm"><?php echo $plsmomento['duracion']; ?></td>
                            </tr>

                            <tr>
                                <td colspan="9" class=" border border-gray-300 font-semibold p-2 text-center text-sm text-gray-700">Metodología</td>

                            </tr>

                            <tr>
                                <td colspan="9" class="border border-gray-300 p-2 text-sm text-gray-700"><?php echo $plsmomento['metodologia']; ?></td>
                            </tr>
                            <tr class="bg-gray-100">
                                <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center text-sm text-gray-700">Resultado</td>
                                <td colspan="8" class="border border-gray-300 p-2 hover:underline text-sm text-gray-700">
                                    <?php echo $plsmomento['resultado']; ?>
                                </td>
                            </tr>

                            <tr>
                                <td colspan="1" class=" border border-gray-300 font-semibold p-2 text-center text-sm text-gray-700">Insumos</td>
                                <td colspan="8" class="border border-gray-300 p-2 hover:underline text-sm">
                                    <?php echo $plsmomento['insumo']; ?>
                                </td>
                            </tr>
                        </table>

                    </div>
                <?php endforeach; ?>

            <?php else: ?>
                <div class="text-center text-gray-500 py-8">
                    <span class="font-semibold text-lg">No hay encuentros agregados</span>
                </div>
            <?php endif; ?>
        </div>

    </div>
</div>



<script>
    function imprimirContenido(e, printContents) {
        e.preventDefault();
        if (!printContents) {
            alert("El área de impresión está vacía o no existe");
            return;
        }

        var w = window.open('', '', 'height=900,width=1200');
        w.document.write('<html><head><title>Impresión</title>');
        w.document.write('<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">');
        w.document.write('<link rel="stylesheet" href="/css/app.css" />');
        // Estilos para impresión: ajusta márgenes y fuerza salto de página
        w.document.write('<style>@media print { body { margin: 0; } .bg-white { box-shadow: none !important; } table { page-break-inside:auto; } tr { page-break-inside:avoid; page-break-after:auto; } .page-break { page-break-before:always; } }</style>');
        w.document.write('</head><body style="margin:0;padding:0;">');
        w.document.write('<div style="width:100vw;max-width:100%;box-sizing:border-box;">' + printContents.innerHTML + '</div>');
        w.document.write('</body></html>');
        w.document.close();
        w.focus();
        w.print();
    }


    document.addEventListener("DOMContentLoaded", function() {
        var btn = document.getElementById('btn-print');
        var btnPrintMomentos = document.getElementById('btn-print-momentos');
        var printContents = document.getElementById('print-area');
        var printContentsMomentos = document.getElementById('print-area-momentos');
        var btnHide = document.getElementById('btn-hide');
        const btnText = document.getElementById('btn-text');
        const btnIcon = document.getElementById('btn-icon');

        btn.addEventListener('click', function(e) {
            imprimirContenido(e, printContents);
        });

        btnPrintMomentos.addEventListener('click', function(e) {
            imprimirContenido(e, printContentsMomentos);
        });







        let isEdit = true; // estado inicial: "Editar"

        btnHide.addEventListener('click', function(e) {
            e.preventDefault();
            if (isEdit) {

                // Volver a "Editar"
                btnHide.title = 'Ver plan de sesión';
                btnIcon.innerHTML = `
                 <path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0" />
                <circle cx="12" cy="12" r="3" />
            `;
            } else {
                // Cambiar a "Guardar"

                btnHide.title = 'Ver encuentros';
                btnIcon.innerHTML = `
            <path d="M12 3v17a1 1 0 0 1-1 1H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v6a1 1 0 0 1-1 1H3" />
            <path d="m16 19 2 2 4-4" />
            `;
            }
            isEdit = !isEdit;
            printContents.classList.toggle('block');
            printContents.classList.toggle('hidden');
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('textarea').each(function() {
            this.setAttribute('style', 'height:' + (this.scrollHeight) + 'px;overflow-y:hidden;');
        }).on('input', function() {
            this.style.height = 'auto';
            this.style.height = (this.scrollHeight) + 'px';
        });

    });

    function toggleMenu(btn) {
        // Cierra otros menús abiertos
        document.querySelectorAll('.menu-options').forEach(function(menu) {
            if (menu !== btn.nextElementSibling) menu.classList.add('hidden');
        });
        // Alterna el menú actual
        btn.nextElementSibling.classList.toggle('hidden');
    }
    // Cierra el menú si se hace clic fuera
    document.addEventListener('click', function(e) {
        document.querySelectorAll('.menu-options').forEach(function(menu) {
            if (!menu.contains(e.target) && !menu.previousElementSibling.contains(e.target)) {
                menu.classList.add('hidden');
            }
        });
    });
</script>