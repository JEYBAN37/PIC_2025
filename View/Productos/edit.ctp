<?php $this->layout = 'formulario' ?>´
<?php echo $this->element('menu_actas_frm'); ?>
<?php echo $this->Html->script('ckeditor/ckeditor'); ?>


<div class="productos form">
<?php echo $this->Form->create('Producto'); ?>
	<fieldset>
		<legend><?php echo __('Agregar soporte'); ?></legend>
	
<?php echo $this->Form->input('id');?>


 <div class="row">
            <div class="form-group col-md-4">
                <?php echo $this->Form->input('numproductos'); ?>
            </div>
            <div class="form-group col-md-4">
                <?php
               echo $this->Form->input('lineas');
                ?>
            </div>
            <div class="form-group col-md-4">
                <?php
                echo $this->Form->input('dimensiones');
                ?>
            </div>
            <div class="form-group col-md-12">
                <?php
                echo ('Ingrese aquí exclusivamente el título de la temática tratada. No incluya poblaciones, lugares de realización de la actividad o ningún otro dato.');
                echo $this->Form->input('nombredim');
            ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                echo $this->Form->input('costodim');
            ?>
            </div>
            
            <div class="form-group col-md-6">
                <?php
                echo ('Si seleccionó  ‘barrio’ coloque en la casilla Barrio/vereda ‘No aplica’');
                echo $this->Form->input('linormativas');
            ?>
            </div>
          
                    
                        
            <div class="form-group col-md-12">
                <?php
                echo $this->Form->input('resultado');
            ?>
            </div>
            <div class="form-group col-md-12">
                <?php
                echo $this->Form->input('activity');
            ?>
            </div>
          
            
            <div class="form-group col-md-12">
                <?php
                echo $this->Form->input('vidacursos');
            ?>
            </div>
            <div class="form-group col-md-12">
                <?php
                echo 'Agrege en este campo el nombre de la Organización o grupo con el cual realizó la actividad formativa';
                echo $this->Form->input('entorno');
            ?>
            </div>
            <div class="form-group col-md-12">
                <?php
               echo $this->Form->input('tecnologias');
            ?>
            </div>

            <div class="form-group col-md-12">
                <?php
                echo $this->Form->input('porcproducto');
            ?>
            </div>
            <div class="form-group col-md-12">
                <?php
                echo('Registre los momentos desarrollados de la actividad mas importantes (max 1000 caracteres)');
                  echo $this->Form->input('tarea');
            ?>
            </div>
            <div class="form-group col-md-12">
                <?php
                echo('Registre los compromisos y tareas de la reunión');
               echo $this->Form->input('porctareas');
            ?>
            </div>

           <div class="form-group col-md-6">
                <?php

                echo $this->Form->input('porcentajeavance');
              
            ?>
            </div>
            <div class="form-group col-md-6">
                <?php
                echo('Favor registrar fecha y lugar de la proxima convocatoria');
                echo $this->Form->input('clasobjetivos');
            ?>
            </div>

             <div class="form-group col-md-6">
                <?php
                echo('Favor registrar fecha y lugar de la proxima convocatoria');
                echo $this->Form->input('evidencia');
            ?>
            </div>

            <div class="form-group col-md-6">
                <?php
                echo('Favor registrar fecha y lugar de la proxima convocatoria');
                echo $this->Form->input('enlace');
            ?>
            </div>

            <div class="form-group col-md-6">
                <?php
                echo('Favor registrar fecha y lugar de la proxima convocatoria');
                echo $this->Form->input('enlacedos');
            ?>
            </div>

             <div class="form-group col-md-6">
                <?php
                echo('Favor registrar fecha y lugar de la proxima convocatoria');
                echo $this->Form->input('observacionpic');
            ?>
            </div>

             <div class="form-group col-md-6">
                <?php
                echo('Favor registrar fecha y lugar de la proxima convocatoria');
                echo $this->Form->input('observacionsms');
            ?>
            </div>

            <div class="form-group col-md-6">
                <?php
                echo('Favor registrar fecha y lugar de la proxima convocatoria');
                echo $this->Form->input('estado');
            ?>
            </div>
           
            <div class="form-group col-md-6">
                <?php
                echo $this->Form->input('responsable_id', array('label' => 'Responsable de registro', 'class' => 'form-control select-search'));


                echo $this->Form->input('fecha_registro', array('label' => ' Fecha de registro', 'type' => 'hidden'));
                ?>
            </div>

             <div class="form-group col-md-6">
                <?php
                echo('Favor registrar fecha y lugar de la proxima convocatoria');
                echo $this->Form->input('referente_id');
            ?>
            </div>

            <div class="form-group col-md-6">
                <?php
                echo('Favor registrar fecha y lugar de la proxima convocatoria');
                echo $this->Form->input('fecha_actualizado');
            ?>
            </div>

           
        </div>









	
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Producto.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Producto.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Productos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Actividades'), array('controller' => 'actividades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actividad'), array('controller' => 'actividades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actas'), array('controller' => 'actas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Acta'), array('controller' => 'actas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Responsables'), array('controller' => 'responsables', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Responsable'), array('controller' => 'responsables', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Acta View Tests'), array('controller' => 'acta_view_tests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Acta View Test'), array('controller' => 'acta_view_tests', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actividades View Tests'), array('controller' => 'actividades_view_tests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actividades View Test'), array('controller' => 'actividades_view_tests', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Plsesiones'), array('controller' => 'plsesiones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Plsesion'), array('controller' => 'plsesiones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Productosactividades'), array('controller' => 'productosactividades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Productosactividad'), array('controller' => 'productosactividades', 'action' => 'add')); ?> </li>
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