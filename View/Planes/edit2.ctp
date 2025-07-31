<?php $this->layout = 'formulario' ?>
<?php echo $this->Html->script('ckeditor/ckeditor'); ?>
 <div class="planes form">
 <?php echo $this->Form->create('Plan', array('type' => 'file', 'novalidate' => 'novalidate')); ?>
	<fieldset>
		<legend><?php echo __('Agregar Plan de sesión_vigencia 2015 - 2017'); ?></legend>
	
	
				
			
		 	<div class="form-group col-md-4">

		   <?php echo $this->Form->input('id');
			
		        $option = array(
		            'label' => 'Vigencia',
		            'dateFormat' => 'DMY',
		            'minYear' => date('Y') - 3,
		            'maxYear' => date('Y') - 1,
		            'empty' => array(
		                'day' => 'Día',
		                'month' => 'Mes',
		                'year' => 'Año'
		                
		            )
		        );
		        ?>
		     </div>
<div class="row">
       	<div class="form-group col-md-4">
        <?php echo $this->Form->input('fecha', $option, array('label'=>'registro')); ?>
        </div>

       <div class="form-group col-md-4">
		<?php echo $this->Form->input('hora_inicio');?>
	   </div>

	    
       <div class="form-group col-md-3">
		<?php echo $this->Form->input('hora_fin');?>
				
		</div>

		
		<div class="form-group col-md-12">
		<?php echo $this->Form->input('tema',array('label'  => 'Tema','class' => 'ckeditor')); ?>
	    </div>
		
		<div class="form-group col-md-12">
		<?php echo $this->Form->input('objetivog',array('label'  => 'Objetivo general','class' => 'ckeditor'));?>
	    </div>

		<div class="form-group col-md-12">
		<?php echo $this->Form->input('objetivoe',array('label'  => 'Objetivo especifico','class' => 'ckeditor'));?>
		</div>

		<div class="form-group col-md-12">
		
		   <h2><?php echo 'Poblaciones '?><br></h2> 

		   <p>	<?php echo 'Copie de esta lista a la casilla siguiente las poblaciones participantes o escriba otras que no esten categorizadas.'?></p>	
		    	  
			<?php echo	'1. Población en general 2. Hombres	 3. Mujeres	4. Niños y niñas 5. Adolescentes 6. Adultos	7. Afrocolombianos 	8. Campesinos	 9. Habitantes de Calle		10. Indígenas  11. Líderes y lideresas  12. Madres gestantes  13. Madres Lactantes  14. Población con situación de discapacidad 15. Población LGBTI 16. Población privada de la libertad 17. Población desmovilizada 18. Población víctima de conflicto armado 19. Población víctima de violencia 20. Trabajadores(as) sexuales	21. Instituciones'?> 
		 
		 </div>   

		 <div class="form-group col-md-12">
		<?php echo $this->Form->input('tipoblacion', array('label'=>'Tipo de poblacion participante.', 'class' => 'ckeditor'));?>

		 </div> 

		 <div class="form-group col-md-6">
		<?php echo $this->Form->input('proceso', array('label' => '12° Tipo  de proceso',
                    'options' => array('' => 'Elegir', '1. Articulación' => '1. Articulación', '2. Educación y Comunicación ' => '2. Educación y Comunicación ', '3. Fortalecimiento y Formación ' => '3. Fortalecimiento y Formación ', '4. Gestión del  Conocimiento ' => '4. Gestión del  Conocimiento ', '5. Otro ' => '5. Otro '), 'class' => 'form-control'));
                ?>

		   </div> 
		
		 <div class="form-group col-md-6">

		 	<?php echo 'Categorias utilizadas en vigenicas anteriores: CRONICAS (VSCNT),NUTRICIÓN (SAN) PROMOCION SOCIAL (GDPV) RIESGOS LABORALES (SAL) SALUD INFANTIL (GDPV) SALUD MENTAL (CSSM) SALUD ORAL (VSCNT) SALUD SEXUAL (DSDR) TUBERCULOSIS (VSET) VIGILACIA EN SALUD PUBLICA (GDPV) NO APLICA(PROPIO DEL PROCESO)'?>

		<?php  $optiondim = array('' => 'Elegir', 'CSSM' => 'Convivencia Social y Salud Mental', 'FAS' => 'Fortalecimiento de la Autoridad Sanitaria', 'S_Ambiental' => 'Salud Ambiental', 'EMGYD' => 'Salud Pública Emergencias y desastres', 'SAL' => 'Salud y Ámbito Laboral', 'SAN' => 'Seguridad Alimentaria y Nutricional', 'DSDR' => 'Sexualidad, Derechos Sexuales y Reproductivos', 'GDPV' => 'Transversal Gestión Diferencial de Poblaciones Vulnerables', 'VSCNT' => 'Vida Saludable y Condiciones no Transmisibles', 'VSET' => 'Vida Saludable y Enfermedades Transmisibles', 'TDE' => 'Todas las Dimensiones Enfoques', 'TDEC' => 'Todas las Dimensiones Educación y Comunicación','TDF'=>'Todas las dimensiones Fortalecimiento','TDG'=>'Todas las Dimensiones Gestión','TDMP'=>'Todas las dimensiones Modo Pedagógico','TD_OBJ'=>'Todas las Dimensiones Objeivos');

		     echo $this->Form->input('dimension', array('type' => 'select','class'=>'form-control select-search','options'=>$optiondim));?>

		   </div> 
		
		 <div class="form-group col-md-12">
	           <h2><?php echo 'Momentos pedagógicos'?></h2> 
  	  
	       </div>   

		 <div class="form-group col-md-8">
		<?php  echo $this->Form->input('momento',array('label'  => '(Nombre del momento)Primer momento, sensibilizar y activar', 'class' => 'ckeditor'));?>


		   </div>  

		<div class="form-group col-md-4">
			<?php

			$optiontime =  array(' '=>'Elegir','15'=>'15 minutos',' 30'=>'30 minutos','40'=>'40 minutos','60'=>'Una Hora','90'=>'Una Hora y media','120'=>'Dos Horas','180'=>'Tres Horas');

			echo $this->Form->input('duracion',array('label'  => 'Duración de actividad', 'type' => 'select','class'=>'form-control','options'=> $optiontime));?>

			   </div> 

			    <div class="form-group col-md-12">
			<?php echo $this->Form->input('metodologia',array('label'  => 'Metodología utilizada', 'class' => 'ckeditor'));?>

			   </div>   		

		  <div class="form-group col-md-8">
			<?php echo $this->Form->input('momentouno',array('label'  => '(Nombre del momento)segundo momento, usar recursos temáticos, técnicos y pedagógicos. Momento central ', 'class' => 'ckeditor'));?>


			   </div>   

			    <div class="form-group col-md-4">
			<?php echo $this->Form->input('duracionuno',array('label'  => 'Duración de actividad', 'type' => 'select','class'=>'form-control','options'=>$optiontime ));?>
			   </div>   


			    <div class="form-group col-md-12">
			<?php echo $this->Form->input('metodologiauno',array('label'  => 'Metodología utilizada', 'class' => 'ckeditor'));?>

			   </div>   

		  <div class="form-group col-md-8">
			<?php echo $this->Form->input('momentodos',array('label'  => '(Nombre del momento)tercer momento, reflexión-retroalimentación, es la imagen mental de lo que quiero que pase', 'class' => 'ckeditor'));?>

			   </div>   


			    <div class="form-group col-md-4">
			<?php echo $this->Form->input('duraciondos',array('label'  => 'Duración de actividad', 'type' => 'select','class'=>'form-control','options'=>$optiontime ));?>

			   </div>   


			    <div class="form-group col-md-12">
			<?php echo $this->Form->input('metodologiados',array('label'  => 'Metodología utilizada', 'class' => 'ckeditor'));?>


			   </div>  

			     <div class="form-group col-md-8">
			<?php echo $this->Form->input('momentotres',array('label'  => '(Nombre del momento)cuarto momento, reflexión-retroalimentación, es la imagen mental de lo que quiero que pase', 'class' => 'ckeditor'));?>

			   </div>   


			    <div class="form-group col-md-4">
			<?php echo $this->Form->input('duraciontres',array('label'  => 'Duración de actividad', 'type' => 'select','class'=>'form-control','options'=>$optiontime ));?>

			   </div>   


			    <div class="form-group col-md-12">
			<?php echo $this->Form->input('metodologiatres',array('label'  => 'Metodología utilizada', 'class' => 'ckeditor'));?>
			   </div> 

			    <div class="form-group col-md-12">
	           <h2><?php echo 'Materiales e insumos '?></h2> 
  	  
	       </div>   

			 <div class="form-group col-md-12">
			<?php echo $this->Form->input('insumo',array('label'=>'Insumos o materiales reqeridos en cada momento','class'=>'ckeditor'));?>

			 </div> 

			  <div class="form-group col-md-12">
	           <h2><?php echo 'Resultados o alcances que se esperan'?></h2> 
  	  
	       </div>   

			  <div class="form-group col-md-12">
			 <?php echo $this->Form->input('resultado',array('label'  => 'Resultados esperados','class'=>'ckeditor'));?>
			</div>

			 <div class="form-group col-md-12">
	           <h2><?php echo 'Identificación de tematicas'?></h2> 
  	  
	       </div>   

			<div class="form-group col-md-12">
			 <?php echo $this->Form->input('tematica',array('label'  => 'Temáticas identificadas e incorporadas','class'=>'ckeditor'));?>
			</div>

			  <div class="form-group col-md-6">
                <?php
               
                echo $this->Form->input('anexo', array('label'=>'archivos cargados', 'readonly'));
                echo  'Para editar el archivo cargado debe ir a la opcion editar_soporte '
            ?>
            </div>

            <div class="form-group col-md-6">
                <?php
                echo $this->Form->input('responsable_id', array('label' => 'Responsable de registro', 'class' => 'form-control select-search'));
                echo $this->Form->input('fecharegistro', array('label' => ' Fecha de registro', 'type' => 'hidden'));
                ?>
            </div>
		
	
	
	</fieldset>
<?php echo $this->Form->end(__('Enviar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>

		<li> <a  href="../../users/bienvenida"	 >Inicio</a></li>

		<li><?php echo $this->Html->link(__('Regresar'), array('action' => 'nuebus')); ?></li>
		
		
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
    });
 </script>
