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
    <button type="button" id="btn-print" class="flex w-32 items-center space-x-2 bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-printer-icon lucide-printer">
            <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2" />
            <path d="M6 9V3a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v6" />
            <rect x="6" y="14" width="12" height="8" rx="1" />
        </svg>
        <p>Imprimir</p>
    </button>
    <button class="flex w-32 items-center space-x-2 bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700" onclick="window.location.href='<?php echo $this->Html->url(array('action' => 'edit', $proactividad['Proactividad']['id'])); ?>'">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-square-pen-icon lucide-square-pen">
            <path d="M12 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" />
            <path d="M18.375 2.625a1 1 0 0 1 3 3l-9.013 9.014a2 2 0 0 1-.853.505l-2.873.84a.5.5 0 0 1-.62-.62l.84-2.873a2 2 0 0 1 .506-.852z" />
        </svg>
        <p>Editar</p>
    </button>

    <button type="button" id="btn-hide"
        class="flex items-center w-32 space-x-2 bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
        <svg id="btn-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye-icon lucide-eye">
            <path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0" />
            <circle cx="12" cy="12" r="3" />
        </svg>
        <p id="btn-text">Ver</p>
    </button>
</div>

<div class="max-w-6xl mx-auto p-18">
    <div class="bg-white shadow-2xl rounded-xl p-12 hidden" id="print-area">
        <!-- Contenido a imprimir -->
        <div class="overflow-x-auto">
            <table class="w-full border border-gray-300 text-sm text-gray-800">
                <tbody>
                    <!-- Encabezado con logo y datos -->
                    <tr>
                        <td rowspan="3" class="border border-gray-300 p-2 text-center align-top">
                            <img src="../../img/logo_Pasto.png" alt="Logo Pasto" class="w-28 mx-auto">
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
                        <td colspan="3" class="border border-gray-300 p-2">VIGENCIA: 2021</td>
                        <td colspan="2" class="border border-gray-300 p-2">VERSIÓN: XX</td>
                        <td colspan="2" class="border border-gray-300 p-2">CÓDIGO: SP-F-XXX</td>
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
            w.document.write('<div style="width:100vw;max-width:100%;box-sizing:border-box;">' + printContents + '</div>');
            w.document.write('</body></html>');
            w.document.close();
            w.focus();
            w.print();
        });



        let isEdit = true; // estado inicial: "Editar"

        btnHide.addEventListener('click', function(e) {
            e.preventDefault();
            if (isEdit) {
                // Cambiar a "Guardar"
                btnText.textContent = 'Ocultar';
                btnIcon.innerHTML = `
               <path d="m15 18-.722-3.25"/><path d="M2 8a10.645 10.645 0 0 0 20 0"/><path d="m20 15-1.726-2.05"/><path d="m4 15 1.726-2.05"/>
               <path d="m9 18 .722-3.25"/>
            `;
            } else {
                // Volver a "Editar"
                btnText.textContent = 'Ver';
                btnIcon.innerHTML = `
                 <path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0" />
                    <circle cx="12" cy="12" r="3" />
            `;
            }
            isEdit = !isEdit;
            printContents.classList.toggle('hidden');
            printContents.classList.toggle('block');
        });
    });
</script>


<?php
// IMPORTANTE: Cambiar la informacion de datos de conexion
$serv = 'localhost';
$port = '3306';
$userS = 'root';
$passS = '';
$bd = 'cake_Pic_2025';
?>



