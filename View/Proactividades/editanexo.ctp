
	
	
		
<?php $this->layout = 'formulario' ?>
<?php echo $this->Html->script('ckeditor/ckeditor'); ?>
<div class="actividades form">
    <?php echo $this->Form->create('Proactividad', array('type' => 'file', 'novalidate' => 'novalidate')); ?>
    <fieldset>
        <legend><?php echo __('Sistemtizar proceso formativo - educativo'); ?></legend>

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
                echo $this->Form->input('producto1', array('label' => 'Escriba brevemente los productos o procesos relacionados(opcional)'));
            ?>
            </div>
                        

             <div class="form-group col-md-12">
        
           <h2><?php echo 'Poblaciones'?><br></h2> 

           <p>  <?php echo 'Copie de esta lista a la casilla siguiente las poblaciones participantes o escriba otras que no esten categorizadas.'?></p> 
                  
            <?php echo  '1. Población en general 2. Hombres  3. Mujeres 4. Niños y niñas 5. Adolescentes 6. Adultos 7. Afrocolombianos  8. Campesinos    9. Habitantes de Calle     10. Indígenas  11. Líderes y lideresas  12. Madres gestantes  13. Madres Lactantes  14. Población con situación de discapacidad 15. Población LGBTI 16. Población privada de la libertad 17. Población desmovilizada 18. Población víctima de conflicto armado 19. Población víctima de violencia 20. Trabajadores(as) sexuales 21. Instituciones'?> 
         
         </div> 

            <div class="form-group col-md-12">
                <?php               
                echo ('Registre aquí las poblaciones participantes, con el código y nombre respectivo');
                echo $this->Form->input('poblaciones', array('label' => 'Poblaciones participantes', 'class' => 'form-control','class' => 'ckeditor'));               
                ?>
            </div>

            <div class="form-group col-md-12">
                <?php
                echo 'Por ejemplo: Grupo surprisecity';
                echo $this->Form->input('grupo', array('label' => 'Nombre de organización o grupo'));
                ?>
            </div>
                    
           
            <div class="form-group col-md-6">
                <?php
                echo $this->Form->input('caracteristicasesion', array('label' => 'Caracteristica de la sesión', 'options' => array('' => 'Elegir', '1. Taller ' => '1. Taller ', '2. Minga  ' => '2. Minga  ', '3. Encuentro  ' => '3. Encuentro  ', '5. Otro ' => '5. Otro '), 'class' => 'form-control'));
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                echo ('Si selecciono la  opción  ‘otro’ especifique aqui el tipo de caracteristica');
                echo $this->Form->input('otrocual', array('label' => 'Otra caracteristica'));
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                echo ('Relación de la actividad a sistematizar con los objetivos de la estrategia Ciudad Bienestar');
                echo $this->Form->input('objetivouno', array('label' => 'Objetivo 1 ',
                    'options' => array('' => 'Elegir', '1 No tiene' => '1 No tiene', '2 Poca' => '2 Poca', '3 Moderada' => '3 Moderada', '4 Fuerte' => '4 Fuerte', '5 Muy Fuerte' => '5 Muy Fuerte'), 'class' => 'form-control'));
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                echo $this->Form->input('objetivodos', array('label' => 'Objetivo 2',
                    'options' => array('' => 'Elegir', '1 No tiene' => '1 No tiene', '2 Poca' => '2 Poca', '3 Moderada' => '3 Moderada', '4 Fuerte' => '4 Fuerte', '5 Muy Fuerte' => '5 Muy Fuerte'), 'class' => 'form-control'));
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                echo $this->Form->input('objetivotres', array('label' => 'Objetivo 3 ',
                    'options' => array('' => 'Elegir', '1 No tiene' => '1 No tiene', '2 Poca' => '2 Poca', '3 Moderada' => '3 Moderada', '4 Fuerte' => '4 Fuerte', '5 Muy Fuerte' => '5 Muy Fuerte'), 'class' => 'form-control'));
                ?>
            </div>
            <div class="form-group col-md-12">
                <?php
                echo $this->Form->input('contobjetivo', array('label' => 'Describa de qué forma  la actividad contribuye con el o los objetivos de la estrategia CB segun la puntuacion asignada'));
                ?>
            </div>
            <div class="form-group col-md-12">
                <?php
                echo $this->Form->input('objactividad', array('label' => 'Objetivo General del proceso'));
                ?>
            </div>
            <div class="form-group col-md-12">
                <?php
                echo $this->Form->input('objetivoespecifico', array('label' => 'Objetivos Específicos del proceso'));
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                echo('Relación de la actividad con las premisas de la estrategia Ciudad Bienestar');
                echo $this->Form->input('premisauno', array('label' => 'Participación significativa',
                    'options' => array('' => 'Elegir', '1 No tiene' => '1 No tiene', '2 Poca' => '2 Poca', '3 Moderada' => '3 Moderada', '4 Fuerte' => '4 Fuerte', '5 Muy Fuerte' => '5 Muy Fuerte' ), 'class' => 'form-control'));
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                echo $this->Form->input('premisados', array('label' => 'Cuerpo territorio ',
                    'options' => array('' => 'Elegir', '1 No tiene' => '1 No tiene', '2 Poca' => '2 Poca', '3 Moderada' => '3 Moderada', '4 Fuerte' => '4 Fuerte', '5 Muy Fuerte' => '5 Muy Fuerte' ), 'class' => 'form-control'));
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                echo $this->Form->input('premisatres', array('label' => 'Ciudadanía Activa ',
                    'options' => array('' => 'Elegir', '1 No tiene' => '1 No tiene', '2 Poca' => '2 Poca', '3 Moderada' => '3 Moderada', '4 Fuerte' => '4 Fuerte', '5 Muy Fuerte' => '5 Muy Fuerte' ), 'class' => 'form-control'));
                ?>
            </div>
            <div class="form-group col-md-12">
                <?php
                echo $this->Form->input('contpremisa', array('label' => 'Describa de qué forma  la actividad contribuye con las premisas de la estrategia CB, segun la puntuacion asignada'));
                
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                echo('Relación de la actividad con las Perspectivas de la estrategia Ciudad Bienestar');
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
                echo $this->Form->input('contperspectiva', array('label' => 'Describa de qué forma  la actividad contribuye con las pesrpectivas de la estrategia CB, segun la puntuacion asignada'));
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                echo('Relación de la actividad con los enfoques de la estrategia Ciudad Bienestar');
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
                echo $this->Form->input('contribucionenfoque', array('label' => 'Describa de qué forma  la actividad contribuye con el o  los enfoques de la estrategia CB,segun la puntuacion asignada'));
                ?>
            </div>
            <div class="form-group col-md-12">
                <?php
                echo $this->Form->input('compromiso', array('label' => 'Compromisos  de la actividad'));
                ?>
            </div>
            <div class="form-group col-md-12">
                <?php
                echo('NOTA: En los campos de aportes y conclusiones maximo 500 caracteres.');

                echo$this->Form->input('aportes', array('label' => 'Aportes de la comunidad'));
                ?>
            </div>
            <div class="form-group col-md-12">
                <?php
                echo$this->Form->input('conclusiones', array('label' => 'Conclusiones'));
                ?>
            </div>

             <div class="form-group col-md-12">
                <?php
                echo$this->Form->input('relatoria', array('label' => 'Realice un breve relatoria del proceso realizado'));
                ?>
            </div>



               <div class="form-group col-md-6">
                <?php
                echo 'Ingresar nombre completo';
                echo $this->Form->input('responsable_id', array('label' => 'Responsable de registro', 'class' => 'form-control select-search'));
                ?>
            </div>
            



    </fieldset>
    <?php echo $this->Form->end(__('Enviar')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Opciones'); ?></h3>
    <ul>

         <li> <a  href="../users/bienvenida"   >Inicio</a></li>
        <li><?php echo $this->Html->link(__('Regresar'),array('controller' => 'personas', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('Registro sesiones de proceso'), array('controller' => 'procesoregistros', 'action' => 'add')); ?></li>
        <li><?php echo $this->Html->link(__('lista procesos form'), array('action' => 'index')); ?></li>
        <!--li><?php echo $this->Html->link(__('Lista procesos'), array('controller' => 'procesosviewtests', 'action' => 'nuebus')); ?></li-->			 
        <li><?php echo $this->Html->link(__('Lista Personas'), array('controller' => 'personas', 'action' => 'nuebus')); ?> </li>

        <li><?php echo $this->Html->link(__('Asociar a Participante'), array('controller' => 'personas', 'action' => 'add')); ?> </li>

        <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Proactividad.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Proactividad.id'))); ?></li>
	
		
        
    </ul>
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
       // $("#ProactividadUbicacionId").prepend("<option value='' selected='selected'>Seleccione</option>");
       // $("#ProactividadProductoId").prepend("<option value='' selected='selected'>Seleccione</option>");
        $("#ProactividadResponsableId").prepend("<option value='' selected='selected'>Seleccione</option>");
    }

</script>



