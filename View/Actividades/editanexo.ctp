		
<?php $this->layout = 'formulario'?>
<div class="actividades form">
<?php echo $this->Form->create('Actividad', array('type'=>'file','novalidate'=>'novalidate')); ?>
	<fieldset>
		<legend><?php echo __('Modificar anexo actividad'); ?></legend>
			
		<div class="form-group col-md-12">
			<?php
				echo $this->Form->input('id');
				echo('Adjuntar anexo');

				echo $this->Form->input('anexo', array('label'=>'archivos cargados', 'readonly'));
				
				    echo $this->Form->input('anexo',array('label'=>'Actualizar soportes','type'=>'file', 'onchange'=>'validarTamanioSoporte(this)'));


				echo('NOTA: Cargar en archivo comprimido extensión ".zip" o ".rar" * listado asistencia .pdf * Plan sesion .pdf * tres(3) fotos reslucion 600px * 600px' );
				echo $this->Form->input('dir',array('type'=>'hidden'));	
				
				echo $this->Form->input('actualizado',array('label'  => ' Fecha de actualización','type'=>'hidden'));	
			?>
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
	</ul>
</div>


<?php
$this->Html->css([
    'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'
        ], ['block' => 'css']
);
$this->Html->script([
    'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js'
        ], ['block' => 'script']
);
?>

<script type="text/javascript">
    
    
    function validarTamanioSoporte(control){
        var sizeF = control.files[0].size;
        if(sizeF > 5000000)
        {
            alert('El archivo debe ser menor a 5 Mb');
            control.value = '';
        }
    }
  </script>