<div class="panel panel-default table-responsive">

    <div class="panel-body table-responsive">
        <div class="dataTable_wrapper">


            <div class="col-sm-11 table-responsive">
                <thead>

                    <table width="100%" class="table table-striped table-bordered table-hover table-responsive">



                        <tr>
                            <td rowspan="4"><img src="../../img/logo_Pasto.png" width="110" height="auto"></td>
                        </tr>
                        <tr>
                            <td colspan="8">PROCESO SALUD PÚBLICA</td>
                        </tr>
                        <tr>
                            <td colspan="8">NOMBRE DEL FORMATO:SISTEMATIZACIÓN ACTIVIDADES PIC</td>
                        </tr>
                        <tr>
                            <td>VIGENCIA: 2021</td>
                            <td>VERSION:XX</td>
                            <td colspan="3">CÓDIGO: SP-F-XXX</td>
                            <td colspan="2">PÁGINA:</td>

                        </tr>

                        <tr>

                            <td colspan="5"><?php echo __('Ficha de sistematización de procesos, se diligencia y complementa durante y hasta finalizar el proceso formativo o educativo'); ?></td>
                            <td><?php echo __('Id sistematización:'); ?></td>
                            <td><?php echo h($proactividad['Proactividad']['id']); ?></td>
                        </tr>

                        <tr>
                            <td><?php echo __('Dimensión:'); ?></td>
                            <td colspan="3"><?php echo h($proactividad['Producto']['dimensiones']); ?></td>
                            <td>Entorno:<?php echo h($proactividad['Producto']['entorno']); ?></td>
                            <td><?php echo __('Producto:'); ?></td>
                            <td colspan="2"><?php echo h($proactividad['Producto']['activity']); ?></td>



                        </tr>
                        <tr>
                            <td><?php echo __('Tarea:'); ?></td>
                            <td colspan="3"><?php echo $this->Html->link($proactividad['Producto']['tarea'], array('controller' => 'productos', 'action' => 'view', $proactividad['Producto']['id'])); ?></td>

                            <td><?php echo __('Producto relacionado:'); ?></td>
                            <td colspan="3"><?php echo h($proactividad['Proactividad']['producto1']); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo __('Tema:'); ?></td>
                            <td colspan="6"><?php echo h($proactividad['Proactividad']['objactividad']); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo __('Grupo participante:'); ?></td>
                            <td colspan="6"><?php echo h($proactividad['Proactividad']['grupo']); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo __('Caracteristica población:'); ?></td>
                            <td colspan="6"><?php echo h($proactividad['Proactividad']['poblaciones']); ?></td>
                        </tr>

                    </table>


                    <table width="100%" class="table table-striped table-bordered table-hover">


                        <tr>
                            <td><?php echo __('Objetivo:'); ?></td>
                            <td colspan="6"><?php echo h($proactividad['Proactividad']['objactividad']); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo __('Objetivo especificos:'); ?></td>
                            <td colspan="6"><?php echo h($proactividad['Proactividad']['objetivoespecifico']); ?></td>
                        </tr>

                        <tr>
                            <td><?php echo __('Caracteristica de sesión:') ?></td>
                            <td colspan="4"><?php echo h($proactividad['Proactividad']['caracteristicasesion']); ?></td>
                            <td colspan="2"><?php echo __('Otro tipo:'); ?>
                                <?php echo h($proactividad['Proactividad']['otrocual']); ?></td>
                        </tr>


                        <tr>
                            <td colspan="8"> <?php echo __('RELACION CON LOS OBJETIVOS DE LA ESTRATEGIA') ?></td>
                        </tr>
                        <tr>
                            <td><?php echo __('Individual') ?></td>
                            <td><?php echo h($proactividad['Proactividad']['objetivouno']); ?></td>
                            <td><?php echo __('Comunitario'); ?></td>
                            <td colspan="2"><?php echo h($proactividad['Proactividad']['objetivodos']); ?></td>
                            <td><?php echo __('Institucional'); ?></td>
                            <td colspan="2"><?php echo h($proactividad['Proactividad']['objetivotres']); ?></td>
                        </tr>
                    </table>

                    <table width="100%" class="table table-striped table-bordered table-hover">

                    </table>



                    <table width="100%" class="table table-striped table-bordered table-hover">
                        <tr>
                            <td colspan="8">CONTRIBUCIÓN A LAS PREMISAS</td>
                        </tr>
                        <tr>
                            <td>
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
                    </table>

                    <table width="100%" class="table table-striped table-bordered table-hover">
                        <tr>
                            <td colspan="8"> <?php echo __('RELACIÓN CON LAS PERSPECTIVAS') ?></td>
                        </tr>
                        <tr>
                            <td><?php echo __('Derechos') ?></td>
                            <td><?php echo h($proactividad['Proactividad']['perspectivados']); ?></td>
                            <td><?php echo __('Determinación social'); ?></td>
                            <td><?php echo h($proactividad['Proactividad']['perspectivauno']); ?></td>
                        </tr>
                    </table>

                    <table width="100%" class="table table-striped table-bordered table-hover">
                        <tr>
                            <td colspan="8">CONTRIBUCIÓN A LAS PERSPECTIVAS</td>
                        </tr>
                        <tr>
                            <td>
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
                    </table>

                    <table width="100%" class="table table-striped table-bordered table-hover">
                        <tr>
                            <td colspan="8"> <?php echo __('RELACIÓN CON LOS ENFOQUES') ?></td>
                        </tr>
                        <tr>
                            <td><?php echo __('Territorial') ?></td>
                            <td><?php echo h($proactividad['Proactividad']['enfoqueuno']); ?></td>
                            <td><?php echo __('Poblacional'); ?></td>
                            <td><?php echo h($proactividad['Proactividad']['enfoquedos']); ?></td>
                            </td>
                            <td><?php echo __('Intercultural'); ?></td>
                            <td><?php echo h($proactividad['Proactividad']['enfoquetres']); ?></td>
                            </td>
                            <td><?php echo __('Diferencial'); ?></td>
                            <td><?php echo h($proactividad['Proactividad']['enfoquecuatro']); ?></td>
                        </tr>
                    </table>

                    <table width="100%" class="table table-striped table-bordered table-hover">
                        <tr>
                            <td colspan="8">CONTRIBUCIÓN CON LOS ENFOQUES</td>
                        </tr>
                        <tr>
                            <td>
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
                    </table>


                    <table width="100%" class="table table-striped table-bordered table-hover">
                        <tr>
                            <td colspan="8">COMPROMISOS GENERADOS</td>
                        </tr>
                        <tr>
                            <td>
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
                    </table>

                    <table width="100%" class="table table-striped table-bordered table-hover">
                        <tr>
                            <td colspan="8">APORTES DE LA COMUNIDAD</td>
                        </tr>
                        <tr>
                            <td>
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
                    </table>

                    <table width="100%" class="table table-striped table-bordered table-hover">
                        <tr>
                            <td colspan="8">CONCLUSIONES</td>
                        </tr>
                        <tr>
                            <td>
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
                    </table>

                    <table width="100%" class="table table-striped table-bordered table-hover">
                        <tr>
                            <td colspan="8">RELATORIA</td>
                        </tr>
                        <tr>
                            <td>
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
                    </table>



                    <table width="100%" class="table table-striped table-bordered table-hover">




                        <table width="100%" class="table table-striped table-bordered table-hover">
                            <h3><?php echo __('Sesiones realizadas asociados a la sitematizacion de proceso'); ?></h3>
                            <?php if (!empty($proactividad['Procesoregistro'])) : ?>
                                <table width="100%" class="table table-striped table-bordered table-hover">
                                    <tr>
                                        <th><?php echo __('Id'); ?></th>
                                        <th><?php echo __('Fecha'); ?></th>
                                        <th><?php echo __('Tematica'); ?></th>
                                        <th><?php echo __('Barrio/vda/corregimiento'); ?></th>
                                        <th><?php echo __('Plsesion Id'); ?></th>
                                        <th><?php echo __('Anexo'); ?></th>
                                        <th><?php echo __('Sisproceso Dir'); ?></th>


                                        <th class="actions"><?php echo __('Acciones'); ?></th>
                                    </tr>
                                    <?php foreach ($proactividad['Procesoregistro'] as $procesoregistro) : ?>
                                        <tr>
                                            <td><?php echo $procesoregistro['id']; ?></td>
                                            <td><?php echo $procesoregistro['fecha']; ?></td>
                                            <td><?php echo $procesoregistro['tema']; ?></td>
                                            <td><?php
                                                //echo $actividad['ubicacion_id']; 
                                                $link = mysqli_connect($serv, $userS, $passS);
                                                mysqli_select_db($link, $bd);
                                                $tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente
                                                $result = mysqli_query($link, "SELECT barrio FROM Ubicaciones WHERE id = " . $procesoregistro['ubicacion_id']);
                                                while ($fila = mysqli_fetch_array($result)) {
                                                    echo $fila['barrio'];
                                                    mysqli_close($link);
                                                }
                                                ?></td>

                                            <td><?php echo $procesoregistro['plsesion_id']; ?></td>
                                            <td><?php echo $procesoregistro['anexo']; ?></td>
                                            <td><?php echo $procesoregistro['sisproceso_dir']; ?></td>

                                            <td class="acciones">



                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                        <?php echo __('Acciones'); ?> <span class="caret"></span>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><?php echo $this->Html->link(__('Ver'), array('controller' => 'procesoregistros', 'action' => 'view', $procesoregistro['id'])); ?></li>
                                                        <li><?php echo $this->Html->link(__('Editar'), array('controller' => 'procesoregistros', 'action' => 'edit', $procesoregistro['id'])); ?> </li>




                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>









                                <?php endif; ?>
                                </table>
                        </table>
                </thead>

            </div>

        </div>
    </div>


</div>



<script type="text/javascript">
    $(document).ready(function() {
        $('textarea').each(function() {
            this.setAttribute('style', 'height:' + (this.scrollHeight) + 'px;overflow-y:hidden;');
        }).on('input', function() {
            this.style.height = 'auto';
            this.style.height = (this.scrollHeight) + 'px';
        });

    });
</script>