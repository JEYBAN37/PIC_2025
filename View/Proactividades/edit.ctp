
 
<div class="container">
  <div class="row">

    <div class="col-lg-12" >
        <div class="panel panel-default">
            <div class="panel-heading" class="page-header">

             <?php $this->layout = 'formulario' ?>
            <?php echo $this->Html->script('ckeditor/ckeditor'); ?>

            </div>

                <?php echo $this->Form->create('Proactividad', array('type' => 'file', 'novalidate' => 'novalidate')); ?>
                <fieldset>

                      <h1 class="page-header">Actualizar Sistemtización proceso formativo - educativo</h1>
                     
                     <?php echo $this->Form->input('id');?>
      
                   
                    <?php
                    $option = array(
                        'label' => 'Fecha',
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
                       
                       
                        
                     
                                   
                        <div class="form-group col-md-12">
                            <?php
                            echo $this->Form->input('producto_id', array('label' => 'Producto/tarea relacionada', 'type' => 'select',  'class' => 'form-control select-search'));?>
                        </div>

                        <div class="form-group col-md-12">
                            <?php
                            echo $this->Form->input('producto1', array('label' => 'Escriba brevemente los productos o procesos relacionados(opcional)','class'=>'form-control'));
                        ?>
                        </div>
                                    

                         <div class="form-group col-md-12">
                    
                       <label>Poblaciones</label> 

                       <p class="help-block">Copie de esta lista a la casilla siguiente las poblaciones participantes o escriba otras que no esten categorizadas.</p>

                         <p class="help-block">1. Población en general 2. Hombres  3. Mujeres 4. Niños y niñas 5. Adolescentes 6. Adultos 7. Afrocolombianos  8. Campesinos    9. Habitantes de Calle     10. Indígenas  11. Líderes y lideresas  12. Madres gestantes  13. Madres Lactantes  14. Población con situación de discapacidad 15. Población LGBTI 16. Población privada de la libertad 17. Población desmovilizada 18. Población víctima de conflicto armado 19. Población víctima de violencia 20. Trabajadores(as) sexuales 21. Instituciones</p>
                     </div> 
                        <div class="form-group col-md-12">
                             <p class="help-block">Registre aquí las poblaciones participantes, con el código y nombre respectivo</p>
                            <?php               
                            echo $this->Form->input('poblaciones', array('label' => 'Poblaciones participantes', 'class' => 'form-control','fa fa-times-circle-o', 'control-label' ,'for'=>'inputError'));        
                            ?>
                        </div>

                        <div class="panel panel-default form-group col-md-12">
                            <p class="help-block">Caracteristicas de participantes y tipo de actividad</p>
                            <div class="row ">

                                <div class="form-group col-md-6">
                                    <p class="help-block">Por ejemplo: Grupo surprisecity</p>
                                    <?php

                                    echo $this->Form->input('grupo', array('label' => 'Nombre de organización o grupo', 'class' => 'form-control'));
                                    ?>
                                </div>


                                <div class="form-group col-md-3">
                                    <p class="help-block">Elija el timpo de actividad desarrollada</p>
                                    <?php
                                    echo $this->Form->input('caracteristicasesion', array(
                                        'label' => 'Caracteristica de la sesión', 'options' =>
                                        array('' => 'Elegir', '1. Taller ' => '1. Taller ', '2. Minga' => '2. Minga', '3. Encuentro' => '3. Encuentro  ', '5. Otro' => '5. Otro '),
                                        'class' => 'form-control', 'onchange' => 'mostrarOtrosesion(this.value);'
                                    ));
                                    ?>


                                </div>
                                <div id="divOtroSesion" class="form-group col-md-3" style="display: none;">

                                    <p class="help-block">Si selecciono la opción ‘otro’ especifique aqui el tipo de caracteristica</p>
                                    <?php

                                    echo $this->Form->input('otrocual', array('label' => 'Otra caracteristica', 'class' => 'form-control'));
                                    ?>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default form-group col-md-12">
                              <p class="help-block">Relación de la actividad a sistematizar con los objetivos de la estrategia Ciudad Bienestar</p>
                             <div class="row ">
                                    <div class="form-group col-md-4">
                                      
                                        <?php              
                                        echo $this->Form->input('objetivouno', array('label' => 'Objetivo 1 ',
                                            'options' => array('' => 'Elegir', '1 No tiene' => '1 No tiene', '2 Poca' => '2 Poca', '3 Moderada' => '3 Moderada', '4 Fuerte' => '4 Fuerte', '5 Muy Fuerte' => '5 Muy Fuerte'), 'class' => 'form-control'));
                                        ?>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <?php
                                        echo $this->Form->input('objetivodos', array('label' => 'Objetivo 2',
                                            'options' => array('' => 'Elegir', '1 No tiene' => '1 No tiene', '2 Poca' => '2 Poca', '3 Moderada' => '3 Moderada', '4 Fuerte' => '4 Fuerte', '5 Muy Fuerte' => '5 Muy Fuerte'), 'class' => 'form-control'));
                                        ?>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <?php
                                        echo $this->Form->input('objetivotres', array('label' => 'Objetivo 3 ',
                                            'options' => array('' => 'Elegir', '1 No tiene' => '1 No tiene', '2 Poca' => '2 Poca', '3 Moderada' => '3 Moderada', '4 Fuerte' => '4 Fuerte', '5 Muy Fuerte' => '5 Muy Fuerte'), 'class' => 'form-control'));
                                        ?>
                                    </div>

                                    <div class="form-group col-md-12">
                            <?php
                            echo $this->Form->input('contobjetivo', array('label' => 'Describa de qué forma  la actividad contribuye con el o los objetivos de la estrategia CB segun la puntuacion asignada', 'class' => 'form-control'));
                            ?>
                        </div>

                             </div>
                          </div>  
                        
                        <div class="form-group col-md-12">
                            <?php
                            echo $this->Form->input('objactividad', array('label' => 'Objetivo General del proceso', 'class' => 'form-control'));
                            ?>
                        </div>
                        <div class="form-group col-md-12">
                            <?php
                            echo $this->Form->input('objetivoespecifico', array('label' => 'Objetivos Específicos del proceso', 'class' => 'form-control'));
                            ?>
                        </div>


                         
                          <div class="panel panel-default form-group col-md-12">
                            <p class="help-block">Relación de la actividad con las premisas de la estrategia Ciudad Bienestar</p>
                             <div class="row ">


                                <div class="form-group col-md-4">
                                   
                                    <?php
                                    
                                    echo $this->Form->input('premisauno', array('label' => 'Participación significativa',
                                        'options' => array('' => 'Elegir', '1 No tiene' => '1 No tiene', '2 Poca' => '2 Poca', '3 Moderada' => '3 Moderada', '4 Fuerte' => '4 Fuerte', '5 Muy Fuerte' => '5 Muy Fuerte' ), 'class' => 'form-control'));
                                    ?>
                                </div>
                                <div class="form-group col-md-4">
                                    <?php
                                    echo $this->Form->input('premisados', array('label' => 'Cuerpo territorio ',
                                        'options' => array('' => 'Elegir', '1 No tiene' => '1 No tiene', '2 Poca' => '2 Poca', '3 Moderada' => '3 Moderada', '4 Fuerte' => '4 Fuerte', '5 Muy Fuerte' => '5 Muy Fuerte' ), 'class' => 'form-control'));
                                    ?>
                                </div>
                                <div class="form-group col-md-4">
                                    <?php
                                    echo $this->Form->input('premisatres', array('label' => 'Ciudadanía Activa ',
                                        'options' => array('' => 'Elegir', '1 No tiene' => '1 No tiene', '2 Poca' => '2 Poca', '3 Moderada' => '3 Moderada', '4 Fuerte' => '4 Fuerte', '5 Muy Fuerte' => '5 Muy Fuerte' ), 'class' => 'form-control'));
                                    ?>
                                </div>

                                        <div class="form-group col-md-12">
                                    <?php
                                    echo $this->Form->input('contpremisa', array('label' => 'Describa de qué forma  la actividad contribuye con las premisas de la estrategia CB, segun la puntuacion asignada', 'class' => 'form-control'));
                                    
                                    ?>
                                    </div>
                               
                            </div>
                          </div>


                           <div class="panel panel-default form-group col-md-12">
                            <p class="help-block">Relación de la actividad con las Perspectivas de la estrategia Ciudad Bienestar</p>
                             <div class="row ">

                                    <div class="form-group col-md-6">
                                         
                                        <?php
                                             echo $this->Form->input('perspectivados', array('label' => 'Derechos',
                                            'options' => array('' => 'Elegir', '1 No tiene' => '1 No tiene', '2 Poca' => '2 Poca', '3 Moderada' => '3 Moderada', '4 Fuerte' => '4 Fuerte', '5 Muy Fuerte' => '5 Muy Fuerte') , 'class' => 'form-control'));
                                        ?>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <?php
                                        echo $this->Form->input('perspectivauno', array('label' => 'Determinación social ',
                                            'options' => array('' => 'Elegir', '1 No tiene' => '1 No tiene', '2 Poca' => '2 Poca', '3 Moderada' => '3 Moderada', '4 Fuerte' => '4 Fuerte', '5 Muy Fuerte' => '5 Muy Fuerte') , 'class' => 'form-control'));
                                        ?>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <?php
                                        echo $this->Form->input('contperspectiva', array('label' => 'Describa de qué forma  la actividad contribuye con las pesrpectivas de la estrategia CB, segun la puntuacion asignada', 'class' => 'form-control'));
                                        ?>
                                    </div>

                          </div>
                        </div>


                         <div class="panel panel-default form-group col-md-12">
                            <p class="help-block">Relación de la actividad con los enfoques de la estrategia Ciudad Bienestar</p>
                             <div class="row ">
                                    <div class="form-group col-md-6">
                                          
                                        <?php
                                            echo $this->Form->input('enfoqueuno', array('label' => 'Territorial ',
                                            'options' => array('' => 'Elegir', '1 No tiene' => '1 No tiene', '2 Poca' => '2 Poca', '3 Moderada' => '3 Moderada', '4 Fuerte' => '4 Fuerte', '5 Muy Fuerte' => '5 Muy Fuerte' ) , 'class' => 'form-control'));
                                        ?>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <?php
                                        echo $this->Form->input('enfoquedos', array('label' => 'Población ',
                                            'options' => array('' => 'Elegir', '1 No tiene' => '1 No tiene', '2 Poca' => '2 Poca', '3 Moderada' => '3 Moderada', '4 Fuerte' => '4 Fuerte', '5 Muy Fuerte' => '5 Muy Fuerte' ) , 'class' => 'form-control'));
                                        ?>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <?php
                                        echo $this->Form->input('enfoquetres', array('label' => 'Intercultural ',
                                            'options' => array('' => 'Elegir', '1 No tiene' => '1 No tiene', '2 Poca' => '2 Poca', '3 Moderada' => '3 Moderada', '4 Fuerte' => '4 Fuerte', '5 Muy Fuerte' => '5 Muy Fuerte' ) , 'class' => 'form-control'));
                                        ?>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <?php
                                        echo $this->Form->input('enfoquecuatro', array('label' => ' Diferencial ',
                                            'options' => array('' => 'Elegir', '1 No tiene' => '1 No tiene', '2 Poca' => '2 Poca', '3 Moderada' => '3 Moderada', '4 Fuerte' => '4 Fuerte', '5 Muy Fuerte' => '5 Muy Fuerte' ) , 'class' => 'form-control'));
                                        ?>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <?php
                                        echo $this->Form->input('contribucionenfoque', array('label' => 'Describa de qué forma  la actividad contribuye con el o  los enfoques de la estrategia CB,segun la puntuacion asignada', 'class' => 'form-control'));
                                        ?>
                                    </div>

                                 </div> 
                              </div>    
                              
                              <div class="form-group col-md-12">
                                    <?php
                                    echo $this->Form->input('contribucionppsc', array('label' => 'Analice y explique de qué manera se aplicaron las líneas y sublíneas de la Política Publica en Salud Colectiva al proceso pedagógico', 'class' => 'form-control'));
                                    ?>
                                </div>
                                
                        <div class="form-group col-md-12">
                            <?php
                            echo $this->Form->input('compromiso', array('label' => 'Compromisos  de la actividad', 'class' => 'form-control'));
                            ?>
                        </div>
                        <div class="form-group col-md-12">
                             <p class="help-block">NOTA: En los campos de aportes y conclusiones maximo 500 caracteres.</p>
                            <?php
                        

                            echo$this->Form->input('aportes', array('label' => 'Aportes de la comunidad', 'class' => 'form-control'));
                            ?>
                        </div>
                        <div class="form-group col-md-12">
                            <?php
                            echo$this->Form->input('conclusiones', array('label' => 'Conclusiones', 'class' => 'form-control'));
                            ?>
                        </div>

                         <div class="form-group col-md-12">
                            <?php
                            echo$this->Form->input('relatoria', array('label' => 'Realice un breve relatoria del proceso realizado', 'class' => 'form-control'));
                            ?>
                        </div>



                           <div class="form-group col-md-6">
                            <?php
                            echo 'Ingresar nombre completo';
                            echo $this->Form->input('responsable_id', array('label' => 'Responsable de registro', 'class' => 'form-control select-search'));
                            ?>
                        </div>
                        
                   </div>      
                </fieldset>

                  <p>
                                        <?php echo $this->Form->end(array('label' => 'Actualizar sistematización', 'class' =>'btn btn-success')); ?>
                                        </p>

               </div>


               </div> 
              
           
           
      </div>
</div>            

<?php
$this->Html->css([
    'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css',
    'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'
        ], ['block' => 'css']
);
$this->Html->script([
    'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js',
    'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js'
        ], ['block' => 'script']
);
?>

<script type="text/javascript">
    $(document).ready(function () {
        $('.select-search').select2();
        $('.select-search-multi').select2({
            closeOnSelect:false
        });
        agregarOpcionSeleccion();

        /*
        $('#poblaciones').val('');
         var data = $('#poblaciones_aux').select2('data').map(function(elem){ 
                return elem.text 
           });
         $('#poblaciones').val(data);
         $('#poblaciones_aux').on('select2:unselecting', function (e) {
            $('#poblaciones').val('');
        });
        */

    });

     
    function validarTamanioSoporte(){
        var auxFile = document.getElementById('ActividadAnexo');
        var sizeF = auxFile.files[0].size;
        
        if(sizeF > 5000000)
        {
            alert('El archivo debe ser menor a 5 Mb');
            auxFile.value = '';
        }
    }

     function agregarOpcionSeleccion(){
        $("#ProactividadUbicacionId").prepend();
        $("#ProactividadProductoId").prepend();
        $("#ProactividadResponsableId").prepend();
    }

    function mostrarOtrosesion(id) {
        if (id == "5. Otro")
            $("#divOtroSesion").show();
        else
            $("#divOtroSesion").hide();
    }

</script>


