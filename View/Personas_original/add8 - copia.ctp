<?php $this->layout = 'formulario'?>
<div class="personas form">
<?php echo $this->Form->create('Persona'); ?>
	<fieldset>
		<legend><?php echo __('Agregar Actividad a Participante '); ?></legend>
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
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
    
    

		<li><?php echo $this->Html->link(__('List Personas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Tipos'), array('controller' => 'tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo'), array('controller' => 'tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Generos'), array('controller' => 'generos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Genero'), array('controller' => 'generos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Grupos'), array('controller' => 'grupos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupo'), array('controller' => 'grupos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ubicaciones'), array('controller' => 'ubicaciones', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('List Ubicaciones'), array('controller' => 'ubicaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ubicacion'), array('controller' => 'ubicaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Profesiones'), array('controller' => 'profesiones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Profesion'), array('controller' => 'profesiones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Equipos'), array('controller' => 'equipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipo'), array('controller' => 'equipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Preferencias'), array('controller' => 'preferencias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Preferencia'), array('controller' => 'preferencias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Etnias'), array('controller' => 'etnias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Etnia'), array('controller' => 'etnias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Victimas'), array('controller' => 'victimas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Victima'), array('controller' => 'victimas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estudios'), array('controller' => 'estudios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estudio'), array('controller' => 'estudios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Regimenes'), array('controller' => 'regimenes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Regimen'), array('controller' => 'regimenes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Aseguradoras'), array('controller' => 'aseguradoras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aseguradora'), array('controller' => 'aseguradoras', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Discapacidades'), array('controller' => 'discapacidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Discapacidad'), array('controller' => 'discapacidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actividades'), array('controller' => 'actividades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actividad'), array('controller' => 'actividades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Entidades'), array('controller' => 'entidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entidad'), array('controller' => 'entidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personaactividades'), array('controller' => 'personaactividades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Personaactividad'), array('controller' => 'personaactividades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
		
		<li> <a href="http://www.procuraduria.gov.co/portal/antecedentes.html" target="_blank">Procuraduria</a></li>
	</ul>
</div>
