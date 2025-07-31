<!--?php echo $this->element('menusinsoporte');?-->
<?php $this->layout = 'formulario' ?>
<?php echo $this->Html->script('ckeditor/ckeditor'); ?>


<div class="actions">

	   	 <li>
		
		<?php echo $this->Html->link(__('Regresar'), array('controller' => 'productosactividades', 'action' => 'nuebus')); ?>
		</li>

	

</div><br>

<div class="actividades form">




<?php echo $this->Form->create('Productosactividad',array('type'=>'file','novalidate'=>'novalidate')); ?>	


	<fieldset>
		<legend><?php echo __('Revisión de soportes anexo tecnico 2018'); ?></legend>

		<div class="row">
			
	<?php
		echo $this->Form->input('id');?>
        
        
		<div class="form-group col-md-12">

	<?php	echo $this->Form->input('observacionsms', array('label'=>'Observacion de Referente Salud Pública','class' => 'form-control','class' => 'ckeditor'));?></div>

	<div class="form-group col-md-4">		
		<?php $options = array(''=>'Elegir','Cumple'=>'Cumple','No Cumple'=>'No Cumple','Pendiente'=>'Pendiente','En proceso'=>'En proceso','No aplica'=>'No aplica');

		echo $this->Form->input('estado',array('label'  => 'Valoracion de la actividad', 'class' => 'form-control select-search', 'type' => 'select', 'options' => $options));	?></div>

	<div class="form-group col-md-6">

	<?php	echo $this->Form->input('referente_id', array('label'=>'Revisó', 'class' => 'form-control select-search'));	?></div>
	
	<div class="form-group col-md-12">
        <h3><?php echo __('Nota'); ?></h3>
         </div>
    <div class="form-group col-md-12">
        <?php echo 'Estados de los soportes:'?></br> </div>
     <div class="form-group col-md-12">
        <?php echo 'Cumple: es aquella actividad que cuenta con todos los soportes, además que estos están realizados de manera adecuada y en los tiempos requeridos. '?></br></div>
     <div class="form-group col-md-12">
        <?php echo 'No Cumple: es aquella actividad que NO se ejecutó de manera adecuado y/o hay debilidades en los soportes entregados'?></br> </div>
      <div class="form-group col-md-12">
        <?php echo 'Pendiente: los soportes requieren ajustes que si bien no afectan el cumplimiento se hacen necesarios complementar para el ajuste del estado (Ej. listados, registro fotográfico)  '?></br> </div>
      <div class="form-group col-md-12">
         <?php echo 'En proceso: los soportes son los requeridos pero que aun estan en desarrollo pues su resultado se evidencia en otro cohrte o  al final de la vigencia'?></br> </div>
      <div class="form-group col-md-12">
         <?php echo 'No aplica: Cuando el soporte o producto no tiene que ver con la dimension evaluada resultado de una incorrecta asociación'?></br> </div>   
	
		</div>
	</fieldset>
<?php echo $this->Form->end(__('Enviar')); ?>

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
</script>

