<?php $this->layout = 'default' ?>

<div class="max-w-5xl mx-auto text-center mb-8">
    <h1 class="text-5xl font-bold mb-4 text-blue-600">
        Formato Sistematización
    </h1>
    <p class="text-gray-500 mb-4 text-lg">
        Visualice e imprima la información registrada en la sistematización de procesos.
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
    <button title="Editar Sistematizacion" class="flex items-center space-x-2 bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700" onclick="window.location.href='<?php echo $this->Html->url(array('action' => 'edit', $proactividad['Proactividad']['id'])); ?>'">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-square-pen-icon lucide-square-pen">
            <path d="M12 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" />
            <path d="M18.375 2.625a1 1 0 0 1 3 3l-9.013 9.014a2 2 0 0 1-.853.505l-2.873.84a.5.5 0 0 1-.62-.62l.84-2.873a2 2 0 0 1 .506-.852z" />
        </svg>
    </button>

    <button title="Ver Encuentros" type="button" id="btn-hide"
        class="flex items-center w-38 space-x-2 bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
        <svg id="btn-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye-icon lucide-eye">
            <path d="M12 3v17a1 1 0 0 1-1 1H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v6a1 1 0 0 1-1 1H3" />
            <path d="m16 19 2 2 4-4" />
        </svg>
    </button>
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
                            NOMBRE DEL FORMATO: SISTEMATIZACIÓN ACTIVIDADES PIC
                        </td>
                    </tr>

                    <tr>
                        <td colspan="3" class="border border-gray-300 p-2">VIGENCIA: 2025</td>
                        <td colspan="2" class="border border-gray-300 p-2">VERSIÓN: </td>
                        <td colspan="2" class="border border-gray-300 p-2">CÓDIGO: </td>
                        <td colspan="1" class="border border-gray-300 py-2 pr-12 pl-2"> <span class="font-semibold">Página:</span></td>
                    </tr>

                    <tr>

                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Responsable'); ?></td>
                        <td colspan="4" class="border border-gray-300 p-2"><?php echo h($proactividad['Responsable']['nombres']); ?> </td>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center"><?php echo __('Profesión'); ?></td>
                        <td colspan="3" class="border border-gray-300 p-2"><?php echo h($proactividad['Responsable']['profesion']); ?> </td>
                    </tr>

                    <tr>
                        <td colspan="2" class="border border-gray-300 font-semibold p-2 text-center">Fecha de Ingreso</td>
                        <td colspan="3" class="border border-gray-300 p-2"><?php echo h($proactividad['Proactividad']['created']); ?></td>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center">Fecha_actualización</td>
                        <td colspan="3" class="border border-gray-300 p-2"><?php echo h($proactividad['Proactividad']['modified']); ?></td>
                    </tr>


                    <!-- Información general -->
                    <tr class="bg-gray-100">
                        <td colspan="6" class="border border-gray-300 p-2">
                            <?php echo __('Ficha de sistematización de procesos, se diligencia y complementa durante y hasta finalizar el proceso formativo o educativo'); ?>
                        </td>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2">Id sistematización:</td>
                        <td colspan="2" class="border border-gray-300 p-2">
                            <?php echo h($proactividad['Proactividad']['id']); ?>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center">Dimensión:</td>
                        <td colspan="4" class="border border-gray-300 p-2">
                            <?php echo h($proactividad['Producto']['dimensiones']); ?>
                        </td>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center">Entorno:</td>
                        <td colspan="3" class="border border-gray-300 p-2">
                            <?php echo h($proactividad['Producto']['entorno']); ?>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center">Producto:</td>
                        <td colspan="8" class="border border-gray-300 p-2">
                            <?php echo h($proactividad['Producto']['activity']); ?>
                        </td>
                    </tr>

                    <tr class="bg-gray-100">
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center">Tarea:</td>
                        <td colspan="4" class="border border-gray-300 p-2">
                            <?php echo $this->Html->link($proactividad['Producto']['tarea'], ['controller' => 'productos', 'action' => 'view', $proactividad['Producto']['id']]); ?>
                        </td>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center">Producto relacionado:</td>
                        <td colspan="3" class="border border-gray-300 p-2">
                            <?php echo h($proactividad['Proactividad']['producto1']); ?>
                        </td>
                    </tr>

                    <tr>
                        <td class="border border-gray-300 font-semibold p-2 text-center">Tema:</td>
                        <td colspan="8" class="border border-gray-300 p-2">
                            <?php echo $this->Html->div('proactividad-tema', $proactividad['Proactividad']['objactividad'], ['escape' => false]); ?>
                        </td>
                    </tr>

                    <tr class="bg-gray-100">
                        <td colspan="1" class="border border-gray-300 font-semibold p-2">Grupo participante:</td>
                        <td colspan="3" class="border border-gray-300 p-2">
                            <?php echo h($proactividad['Proactividad']['grupo']); ?>
                        </td>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2">Características de población:</td>
                        <td colspan="4" class="border border-gray-300 p-2">
                            <?php echo h($proactividad['Proactividad']['poblaciones']); ?>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>

        <div class="overflow-x-auto mt-4">
            <table class="w-full border border-gray-300 text-sm text-gray-800">
                <tbody>
                    <tr class="bg-gray-100">
                        <td class="border border-gray-300 font-semibold p-2 w-48">Objetivo:</td>
                        <td colspan="6" class="border border-gray-300 p-2">
                            <?php echo $this->Html->div('proactividad-objetivo', $proactividad['Proactividad']['objactividad'], ['escape' => false]); ?>
                        </td>
                    </tr>

                    <tr>
                        <td class="border border-gray-300 font-semibold p-2">Objetivos específicos:</td>
                        <td colspan="6" class="border border-gray-300 p-2">
                            <?php echo $this->Html->div('proactividad-objetivo', $proactividad['Proactividad']['objetivoespecifico'], ['escape' => false]); ?>
                        </td>
                    </tr>

                    <tr class="bg-gray-100">
                        <td class="border border-gray-300 font-semibold p-2">Características de sesión:</td>
                        <td colspan="4" class="border border-gray-300 p-2">
                            <?php echo h($proactividad['Proactividad']['caracteristicasesion']); ?>
                        </td>
                        <td colspan="2" class="border border-gray-300 p-2">
                            <span class="font-semibold">Otro tipo:</span>
                            <?php echo h($proactividad['Proactividad']['otrocual']); ?>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="8" class="border border-gray-300 bg-gray-200 font-bold p-2 text-center">
                            RELACIÓN CON LOS OBJETIVOS DE LA ESTRATEGIA
                        </td>
                    </tr>

                    <tr>
                        <td class="border border-gray-300 font-semibold p-2">Individual</td>
                        <td class="border border-gray-300 p-2">
                            <?php echo h($proactividad['Proactividad']['objetivouno']); ?>
                        </td>

                        <td class="border border-gray-300 font-semibold p-2">Comunitario</td>
                        <td colspan="2" class="border border-gray-300 p-2">
                            <?php echo h($proactividad['Proactividad']['objetivodos']); ?>
                        </td>

                        <td class="border border-gray-300 font-semibold p-2">Institucional</td>
                        <td colspan="2" class="border border-gray-300 p-2">
                            <?php echo h($proactividad['Proactividad']['objetivotres']); ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="overflow-x-auto mt-4">
            <table class="w-full border border-gray-300 text-sm text-gray-800">
                <tbody>
                    <tr>
                        <td colspan="8" class="border border-gray-300 bg-gray-200 font-bold p-2 text-start">
                            CONTRIBUCIÓN A LOS OBJETIVOS
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 p-2">
                            <?php
                            $auxContObj = strrpos(($proactividad['Proactividad']['contobjetivo']), '/');
                            if ($auxContObj === false) {
                            ?>
                                <?php echo ($proactividad['Proactividad']['contobjetivo']); ?>
                            <?php
                            } else {
                                print($proactividad['Proactividad']['contobjetivo']);
                            }
                            ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="overflow-x-auto mt-4">
            <table class="w-full border border-gray-300 text-sm text-gray-800">
                <tbody>
                    <tr>
                        <td colspan="8" class="border border-gray-300 bg-gray-200 font-bold p-2 text-center">
                            RELACIÓN CON LAS PREMISAS
                        </td>
                    </tr>

                    <tr>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2">Participación significativa</td>
                        <td colspan="2" class="border border-gray-300 p-2">
                            <?php echo h($proactividad['Proactividad']['premisauno']); ?>
                        </td>

                        <td colspan="1" class="border border-gray-300 font-semibold p-2">Cuerpo territorio</td>
                        <td colspan="2" class="border border-gray-300 p-2">
                            <?php echo h($proactividad['Proactividad']['premisados']); ?>
                        </td>

                        <td colspan="1" class="border border-gray-300 font-semibold p-2">Ciudadanía Activa</td>
                        <td colspan="2" class="border border-gray-300 p-2">
                            <?php echo h($proactividad['Proactividad']['premisatres']); ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="overflow-x-auto mt-4">
            <table class="w-full border border-gray-300 text-sm text-gray-800">
                <tbody>
                    <tr>
                        <td colspan="8" class="border border-gray-300 bg-gray-200 font-bold p-2 text-center">
                            CONTRIBUCIÓN A LAS PREMISAS
                        </td>
                    </tr>

                    <tr>
                        <td class="border border-gray-300 p-2">
                            <?php
                            $auxContPrem = strrpos(h($proactividad['Proactividad']['contpremisa']), '/');
                            if ($auxContPrem === false) {
                            ?>
                                <?php echo h($proactividad['Proactividad']['contpremisa']); ?> sin registro
                            <?php
                            } else {
                                print($proactividad['Proactividad']['contpremisa']);
                            }
                            ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="overflow-x-auto mt-4">
            <table class="w-full border border-gray-300 text-sm text-gray-800">
                <tbody>
                    <tr>
                        <td colspan="8" class="border border-gray-300 bg-gray-200 font-bold p-2 text-center">
                            RELACIÓN CON LAS PERSPECTIVAS
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2" class="border border-gray-300 font-semibold p-2">Derechos</td>
                        <td colspan="2" class="border border-gray-300 p-2">
                            <?php echo h($proactividad['Proactividad']['perspectivados']); ?>
                        </td>

                        <td colspan="3" class="border border-gray-300 font-semibold p-2">Determinación social</td>
                        <td colspan="2" class="border border-gray-300 p-2">
                            <?php echo h($proactividad['Proactividad']['perspectivauno']); ?>
                        </td>

                    </tr>
                </tbody>
            </table>
        </div>

        <div class="overflow-x-auto mt-4">
            <table class="w-full border border-gray-300 text-sm text-gray-800">
                <tbody>
                    <tr>
                        <td colspan="8" class="border border-gray-300 bg-gray-200 font-bold p-2 text-center">
                            CONTRIBUCIÓN A LAS PERSPECTIVAS
                        </td>
                    </tr>

                    <tr>
                        <td class="border border-gray-300 p-2">Participación significativa
                            <?php
                            $auxContPers = strrpos(($proactividad['Proactividad']['contperspectiva']), '/');
                            if ($auxContPers === false) {
                            ?>
                                <?php echo ($proactividad['Proactividad']['contperspectiva']); ?>
                            <?php
                            } else {
                                print($proactividad['Proactividad']['contperspectiva']);
                            }
                            ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="overflow-x-auto mt-4">
            <table class="w-full border border-gray-300 text-sm text-gray-800">
                <tbody>
                    <tr>
                        <td colspan="8" class="border border-gray-300 bg-gray-200 font-bold p-2 text-center">
                            RELACIÓN CON LOS ENFOQUES
                        </td>
                    </tr>

                    <tr>
                        <td class="border border-gray-300 font-semibold p-2 text-center bg-gray-100"><?php echo __('Territorial') ?></td>
                        <td class="border border-gray-300 p-2"><?php echo h($proactividad['Proactividad']['enfoqueuno']); ?></td>
                        <td class="border border-gray-300 font-semibold p-2 text-center bg-gray-100"><?php echo __('Poblacional'); ?></td>
                        <td class="border border-gray-300 p-2"><?php echo h($proactividad['Proactividad']['enfoquedos']); ?></td>
                        <td class="border border-gray-300 font-semibold p-2 text-center bg-gray-100"><?php echo __('Intercultural'); ?></td>
                        <td class="border border-gray-300 p-2"><?php echo h($proactividad['Proactividad']['enfoquetres']); ?></td>
                        <td class="border border-gray-300 font-semibold p-2 text-center bg-gray-100"><?php echo __('Diferencial'); ?></td>
                        <td class="border border-gray-300 p-2"><?php echo h($proactividad['Proactividad']['enfoquecuatro']); ?></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="overflow-x-auto mt-4">
            <table class="w-full border border-gray-300 text-sm text-gray-800">
                <tbody>
                    <tr>
                        <td colspan="8" class="border border-gray-300 bg-gray-200 font-bold p-2 text-center">
                            CONTRIBUCIÓN CON LOS ENFOQUES
                        </td>
                    </tr>

                    <tr>
                        <td class="border border-gray-300 p-2">Participación significativa
                            <?php
                            $auxContEnf = strrpos(h($proactividad['Proactividad']['contribucionenfoque']), '/');
                            if ($auxContEnf === false) {
                            ?>
                                <?php echo h($proactividad['Proactividad']['contribucionenfoque']); ?>
                            <?php
                            } else {
                                print($proactividad['Proactividad']['contribucionenfoque']);
                            }
                            ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="overflow-x-auto mt-4">
            <table class="w-full border border-gray-300 text-sm text-gray-800">
                <tbody>
                    <tr>
                        <td colspan="8" class="border border-gray-300 bg-gray-200 font-bold p-2 text-center">
                            COMPROMISOS GENERADOS
                        </td>
                    </tr>

                    <tr>
                        <td class="border border-gray-300 p-2">
                            <?php
                            $auxComp = strrpos(h($proactividad['Proactividad']['compromiso']), '/');
                            if ($auxComp === false) {
                            ?>
                                <?php echo h($proactividad['Proactividad']['compromiso']); ?>
                            <?php
                            } else {
                                print($proactividad['Proactividad']['compromiso']);
                            }
                            ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="overflow-x-auto mt-4">
            <table class="w-full border border-gray-300 text-sm text-gray-800">
                <tbody>
                    <tr>
                        <td colspan="8" class="border border-gray-300 bg-gray-200 font-bold p-2 text-center">
                            APORTES DE LA COMUNIDAD
                        </td>
                    </tr>

                    <tr>
                        <td class="border border-gray-300 p-2">
                            <?php
                            $auxApor = strrpos(h($proactividad['Proactividad']['aportes']), '/');
                            if ($auxApor === false) {
                            ?>
                                <?php echo h($proactividad['Proactividad']['aportes']); ?>
                            <?php
                            } else {
                                print($proactividad['Proactividad']['aportes']);
                            }
                            ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="overflow-x-auto mt-4">
            <table class="w-full border border-gray-300 text-sm text-gray-800">
                <tbody>
                    <tr>
                        <td colspan="8" class="border border-gray-300 bg-gray-200 font-bold p-2 text-center">
                            CONCLUSIONES
                        </td>
                    </tr>

                    <tr>
                        <td class="border border-gray-300 p-2">
                            <?php
                            $auxConcl = strrpos(($proactividad['Proactividad']['conclusiones']), '/');
                            if ($auxConcl === false) {
                            ?>
                                <?php echo h($proactividad['Proactividad']['conclusiones']); ?>
                            <?php
                            } else {
                                print($proactividad['Proactividad']['conclusiones']);
                            }
                            ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="overflow-x-auto mt-4">
            <table class="w-full border border-gray-300 text-sm text-gray-800">
                <tbody>
                    <tr>
                        <td colspan="8" class="border border-gray-300 bg-gray-200 font-bold p-2 text-center">
                            RELATORIA
                        </td>
                    </tr>

                    <tr>
                        <td class="border border-gray-300 p-2">
                            <?php
                            $auxConcl = strrpos(h($proactividad['Proactividad']['relatoria']), '/');
                            if ($auxConcl === false) {
                            ?>
                                <?php echo h($proactividad['Proactividad']['relatoria']); ?>
                            <?php
                            } else {
                                print($proactividad['Proactividad']['relatoria']);
                            }
                            ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="max-w-6xl mx-auto text-left mt-10">
    <h1 class="text-3xl font-bold mb-1 text-blue-600">
        Sesiones Realizadas
    </h1>
    <p class="text-gray-500 text-lg">
        <span class="font-normal">Sesiones realizadas asociadas a la sistematización de procesos</span>
    </p>
