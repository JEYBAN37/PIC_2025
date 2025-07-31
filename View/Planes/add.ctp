<?php $this->layout = 'formulario' ?>
<?php echo $this->Html->script('ckeditor/ckeditor'); ?>
 <div class="planes form">
 <?php echo $this->Form->create('Plan', array('type' => 'file', 'novalidate' => 'novalidate')); ?>
	<fieldset>
		<legend><?php echo __('Agregar Plan de sesión'); ?></legend>

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
       $optiontime =  array(' '=>'Elegir','5 minutos'=>'5 minutos','10 minutos'=>'10 minutos','15 minutos'=>'15 minutos','20 minutos'=>'20 minutos','25 minutos'=>'25 minutos','30 minutos'=>'30 minutos','35 minutos'=>'35 minutos','40 minutos'=>'40 minutos','45 minutos'=>'45 minutos','50 minutos'=>'50 minutos','55 minutos'=>'55 minutos','Una Hora'=>'Una Hora','Una Hora y media'=>'Una Hora y media','Dos Horas'=>'Dos Horas','Tres Horas'=>'Tres Horas','Cuatro horas'=>'Cuatro horas','Seis horas'=>'Seis horas','Ocho horas'=>'Ocho horas');
        ?>



       <div class="row">

       	<!--div class="form-group col-md-4">
        <?php echo $this->Form->input('fecha', $option, array('label'=>'registro')); ?>
        </div-->

       <div class="form-group col-md-4">
		<?php echo $this->Form->input('hora_inicio', array('label'=>'duración del evento/ actividad', 'options'=>$optiontime,'class' => 'form-control select-search'));?>
	   </div>

	    
       <!--div class="form-group col-md-4">
		<?php echo $this->Form->input('hora_fin');?>
		   </div-->

	  
       <div class="form-group col-md-6">
		<?php echo $this->Form->input('sesion', array('label'=>'Sesión N°'));?>
		   </div>

	   
       <div class="form-group col-md-12">
		<?php echo $this->Form->input('tema');?>
  		 </div>


	    <div class="form-group col-md-12">
		   <h3><?php echo 'Intension '?><br></h3>
		  <?php echo 'CUAL ES LA INTENSION DEL EQUIPO CON ESTA ACTIVIDAD, El espíritu de la práctica pedagógica, intensión con s, refiere a algo que se hace con intensidad.'?>
		   </div >
       <div class="form-group col-md-12">
		<?php echo $this->Form->input('intension', array('label' => 'Intension
		'));?>

		   </div>

		   

	   <div class="form-group col-md-12">
		
	   <h2><?php echo 'Premisas '?><br></h2>
	   <?php echo 'Marque con una X la casilla según corresponda. Establecen un norte de los procesos pedagógicos'?>

	   </div>


	   <div class="form-group col-md-4">
		
	  
		<?php echo $this->Form->input('cuerpoterritorio', array('label'=>'Cuerpo territorio', 'options' => array('' => 'Elegir', '0 ' => '-', '1' => 'X'), 'class' => 'form-control'));?>

		   </div>

		<div class="form-group col-md-4">
		<?php echo $this->Form->input('part_significativa', array('label'=>'Participación significativa', 'options' => array('' => 'Elegir', '0 ' => '-', '1' => 'X'), 'class' => 'form-control'));?>

		   </div>


		<div class="form-group col-md-4">
		<?php echo $this->Form->input('ciudadaniaactiva', array('label'=>'Ciudadania activa', 'options' => array('' => 'Elegir', '0 ' => '-', '1' => 'X'), 'class' => 'form-control'));?>

	   </div>
		

		<div class="form-group col-md-12">
		
	   <h2><?php echo 'Enfoques '?><br></h2>
	   <?php echo 'Marque con una X la casilla según corresponda. Se centra en el grupo'?>

	   </div>   
		


		<div class="form-group col-md-4">
		<?php echo $this->Form->input('territorial', array('label'=>'Enfoque territorial', 'options' => array('' => 'Elegir', '0 ' => '-', '1' => 'X'), 'class' => 'form-control'));?>

		   </div>         

		<div class="form-group col-md-4">
		<?php echo $this->Form->input('poblacional', array('label'=>'Enfoque poblacional', 'options' => array('' => 'Elegir', '0 ' => '-', '1' => 'X'), 'class' => 'form-control'));?>

		   </div>         


		<div class="form-group col-md-4">
		<?php echo $this->Form->input('interultural', array('label'=>'Enfoque intercultural', 'options' => array('' => 'Elegir', '0 ' => '-', '1' => 'X'), 'class' => 'form-control'));?>

		   </div>            


		
		<div class="form-group col-md-6">
		<?php echo $this->Form->input('diferencial', array('label'=>'Enfoque diferencial', 'options' => array('' => 'Elegir', '0 ' => '-', '1' => 'X'), 'class' => 'form-control'));?>

		   </div>    

		<div class="form-group col-md-6">
		<?php echo $this->Form->input('genero', array('label'=>'Enfoque de género, Sub_categoria del diferencial', 'options' => array('' => 'Elegir', '0 ' => '-', '1' => 'X'), 'class' => 'form-control'));?>


		   </div>    

		<div class="form-group col-md-12">
		
	   <h2><?php echo 'Objetivos de la estrategia '?><br></h2>
	   <?php echo 'Marque con una X según corresponda. 
       A dónde va dirigido el impacto: al agente singular, a los colectivos y liderazgos o a las instituciones y sus trabajadores
      '?>

	   </div>   

		<div class="form-group col-md-4">
		<?php echo $this->Form->input('obj_individuos', array('label'=>'Objetivo 1','options' => array('' => 'Elegir', '0 ' => '-', '1' => 'X'), 'class' => 'form-control'));?>
		<?php echo 'Fortalecer la capacidad de agencia en torno al bienestar individual y del entorno cercano, promoviendo procesos reflexivos, basados en la autonomía, el afecto y la construcción del conocimiento en relación con la promoción de la salud'?>


		   </div> 

			<div class="form-group col-md-4">
		<?php echo $this->Form->input('obj_organizaciones', array('label'=>'Objetivo 2', 'options' => array('' => 'Elegir', '0 ' => '-', '1' => 'X'), 'class' => 'form-control'));?>
		<?php echo 'Fortalecer las organizaciones sociales y los liderazgos propositivos a partir de la transformación de la cultura política en relación con el derecho a la salud, incrementando su capacidad de agencia e incidencia colectiva en la toma de decisiones que afectan su bienestar y calidad de vida.'?>


		   </div> 

			<div class="form-group col-md-4">
		<?php echo $this->Form->input('obj_instituciones', array('label'=>'Objetivo 3', 'options' => array('' => 'Elegir', '0 ' => '-', '1' => 'X'), 'class' => 'form-control'));?>
			<?php echo 'Contribuir con el mejoramiento de la capacidad de respuesta de las instituciones a las necesidades y demandas de la ciudadanía en relación con el derecho a la salud, promoviendo la participación cualificada de los diferentes actores sociales y fomentando la articulación intra e interinstitucional.'?>

		   </div> 
		   
		<div class="form-group col-md-12">
		<?php echo $this->Form->input('objetivog', array('label'=>'Objetivo general de la actividad pedagogica. El objetivo debe ser medible y alcanzable'));?>
		
		   </div> 
		   

		 <div class="form-group col-md-12">
		<?php echo $this->Form->input('objetivoe', array('label'=>'Objetivos especificos. Los objetivos van de acuerdo a los momentos metodológicos, concretan las intenciones educativas y contribuyen al logro del objetivo de la actividad pedagógica', 'class' => 'ckeditor'));?>

		   </div> 


		 <div class="form-group col-md-12">
		
		   <h2><?php echo 'Poblaciones '?><br></h2> 

		   <p>	<?php echo 'Copie de esta lista a la casilla siguiente las poblaciones participantes o escriba otras que no esten categorizadas.'?></p>	
		    	  
			<?php echo	'1. Población en general 2. Hombres	 3. Mujeres	4. Niños y niñas 5. Adolescentes 6. Adultos	7. Afrocolombianos 	8. Campesinos	 9. Habitantes de Calle		10. Indígenas  11. Líderes y lideresas  12. Madres gestantes  13. Madres Lactantes  14. Población con situación de discapacidad 15. Población LGBTI 16. Población privada de la libertad 17. Población desmovilizada 18. Población víctima de conflicto armado 19. Población víctima de violencia 20. Trabajadores(as) sexuales	21. Instituciones'?> 
		 
		 </div>   

		 <div class="form-group col-md-12">
		<?php echo $this->Form->input('tipoblacion', array('label'=>'Tipo de poblacion participante.'));?>

		   </div> 


		<div class="form-group col-md-6">
		<?php echo $this->Form->input('proceso', array('label' => '12° Tipo  de proceso',
                    'options' => array('' => 'Elegir', '1. Articulación' => '1. Articulación', '2. Educación y Comunicación ' => '2. Educación y Comunicación ', '3. Fortalecimiento y Formación ' => '3. Fortalecimiento y Formación ', '4. Gestión del  Conocimiento ' => '4. Gestión del  Conocimiento ', '5. Otro ' => '5. Otro '), 'class' => 'form-control'));
                ?>

		   </div> 
		   
		   
		 <div class="form-group col-md-6">

		<?php  $optiondim = array('' => 'Elegir', 'CSSM' => 'Convivencia Social y Salud Mental', 'FAS' => 'Fortalecimiento de la Autoridad Sanitaria', 'S_Ambiental' => 'Salud Ambiental', 'EMGYD' => 'Salud Pública Emergencias y desastres', 'SAL' => 'Salud y Ámbito Laboral', 'SAN' => 'Seguridad Alimentaria y Nutricional', 'DSDR' => 'Sexualidad, Derechos Sexuales y Reproductivos', 'GDPV' => 'Transversal Gestión Diferencial de Poblaciones Vulnerables', 'VSCNT' => 'Vida Saludable y Condiciones no Transmisibles', 'VSET' => 'Vida Saludable y Enfermedades Transmisibles', 'TDE' => 'Todas las Dimensiones Enfoques', 'TDEC' => 'Todas las Dimensiones Educación y Comunicación','TDF'=>'Todas las dimensiones Fortalecimiento','TDG'=>'Todas las Dimensiones Gestión','TDMP'=>'Todas las dimensiones Modo Pedagógico','TD_OBJ'=>'Todas las Dimensiones Objeivos');

		     echo $this->Form->input('dimension', array('type' => 'select','class'=>'form-control select-search','options'=>$optiondim));?>

		   </div> 
		   

		 <!--div class="form-group col-md-12">
		<?php echo $this->Form->input('equipores');?>

		   </div--> 
		   
		   <div class="form-group col-md-12">
	           <h2><?php echo 'Momentos pedagógicos'?></h2> 
  	  
	       </div>   

		 <div class="form-group col-md-8">
		<?php  echo $this->Form->input('momento',array('label'  => '(Nombre del momento)Primer momento, sensibilizar y activar'));?>


		   </div>  
		               
	 <div class="form-group col-md-4">
			<?php

			//$optiontime =  array(' '=>'Elegir','15'=>'15 minutos',' 30'=>'30 minutos','40'=>'40 minutos','60'=>'Una Hora','90'=>'Una Hora y media','120'=>'Dos Horas','180'=>'Tres Horas');

			echo $this->Form->input('duracion',array('label'  => 'Duración de actividad', 'type' => 'select','class'=>'form-control','options'=> $optiontime));?>

			   </div> 

			    <div class="form-group col-md-12">
			<?php echo $this->Form->input('metodologia',array('label'  => 'Metodología utilizada', 'class' => 'ckeditor'));?>

			   </div>   		
			
			     <div class="form-group col-md-12">
			<?php echo $this->Form->input('resultado0',array('label'=>'Resultado primer momento'));?>

			   </div> 

			    <div class="form-group col-md-8">
			<?php echo $this->Form->input('momentouno',array('label'  => '(Nombre del momento)segundo momento, usar recursos temáticos, técnicos y pedagógicos. Momento central '));?>


			   </div>   

			    <div class="form-group col-md-4">
			<?php echo $this->Form->input('duracionuno',array('label'  => 'Duración de actividad', 'type' => 'select','class'=>'form-control','options'=>$optiontime ));?>
			   </div>   


			    <div class="form-group col-md-12">
			<?php echo $this->Form->input('metodologiauno',array('label'  => 'Metodología utilizada', 'class' => 'ckeditor'));?>

			   </div>   

			
			    <div class="form-group col-md-12">
			<?php echo $this->Form->input('resultadouno',array('label'=>'Resultado segundo momento'));?>

			   </div>   


			    <div class="form-group col-md-8">
			<?php echo $this->Form->input('momentodos',array('label'  => '(Nombre del momento)tercer momento, reflexión-retroalimentación, es la imagen mental de lo que quiero que pase'));?>

			   </div>   


			    <div class="form-group col-md-4">
			<?php echo $this->Form->input('duraciondos',array('label'  => 'Duración de actividad', 'type' => 'select','class'=>'form-control','options'=>$optiontime ));?>

			   </div>   


			    <div class="form-group col-md-12">
			<?php echo $this->Form->input('metodologiados',array('label'  => 'Metodología utilizada', 'class' => 'ckeditor'));?>


			   </div>   

			    <div class="form-group col-md-12">
			<?php echo $this->Form->input('resultadodos',array('label'=>'Resultado tercer momento'));?>

			   </div>   


			    <div class="form-group col-md-8">
			<?php echo $this->Form->input('momentotres',array('label'  => '(Nombre del momento)cuarto momento, reflexión-retroalimentación, es la imagen mental de lo que quiero que pase'));?>

			   </div>   

			    <div class="form-group col-md-4">
			<?php echo $this->Form->input('duraciontres',array('label'  => 'Duración de actividad', 'type' => 'select','class'=>'form-control','options'=>$optiontime ));?>

			   </div>  

			     <div class="form-group col-md-12">
			<?php echo $this->Form->input('metodologiatres',array('label'  => 'Metodología utilizada', 'class' => 'ckeditor'));?>


			   </div>  

			     <div class="form-group col-md-12">
			<?php echo $this->Form->input('resultadotres',array('label'=>'Resultado cuarto momento'));?>

			   </div> 	

			     <div class="form-group col-md-8">
			<?php echo $this->Form->input('momentocuatro',array('label'  => '(Nombre del momento)quinto momento, reflexión-retroalimentación, es la imagen mental de lo que quiero que pase'));?>


			   </div>   

			    <div class="form-group col-md-4">
			<?php echo $this->Form->input('duracioncuatro',array('label'  => 'Duración de actividad', 'type' => 'select','class'=>'form-control','options'=>$optiontime ));?>


			   </div>  

			     <div class="form-group col-md-12">
			<?php echo $this->Form->input('metodologiacuatro',array('label'  => 'Metodología utilizada', 'class' => 'ckeditor'));?>

			   </div>  

			     <div class="form-group col-md-12">
			<?php echo $this->Form->input('resultadocuatro',array('label'=>'Resultado quinto momento'));?>

			   </div> 	


			     <div class="form-group col-md-12">
			<?php echo $this->Form->input('insumo',array('label'=>'Insumos o materiales reqeridos en cada momento','class'=>'ckeditor'));?>

			   </div>  

			   

			     <!--div class="form-group col-md-12">
			<?php echo $this->Form->input('tematica');?>

			   </div>  

			    <div class="form-group col-md-12">
			<?php echo $this->Form->input('resultado');?>

			   </div-->  

			   

			    <div class="form-group col-md-12">
			<?php echo $this->Form->input('preguntasentido', array('label'=>'Preguntas de sentido. La información propende por generar conciencia, sujeto-tiempo-espacio, las preguntas construyen','class'=>'ckeditor' ));?>

			   </div>  

			    <div class="form-group col-md-12">
			 <?php echo  'Atribuya valor a cada uno de los ítems según haya seleccionado al inicio del formato.' ?>

			 	</div> 

			   <div class="form-group col-md-4">
			<?php
				$optionpuntaje = array(' ' => 'Elegir', '1 No tiene' => '1 No tiene', '2 Poca' => '2 Poca', '3 Moderada' => '3 Moderada', '4 Fuerte' => '4 Fuerte', '5 Muy Fuerte' => '5 Muy Fuerte');

			 echo $this->Form->input('califi_obj1',array('label'  => 'Objetivo 1', 'type' => 'select','class'=>'form-control','options'=>$optionpuntaje ));?>

			   </div>  


			   <div class="form-group col-md-4">
			<?php echo $this->Form->input('califi_obj2',array('label'  => 'Objetivo 2', 'type' => 'select','class'=>'form-control','options'=>$optionpuntaje ));?>


			   </div>  

			   <div class="form-group col-md-4">
			<?php echo $this->Form->input('califi_obj3',array('label'  => 'Objetivo 3', 'type' => 'select','class'=>'form-control','options'=>$optionpuntaje ));?>


			   </div> 

			   <div class="form-group col-md-4">
			<?php echo $this->Form->input('califi_premisa_ct',array('label'  => 'Cuerpo territorio', 'type' => 'select','class'=>'form-control','options'=>$optionpuntaje ));?>

			   </div> 


			   <div class="form-group col-md-4">
			<?php echo $this->Form->input('califi_premisa_ps',array('label'  => 'Participación significativa', 'type' => 'select','class'=>'form-control','options'=>$optionpuntaje ));?>

			   </div> 

			   <div class="form-group col-md-4">
			<?php echo $this->Form->input('califi_premisa_ca',array('label'  => 'Ciudadania activa', 'type' => 'select','class'=>'form-control','options'=>$optionpuntaje ));?>
			   </div> 

			   <div class="form-group col-md-3">
			<?php echo $this->Form->input('califi_enfo_territorial',array('label'  => 'Territorial', 'type' => 'select','class'=>'form-control','options'=>$optionpuntaje ));?>

			   </div>  

			   <div class="form-group col-md-3">
			<?php echo $this->Form->input('califi_enfo_poblacional',array('label'  => 'Poblacional', 'type' => 'select','class'=>'form-control','options'=>$optionpuntaje ));?>

			   </div>  

			   <div class="form-group col-md-3">
			<?php echo $this->Form->input('califi_enfo_intercultural',array('label'  => 'Intercultural', 'type' => 'select','class'=>'form-control','options'=>$optionpuntaje ));?>

			   </div>   

			   <div class="form-group col-md-3">
			<?php echo $this->Form->input('califi_enfo_diferencial',array('label'  => 'Diferencial', 'type' => 'select','class'=>'form-control','options'=>$optionpuntaje ));?>

			   </div> 

			   <!--div class="form-group col-md-12">
			<?php echo $this->Form->input('digitador');?>

			   </div-->     

			<div class="form-group col-md-6">
                <?php
                echo(' Adjuntar anexo');
                echo(' NOTA: Cargar el archivo comprimido extensión ".zip" o ".rar" si son varios soportes plan se sesion, documentos de apoyo claves para el desarrollo' );
                echo $this->Form->input('anexo', array('label' => 'Soportes', 'type' => 'file' , 'class' => 'form-control'));
                echo $this->Form->input('dirplanes',array('type'=>'hidden'));
                 echo('El nombre del archivo no tiene que tener tildes o diéresis' );
            ?>
            </div>
            
            <div class="form-group col-md-12">
			<?php echo $this->Form->input('enlaceurl',array('label'=>'Enlace de insumos propuestos'));?>

			   </div> 

            <div class="form-group col-md-6">
                <?php
                echo $this->Form->input('responsable_id', array('label' => 'Responsable de registro', 'class' => 'form-control select-search'));
                echo $this->Form->input('fecharegistro', array('label' => ' Fecha de registro', 'type' => 'hidden'));
                ?>
            </div>
			  

			  
	

	</div>



	</fieldset>
	<?php echo $this->Form->end(__('Submit')); ?>
	</div>
	<div class="actions">
		<h3><?php echo __('Actions'); ?></h3>
		<ul>

		<li><?php echo $this->Html->link(__('Regresar'), array('controller' => 'actividades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de Planes'), array('action' => 'nuebus')); ?></li>
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