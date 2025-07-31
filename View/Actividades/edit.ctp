<?php $this->layout = 'formulario' ?>
<?php echo $this->Html->script('ckeditor/ckeditor'); ?>
<div class="actividades form">
      <?php echo $this->Form->create('Actividad', array('type' => 'file', 'novalidate' => 'novalidate')); ?>
    <fieldset>
        <legend><?php echo __('Agregar Actividad'); ?></legend>
        <?php
		echo $this->Form->input('id');	
		$option = array(
            'label' => 'Fecha',
            'dateFormat' => 'DMY',
            'minYear' => date('Y') - 2,
            'maxYear' => date('Y') + 0,
            'empty' => array(
                'day' => 'Día',
                'month' => 'Mes',
                'year' => 'Año'
            )
        );
        ?>

        <div class="row">
            <div class="form-group col-md-4">
                <?php echo $this->Form->input('fecha', $option); ?>
            </div>
            <div class="form-group col-md-4">
                <?php echo $this->Form->input('hora_inicio'); ?>
            </div>
            <div class="form-group col-md-4">
                <?php echo $this->Form->input('hora_fin'); ?>
            </div>
            <div class="form-group col-md-12">
                <?php
                echo ('Ingrese aquí exclusivamente el título de la temática tratada. No incluya poblaciones, lugares de realización de la actividad o ningún otro dato.');
                echo $this->Form->input('tema', array('label' => '1° Temática tratada'));
                ?>
            </div>
            <div class="form-group col-md-12">
                <?php
                echo 'Por ejemplo: Grupo surprisecity';
                echo $this->Form->input('nombregrupo', array('label' => '2° Nombre de organización o grupo'));
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                echo('Si no ubica algun barrio o vereda, seleccione la 1ª opcion');
                echo $this->Form->input('ubicacion_id', array('label' => '3° Barrio', 'class' => 'form-control select-search'));
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                echo ('Si seleccionó  ‘barrio’ coloque en la casilla Barrio/vereda ‘No aplica’');

                echo $this->Form->input('vereda', array('label' => '3.1 Barrio/Vereda'));
                ?>
            </div>
          
           
              <div class="form-group col-md-12">
                <?php
                echo 'Por ejemplo: Pasto Salud ESE';
                echo $this->Form->input('lugar', array('label' => '4° Nombre de lugar o dirección'));
            ?>
            </div>
            
            <div class="form-group col-md-6">
                <?php
                echo 'Ingresar nombre completo';
                echo $this->Form->input('responsable_id', array('label' => '5° Responsable de registro', 'class' => 'form-control select-search'));
                ?>
            </div>
                       
            <div class="form-group col-md-12">
                <?php
                echo $this->Form->input('producto_id', array('label' => '6° Producto/tarea relacionada', 'type' => 'select',  'class' => 'form-control select-search'));?>
            </div>

            <div class="form-group col-md-12">
                <?php
                echo $this->Form->input('producto1', array('label' => '7° Escriba brevemente los productos o procesos relacionados(opcional)'));
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
                echo $this->Form->input('poblaciones', array('label' => '8°  Poblaciones participantes', 'class' => 'form-control','class' => 'ckeditor'));               
                ?>
            </div>
           
            <div class="form-group col-md-6">
                <?php
                echo $this->Form->input('caracteristicasesion', array('label' => '9° Caracteristica de la sesión', 'options' => array('' => 'Elegir', '1. Taller ' => '1. Taller ', '2. Minga  ' => '2. Minga  ', '3. Encuentro  ' => '3. Encuentro  ', '5. Otro ' => '5. Otro '), 'class' => 'form-control'));
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                echo ('Si selecciono la  opción  ‘otro’ en el numeral 9°  responda el numeral 13.1');
                echo $this->Form->input('otrocual', array('label' => '9.1 Otra caracteristica'));
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                echo ('10° Relación de la actividad a sistematizar con los objetivos de la estrategia Ciudad Bienestar');
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
                echo $this->Form->input('contobjetivo', array('label' => '11° Describa de qué forma  la actividad contribuye con el o los objetivos de la estrategia CB, segun haya considerado en el numeral 14', 'class' => 'ckeditor'));
                ?>
            </div>
            <div class="form-group col-md-12">
                <?php
                echo $this->Form->input('objactividad', array('label' => '12° Objetivo General de  la actividad'));
                ?>
            </div>
            <div class="form-group col-md-12">
                <?php
                echo $this->Form->input('objetivoespecifico', array('label' => '13° Objetivos Específicos de  la actividad(opcional)'));
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                echo('14° Relación de la actividad con las premisas de la estrategia Ciudad Bienestar');
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
                echo $this->Form->input('contpremisa', array('label' => '15° Describa de qué forma  la actividad contribuye con las premisas de la estrategia CB, segun haya considerado en el numeral 18' , 'class' => 'ckeditor'));
                
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                echo('16° Relación de la actividad con las Perspectivas de la estrategia Ciudad Bienestar');
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
                echo $this->Form->input('contperspectiva', array('label' => '17° Describa de qué forma  la actividad contribuye con las pesrpectivas de la estrategia CB, segun haya considerado en el numeral 20', 'class' => 'ckeditor'));
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                echo('18° Relación de la actividad con los enfoques de la estrategia Ciudad Bienestar');
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
                echo $this->Form->input('contribucionenfoque', array('label' => '19° Describa de qué forma  la actividad contribuye con el o  los enfoques de la estrategia CB, segun haya considerado en el numeral 22', 'class' => 'ckeditor'));
                ?>
            </div>
            <div class="form-group col-md-12">
                <?php
                echo $this->Form->input('compromiso', array('label' => '20° Compromisos  de la actividad', 'class' => 'ckeditor'));
                ?>
            </div>
            <div class="form-group col-md-12">
                <?php
                echo('NOTA: En los campos de aportes y conclusiones maximo 500 caracteres.');

                echo$this->Form->input('aportes', array('label' => ' 21° Aportes de la comunidad', 'class' => 'ckeditor'));
                ?>
            </div>
            <div class="form-group col-md-12">
                <?php
                echo$this->Form->input('conclusiones', array('label' => ' 22° Conclusiones', 'class' => 'ckeditor'));
                ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                echo $this->Form->input('externo', array('label' => '23° Apoyo externo', 'options' => array('' => 'Elegir', '1 Si ' => '1 Si', '2 No' => '2 No'), 'class' => 'form-control'));
                ?>
            </div>
            <div class="form-group col-md-12">
                <?php
                echo('23.1 Si la respuesta al punto 23°. es positiva registre las  siguientes casillas');
                echo $this->Form->input('cargo', array('label' => ' Cargo en la institución u organización'));
                ?>
            </div>
            <div class="form-group col-md-12">
                <?php
                echo $this->Form->input('organizacion', array('label' => ' Nombre de la Organización o Institución'));
                ?>
            </div>
            <div class="form-group col-md-12">
                <?php
                echo $this->Form->input('tipoorganizacion', array('label' => '24° Tipo de organización ',
                    'options' => array('' => 'Elegir', 'No Aplica ' => 'No aplica', '1 Organización Comunitaria ' => '1 Organización Comunitaria ', '2 Organización Social ' => '2 Organización Social ', '3 Institución Publica' => '3 Institución Publica', '4 Institución Privada ' => '4 Institución Privada ' ), 'class' => 'form-control'));
                ?>
            </div>
            
            
              <div class="form-group col-md-12">
        <?php echo('  NOTA:Enlaces de plan de sesión, ir a modulo planesy copiar url la siguiente linea: http://sistemasycomunicaciones.com.co/sistemainformacioncb/SICB/planes/view/ que al final tiene el id del plan de sesión' );?>
        </div>

        
        <div class="form-group col-md-12">
        <?php echo('Ejemplo: http://sistemasycomunicaciones.com.co/sistemainformacioncb/SICB/planes/view/1' );?>
        </div>

             <div class="form-group col-md-12">
              <?php echo $this->Form->input('plan', array('label' => '26° Plan de sesión'));?>  
              <?php echo $this->Html->link('Ir a modulo Planes de sesión','/plsesiones/nuebus', array('class' => 'button', 'target' => '_blank'));?>;

              </div>



    </fieldset>
    <?php echo $this->Form->end(__('Enviar')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Opciones'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('Regresar'), array('action' => 'add')); ?></li>

        <li><?php echo $this->Html->link(__('Lista Actividades'), array('action' => 'nuebus')); ?></li>          

        <li><?php echo $this->Html->link(__('Lista Personas'), array('controller' => 'personas', 'action' => 'nuebus')); ?> </li>

        <li><?php echo $this->Html->link(__('Nueva Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>

        <li> <a href="http://www.pasto.gov.co/index.php/comunas-barrios-corregimientos-veredas" target="_blank">Comunas</a></li>

        <li> <a href="http://www.procuraduria.gov.co/portal/antecedentes.html" target="_blank">Procuraduria</a></li>
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
</script>