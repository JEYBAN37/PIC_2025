<!--?php $this->layout = 'defaultmenu'?-->




<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Panels and Wells</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Default Panel
                        </div>
                        <div class="panel-body">

                          <ul>

                                  <li> <a  href="../users/bienvenida"  >Inicio</a></li>

                                      <li><?php echo $this->Html->link(__('Regresar'), array('action' => 'add')); ?></li>    
                                    <!--li><?php echo $this->Html->link(__('Ver sistematizaciones Actividades'), array('controller' => 'actividadesviewtests', 'action' => 'nuebus'));?> </li-->
                                    <li><?php echo $this->Html->link(__('Ver sistematizaciones procesos'), array('controller' => 'proactividades', 'action' => 'index'));?> </li>
                                    <li><?php echo $this->Html->link(__('Ver procesos y sesion'), array('controller' => 'sistematizacionprocesosviewtests', 'action' => 'nuebus'));?> </li>
                                  <li><?php echo $this->Html->link(__('Lista de Actas'), array('controller' => 'actaviewtests', 'action' => 'nuebus')); ?> </li>
                                  <li><?php echo $this->Html->link(__('Planes de sesión'), array('controller' => 'plsesiones', 'action' => 'nuebus')); ?> </li>
                                  <li><?php echo $this->Html->link(__('Planes de sesión 2017'), array('controller' => 'planes', 'action' => 'nuebus')); ?> </li>
                                  
                                </ul>
                                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>


                                                             <ul>
                                
                                <!--li><?php echo __('Registe sistematización de actividades'); ?></li>
                                
                                <li> <?php echo $this->Html->link(__('Nueva sistemtización actividad'), array('action' => 'add1'))?> </li--> <br />

                                <li><?php echo __('Registe sistematización de proecesos formativos o educativos'); ?></li>

                                <li> <?php echo $this->Html->link(__('Nueva sistematización de proceso'), array('controller'=>'proactividades','action' => 'add'))?> </li> <br />
                                  <li><?php echo __('Asocie la sistematización de procesos formativos o educativos información de lugar, fecha, tema y asocie el plan de sesión correspondiente'); ?></li>
                                <li> <?php echo $this->Html->link(__('Registrar infomación de procesos'), array('controller'=>'procesoregistros','action' => 'add'))?> </li> <br /> 

                                 </li> <br />

                                 
                                
                                  </ul>



                        </div>

                        
             </div>

        </div>
    </div> 


        </div>

        



                       



    

    