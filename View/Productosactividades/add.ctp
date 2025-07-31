<?php $this->layout = 'formulario'?>
<!--?php echo $this->element('menupro');?-->

<?php echo $this->Html->script('ckeditor/ckeditor'); ?>

<div class="actividades form">
<?php echo $this->Form->create('Productosactividad',array('type'=>'file','novalidate'=>'novalidate')); ?>
	<fieldset>
		<legend><?php echo __('Soportes productos anexo tecnico 2018'); ?></legend>
	<?php
		echo $this->Form->input('fecha',array('label'  => ' Fecha de registro','type'=>'hidden'));
		//echo $this->Form->input('producto_id'); 
		 		?>
		
	 <div class="row">
	 	
 		
		<div class="form-group col-md-12">
		<?php echo $this->Form->input('producto_id', array('label'=>'Producto', 'type' => 'select', 'class' => 'form-control select-search'));?>	
		</div>
						 
 		<!--div class="form-group col-md-6">
		<?php echo $this->Form->input('porcentaje_act', array('label'=>'Procentaje asignado a tarea'));?>
		</div!-->		
		
 		<div class="form-group col-md-6">
		<?php echo $this->Form->input('porcentaje',array('label'=>'Porcentaje alcanzado de la tarea'))?>
		

		</div>
		 
 		<div class="form-group col-md-12">
		<?php echo('  NOTA: se recomienda elaborar el texto en un editor de texto y copiar luego en este espacio, max. 500 caracteres' );?>
		<?php echo $this->Form->input('observacion');?>
		
		</div>
		 
 		<div class="form-group col-md-4">
		<?php echo $this->Form->input('actividad_id', array('label' => 'Actividades registradas','class' => 'form-control select-search'));?>
		</div>
		 
 		<div class="form-group col-md-4">
		<?php echo $this->Form->input('acta_id', array('label' => 'Actas registradas','class' => 'form-control select-search'));?>
		</div>
		 
 			
		
 		<div class="form-group col-md-4">
 		<?php echo('  NOTA: Cargar en archivo comprimido extensión ".zip" o ".rar" si son varios soportes' );?>
		<?php echo $this->Form->input('anexo',array('label'=>'Soportes','type'=>'file', 'onchange'=>'validarTamanioSoporte()'));?>
		<?php echo $this->Form->input('dirproducto',array('type'=>'hidden'));?>
		</div>

		<div class="form-group col-md-12" class=", actions">
		<h3><?php echo('Enlaces de actividades sistematizadas' );?></h3>
        <?php echo $this->Html->link('Ir Actividades','/actividades/nuebus', array('class' => 'button', 'target' => '_blank'));?>;
        

		</div>
		<div class="form-group col-md-12">
		<?php echo('  NOTA:Enlaces de actividades, copiar la siguiente linea: http://sistemasycomunicaciones.com.co/sistemainformacioncb/SICB/actividades/view/ y al final agregar el id de la actividad' );?>
		</div>

		
		<div class="form-group col-md-12">
		<?php echo('Ejemplo: http://sistemasycomunicaciones.com.co/sistemainformacioncb/SICB/actividades/view/1' );?>
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
		<?php echo $this->Html->link('Ir Actas','/actas/nuebus', array('class' => 'button', 'target' => '_blank'));?>;
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
		<?php $options = array('0'=>'Para revisión');
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