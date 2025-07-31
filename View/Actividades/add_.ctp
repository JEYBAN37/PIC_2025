<?php $this->layout = 'formulario'?>
<div class="personas form">

<?php echo $this->Form->create('Persona'); ?>
	<fieldset>
		<legend><?php echo __('Registrar Nueva Actividad'); ?></legend>
        <ul>
	
	
	
	<li> <?php echo $this->Html->link(__('Registre actividad'), array('action' => 'add1'))?> </li> <br />

	<li> <?php echo $this->Html->link(__('Registro de acta'), array('controller'=>'actas','action' => 'add'))?> </li> <br />
    
	<li> <?php echo $this->Html->link(__('Soportes anexo 2017'), array('controller'=>'productosactividades','action' => 'nuebus'))?> </li> <br />

	<li> <?php echo $this->Html->link(__('Cargar soportes'), array('controller'=>'productosactividades','action' => 'index'))?> </li> 

	<!--li> <?php echo $this->Html->link(__('Registrar canalización'), array('controller'=>'canalizaciones','action' => 'nuebus'))?> </li!--> 
    


     
     
     
	
    </ul>
	</fieldset>

</div>

<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>

		<li> <a  href="../users/bienvenida"	 >Inicio</a></li>

        <li><?php echo $this->Html->link(__('Regresar'), array('action' => 'nuebus')); ?></li>
    
    	<li><?php echo $this->Html->link(__('Actividades'), array('controller' => 'actividades', 'action' => 'nuebus')); ?> </li>
		<li><?php echo $this->Html->link(__('Actas'), array('controller' => 'actas', 'action' => 'nuebus')); ?> </li>
		
		

		
		
	</ul>
</div>


