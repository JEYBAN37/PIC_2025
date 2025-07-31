<?php $this->layout = 'formulario'?>
<div class="personas form">

<?php echo $this->Form->create('Persona'); ?>
	
	</fieldset>

</div>

<div class="actions">
	<h3><?php echo __('Consultas'); ?></h3>
	<ul>

		<li> <a  href="../users/bienvenida"	 >Inicio</a></li>

        	<li><?php echo $this->Html->link(__('Regresar'), array('action' => 'nuebus')); ?></li>    
    		<li><?php echo $this->Html->link(__('Lista de Actividades'), array('controller' => 'actividades', 'action' => 'nuebus')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de Actas'), array('controller' => 'actas', 'action' => 'nuebus')); ?> </li>
		<li><?php echo $this->Html->link(__('Canalizaciones'), array('controller' => 'canalizaciones', 'action' => 'nuebus')); ?> </li>
		<li><?php echo $this->Html->link(__('Planes de sesión 2018'), array('controller' => 'plsesiones', 'action' => 'nuebus')); ?> </li>
		<li><?php echo $this->Html->link(__('Planes de sesión 2017'), array('controller' => 'planes', 'action' => 'nuebus')); ?> </li>
		<li><?php echo $this->Html->link(__('Soportes A_Técnico 2018'), array('controller' => 'productosactividades', 'action' => 'nuebus')); ?> </li>

		
		

		
		
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

