<!--?php echo $this->element('menupro');?-->
<?php $this->layout = 'formulario'?>
<?php echo $this->Html->script('ckeditor/ckeditor'); ?>
<div class="actividades form">
<?php echo $this->Form->create('Productosactividad',array('type'=>'file','novalidate'=>'novalidate')); ?>
	<fieldset>
		<legend><?php echo __('Editar soporte Anexo Tecnico 2018'); ?></legend>
	<?php
		echo $this->Form->input('id');?>
		<?php
		echo $this->Form->input('fecha',array('label'  => ' Fecha de registro','type'=>'hidden'));
		//echo $this->Form->input('producto_id');
		 
		  $option4 = array('' => 'Elegir', '1 Estrategia comunitaria de fortalecimiento' => '1 Estrategia comunitaria de fortalecimiento', '2 Campaña "Mi cuerpo habla dice respeto"' => '2 Campana Mi cuerpo habla dice respeto', '3 Aplicativo móvil "Vive sin violencia"' => '3 Aplicativo móvil Vive sin violencia ', '4 Prevención y mitigación consumo SPA' => '4 Prevención y mitigación consumo SPA', '5 Plan pedagógico potenciar relación con el SER' => '5 Plan pedagógico potenciar relación con el SER', '6 Eventos masivos CSSM' => '6 Eventos masivos CSSM', '7 Proceso pedagógico ACSM' => '7 Proceso pedagógico ACSM', '8 Plan estratégico prevención suicidio' => '8 Plan estratégico prevención suicidio', '9 Proceso pedagógico Mesa de Victimas' => '9 Proceso pedagógico Mesa de Victimas', '10 Incorporación Enfoques' => '10 Incorporación Enfoques', '11 Estructura técnica y Org. Fort. Y EPPS' => '11 Estructura técnica y Org. Fort. Y EPPS', '12 Fortalecimiento organizaciones sociales' => '12 Fortalecimiento organizaciones sociales', '13 Indicador Fortalecimiento' => '13 Indicador Fortalecimiento', '14 Indicadores Objs. 1 y 3' => '14 Indicadores Objs. 1 y 3', '15 Sesiones Mesa de Salud Colectivas' => '15 Sesiones Mesa de Salud Colectivas', '16 Sexta versión iniciativas sociales' => '16 Sexta versión iniciativas sociales', '17 Construcción PPSC' => '17 Construcción PPSC', '18 Admón. SICB' => '18 Admón. SICB', '19 Indicadores CB' => '19 Indicadores CB', '20 Informe MSC y ASGSS' => '20 Informe MSC y ASGSS', '21 Documento CB 2017' => '21 Documento CB 2017', '22 SIGP' => '22 SIGP', '23 Incorporación Modo pedagógico' => '23 Incorporación Modo pedagógico', '24 Plan estratégico de Comunicación CB' => '24 Plan estratégico de Comunicación CB', '25 Video Documental' => '25 Video Documental', '26 Programa voluntariado' => '26 Programa voluntariado', '27 Estrategia Comunicación Alternativa Tomate la Vida' => '27 Estrategia Comunicación Alternativa Tomate la Vida', '28 Estrategia Comunicación Alternativa Tomate la Vida F 6 y 9' => '28 Estrategia Comunicación Alternativa Tomate la Vida F 6 y 9', '29 Estrategia Comunicación Alternativa Tomate la Vida F 7 y 9' => '29 Estrategia Comunicación Alternativa Tomate la Vida F 7 y 9', '30 Estrategia Comunicación Alternativa Tomate la Vida F 8 y 9' => '30 Estrategia Comunicación Alternativa Tomate la Vida F 8 y 9', '31 Eventos masivos VSCNT' => '31 Eventos masivos VSCNT', '32 P. A. promoción entorno escolar' => '32 P. A. promoción entorno escolar', '33 Estrategia planto mis derechos' => '33 Estrategia planto mis derechos', '34 Programa Nacional de Geohelmintiasis'=> '34 Programa Nacional de Geohelmintiasis', '35 Unidades centinela' => '35 Unidades centinela', '36 Evento Habitantes de Calle' => '36 Evento Habitantes de Calle', '37 Curso virtual lengua de señas' => '37 Curso virtual lengua de señas','38 Estrategia "Familias Fuertes"'=>'38 Estrategia "Familias Fuertes"','39 Estrategia comunicacional derechos GDPV'=>'39 Estrategia comunicacional derechos GDPV','40 Fortalecimiento Escuela Campesina'=>'40 Fortalecimiento Escuela Campesina','41 Proceso implementación huertas caseras'=>'41 Proceso implementación huertas caseras','42 Donantes banco de leche humana'=>'42 Donantes banco de leche humana','43 Proceso Escuela de Gestores'=>'43 Proceso Escuela de Gestores','44 Evento SMLM'=>'44 Evento SMLM','45 Mindala día de la alimentación'=>'45 Mindala día de la alimentación','46 Proceso plan SAN'=>'46 Proceso plan SAN','47 Vinculación NDA a PRN47 Vinculación NDA a PRN'=>'47 Vinculación NDA a PRN','48 Promoción Maternidad Segura'=>'48 Promoción Maternidad Segura','49 Proceso veeduría SSAAJ'=>'49 Proceso veeduría SSAAJ','50 Proceso semilleros D&D50 Proceso semilleros D&D'=>'50 Proceso semilleros D&D','51 Conmemoración Semana Andina PEA51 Conmemoración Semana Andina PEA'=>'51 Conmemoración Semana Andina PEA','52 Proceso D&D padres52 Proceso D&D padres'=>'52 Proceso D&D padres','53 Campaña comunicación VIH/SIDA53 Campaña comunicación VIH/SIDA'=>'53 Campaña comunicación VIH/SIDA','54 Conmemoración día mundial respuesta positiva VIH'=>'54 Conmemoración día mundial respuesta positiva VIH','55 Curso virtual DSDR'=>'55 Curso virtual DSDR','56 Promoción PAI'=>'56 Promoción PAI','57 Prevención Tuberculosis'=>'57 Prevención Tuberculosis','58 Prevención uso de pólvora'=>'58 Prevención uso de pólvora','59 Evento dia de la salud en el mundo del trabajo'=>'59 Evento dia de la salud en el mundo del trabajo','60 Construccion y ejecucion plan Acción CIETI'=>'60 Construcción y ejecución plan Acción CIETI','61 Plan Seguridad y Salud en el Trabajo trabajadores informales'=>'61 Plan Seguridad y Salud en el Trabajo - trabajadores informales','62 Fortalecimiento colectivo Civico Potrerillo'=>'62 Fortalecimiento colectivo Civico Potrerillo');


		
		$optiondim = array('' => 'Elegir', 'CSSM' => 'Convivencia Social y Salud Mental', 'FAS' => 'Fortalecimiento de la Autoridad Sanitaria', 'S_Ambiental' => 'Salud Ambiental', 'EMGYD' => 'Salud Pública Emergencias y desastres', 'SAL' => 'Salud y Ámbito Laboral', 'SAN' => 'Seguridad Alimentaria y Nutricional', 'DSDR' => 'Sexualidad, Derechos Sexuales y Reproductivos', 'GDPV' => 'Transversal Gestión Diferencial de Poblaciones Vulnerables', 'VSCNT' => 'Vida Saludable y Condiciones no Transmisibles', 'VSET' => 'Vida Saludable y Enfermedades Transmisibles', 'TDE' => 'Todas las Dimensiones Enfoques', 'TDEC' => 'Todas las Dimensiones Educación y Comunicación','TDF'=>'Todas las dimensiones Fortalecimiento','TDG'=>'Todas las Dimensiones Gestión','TDMP'=>'Todas las dimensiones Modo Pedagógico','TD_OBJ'=>'Todas las Dimensiones Objeivos');
		?>
		
	  <div class="row">

	 	<div class="form-group col-md-6">
		<?php echo $this->Form->input('proceso', array('label' => '12° Tipo  de proceso',
                    'options' => array('' => 'Elegir', '1. Articulación' => '1. Articulación', '2. Educación y Comunicación ' => '2. Educación y Comunicación ', '3. Fortalecimiento y Formación ' => '3. Fortalecimiento y Formación ', '4. Gestión del  Conocimiento ' => '4. Gestión del  Conocimiento ', '5. Otro ' => '5. Otro '), 'class' => 'form-control select-search'));
                ?>

		   </div> 

 		<div class="form-group col-md-6">
		<?php echo $this->Form->input('dim',array('label'  => 'Dimensión', 'type' => 'select', 'options' => $optiondim, 'class' => 'form-control select-search'));?>
		</div>	
		
 		<div class="form-group col-md-6">
		<?php echo $this->Form->input('pro', array('label'=>'Producto', 'type' => 'select', 'options' => $option4 ,'class' => 'form-control select-search'));?>	
		</div>
		

 		<div class="form-group col-md-12">
		<?php echo $this->Form->input('task',array('label'=>'Tarea del producto', 'class' => 'form-control',));?>
		</div>
		 
 		<div class="form-group col-md-6">
		<?php echo $this->Form->input('porcentaje_act', array('label'=>'Procentaje asignado a tarea'));?>
		</div>		
		
 		<div class="form-group col-md-6">
		<?php echo $this->Form->input('porcentaje',array('label'=>'Porcentaje alcanzado de la tarea'))?>
		</div>
		 
 		<div class="form-group col-md-12">
		<?php echo('  NOTA: se recomienda elaborar el texto en un editor de texto y copiar luego en este espacio, max. 500 caracteres' );?>
		<?php echo $this->Form->input('observacion', array('class'=>'ckeditor'));?>
		
		</div>
		 
 		<div class="form-group col-md-6">
		<?php echo $this->Form->input('actividad_id', array('label' => 'Actividades registradas','class' => 'form-control select-search'));?>
		</div>
		 
 		<div class="form-group col-md-6">
		<?php echo $this->Form->input('acta_id', array('label' => 'Actas registradas','class' => 'form-control select-search'));?>
		</div>
		 
 			
		
 		<div class="form-group col-md-8">
 		<?php echo('  NOTA: Cargar en archivo comprimido extensión ".zip" o ".rar" si son varios soportes' );?>
		<?php echo $this->Form->input('anexo',array('label'=>'Actualizar soportes','type'=>'file', 'onchange'=>'validarTamanioSoporte()'));?>
		<?php echo $this->Form->input('dirproducto',array('type'=>'hidden'));?>
		</div>


            
                 <div class="form-group col-md-4">
               
                <?php               

                echo $this->Form->input('anexo', array('label'=>'archivos cargados', 'readonly'));
                               
                ?>
               </div>

		<div class="form-group col-md-12">
		<h3><?php echo('Enlaces de actividades sistematizadas' );?></h3>
		</div>
		<div class="form-group col-md-12">
		<?php echo('  NOTA:Enlaces de actividades, copiar la siguiente linea: http://sistemasycomunicaciones.com.co/sistemainformacioncb/SICB/actividades/view/ y al final agregar el id de la actividad' );?>
		</div>

		
		<div class="form-group col-md-12">
		<?php echo('  Ejemplo: http://sistemasycomunicaciones.com.co/sistemainformacioncb/SICB/actividades/view/1' );?>
		</div>

		<div class="form-group col-md-4">
		
		<?php echo $this->Form->input('actividad1', array('label'=>'Actividad relacionada a la tarea'));?></div>
		<div class="form-group col-md-4">
		<?php echo $this->Form->input('actividad2', array('label'=>'Actividad relacionada a la tarea'));?></div>
		<div class="form-group col-md-4">
		<?php echo $this->Form->input('actividad3', array('label'=>'Actividad relacionada a la tarea'));?>
		</div>

		<div class="form-group col-md-12">
		<h3><?php echo('Enlaces de actas' );?></h3>
		</div>
		<div class="form-group col-md-12">
		<?php echo('  NOTA:Enlaces de actas, copiar la siguiente linea: http://sistemasycomunicaciones.com.co/sistemainformacioncb/SICB/actas/view/  y al final agregar el id del acta' );?>
		</div>

		<div class="form-group col-md-12">
		<?php echo('  Ejemplo: http://sistemasycomunicaciones.com.co/sistemainformacioncb/SICB/actas/view/1' );?>
		</div>

		<div class="form-group col-md-4">
		
		<?php echo $this->Form->input('acta1', array('label'=>'Acta relacionada a la tarea'));?></div>
		<div class="form-group col-md-4">
		<?php echo $this->Form->input('acta2', array('label'=>'Acta relacionada a la tarea'));?></div>
		<div class="form-group col-md-4">
		<?php echo $this->Form->input('acta3', array('label'=>'Acta relacionada a la tarea'));?>
		</div>

		<div class="form-group col-md-12">
		<h3><?php echo('Enlaces adicionales' );?></h3>
		</div>

		<div class="form-group col-md-12">
		<?php echo('  NOTA:Soporte adicionales opcionales' );?>
		</div>

		<div class="form-group col-md-4">
		
		<?php echo $this->Form->input('enlaceuno', array('label'=>'Enlace adicional'));?></div>
		<div class="form-group col-md-4">
		<?php echo $this->Form->input('enlacedos', array('label'=>'Enlace adicional'));?></div>
		<div class="form-group col-md-4">
		<?php echo $this->Form->input('enlacetres', array('label'=>'enlace adicional'));?>
		</div>



		
		<div class="form-group col-md-6">
		<?php $options = array(''=>'Elegir','Actualizado'=>'Actualizado','Corregido'=>'Corregido');
		echo $this->Form->input('estado',array('label'  => 'Estado', 'type' => 'select', 'options' => $options ,'class' => 'form-control select-search'));?>
		</div>
		<div class="form-group col-md-6">
		<?php echo $this->Form->input('responsable_id', array('class' => 'form-control select-search'));?>
		</div>

	</div>
	</fieldset>
	<?php echo $this->Form->end(__('Submit')); ?>
</div>


<div class="actions">
        <ul>

        <li><?php echo $this->Html->link(__('Consultas'), array('action' => 'nuebus')); ?></li>

        <li>
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
    	var auxFile = document.getElementById('ProductosactividadAnexo');
    	var sizeF = auxFile.files[0].size;
    	if(sizeF > 5000000)
    	{
    		alert('El archivo debe ser menor a 5 Mb');
    		auxFile.value = '';
    	}
    }
</script>