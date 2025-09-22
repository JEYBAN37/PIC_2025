<?php $this->layout = 'default'; ?>

<div class="max-w-5xl mx-auto text-center mb-8">
      <h1 class="text-5xl font-bold mb-4 text-blue-600">
            Formato Sistematización de Procesos por Encuentro
      </h1>
      <p class="text-gray-500 mb-4 text-lg">
            Visualice e imprima la información registrada en la Sistematización de Procesos por Encuentro.
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

      <button title="Ir a su sistematización" class="flex items-center space-x-2 bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700" onclick="window.location.href='<?php echo $this->Html->url(array('controller' => 'proactividades', 'action' => 'view',  $procesoregistro['Procesoregistro']['proactividad_id'])); ?>'">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-square-pen-icon lucide-square-pen">
                  <path d="M4 22h14a2 2 0 0 0 2-2V7l-5-5H6a2 2 0 0 0-2 2v4" />
                  <path d="M14 2v4a2 2 0 0 0 2 2h4" />
                  <path d="M2 15h10" />
                  <path d="m9 18 3-3-3-3" />
            </svg>
      </button>


      <button title="editar encuentro" class="flex items-center space-x-2 bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700" onclick="window.location.href='<?php echo $this->Html->url(array('action' => 'edit',  $procesoregistro['Procesoregistro']['id'])); ?>'">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-square-pen-icon lucide-square-pen">
                  <path d="M12 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" />
                  <path d="M18.375 2.625a1 1 0 0 1 3 3l-9.013 9.014a2 2 0 0 1-.853.505l-2.873.84a.5.5 0 0 1-.62-.62l.84-2.873a2 2 0 0 1 .506-.852z" />
            </svg>
      </button>


      <?php
      echo $this->Form->postLink(
            '<button title="Eliminar encuentro" class="flex items-center space-x-2 bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6"/><path d="M3 6h18"/>
          <path d="M8 6V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/>
        </svg>
    </button>',
            ['action' => 'delete', $procesoregistro['Procesoregistro']['id']],
            ['escape' => false, 'confirm' => '¿Está seguro de que desea borrar este encuentro?']
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
                                          <img src="<?php echo Router::url('/img/logo_pasto.png', true); ?>" alt="Logo Pasto" class="w-[500px] mx-auto">
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
                                    <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center">Fecha</td>
                                    <td colspan="2" class="border border-gray-300 p-2"><?php echo h($procesoregistro['Procesoregistro']['fecha']); ?></td>
                                    <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center">Hora de Inicio</td>
                                    <td colspan="2" class="border border-gray-300 p-2"><?php echo h($procesoregistro['Procesoregistro']['hora_inicio']); ?></td>
                                    <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center">Hora de Fin</td>
                                    <td colspan="2" class="border border-gray-300 p-2"><?php echo h($procesoregistro['Procesoregistro']['hora_fin']); ?></td>
                              </tr>


                              <!-- Información general -->
                              <tr class="bg-gray-100">
                                    <td colspan="2">ID PROCESO Nº</td>
                                    <td colspan="2" class="border border-gray-300 p-2">
                                          <?php echo h($procesoregistro['Procesoregistro']['id']); ?>
                                    </td>
                                    <td colspan="2" class="border border-gray-300 p-2">
                                          ID ACTIVIDAD PROCESO Nº:
                                    </td>
                                    <td colspan="4" class="border border-gray-300 p-2"><?php echo $this->Html->link($procesoregistro['Proactividad']['id'], array('controller' => 'proactividades', 'action' => 'view', $procesoregistro['Proactividad']['id'])); ?></td>
                              </tr>

                              <tr>
                                    <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center">Objetivo Sistematización</td>
                                    <td colspan="8" class="border border-gray-300 p-2">
                                          <?php echo $this->Html->div('proactividad-tema', $procesoregistro['Proactividad']['objactividad'], ['escape' => false]); ?>
                                    </td>
                              </tr>

                              <tr>
                                    <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center">Tema tratado en la sesión</td>
                                    <td colspan="8" class="border border-gray-300 p-2">
                                          <?php echo h($procesoregistro['Procesoregistro']['tema']); ?>
                                    </td>
                              </tr>


                              <tr class="bg-gray-100">
                                    <td colspan="1" class="border border-gray-300 font-semibold p-2 text-center">Lugar:</td>
                                    <td colspan="4" class="border border-gray-300 p-2">
                                          <?php echo h($procesoregistro['Ubicacion']['barrio']); ?>
                                    </td>
                                    <td colspan="5" class="border border-gray-300 p-2">
                                          <?php echo h($procesoregistro['Ubicacion']['comuna']); ?>
                                    </td>
                              </tr>

                              <tr>
                                    <td class="border border-gray-300 font-semibold p-2 text-center">Soporte actividad:</td>
                                    <td colspan="8" class="border border-gray-300 p-2 text-blue-600">
                                          <?php echo $this->Html->link('../files/procesoregistro/anexo/' . $procesoregistro['Procesoregistro']['sisproceso_dir'] . '/' . $procesoregistro['Procesoregistro']['anexo']); ?>
                                    </td>
                              </tr>

                              <tr class="bg-gray-100">
                                    <td colspan="1" class="border border-gray-300 font-semibold p-2">ID Plan de sesión</td>
                                    <td colspan="2" class="border border-gray-300 p-2">
                                          <?php echo $this->Html->link($procesoregistro['Plsesion']['id'], array('controller' => 'plsesiones', 'action' => 'view', $procesoregistro['Plsesion']['id'])); ?>
                                    </td>
                                    <td colspan="1" class="border border-gray-300 font-semibold p-2">Creado</td>
                                    <td colspan="2" class="border border-gray-300 p-2">
                                          <?php echo h($procesoregistro['Procesoregistro']['created']); ?>
                                    </td>
                                    <td colspan="1" class="border border-gray-300 font-semibold p-2">Modificado</td>
                                    <td colspan="2" class="border border-gray-300 p-2">
                                          <?php echo h($procesoregistro['Procesoregistro']['modified']); ?>
                                    </td>
                              </tr>

                              <tr>
                                    <td class="border border-gray-300 font-semibold p-2 text-center">Evidencias Documentales</td>
                                    <td colspan="8" class="border border-gray-300 p-2">
                                          <div class="flex flex-wrap gap-2 w-full">
                                                <?php if (!empty($files['otherFiles'])): ?>
                                                      <?php foreach ($files['otherFiles'] as $file): ?>
                                                            <?php
                                                            // Elimina el prefijo "C:/xampp/htdocs/PIC/" si existe
                                                            $webPath = str_replace('C:/xampp/htdocs/PIC/webroot', '', $file);
                                                            // Asegura que la ruta comience con "webroot/"
                                                            if (strpos($webPath, 'webroot/') !== 0) {
                                                                  $webPath = 'webroot/' . ltrim($webPath, '/');
                                                            }
                                                            // Construye la URL absoluta
                                                            $url = $this->Html->url('/' . $webPath, true);
                                                            ?>
                                                            <?php echo $this->Html->link(
                                                                  basename($file),
                                                                  $url,
                                                                  ['target' => '_blank', 'rel' => 'noopener noreferrer', 'class' => 'underline']
                                                            ); ?>
                                                      <?php endforeach; ?>
                                                <?php else: ?>
                                                      <p>No se encontraron imágenes en el archivo comprimido.</p>
                                                <?php endif; ?>
                                          </div>
                                    </td>
                              </tr>
                              </tr>


                              <tr>
                                    <td class="border border-gray-300 font-semibold p-2 text-center">Evidencias Fotograficas</td>
                                    <td colspan="8" class="border border-gray-300 p-2">
                                          <div class="flex flex-wrap gap-4 justify-center w-full">
                                                <?php if (!empty($files['images'])): ?>
                                                      <?php foreach ($files['images'] as $img): ?>


                                                            <?php $data = base64_encode(file_get_contents($img));
                                                            echo '<img src="data:image/jpeg;base64,' . $data . '" class="max-w-xs max-h-24 object-contain" />'; ?>
                                                      <?php endforeach; ?>
                                                <?php else: ?>
                                                      <p>No se encontraron imágenes en el archivo comprimido.</p>
                                                <?php endif; ?>
                                          </div>
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

                  // Estilos para impresión
                  w.document.write('<style>@media print { body { margin: 0; } .bg-white { box-shadow: none !important; } table { page-break-inside:auto; } tr { page-break-inside:avoid; page-break-after:auto; } .page-break { page-break-before:always; } }</style>');
                  w.document.write('</head><body style="margin:0;padding:0;">');
                  w.document.write('<div style="width:100vw;max-width:100%;box-sizing:border-box;">' + printContents.innerHTML + '</div>');
                  w.document.write('</body></html>');
                  w.document.close();
                  w.focus();
                  w.print();

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

      window.addEventListener("beforeunload", function() {
            // Con fetch + keepalive (moderno y soportado)
            fetch("<?php echo $this->Html->url(['controller' => 'procesoregistros', 'action' => 'cleanupTmp']); ?>", {
                  method: "POST",
                  keepalive: true
            });
      });
</script>