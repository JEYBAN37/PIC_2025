 <div class="container">
 	<div class="row">



 		<div class="col-lg-12">
 			<div class="panel panel-default">
 				<div class="panel-heading" class="page-header">

 					<?php $this->layout = 'formulario' ?>
 					<?php echo $this->Html->script('ckeditor/ckeditor'); ?>

 				</div>
 		

 				<?php echo $this->Form->create('Acta', array('type' => 'file', 'novalidate' => 'novalidate')); ?>
 				<fieldset>
				 <h1 class="page-header">Actualizar soporte </h1>


 				
 					<div class="form-group col-md-12">
					 <p class="help-block"> Tenga en cuenta renombrara el archivo agregando al final el numero de la versión Ejemplo V1,V2</p>
 						<?php
							echo $this->Form->input('id');							
							echo $this->Form->input('anexo', array('label' => 'archivos cargados', 'readonly'));
							echo $this->Form->input('anexo', array('label' => 'Actualizar soportes', 'type' => 'file', 'onchange' => 'validarTamanioSoporte(this)'));

							echo $this->Form->input('dir', array('type' => 'hidden'));
							echo $this->Form->input('actualizado', array('label'  => ' Fecha de actualización', 'type' => 'hidden'));
							?>
 					</div>
				 </fieldset>
				 
				 <div class="row">

                    <div class="form-group col-md-6">
                        <?php echo $this->Form->submit('Guardar'); ?>
                    </div>
                </div>
 				

 			</div>
 		</div>
 	</div>
 </div>



 <?php
	$this->Html->css([
		'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'
	], ['block' => 'css']);
	$this->Html->script([
		'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js'
	], ['block' => 'script']);
	?>

 <script type="text/javascript">
 	function validarTamanioSoporte(control) {
 		var sizeF = control.files[0].size;
 		if (sizeF > 4000000) {
 			alert('El archivo debe ser menor a 4 Mb');
 			control.value = '';
 		}
 	}
 </script>