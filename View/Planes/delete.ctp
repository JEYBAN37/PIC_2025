<?php $this->layout = 'formulario' ?>
<?php echo $this->Html->script('ckeditor/ckeditor'); ?>
 <div class="planes form">
<?php echo $this->Form->create('Plan', array('type'=>'file','novalidate'=>'novalidate')); ?>
	<fieldset>
		<legend><?php echo __('Modificar anexo de plan de sesión'); ?></legend>
			
		 <?php
		echo $this->Form->input('id');?>
		<div class="form-group col-md-12">
               
                <?php
               
                echo $this->Form->input('anexo', array('label'=>'archivos cargados', 'readonly'));
                                
                ?>
            </div>

		<div class="form-group col-md-12">
		
                <?php
                echo(' Actualizar anexo');
                echo(' NOTA: Cargar el archivo comprimido extensión ".zip" o ".rar" si son varios soportes plan se sesion, documentos de apoyo claves para el desarrollo' );
                echo $this->Form->input('anexo', array('label' => 'Soportes', 'type' => 'file' , 'class' => 'form-control'));
                echo $this->Form->input('dirplanes',array('type'=>'hidden'));
                 echo('El nombre del archivo no tiene que tener tildes o diéresis' );
            
            
				echo $this->Form->input('actualizado',array('label'  => ' Fecha de actualización','type'=>'hidden'));	
			?>
		</div>
	
	</fieldset>
<?php echo $this->Form->end(__('Enviar')); ?>
</div>

<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
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