<?php $this->layout = 'default' ?>

<div class="max-w-5xl mx-auto text-center mb-8">
    <h1 class="text-5xl font-bold mb-4 text-blue-600">
        Formato Actas
    </h1>
    <p class="text-gray-500 mb-4 text-lg">
        Visualice e imprima la información registrada en las actas.
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

    <button title="Ir a listado de eventos" class="flex items-center space-x-2 bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700" onclick="window.location.href='<?php echo $this->Html->url(array('controller' => 'actas', 'action' => 'index')); ?>'">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-square-pen-icon lucide-square-pen">
            <path d="M4 22h14a2 2 0 0 0 2-2V7l-5-5H6a2 2 0 0 0-2 2v4" />
            <path d="M14 2v4a2 2 0 0 0 2 2h4" />
            <path d="M2 15h10" />
            <path d="m9 18 3-3-3-3" />
        </svg>
    </button>


    <?php
    if ($tipoUsuario === '3' || $tipoUsuario === '1') :
    ?>
        <button title="Editar Acta" class="flex items-center space-x-2 bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700" onclick="window.location.href='<?php echo $this->Html->url(array('action' => 'edit', $acta['Acta']['id'])); ?>'">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-square-pen-icon lucide-square-pen">
                <path d="M12 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" />
                <path d="M18.375 2.625a1 1 0 0 1 3 3l-9.013 9.014a2 2 0 0 1-.853.505l-2.873.84a.5.5 0 0 1-.62-.62l.84-2.873a2 2 0 0 1 .506-.852z" />
            </svg>
        </button>
    <?php

        echo $this->Form->postLink(
            '<button title="Eliminar evento" class="flex items-center space-x-2 bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6"/><path d="M3 6h18"/>
          <path d="M8 6V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/>
        </svg>
    </button>',
            ['action' => 'delete', $acta['Acta']['id']],
            ['escape' => false, 'confirm' => '¿Está seguro de que desea borrar este encuentro?']
        );
    endif;
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
                            <img src="../../img/logo_Pasto.png" alt="Logo Pasto" class="w-[200px] mx-auto">
                        </td>
                        <td colspan="8" class="border border-gray-300 font-bold text-center p-2">
                            PROCESO SALUD PÚBLICA
                        </td>
                    </tr>
                    <tr>
                        <td colspan="8" class="border border-gray-300 font-semibold text-center p-2">
                            NOMBRE DEL FORMATO: ACTA REUNIÓN
                        </td>
                    </tr>

                    <tr>
                        <td colspan="3" class="border border-gray-300 p-2">VIGENCIA: 2025</td>
                        <td colspan="2" class="border border-gray-300 p-2">VERSIÓN: </td>
                        <td colspan="2" class="border border-gray-300 p-2">CÓDIGO: </td>
                        <td colspan="1" class="border border-gray-300 py-2 pr-12 pl-2"> <span class="font-semibold">Página:</span></td>
                    </tr>



                    <tr class="bg-gray-100">
                        <td rowspan="2" class="border border-gray-300 font-semibold p-2 text-center">
                            Fecha
                        </td>
                        <td colspan="3" class="border border-gray-300 font-semibold p-2 text-center">Fecha</td>
                        <td colspan="2" class="border border-gray-300 font-semibold p-2 text-center">Hora inicio</td>
                        <td colspan="2" class="border border-gray-300 font-semibold p-2 text-center">Hora final</td>
                        <td colspan="2" class="border border-gray-300 font-semibold p-2 text-center">Acta Nº</td>
                    </tr>
                    <tr>
                        <td colspan="3" class="border border-gray-300 p-2"><?php echo ($acta['Acta']['fecha']); ?></td>
                        <td colspan="2" class="border border-gray-300 p-2"><?php echo ($acta['Acta']['hora_inicio']); ?></td>
                        <td colspan="2" class="border border-gray-300 p-2"><?php echo ($acta['Acta']['hora_fin']); ?></td>
                        <td colspan="2" class="border border-gray-300 p-2 text-center"><?php echo ($acta['Acta']['id']); ?></td>
                    </tr>

                    <tr>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center">Responsable:</td>
                        <td colspan="8" class="border border-gray-300 p-2">
                            <?php echo h($acta['Responsable']['nombres']); ?>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center">Nombre de la Reunión:</td>
                        <td colspan="8" class="border border-gray-300 p-2">
                            <?php echo h($acta['Acta']['tema']); ?>
                        </td>
                    </tr>

                    <tr class="bg-gray-100">
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center">Tema:</td>
                        <td colspan="8" class="border border-gray-300 p-2">
                            <?php echo h($acta['Acta']['objactividad']); ?>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center">Proposito:</td>
                        <td colspan="8" class="border border-gray-300 p-2">
                            <?php echo h($acta['Acta']['alcancereunion']); ?>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center">Lugar:</td>
                        <td colspan="3" class="border border-gray-300 p-2">
                            <?php echo h($acta['Acta']['lugar']); ?>
                        </td>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center">Barrio:</td>
                        <td colspan="2" class="border border-gray-300 p-2">
                            <?php echo h($acta['Ubicacion']['barrio']); ?>
                        </td>
                        <td colspan="2" class="border border-gray-300 p-2">
                            <?php echo h($acta['Ubicacion']['comuna']); ?>
                        </td>
                    </tr>

                    <tr class="bg-gray-100">
                        <td colspan="9" class="border border-gray-300 p-2 text-center font-semibold">
                            <?php echo __('PERSONAS QUE INTERVIENEN EN LA REUNIÓN'); ?>
                        </td>
                    </tr>


                    <tr class="bg-gray-100">
                        <td colspan="3" class="border border-gray-300 p-2 text-center font-semibold">NOMBRE</td>
                        <td colspan="2" class="border border-gray-300 p-2 text-center font-semibold">CARGO</td>
                        <td colspan="2" class="border border-gray-300 p-2 text-center font-semibold">INSTITUCION</td>
                        <td colspan="2" class="border border-gray-300 p-2 text-center font-semibold">FIRMA</td>
                    </tr>

                    <tr>
                        <td colspan="3" class="border border-gray-300 p-2">1.</td>
                        <td colspan="2" class="border border-gray-300 p-2 text-center"></td>
                        <td colspan="2" class="border border-gray-300 p-2 text-center"></td>
                        <td colspan="2" class="border border-gray-300 p-2 text-center"></td>

                    </tr>
                    <tr>
                        <td colspan="3" class="border border-gray-300 p-2">2.</td>
                        <td colspan="2" class="border border-gray-300 p-2 text-center"></td>
                        <td colspan="2" class="border border-gray-300 p-2 text-center"></td>
                        <td colspan="2" class="border border-gray-300 p-2 text-center"></td>

                    </tr>
                    <tr>
                        <td colspan="3" class="border border-gray-300 p-2">3.</td>
                        <td colspan="2" class="border border-gray-300 p-2 text-center"></td>
                        <td colspan="2" class="border border-gray-300 p-2 text-center"></td>
                        <td colspan="2" class="border border-gray-300 p-2 text-center"></td>

                    </tr>
                    <tr>
                        <td colspan="9" class="border border-gray-300 p-2 font-semibold">Anexo registro de asistencia demás participantes</td>
                    </tr>
                </tbody>
            </table>
        </div>


        <div class="overflow-x-auto mt-4">
            <table class="w-full border border-gray-300 text-sm text-gray-800">
                <tbody>
                    <tr>
                        <td colspan="8" class="border border-gray-300 bg-gray-100 font-bold p-2 text-center">
                            ORDEN DEL DÍA
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 p-2">
                            <?php
                            $ordenDia = $acta['Acta']['ordendia'];
                            // Divide la cadena en una lista usando expresiones regulares para detectar números seguidos de punto o paréntesis
                            $items = preg_split('/\s*(\d+[\.\)]\s*)/', $ordenDia, -1, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);

                            echo '<ol class="list-decimal ml-6 text-left">';
                            for ($i = 0; $i < count($items); $i++) {
                                // Si el elemento es un número (por ejemplo, "1." o "2)")
                                if (preg_match('/^\d+[\.\)]$/', trim($items[$i]))) {
                                    // El siguiente elemento es el texto del punto
                                    $texto = isset($items[$i + 1]) ? trim($items[$i + 1]) : '';
                                    if ($texto !== '') {
                                        echo '<li>' . h($texto) . '</li>';
                                    }
                                    $i++; // Saltar el texto ya procesado
                                }
                            }
                            echo '</ol>';
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
                        <td colspan="8" class="border border-gray-300 bg-gray-100 font-bold p-2 text-center">
                            COMPROMISOS PREVIOS
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 p-2">
                            <?php echo ($acta['Acta']['compromisosprevios']); ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="overflow-x-auto mt-4">
            <table class="w-full border border-gray-300 text-sm text-gray-800">
                <tbody>
                    <tr>
                        <td colspan="8" class="border border-gray-300 bg-gray-100 font-bold p-2 text-center">
                            DESARROLLO DE LA REUNIÓN
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 p-2">
                            <?php
                            $auxDsr = strrpos(($acta['Acta']['desarrollo']), '/');
                            if ($auxDsr === false) {
                            ?>
                                <textarea class="ckeditor" readonly><?php echo ($acta['Acta']['desarrollo']); ?></textarea> <?php
                                                                                                                        } else {
                                                                                                                            print($acta['Acta']['desarrollo']);
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
                        <td colspan="8" class="border border-gray-300 bg-gray-100 font-bold p-2 text-center">
                            COMPROMISOS
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 p-2">
                            <?php
                            $auxComp = strrpos(($acta['Acta']['compromiso']), '/');
                            if ($auxComp === false) {
                            ?>
                                <textarea readonly id="" style="margin: 0px; width: 980px; height: 100px;"><?php echo ($acta['Acta']['compromiso']); ?></textarea> <?php
                                                                                                                                                                } else {
                                                                                                                                                                    print($acta['Acta']['compromiso']);
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
                        <td colspan="8" class="border border-gray-300 bg-gray-100 font-bold p-2 text-center">
                            PRÓXIMA CONVOCATORIA
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 p-2">
                            <?php echo ($acta['Acta']['convocatoria']); ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="overflow-x-auto mt-4">
            <table class="w-full border border-gray-300 text-sm text-gray-800">
                <tbody>
                    <tr>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center">
                            Anexo
                        </td>
                        <td colspan="8" class="border border-gray-300 p-2 cursor-pointer text-blue-600 underline">
                            <?php echo $this->Html->link('../files/acta/anexo/' . $acta['Acta']['dir'] . '/' . $acta['Acta']['anexo']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center">
                            Grupo tematico:
                        </td>
                        <td colspan="8" class="border border-gray-300 p-2">
                            <?php echo ($acta['Producto']['nombredim']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center">
                            Actividad:
                        </td>
                        <td colspan="8" class="border border-gray-300 p-2">
                            <?php echo ($acta['Producto']['resultado']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center">
                            Entorno:
                        </td>
                        <td colspan="8" class="border border-gray-300 p-2">
                            <?php echo ($acta['Producto']['entorno']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center">
                            Tarea:
                        </td>
                        <td colspan="8" class="border border-gray-300 p-2">
                            <?php echo ($acta['Producto']['tarea']); ?>
                        </td>
                    </tr>

                    <tr class="bg-gray-100">
                        <td colspan="2" class="border border-gray-300 p-2 font-semibold">
                            <?php echo __('Fecha digitación:    '); ?>
                        </td>
                        <td colspan="2" class="border border-gray-300 p-2">
                            <?php echo ($acta['Acta']['created']); ?>
                        </td>
                        <td colspan="1" class="border border-gray-300 p-2 font-semibold">
                            <?php echo __('Fecha actualización:'); ?>
                        </td>
                        <td colspan="3">
                            <?php echo ($acta['Acta']['modified']); ?>
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

    function getlink() {
        const url = window.location.href;
        if (navigator.clipboard) {
            navigator.clipboard.writeText(url).then(function() {
                alert('URL copiada al portapapeles');
            }, function(err) {
                alert('No se pudo copiar la URL');
            });
        } else {
            // Fallback para navegadores antiguos
            const tempInput = document.createElement('input');
            tempInput.value = url;
            document.body.appendChild(tempInput);
            tempInput.select();
            try {
                document.execCommand('copy');
                alert('URL copiada al portapapeles');
            } catch (err) {
                alert('No se pudo copiar la URL');
            }
            document.body.removeChild(tempInput);
        }
    }
</script>