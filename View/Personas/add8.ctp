<?php $this->layout = 'formulario'?>
<div class="personas form">
<?php echo $this->Form->create('Persona'); ?>
	<fieldset>
		<legend><?php echo __('Asociar Actividad a Participante '); ?></legend>
	<?php

    echo $this->Form->input('nombres');
		echo $this->Form->input('apellidos');
	
		$option = array ('' => 'Elegir','C.C' => 'C.C', 'R.C' => 'R.C', 'C.E' => 'C.E', 'T.I' => 'T.I', 'PAS' => 'PAS');
		echo $this->Form->input('tipoidoc', array('label'=> 'Tipo de documento', 'type' => 'select', 'options' => $option));
		
		echo $this->Form->input('identificacion', array('label' => 'Nùmero de documento'));
			 
		echo ('Asocie este usuario con una actividad ');			
		
		echo $this->Form->input('actividad_id', array('label' => 'Actividades registradas', 'type'=>'select','multiple'=> 'checkbox'));

		echo $this->Form->input('fecharegistro');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>
    
    

		<li><?php echo $this->Html->link(__('Lista Personas'), array('action' => 'index')); ?></li>
		
		<li><?php echo $this->Html->link(__('Lista Generos'), array('controller' => 'generos', 'action' => 'index')); ?> </li>

		<li><?php echo $this->Html->link(__('Lista Actividades'), array('controller' => 'actividades', 'action' => 'index')); ?> </li>

		<li><?php echo $this->Html->link(__('Lista Poblaciones'), array('controller' => 'poblaciones', 'action' => 'index')); ?></li>

		<li><?php echo $this->Html->link(__('Nuevo Genero'), array('controller' => 'generos', 'action' => 'add')); ?> </li>
		
		<li><?php echo $this->Html->link(__('Nuevo Grupo'), array('controller' => 'grupos', 'action' => 'add')); ?> </li>
		
		<li><?php echo $this->Html->link(__('Nueva Ubicacion'), array('controller' => 'ubicaciones', 'action' => 'add')); ?> </li>
		
		<li><?php echo $this->Html->link(__('Nueva Profesion'), array('controller' => 'profesiones', 'action' => 'add')); ?> </li>
		
		<li><?php echo $this->Html->link(__('Nuevo Equipo'), array('controller' => 'equipos', 'action' => 'add')); ?> </li>
		
		<li><?php echo $this->Html->link(__('Nueva Preferencia'), array('controller' => 'preferencias', 'action' => 'add')); ?> </li>
		
		<li><?php echo $this->Html->link(__('Nueva Etnia'), array('controller' => 'etnias', 'action' => 'add')); ?> </li>
		
		<li><?php echo $this->Html->link(__('Nueva Victima'), array('controller' => 'victimas', 'action' => 'add')); ?> </li>
		
		<li><?php echo $this->Html->link(__('Nuevo Estudio'), array('controller' => 'estudios', 'action' => 'add')); ?> </li>
		
		<li><?php echo $this->Html->link(__('Nueva Aseguradora'), array('controller' => 'aseguradoras', 'action' => 'add')); ?> </li>
		
		<li><?php echo $this->Html->link(__('Nueva Discapacidad'), array('controller' => 'discapacidades', 'action' => 'add')); ?> </li>
		
		<li><?php echo $this->Html->link(__('Nueva Actividad'), array('controller' => 'actividades', 'action' => 'add')); ?> </li>
		
		<li><?php echo $this->Html->link(__('Nueva Entidad'), array('controller' => 'entidades', 'action' => 'add')); ?> </li>
		
		<li><?php echo $this->Html->link(__('Nueva Persona actividad'), array('controller' => 'personasActividades', 'action' => 'add')); ?> </li>
		
		<li> <a href="http://www.procuraduria.gov.co/portal/antecedentes.html" target="_blank">Procuraduria</a></li>
		
	</ul>
</div>
