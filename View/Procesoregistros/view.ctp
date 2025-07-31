<?php $this->layout = 'printactividades' ?>

<h3>Plan de intervenciones colectivas</h3>
<p>Sistematización de Procesos por taller</p>

<div class="btn-group">
      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
            <?php echo __('Acciones'); ?> <span class="caret"></span>
      </button>
      <ul class="dropdown-menu" role="menu">
            <li><a href="../../users/home"> Home</a> </li>
            <li><?php echo $this->Html->link(__('Regresar a registros'), array('controller' => 'sistematizacionprocesosviewtests', 'action' => 'nuebus')); ?> </li>
            <li><?php echo $this->Html->link(__('Editar sesión'), array('action' => 'edit', $procesoregistro['Procesoregistro']['id'])); ?> </li>
            <li><?php echo $this->Html->link(__('Editar sistematización'), array( 'controller' => 'proactividades', 'action' => 'edit', $procesoregistro['Proactividad']['id'])); ?></li>

          
            <li><?php echo $this->Html->link(__('Actualizar anexo'), array('action' => 'editanexo', $procesoregistro['Procesoregistro']['id'])); ?> </li>            <li>
            <td><?php echo $this->Form->postLink(__('Borrar registro'), array('action' => 'delete', $procesoregistro['Procesoregistro']['id']), array(), __('Esta seguro/a de eliminar registro con ID# %s?', $procesoregistro['Procesoregistro']['id'])); ?>
            </li>
            <li class="divider"></li>
            <li><a href="javascript:window.print();" > Imprimir</a> </li>            
            <li><a class="copi" href="javascript:getlink();">Copiar URL</a> </li>

      </ul>
</div>



<table class="table-hover table-striped table-bordered">
      

      <thead>

      
        <tr>
        <td rowspan="4"><img src="../../img/logo_Pasto.png" width="110" height="auto" ></td></tr>
         <tr><td colspan="8">PROCESO SALUD PÚBLICA</td></tr>
         <tr><td colspan="8">NOMBRE DEL FORMATO:SISTEMATIZACIÓN ACTIVIDADES PIC</td></tr>
         <tr>   <td>VIGENCIA: 2020</td>
            <td>VERSION:XX</td>
            <td colspan="3">CÓDIGO: SP-F-XXX</td>
            <td colspan="2">PÁGINA:</td>

        </tr>
    



            <tr>
                 
                  <th colspan="3">FECHA</th>
                  <th>HORA INICIO</th>
                  <th>HORA FINAL</th>
                  <th>ID PROCESO Nº</th>
                  <th colspan="3" >ID ACTIVIDAD PROCESO Nº</th>


            </tr>

            <tr>
                  <td colspan="3"><?php echo h($procesoregistro['Procesoregistro']['fecha']); ?></td>
                  <td><?php echo h($procesoregistro['Procesoregistro']['hora_inicio']); ?></td>
                  <td><?php echo h($procesoregistro['Procesoregistro']['hora_fin']); ?></td>
                  <td><?php echo h($procesoregistro['Procesoregistro']['id']); ?></td>
                  <td colspan="3"><?php echo $this->Html->link($procesoregistro['Proactividad']['id'], array('controller' => 'proactividades', 'action' => 'view', $procesoregistro['Proactividad']['id'])); ?></td>
            </tr>
            <tr>
                  <th>Objetivo Sistematización</th>
                  <td colspan="7"><?php echo h($procesoregistro['Proactividad']['objactividad']); ?></td>
            </tr>

            <tr>
                  <th>Tema tratado en la sesion</th>
                  <td colspan="7"><?php echo h($procesoregistro['Procesoregistro']['tema']); ?></td>
            </tr>

            <tr>
                  <th>Lugar</th>
                  <td colspan="4"><?php echo h($procesoregistro['Ubicacion']['barrio']); ?></td>
                  <td colspan="5"><?php echo h($procesoregistro['Ubicacion']['comuna']); ?></td>
                

            </tr>


            <tr>
                  <th colspan="2">Soporte actividad</th>
                  <td colspan="6"> <?php echo $this->Html->link('../files/procesoregistro/anexo/' . $procesoregistro['Procesoregistro']['sisproceso_dir'] . '/' . $procesoregistro['Procesoregistro']['anexo']); ?> </td>

            </tr>

            <tr>
                  <th colspan="2"> ID Plan de sesión</th>
                  <td colspan="2"> <?php echo $this->Html->link($procesoregistro['Plsesion']['id'], array('controller' => 'plsesiones', 'action' => 'view', $procesoregistro['Plsesion']['id'])); ?></td>
                 
                  <th> Creado</th>
                  <td><?php echo h($procesoregistro['Procesoregistro']['created']); ?></td>  <th> Mofificado</th><td> <?php echo h($procesoregistro['Procesoregistro']['modified']); ?>

                  </td>
            </tr>


           
      </thead>

</table>