</div>

<div class="max-w-6xl mx-auto p-18 mt-8">
    <div class="bg-white shadow-2xl rounded-xl p-12 block">
        <!-- Contenido a imprimir -->
        <div class="flex items-center mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" class="p-2 bg-blue-100 rounded-lg text-blue-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clipboard-pen-icon lucide-clipboard-pen">
                <circle cx="12" cy="12" r="10" />
                <circle cx="12" cy="12" r="4" />
                <path d="M12 12h.01" />
            </svg>
            <div class="ml-4">
                <h1 class="text-xl font-semibold flex">
                    Encuentros Completados
                    <p class="pl-4
                        <?php
                            if ($conCatNumSesiones <= 3) {
                                echo 'text-red-600 font-bold';
                            } elseif ($conCatNumSesiones > 3 && $conCatNumSesiones < 6) {
                                echo 'text-yellow-600 font-bold';
                            } else {
                                echo 'text-green-600 font-bold';
                            }
                        ?>">
                        <?php echo $conCatNumSesiones; ?>
                    </p>
                </h1>
                <p class="text-gray-500">Como regla de cumplimiento el mínimo a realizar debe ser de 6 encuentros.</p>
            </div>

        </div>

        <div class="overflow-x-auto">
            <?php if (!empty($proactividad['Procesoregistro'])) : ?>
                <?php foreach ($proactividad['Procesoregistro'] as $procesoregistro) : ?>
                    <div class="mb-6">
                        <table class="w-full">
                            <tbody>
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
                                                <a href="<?php echo $this->Html->url(['controller' => 'procesoregistros', 'action' => 'edit', $procesoregistro['id']]); ?>"
                                                    class="block px-4 py-2 text-gray-700 hover:bg-gray-100 text-sm">Editar</a>
                                                <form method="post" action="<?php echo $this->Html->url(['controller' => 'procesoregistros', 'action' => 'deleteInProactividades', $procesoregistro['id'], $proactividad['Proactividad']['id']]); ?>" onsubmit="return confirm('<?php echo __('¿Está seguro/a de eliminar el registro con ID# %s?', $procesoregistro['id']); ?>');">
                                                    <?php echo $this->Form->hidden('_method', ['value' => 'POST']); ?>
                                                    <button type="submit" class="w-full text-left px-4 py-2 text-red-600 hover:bg-gray-100 text-sm">Borrar</button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr class="mt-4 bg-gray-100 ">
                                    <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center text-sm text-gray-700"> Tema</td>
                                    <td colspan="7" class="border border-gray-300 p-2 font-semibold text-blue-600 text-sm hover:underline">
                                        <?php echo $this->Html->link(strtoupper($procesoregistro['tema']), array('controller' => 'procesoregistros', 'action' => 'view', $procesoregistro['id'])); ?>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="1" class=" border border-gray-300 font-semibold p-2 text-center text-sm text-gray-700">Fecha</td>
                                    <td colspan="2" class="border border-gray-300 p-2 font-bold text-sm"><?php echo $procesoregistro['fecha']; ?></td>
                                    <td colspan="1" class=" border border-gray-300 font-semibold p-2 text-center text-sm text-gray-700">Lugar</td>
                                    <td colspan="3" class="border border-gray-300 p-2 text-sm text-gray-700"><?php echo $procesoregistro['Ubicacion']['sitio']; ?></td>
                                </tr>
                                <tr class="bg-gray-100">
                                    <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center text-sm text-gray-700">Plan de Sesion</td>
                                    <td colspan="4" class="border border-gray-300 p-2 hover:underline text-sm text-gray-700">
                                        <?php echo $this->Html->link($procesoregistro['Plsesion']['tema'], array('controller' => 'plsesiones', 'action' => 'view', $procesoregistro['Plsesion']['id'])); ?>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="1" class=" border border-gray-300 font-semibold p-2 text-center text-sm text-gray-700">Anexo</td>
                                    <td colspan="4" class="border border-gray-300 p-2 hover:underline text-sm">
                                        <a href="<?php echo $this->webroot . 'files/procesoregistro/anexo/' . $procesoregistro['sisproceso_dir'] . '/' . $procesoregistro['anexo']; ?>" target="_blank" class="text-blue-600 underline ml-2">
                                            <?php echo $procesoregistro['anexo']; ?>
                                        </a>
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
    document.addEventListener("DOMContentLoaded", function() {
        var btn = document.getElementById('btn-print');
        var printContents = document.getElementById('print-area');
        var btnHide = document.getElementById('btn-hide');
        const btnText = document.getElementById('btn-text');
        const btnIcon = document.getElementById('btn-icon');

        btn.addEventListener('click', function(e) {
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
        });



        let isEdit = true; // estado inicial: "Editar"

        btnHide.addEventListener('click', function(e) {
            e.preventDefault();
            if (isEdit) {

                // Volver a "Editar"
                btnHide.title = 'Ver Sistematización';
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