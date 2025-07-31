<div class="sociales form">
<?php echo $this->Form->create('Sociale'); ?>
	<fieldset>
		<legend><?php echo __('Editar agentes Sociales'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('fecha');
		echo $this->Form->input('usuario_id',array('label'=>'Nombre de contanto'));
		echo ('Datos de la organización');
		echo $this->Form->input('nombre_org',array('label'=>'Nombre de la organización'));
		echo $this->Form->input('comuna_id');
		echo $this->Form->input('corregimiento');
		echo $this->Form->input('barrio_vereda',array('label'=>'Barrio/vereda'));
		echo $this->Form->input('direccion',array('label'=>'Direccion de la organización'));
		echo $this->Form->input('telefono');
		echo $this->Form->input('correo');
		echo $this->Form->input('web',array('label'=>'Portal web'));
		echo $this->Form->input('nivel',array('label'=>'Nivel Administrativo',
            'options' => array('municipal' => 'Municipal', 'departamental' => 'Departamental', 'nacional' => 'Nacional', 'internacional' => 'Internacional')));
		echo $this->Form->input('repersentante',array('label'=>'Nombre del repesentante'));
		echo $this->Form->input('poblacion',array('label'=>'Población  en la que interviene'));
		echo $this->Form->input('objetivo');
		echo $this->Form->input('sociedad_id',array('label'=>'Tipo de sociedad'));
		echo $this->Form->input('registro');
	
	?>
	</fieldset>

</div>
<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>

		
		<li><?php echo $this->Html->link(__('Agentes Sociales'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Lista Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		
	</ul>
</div>
