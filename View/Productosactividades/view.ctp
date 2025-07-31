<?php $this->layout = 'print_tarea_anexo'?>
<div class="productosactividades view" >


  <table class="table-hover table-striped table-bordered"> <!-- Lo cambiaremos por CSS -->
           <tr>
              <td>FECHA</td>
              <td>PROCESO</td>
              <td>DIMENSION</td>
              <td>REGISTRO Nº</td>
          </tr>
           <tr>
             
              <td><?php echo h($productosactividad['Productosactividad']['fecha']); ?></td>
              <td><?php echo h($productosactividad['Productosactividad']['proceso']); ?></td>
              <td><?php echo h($productosactividad['Productosactividad']['dim']); ?></td>
              <td><?php echo h($productosactividad['Productosactividad']['id']); ?></td>

          </tr>
          <tr>
              <td><?php echo __('NOMBRE PRODUCTO'); ?></td>
              <td colspan="3"><?php echo h($productosactividad['Productosactividad']['pro']); ?> </td>
                            
          </tr>
          <tr>
          <td><?php echo __('TAREA'); ?></td>
              <td colspan="3"><?php echo h($productosactividad['Productosactividad']['task']); ?> </td>
              </tr>
          <tr>
              <td><?php echo __('SOPORTE SEGUN ANEXO'); ?></td>
              
              <td colspan="3"><?php echo h($productosactividad['Producto']['evidencia']); ?></td>
                     
              
          </tr>
            <tr>
              <td rowspan="2"><?php echo __('CUMPLIMIENTO TAREA'); ?></td>
              <td colspan="1" >Cumplimento según Anexo</td>
              <td colspan="2" >Cumplimiento alcanzado</td>
          </tr>
           <tr>
          
              <td colspan="1" ><?php echo h($productosactividad['Productosactividad']['porcentaje_act']); ?>&nbsp;<?php echo __('%'); ?> </td>
              <td colspan="2" ><?php echo h($productosactividad['Productosactividad']['porcentaje']); ?>&nbsp;<?php echo __('%'); ?> </td>                                                                   
              </tr>

           

        </table>

        <table  class="table-hover table-striped table-bordered">

          <tr>
              <td colspan="8">OBSERVACION</td>                                     
          </tr>

         <tr> <td >

 <?php
                $auxContEnf = strrpos(h($productosactividad['Productosactividad']['observacion']), '/');
                if ($auxContEnf === false) {
                    ?>
                    <textarea readonly id="" style="margin: 0px; width: 980px; height: 100px;"><?php echo h($productosactividad['Productosactividad']['observacion']); ?></textarea>
                    <?php
                } else {
                    print ($productosactividad['Productosactividad']['observacion']);
                }
                ?>





</td></tr>

          <td >SOPORTES</td>

          <tr><td ><?php echo __('Sistematización: '); ?></dt><?php echo $this->Html->link($productosactividad['Actividad']['tema'], array('controller' => 'actividades', 'action' => 'view', $productosactividad['Actividad']['id'])); ?></dd> </td></tr>

          <tr><td ><?php echo __('Acta: '); ?></dt><?php echo $this->Html->link($productosactividad['Acta']['tema'], array('controller' => 'actas', 'action' => 'view', $productosactividad['Acta']['id'])); ?></td></tr>

          <tr><td ><?php echo __('Adjunto: '); ?></dt><?php echo h($productosactividad['Productosactividad']['anexo']); ?>&nbsp;<?php echo $this->Html->link(__('Enlace'),'../files/productosactividad/anexo/'.$productosactividad['Productosactividad']['id'].'/'.$productosactividad['Productosactividad']['anexo']);?></td></tr>

         
          <td >ENLACES ACTIVIDADES RELACIONADAS A LA TAREA</td>

          <tr><td><?php echo $this->Html->link($productosactividad['Productosactividad']['actividad1']); ?>&nbsp;</td></tr>
          <tr><td><?php echo $this->Html->link($productosactividad['Productosactividad']['actividad2']); ?>&nbsp;</td></tr>
          <tr><td><?php echo $this->Html->link($productosactividad['Productosactividad']['actividad3']); ?>&nbsp;</td></tr>

          <td >ENLACES ACTAS RELACIONADAS A TAREA</td>

          <tr><td><?php echo $this->Html->link($productosactividad['Productosactividad']['acta1']); ?>&nbsp;</td></tr>
          <tr><td><?php echo $this->Html->link($productosactividad['Productosactividad']['acta2']); ?>&nbsp;</td></tr>
          <tr><td><?php echo $this->Html->link($productosactividad['Productosactividad']['acta3']); ?>&nbsp;</td></tr>



          <td >SOPORTES ADICIONALES</td>

          <tr><td><?php echo $this->Html->link($productosactividad['Productosactividad']['enlaceuno']); ?>&nbsp;</td></tr>
          <tr><td><?php echo $this->Html->link($productosactividad['Productosactividad']['enlacedos']); ?>&nbsp;</td></tr>
          <tr><td><?php echo $this->Html->link($productosactividad['Productosactividad']['enlacetres']); ?>&nbsp;</td></tr>
                       

        </table>

        <table class="table-hover table-striped table-bordered"> <!-- Lo cambiaremos por CSS -->
           
          <tr>
              <td><?php echo __('Responsable Acciones Colectivas'); ?></td>
              <td colspan="3"><?php echo h($productosactividad['Responsable']['nombres']); ?> </td>
                            
          </tr>
          <tr>
          <td><?php echo __('Referente SMS'); ?></td>
              <td colspan="3"><?php echo h($productosactividad['Referente']['nombres']); ?> </td>
              </tr>
          <tr>
              <td><?php echo __('Estado de cumpliento tarea'); ?></td>
              
              <td colspan="3"><?php echo h($productosactividad['Productosactividad']['estado']); ?></td>
                     
              
          </tr>
          <tr>
              <td colspan="3"><?php echo __('Observación SMS'); ?></td>
          </tr>
          <tr>
           <td colspan="3" ><?php echo h($productosactividad['Productosactividad']['observacionsms']); ?></td>
          </tr>
            

           

        </table>
        
          <ul>
    <h3><li><?php echo $this->Html->link(__('Agregar observacion SMS'), array('action' => 'checkanexos', $productosactividad['Productosactividad']['id'])); ?> </li></h3>
    
  </ul>
    
   
 </div>    
<script type="text/javascript">
    $(document).ready(function () {
        $('textarea').each(function () {
            this.setAttribute('style', 'height:' + (this.scrollHeight) + 'px;overflow-y:hidden;');
        }).on('input', function () {
            this.style.height = 'auto';
            this.style.height = (this.scrollHeight) + 'px';
        });

    });
</script>








    
     


    